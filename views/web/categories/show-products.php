<?php include_once('views/web/layouts/app.php'); ?>

<?php startblock('hero') ?>
    <?php include('views/web/layouts/includes/hero.php') ?>
<?php endblock('') ?>

<?php startblock('content') ?>
    <?php include_once('views/web/includes/slider.php'); ?>

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>PRODUCTS</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                
                <?php if (count($products) > 0) :?>
                    <?php foreach($products as $product): ?>
                
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <?php include('views/web/includes/product.php') ?>
                        </div> 
                    <?php endforeach ?>
                <?php else: ?>
                    <div class="col-12" style="text-align: center; font-size:30px;">
                        
                            <b>No products found</b>
                        
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo asset('assets/web/img/banner/banner-1.jpg')?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo asset('assets/web/img/banner/banner-2.jpg')?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <?php include('views/web/includes/latestProducts.php') ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <?php include('views/web/includes/toprateProducts.php') ?>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
<?php endblock() ?>

