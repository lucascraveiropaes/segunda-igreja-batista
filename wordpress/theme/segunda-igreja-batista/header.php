<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            <?php
                wp_title('-', 'true', 'right');  bloginfo( 'name' );
            ?> 
        </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/css/form-elements.css">
        <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/css/media-queries.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/assets/ico/favicon.ico">
    </head>
    <body>