  
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>道具列表</span></div>
                <div class="search-row row">
                    <ul>
                        <li>名称：<input type="text" id="prop-name"></li>
                        <li>
                            展示动画：
                            <select id="animation">
                                <option value="0">所有</option>
                                <option value="1">普通礼物</option>
                                <option value="2">gif礼物</option>
                                <option value="3">大型动画礼物</option>
                            </select>
                        </li>
                        <li><button class="search-btn" type="button">搜索</button></li>
                    </ul>
                </div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>编号</th>
                            <th>名称</th>
                            <th>积分</th>
                            <th>消费钻石</th>
                            <th>红票/钻石（红包时表示钻石）</th>
                            <th>红包</th>
                            <th>展示动画</th>
                            <th><span>状态</span></th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>36</td>
                            <td>兰博基尼</td>
                            <td>1200</td>
                            <td>1200</td>
                            <td>1200</td>
                            <td>否</td>
                            <td>普通礼物</td>
                            <td><a href="javascript: void(0);" name="state"><span>有效</span></a></td>
                            <td>16</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>动画列表</span></a></li>
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>删除</span></a></li>
                                </ul>
                            </td>                           
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="11"><button class="add-row-btn"type="button">新增</button><button class="remove-btn"type="button">删除</button></th>
                        </tr>
                    </tfoot>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">新增<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="prop-information"> 
                            <tr>
                                <td>名称:</td>
                                <td><input id="prop-name" type="text"/></td>
                            </tr>
                            <tr>
                                <td>图标:</td>
                                <td>
                                    <a href="javascript: void(0);"><img src="img/gallery/1.jpg" alt="图片"></a>
                                    <p><span>&nbsp;[普通礼物图标规格为：200px*200px] [gif礼物规格为：400px*250px] [大型动画礼物规格：咨询技术人员]</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>积分:</td>
                                <td><input id="integral" type="text"/></td>
                            </tr>
                            <tr>
                                <td>消费钻石:</td>
                                <td><input id="purchase-diamond" type="text"/></td>
                            </tr>
                            <tr>
                                <td>红包：</td>
                                <td>
                                    <input type="radio" name="red-bag" value="1" checked="checked"/>&nbsp;是
                                    <input type="radio" name="red-bag" value="0"/>&nbsp;否
                                </td>
                            </tr>
                            <tr>
                                <td>红票数量:</td>
                                <td><input id="red-ticket-num" type="text"/></td>
                            </tr>
                            <tr>
                                <td>可连续发送：</td>
                                <td>
                                    <input type="radio" name="continuity-send" value="1" checked="checked"/>&nbsp;是
                                    <input type="radio" name="continuity-send" value="0"/>&nbsp;否
                                </td>
                            </tr>
                            <tr>
                                <td>展示动画：</td>
                                <td>
                                    <input type="radio" name="animation" value="0" checked="checked"/>&nbsp;普通动画
                                    <input type="radio" name="animation" value="1"/>&nbsp;gif动画
                                    <input type="radio" name="animation" value="2"/>&nbsp;大型动画
                                </td>
                            </tr>
                            <tr>
                                <td>状态：</td>
                                <td>
                                    <input type="radio" name="effection" value="1" checked="checked"/>&nbsp;有效
                                    <input type="radio" name="effection" value="0"/>&nbsp;无效
                                </td>
                            </tr>
                            <tr>
                                <td>排序：</td>
                                <td><input type="text" id="order"></td>
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

