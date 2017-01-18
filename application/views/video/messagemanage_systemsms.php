
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>系统消息列表</span></div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"/></th>
                            <th>编号</th>
                            <th>内容</th>
                            <th>发送人</th>
                            <th>发送时间</th>
                            <th>发送状态</th>
                            <th>发送方式</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"/></td>
                            <td>20</td>
                            <td>双十一活动 买 买 买 ！！！</td>
                            <td>系统消息</td>
                            <td>2016-11-08 14:41:10</td>
                            <td>已发送</td>
                            <td>所有主播</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>彻底删除</span></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="8"><button class="add-row-btn"type="button">新增</button><button class="remove-btn"type="button">彻底删除</button></th>
                        </tr>
                    </tfoot>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">新增<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="systemsms-content"> 
                            <tr>
                                <td>内容:</td>
                                <td>
                                    <textarea id="" cols="50" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>发送人:</td>
                                <td><select id="sender"><option value="0">系统消息</option></select></td>
                            </tr>
                            <tr>
                                <td>发送类型:</td>
                                <td>
                                    <select id="send-type">
                                        <option value="0">所有主播</option>
                                        <option value="1">群组</option>
                                        <option value="2">自定义主播</option>
                                    </select>
                                </td>
                            </tr>
                            <tr id="edit-btns">
                                <td></td>
                                <td><button class="submit-btn" type="button">发送</button><button class="reset-btn" type="reset">重置</button></td>
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
