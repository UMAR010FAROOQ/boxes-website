<?php
include('header.php');
?>



<!-- Body Container -->
<div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title">
                        <h1>Shop Grid View</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a><span
                            class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span><span
                            class="main-title"><i class="icon anm anm-angle-right-l"></i>Shop Grid View</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">

        <!--Toolbar-->
        <div class="toolbar toolbar-wrapper shop-toolbar">
            <div class="row align-items-center">
                <div class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                    <!-- <button type="button"
                        class="btn btn-filter text icon anm anm-sliders-hr d-inline-flex me-2 me-lg-3"> Filter</button> -->
                    <div class="filters-item d-flex align-items-center">
                        <label class="mb-0 me-2 d-none d-lg-inline-block">View as:</label>
                        <div class="grid-options view-mode d-flex">
                            <!-- <a class="icon-mode mode-list d-block" data-col="1"></a> -->
                            <a class="icon-mode mode-grid grid-2 d-block" data-col="2"></a>
                            <a class="icon-mode mode-grid grid-3 d-md-block" data-col="3"></a>
                            <a class="icon-mode mode-grid grid-4 d-lg-block" data-col="4"></a>
                            <a class="icon-mode mode-grid grid-5 d-xl-block active" data-col="5"></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-12 col-sm-4 col-md-4 col-lg-4 text-center product-count order-0 order-md-1 mb-3 mb-sm-0">
                    <span class="toolbar-product-count">Showing: 15 products</span>
                </div>
                <div
                    class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                    <div class="filters-item d-flex align-items-center">
                        <label for="ShowBy" class="mb-0 me-2 text-nowrap d-none d-sm-inline-flex">Show:</label>
                        <select name="ShowBy" id="ShowBy" class="filters-toolbar-show">
                            <option value="title-ascending" selected="selected">10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                        </select>
                    </div>
                    <div class="filters-item d-flex align-items-center ms-2 ms-lg-3">
                        <label for="SortBy" class="mb-0 me-2 text-nowrap d-none">Sort by:</label>
                        <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                            <option value="featured" selected="selected">Featured</option>
                            <option value="best-selling">Best selling</option>
                            <option value="title-ascending">Alphabetically, A-Z</option>
                            <option value="title-descending">Alphabetically, Z-A</option>
                            <option value="price-ascending">Price, low to high</option>
                            <option value="price-descending">Price, high to low</option>
                            <option value="created-ascending">Date, old to new</option>
                            <option value="created-descending">Date, new to old</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!--End Toolbar-->

        <div class="row">

            <!--Products-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                <!--Product Grid-->
                <div class="grid-products grid-view-items">
                    <div
                        class="row col-row product-options row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-detail.php" class="product-img rounded-3">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product1.webp"
                                            src="assets/images/products/product1.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product1.webp"
                                            src="assets/images/products/product1.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product2.webp"
                                            src="assets/images/products/product2.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product2.webp"
                                            src="assets/images/products/product2.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product4.webp"
                                            src="assets/images/products/product4.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product4.webp"
                                            src="assets/images/products/product4.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product3.webp"
                                            src="assets/images/products/product3.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product3.webp"
                                            src="assets/images/products/product3.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product5.webp"
                                            src="assets/images/products/product5.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product5.webp"
                                            src="assets/images/products/product5.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product6.webp"
                                            src="assets/images/products/product6.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product6.webp"
                                            src="assets/images/products/product6.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product7.webp"
                                            src="assets/images/products/product7.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product7.webp"
                                            src="assets/images/products/product7.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-detail.php" class="product-img rounded-3">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product8.webp"
                                            src="assets/images/products/product8.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product8.webp"
                                            src="assets/images/products/product8.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-detail.php">Narror Neck Tie</a>
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product9.webp"
                                            src="assets/images/products/product9.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product9.webp"
                                            src="assets/images/products/product9.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product10.webp"
                                            src="assets/images/products/product10.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product10.webp"
                                            src="assets/images/products/product10.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product11.webp"
                                            src="assets/images/products/product11.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product11.webp"
                                            src="assets/images/products/product11.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product12.webp"
                                            src="assets/images/products/product12.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product12.webp"
                                            src="assets/images/products/product12.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product13.webp"
                                            src="assets/images/products/product13.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product13.webp"
                                            src="assets/images/products/product13.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product14.webp"
                                            src="assets/images/products/product14.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product14.webp"
                                            src="assets/images/products/product14.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product15.webp"
                                            src="assets/images/products/product15.webp" alt="Product" title="Product"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product15.webp"
                                            src="assets/images/products/product15.webp" alt="Product" title="Product"
                                            width="625" height="808" />
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

                    <!-- Pagination -->
                    <nav class="clearfix pagination-bottom">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#"><i
                                        class="icon anm anm-angle-left-l"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="icon anm anm-angle-right-l"></i></a></li>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                </div>
                <!--End Product Grid-->
            </div>
            <!--End Products-->
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->



<?php
include('footer.php');
?>