<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/elegant-icons.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/jquery-ui.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/nice-select.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/slicknav.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/web/css/style.css')?>">
</head>

<body>

    <?php include('views/web/layouts/includes/header.php')?>

    <?php defineblock('hero') ?>

    <?php defineblock('slider')?>


    <?php defineblock('content') ?>

    <?php include('views/web/layouts/includes/footer.php') ?>

    <!-- Js Plugins -->
    <script src="<?php echo asset('assets/web/js/jquery-3.3.1.min.js')?>"></script>
	<script src="<?php echo asset('assets/web/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo asset('assets/web/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?php echo asset('assets/web/js/jquery-ui.min.js')?>"></script>
    <script src="<?php echo asset('assets/web/js/jquery.slicknav.js')?>"></script>
    <script src="<?php echo asset('assets/web/js/mixitup.min.js')?>"></script>
    <script src="<?php echo asset('assets/web/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo asset('assets/web/js/main.js')?>"></script>
    <?php defineblock('scripts') ?>

</body>

</html>