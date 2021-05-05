<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Media Informasi BKA</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts Icon CSS -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/et-line.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="<?php echo base_url() ?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/full-calendar.css" />
    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(6, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            grid-area: 1 / 3 / 7 / 5;
        }

        .div2 {
            grid-area: 1 / 1 / 4 / 3;
        }

        .div3 {
            grid-area: 4 / 1 / 7 / 3;
        }

        .fc-view {
            background-color: #FFFFFF;
        }

        .fc-time-grid-event {
            background-color: green;
        }

        .fc-event-container {
            color: #FFFFFF;
        }

        .fc-time span {
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>

<body onload=display_ct();>
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
    <div class="full-height">
        <div class="row fixed-top">
            <img src="<?php echo base_url() ?>assets/img/logo.png" style="width: 150px;height:auto;margin-top:35px;margin-left:50px">
        </div>
        <div class="row fixed-top">
            <img src="<?php echo base_url() ?>assets/img/slogan.png" style="width: 120px;height:auto;margin-top:20px;margin-left:200px">
        </div>