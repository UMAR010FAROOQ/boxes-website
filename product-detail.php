<?php
include('header.php');
?>


<!-- Body Container -->
<div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a><span
                            class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Product Layout1</span>
                    </div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <!--Product Content-->
        <div class="product-single">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                    <!-- Product Horizontal -->
                    <div class="product-details-img product-horizontal-style">
                        <!-- Product Main -->
                        <div class="zoompro-wrap">
                            <!-- Product Image -->
                            <div class="zoompro-span"><img id="zoompro" class="zoompro"
                                    src="assets/images/products/product17.webp"
                                    data-zoom-image="assets/images/products/product17.webp" alt="product" width="625"
                                    height="808" /></div>
                            <!-- End Product Image -->
                            <!-- Product Label -->
                            <div class="product-labels"><span class="lbl pr-label1">New</span><span
                                    class="lbl on-sale">Sale</span></div>
                            <!-- End Product Label -->
                            <!-- Product Buttons -->
                            <div class="product-buttons">
                                <a href="#;" class="btn btn-primary prlightbox" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Zoom Image"><i
                                        class="icon anm anm-expand-l-arrows"></i></a>
                            </div>
                            <!-- End Product Buttons -->
                        </div>
                        <!-- End Product Main -->

                        <!-- Product Thumb -->
                        <div class="product-thumb product-horizontal-thumb mt-3">
                            <div id="gallery" class="product-thumb-horizontal">
                                <a data-image="assets/images/products/product17.webp"
                                    data-zoom-image="assets/images/products/product17.webp"
                                    class="slick-slide slick-cloned active">
                                    <img class="blur-up lazyload" data-src="assets/images/products/product17.webp"
                                        src="assets/images/products/product17.webp" alt="product" width="625"
                                        height="808" />
                                </a>
                                <a data-image="assets/images/products/product19.webp"
                                    data-zoom-image="assets/images/products/product19.webp"
                                    class="slick-slide slick-cloned">
                                    <img class="blur-up lazyload" data-src="assets/images/products/product19.webp"
                                        src="assets/images/products/product19.webp" alt="product" width="625"
                                        height="808" />
                                </a>
                                <a data-image="assets/images/products/product20.webp"
                                    data-zoom-image="assets/images/products/product20.webp"
                                    class="slick-slide slick-cloned">
                                    <img class="blur-up lazyload" data-src="assets/images/products/product20.webp"
                                        src="assets/images/products/product20.webp" alt="product" width="625"
                                        height="808" />
                                </a>
                                <a data-image="assets/images/products/product21.webp"
                                    data-zoom-image="assets/images/products/product21.webp"
                                    class="slick-slide slick-cloned">
                                    <img class="blur-up lazyload" data-src="assets/images/products/product21.webp"
                                        src="assets/images/products/product21.webp" alt="product" width="625"
                                        height="808" />
                                </a>
                            </div>
                        </div>
                        <!-- End Product Thumb -->

                        <!-- Product Gallery -->
                        <div class="lightboximages">
                            <a href="assets/images/products/product17.webp" data-size="1000x1280"></a>
                            <a href="assets/images/products/product19.webp" data-size="1000x1280"></a>
                            <a href="assets/images/products/product20.webp" data-size="1000x1280"></a>
                            <a href="assets/images/products/product21.webp" data-size="1000x1280"></a>
                        </div>
                        <!-- End Product Gallery -->
                    </div>
                    <!-- End Product Horizontal -->
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                    <!-- Product Details -->
                    <div class="product-single-meta">
                        <h2 class="product-main-title">Custom Lip Balm labels</h2>
                        <!-- Sort Description -->
                        <div class="sort-description">Custom lip balm labels are tiny stickers that revolve around the lip balm tube. The prime purpose of these labels is to make your product stand out from others. It also acts as your marketing agent by uniquely revealing your brand identity.
                        </div>
                        <!-- End Sort Description -->
                    </div>
                    <!-- End Product Details -->

                    <!-- Product Form -->
                    <form method="post" action="#" class="product-form product-form-border hidedropdown">

                        <!-- Product Action -->
                        <div class="product-action w-100 d-flex-wrap my-3 my-md-4">
                            <div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
                                <div class="section-header">
                                    <h2>GET CUSTOM QUOTE</h2>
                                </div>

                                <form action="#" name="contactus" method="post" id="contact-form"
                                    class="contact-form">
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="name" class="form-control"
                                                    placeholder="Name">
                                                <span class="error_msg" id="name_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <input class="form-control" type="tel" id="ContactFormPhone"
                                                    name="phone" pattern="[0-9\-]*" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <input type="email" id="ContactFormEmail" name="email"
                                                    class="form-control" placeholder="Email">
                                                <span class="error_msg" id="email_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="name" class="form-control"
                                                    placeholder="Quantity">
                                                <span class="error_msg" id="name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-6 col-md-4 col-lg-4 mb-0">
                                            <select id="address_province2" name="address[province]" data-default=""
                                                class="form-control">
                                                <option value="0" label="Select Color" selected="selected">Select Color
                                                </option>
                                                <option value="AR">1 Color</option>
                                                <option value="CA">2 Color</option>
                                                <option value="CA">3 Color</option>
                                                <option value="CA">4 Color</option>
                                                <option value="CA">4/1 Color</option>
                                                <option value="CA">4/2 Color</option>
                                                <option value="CA">4/3 Color</option>
                                                <option value="CA">4/4 Color</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <input type="email" id="ContactFormEmail" name="email"
                                                    class="form-control" placeholder="Product Name">
                                                <span class="error_msg" id="email_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="name" class="form-control"
                                                    placeholder="Size L">
                                                <span class="error_msg" id="name_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="name" class="form-control"
                                                    placeholder="Size W">
                                                <span class="error_msg" id="name_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <input type="email" id="ContactFormEmail" name="email"
                                                    class="form-control" placeholder="Size D">
                                                <span class="error_msg" id="email_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 mb-0">
                                            <select id="address_province2" name="address[province]" data-default=""
                                                class="form-control">
                                                <option value="0" label="Select Unit" selected="selected">Select Unit
                                                </option>
                                                <option value="AR">mm</option>
                                                <option value="AR">cm</option>
                                                <option value="AR">inch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="ContactFormMessage" name="message" class="form-control"
                                                    rows="5" placeholder="Message" spellcheck="false"
                                                    data-ms-editor="true"></textarea>
                                                <span class="error_msg" id="message_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mailsendbtn mb-0 w-100">
                                                <input class="btn btn-lg" type="submit" name="contactus"
                                                    value="Send Message">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="response-msg"></div>
                            </div>
                        </div>
                        <!-- End Product Action -->

                    </form>


                    <!-- End Product Form -->

                    <!-- Product Info -->
                    <div class="userViewMsg featureText" data-user="20" data-time="11000"><i
                            class="icon anm anm-eye-r"></i><b class="uersView">21</b> People are Looking for this
                        Product</div>
                    <div class="shippingMsg featureText"><i class="icon anm anm-clock-r"></i>Estimated Delivery Between
                        <b id="fromDate">Wed, May 1</b> and <b id="toDate">Tue, May 7</b>.
                    </div>
                    <div class="freeShipMsg featureText" data-price="199"><i class="icon anm anm-truck-r"></i>Spent <b
                            class="freeShip"><span class="money" data-currency-usd="$199.00"
                                data-currency="USD">$199.00</span></b> More for Free shipping</div>
                    <!-- End Product Info -->

                    <!-- Social Sharing -->
                    <div class="social-sharing d-flex-center mt-2 lh-lg">
                        <span class="sharing-lbl fw-600">Share :</span>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"><i
                                class="icon anm anm-facebook-f"></i><span class="share-title">Facebook</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"><i
                                class="icon anm anm-twitter"></i><span class="share-title">Tweet</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"><i
                                class="icon anm anm-pinterest-p"></i> <span class="share-title">Pin it</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"><i
                                class="icon anm anm-linkedin-in"></i><span class="share-title">Linkedin</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-email"><i
                                class="icon anm anm-envelope-l"></i><span class="share-title">Email</span></a>
                    </div>
                    <!-- End Social Sharing -->
                </div>
            </div>
        </div>
        <!--Product Content-->


        <!--Product Tabs-->
        <div class="tabs-listing section pb-0">
            <ul class="product-tabs style2 list-unstyled d-flex-wrap d-flex-justify-center d-none d-md-flex">
                <li rel="description" class="active"><a class="tablink">Description</a></li>
                <li rel="additionalInformation"><a class="tablink">Additional Information</a></li>
            </ul>

            <div class="tab-container">
                <!--Description-->
                <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
                <div id="description" class="tab-content">
                    <div class="product-description">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <p>If you want to give your customers a standout presentation of your lip balms, you have come to the right spot. We are here to offer you inexpensive custom lip balm labels that are both innovative and creative. Why wait? You can make your brand stand out with captivating labels in no time.</p>
                                <h4 class="mb-3">Features</h4>
                                <ul class="checkmark-info">
                                    <li>High quality fabric, very comfortable to touch and wear.</li>
                                    <li>This cardigan sweater is cute for no reason,perfect for travel and casual.</li>
                                    <li>It can tie in front-is forgiving to you belly or tie behind.</li>
                                    <li>Light weight and perfect for layering.</li>
                                </ul>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                    interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                                    Cicero are also reproduced in their exact original form, accompanied by English
                                    versions from the 1914 translation by H. Rackham.</p>
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <img data-src="assets/images/products/product1.webp"
                                    src="assets/images/products/product1.webp" alt="image" width="600"
                                    height="600" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Description-->

                <!--Additional Information-->
                <h3 class="tabs-ac-style d-md-none" rel="additionalInformation">Additional Information</h3>
                <div id="additionalInformation" class="tab-content">
                    <div class="product-description">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4 mb-md-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle table-part mb-0">
                                        <tr>
                                            <th>Box Style</th>
                                            <td>Custom Lip Balm labels</td>
                                        </tr>
                                        <tr>
                                            <th>Dimension (L + W + H)</th>
                                            <td>All Custom Sizes & Shapes</td>
                                        </tr>
                                        <tr>
                                            <th>Quantities</th>
                                            <td>No Minimum Order Required</td>
                                        </tr>
                                        <tr>
                                            <th>Printing</th>
                                            <td>No Printing, CMYK, CMYK + 1 PMS color, CMYK + 2 PMS colors</td>
                                        </tr>
                                        <tr>
                                            <th>Proof</th>
                                            <td>Flat View, 3D Mock-up, Physical Sampling (On request)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Additional Information-->

            </div>
        </div>
        <!--End Product Tabs-->
    </div>
    <!--End Main Content-->



    <!--Parallax Banner-->
    <div class="section parallax-banner-style1 py-60">
        <div class="hero hero-large hero-overlay bg-size">
            <img class="bg-img" src="assets/images/parallax/demo3-sale-banner.jpg" alt="parallax-banner" width="1920"
                height="645" />
            <div class="hero-inner d-flex-justify-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="wrap-text mx-auto text-center">
                                <h1 class="hero-title text-uppercase">Reach Out - Your <span
                                        class="text-primary">Needs</span> Come First!</h1>
                                <p class="text-transform-none">At OXO Packaging, your requirements and
                                    preferences are always prioritized. We offer personalized lip balm labels that add
                                    an elegant touch to your products, making them more appealing to your potential
                                    customers. Feel free to reach us out by filling out the form for an instant quote.
                                </p>
                                <img src="assets/images/parallax/Personalizedlip.webp">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="product-action w-100 d-flex-wrap my-3 my-md-4 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                                <div class="formFeilds contact-form form-vertical mb-4 mb-md-0 w-100">
                                    <div class="section-header">
                                        <h2>Instant Quote</h2>
                                        <p>Fill this form if you are not sure about the dimensions.</p>
                                    </div>

                                    <form action="#" name="contactus" method="post"
                                        id="contact-form" class="contact-form">
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" id="ContactFormName" name="name"
                                                        class="form-control" placeholder="Name">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" id="ContactFormPhone"
                                                        name="phone" pattern="[0-9\-]*" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg6">
                                                <div class="form-group">
                                                    <input type="text" id="ContactFormName" name="name"
                                                        class="form-control" placeholder="Quantity">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" id="ContactFormEmail" name="email"
                                                        class="form-control" placeholder="Product Name">
                                                    <span class="error_msg" id="email_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <input type="email" id="ContactFormEmail" name="email"
                                                        class="form-control" placeholder="Email">
                                                    <span class="error_msg" id="email_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <textarea id="ContactFormMessage" name="message"
                                                        class="form-control" rows="5" placeholder="Message"
                                                        spellcheck="false" data-ms-editor="true"></textarea>
                                                    <span class="error_msg" id="message_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mailsendbtn mb-0 w-100">
                                                    <input class="btn btn-lg" type="submit" name="contactus"
                                                        value="Send Message">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="response-msg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Parallax Banner-->



        <!--Brand Logo-->
        <section class="section logo-section pb-0">
            <div class="container container-1330">
                <div class="section-header">
                    <h2>Clients</h2>
                </div>
    
                <div class="brands-list">
                    <div class="brands-row logo-bar logo-slider-6items gp10 arwOut5 hov-arrow">
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/1.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/2.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/3.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/4.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/5.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/6.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/8.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/9.webp" alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/10.webp" alt="Brand Logo" title="" width="194"
                                    height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="#" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="assets/images/logo/11.webp" alt="Brand Logo" title="" width="194"
                                    height="97" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand Logo-->


    <!--Related Products-->
    <section class="section product-slider pb-0">
        <div class="container">
            <div class="section-header">
                <p class="mb-1 mt-0">Discover Similar</p>
                <h2>Related Products</h2>
            </div>

            <!--Product Grid-->
            <div class="product-slider-4items gp10 arwOut5 grid-products">
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-detail.php" class="product-img rounded-3">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product1.webp"
                                    src="assets/images/products/product1.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product1.webp"
                                    src="assets/images/products/product1.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl pr-label3">New</span></div>
                            <!-- End Product label -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-detail.php">Flannel Collar Shirt</a>
                            </div>
                            <!-- End Product Name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-detail.php" class="product-img rounded-3">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product2.webp"
                                    src="assets/images/products/product2.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product2.webp"
                                    src="assets/images/products/product2.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl pr-label3">New</span></div>
                            <!-- End Product label -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-detail.php">Flannel Collar Shirt</a>
                            </div>
                            <!-- End Product Name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-detail.php" class="product-img rounded-3">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product4.webp"
                                    src="assets/images/products/product4.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product4.webp"
                                    src="assets/images/products/product4.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl pr-label3">New</span></div>
                            <!-- End Product label -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-detail.php">Flannel Collar Shirt</a>
                            </div>
                            <!-- End Product Name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-detail.php" class="product-img rounded-3">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product3.webp"
                                    src="assets/images/products/product3.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product3.webp"
                                    src="assets/images/products/product3.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            <!-- End Product label -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-detail.php">Cotton Hooded Hoodie</a>
                            </div>
                            <!-- End Product Name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-detail.php" class="product-img rounded-3">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product5.webp"
                                    src="assets/images/products/product5.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product5.webp"
                                    src="assets/images/products/product5.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                            <!-- End Product label -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-detail.php">Hooded Neck Hoodies</a>
                            </div>
                            <!-- End Product Name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-detail.php" class="product-img rounded-3">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product6.webp"
                                    src="assets/images/products/product6.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product6.webp"
                                    src="assets/images/products/product6.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl on-sale">Sold out</span></div>
                            <!-- End Product label -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-detail.php">Foldable Duffel Bag</a>
                            </div>
                            <!-- End Product Name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-detail.php" class="product-img rounded-3">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product7.webp"
                                    src="assets/images/products/product7.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product7.webp"
                                    src="assets/images/products/product7.webp" alt="Product" title="Product" width="625"
                                    height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl pr-label1">Best seller</span>
                            </div>
                            <!-- End Product label -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-detail.php">High-Waisted Pant</a>
                            </div>
                            <!-- End Product Name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            </div>
            <!--End Product Grid-->
        </div>
    </section>
    <!--End Related Products-->

</div>
<!-- End Body Container -->



<?php
include('footer.php');
?>