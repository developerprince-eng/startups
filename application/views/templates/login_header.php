<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image" href=<?php echo base_url(); ?>"<?php echo base_url(); ?>assets/images/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/upload/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700|Montserrat:400,700|Poppins" rel="stylesheet">
    <!--===============================================================================================-->
    <script src="https://cdn.ckeditor.com/ckeditor5/10.1.0/classic/ckeditor.js"></script>

</head>
<body>
<div class="container">
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success>"'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>
</div>