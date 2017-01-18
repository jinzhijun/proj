<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>直播-管理平台</title>

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
                    <img src="img/logo-icon.png" alt="">
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
                        <a href=""><i class="fa fa-th-list"></i>  <span>系统设置</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('system/set/1')?>> 系统配置</a></li>
                            <li><a href=<?php echo site_url('system/index/1')?>> 广告设置</a></li>
                            <li><a href=<?php echo site_url('system/index/2')?>> 兑换规则</a></li>
                            <li><a href=<?php echo site_url('system/index/3')?>> 购买规则</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>广告配置</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('system/index/4')?>> 广告列表</a></li>
                            <li><a href=<?php echo site_url('system/index/5')?>> 广告区域</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>移动平台设置</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('system/set/2')?>> 手机端配置</a></li>
                            <li><a href=<?php echo site_url('system/set/3')?>> 脏字库配置</a></li>
                        </ul>
                    </li>
                    <li class="menu-list nav-active">
                        <a href=""><i class="fa fa-th-list"></i>  <span>系统管理员</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('system/index/6')?>> 管理员分组列表</a></li>
                            <li><a href=<?php echo site_url('system/index/7')?>> 管理员分组回收站</a></li>
                            <li class="active"><a href=<?php echo site_url('system/index/8')?>> 管理员列表</a></li>
                            <li><a href=<?php echo site_url('system/index/9')?>> 管理员回收站</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>集群组配置</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('system/index/10')?>> 集群组列表</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>靓号管理</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('system/index/11')?>> 靓号管理</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- sidebar left end-->
