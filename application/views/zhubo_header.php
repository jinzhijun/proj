<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title><?php //echo $title ?>主播管理</title>

    <!--common style-->
    <link href=<?php echo base_url("css/style.css")?> rel="stylesheet">
    <link href=<?php echo base_url("css/style-responsive.css");?> rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url("css/my_style.css");?>>

    <link rel="stylesheet" href=<?php echo base_url("lib/daterangepicker/daterangepicker.css");?>>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        document.getElementByID('logourl').href=<?php echo site_url('index/index')?>;
        document.getElementByID('logoimg').src=<?php echo base_url('img/logo-icon.png')?>;
    </script>
</head>

<body class="sticky-header sidebar-open">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html" id="logourl">
                    <img src="img/logo-icon.png" alt="" id="logoimg">
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
                        <a href=""><i class="fa fa-th-list"></i>  <span>主播管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('zhubo/common') ?>> 普通主播</a></li>
                            <li><a href=<?php echo site_url('zhubo/author') ?>> 认证主播</a></li>
                            <li class="active"><a href=<?php echo site_url('zhubo/robot') ?>> 机器人</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>无效主播</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('zhubo/invalid') ?>> 无效主播</a></li>
                        </ul>
                    </li>

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>认证管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('zhubo/another/index/1') ?>> 主播待审认证</a></li>
                            <li><a href=<?php echo site_url('zhubo/another/index/2') ?>> 认证未通过</a></li>
                            <li><a href=<?php echo site_url('zhubo/another/index/3') ?>> 认证名称列表</a></li>
                        </ul>
                    </li>

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>等级管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('zhubo/another/index/4') ?>> 等级列表</a></li>
                        </ul>
                    </li>

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>家族管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('zhubo/another/index/5') ?>> 家族列表</a></li>
                            <li><a href=<?php echo site_url('zhubo/another/index/6') ?>> 家族等级列表</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- sidebar left end-->

 
