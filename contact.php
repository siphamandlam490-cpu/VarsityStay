<?php

// ======================================
// CONTACT FORM PHP PROCESSING
// ======================================

// Store validation errors
$errors = [];

// Success message
$successMessage = "";


// Default values for the form
$name = "";
$email = "";
$phone = "";
$subject = "";
$message = "";


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get and clean the submitted values
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");


    // ======================================
    // VALIDATE FULL NAME
    // ======================================

    if (strlen($name) < 3) {

        $errors[] =
            "Full name must contain at least 3 characters.";

    }


    // ======================================
    // VALIDATE EMAIL ADDRESS
    // ======================================

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] =
            "Please enter a valid email address.";

    }


    // ======================================
    // VALIDATE PHONE NUMBER
    // Phone number is optional
    // ======================================

    if (
        $phone !== "" &&
        !preg_match('/^[0-9+\s-]{7,15}$/', $phone)
    ) {

        $errors[] =
            "Please enter a valid phone number.";

    }


    // ======================================
    // VALIDATE ENQUIRY TYPE
    // ======================================

    $allowedSubjects = [
        "Accommodation",
        "Booking",
        "General",
        "Support"
    ];


    if (!in_array($subject, $allowedSubjects)) {

        $errors[] =
            "Please select a valid enquiry type.";

    }


    // ======================================
    // VALIDATE MESSAGE
    // ======================================

    if (strlen($message) < 10) {

        $errors[] =
            "Message must contain at least 10 characters.";

    }


    // ======================================
    // SUCCESS
    // ======================================

    if (empty($errors)) {

        $successMessage =
            "Thank you! Your message has been received successfully.";

        // Clear the form after successful submission
        $name = "";
        $email = "";
        $phone = "";
        $subject = "";
        $message = "";

    }

}


// Include the shared website header
include 'includes/header.php';

?>

<main>

    <!-- ==============================
         CONTACT PAGE HERO
    ============================== -->
    <section class="page-hero">
        <div class="container">

            <h1>Contact VarsityStay</h1>

            <p>
                Have a question about student accommodation?
                Send us a message and we will assist you.
            </p>

        </div>
    </section>


    <!-- ==============================
         CONTACT SECTION
    ============================== -->
    <section class="contact-section section">

        <div class="container contact-grid">


            <!-- CONTACT INFORMATION -->
            <div class="contact-info">

                <h2>Get In Touch</h2>

                <p>
                    If you need help finding accommodation,
                    making a booking or using VarsityStay,
                    feel free to contact us.
                </p>


                <div class="contact-item">

                    <h3>📍 Location</h3>

                    <p>
                        Vanderbijlpark, Gauteng
                    </p>

                </div>


                <div class="contact-item">

                    <h3>📞 Phone</h3>

                    <p>
                        016 000 0000
                    </p>

                </div>


                <div class="contact-item">

                    <h3>✉ Email</h3>

                    <p>
                        <a href="mailto:info@varsitystay.co.za">
                            info@varsitystay.co.za
                        </a>
                    </p>

                </div>

            </div>


            <!-- ==============================
                 CONTACT FORM
            ============================== -->
            <div class="contact-form-container">

                <h2>Send Us a Message</h2>

<!-- Display successful submission message -->
<?php if ($successMessage !== ""): ?>

    <div class="form-success">

        <?php
        echo htmlspecialchars($successMessage);
        ?>

    </div>

<?php endif; ?>


<!-- Display PHP validation errors -->
<?php if (!empty($errors)): ?>

    <div class="form-errors">

        <strong>Please correct the following:</strong>

        <ul>

            <?php foreach ($errors as $error): ?>

                <li>
                    <?php
                    echo htmlspecialchars($error);
                    ?>
                </li>

            <?php endforeach; ?>

        </ul>

    </div>

<?php endif; ?>





                <form
                    id="contactForm"
                    action="contact.php"
                    method="POST"
                >

                    <!-- Full Name -->
                    <div class="form-group">

                        <label for="name">
                            Full Name
                        </label>

                        <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your full name"
                                value="<?php echo htmlspecialchars($name); ?>"
                                required
                        >


                    <!-- Email Address -->
                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                      <input
   type="email"
    id="email"
    name="email"
    placeholder="Enter your email address"
    value="<?php echo htmlspecialchars($email); ?>"
    required
>

                    </div>


                    <!-- Phone Number -->
                    <div class="form-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <input
    type="tel"
    id="phone"
    name="phone"
    placeholder="Enter your phone number"
    value="<?php echo htmlspecialchars($phone); ?>"
>

                    </div>


                    <!-- Enquiry Type -->
                    <div class="form-group">

                        <label for="subject">
                            Enquiry Type
                        </label>

                        <select
                            id="subject"
                            name="subject"
                            required
                        >

                            <option value="">
                                Select an enquiry
                            </option>

                            <option value="Accommodation">
                                Accommodation
                            </option>

                            <option value="Booking">
                                Booking
                            </option>

                            <option value="General">
                                General Enquiry
                            </option>

                            <option value="Support">
                                Website Support
                            </option>

                        </select>

                    </div>


                    <!-- Message -->
                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                       <textarea
    id="message"
    name="message"
    rows="6"
    placeholder="Write your message here..."
    required
><?php echo htmlspecialchars($message); ?></textarea>


                    </div>


                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="btn primary-btn"
                    >
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </section>

</main>

<?php
// Include the shared website footer
include 'includes/footer.php';
?>