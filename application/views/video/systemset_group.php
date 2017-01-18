<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>直播-管理平台</title>

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
                        <a href=""><i class="fa fa-th-list"></i>  <span>系统设置</span></a>
                        <ul class="child-list">
                            <li><a href="systemset_systemconfiguration.html"> 系统配置</a></li>
                            <li><a href="systemset_advertisement.html"> 广告设置</a></li>
                            <li><a href="systemset_exchangepro.html"> 兑换规则</a></li>
                            <li><a href="systemset_purchasepro.html"> 购买规则</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>广告配置</span></a>
                        <ul class="child-list">
                            <li><a href="systemset_adlist.html"> 广告列表</a></li>
                            <li><a href="systemset_adarea.html"> 广告区域</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>移动平台设置</span></a>
                        <ul class="child-list">
                            <li><a href="systemset_mobile.html"> 手机端配置</a></li>
                            <li><a href="systemset_dirty.html"> 脏字库配置</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>系统管理员</span></a>
                        <ul class="child-list">
                            <li><a href="systemset_managergroup.html"> 管理员分组列表</a></li>
                            <li><a href="systemset_managergrouprecovery.html"> 管理员分组回收站</a></li>
                            <li><a href="systemset_managerlist.html"> 管理员列表</a></li>
                            <li><a href="systemset_managerrecovery.html"> 管理员回收站</a></li>
                        </ul>
                    </li>
                    <li class="menu-list nav-active">
                        <a href=""><i class="fa fa-th-list"></i>  <span>集群组配置</span></a>
                        <ul class="child-list">
                            <li class="active"><a href="systemset_group.html"> 集群组列表</a></li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>靓号管理</span></a>
                        <ul class="child-list">
                            <li><a href="systemset_account.html"> 靓号管理</a></li>
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
                    <li><a href="#"><span>系统首页</span></a></li>
                    <li><a href="#"><span>主播管理</span></a></li>
                    <li><a href="#"><span>视频管理</span></a></li>
                    <li><a href="#"><span>道具管理</span></a></li>
                    <li><a href="#"><span>资金管理</span></a></li>
                    <li><a href="#"><span>举报管理</span></a></li>
                    <li><a href="#"><span>文章管理</span></a></li>
                    <li><a href="#"><span>短信管理</span></a></li>
                    <li><a href="#" class="active"><span>系统设置</span></a></li>
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
                <div class="main-title-list"><span>集群组列表</span></div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>服务器名称</th>
                            <th>接口服务器</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1375</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>新增</span></a></li>
                                    <li><a href="javascript: void(0);"><span>彻底删除</span></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6"><button class="add-row-btn"type="button">新增</button><button class="remove-btn"type="button">彻底删除</button></th>
                        </tr>
                    </tfoot>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">新增<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="server-add"> 
                            <tr>
                                <td class="item-title">服务器名称:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">服务器地址:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title"></td>
                                <td>有效&nbsp;<input type="radio" name="state" checked>&nbsp;无效&nbsp;<input type="radio" name="state"></td>
                            </tr>
                            <tr id="edit-btns">
                                <td class="item-title"></td>
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
