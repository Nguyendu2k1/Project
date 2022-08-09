<?php include_once('views/admin/layouts/index.php')?>

<?php startblock('content') ?>
    <div class="content">
            <?php include('views/admin/layouts/includes/navbar.php') ?>

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="bg-light rounded h-100 p-4" style="text-align: center;">
                    
                        <a href="<?php echo url('admin/categories') ?>">
                            <button type="button" class="btn btn-lg btn-outline-dark w-50 m-2">Categories</button>
                        </a>
                    
                    
                        <a href="<?php echo url('admin/products') ?>">
                            <button type="button" class="btn btn-lg btn-outline-dark w-50 m-2">Products</button>
                        </a>
                    
                    
                        <a href="<?php echo url('admin/orders') ?>">
                            <button type="button" class="btn btn-lg btn-outline-dark w-50 m-2">Orders</button>
                        </a>
                    
                </div>
                </div>
            </div>
            <!-- Blank End -->
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="<?php echo url("homepage/index") ?>">Ogani Shop</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    </div>

<?php endblock()?>

