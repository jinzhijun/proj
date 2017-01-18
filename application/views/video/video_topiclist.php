

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>话题</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="category-name">分类名称：<input type="text"></li>
                        <li id="time-picker">时间：<input type="text"></li>
                        <li><button class="search-btn" type="button">搜索</button></li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>分类名称</th>
                            <th>当前直播数量</th>
                            <th>创建时间</th>
                            <th>描述</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>101428</td>
                            <td><a href="#" name="category-name">。独孤求败。</a></td>
                            <td>0</td>
                            <td>2016-12-07 11:22:57</td>
                            <td>0</td>
                            <td>0</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>删除</span></a></li>
                                </ul>
                            </td>                           
                        </tr>
                    </tbody>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">查看话题信息<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="topic-information"> 
                            <tr>
                                <td>话题名称:</td>
                                <td>独孤求败，东方不败，西方失败</td>
                            </tr>
                            <tr>
                                <td>描述:</td>
                                <td>
                                    <textarea id="introduction" cols="50" rows="10" name="description"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>排序:</td>
                                <td>
                                    <input type="text" id="order">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="submit-btn" type="button">编辑</button><button class="reset-btn" type="reset">重置</button></td>
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

