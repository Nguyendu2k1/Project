<?php require_once('app/Models/Category.php') ?>
<?php include_once('views/admin/layouts/index.php')?>

<?php startblock('content') ?>
    <div class="content">
            <?php include('views/admin/layouts/includes/navbar.php') ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form action="<?php echo url("admin/products/create") ?>" method="POST" enctype="multipart/form-data" style="text-align:center">
                            <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="descrption" name="description">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="rate" class="col-sm-2 col-form-label">Rate</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.1" class="form-control" id="rate" name="rate">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="1000" class="form-control" id="price" name="price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.1" class="form-control" id="weight" name="weight">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="floatingInput" class="col-sm-2 col-form-label">Image</label>
                                    <input type="file" class="form-group col-sm-10" id="floatingInput" name="upload"
                                        placeholder="name@example.com">
                                    
                                </div>
                                <div class="row mb-3">
                                    <label for="in_category" class="col-sm-2 col-form-label">In Category</label>
                                    <select style="width: 82%;" class="form-select col-sm-10" id="in_category" name="category_id">
                                        
                                        <?php
                                            $category = new Category();
                                            $categories = $category->findAll()->hydrate();
                                        ?>
                                        <?php foreach($categories as $category): ?>
                                            <option value="<?php echo $category->category_id ?>"><?php echo $category->name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary w-25">Create</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Table End -->


            
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
