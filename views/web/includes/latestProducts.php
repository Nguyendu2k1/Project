<?php include_once('app/Models/Product.php') ?>

<?php
    $products = new Product();
    $latestProducts = $products->getLatestProducts()->hydrate();
?>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php foreach($latestProducts as $latestProduct): ?>
                                    <a href="<?php echo url("product/show/{$latestProduct->product_id}") ?>" class="latest-product__item">
                                        <div class="row">
                                            <div class="latest-product__item__pic col-5">
                                                <img src="<?php echo asset("storage/{$latestProduct->image}")?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text col-5">
                                                <h6><?php echo $latestProduct->name; ?></h6>
                                                <span><?php echo $latestProduct->formatPrice(); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>

                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php foreach($latestProducts as $latestProduct): ?>
                                    <a href="<?php echo url("product/show/{$latestProduct->product_id}") ?>" class="latest-product__item">
                                        <div class="row">
                                            <div class="latest-product__item__pic col-5">
                                                <img src="<?php echo asset("storage/{$latestProduct->image}")?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text col-5">
                                                <h6><?php echo $latestProduct->name; ?></h6>
                                                <span><?php echo $latestProduct->formatPrice(); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>

                            </div>
                        </div>