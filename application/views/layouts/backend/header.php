<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets/plugins/node-waves/waves.css') ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/plugins/animate-css/animate.css') ?>" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="<?php echo base_url('assets/plugins/material-design-preloader/md-preloader.css')?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url('assets/plugins/morrisjs/morris.css') ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('assets/css/themes/all-themes.css') ?>" rel="stylesheet" />

    <?php
    /**
     * CSS library for Admin embedding
     */
    if (isset($css_lib)) {
        foreach($css_lib as $cs) {
            echo '<link rel="stylesheet" href="'.resource_url($cs).'">';
        }
    }
    ?>
</head>