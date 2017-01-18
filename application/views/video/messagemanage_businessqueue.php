
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>业务队列列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li>接收人：<input type="text" id="receiver"></li>
                        <li>内容：<input type="text" id="message-content"></li>
                        <li><button class="search-btn">搜索</button></li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>发送类型</th>
                            <th>接收人</th>
                            <th>会员ID</th>
                            <th>标题</th>
                            <th>内容</th>
                            <th>验证码</th>
                            <th>创建时间</th>
                            <th>结束时间</th>
                            <th>发送状态</th>
                            <th>结果</th>
                            <th>信息</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1375</td>
                            <td>短信</td>
                            <td>18060031976</td>
                            <td>101726</td>
                            <td>短信验证码</td>
                            <td><a href="#">查看</a></td>
                            <td>7976</td>
                            <td>2016-12-08 14:21:51</td>
                            <td>2016-12-08 14:21:51</td>
                            <td>是</td>
                            <td>成功</td>
                            <td>发送成功</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>发送</span></a></li>
                                    <li><a href="javascript: void(0);"><span>彻底删除</span></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="14"><button class="remove-btn"type="button">彻底删除</button><button class="send-queue-btn"type="button">重置队列发送(队列因卡死,长时间无法发送时请重置)</button></th>
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
