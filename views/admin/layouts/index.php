<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Ogani Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/tempusdominus-bootstrap-4.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/style.css')?>">
    
    
</head>
<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <?php include('views/admin/layouts/includes/sidebar.php'); ?>
    
    <?php defineblock('content'); ?>
</div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo asset('assets/admin/js/easing.min.js')?>"></script>>
    <script src="<?php echo asset('assets/admin/js/moment-timezone.min.js')?>"></script>>
    <script src="<?php echo asset('assets/admin/js/moment.min.js')?>"></script>>
    <script src="<?php echo asset('assets/admin/js/owl.carousel.min.js')?>"></script>>
    <script src="<?php echo asset('assets/admin/js/waypoints.min.js')?>"></script>>
    <script src="<?php echo asset('assets/admin/js/tempusdominus-bootstrap-4.js')?>"></script>>
    <script src="<?php echo asset('assets/admin/js/main.js')?>"></script>>
</body>
</html>

