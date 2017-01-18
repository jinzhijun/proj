

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>支付接口列表</span></div>
                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>支付接口名称</th>
                            <th>状态</th>
                            <th>安装</th>
                            <th>已收款</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>微信支付</td>
                            <td>有效</td>
                            <td>已安装</td>
                            <td>¥1.09<a href="#" name='check'>&nbsp;查看</a></td>
                            <td>5</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>卸载</span></a></li>
                                </ul>
                            </td>                         
                        </tr>
                        <tr>
                            <td>新支付宝(SDK版本)</td>
                            <td>有效</td>
                            <td>已安装</td>
                            <td>¥1.09<a href="#" name='check'>&nbsp;查看</a></td>
                            <td>1</td>
                            <td><a href="javascript: void(0);">操作<i class="fa fa-plus"></i></a>
                                <ul class="operation" style="display: none;">
                                    <li><a href="javascript: void(0);"><span>编辑</span></a></li>
                                    <li><a href="javascript: void(0);"><span>卸载</span></a></li>
                                </ul>
                            </td>                         
                        </tr>
                    </tbody>
                </table>
                <div class="cover" style="display: none;"></div>
                <div class="cover-content" style="top: 0; display: none;">
                    <div class="panel-title">支付接口<span class="pull-right"><a href="javascript: void(0);"><i class="fa fa-times"></i></a></span></div>
                    <form action="">
                        <table class="pay-interface-information"> 
                            <tr>
                                <td class="item-title">支付接口名称:</td>
                                <td><input id="interface-name" type="text"/></td>
                            </tr>
                            <tr>
                                <td class="item-title">类名:</td>
                                <td><input id="interface-name" type="text"/></td>
                            </tr>
                            <tr>
                                <td class="item-title">状态:</td>
                                <td>有效&nbsp;<input type="radio" name='state'>&nbsp;无效&nbsp;<input type="radio" name='state'></td>
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
                                <td class="item-title">排序:</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td class="item-title">描述：</td>
                                <td><textarea cols="50" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td class="item-title">配置：</td>
                                <td><table>
                                        <tr>
                                            <td>开放平台账号AppID</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>商户号Partnerid</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>密钥KEY</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>AppSecret</td>
                                            <td><input type="text"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr id="edit-btns">
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

