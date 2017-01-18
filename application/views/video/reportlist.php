

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>举报列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li>被举报房间号：<input type="text" id="reported-cellNo"></li>
                        <li>举报人：<input type="text" id="reporter"></li>
                        <li>被举报人：<input type="text" id="report-by"></li>
                        <li>举报类型：
                            <select id="report-type">
                                <option value="0">全部</option>
                                <option value="1">丑哭了</option>
                                <option value="2">暴力</option>
                                <option value="3">黄色</option>
                                <option value="4">广告</option>
                                <option value="5">煞笔</option>
                            </select>
                        </li>
                        <li id="time-picker">
                            举报时间：<input type="text">
                        </li>
                        <li>
                            <button class="search-btn" type="button">搜索</button>
                        </li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>被举报房间号</th>
                            <th>举报人</th>
                            <th>举报人QQ</th>
                            <th>被举报人</th>
                            <th>举报类型</th>
                            <th>截图</th>
                            <th>举报时间</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>136</td>
                            <td>2015316</td>
                            <td>用户6014727690</td>
                            <td>6014727690</td>
                            <td>6014727690</td>
                            <td>煞笔</td>
                            <td><img src="" alt="截图"></td>
                            <td>2016-12-07 15:11:52</td>
                            <td></td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>删除</span></a></li>
                                </ul>
                            </td>                           
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>136</td>
                            <td>2015316</td>
                            <td>用户6014727690</td>
                            <td>6014727690</td>
                            <td>6014727690</td>
                            <td>煞笔</td>
                            <td><img src="" alt="截图"></td>
                            <td>2016-12-07 15:11:52</td>
                            <td></td>
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
                            <th colspan="11"><button class="remove-btn"type="button">删除</button></th>
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
