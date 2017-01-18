<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>编辑无效主播信息</title>

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
                    
                    <li class="menu-list nav-active">
                        <a href=""><i class="fa fa-th-list"></i>  <span>无效主播</span></a>
                        <ul class="child-list">
                            <li class="active"><a href="anchormanager_invalidanchor.html"> 无效主播</a></li>
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

                    <li class="menu-list">
                        <a href=""><i class="fa fa-th-list"></i>  <span>家族管理</span></a>
                        <ul class="child-list">
                            <li><a href="anchormanager_family.html"> 家族列表</a></li>
                            <li><a href="anchormanager_familylevel.html"> 家住等级列表</a></li>
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
                <div class="main-title"><a href="#" onclick="history.go(-1)"><span>返回列表</span></a></div>
                <form action="" name="edit">
                    <table class="anchor-information">
                        <tr>
                            <td>编号：</td>
                            <td>102699</td>
                        </tr>
                        <tr>
                            <td>主播昵称：</td>
                            <td><input type="text"/></td>
                        </tr>
                        <tr>
                            <td>手机：</td>
                            <td><input type="text"/></td>
                        </tr>
                        <tr>
                            <td>所属地区：</td>
                            <td>
                                <select name="province" id="province">
                                    <option value="0">请选择省份</option>
                                </select>
                                <select name="city" id="city">
                                    <option value="0">请选择城市</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>性别：</td>
                            <td>女&nbsp;<input type="radio" name="gender" value="1" checked="checked" />&nbsp;男&nbsp;<input type="radio" name="gender" value="2"/></td>
                        </tr>
                        <tr>
                            <td>会员类型：</td>
                            <td>
                                <select>
                                    <option value="普通">普通会员</option>
                                    <option value="企业">企业会员</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>会员等级：</td>
                            <td><select id="level"></select></td>
                        </tr>
                        <tr>
                            <td>简介：</td>
                            <td><textarea cols="60" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td>状态：</td>
                            <td>有效&nbsp;<input type="radio" name="state" value="1" checked="checked"/>&nbsp;无效&nbsp;<input type="radio" name="state" value="2"/></td>
                        </tr>
                    </table>
                    <table class="certification">
                        <tr>
                            <td>认证审核：</td>
                            <td>
                                <input type="radio" name="certification" value="1" checked="checked"/>&nbsp;未认证（取消认证）
                                <input type="radio" name="certification" value="2"/>&nbsp;待审核
                                <input type="radio" name="certification" value="3"/>&nbsp;已认证
                                <input type="radio" name="certification" value="4"/>&nbsp;审核不通过
                            </td>
                        </tr>                       
                        <tr>
                            <td>认证类型：</td>
                            <td>
                                <select id="type">
                                    <option value="0">请选择类型</option>
                                    <option value="美女">美女</option>
                                    <option value="帅哥">帅哥</option>
                                    <option value="著名网红">著名网红</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>认证名称:</td>
                            <td><input type="text" style="width: 450px;"/></td>
                        </tr>
                    </table>
                    <table class="buttons">                       
                        <tr>
                            <td></td>
                            <td><button class="submit-btn" type="button">编辑</button><button class="reset-btn" type="reset">重置</button></td>
                        </tr>
                    </table>
                </form>
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

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


</body>
</html>
