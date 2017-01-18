<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>首页</title>

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
</head>

<body class="sticky-header sidebar-open">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href=<?php echo site_url('index/index/1');?>>
                    <img src=<?php echo base_url("img/logo-icon.png")?> alt="">
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
                        <a href=''><i class="fa fa-home"></i>  <span>系统首页</span></a>
                        <ul class="child-list">
                            <li class="active"><a href=<?php echo site_url('index/index/1')?>> 快速导航</a></li>
                            <li><a href=<?php echo site_url('index/index/2')?>> 网站数据统计</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>系统日志</span></a>
                        <ul class="child-list">
                            <li><a href=<?php echo site_url('index/index/3')?>> 系统日志列表</a></li>
                        </ul>
                    </li>
                    
                </ul>

            </div>
        </div>
        <!-- sidebar left end-->

              <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                <!--点击logo跳转的页面-->
                
                    <a href=<?php echo base_url("system/index");?>>
                        <img src=<?php echo base_url("img/logo-icon.png")?> alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">SlickLab</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href=<?php echo site_url('zhubo/robot') ?>>
                        <img src=<?php echo base_url("img/logo-icon.png");?> alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                <!--mega menu start-->
               
                <!--mega menu end-->
                <div class="notification-wrap">
                <!--left notification start-->
                <div class="left-notification">
                <ul class="notification-menu clearfix">
                    <li><a href=""><span>系统首页</span></a></li>
                    <li><a class="active" href=<?php echo site_url('zhubo/robot');?> ><span>主播管理</span></a></li>
                    <li><a href=<?php echo site_url("video/topic");?>><span>视频管理</span></a></li>
                    <li><a href="#"><span>道具管理</span></a></li>
                    <li><a href="#"><span>资金管理</span></a></li>
                    <li><a href="#"><span>举报管理</span></a></li>
                    <li><a href="#"><span>文章管理</span></a></li>
                    <li><a href="#"><span>短信管理</span></a></li>
                    <li><a href="#"><span>系统设置</span></a></li>
                </ul>
                </div>
                <!--left notification end-->


                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span>John Doe</span>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="javascript:;"> 修改密码</a></li>
                                <li><a href="javascript:;"> 清除缓存</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> 注销登录</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title clearfix">
                    <span class="pull-left">上午好，admin!系统版本:1.0</span>
                    <span class="pull-right">你的最后登录时间为:<?php date_default_timezone_set('Asia/shanghai');echo date('Y-m-d H:m:s')?></span>
                </div>
                <div class="notify-box">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <table id="member-check">
                                        <thead>
                                            <tr>
                                                <th>会员审核</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>个人会员认证待审核：<span><?php echo $to_be_author ;?></span></td></tr>
                                            <tr><td>个人认证审核未通过：<span><?php echo $author_not_pass ;?></span></td></tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table id="recharge">
                                        <thead>
                                            <tr>
                                                <th>充值提现</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>充值单：<span><?php echo $charge ;?></span></td></tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php date_default_timezone_set('Asia/shanghai'); echo date('Y-m-d H:m:s');?> 数据实时指标</td>
                            </tr>
                            <tr>
                                <td>
                                    <table id="member-all">
                                        <thead>
                                            <tr>
                                                <th>会员统计</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>普通用户：<span><?php echo $common?></span></td></tr>
                                            <tr><td>认证用户：<span><?php echo $author;?></span></td></tr>
                                            <tr><td>机器人：<span><?php echo $robot;?></span></td></tr>
                                            <tr><td>会员总数：<span><?php echo $user_all; ?></span></td></tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table id="video-all">
                                        <thead>
                                            <tr>
                                                <th>直播统计</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>直播中视频：<span><?php echo $showing;?></span></td></tr>
                                            <tr><td>结束已保存视频：<span><?php echo $finished ; ?></span></td></tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>

            </footer>
            <!--footer section end-->

        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src=<?php echo base_url("js/jquery-1.10.2.min.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>

<!--common scripts for all pages-->
<script src=<?php echo base_url("js/scripts.js")?>></script>


</body>
</html>
