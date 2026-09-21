<?php

// ======================================
// CONTACT FORM PHP PROCESSING
// ======================================

// Store validation errors
$errors = [];

// Success message
$successMessage = "";

// ======================================
// FORM LANGUAGE
// ======================================

// English is the default language
$language = $_POST["language"] ?? "en";

// Only allow languages supported by VarsityStay
if (!in_array($language, ["en", "st"], true)) {
    $language = "en";
}


// ======================================
// PHP FORM TRANSLATIONS
// ======================================

$phpTranslations = [

    // English messages
    "en" => [

        "nameError" =>
            "Full name must contain at least 3 characters.",

        "emailError" =>
            "Please enter a valid email address.",

        "phoneError" =>
            "Please enter a valid phone number.",

        "subjectError" =>
            "Please select a valid enquiry type.",

        "messageError" =>
            "Message must contain at least 10 characters.",

        "success" =>
            "Thank you! Your message has been received successfully.",

        "errorHeading" =>
            "Please correct the following:"
    ],


    // Sesotho messages
    "st" => [

        "nameError" =>
            "Lebitso le feletseng le tlameha ho ba le bonyane litlhaku tse 3.",

        "emailError" =>
            "Ka kopo kenya aterese e nepahetseng ea imeile.",

        "phoneError" =>
            "Ka kopo kenya nomoro e nepahetseng ea mohala.",

        "subjectError" =>
            "Ka kopo khetha mofuta o nepahetseng oa potso.",

        "messageError" =>
            "Molaetsa o tlameha ho ba le bonyane litlhaku tse 10.",

        "success" =>
            "Kea leboha! Molaetsa oa hao o amohetsoe ka katleho.",

        "errorHeading" =>
            "Ka kopo lokisa tse latelang:"
    ]

];



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
    $phpTranslations[$language]["nameError"];

    }


    // ======================================
    // VALIDATE EMAIL ADDRESS
    // ======================================

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] =
    $phpTranslations[$language]["emailError"];
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
    $phpTranslations[$language]["phoneError"];

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
    $phpTranslations[$language]["subjectError"];

    }


    // ======================================
    // VALIDATE MESSAGE
    // ======================================

    if (strlen($message) < 10) {

       $errors[] =
    $phpTranslations[$language]["messageError"];

    }


  
    
// ======================================
// SUCCESS
// ======================================

if (empty($errors)) {

   $successMessage =
    $phpTranslations[$language]["success"];

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

           <!-- Contact page heading -->
<h1 data-i18n="contactHeroTitle">
    Contact VarsityStay
</h1>
           <!-- Contact page introduction -->
<p data-i18n="contactHeroText">
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

               <!-- Contact information heading -->
<h2 data-i18n="contactInfoTitle">
    Get In Touch
</h2>

              <!-- Contact information description -->
<p data-i18n="contactInfoText">
    If you need help finding accommodation,
    making a booking or using VarsityStay,
    feel free to contact us.
</p>


                <div class="contact-item">

                 <h3>
    📍 <span data-i18n="contactLocationTitle">Location</span>
</h3>

<p>
    Vanderbijlpark, Gauteng
</p>

                </div>


                <div class="contact-item">

                   <h3>
    📞 <span data-i18n="contactPhoneTitle">Phone</span>
</h3>

<p>
    016 000 0000
</p>

                </div>


                <div class="contact-item">

                    <h3>
    ✉️ <span data-i18n="contactEmailTitle">Email</span>
</h3>

<p>
    info@varsitystay.co.za
</p>

                </div>

            </div>


            <!-- ==============================
                 CONTACT FORM
            ============================== -->
            <div class="contact-form-container">

               <h2 data-i18n="contactFormTitle">
    Send Us a Message
</h2>


<!-- Display successful submission message -->
<?php if ($successMessage !== ""): ?>

    <div class="form-success"
         data-i18n="contactSuccessMessage">

        <?php
            echo htmlspecialchars($successMessage);
        ?>

    </div>

<?php endif; ?>


<!-- Display PHP validation errors -->
<?php if (!empty($errors)): ?>

    <div class="form-errors">

   <strong data-i18n="contactErrorHeading">
    <?php
        echo htmlspecialchars(
            $phpTranslations[$language]["errorHeading"]
        );
    ?>
</strong>


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

<!-- Store the language selected by the user -->
<input
    type="hidden"
    id="formLanguage"
    name="language"
    value="en"
>


                    <!-- Full Name -->
                    <div class="form-group">

                       <!-- Full Name -->
<label for="name"
       data-i18n="contactNameLabel">
    Full Name
</label>

                       <!-- Full Name -->
<input
    type="text"
    id="name"
    name="name"
    placeholder="Enter your full name"
    data-i18n-placeholder="contactNamePlaceholder"
    value="<?php echo htmlspecialchars($name); ?>"
    required
>



                    <!-- Email Address -->
                    <div class="form-group">

                       <!-- Email Address -->
<label for="email"
       data-i18n="contactEmailLabel">
    Email Address
</label>


   <!-- Email Address -->
<input
    type="email"
    id="email"
    name="email"
    placeholder="Enter your email address"
    data-i18n-placeholder="contactEmailPlaceholder"
    value="<?php echo htmlspecialchars($email); ?>"
    required
>

                    </div>


                    <!-- Phone Number -->
                    <div class="form-group">

                        <!-- Phone Number -->
<label for="phone"
       data-i18n="contactPhoneLabel">
    Phone Number
</label>


              <!-- Phone Number -->
<input
    type="tel"
    id="phone"
    name="phone"
    placeholder="Enter your phone number"
    data-i18n-placeholder="contactPhonePlaceholder"
    value="<?php echo htmlspecialchars($phone); ?>"
>

                    </div>


                    <!-- Enquiry Type -->
                    <div class="form-group">

                       <!-- Enquiry Type -->
<label for="subject"
       data-i18n="contactSubjectLabel">
    Enquiry Type
</label>



                     <select
    id="subject"
    name="subject"
    required
>

    <option value=""
            data-i18n="contactSelectEnquiry">
        Select an enquiry
    </option>

    <option value="Accommodation"
            data-i18n="contactOptionAccommodation">
        Accommodation
    </option>

    <option value="Booking"
            data-i18n="contactOptionBooking">
        Booking
    </option>

    <option value="General"
            data-i18n="contactOptionGeneral">
        General Enquiry
    </option>

    <option value="Support"
            data-i18n="contactOptionSupport">
        Website Support
    </option>

</select>
                    </div>


                    <!-- Message -->
                    <div class="form-group">

                        <!-- Message -->
<label for="message"
       data-i18n="contactMessageLabel">
    Message
</label>


                    <textarea
    id="message"
    name="message"
    rows="6"
    placeholder="Write your message here..."
    data-i18n-placeholder="contactMessagePlaceholder"
    required
><?php echo htmlspecialchars($message); ?></textarea>


                    </div>


                   <!-- Submit button -->
<button
    type="submit"
    class="btn primary-btn"
    data-i18n="contactSendButton"
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