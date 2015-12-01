<?php echo doctype();?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Mushi - Dashboard</title>
        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->
        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css' />
        <?php
        $styles = array(
            'public/css/theme-default/bootstrap.css',
            'public/css/theme-default/materialadmin.css',
            'public/css/theme-default/font-awesome.min.css',
            'public/css/theme-default/material-design-iconic-font.min.css',
            'public/css/theme-default/libs/rickshaw/rickshaw.css',
            'public/css/theme-default/libs/morris/morris.core.css'
        );
        foreach($styles as $css) {
            echo link_tag(site_url($css));
        }
        ?>
            <!-- END STYLESHEETS -->
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
        <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
    </head>

    <body class="menubar-hoverable header-fixed">
        <!-- BEGIN HEADER-->
        <?php $this->load->view('Blocks/Navbar'); ?>
            <!-- END HEADER-->
            <!-- BEGIN BASE-->
            <div id="base">
                <!-- BEGIN OFFCANVAS LEFT -->
                <div class="offcanvas"></div>
                <!--end .offcanvas-->
                <!-- END OFFCANVAS LEFT -->
                <!-- BEGIN CONTENT-->