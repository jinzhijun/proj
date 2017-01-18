
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>系统配置</span></div>
                <div class="tab-btns">
                    <button class="basics-configuration active">基础配置</button>
                    <button class="member-configuration">会员相关配置</button>
                    <button class="sms-configuration">短信配置</button>
                </div>
                <form class="basics-table" action="" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">后台登录URL文件名称（例如：m.php）:</td>
                            <td><input type="text" id="file-url"></td>
                        </tr>
                        <tr>
                            <td class="item-title">服务器时区:</td>
                            <td><select name="" id="server-time">
                                <option value="0">UTC标准时区</option>
                                <option value="1">北京时间，香港</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td class="item-title">站点名称:</td>
                            <td><input type="text" id="station-name"/></td>
                        </tr>
                        <tr>
                            <td class="item-title">GZIP压缩开启:</td>
                            <td>
                                <select name="" id="depress-switch">
                                    <option value="0">关闭</option>
                                    <option value="1">开启</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">URL模式:  </td>
                            <td>
                                <select name="" id="url-model">
                                    <option value="0">原始模式</option>
                                    <option value="1">重写模式</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">后台超时时间(分钟): </td>
                            <td><input type="text" id="over-time"></td>
                        </tr>
                        <tr>
                            <td class="item-title">站点版权: </td>
                            <td><input type="text" id="coryright"></td>
                        </tr>
                        <tr>
                            <td class="item-title">网络备案信息:</td>
                            <td><input type="text" id="record-information"></td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button><button class="reset-btn" type="reset">重置</button></td>
                        </tr>
                    </table>   
                </form>
                <form class="member-table" action="" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">验证码状态:</td>
                            <td>
                                <select name="" id="vertification-code">
                                    <option value="0">关闭</option>
                                    <option value="1">开启</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">短信验证码失效时间(单位秒):</td>
                            <td><input type="text" id="invalid-time"></input></td>
                        </tr>
                        <tr>
                            <td class="item-title">提交间隔时间:</td>
                            <td><input type="text" id="submit-time"/></td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button><button class="reset-btn" type="reset">重置</button></td>
                        </tr>
                    </table>
                </form>
                <form class="sms-table" action="" name="edit">
                    <table> 
                        <tr>
                            <td class="item-title">开启短信功能:</td>
                            <td>
                                <select name="" id="sms-switch">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </td>
                        </tr>  
                        <tr>
                            <td></td>
                            <td><button class="submit-btn" type="button">编辑</button><button class="reset-btn" type="reset">重置</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>

            </footer>
            <!--footer section end-->

        </div>
        <!-- body content end-->
    </section>

