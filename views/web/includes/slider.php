<?php require_once('app/Models/Category.php'); ?>

<?php 
    $category = new Category(); 
    $categories = $category->findAll()->hydrate();    
?>
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php foreach($categories as $category): ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo asset("storage/{$category->image}")?>">
                            <h5><a href="<?php echo url("categories/show-products/".$category->slug) ?>"><?php echo $category->name?></a></h5>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->