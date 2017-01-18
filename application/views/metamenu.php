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
                    <li><a href=<?php echo site_url('zhubo/robot'); ?> ><span>主播管理</span></a></li>
                    <li><a href=<?php echo site_url("video/topic");?>><span>视频管理</span></a></li>
                    <li><a href=""><span>道具管理</span></a></li>
                    <li><a href=""><span>资金管理</span></a></li>
                    <li><a href=""><span>举报管理</span></a></li>
                    <li><a href=""><span>文章管理</span></a></li>
                    <li><a href=""><span>短信管理</span></a></li>
                    <li><a href=""><span>系统设置</span></a></li>
                </ul>
                </div>
                <!--left notification end-->


                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li class='log_out'>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span><?php echo $_SESSION['adminname']?></span>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="javascript:;"> 修改密码</a></li>
                                <li><a href="javascript:;"> 清除缓存</a></li>
                                <li><a href=<?php echo site_url('login/login');?>><i class="fa fa-sign-out pull-right"></i> 注销登录</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->