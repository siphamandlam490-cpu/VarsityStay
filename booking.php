<?php

// ======================================
// BOOKING FORM PHP PROCESSING
// ======================================

// Store validation errors
$bookingErrors = [];

// Store the success message
$bookingSuccess = "";

// ======================================
// BOOKING FORM LANGUAGE
// ======================================

// English is the default language
$language = $_POST["language"] ?? "en";

// Only allow supported languages
if (!in_array($language, ["en", "st"], true)) {
    $language = "en";
}

// ======================================
// BOOKING PHP TRANSLATIONS
// ======================================

$bookingTranslations = [

    // English
    "en" => [

        "nameError" =>
            "Full name must contain at least 3 characters.",

        "emailError" =>
            "Please enter a valid email address.",

        "phoneError" =>
            "Please enter a valid phone number.",

        "roomError" =>
            "Please select valid accommodation.",

        "dateError" =>
            "Please select your preferred move-in date.",

        "success" =>
            "Your booking enquiry has been submitted successfully!",

        "errorHeading" =>
            "Please correct the following:"
    ],


    // Sesotho
    "st" => [

        "nameError" =>
            "Lebitso le feletseng le tlameha ho ba le bonyane litlhaku tse 3.",

        "emailError" =>
            "Ka kopo kenya aterese e nepahetseng ea imeile.",

        "phoneError" =>
            "Ka kopo kenya nomoro e nepahetseng ea mohala.",

        "roomError" =>
            "Ka kopo khetha bolulo bo nepahetseng.",

        "dateError" =>
            "Ka kopo khetha letsatsi leo u ratang ho falla ka lona.",

        "success" =>
            "Potso ea hao ea pehelo e rometsoe ka katleho!",

        "errorHeading" =>
            "Ka kopo lokisa tse latelang:"
    ]

];


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
    $bookingTranslations[$language]["nameError"];

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
    $bookingTranslations[$language]["emailError"];

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
    $bookingTranslations[$language]["phoneError"];

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
    $bookingTranslations[$language]["roomError"];

    }


    // ======================================
    // VALIDATE MOVE-IN DATE
    // ======================================

    if ($moveDate === "") {

       $bookingErrors[] =
    $bookingTranslations[$language]["dateError"];

    }


    // ======================================
    // SUCCESSFUL BOOKING ENQUIRY
    // ======================================

    if (empty($bookingErrors)) {

      $bookingSuccess =
    $bookingTranslations[$language]["success"];

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

   <!-- ======================================
     BOOKING PAGE HERO
======================================= -->
<section class="page-hero">

    <div class="container">

        <h1 data-i18n="bookingHeroTitle">
            Book Your Accommodation
        </h1>

        <p data-i18n="bookingHeroText">
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

    <h2 data-i18n="bookingInfoTitle">
        Booking Information
    </h2>

    <p data-i18n="bookingInfoText">
        Complete the form with your details.
        Please make sure the information entered
        is correct before submitting your enquiry.
    </p>


    <div class="booking-note">

        <h3>
            📌 <span data-i18n="bookingImportantTitle">
                Important
            </span>
        </h3>

        <p data-i18n="bookingImportantText">
            Submitting this form sends a booking enquiry.
            It does not automatically confirm accommodation.
        </p>

    </div>


    <div class="booking-note">

        <h3>
            🏠 <span data-i18n="bookingAccommodationTitle">
                Accommodation
            </span>
        </h3>

        <p data-i18n="bookingAccommodationText">
            Select the residence or room
            you are interested in.
        </p>

    </div>

</div>

            <!-- ==============================
                 BOOKING FORM
            ============================== -->
            <div class="booking-form-container">

               <h2 data-i18n="bookingFormTitle">
    Booking Enquiry
</h2>

                <!-- ======================================
     BOOKING SUCCESS MESSAGE
======================================= -->

<?php if ($bookingSuccess !== ""): ?>

    <div class="form-success"
         data-i18n="bookingSuccessMessage">

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

    <strong data-i18n="bookingErrorHeading">
    <?php
        echo htmlspecialchars(
            $bookingTranslations[$language]["errorHeading"]
        );
    ?>
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

                <!-- Store the language selected by the user -->
<input
    type="hidden"
    id="formLanguage"
    name="language"
    value="en"
>


                    <!-- Full Name -->
                    <div class="form-group">

                       <label for="bookingName"
       data-i18n="bookingNameLabel">
    Full Name
</label>



        <!-- Full Name -->
<input
    type="text"
    id="bookingName"
    name="bookingName"
    placeholder="Enter your full name"
    data-i18n-placeholder="bookingNamePlaceholder"
    value="<?php echo htmlspecialchars($bookingName); ?>"
    required
>


                    </div>


                    <!-- Email -->
                    <div class="form-group">

                       <label for="bookingEmail"
       data-i18n="bookingEmailLabel">
    Email Address
</label>



                    <!-- Email Address -->
<input
    type="email"
    id="bookingEmail"
    name="bookingEmail"
    placeholder="Enter your email address"
    data-i18n-placeholder="bookingEmailPlaceholder"
    value="<?php echo htmlspecialchars($bookingEmail); ?>"
    required
>

                    </div>


                    <!-- Phone -->
                    <div class="form-group">

                        <label for="bookingPhone"
       data-i18n="bookingPhoneLabel">
    Phone Number
</label>



                    <!-- Phone Number -->
<input
    type="tel"
    id="bookingPhone"
    name="bookingPhone"
    placeholder="Enter your phone number"
    data-i18n-placeholder="bookingPhonePlaceholder"
    value="<?php echo htmlspecialchars($bookingPhone); ?>"
    required
>


                    </div>


                    <!-- Accommodation -->
                    <div class="form-group">

                       <label for="room"
       data-i18n="bookingRoomLabel">
    Accommodation
</label>



                        <select
                            id="room"
                            name="room"
                            required
                        >

                           <option value=""
        data-i18n="bookingSelectRoom">
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

                       <label for="moveDate"
       data-i18n="bookingMoveDateLabel">
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

                       <label for="bookingMessage"
       data-i18n="bookingMessageLabel">
    Additional Message
</label>



                    <textarea
    id="bookingMessage"
    name="bookingMessage"
    rows="5"
    placeholder="Add any additional information..."
    data-i18n-placeholder="bookingMessagePlaceholder"
><?php echo htmlspecialchars($bookingMessage); ?></textarea>


                    </div>


                    <!-- Submit Button -->
                   <button
    type="submit"
    class="btn primary-btn"
    data-i18n="bookingSubmitButton"
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