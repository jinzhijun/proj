
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>家族列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="family-name">家族名：<input type="text"></li>
                        <li id="family-host">族长名：<input type="text"></li>
                        <li id="family-state">
                            状态：
                            <select>
                                <option value="0">所有</option>
                                <option value="1">未审核</option>
                                <option value="2">审核通过</option>
                                <option value="3">拒绝通过</option>
                            </select>
                        </li>
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
                            <th>家族名</th>
                            <th>家族LOGO</th>
                            <th>家族宣言</th>
                            <th>族长名</th>
                            <th>创建时间</th>
                            <th>备注</th>
                            <th>未审核</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101428</td>
                            <td>。独孤求败house。</td>
                            <td><img src="img/avatar-mini.jpg" alt="头像"></td>
                            <td>独孤天下，只求一败</td>
                            <td>独孤一号</td>
                            <td>2016-12-07 14:21:19</td>
                            <td>无</td>
                            <td>未审核</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>家族详情</span></a></li>
                                    <li><a href="javascript: void(0);"><span>成员列表</span></a></li>
                                </ul>
                            </td>                           
                        </tr>
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
