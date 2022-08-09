
    <div class="featured__item">

        <a href="<?php echo url("product/show/{$product->product_id}") ?>">
            <div class="featured__item__pic set-bg" data-setbg="<?php echo asset("storage/{$product->image}") ?>">
                <ul class="featured__item__pic__hover">
                    <li>
                        <form action="#" method="POST">
                            <button type="submit" style="background-color: lightgreen;"><i class="fa fa-heart"></i></i></button>
                        </form>
                    </li>    
                    
                    <li>
                        <form action="<?php echo url("shopcart/add/{$product->product_id}")?>" method="POST">
                            <button type="submit" style="background-color: lightgreen;"><i class="fa fa-shopping-cart"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            
            <div class="featured__item__text">
                <h6><a href="<?php echo url("product/show/{$product->product_id}") ?>"><?php echo $product->name; ?></a></h6>
                <h5><?php echo $product->formatPrice(); ?> VND</h5>
            </div>
        </a>
    </div>
