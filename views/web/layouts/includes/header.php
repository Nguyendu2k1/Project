
<?php require_once('app/Models/Category.php'); ?>
<?php require_once('core/Auth.php'); ?>
<?php require_once('app/Models/Cart.php'); ?>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            
                            <div class="header__top__right__auth">
                            <?php if (!Auth::getUser('user')): ?>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo url('authentication/showLoginForm') ?>"><i class="fa fa-user"></i> Login</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo url('authentication/showRegisterForm') ?>"><i class="fa fa-user"></i>Register</a>
                                </div>
							<?php else:  ?>
                                <div class="header__top__right__auth">
                                    <span><i class="fa fa-user"></i><?php echo Auth::getUser('user')['name']?></span>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo url('shopcart/index') ?>"><i class="fa fa-user"></i>Your cart</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo url('authentication/logout') ?>"><i class="fa fa-user"></i>Logout</a>
                                </div>
							<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?php echo url('homepage/index') ?>"><img src="<?php echo asset('assets/web/img/logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?php echo url('homepage/index') ?>">Home</a></li>
                            
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?php echo url('shopcart/index') ?>">Shoping Cart</a></li>
                                    <li><a href="<?php echo url('checkout/index') ?>">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo url('blog/index') ?>">Blog</a></li>
                            <li><a href="<?php echo url('contact/index') ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <div class="header__top__right__auth">
                            
                                <div class="header__top__right__auth">
                                    <?php if (!Auth::getUser('user')): ?>
                                        <a href="<?php echo url('admin/authentication/index') ?>"><i class="fa fa-user"></i>Login as Admin</a>
                                    <?php else:  ?>
                                        
                                        <div></div>
                                    <?php endif; ?>
                                </div>
							
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </header>
    <!-- Header Section End -->
