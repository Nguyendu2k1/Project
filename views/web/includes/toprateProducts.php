<?php include_once('app/Models/Product.php') ?>

<?php
    $products = new Product();
    $toprateProducts = $products->getToprateProducts()->hydrate();
?>
                        <div class="latest-product__slider owl-carousel">
                            
                            <div class="latest-prdouct__slider__item">
                            
                                <?php foreach($toprateProducts as $toprateProduct): ?>
                                    <a href="<?php echo url("product/show/{$toprateProduct->product_id}") ?>" class="latest-product__item">
                                        <div class="row">
                                            <div class="latest-product__item__pic col-5">
                                                <img src="<?php echo asset("storage/{$toprateProduct->image}")?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text col-5">
                                                <h6><?php echo $toprateProduct->name; ?></h6>
                                                <span><?php echo $toprateProduct->formatPrice(); ?></span>
                                                <span><?php echo $toprateProduct->rate; ?><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php foreach($toprateProducts as $toprateProduct): ?>
                                    <a href="<?php echo url("product/show/{$toprateProduct->product_id}") ?>" class="latest-product__item">
                                    <div class="row">
                                            <div class="latest-product__item__pic col-5">
                                                <img src="<?php echo asset("storage/{$toprateProduct->image}")?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text col-5">
                                                <h6><?php echo $toprateProduct->name; ?></h6>
                                                <span><?php echo $toprateProduct->formatPrice(); ?></span>
                                                <span><?php echo $toprateProduct->rate; ?><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            </div>
                            
                        </div>