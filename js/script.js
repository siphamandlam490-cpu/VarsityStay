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


        // Store validation problems here
        let errors = [];


        // Check full name
        if (name.length < 3) {

            errors.push(
                "Full name must contain at least 3 characters."
            );

        }


        // Check email address
        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {

            errors.push(
                "Please enter a valid email address."
            );

        }


        // Check phone number only if the user entered one
        if (
            phone !== "" &&
            !/^[0-9+\s-]{7,15}$/.test(phone)
        ) {

            errors.push(
                "Please enter a valid phone number."
            );

        }


        // Check enquiry type
        if (subject === "") {

            errors.push(
                "Please select an enquiry type."
            );

        }


        // Check message
        if (message.length < 10) {

            errors.push(
                "Message must contain at least 10 characters."
            );

        }


        // Stop the form if there are errors
        if (errors.length > 0) {

            event.preventDefault();

            alert(
                "Please correct the following:\n\n" +
                errors.join("\n")
            );

        }

    });

}