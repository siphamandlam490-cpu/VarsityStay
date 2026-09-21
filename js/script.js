const menuBtn = document.getElementById("menuBtn");

const navigation =
    document.getElementById("navigation");


if (menuBtn && navigation) {

    menuBtn.addEventListener("click", function () {

        navigation.classList.toggle("active");

    });

}

// =======================================
// ACCOMMODATION FILTER
// =======================================

const filterButtons =
    document.querySelectorAll(".filter-btn");

const accommodationCards =
    document.querySelectorAll(".accommodation-card");


filterButtons.forEach(function (button) {

    button.addEventListener("click", function () {

        const selectedFilter =
            button.getAttribute("data-filter");


        // Remove active style from all buttons
        filterButtons.forEach(function (btn) {

            btn.classList.remove("active");

        });


        // Add active style to clicked button
        button.classList.add("active");


        // Filter accommodation cards
        accommodationCards.forEach(function (card) {

            const roomType =
                card.getAttribute("data-category");


            if (
                selectedFilter === "all" ||
                selectedFilter === roomType
            ) {

                card.classList.remove("hide");

            } else {

                card.classList.add("hide");

            }

        });

    });

});


// =======================================
// CONTACT FORM VALIDATION
// =======================================

// Find the contact form
const contactForm = document.getElementById("contactForm");


// Only run this code when the contact form exists
if (contactForm) {

    contactForm.addEventListener("submit", function (event) {

        // Get the values entered by the user
        const name =
            document.getElementById("name").value.trim();

        const email =
            document.getElementById("email").value.trim();

        const phone =
            document.getElementById("phone").value.trim();

        const subject =
            document.getElementById("subject").value;

        const message =
            document.getElementById("message").value.trim();


            // Get the language currently selected by the user
const currentLanguage =
    localStorage.getItem("varsityStayLanguage") || "en";


        // Store validation problems here
        let errors = [];


        // Check full name
        if (name.length < 3) {

          errors.push(
    translations[currentLanguage].contactErrorName
);
        }


        // Check email address
        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {

           errors.push(
    translations[currentLanguage].contactErrorEmail
);

        }


        // Check phone number only if the user entered one
        if (
            phone !== "" &&
            !/^[0-9+\s-]{7,15}$/.test(phone)
        ) {

           errors.push(
    translations[currentLanguage].contactErrorPhone
);

        }


        // Check enquiry type
        if (subject === "") {

          errors.push(
    translations[currentLanguage].contactErrorSubject
);

        }


        // Check message
        if (message.length < 10) {

           errors.push(
    translations[currentLanguage].contactErrorMessage
);

        }


        // Stop the form if there are errors
        if (errors.length > 0) {

            event.preventDefault();

            alert(
    translations[currentLanguage].contactErrorAlertHeading +
    "\n\n" +
    errors.join("\n")
);

        }

    });

}


// =======================================
// LANGUAGE SWITCHER
// English + Sesotho
// =======================================

// Text translations used by the navigation
const translations = {

    // English
    en: {
        navHome: "Home",
        navAbout: "About",
        navAccommodation: "Accommodation",
        navAllAccommodation: "All Accommodation",
        navSingleRooms: "Single Rooms",
        navSharingRooms: "Sharing Rooms",
        navContact: "Contact",
        navBook: "Book Now",

        // Home page
        homeHeroTitle: "Find Your Perfect Student Accommodation",
        homeHeroText: "Safe, affordable and convenient student accommodation near your university.",
        homeViewAccommodation: "View Accommodation",
        homeLearnMore: "Learn More",

        homeWhyTitle: "Why Choose VarsityStay?",
        homeWhyText: "Finding student accommodation should be simple and stress-free.",

        homeTrustedTitle: "🏠 Trusted Accommodation",
        homeTrustedText: "Browse student accommodation with clear room information, prices and facilities.",

        homeAffordableTitle: "💰 Affordable Options",
        homeAffordableText: "Compare accommodation prices and choose an option that fits your student budget.",

        homeNearTitle: "📍 Near Campus",
        homeNearText: "Find accommodation located conveniently close to university campuses and transport routes.",

        homeFeaturedTitle: "Featured Accommodation",
        homeFeaturedText: "Take a look at some of our student accommodation options.",

        homeViewAll: "View All Accommodation",

        homeHowTitle: "How VarsityStay Works",
        homeStep1: "Browse available accommodation.",
        homeStep2: "Compare prices and facilities.",
        homeStep3: "Select your preferred room.",
        homeStep4: "Complete the booking form.",


     // About page
aboutHeroTitle: "About VarsityStay",
aboutHeroText: "Making student accommodation easier, safer and more convenient.",

aboutWhoTitle: "Who We Are",
aboutWhoText1: "VarsityStay is a student accommodation platform designed to help university students find safe, affordable and convenient accommodation near campus.",
aboutWhoText2: "Students can browse available rooms, compare accommodation prices, view facilities and contact accommodation providers.",
aboutWhoText3: "Our goal is to simplify the process of searching for student accommodation and help students make better accommodation decisions.",

aboutMissionVisionTitle: "Our Mission & Vision",
aboutMissionVisionText: "Creating a better accommodation experience for students.",

aboutMissionTitle: "🎯 Our Mission",
aboutMissionText: "To provide students with a simple and reliable platform for finding suitable accommodation near their university.",

aboutVisionTitle: "👁 Our Vision",
aboutVisionText: "To become a trusted student accommodation platform that connects students with safe, affordable and convenient places to stay.",

// About page - Values
aboutValuesTitle: "Our Values",

aboutSafetyTitle: "Safety",
aboutSafetyText: "Students should have access to accommodation information that helps them make safe choices.",

aboutTrustTitle: "Trust",
aboutTrustText: "We aim to provide clear and understandable accommodation information.",

aboutAffordabilityTitle: "Affordability",
aboutAffordabilityText: "Students can compare different accommodation prices before making a decision.",

aboutConvenienceTitle: "Convenience",
aboutConvenienceText: "VarsityStay makes it easier to find accommodation located close to campus.",


// About page - What VarsityStay Offers table
aboutOffersTitle: "What VarsityStay Offers",
aboutOffersText: "Our platform provides useful information for students looking for accommodation.",

aboutTableFeature: "Feature",
aboutTableDescription: "Description",

aboutListingTitle: "Accommodation Listings",
aboutListingText: "Browse available student rooms and residences.",

aboutPriceTitle: "Price Comparison",
aboutPriceText: "Compare accommodation prices before booking.",

aboutRoomInfoTitle: "Room Information",
aboutRoomInfoText: "View room facilities, location and accommodation details.",

aboutBookingTitle: "Booking Enquiries",
aboutBookingText: "Submit a booking enquiry directly through the website.",

aboutSupportTitle: "Contact Support",
aboutSupportText: "Contact VarsityStay if you require assistance.",

// About page - Call to Action
aboutCtaTitle: "Ready to Find Your Student Home?",
aboutCtaText: "Browse available accommodation and find an option that suits you.",
aboutCtaButton: "Browse Accommodation",

// About page - Video section
aboutVideoTitle: "Explore Student Life",
aboutVideoText: "Get a closer look at university life, student accommodation and the student experience.",

aboutVideo1Title: "Vaal University of Technology",
aboutVideo1Text: "Learn more about the university and the student environment.",

aboutVideo2Title: "Student Campus Life",
aboutVideo2Text: "Discover more about campus facilities, student activities and university life.",

aboutVideo3Title: "Student Accommodation Guide",
aboutVideo3Text: "Learn more about choosing suitable accommodation as a university student.",


// ===================================
// Accommodation page
// Hero and filters
// ===================================
accHeroTitle: "Student Accommodation",
accHeroText: "Find affordable and convenient accommodation that suits your student lifestyle.",

accFilterTitle: "Find Your Room",
accFilterText: "Filter accommodation according to your preferred room type.",

accFilterAll: "All",
accFilterSingle: "Single Rooms",
accFilterSharing: "Sharing Rooms",

// Accommodation page - Room 1
accAvailable: "Available",
accSingleRoom: "Single Room",

accRoom1Description:
    "Comfortable private student room located close to campus.",

accFreeWifi: "✓ Free Wi-Fi",
accStudyDesk: "✓ Study Desk",
accSharedKitchen: "✓ Shared Kitchen",
accSecureParking: "✓ Secure Parking",

accFrom: "From",
accPerMonth: "/ month",

// Accommodation page - Room 2
accSharingRoom: "Sharing Room",

accRoom2Description:
    "Affordable sharing accommodation suitable for students looking to reduce monthly costs.",

accSharedBedroom: "✓ Shared Bedroom",
accKitchen: "✓ Kitchen",
accLaundryArea: "✓ Laundry Area",

// Accommodation page - Room 3
accRoom3Description:
    "Modern private room with convenient facilities for university students.",

accWifi: "✓ Wi-Fi",
accPrivateBedroom: "✓ Private Bedroom",
accStudyArea: "✓ Study Area",
accSecurity: "✓ Security",

// Accommodation page - Room 4
accLimited: "Limited",

accRoom4Description:
    "Budget-friendly student accommodation with essential facilities.",

accWaterIncluded: "✓ Water Included",

// Accommodation page - Room 5
accRoom5Description:
    "Spacious student room designed for comfortable studying and living.",

accPrivateRoom: "✓ Private Room",
accCctvSecurity: "✓ CCTV Security",

// Accommodation page - Room 6
accRoom6Description:
    "Affordable shared accommodation located within easy travelling distance of campus.",

accSecureAccess:
    "✓ Secure Access",

    // Accommodation page - Comparison table
accCompareTitle: "Compare Accommodation",
accCompareText: "Compare some of our accommodation options before making your choice.",

accTableAccommodation: "Accommodation",
accTableRoomType: "Room Type",
accTablePrice: "Monthly Price",
accTableStatus: "Status",

accTableSingle: "Single",
accTableSharing: "Sharing",
accYes: "Yes",

// Accommodation page - Help section
accHelpTitle: "Need Help Choosing?",

accHelpText:
    "Contact VarsityStay and we will help you with your accommodation enquiry.",

accHelpButton: "Contact Us",

// ===================================
// Contact page
// ===================================
contactHeroTitle: "Contact VarsityStay",

contactLocationTitle: "Location",
contactPhoneTitle: "Phone",
contactEmailTitle: "Email",

// Contact page - Introduction
contactHeroText:
    "Have a question about student accommodation? Send us a message and we will assist you.",

contactInfoTitle:
    "Get In Touch",

contactInfoText:
    "If you need help finding accommodation, making a booking or using VarsityStay, feel free to contact us.",

    // Contact page - Form heading and labels
contactFormTitle: "Send Us a Message",

contactNameLabel: "Full Name",
contactEmailLabel: "Email Address",
contactPhoneLabel: "Phone Number",
contactSubjectLabel: "Enquiry Type",
contactMessageLabel: "Message",

// Contact page - Placeholders and dropdown
contactNamePlaceholder: "Enter your full name",
contactEmailPlaceholder: "Enter your email address",
contactPhonePlaceholder: "Enter your phone number",
contactMessagePlaceholder: "Write your message here...",

contactSelectEnquiry: "Select an enquiry",
contactOptionAccommodation: "Accommodation",
contactOptionBooking: "Booking",
contactOptionGeneral: "General Enquiry",
contactOptionSupport: "Website Support",

// Contact page - Submit and feedback messages
contactSendButton: "Send Message",

contactSuccessMessage:
    "Thank you! Your message has been received successfully.",

contactErrorHeading:
    "Please correct the following:",

    // Contact page - JavaScript validation errors
contactErrorAlertHeading: "Please correct the following:",

contactErrorName:
    "Full name must contain at least 3 characters.",

contactErrorEmail:
    "Please enter a valid email address.",

contactErrorPhone:
    "Please enter a valid phone number.",

contactErrorSubject:
    "Please select an enquiry type.",

contactErrorMessage:
    "Message must contain at least 10 characters.",

    // ===================================
// Booking page
// Hero and booking information
// ===================================
bookingHeroTitle: "Book Your Accommodation",

bookingHeroText:
    "Complete the booking enquiry form below and VarsityStay will assist you.",

bookingInfoTitle: "Booking Information",

bookingInfoText:
    "Complete the form with your details. Please make sure the information entered is correct before submitting your enquiry.",

bookingImportantTitle: "Important",

bookingImportantText:
    "Submitting this form sends a booking enquiry. It does not automatically confirm accommodation.",

bookingAccommodationTitle: "Accommodation",

bookingAccommodationText:
    "Select the residence or room you are interested in.",

    // Booking page - Form heading and labels
bookingFormTitle: "Booking Enquiry",

bookingNameLabel: "Full Name",
bookingEmailLabel: "Email Address",
bookingPhoneLabel: "Phone Number",
bookingRoomLabel: "Accommodation",
bookingMoveDateLabel: "Preferred Move-in Date",
bookingMessageLabel: "Additional Message",

// Booking page - Placeholders
bookingNamePlaceholder: "Enter your full name",
bookingEmailPlaceholder: "Enter your email address",
bookingPhonePlaceholder: "Enter your phone number",
bookingMessagePlaceholder: "Add any additional information...",

bookingSelectRoom: "Select accommodation",

// Booking page - Button and messages
bookingSubmitButton: "Submit Booking Enquiry",

bookingSuccessMessage:
    "Your booking enquiry has been submitted successfully!",

bookingErrorHeading:
    "Please correct the following:",

    // Footer
footerDescription:
    "Helping students find safe, affordable and convenient accommodation.",

footerQuickLinks:
    "Quick Links",

    // Footer contact section
footerContactTitle: "Contact",
footerPhone: "Phone",
footerEmail: "Email",

// Footer useful links and social section
footerUsefulLinks: "Useful Links",
footerFollowUs: "Follow Us",

// Footer copyright
footerRights: "All Rights Reserved."

    },


    // Sesotho
    st: {
        navHome: "Lehae",
        navAbout: "Ka Rona",
        navAccommodation: "Bolulo",
        navAllAccommodation: "Bolulo Bohle",
        navSingleRooms: "Likamore tsa Motho a le Mong",
        navSharingRooms: "Likamore tse Arolelanoang",
        navContact: "Ikopanye le Rona",
        navBook: "Behela Hona Joale",

        // Home page
        homeHeroTitle: "Fumana Bolulo ba Hao bo Phethahetseng ba Moithuti",
        homeHeroText: "Bolulo bo bolokehileng, bo theko e tlaase le bo loketseng ba baithuti haufi le yunivesithi ea hau.",
        homeViewAccommodation: "Sheba Bolulo",
        homeLearnMore: "Ithute Haholoanyane",

        homeWhyTitle: "Hobaneng U Khetha VarsityStay?",
        homeWhyText: "Ho fumana bolulo ba baithuti ho lokela ho ba bonolo ebile ho se na khatello.",

        homeTrustedTitle: "🏠 Bolulo bo Tšepahalang",
        homeTrustedText: "Sheba bolulo ba baithuti bo nang le lintlha tse hlakileng tsa likamore, litheko le lits'ebeletso.",

        homeAffordableTitle: "💰 Likhetho tse Theko e Tlase",
        homeAffordableText: "Bapisa litheko tsa bolulo 'me u khethe khetho e lumellanang le tekanyetso ea hau ea moithuti.",

        homeNearTitle: "📍 Haufi le Khampase",
        homeNearText: "Fumana bolulo bo haufi le likhampase tsa yunivesithi le litsela tsa lipalangoang.",

        homeFeaturedTitle: "Bolulo bo Khethiloeng",
        homeFeaturedText: "Sheba tse ling tsa likhetho tsa rona tsa bolulo ba baithuti.",

        homeViewAll: "Sheba Bolulo Bohle",

        homeHowTitle: "Kamoo VarsityStay e Sebetsang Kateng",
        homeStep1: "Sheba bolulo bo fumanehang.",
        homeStep2: "Bapisa litheko le lits'ebeletso.",
        homeStep3: "Khetha kamore eo u e ratang.",
        homeStep4: "Tlatsa foromo ea ho behela.",

        // About page
aboutHeroTitle: "Ka VarsityStay",
aboutHeroText: "Ho etsa bolulo ba baithuti hore bo be bonolo, bo bolokehe ebile bo be bonolo ho bo fumana.",

aboutWhoTitle: "Re Bo-mang",
aboutWhoText1: "VarsityStay ke sethala sa bolulo ba baithuti se etselitsoeng ho thusa baithuti ba yunivesithi ho fumana bolulo bo bolokehileng, bo theko e tlaase le bo loketseng haufi le khampase.",
aboutWhoText2: "Baithuti ba ka sheba likamore tse fumanehang, ba bapisa litheko tsa bolulo, ba sheba lits'ebeletso le ho ikopanya le bafani ba bolulo.",
aboutWhoText3: "Sepheo sa rona ke ho nolofatsa mokhoa oa ho batla bolulo ba baithuti le ho thusa baithuti ho etsa liqeto tse betere tsa bolulo.",

aboutMissionVisionTitle: "Morero le Pono ea Rona",
aboutMissionVisionText: "Ho theha boiphihlelo bo betere ba bolulo bakeng sa baithuti.",

aboutMissionTitle: "🎯 Morero oa Rona",
aboutMissionText: "Ho fa baithuti sethala se bonolo le se tšepahalang sa ho fumana bolulo bo loketseng haufi le yunivesithi ea bona.",

aboutVisionTitle: "👁 Pono ea Rona",
aboutVisionText: "Ho ba sethala se tšepahalang sa bolulo ba baithuti se hokahanyang baithuti le libaka tse bolokehileng, tse theko e tlaase le tse loketseng ho lula.",
    
   // About page - Values
aboutValuesTitle: "Litekanyetso tsa Rona",

aboutSafetyTitle: "Polokeho",
aboutSafetyText: "Baithuti ba lokela ho fumana leseli la bolulo le ba thusang ho etsa likhetho tse bolokehileng.",

aboutTrustTitle: "Tšepo",
aboutTrustText: "Re ikemiselitse ho fana ka leseli la bolulo le hlakileng le utloisisehang.",

aboutAffordabilityTitle: "Theko e Tlase",
aboutAffordabilityText: "Baithuti ba ka bapisa litheko tse fapaneng tsa bolulo pele ba etsa qeto.",

aboutConvenienceTitle: "Bonolo",
aboutConvenienceText: "VarsityStay e nolofalletsa baithuti ho fumana bolulo bo haufi le khampase.",

// About page - What VarsityStay Offers table
aboutOffersTitle: "Seo VarsityStay e Fanang ka Sona",
aboutOffersText: "Sethala sa rona se fana ka leseli le molemo bakeng sa baithuti ba batlang bolulo.",

aboutTableFeature: "Tšobotsi",
aboutTableDescription: "Tlhaloso",

aboutListingTitle: "Manane a Bolulo",
aboutListingText: "Sheba likamore le libaka tsa bolulo tsa baithuti tse fumanehang.",

aboutPriceTitle: "Papiso ea Litheko",
aboutPriceText: "Bapisa litheko tsa bolulo pele u etsa pehelo.",

aboutRoomInfoTitle: "Leseli la Kamore",
aboutRoomInfoText: "Sheba lits'ebeletso tsa kamore, sebaka le lintlha tsa bolulo.",

aboutBookingTitle: "Lipotso tsa Pehelo",
aboutBookingText: "Romela potso ea pehelo ka kotloloho webosaeteng.",

aboutSupportTitle: "Tšehetso ea Puisano",
aboutSupportText: "Ikopanye le VarsityStay haeba u hloka thuso.",

// About page - Call to Action
aboutCtaTitle: "U Ikemiselitse ho Fumana Lehae la Hao la Moithuti?",
aboutCtaText: "Sheba bolulo bo fumanehang 'me u fumane khetho e u loketseng.",
aboutCtaButton: "Sheba Bolulo",

// About page - Video section
aboutVideoTitle: "Hlahloba Bophelo ba Baithuti",
aboutVideoText: "Sheba haufi bophelo ba yunivesithi, bolulo ba baithuti le boiphihlelo ba baithuti.",

aboutVideo1Title: "Vaal University of Technology",
aboutVideo1Text: "Ithute haholoanyane ka yunivesithi le tikoloho ea baithuti.",

aboutVideo2Title: "Bophelo ba Khampase ea Baithuti",
aboutVideo2Text: "Fumana haholoanyane ka lits'ebeletso tsa khampase, mesebetsi ea baithuti le bophelo ba yunivesithi.",

aboutVideo3Title: "Tataiso ea Bolulo ba Baithuti",
aboutVideo3Text: "Ithute haholoanyane ka ho khetha bolulo bo loketseng joaloka moithuti oa yunivesithi.",

// ===================================
// Accommodation page
// Hero and filters - Sesotho
// ===================================
accHeroTitle: "Bolulo ba Baithuti",
accHeroText: "Fumana bolulo bo theko e tlaase le bo loketseng bo lumellanang le mokhoa oa hau oa bophelo joaloka moithuti.",

accFilterTitle: "Fumana Kamore ea Hao",
accFilterText: "Sefa bolulo ho latela mofuta oa kamore oo u o ratang.",

accFilterAll: "Tsohle",
accFilterSingle: "Likamore tsa Motho a le Mong",
accFilterSharing: "Likamore tse Arolelanoang",

// Accommodation page - Room 1
accAvailable: "E Teng",
accSingleRoom: "Kamore ea Motho a le Mong",

accRoom1Description:
    "Kamore e mabothobotho ea moithuti e ikemetseng e haufi le khampase.",

accFreeWifi: "✓ Wi-Fi ea Mahala",
accStudyDesk: "✓ Tafole ea ho Ithuta",
accSharedKitchen: "✓ Kichine e Arolelanoang",
accSecureParking: "✓ Sebaka se Sireletsehileng sa ho Paka",

accFrom: "Ho tloha",
accPerMonth: "/ khoeli",

// Accommodation page - Room 2
accSharingRoom: "Kamore e Arolelanoang",

accRoom2Description:
    "Bolulo bo arolelanoang bo theko e tlaase bo loketseng baithuti ba batlang ho fokotsa litšenyehelo tsa khoeli le khoeli.",

accSharedBedroom: "✓ Kamore ea ho Robala e Arolelanoang",
accKitchen: "✓ Kichine",
accLaundryArea: "✓ Sebaka sa ho Hlatsoa Liaparo",

// Accommodation page - Room 3
accRoom3Description:
    "Kamore ea sejoale-joale e ikemetseng e nang le lits'ebeletso tse loketseng baithuti ba yunivesithi.",

accWifi: "✓ Wi-Fi",
accPrivateBedroom: "✓ Kamore ea ho Robala e Ikemetseng",
accStudyArea: "✓ Sebaka sa ho Ithuta",
accSecurity: "✓ Tšireletso",

// Accommodation page - Room 4
accLimited: "E Lekanyelitsoe",

accRoom4Description:
    "Bolulo ba baithuti bo theko e tlaase bo nang le lits'ebeletso tsa bohlokoa.",

accWaterIncluded: "✓ Metsi a Kenyelelitsoe",

// Accommodation page - Room 5
accRoom5Description:
    "Kamore e pharalletseng ea moithuti e etselitsoeng ho ithuta le ho phela ka boiketlo.",

accPrivateRoom: "✓ Kamore e Ikemetseng",
accCctvSecurity: "✓ Tšireletso ea CCTV",

// Accommodation page - Room 6
accRoom6Description:
    "Bolulo bo arolelanoang bo theko e tlaase bo fumanehang haufi le khampase.",

accSecureAccess:
    "✓ Phihlello e Sireletsehileng",

    // Accommodation page - Comparison table
accCompareTitle: "Bapisa Bolulo",
accCompareText: "Bapisa tse ling tsa likhetho tsa rona tsa bolulo pele u etsa khetho.",

accTableAccommodation: "Bolulo",
accTableRoomType: "Mofuta oa Kamore",
accTablePrice: "Theko ea Khoeli",
accTableStatus: "Boemo",

accTableSingle: "Motho a le Mong",
accTableSharing: "E Arolelanoang",
accYes: "E",

// Accommodation page - Help section
accHelpTitle: "U Hloka Thuso ho Khetha?",

accHelpText:
    "Ikopanye le VarsityStay 'me re tla u thusa ka potso ea hau ea bolulo.",

accHelpButton: "Ikopanye le Rona",

// ===================================
// Contact page - Sesotho
// ===================================
contactHeroTitle: "Ikopanye le VarsityStay",

contactLocationTitle: "Sebaka",
contactPhoneTitle: "Mohala",
contactEmailTitle: "Imeile",

// Contact page - Introduction - Sesotho
contactHeroText:
    "Na u na le potso ka bolulo ba baithuti? Re romelle molaetsa 'me re tla u thusa.",

contactInfoTitle:
    "Ikopanye le Rona",

contactInfoText:
    "Haeba u hloka thuso ho fumana bolulo, ho etsa pehelo kapa ho sebelisa VarsityStay, ikutloe u lokolohile ho ikopanya le rona.",

    // Contact page - Form heading and labels - Sesotho
contactFormTitle: "Re Romelle Molaetsa",

contactNameLabel: "Lebitso le Feletseng",
contactEmailLabel: "Aterese ea Imeile",
contactPhoneLabel: "Nomoro ea Mohala",
contactSubjectLabel: "Mofuta oa Potso",
contactMessageLabel: "Molaetsa",

// Contact page - Placeholders and dropdown - Sesotho
contactNamePlaceholder: "Kenya lebitso la hao le felletseng",
contactEmailPlaceholder: "Kenya aterese ea hao ea imeile",
contactPhonePlaceholder: "Kenya nomoro ea hao ea mohala",
contactMessagePlaceholder: "Ngola molaetsa oa hao mona...",

contactSelectEnquiry: "Khetha mofuta oa potso",
contactOptionAccommodation: "Bolulo",
contactOptionBooking: "Pehelo",
contactOptionGeneral: "Potso e Akaretsang",
contactOptionSupport: "Tšehetso ea Webosaete",

// Contact page - Submit and feedback messages - Sesotho
contactSendButton: "Romela Molaetsa",

contactSuccessMessage:
    "Kea leboha! Molaetsa oa hao o amohetsoe ka katleho.",

contactErrorHeading:
    "Ka kopo lokisa tse latelang:",

    // Contact page - JavaScript validation errors - Sesotho
contactErrorAlertHeading:
    "Ka kopo lokisa tse latelang:",

contactErrorName:
    "Lebitso le feletseng le tlameha ho ba le bonyane litlhaku tse 3.",

contactErrorEmail:
    "Ka kopo kenya aterese e nepahetseng ea imeile.",

contactErrorPhone:
    "Ka kopo kenya nomoro e nepahetseng ea mohala.",

contactErrorSubject:
    "Ka kopo khetha mofuta oa potso.",

contactErrorMessage:
    "Molaetsa o tlameha ho ba le bonyane litlhaku tse 10.",

    // ===================================
// Booking page - Sesotho
// Hero and booking information
// ===================================
bookingHeroTitle: "Behela Bolulo ba Hao",

bookingHeroText:
    "Tlatsa foromo ea potso ea pehelo e ka tlase 'me VarsityStay e tla u thusa.",

bookingInfoTitle: "Tlhahisoleseding ea Pehelo",

bookingInfoText:
    "Tlatsa foromo ka lintlha tsa hao. Ka kopo netefatsa hore tlhahisoleseding eo u e kentseng e nepahetse pele u romela potso ea hao.",

bookingImportantTitle: "Bohlokoa",

bookingImportantText:
    "Ho romela foromo ena ho romela potso ea pehelo. Ha ho netefatse bolulo hang-hang.",

bookingAccommodationTitle: "Bolulo",

bookingAccommodationText:
    "Khetha sebaka sa bolulo kapa kamore eo u e ratang.",

    // Booking page - Form heading and labels - Sesotho
bookingFormTitle: "Potso ea Pehelo",

bookingNameLabel: "Lebitso le Feletseng",
bookingEmailLabel: "Aterese ea Imeile",
bookingPhoneLabel: "Nomoro ea Mohala",
bookingRoomLabel: "Bolulo",
bookingMoveDateLabel: "Letsatsi le Ratoang la ho Falla",
bookingMessageLabel: "Molaetsa o Eketsehileng",

// Booking page - Placeholders - Sesotho
bookingNamePlaceholder: "Kenya lebitso la hao le felletseng",
bookingEmailPlaceholder: "Kenya aterese ea hao ea imeile",
bookingPhonePlaceholder: "Kenya nomoro ea hao ea mohala",
bookingMessagePlaceholder: "Kenya tlhahisoleseding efe kapa efe e eketsehileng...",

bookingSelectRoom: "Khetha bolulo",

// Booking page - Button and messages - Sesotho
bookingSubmitButton: "Romela Potso ea Pehelo",

bookingSuccessMessage:
    "Potso ea hao ea pehelo e rometsoe ka katleho!",

bookingErrorHeading:
    "Ka kopo lokisa tse latelang:",

    // Footer - Sesotho
footerDescription:
    "Ho thusa baithuti ho fumana bolulo bo bolokehileng, bo theko e tlaase le bo loketseng.",

footerQuickLinks:
    "Lihokelo tse Potlakileng",

    // Footer contact section - Sesotho
footerContactTitle: "Ikopanye le Rona",
footerPhone: "Mohala",
footerEmail: "Imeile",

// Footer useful links and social section - Sesotho
footerUsefulLinks: "Lihokelo tse Molemo",
footerFollowUs: "Re Latele",

// Footer copyright - Sesotho
footerRights: "Litokelo Tsohle li Sirelelitsoe."


}


};


// Find the language dropdown from header.php
const languageSwitcher =
    document.getElementById("languageSwitcher");


// Function used to change the website language
function changeLanguage(language) {

    // Find every element with a data-i18n attribute
    const translatedElements =
        document.querySelectorAll("[data-i18n]");


    translatedElements.forEach(function (element) {

        // Get the translation name
        const key =
            element.getAttribute("data-i18n");


        // Change the text if the translation exists
        if (
            translations[language] &&
            translations[language][key]
        ) {

            element.textContent =
                translations[language][key];

// =======================================
// UPDATE FORM LANGUAGE
// =======================================

// Find the hidden language input
const formLanguage =
    document.getElementById("formLanguage");

// Store the selected language in the form
if (formLanguage) {

    formLanguage.value = language;

}

        }

    });

// =======================================
// TRANSLATE FORM PLACEHOLDERS
// =======================================

// Find elements that have translatable placeholders
const translatedPlaceholders =
    document.querySelectorAll("[data-i18n-placeholder]");

translatedPlaceholders.forEach(function (element) {

    // Get the translation key
    const key =
        element.getAttribute("data-i18n-placeholder");

    // Change the placeholder if translation exists
    if (
        translations[language] &&
        translations[language][key]
    ) {

        element.placeholder =
            translations[language][key];

    }

});


    // Change the HTML language setting
    document.documentElement.lang = language;


    // Remember the language selected by the user
    localStorage.setItem(
        "varsityStayLanguage",
        language
    );

}


// Get the previously selected language
const savedLanguage =
    localStorage.getItem("varsityStayLanguage")
    || "en";


// Only run if the language selector exists
if (languageSwitcher) {

    // Set dropdown to saved language
    languageSwitcher.value = savedLanguage;

    // Load saved language
    changeLanguage(savedLanguage);


    // Change language when user selects another option
    languageSwitcher.addEventListener(
        "change",
        function () {

            changeLanguage(
                languageSwitcher.value
            );

        }
    );

}