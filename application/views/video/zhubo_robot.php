

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>机器人头像列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="anchor-ID">主播ID：<input type="text"></li>
                        <li id="anchor-name">主播昵称：<input type="text" width="90px"></li>
                        <li id="manager">
                            系统管理员：
                            <select>
                                <option value="">全部</option>
                                <option value="">是</option>
                                <option value="">否</option>
                            </select>
                        </li>
                        <li id="time-picker">
                            时间：<input type="text">
                        </li>
                        <li>
                            <button class="search-btn" type="button" name="search">搜索</button>
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
                       <?php  foreach($user as $row):?>
                        <tr>
                            
                            <td><?php echo $row['uid'];?></td>
                            <td><a href="robotImg_detail.html">。<?php echo $row['username'];?>。</a></td>
                            <td><img src="img/avatar-mini.jpg" alt="头像"></td>
                            <td><?php echo $row['diamond'];?></td>
                            <td><?php echo $row['usediamond'];?></td>
                            <td><?php echo $row['red'];?></td>
                            <td><?php echo $row['leftred'];?></td>
                            <td><?php echo $row['jifen'];?></td>
                            
                            <td><a href="#"><?php echo $row['follows'];?></a></td>
                            <td><a href="#"><?php echo $row['fans'];?></a></td>
                            <td><?php echo $row['level'];?></td>
                            <td><a href="javascript: void(0);" name="bund"><span><?php $limit=isset($row['limit'])?$row['limit']:'否';echo $limit;?></span></a></td>
                            <td><a href="javascript: void(0);" name="state"><span><?php $status=isset($row['status'])?$row['status']:'有效'; echo $status;;?></span></a></td>
                            <td><a href='javascript: void(0);' type="submit" name='handle'>操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href=<?php echo site_url('zhubo/edit/').$row['uid'];?>><span>编辑</span></a></li>
                                    <li><a href=<?php echo site_url('zhubo/account/').$row['uid'];?>><span>账户管理</span></a></li>
                                    <li><a href=<?php echo site_url('zhubo/accountlog/').$row['uid'];?>><span>账户日志</span></a></li>
                                    <li><a href=<?php echo site_url('zhubo/exchangelog/').$row['uid'];?>><span>兑换日志</span></a></li>
                                    <li><a href=<?php echo site_url('zhubo/redcontribute/').$row['uid'];?>><span>红票贡献榜</span></a></li>
                                </ul>
                            </td>
                           
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="14"><button class="add-row-btn">新增</button></th>
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

<script>
    $('.add-row-btn').on('click', function() {
        window.location.href = <?php echo site_url('zhubo/add') ?>;
    });
</script>

<script src=<?php echo base_url("js/jquery-1.10.2.min.js");?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js");?>></script>


<!-- data table -->
<script src=<?php echo base_url("lib/data-table/js/jquery.dataTables.min.js");?>></script>
<script src=<?php echo base_url("lib/data-table/js/bootstrap-dataTable.js");?>></script>
<script src=<?php echo base_url("js/table_init.js");?>></script>

<!-- time picker -->
<script src=<?php echo base_url("lib/daterangepicker/moment.js");?>></script>
<script src=<?php echo base_url("lib/daterangepicker/daterangepicker.js");?>></script>
<script src=<?php echo base_url("js/time_picker.js");?>></script>
<!--common scripts for all pages-->
<script src=<?php echo base_url("js/scripts.js");?>></script>


</body>
</html>
