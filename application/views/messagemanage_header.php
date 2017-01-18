<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>业务队列列表</title>

    <link href=<?php echo base_url("css/style.css")?> rel="stylesheet">
    <link href=<?php echo base_url("css/style-responsive.css");?> rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url("css/my_style.css");?>>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header sidebar-open">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html">
                    <img src=<?php echo base_url("img/logo-icon.png");?> alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>短信管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('message/index/1');?>> 短信接口管理</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>系统消息管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('message/index/2');?>> 系统消息列表</a></li>
                        </ul>
                    </li>
                    <li class="menu-list nav-active">
                        <a href=""><i class="fa fa-th-list"></i>  <span>队列管理</span></a>
                        <ul class="child-list">
                            <li class="active"><a href=<?php echo site_url('message/index/3');?>> 业务队列列表</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- sidebar left end-->

