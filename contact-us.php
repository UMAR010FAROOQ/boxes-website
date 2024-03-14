<?php
include('header.php');
?>



<div id="page-content"> 
                <!--Page Header-->
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1>Contact Us Style1</h1></div>
                                <!--Breadcrumbs-->
                                <div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Pages</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Contact Us Style1</span></div>
                                <!--End Breadcrumbs-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container contact-style1">
                    <!-- Contact Form - Details -->
                    <div class="contact-form-details section pt-0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <!-- Contact Form -->
                                <div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
                                    <div class="section-header">
                                        <h2>Let's Get in touch!</h2>
                                        <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
                                    </div>

                                    <form action="#" name="contactus" method="post" id="contact-form" class="contact-form">	
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Name">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">                               
                                                <div class="form-group">
                                                    <input type="email" id="ContactFormEmail" name="email" class="form-control" placeholder="Email">
                                                    <span class="error_msg" id="email_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Location">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Company">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Website">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <textarea id="ContactFormMessage" name="message" class="form-control" rows="5" placeholder="Message" spellcheck="false" data-ms-editor="true"></textarea>
                                                    <span class="error_msg" id="message_error"></span>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mailsendbtn mb-0 w-100">	
                                                    <input class="btn btn-lg" type="submit" name="contactus" value="Send Message">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="response-msg"></div>
                                </div>
                                <!-- End Contact Form -->
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <!-- Contact Details -->
                                <div class="contact-details bg-block">
                                    <h3 class="mb-3 fs-5">Store information</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2 address">
                                            <strong class="d-block mb-2">Address :</strong>
                                            <p><i class="icon anm anm-map-marker-al me-2 d-none"></i> 39899 Balentine Drive Suite 200, Newark, CA 94560</p>
                                        </li>
                                        <li class="mb-2 phone"><strong>Phone :</strong><i class="icon anm anm-phone me-2 d-none"></i> <a href="tel:5105009533">(510) 500-9533</a></li>
                                        <li class="mb-0 email"><strong>Email :</strong><i class="icon anm anm-envelope-l me-2 d-none"></i> <a href="mailto:sales@oxopackaging.com">sales@oxopackaging.com</a></li>
                                    </ul>
                                    <hr>
                                    <div class="open-hours">
                                        <strong class="d-block mb-2">Opening Hours</strong>
                                        <p class="lh-lg">
                                            Mon - Sat : 9:30 AM - 6:30 PM<br>
                                            Sunday: 11:00 AM - 5:00 PM
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="follow-us">
                                        <label class="d-block mb-3"><strong>Stay Connected</strong></label>
                                        <ul class="list-inline social-icons">
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Facebook" aria-label="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Twitter" aria-label="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Pinterest" aria-label="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Instagram" aria-label="Instagram"><i class="icon anm anm-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Google plus" aria-label="Google plus"><i class="icon anm anm-google-plus-g"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Whatsapp" aria-label="Whatsapp"><i class="icon anm anm-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Contact Details -->
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Form - Details -->

                    <!-- Contact Map -->
                    <div class="contact-maps section p-0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="map-section ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6328.848362409737!2d-121.993998!3d37.521497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbf55744e5251%3A0xae6258185c57ee1b!2s39899%20Balentine%20Dr%20%23200%2C%20Newark%2C%20CA%2094560!5e0!3m2!1sen!2sus!4v1706265357518!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <div class="map-section-overlay-wrapper">
                                        <div class="map-section-overlay rounded-0">
                                            <h3>Our store</h3>
                                            <div class="content mb-3">
                                                <p class="mb-2">39899 Balentine Drive Suite 200, Newark, CA 94560</p>
                                                <p>Mon - Fri, 10am - 9pm<br>Saturday, 11am - 9pm<br>Sunday, 11am - 5pm</p>
                                            </div>
                                            <p><a href="https://maps.app.goo.gl/4WxdALpk5jMphLAh7" class="btn btn-secondary btn-sm">Get directions</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Map -->
                </div>
                <!--End Main Content-->
            </div>



<?php
include('footer.php');
?>