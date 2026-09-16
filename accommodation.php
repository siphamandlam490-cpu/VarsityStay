<?php include 'includes/header.php'; ?>

<main>

    <!-- PAGE HEADER -->
    <section class="page-hero">

        <div class="container">

            <h1>Student Accommodation</h1>

            <p>
                Find affordable and convenient accommodation
                that suits your student lifestyle.
            </p>

        </div>

    </section>


    <!-- FILTER SECTION -->
    <section class="filter-section">

        <div class="container">

            <h2>Find Your Room</h2>

            <p>
                Filter accommodation according to your preferred room type.
            </p>

            <div class="filter-buttons">

                <button class="filter-btn active"
                        data-filter="all">
                    All
                </button>

                <button class="filter-btn"
                        data-filter="single">
                    Single Rooms
                </button>

                <button class="filter-btn"
                        data-filter="sharing">
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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Single Room
                        </span>

                        <h3>Campus View Residence</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Comfortable private student room
                            located close to campus.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Free Wi-Fi</li>
                            <li>✓ Study Desk</li>
                            <li>✓ Shared Kitchen</li>
                            <li>✓ Secure Parking</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 800
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Campus+View+Residence"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Sharing Room
                        </span>

                        <h3>Student Haven</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Affordable sharing accommodation
                            suitable for students looking
                            to reduce monthly costs.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Free Wi-Fi</li>
                            <li>✓ Shared Bedroom</li>
                            <li>✓ Kitchen</li>
                            <li>✓ Laundry Area</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 300
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Student+Haven"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Single Room
                        </span>

                        <h3>Varsity Lodge</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Modern private room with convenient
                            facilities for university students.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Wi-Fi</li>
                            <li>✓ Private Bedroom</li>
                            <li>✓ Study Area</li>
                            <li>✓ Security</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R3 000
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Varsity+Lodge"
                               class="btn primary-btn">

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

                        <span class="room-status limited">
                            Limited
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Sharing Room
                        </span>

                        <h3>Student Corner</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Budget-friendly student accommodation
                            with essential facilities.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Wi-Fi</li>
                            <li>✓ Shared Kitchen</li>
                            <li>✓ Study Desk</li>
                            <li>✓ Water Included</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 100
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Student+Corner"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Single Room
                        </span>

                        <h3>Blue Sky Residence</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Spacious student room designed
                            for comfortable studying and living.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Free Wi-Fi</li>
                            <li>✓ Private Room</li>
                            <li>✓ Kitchen</li>
                            <li>✓ CCTV Security</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R3 200
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Blue+Sky+Residence"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Sharing Room
                        </span>

                        <h3>Campus Court</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Affordable shared accommodation
                            located within easy travelling
                            distance of campus.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Wi-Fi</li>
                            <li>✓ Shared Bedroom</li>
                            <li>✓ Kitchen</li>
                            <li>✓ Secure Access</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 400
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Campus+Court"
                               class="btn primary-btn">

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

                <h2>Compare Accommodation</h2>

                <p>
                    Compare some of our accommodation
                    options before making your choice.
                </p>

            </div>


            <div class="table-container">

                <table class="comparison-table">

                    <thead>

                        <tr>

                            <th>Accommodation</th>
                            <th>Room Type</th>
                            <th>Monthly Price</th>
                            <th>Wi-Fi</th>
                            <th>Status</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>Campus View Residence</td>
                            <td>Single</td>
                            <td>R2 800</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Student Haven</td>
                            <td>Sharing</td>
                            <td>R2 300</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Varsity Lodge</td>
                            <td>Single</td>
                            <td>R3 000</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Student Corner</td>
                            <td>Sharing</td>
                            <td>R2 100</td>
                            <td>Yes</td>
                            <td>Limited</td>

                        </tr>


                        <tr>

                            <td>Blue Sky Residence</td>
                            <td>Single</td>
                            <td>R3 200</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Campus Court</td>
                            <td>Sharing</td>
                            <td>R2 400</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>



    <!-- HELP SECTION -->
    <section class="cta-section">

        <div class="container">

            <h2>Need Help Choosing?</h2>

            <p>
                Contact VarsityStay and we will help
                you with your accommodation enquiry.
            </p>

            <a href="contact.php"
               class="btn primary-btn">

                Contact Us

            </a>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?><?php include 'includes/header.php'; ?>

<main>

    <!-- PAGE HEADER -->
    <section class="page-hero">

        <div class="container">

            <h1>Student Accommodation</h1>

            <p>
                Find affordable and convenient accommodation
                that suits your student lifestyle.
            </p>

        </div>

    </section>


    <!-- FILTER SECTION -->
    <section class="filter-section">

        <div class="container">

            <h2>Find Your Room</h2>

            <p>
                Filter accommodation according to your preferred room type.
            </p>

            <div class="filter-buttons">

                <button class="filter-btn active"
                        data-filter="all">
                    All
                </button>

                <button class="filter-btn"
                        data-filter="single">
                    Single Rooms
                </button>

                <button class="filter-btn"
                        data-filter="sharing">
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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Single Room
                        </span>

                        <h3>Campus View Residence</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Comfortable private student room
                            located close to campus.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Free Wi-Fi</li>
                            <li>✓ Study Desk</li>
                            <li>✓ Shared Kitchen</li>
                            <li>✓ Secure Parking</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 800
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Campus+View+Residence"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Sharing Room
                        </span>

                        <h3>Student Haven</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Affordable sharing accommodation
                            suitable for students looking
                            to reduce monthly costs.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Free Wi-Fi</li>
                            <li>✓ Shared Bedroom</li>
                            <li>✓ Kitchen</li>
                            <li>✓ Laundry Area</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 300
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Student+Haven"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Single Room
                        </span>

                        <h3>Varsity Lodge</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Modern private room with convenient
                            facilities for university students.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Wi-Fi</li>
                            <li>✓ Private Bedroom</li>
                            <li>✓ Study Area</li>
                            <li>✓ Security</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R3 000
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Varsity+Lodge"
                               class="btn primary-btn">

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

                        <span class="room-status limited">
                            Limited
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Sharing Room
                        </span>

                        <h3>Student Corner</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Budget-friendly student accommodation
                            with essential facilities.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Wi-Fi</li>
                            <li>✓ Shared Kitchen</li>
                            <li>✓ Study Desk</li>
                            <li>✓ Water Included</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 100
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Student+Corner"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Single Room
                        </span>

                        <h3>Blue Sky Residence</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Spacious student room designed
                            for comfortable studying and living.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Free Wi-Fi</li>
                            <li>✓ Private Room</li>
                            <li>✓ Kitchen</li>
                            <li>✓ CCTV Security</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R3 200
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Blue+Sky+Residence"
                               class="btn primary-btn">

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

                        <span class="room-status available">
                            Available
                        </span>

                    </div>


                    <div class="room-details">

                        <span class="room-type">
                            Sharing Room
                        </span>

                        <h3>Campus Court</h3>

                        <p class="location">
                            📍 Vanderbijlpark
                        </p>

                        <p class="room-description">
                            Affordable shared accommodation
                            located within easy travelling
                            distance of campus.
                        </p>


                        <ul class="facility-list">

                            <li>✓ Wi-Fi</li>
                            <li>✓ Shared Bedroom</li>
                            <li>✓ Kitchen</li>
                            <li>✓ Secure Access</li>

                        </ul>


                        <div class="room-bottom">

                            <div>

                                <span class="price-label">
                                    From
                                </span>

                                <p class="room-price">
                                    R2 400
                                    <span>/ month</span>
                                </p>

                            </div>


                            <a href="booking.php?room=Campus+Court"
                               class="btn primary-btn">

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

                <h2>Compare Accommodation</h2>

                <p>
                    Compare some of our accommodation
                    options before making your choice.
                </p>

            </div>


            <div class="table-container">

                <table class="comparison-table">

                    <thead>

                        <tr>

                            <th>Accommodation</th>
                            <th>Room Type</th>
                            <th>Monthly Price</th>
                            <th>Wi-Fi</th>
                            <th>Status</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>Campus View Residence</td>
                            <td>Single</td>
                            <td>R2 800</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Student Haven</td>
                            <td>Sharing</td>
                            <td>R2 300</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Varsity Lodge</td>
                            <td>Single</td>
                            <td>R3 000</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Student Corner</td>
                            <td>Sharing</td>
                            <td>R2 100</td>
                            <td>Yes</td>
                            <td>Limited</td>

                        </tr>


                        <tr>

                            <td>Blue Sky Residence</td>
                            <td>Single</td>
                            <td>R3 200</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>


                        <tr>

                            <td>Campus Court</td>
                            <td>Sharing</td>
                            <td>R2 400</td>
                            <td>Yes</td>
                            <td>Available</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>



    <!-- HELP SECTION -->
    <section class="cta-section">

        <div class="container">

            <h2>Need Help Choosing?</h2>

            <p>
                Contact VarsityStay and we will help
                you with your accommodation enquiry.
            </p>

            <a href="contact.php"
               class="btn primary-btn">

                Contact Us

            </a>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>