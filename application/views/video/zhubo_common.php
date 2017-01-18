

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>普通主播列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="anchor-ID">主播ID：<input type="text"></li>
                        <li id="phone">手机号：<input type="text"></li>
                        <li id="anchor-name">主播昵称：<input type="text" width="90px"></li>
                        <li id="time-picker">
                            时间：<input type="text">
                        </li>
                        <li>
                            <button class="search-btn" type="button">搜索</button>
                        </li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>主播昵称</th>
                            <th>头像</th>
                            <th>钻石</th>
                            <th>累计消费钻石数</th>
                            <th>红票</th>
                            <th>可用红票</th>
                            <th>积分</th>
                            <th>关注</th>
                            <th>粉丝</th>
                            <th>等级</th>
                            <th>永久禁播</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?PHP  foreach($user as $row):?>
                        <tr>
                            <td><?php echo $row['uid']?></td>
                            <td><a href="normal_anchor_detail.html"><?php echo $row['nickname']?></a></td>
                            <td><img src=<?php echo base_url($row['headimgurl']);?> alt="头像"></td>
                            <td><?php echo $row['diamond'];?></td>
                            <td><?php echo $row['usediamond'];?></td>
                            <td><?php echo $row['red'];?></td>
                            <td><?php echo $row['leftred'];?></td>
                            <td><?php echo $row['jifen'];?></td>
                            <td><a href="#"><?php echo $row['follow'];?></a></td>
                            <td><a href="#"><?php echo $row['fans'];?></a></td>
                            <td><?php echo $row['level'];?></td>
                            <td><a href="javascript: void(0);" name="bund"><span>否</span></a></td>
                            <td><a href="javascript: void(0);" name="state"><span>有效</span></a></td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>账户管理</span></a></li>
                                    <li><a href="javascript: void(0);"><span>账户日志</span></a></li>
                                    <li><a href="javascript: void(0);"><span>兑换日志</span></a></li>
                                    <li><a href="javascript: void(0);"><span>红票贡献榜</span></a></li>
                                </ul>
                            </td>                           
                        </tr>
                    <?php endforeach;?>
                       
                    </tbody>
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
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- data table -->
<script src="lib/data-table/js/jquery.dataTables.min.js"></script>
<script src="lib/data-table/js/bootstrap-dataTable.js"></script>
<script src="js/table_init.js"></script>

<!-- time picker -->
<script src="lib/daterangepicker/moment.js"></script>
<script src="lib/daterangepicker/daterangepicker.js"></script>
<script src="js/time_picker.js"></script>
<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


</body>
</html>
