<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>支付接口列表</title>

    <!--common style-->
    <link href=<?php echo base_url("css/style.css")?> rel="stylesheet">
    <link href=<?php echo base_url("css/style-responsive.css")?> rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url("css/my_style.css")?>>

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
                    <li class="menu-list nav-active">
                        <a href=""><i class="fa fa-th-list"></i>  <span>支付接口</span></a>
                        <ul class="child-list">
                            <li class="active"><a href=<?php echo site_url('fund/index/1'); ?>> 支付接口列表</a></li>
                        </ul>
                    </li>

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>充值管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('fund/index/2'); ?>> 在线充值</a></li>
                        </ul>
                    </li>

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>提现管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('fund/index/3'); ?>> 提现列表</a></li>
                            <li><a href=<?php echo site_url('fund/index/4'); ?>> 提现待审核记录</a></li>
                            <li><a href=<?php echo site_url('fund/index/5'); ?>> 提现待确认记录</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- sidebar left end-->

