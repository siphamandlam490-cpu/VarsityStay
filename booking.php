<?php

// ======================================
// BOOKING FORM PHP PROCESSING
// ======================================

// Store validation errors
$bookingErrors = [];

// Store the success message
$bookingSuccess = "";


// Default form values
$bookingName = "";
$bookingEmail = "";
$bookingPhone = "";
$selectedRoom = "";
$moveDate = "";
$bookingMessage = "";


// ======================================
// GET ROOM FROM ACCOMMODATION PAGE
// ======================================

// If the user clicked "Book Now" from accommodation.php,
// get the room name from the URL.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    $selectedRoom = trim($_GET["room"] ?? "");

}


// ======================================
// PROCESS BOOKING FORM
// ======================================

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get information entered by the user
    $bookingName =
        trim($_POST["bookingName"] ?? "");

    $bookingEmail =
        trim($_POST["bookingEmail"] ?? "");

    $bookingPhone =
        trim($_POST["bookingPhone"] ?? "");

    $selectedRoom =
        trim($_POST["room"] ?? "");

    $moveDate =
        trim($_POST["moveDate"] ?? "");

    $bookingMessage =
        trim($_POST["bookingMessage"] ?? "");


    // ======================================
    // VALIDATE FULL NAME
    // ======================================

    if (strlen($bookingName) < 3) {

        $bookingErrors[] =
            "Full name must contain at least 3 characters.";

    }


    // ======================================
    // VALIDATE EMAIL ADDRESS
    // ======================================

    if (
        !filter_var(
            $bookingEmail,
            FILTER_VALIDATE_EMAIL
        )
    ) {

        $bookingErrors[] =
            "Please enter a valid email address.";

    }


    // ======================================
    // VALIDATE PHONE NUMBER
    // ======================================

    if (
        !preg_match(
            '/^[0-9+\s-]{7,15}$/',
            $bookingPhone
        )
    ) {

        $bookingErrors[] =
            "Please enter a valid phone number.";

    }


    // ======================================
    // VALIDATE ACCOMMODATION
    // ======================================

    $allowedRooms = [
        "Campus View Residence",
        "Student Haven",
        "Varsity Lodge",
        "Student Corner",
        "Blue Sky Residence",
        "Campus Court"
    ];


    if (
        !in_array(
            $selectedRoom,
            $allowedRooms,
            true
        )
    ) {

        $bookingErrors[] =
            "Please select valid accommodation.";

    }


    // ======================================
    // VALIDATE MOVE-IN DATE
    // ======================================

    if ($moveDate === "") {

        $bookingErrors[] =
            "Please select your preferred move-in date.";

    }


    // ======================================
    // SUCCESSFUL BOOKING ENQUIRY
    // ======================================

    if (empty($bookingErrors)) {

        $bookingSuccess =
            "Your booking enquiry has been submitted successfully!";

        // Clear form fields after success
        $bookingName = "";
        $bookingEmail = "";
        $bookingPhone = "";
        $selectedRoom = "";
        $moveDate = "";
        $bookingMessage = "";

    }

}


// Load the shared website header
include 'includes/header.php';

?>

<main>

    <!-- ==============================
         BOOKING PAGE HERO
    ============================== -->
    <section class="page-hero">

        <div class="container">

            <h1>Book Your Accommodation</h1>

            <p>
                Complete the booking enquiry form below
                and VarsityStay will assist you.
            </p>

        </div>

    </section>


    <!-- ==============================
         BOOKING SECTION
    ============================== -->
    <section class="booking-section section">

        <div class="container booking-grid">


            <!-- BOOKING INFORMATION -->
            <div class="booking-info">

                <h2>Booking Information</h2>

                <p>
                    Complete the form with your details.
                    Please make sure the information entered
                    is correct before submitting your enquiry.
                </p>


                <div class="booking-note">

                    <h3>📌 Important</h3>

                    <p>
                        Submitting this form sends a booking enquiry.
                        It does not automatically confirm accommodation.
                    </p>

                </div>


                <div class="booking-note">

                    <h3>🏠 Accommodation</h3>

                    <p>
                        Select the residence or room
                        you are interested in.
                    </p>

                </div>

            </div>


            <!-- ==============================
                 BOOKING FORM
            ============================== -->
            <div class="booking-form-container">

                <h2>Booking Enquiry</h2>

                <!-- ======================================
     BOOKING SUCCESS MESSAGE
======================================= -->

<?php if ($bookingSuccess !== ""): ?>

    <div class="form-success">

        <?php
        echo htmlspecialchars($bookingSuccess);
        ?>

    </div>

<?php endif; ?>


<!-- ======================================
     BOOKING ERROR MESSAGES
======================================= -->

<?php if (!empty($bookingErrors)): ?>

    <div class="form-errors">

        <strong>
            Please correct the following:
        </strong>

        <ul>

            <?php foreach ($bookingErrors as $error): ?>

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
                    id="bookingForm"
                    action="booking.php"
                    method="POST"
                >

                    <!-- Full Name -->
                    <div class="form-group">

                        <label for="bookingName">
                            Full Name
                        </label>

                       <input
    type="text"
    id="bookingName"
    name="bookingName"
    placeholder="Enter your full name"
    value="<?php echo htmlspecialchars($bookingName); ?>"
    required
>
                    </div>


                    <!-- Email -->
                    <div class="form-group">

                        <label for="bookingEmail">
                            Email Address
                        </label>

                       <input
    type="email"
    id="bookingEmail"
    name="bookingEmail"
    placeholder="Enter your email address"
    value="<?php echo htmlspecialchars($bookingEmail); ?>"
    required
>

                    </div>


                    <!-- Phone -->
                    <div class="form-group">

                        <label for="bookingPhone">
                            Phone Number
                        </label>

                       <input
    type="tel"
    id="bookingPhone"
    name="bookingPhone"
    placeholder="Enter your phone number"
    value="<?php echo htmlspecialchars($bookingPhone); ?>"
    required
>

                    </div>


                    <!-- Accommodation -->
                    <div class="form-group">

                        <label for="room">
                            Accommodation
                        </label>

                        <select
                            id="room"
                            name="room"
                            required
                        >

                            <option value="">
                                Select accommodation
                            </option>

                            <option
                                value="Campus View Residence"
                                <?php
                                if ($selectedRoom === "Campus View Residence") {
                                    echo "selected";
                                }
                                ?>
                            >
                                Campus View Residence
                            </option>

                            <option
                                value="Student Haven"
                                <?php
                                if ($selectedRoom === "Student Haven") {
                                    echo "selected";
                                }
                                ?>
                            >
                                Student Haven
                            </option>

                            <option
                                value="Varsity Lodge"
                                <?php
                                if ($selectedRoom === "Varsity Lodge") {
                                    echo "selected";
                                }
                                ?>
                            >
                                Varsity Lodge
                            </option>

                            <option
                                value="Student Corner"
                                <?php
                                if ($selectedRoom === "Student Corner") {
                                    echo "selected";
                                }
                                ?>
                            >
                                Student Corner
                            </option>

                            <option
                                value="Blue Sky Residence"
                                <?php
                                if ($selectedRoom === "Blue Sky Residence") {
                                    echo "selected";
                                }
                                ?>
                            >
                                Blue Sky Residence
                            </option>

                            <option
                                value="Campus Court"
                                <?php
                                if ($selectedRoom === "Campus Court") {
                                    echo "selected";
                                }
                                ?>
                            >
                                Campus Court
                            </option>

                        </select>

                    </div>


                    <!-- Move-in Date -->
                    <div class="form-group">

                        <label for="moveDate">
                            Preferred Move-in Date
                        </label>

                       <input
    type="date"
    id="moveDate"
    name="moveDate"
    value="<?php echo htmlspecialchars($moveDate); ?>"
    required
>

                    </div>


                    <!-- Additional Message -->
                    <div class="form-group">

                        <label for="bookingMessage">
                            Additional Message
                        </label>

                       <textarea
    id="bookingMessage"
    name="bookingMessage"
    rows="5"
    placeholder="Add any additional information..."
><?php echo htmlspecialchars($bookingMessage); ?></textarea>

                    </div>


                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="btn primary-btn"
                    >
                        Submit Booking Enquiry
                    </button>

                </form>

            </div>

        </div>

    </section>

</main>

<?php

// Load the shared footer
include 'includes/footer.php';

?>