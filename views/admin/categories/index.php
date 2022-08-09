<?php require_once('app/Models/Category.php'); ?>
<?php include_once('views/admin/layouts/index.php')?>

<?php startblock('content') ?>
    <div class="content">
            <?php include('views/admin/layouts/includes/navbar.php') ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div >
                                <a href="<?php echo url('admin/categories/showCreateForm') ?>"><button type="button" class="btn btn-lg btn-outline-dark m-2">Add a new Category</button></a>
                            </div>
                            <h3 class="mb-4 mt-4">CATEGORIES</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Image</th>
                                            <th scope="col" style="width: 15%;">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $category = new Category(); 
                                        $categories = $category->findAll()->hydrate();
                                    ?>
                                        <tr>
                                        <?php foreach($categories as $category): ?>
                                            <tr>
                                                <th scope="row"><?php echo $category->category_id; ?></th>
                                                <td><?php echo $category->name; ?></td>
                                                <td><?php echo $category->slug; ?></td>
                                                <td><img src="<?php echo asset("storage/{$category->image}"); ?>" alt="There's no image" style="width:100px;height:100px;"></td>
                                                <td>
                                                    <a href="<?php echo url("admin/categories/showUpdateForm", ['id' => $category->category_id]) ?>"><button class="btn btn-sm btn-warning">Edit</button></a>
                                                    <a href="<?php echo url("admin/categories/delete", ['id' => $category->category_id]) ?>" onclick="return confirm('Are you sure?')"><button class="btn btn-sm btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        </tr>
        
                                    </tbody>
                                </table>
                            </div>
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
