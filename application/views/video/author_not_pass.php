
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>主播认证审核未通过</span></div>
                <div class="search-row row">
                    <ul>
                        <li id="anchor-name">主播昵称：<input type="text" width="90px"></li>
                        <li>
                            <button class="search-btn" type="button">搜索</button>
                        </li>
                    </ul>
                </div>
                <table id="to-certification-lis" class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>主播昵称</th>
                            <th>认证名称</th>
                            <th>头像</th>
                            <th>粉丝</th>
                            <th>红票</th>
                            <th>等级</th>
                            <th>申请类型</th>
                            <th>申请状态</th>
                            <th>拒绝理由</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101428</td>
                            <td>。独孤求败。</td>
                            <td>美女美女美女美女美女美女美女美女美女</td>
                            <td><img src="img/avatar-mini.jpg" alt="头像"></td>
                            <td>0</td>
                            <td>0</td>
                            <td>Lv1</td>
                            <td>普通会员</td>
                            <td>审核未通过</td>
                            <td>丑</td>
                            <td><a href="javascript: void(0);">未通过</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="display: none;">
                    <div class="panel-title">查看信息<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <div class="main-title">审核通过<span>101428</span>成为普通会员</div>
                    <table class="member-information"> 
                        <tr>
                            <td>真实姓名:</td>
                            <td><input id="real-name" type="text" disabled="true" value="lind"/></td>
                        </tr>
                        <tr>
                            <td>身份证正面:</td>
                            <td>
                                <a href="javascript: void(0);"><img src="img/gallery/1.jpg" alt="图片"></a><span>&nbsp;点击图片查看</span>
                            </td>
                        </tr>
                        <tr>
                            <td>身份证反面:</td>
                            <td>
                                <a href="javascript: void(0);"><img src="img/gallery/1.jpg" alt="图片"></a><span>&nbsp;点击图片查看</span>
                            </td>
                        </tr>
                        <tr>
                            <td>手持身份证正面:</td>
                            <td>
                                <a href="javascript: void(0);"><img src="img/gallery/1.jpg" alt="图片"></a><span>&nbsp;点击图片查看</span>
                            </td>
                        </tr>
                        <tr>
                            <td>+v认证说明：</td>
                            <td><input type="text" style="width: 300px;" maxlength="16" /><span>最大长度为16</span></td>
                        </tr>
                        <tr>
                            <td>类型：</td>
                            <td>
                                <input type="radio" name="certification-type" value="1" checked="checked"/>&nbsp;查看
                                <input type="radio" name="certification-type" value="2"/>&nbsp;通过
                                <input type="radio" name="certification-type" value="3"/>&nbsp;未通过
                            </td>
                        </tr>
                        <tr id="introduction" style="display: none;">
                            <td>拒绝理由：</td>
                            <td><textarea cols="30" rows="2"></textarea></td>
                        </tr>
                        <tr id="edit-btns" style="display: none;">
                            <td></td>
                            <td><button class="submit-btn" type="button">编辑</button><button class="reset-btn" type="reset">重置</button></td>
                        </tr>
                    </table>
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
