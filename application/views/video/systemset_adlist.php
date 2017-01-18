            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>广告列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li>关键词：<input type="text" id="key-word"></li>
                        <li><button class="search-btn">搜索</button></li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>标题</th>
                            <th>类型</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1375</td>
                            <td><a href="#">title</a></td>
                            <td>pc首页</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>删除</span></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5"><button class="add-row-btn"type="button">新增</button><button class="remove-btn"type="button">删除</button></th>
                        </tr>
                    </tfoot>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">新增<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="exchange-pro"> 
                            <tr>
                                <td class="item-title">标题:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">链接:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">图片:</td>
                                <td>
                                    <a href="javascript: void(0);" class="upload-img"><i class="fa fa-upload"></i>上传图片<input type="file"/></a>
                                    <img src="" alt="图片">
                                    <a href="javascript: void(0);" class="remove-img"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">显示位置:</td>
                                <td><select id="show-pos">
                                    <option value="0">轮播图</option>
                                    <option value="0">PC首页</option>
                                    <option value="0">启动广告</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td class="item-title">开始时间:</td>
                                <td class="single-time-picker">
                                    <input type="text" data-index="1">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">结束时间:</td>
                                <td class="single-time-picker">
                                    <input type="text" data-index="2">
                                </td>
                            </tr>
                            <tr>
                                <td class="item-title">排序:</td>
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

