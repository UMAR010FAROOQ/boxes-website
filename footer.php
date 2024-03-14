<!--Footer-->
<div class="footer">
    <div class="newsletterbg clearfix">
        <div class="container">
            <form action="#" method="post" class="footer-newsletter">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3 mb-md-0">
                        <label class="h3 mb-1 clr-none">Sign Up Our Newsletter & Get 10% OFF</label>
                        <p>Sign up to stay in the loop. Receive updates, access to exclusive deals, and more.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <input type="email" class="form-control input-group-field newsletter-input" name="email"
                                value="" placeholder="Enter your email address..." required />
                            <button type="submit" class="input-group-btn btn btn-secondary newsletter-submit"
                                name="commit">Subscribe</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <h4 class="h4">Informations</h4>
                    <ul>
                        <li><a href="#">Privacy and Security</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <h4 class="h4">PACKAGING PRODUCTS</h4>
                    <ul>
                        <li><a href="#">Soap Boxes</a></li>
                        <li><a href="#">Pillow Boxes</a></li>
                        <li><a href="#">Hemp Boxes</a></li>
                        <li><a href="#">Kraft Boxes</a></li>
                        <li><a href="#">CBD Boxes</a></li>
                        <li><a href="#">Pre Roll Boxes</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <h4 class="h4">Customer Services</h4>
                    <ul>
                        <li><a href="#">Request Personal Data</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Orders and Returns</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-contact">
                    <h4 class="h4">Contact Us</h4>
                    <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> 39899 Balentine Drive
                        Suite 200, Newark, CA 94560</p>
                    <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i> <b
                            class="me-1 d-none">Phone:</b> <a href="tel:5105009533">(510) 500-9533</a></p>
                    <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b
                            class="me-1 d-none">Email:</b> <a
                            href="mailto:sales@oxopackaging.com">sales@oxopackaging.com</a></p>
                    <ul class="list-inline social-icons mt-3">
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                <ul class="payment-icons d-flex-center mb-2 mb-md-0">
                    <li><i class="icon anm anm-cc-visa"></i></li>
                    <li><i class="icon anm anm-cc-mastercard"></i></li>
                    <li><i class="icon anm anm-cc-amex"></i></li>
                    <li><i class="icon anm anm-cc-paypal"></i></li>
                    <li><i class="icon anm anm-cc-discover"></i></li>
                    <li><i class="icon anm anm-cc-stripe"></i></li>
                    <li><i class="icon anm anm-cc-jcb"></i></li>
                </ul>
                <div class="copytext">&copy; 2024 All rights reserved.</div>
            </div>
        </div>
    </div>
</div>
<!--End Footer-->


<!--Scoll Top-->
<div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
<!--End Scoll Top-->



<!-- Including Jquery/Javascript -->
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<!--Newsletter Modal Cookies-->
<script>
    $(window).ready(function () {
        setTimeout(function () {
            $('#newsletter_modal').modal("show");
        }, 7000);
    });
</script>
<!--End Newsletter Modal Cookies-->



<!-- Elevatezoom Zoom -->
<script src="assets/js/vendor/jquery.elevatezoom.js"></script>
<script>
    $(document).ready(function () {
        /* Product Zoom */
        function product_zoom() {
            $(".zoompro").elevateZoom({
                gallery: "gallery",
                galleryActiveClass: "active",
                zoomWindowWidth: 300,
                zoomWindowHeight: 100,
                scrollZoom: false,
                zoomType: "inner",
                cursor: "crosshair"
            });
        }
        product_zoom();
    });
</script>


<!-- Photoswipe Gallery JS -->
<script src="assets/js/vendor/photoswipe.min.js"></script>
<script>
    $(function () {
        var $pswp = $('.pswp')[0],
            image = [],
            getItems = function () {
                var items = [];
                $('.lightboximages a').each(function () {
                    var $href = $(this).attr('href'),
                        $size = $(this).data('size').split('x'),
                        item = {
                            src: $href,
                            w: $size[0],
                            h: $size[1]
                        };
                    items.push(item);
                });
                return items;
            };
        var items = getItems();

        $.each(items, function (index, value) {
            image[index] = new Image();
            image[index].src = value['src'];
        });
        $('.prlightbox').on('click', function (event) {
            event.preventDefault();

            var $index = $(".active-thumb").parent().attr('data-slick-index');
            $index++;
            $index = $index - 1;

            var options = {
                index: $index,
                bgOpacity: 0.7,
                showHideOpacity: true
            };
            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });
    });
</script>

<div class="pswp" tabindex="-1" role="dialog">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>


</div>
<!--End Page Wrapper-->
</body>

</html>