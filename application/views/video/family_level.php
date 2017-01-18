<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>家族等级列表</title>

    <!--common style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/my_style.css">

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
                        <a href=""><i class="fa fa-th-list"></i>  <span>主播管理</span></a>
                        <ul class="child-list">
                            <li><a href="anchormanager_normalanchor.html"> 普通主播</a></li>
                            <li><a href="anchormanager_anchorcertification.html"> 认证主播</a></li>
                            <li><a href="anchormanager_robotimg.html"> 机器人头像</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>无效主播</span></a>
                        <ul class="child-list">
                            <li><a href="anchormanager_invalidanchor.html"> 无效主播</a></li>
                        </ul>
                    </li>

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>管理认证</span></a>
                        <ul class="child-list">
                            <li><a href="anchormanager_tocertificate.html"> 主播待审认证</a></li>
                            <li><a href="anchormanager_failedcertificate.html"> 认证未通过</a></li>
                            <li><a href="anchormanager_certificatename.html"> 认证名称列表</a></li>
                        </ul>
                    </li>

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>等级管理</span></a>
                        <ul class="child-list">
                            <li><a href="anchormanager_level.html"> 等级列表</a></li>
                        </ul>
                    </li>

                    <li class="menu-list nav-active">
                        <a href=""><i class="fa fa-th-list"></i>  <span>家族管理</span></a>
                        <ul class="child-list">
                            <li><a href="anchormanager_family.html"> 家族列表</a></li>
                            <li class="active"><a href="anchormanager_familylevel.html"> 家住等级列表</a></li>
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
                    <a href="index.html">
                        <img src="img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">SlickLab</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="img/logo-icon.png" alt="">
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
                    <li><a href="index.html"><span>系统首页</span></a></li>
                    <li><a href="anchormanager_normalanchor.html" class="active"><span>主播管理</span></a></li>
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
                <div class="main-title-list"><span>家族等级</span></div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"/></th>
                            <th>编号</th>
                            <th>等级名称</th>
                            <th>等级</th>
                            <th>所需积分值</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"/></td>
                            <td>7</td>
                            <td>Lv100</td>
                            <td>100</td>
                            <td>200000</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>删除</span></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6"><button class="add-row-btn"type="button">新增</button><button class="remove-btn"type="button">删除</button></th>
                        </tr>
                    </tfoot>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">新增<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="level-information"> 
                            <tr>
                                <td>等级:</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>等级名称:</td>
                                <td><input type="text" id="level-name"></td>
                            </tr>
                            <tr>
                                <td>所需积分:</td>
                                <td><input type="text" id="integral-needed"><span class="notice">必须大于上一级所需积分值2147483647</span></td>
                            </tr>
                            <tr id="edit-btns">
                                <td></td>
                                <td><button class="submit-btn" type="button">新增</button><button class="reset-btn" type="reset">重置</button></td>
                            </tr>
                        </table>
                    </form>                    
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
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- data table -->
<script src="lib/data-table/js/jquery.dataTables.min.js"></script>
<script src="lib/data-table/js/bootstrap-dataTable.js"></script>
<script src="js/table_init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


</body>
</html>
