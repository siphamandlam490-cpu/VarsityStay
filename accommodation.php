<?php include 'includes/header.php'; ?>

<main>

   <!-- ======================================
     ACCOMMODATION PAGE HERO
======================================= -->
<section class="page-hero">

    <div class="container">

        <h1 data-i18n="accHeroTitle">
            Student Accommodation
        </h1>

        <p data-i18n="accHeroText">
            Find affordable and convenient accommodation
            that suits your student lifestyle.
        </p>

    </div>

</section>


  <!-- ======================================
     ACCOMMODATION FILTER
======================================= -->
<section class="filter-section">

    <div class="container">

        <h2 data-i18n="accFilterTitle">
            Find Your Room
        </h2>

        <p data-i18n="accFilterText">
            Filter accommodation according to your preferred room type.
        </p>

        <div class="filter-buttons">

            <!-- Show all rooms -->
            <button class="filter-btn active"
                    data-filter="all"
                    data-i18n="accFilterAll">
                All
            </button>

            <!-- Show single rooms -->
            <button class="filter-btn"
                    data-filter="single"
                    data-i18n="accFilterSingle">
                Single Rooms
            </button>

            <!-- Show sharing rooms -->
            <button class="filter-btn"
                    data-filter="sharing"
                    data-i18n="accFilterSharing">
                Sharing Rooms
            </button>

        </div>

    </div>

</section>




    <!-- ACCOMMODATION CARDS -->
    <section class="accommodation-section section">

        <div class="container">

            <div class="accommodation-grid">


              <!-- ROOM 1 -->
<article class="accommodation-card"
         data-category="single"
         id="single">

    <div class="room-image">

        <img
            src="images/campus-view.jpg"
            alt="Campus View Residence student room">

        <span class="room-status available"
              data-i18n="accAvailable">
            Available
        </span>

    </div>


    <div class="room-details">

        <span class="room-type"
              data-i18n="accSingleRoom">
            Single Room
        </span>

        <!-- Property name stays unchanged -->
        <h3>Campus View Residence</h3>

        <!-- Place name stays unchanged -->
        <p class="location">
            📍 Vanderbijlpark
        </p>

        <p class="room-description"
           data-i18n="accRoom1Description">
            Comfortable private student room
            located close to campus.
        </p>


        <ul class="facility-list">

            <li data-i18n="accFreeWifi">
                ✓ Free Wi-Fi
            </li>

            <li data-i18n="accStudyDesk">
                ✓ Study Desk
            </li>

            <li data-i18n="accSharedKitchen">
                ✓ Shared Kitchen
            </li>

            <li data-i18n="accSecureParking">
                ✓ Secure Parking
            </li>

        </ul>


        <div class="room-bottom">

            <div>

                <span class="price-label"
                      data-i18n="accFrom">
                    From
                </span>

                <p class="room-price">
                    R2 800
                    <span data-i18n="accPerMonth">
                        / month
                    </span>
                </p>

            </div>


            <a href="booking.php?room=Campus+View+Residence"
               class="btn primary-btn"
               data-i18n="navBook">

                Book Now

            </a>

        </div>

    </div>

</article>



              <!-- ROOM 2 -->
<article class="accommodation-card"
         data-category="sharing"
         id="sharing">

    <div class="room-image">

        <img
            src="images/student-haven.jpg"
            alt="Student Haven sharing accommodation">

        <span class="room-status available"
              data-i18n="accAvailable">
            Available
        </span>

    </div>


    <div class="room-details">

        <span class="room-type"
              data-i18n="accSharingRoom">
            Sharing Room
        </span>

        <!-- Property name stays unchanged -->
        <h3>Student Haven</h3>

        <!-- Location stays unchanged -->
        <p class="location">
            📍 Vanderbijlpark
        </p>

        <p class="room-description"
           data-i18n="accRoom2Description">
            Affordable sharing accommodation
            suitable for students looking
            to reduce monthly costs.
        </p>


        <ul class="facility-list">

            <li data-i18n="accFreeWifi">
                ✓ Free Wi-Fi
            </li>

            <li data-i18n="accSharedBedroom">
                ✓ Shared Bedroom
            </li>

            <li data-i18n="accKitchen">
                ✓ Kitchen
            </li>

            <li data-i18n="accLaundryArea">
                ✓ Laundry Area
            </li>

        </ul>


        <div class="room-bottom">

            <div>

                <span class="price-label"
                      data-i18n="accFrom">
                    From
                </span>

                <p class="room-price">
                    R2 300
                    <span data-i18n="accPerMonth">
                        / month
                    </span>
                </p>

            </div>


            <a href="booking.php?room=Student+Haven"
               class="btn primary-btn"
               data-i18n="navBook">

                Book Now

            </a>

        </div>

    </div>

</article>


              <!-- ROOM 3 -->
<article class="accommodation-card"
         data-category="single">

    <div class="room-image">

        <img
            src="images/varsity-lodge.jpg"
            alt="Varsity Lodge private student room">

        <span class="room-status available"
              data-i18n="accAvailable">
            Available
        </span>

    </div>


    <div class="room-details">

        <span class="room-type"
              data-i18n="accSingleRoom">
            Single Room
        </span>

        <!-- Property name stays unchanged -->
        <h3>Varsity Lodge</h3>

        <p class="location">
            📍 Vanderbijlpark
        </p>

        <p class="room-description"
           data-i18n="accRoom3Description">
            Modern private room with convenient
            facilities for university students.
        </p>


        <ul class="facility-list">

            <li data-i18n="accWifi">
                ✓ Wi-Fi
            </li>

            <li data-i18n="accPrivateBedroom">
                ✓ Private Bedroom
            </li>

            <li data-i18n="accStudyArea">
                ✓ Study Area
            </li>

            <li data-i18n="accSecurity">
                ✓ Security
            </li>

        </ul>


        <div class="room-bottom">

            <div>

                <span class="price-label"
                      data-i18n="accFrom">
                    From
                </span>

                <p class="room-price">
                    R3 000
                    <span data-i18n="accPerMonth">
                        / month
                    </span>
                </p>

            </div>


            <a href="booking.php?room=Varsity+Lodge"
               class="btn primary-btn"
               data-i18n="navBook">

                Book Now

            </a>

        </div>

    </div>

</article>


                <!-- ROOM 4 -->
<article class="accommodation-card"
         data-category="sharing">

    <div class="room-image">

        <img
            src="images/student-corner.jpg"
            alt="Student Corner shared accommodation">

        <span class="room-status limited"
              data-i18n="accLimited">
            Limited
        </span>

    </div>


    <div class="room-details">

        <span class="room-type"
              data-i18n="accSharingRoom">
            Sharing Room
        </span>

        <!-- Property name stays unchanged -->
        <h3>Student Corner</h3>

        <p class="location">
            📍 Vanderbijlpark
        </p>

        <p class="room-description"
           data-i18n="accRoom4Description">
            Budget-friendly student accommodation
            with essential facilities.
        </p>


        <ul class="facility-list">

            <li data-i18n="accWifi">
                ✓ Wi-Fi
            </li>

            <li data-i18n="accSharedKitchen">
                ✓ Shared Kitchen
            </li>

            <li data-i18n="accStudyDesk">
                ✓ Study Desk
            </li>

            <li data-i18n="accWaterIncluded">
                ✓ Water Included
            </li>

        </ul>


        <div class="room-bottom">

            <div>

                <span class="price-label"
                      data-i18n="accFrom">
                    From
                </span>

                <p class="room-price">
                    R2 100
                    <span data-i18n="accPerMonth">
                        / month
                    </span>
                </p>

            </div>


            <a href="booking.php?room=Student+Corner"
               class="btn primary-btn"
               data-i18n="navBook">

                Book Now

            </a>

        </div>

    </div>

</article>


               <!-- ROOM 5 -->
<article class="accommodation-card"
         data-category="single">

    <div class="room-image">

        <img
            src="images/blue-sky.jpg"
            alt="Blue Sky Residence student accommodation">

        <span class="room-status available"
              data-i18n="accAvailable">
            Available
        </span>

    </div>


    <div class="room-details">

        <span class="room-type"
              data-i18n="accSingleRoom">
            Single Room
        </span>

        <!-- Property name stays unchanged -->
        <h3>Blue Sky Residence</h3>

        <p class="location">
            📍 Vanderbijlpark
        </p>

        <p class="room-description"
           data-i18n="accRoom5Description">
            Spacious student room designed
            for comfortable studying and living.
        </p>


        <ul class="facility-list">

            <li data-i18n="accFreeWifi">
                ✓ Free Wi-Fi
            </li>

            <li data-i18n="accPrivateRoom">
                ✓ Private Room
            </li>

            <li data-i18n="accKitchen">
                ✓ Kitchen
            </li>

            <li data-i18n="accCctvSecurity">
                ✓ CCTV Security
            </li>

        </ul>


        <div class="room-bottom">

            <div>

                <span class="price-label"
                      data-i18n="accFrom">
                    From
                </span>

                <p class="room-price">
                    R3 200
                    <span data-i18n="accPerMonth">
                        / month
                    </span>
                </p>

            </div>


            <a href="booking.php?room=Blue+Sky+Residence"
               class="btn primary-btn"
               data-i18n="navBook">

                Book Now

            </a>

        </div>

    </div>

</article>


                <!-- ROOM 6 -->
<article class="accommodation-card"
         data-category="sharing">

    <div class="room-image">

        <img
            src="images/campus-court.jpg"
            alt="Campus Court shared student room">

        <span class="room-status available"
              data-i18n="accAvailable">
            Available
        </span>

    </div>


    <div class="room-details">

        <span class="room-type"
              data-i18n="accSharingRoom">
            Sharing Room
        </span>

        <!-- Property name stays unchanged -->
        <h3>Campus Court</h3>

        <p class="location">
            📍 Vanderbijlpark
        </p>

        <p class="room-description"
           data-i18n="accRoom6Description">
            Affordable shared accommodation
            located within easy travelling
            distance of campus.
        </p>


        <ul class="facility-list">

            <li data-i18n="accWifi">
                ✓ Wi-Fi
            </li>

            <li data-i18n="accSharedBedroom">
                ✓ Shared Bedroom
            </li>

            <li data-i18n="accKitchen">
                ✓ Kitchen
            </li>

            <li data-i18n="accSecureAccess">
                ✓ Secure Access
            </li>

        </ul>


        <div class="room-bottom">

            <div>

                <span class="price-label"
                      data-i18n="accFrom">
                    From
                </span>

                <p class="room-price">
                    R2 400
                    <span data-i18n="accPerMonth">
                        / month
                    </span>
                </p>

            </div>


            <a href="booking.php?room=Campus+Court"
               class="btn primary-btn"
               data-i18n="navBook">

                Book Now

            </a>

        </div>

    </div>

</article>


            </div>

        </div>

    </section>



    <!-- COMPARISON TABLE -->
    <section class="comparison-section section">

        <div class="container">

            <div class="section-heading">

               <!-- Comparison table heading -->
<h2 data-i18n="accCompareTitle">
    Compare Accommodation
</h2>

<p data-i18n="accCompareText">
    Compare some of our accommodation
    options before making your choice.
</p>

            </div>


            <div class="table-container">

                <table class="comparison-table">

                    <thead>

                      <tr>

    <th data-i18n="accTableAccommodation">
        Accommodation
    </th>

    <th data-i18n="accTableRoomType">
        Room Type
    </th>

    <th data-i18n="accTablePrice">
        Monthly Price
    </th>

    <th>Wi-Fi</th>

    <th data-i18n="accTableStatus">
        Status
    </th>

</tr>
                    </thead>


                    <tbody>

                     <tr>
    <td>Campus View Residence</td>
    <td data-i18n="accTableSingle">Single</td>
    <td>R2 800</td>
    <td data-i18n="accYes">Yes</td>
    <td data-i18n="accAvailable">Available</td>
</tr>


<tr>
    <td>Student Haven</td>
    <td data-i18n="accTableSharing">Sharing</td>
    <td>R2 300</td>
    <td data-i18n="accYes">Yes</td>
    <td data-i18n="accAvailable">Available</td>
</tr>


<tr>
    <td>Varsity Lodge</td>
    <td data-i18n="accTableSingle">Single</td>
    <td>R3 000</td>
    <td data-i18n="accYes">Yes</td>
    <td data-i18n="accAvailable">Available</td>
</tr>


<tr>
    <td>Student Corner</td>
    <td data-i18n="accTableSharing">Sharing</td>
    <td>R2 100</td>
    <td data-i18n="accYes">Yes</td>
    <td data-i18n="accLimited">Limited</td>
</tr>


<tr>
    <td>Blue Sky Residence</td>
    <td data-i18n="accTableSingle">Single</td>
    <td>R3 200</td>
    <td data-i18n="accYes">Yes</td>
    <td data-i18n="accAvailable">Available</td>
</tr>


<tr>
    <td>Campus Court</td>
    <td data-i18n="accTableSharing">Sharing</td>
    <td>R2 400</td>
    <td data-i18n="accYes">Yes</td>
    <td data-i18n="accAvailable">Available</td>
</tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>



   <!-- ======================================
     HELP / CALL TO ACTION SECTION
======================================= -->
<section class="cta-section">

    <div class="container">

        <h2 data-i18n="accHelpTitle">
            Need Help Choosing?
        </h2>

        <p data-i18n="accHelpText">
            Contact VarsityStay and we will help
            you with your accommodation enquiry.
        </p>

        <a href="contact.php"
           class="btn primary-btn"
           data-i18n="accHelpButton">

            Contact Us

        </a>

    </div>

</section>

</main>

<?php include 'includes/footer.php'; ?>