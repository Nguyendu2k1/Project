<?php include_once('views/web/layouts/app.php');?>

<?php startblock('hero') ?>
    <?php include('views/web/layouts/includes/hero1.php') ?>
<?php endblock('') ?>

<?php startblock('content') ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo asset('assets/web/img/breadcrumb.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detail Product</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?php echo asset("storage/{$product->image}") ?>" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $product->name ?></h3>
                        <div class="product__details__rating">

                            <span><?php echo $product->rate ?><i class="fa fa-star"></i></span>
                            
                        </div>
                        <div class="product__details__price"><?php echo $product->formatPrice(); ?> VND</div>
                        <b>Description:</b><p><?php echo $product->description ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                
                            </div>
                        </div>
                        <div style="display: inline-block;">
                            <form action="<?php echo url("shopcart/add/{$product->product_id}")?>" method="POST">
                                <button type="submit" class="primary-btn" style="border: none;">ADD TO CARD</button>
                            </form>
                        </div>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            
                            <li><b>Weight</b> <span><?php echo $product->weight ?> kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

<?php endblock() ?>