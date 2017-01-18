
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>回播列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="anchor-name">主播昵称：<input type="text" width="90px"></li>
                        <li id="house-ID">房间号：<input type="text"></li>
                        <li id="online">
                          上线：
                            <select>
                                <option value="0">全部</option>
                                <option value="1">是</option>
                                <option value="2">否</option>
                            </select>  
                        </li>
                        <li id="topic">
                            话题：
                            <select>
                                <option value="0">全部</option>
                                <option value="1">厉害了我的哥</option>
                                <option value="2">碉堡了</option>
                            </select>
                        </li>
                        <li id="time-picker">时间：<input type="text"></li>
                        <li><button class="search-btn" type="button">搜索</button></li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>房间号</th>
                            <th>主播</th>
                            <th>直播标题</th>
                            <th>累计观看人数</th>
                            <th>红票</th>
                            <th>直播类型</th>
                            <th>上线</th>
                            <th>创建时间</th>
                            <th>结束时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>2013692</td>
                            <td>。独孤求败。</td>
                            <td>我的天哪</td>
                            <td>10201</td>
                            <td>10</td>
                            <td>互动聊天室</td>
                            <td>上线</td>
                            <td>2016-12-07 11:22:57</td>
                            <td>2016-11-22 16:32:12</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>查看</span></a></li>
                                    <li><a href="javascript: void(0);"><span>上线</span></a></li>
                                    <li><a href="javascript: void(0);"><span>彻底删除</span></a></li>
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

