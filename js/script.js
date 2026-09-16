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