

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>良好管理列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li>靓号ID：<input type="text" id="accoutn-ID"></li>
                        <li>主播昵称：<input type="text" id="anchor-name"></li>
                        <li>是否已卖出：
                            <select name="" id="is-sold">
                                <option value="0">全部</option>
                                <option value="1">是</option>
                                <option value="2">否</option>
                            </select>
                        </li>
                        <li><button class="search-btn">搜索</button></li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>主播昵称</th>
                            <th>是否被购买</th>
                            <th>售价</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1375</td>
                            <td>--</td>
                            <td><span style="color: green;">否</span></td>
                            <td>--</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>新增</span></a></li>
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
                        <table class="account-add"> 
                            <tr>
                                <td class="item-title">靓号ID:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">售价:</td>
                                <td>
                                    <input type="text">
                                </td>
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