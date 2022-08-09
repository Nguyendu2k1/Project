
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?php echo url('admin/homepage') ?>" class="navbar-brand mx-4 mb-3">
                
                    <h3 class="text-primary"><i class="fa fa-home"></i> OGANI SHOP</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo asset('assets/admin/img/user1.jpg') ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Du Nguyen</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo url('admin/homepage') ?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="<?php echo url('admin/categories') ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>CATEGORIES</a>
                    
                    <a href="<?php echo url('admin/products') ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>PRODUCTS</a>
                    <a href="<?php echo url('admin/orders') ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>ORDERS</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->