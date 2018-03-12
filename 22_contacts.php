<?php include_once 'header.php'; ?>

<div class="content-wrapper">

    <!-- Stunning header -->

    <div class="stunning-header stunning-header-bg-blue">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Contact Information</h1>
            <ul class="breadcrumbs">
                <li class="breadcrumbs-item">
                    <a href="index.html">Home</a>
                    <i class="seoicon-right-arrow"></i>
                </li>
                <li class="breadcrumbs-item active">
                    <span href="#">Contact Information</span>
                    <i class="seoicon-right-arrow"></i>
                </li>
            </ul>
        </div>
    </div>

    <!-- End Stunning header -->

    <!-- Overlay Search -->


    <div class="overlay_search">
        <div class="container">
            <div class="row">
                <div class="form_search-wrap">
                    <form>
                        <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                        <a href="#" class="overlay_search-close">
                            <span></span>
                            <span></span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Overlay Search -->


    <div class="container">
        <div class="row pt120 pb80">
            <div class="col-lg-12">
                <div class="heading">
                    <h4 class="h1 heading-title">Get In Touch</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                    <p class="heading-text">   <address>
                        <strong> cuelogs </strong><br>
                        New sangvi, Famous chowk<br>
                        Pune 411027, Maharashtra, India</address>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacts -->


    <div class="container-fluid">
        <div class="row medium-padding80 bg-border-color contacts-shadow">
            <div class="container">
                <div class="row">
                    <div class="contacts">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img src="img/contact7.png" alt="phone">
                                <div class="content">
                                    <a href="#" class="title">Pune, India</a>
                                    <p class="sub-title">Pune 411027, Maharashtra, India</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img src="img/contact8.png" alt="phone">
                                <div class="content">
                                    <a href="#" class="title">sales@cuelogs.com</a>
                                    <p class="sub-title">online support</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img src="img/contact9.png" alt="phone">
                                <div class="content">
                                    <a href="#" class="title">000 91 99237 14499</a>
                                    <p class="sub-title">Mon-Fri 9am-6pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Contacts -->

    <!-- Google map -->


    <div class="section">
        <div id="map"></div>
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 34.0151244, lng: -118.4729871},
                    zoom: 12,
                    scrollwheel: false//set to true to enable mouse scrolling while inside the map area
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&callback=initMap"
        async defer></script>

    </div>

    <!-- End Google map -->

    <!-- Contact form -->


    <div class="container">
        <div class="contact-form medium-padding120">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h4 class="heading-title">Have You Any Questions?</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p class="heading-text">Please contact us using the form and we’ll get back to you as soon as possible.</p>
                    </div>
                </div>
            </div>

            <form class="contact-form" method="post" action="send_mail.php">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="permalink" class="email input-standard-grey" placeholder="Website URL" type="text">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="name" class="email input-standard-grey" placeholder="Your Name" type="text" required>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="email" class="email input-standard-grey" placeholder="Email Address" type="email" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="phone" class="email input-standard-grey" placeholder="Phone" type="text">
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" class="email input-standard-grey" placeholder="Details"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="submit-block table">
                        <div class="col-lg-3 table-cell">
                            <button class="btn btn-small btn--primary">
                                <span class="text">Submit Now</span>
                            </button>
                        </div>

                        <div class="col-lg-5 table-cell">
                            <div class="submit-block-text">
                                Please, let us know any particular things to check and the best time
                                to contact you by phone (if provided).
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- End Contact form -->

    <!-- Subscribe Form -->

    <div class="container-fluid bg-green-color">
        <div class="row">
            <div class="container">

                <div class="row">

                    <div class="subscribe scrollme">

                        <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                            <h4 class="subscribe-title">Email Newsletters!</h4>
                            <form class="subscribe-form" method="post" action="import.php">
                                <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                                <button class="subscr-btn">subscribe
                                    <span class="semicircle--right"></span>
                                </button>
                            </form>
                            <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

                        </div>

                        <div class="images-block">
                            <img src="img/subscr-gear.png" alt="gear" class="gear">
                            <img src="img/subscr1.png" alt="mail" class="mail">
                            <img src="img/subscr-mailopen.png" alt="mail" class="mail-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Subscribe Form -->

</div>
<?php include_once 'footer.php'; ?>