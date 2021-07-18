<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/aos.css">
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/<?= $css; ?>">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

    <link rel="shortcut icon" href="<?= base_url(); ?>/img/icon/logo.png">
    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/js/validate.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/js/counterup.min.js"></script>
    <script src="<?= base_url(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/js/venobox.min.js"></script>
    <script src="<?= base_url(); ?>/js/aos.js"></script>
    <script src="<?= base_url('/js/sweetalert2.all.min.js'); ?>"></script>
    <script src=" <?= base_url('/js/script.js'); ?>"></script>
</body>

</html>