

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>会员等级</span></div>
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
