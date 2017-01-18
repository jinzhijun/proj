<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>系统日志列表</title>

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
                <a href="">
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
                    <li><a href="index.html" class="active"><span>系统首页</span></a></li>
                    <li><a href="anchormanager_normalanchor.html"><span>主播管理</span></a></li>
                    <li><a href="#"><span>视频管理</span></a></li>
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
                <div class="main-title-list"><span>后台日志</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="key-word">关键词：<input type="text"></li>
                        <li id="time-picker">时间：<input type="text"></li>
                        <li><button class="search-btn" type="button">搜索</button></li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"/></th>
                            <th>编号</th>
                            <th>日志信息</th>
                            <th>操作时间</th>
                            <th>操作IP</th>
                            <th>管理员</th>
                            <th>操作结果</th>
                            <th>模块</th>
                            <th>函数</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query as $row):?>
                        <tr>
                            <td><input type="checkbox"/></td>
                            <td>9439</td>
                            <td>管理员操作</td>
                            <td><?php date_default_timezone_set("Asia/Shanghai"); echo date('Y-m-d H:m:s');?></td>
                            <td><?php echo $ip;?></td>
                            <td>admin</td>
                            <td>成功</td>
                            <td>UserGeneral</td>
                            <td>modify_account</td>
                            <td><a href="#" name="remove">彻底删除</a></td>
                        </tr>
                       
                        <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="10"><button class="remove-btn"type="button">删除</button></th>
                        </tr>
                    </tfoot>
                </table>
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

<!-- data table -->
<script src=<?php echo base_url("lib/data-table/js/jquery.dataTables.min.js")?>></script>
<script src=<?php echo base_url("lib/data-table/js/bootstrap-dataTable.js")?>></script>
<script src=<?php echo base_url("js/table_init.js")?>></script>

<!-- time picker -->
<script src=<?php echo base_url("lib/daterangepicker/moment.js")?>></script>
<script src=<?php echo base_url("lib/daterangepicker/daterangepicker.js")?>></script>
<script src=<?php echo base_url("js/time_picker.js")?>></script>
<!--common scripts for all pages-->
<script src=<?php echo base_url("js/scripts.js")?>></script>


</body>
</html>
