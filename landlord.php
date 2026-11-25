<?php
session_start();
require_once __DIR__ . '/includes/database.php';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$error = '';
$success = '';
$editing = null;
$isPost = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($isPost && !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
    $error = 'Your session expired. Please try again.';
} elseif ($isPost) {
    $action = $_POST['action'] ?? '';
    try {
        if ($action === 'register') {
            $name = trim($_POST['name'] ?? '');
            $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
            $password = $_POST['password'] ?? '';
            if (strlen($name) < 2 || !$email || strlen($password) < 8) {
                throw new RuntimeException('Enter your name, a valid email, and a password of at least 8 characters.');
            }
            $stmt = $db->prepare('INSERT INTO landlords (name, email, password_hash) VALUES (?, ?, ?)');
            $stmt->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]);
            session_regenerate_id(true);
            $_SESSION['landlord_id'] = (int)$db->lastInsertId();
            $_SESSION['landlord_name'] = $name;
        } elseif ($action === 'login') {
            $stmt = $db->prepare('SELECT * FROM landlords WHERE email = ?');
            $stmt->execute([trim($_POST['email'] ?? '')]);
            $landlord = $stmt->fetch();
            if (!$landlord || !password_verify($_POST['password'] ?? '', $landlord['password_hash'])) {
                throw new RuntimeException('Email or password was incorrect.');
            }
            session_regenerate_id(true);
            $_SESSION['landlord_id'] = (int)$landlord['id'];
            $_SESSION['landlord_name'] = $landlord['name'];
        } elseif ($action === 'logout') {
            $_SESSION = [];
            session_regenerate_id(true);
        } elseif (empty($_SESSION['landlord_id'])) {
            throw new RuntimeException('Please sign in to continue.');
        } elseif ($action === 'save_accommodation') {
            $id = (int)($_POST['id'] ?? 0);
            $title = trim($_POST['title'] ?? '');
            $location = trim($_POST['location'] ?? '');
            $roomType = $_POST['room_type'] ?? '';
            $price = filter_var($_POST['price'] ?? null, FILTER_VALIDATE_FLOAT);
            $description = trim($_POST['description'] ?? '');
            if (strlen($title) < 3 || strlen($location) < 2 || !in_array($roomType, ['single', 'sharing'], true) || $price === false || $price <= 0 || strlen($description) < 10) {
                throw new RuntimeException('Complete all listing fields. Price must be positive and description at least 10 characters.');
            }
            if ($id) {
                $stmt = $db->prepare('UPDATE accommodations SET title=?, location=?, room_type=?, price=?, description=? WHERE id=? AND landlord_id=?');
                $stmt->execute([$title, $location, $roomType, $price, $description, $id, $_SESSION['landlord_id']]);
                if (!$stmt->rowCount()) {
                    $check = $db->prepare('SELECT id FROM accommodations WHERE id=? AND landlord_id=?');
                    $check->execute([$id, $_SESSION['landlord_id']]);
                    if (!$check->fetch()) throw new RuntimeException('Listing not found.');
                }
                $success = 'Accommodation updated.';
            } else {
                $stmt = $db->prepare('INSERT INTO accommodations (landlord_id,title,location,room_type,price,description) VALUES (?,?,?,?,?,?)');
                $stmt->execute([$_SESSION['landlord_id'], $title, $location, $roomType, $price, $description]);
                $success = 'Accommodation added.';
            }
        } elseif ($action === 'delete_accommodation') {
            $stmt = $db->prepare('DELETE FROM accommodations WHERE id=? AND landlord_id=?');
            $stmt->execute([(int)($_POST['id'] ?? 0), $_SESSION['landlord_id']]);
            $success = 'Accommodation removed.';
        } elseif ($action === 'booking_status') {
            $stmt = $db->prepare("UPDATE bookings SET status=? WHERE id=? AND status='pending' AND accommodation_id IN (SELECT id FROM accommodations WHERE landlord_id=?)");
            $stmt->execute([($_POST['status'] ?? '') === 'accepted' ? 'accepted' : 'declined', (int)($_POST['id'] ?? 0), $_SESSION['landlord_id']]);
            $success = $stmt->rowCount() ? 'Booking response saved.' : 'This booking has already been handled.';
        }
    } catch (PDOException $e) {
        $error = $e->getCode() === '23000' ? 'An account already uses that email address.' : 'Unable to save your changes. Please try again.';
    } catch (RuntimeException $e) {
        $error = $e->getMessage();
    }
}

$loggedIn = !empty($_SESSION['landlord_id']);
if ($loggedIn) {
    if (isset($_GET['edit'])) {
        $stmt = $db->prepare('SELECT * FROM accommodations WHERE id=? AND landlord_id=?');
        $stmt->execute([(int)$_GET['edit'], $_SESSION['landlord_id']]);
        $editing = $stmt->fetch() ?: null;
    }
    $stmt = $db->prepare('SELECT * FROM accommodations WHERE landlord_id=? ORDER BY created_at DESC');
    $stmt->execute([$_SESSION['landlord_id']]);
    $listings = $stmt->fetchAll();
    $stmt = $db->prepare("SELECT b.*, a.title AS accommodation_title FROM bookings b JOIN accommodations a ON a.id=b.accommodation_id WHERE a.landlord_id=? ORDER BY CASE b.status WHEN 'pending' THEN 0 ELSE 1 END, b.created_at DESC");
    $stmt->execute([$_SESSION['landlord_id']]);
    $bookings = $stmt->fetchAll();
}
function h($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
include __DIR__ . '/includes/header.php';
?>
<main class="landlord-page">
<section class="page-hero"><div class="container"><h1>Landlord dashboard</h1><p>Manage your student accommodation and booking requests.</p></div></section>
<section class="section"><div class="container landlord-container">
<?php if ($error): ?><div class="form-errors" role="alert"><?= h($error) ?></div><?php endif; ?>
<?php if ($success): ?><div class="form-success" role="status"><?= h($success) ?></div><?php endif; ?>
<?php if (!$loggedIn): ?>
<div class="landlord-auth-grid">
<form class="landlord-panel" method="post"><h2>Landlord sign in</h2><input type="hidden" name="csrf_token" value="<?= h($_SESSION['csrf_token']) ?>"><input type="hidden" name="action" value="login"><label>Email<input type="email" name="email" required autocomplete="email"></label><label>Password<input type="password" name="password" required autocomplete="current-password"></label><button class="btn btn-primary" type="submit">Sign in</button></form>
<form class="landlord-panel" method="post"><h2>Create landlord account</h2><input type="hidden" name="csrf_token" value="<?= h($_SESSION['csrf_token']) ?>"><input type="hidden" name="action" value="register"><label>Your name<input name="name" required minlength="2" autocomplete="name"></label><label>Email<input type="email" name="email" required autocomplete="email"></label><label>Password (at least 8 characters)<input type="password" name="password" required minlength="8" autocomplete="new-password"></label><button class="btn btn-primary" type="submit">Create account</button></form>
</div>
<?php else: ?>
<div class="landlord-heading"><div><h2>Welcome, <?= h($_SESSION['landlord_name']) ?></h2><p>Your listings and student requests are below.</p></div><form method="post"><input type="hidden" name="csrf_token" value="<?= h($_SESSION['csrf_token']) ?>"><input type="hidden" name="action" value="logout"><button class="btn btn-outline" type="submit">Sign out</button></form></div>
<div class="landlord-panel" id="listing-form"><h2><?= $editing ? 'Update accommodation' : 'Add accommodation' ?></h2><form class="landlord-form-grid" method="post"><input type="hidden" name="csrf_token" value="<?= h($_SESSION['csrf_token']) ?>"><input type="hidden" name="action" value="save_accommodation"><input type="hidden" name="id" value="<?= h($editing['id'] ?? '') ?>"><label>Accommodation name<input name="title" required minlength="3" value="<?= h($editing['title'] ?? '') ?>"></label><label>Location<input name="location" required value="<?= h($editing['location'] ?? '') ?>" placeholder="Town or campus area"></label><label>Room type<select name="room_type"><option value="single" <?= ($editing['room_type'] ?? '') === 'single' ? 'selected' : '' ?>>Single room</option><option value="sharing" <?= ($editing['room_type'] ?? '') === 'sharing' ? 'selected' : '' ?>>Sharing room</option></select></label><label>Monthly rent (R)<input name="price" type="number" min="1" step="0.01" required value="<?= h($editing['price'] ?? '') ?>"></label><label class="landlord-full">Description<textarea name="description" required minlength="10" rows="4"><?= h($editing['description'] ?? '') ?></textarea></label><div class="landlord-full"><button class="btn btn-primary" type="submit"><?= $editing ? 'Save changes' : 'Add listing' ?></button> <?php if ($editing): ?><a class="btn btn-outline" href="landlord.php#listing-form">Cancel</a><?php endif; ?></div></form></div>
<div class="landlord-panel"><h2>Your accommodations <span class="landlord-count"><?= count($listings) ?></span></h2><?php if (!$listings): ?><p>No accommodations yet. Add your first listing above.</p><?php else: ?><div class="landlord-table-wrap"><table class="landlord-table"><thead><tr><th>Accommodation</th><th>Location</th><th>Room</th><th>Rent/month</th><th>Actions</th></tr></thead><tbody><?php foreach ($listings as $item): ?><tr><td><?= h($item['title']) ?></td><td><?= h($item['location']) ?></td><td><?= h(ucfirst($item['room_type'])) ?></td><td>R<?= number_format((float)$item['price'], 2) ?></td><td class="landlord-actions"><a class="btn btn-outline" href="landlord.php?edit=<?= (int)$item['id'] ?>#listing-form">Edit</a><form method="post" onsubmit="return confirm('Remove this accommodation and its booking requests?')"><input type="hidden" name="csrf_token" value="<?= h($_SESSION['csrf_token']) ?>"><input type="hidden" name="action" value="delete_accommodation"><input type="hidden" name="id" value="<?= (int)$item['id'] ?>"><button class="btn btn-danger" type="submit">Delete</button></form></td></tr><?php endforeach; ?></tbody></table></div><?php endif; ?></div>
<div class="landlord-panel"><h2>Student bookings <span class="landlord-count"><?= count($bookings) ?></span></h2><?php if (!$bookings): ?><p>Booking requests for your accommodations will appear here.</p><?php else: ?><div class="landlord-booking-list"><?php foreach ($bookings as $b): ?><article class="landlord-booking"><div class="landlord-booking-top"><div><h3><?= h($b['student_name']) ?></h3><p><?= h($b['accommodation_title']) ?> · Move-in <?= h($b['move_date']) ?></p></div><span class="booking-status status-<?= h($b['status']) ?>"><?= h(ucfirst($b['status'])) ?></span></div><p><a href="mailto:<?= h($b['student_email']) ?>"><?= h($b['student_email']) ?></a> · <?= h($b['student_phone']) ?></p><?php if ($b['message']): ?><p><?= nl2br(h($b['message'])) ?></p><?php endif; ?><?php if ($b['status'] === 'pending'): ?><div class="landlord-actions"><form method="post"><input type="hidden" name="csrf_token" value="<?= h($_SESSION['csrf_token']) ?>"><input type="hidden" name="action" value="booking_status"><input type="hidden" name="id" value="<?= (int)$b['id'] ?>"><input type="hidden" name="status" value="accepted"><button class="btn btn-primary" type="submit">Accept booking</button></form><form method="post"><input type="hidden" name="csrf_token" value="<?= h($_SESSION['csrf_token']) ?>"><input type="hidden" name="action" value="booking_status"><input type="hidden" name="id" value="<?= (int)$b['id'] ?>"><input type="hidden" name="status" value="declined"><button class="btn btn-outline" type="submit">Decline</button></form></div><?php endif; ?></article><?php endforeach; ?></div><?php endif; ?></div>
<?php endif; ?></div></section></main>
<?php include __DIR__ . '/includes/footer.php'; ?>
