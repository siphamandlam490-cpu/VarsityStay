<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>VarsityStay | Student Accommodation</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" defer></script>
</head>

<body>

<header class="main-header">

    <div class="container navbar">

        <a href="index.php" class="logo">
            Varsity<span>Stay</span>
        </a>

        <button class="menu-btn" id="menuBtn">
            ☰
        </button>

        <nav id="navigation">

    <ul class="nav-links">

        <!-- Home link -->
        <li>
            <a href="index.php"
               data-i18n="navHome">
                Home
            </a>
        </li>


        <!-- About link -->
        <li>
            <a href="about.php"
               data-i18n="navAbout">
                About
            </a>
        </li>


        <!-- Accommodation dropdown -->
        <li class="dropdown">

            <a href="accommodation.php">

                <span data-i18n="navAccommodation">
                    Accommodation
                </span>

                ▾

            </a>

            <ul class="dropdown-menu">

                <li>
                    <a href="accommodation.php"
                       data-i18n="navAllAccommodation">
                        All Accommodation
                    </a>
                </li>

                <li>
                    <a href="accommodation.php#single"
                       data-i18n="navSingleRooms">
                        Single Rooms
                    </a>
                </li>

                <li>
                    <a href="accommodation.php#sharing"
                       data-i18n="navSharingRooms">
                        Sharing Rooms
                    </a>
                </li>

            </ul>

        </li>


        <!-- Contact link -->
        <li>
            <a href="contact.php"
               data-i18n="navContact">
                Contact
            </a>
        </li>


        <!-- Language selector -->
        <li>

            <select
                id="languageSwitcher"
                class="language-switcher"
                aria-label="Choose language"
            >

                <option value="en">
                    English
                </option>

                <option value="st">
                    Sesotho
                </option>

            </select>

        </li>


        <!-- Booking link -->
        <li>
            <a href="booking.php"
               class="nav-button"
               data-i18n="navBook">
                Book Now
            </a>
        </li>

    </ul>

</nav>

    </div>

</header>