

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>管理员列表</span></div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>管理员账号</th>
                            <th>管理员组</th>
                            <th>状态</th>
                            <th>最近上线时间</th>
                            <th>最近上线IP</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1375</td>
                            <td><a href="#">12345</a></td>
                            <td>运营1</td>
                            <td><a href="javascript: void(0);" name="state"><span>有效</span></a></td>
                            <td>2016-08-12 10:14:52</td>
                            <td>120.39.50.241</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>删除</span></a></li>
                                    <li><a href="javascript: void(0);"><span>设为默认管理员</span></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="8"><button class="add-row-btn"type="button">新增</button><button class="remove-btn"type="button">删除</button></th>
                        </tr>
                    </tfoot>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">新增<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="manager-add"> 
                            <tr>
                                <td class="item-title">管理员账号:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">管理员密码:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">管理员组:</td>
                                <td>
                                    <select name="" id="">
                                        <option value="0">选择</option>
                                        <option value="1">管理员</option>
                                        <option value="2">客户</option>
                                        <option value="3">测试</option>
                                    </select>
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
