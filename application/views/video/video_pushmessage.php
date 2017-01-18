            
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>推送消息列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="anchor-name">主播昵称：<input type="text" width="90px"></li>
                        <li id="house-ID">房间号：<input type="text"></li>
                        <li id="push-state">
                            推送状态：
                            <select>
                                <option value="0">全部</option>
                                <option value="1">未推送</option>
                                <option value="3">推送中</option>
                                <option value="4">已推送</option>
                            </select>
                        </li>
                        <li id="push-type">
                            推送类型：
                            <select>
                                <option value="0">全部</option>
                                <option value="1">粉丝推送</option>
                                <option value="2">全服推送</option>
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
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>主播</th>
                            <th>直播标题</th>
                            <th>房间ID</th>
                            <th>直播城市</th>
                            <th>推送状态</th>
                            <th>推送类型</th>
                            <th>创建时间</th>
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
                            <td>厦门</td>
                            <td>已推送</td>
                            <td>全服推送</td>
                            <td>2016-12-07 11:22:57</td>
                            <td><a href="javascript: void(0);">删除</a></td>                           
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="10"><button class="remove-btn"type="button">删除</button></th>
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

