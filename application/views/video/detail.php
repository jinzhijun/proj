

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title"><a href="#" onclick="history.go(-1)"><span>返回列表</span></a></div>
                <form action="http://localhost/ci/index.php/zhubo/edit" name="edit" method="post">
                    <table class="anchor-information">
                        <tr>
                            <td>编号：</td>
                            <td><?php echo empty($_SESSION['uid'])? NULL:$_SESSION('uid')//从操作页面获取来的uid，对于能否传入session有疑问;?></td>
                        </tr>
                        <tr>
                            <td>创建时间：</td>
                            <td><?php echo $user['ctime'];?></td>
                        </tr>
                        <tr>
                            <td>主播昵称：</td>
                            <td><input type="text" name='username'></td>
                        </tr>
                        <tr>
                            <td>手机：</td>
                            <td><input type="text" name='tel'></td>
                        </tr>
                        <tr>
                            <td>所属地区：</td>
                            <td>
                                <select name="province" id="province">
                                    <option value="0">请选择省份</option>
                                </select>
                                <select name="city" id="city">
                                    <option value="0">请选择城市</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>性别：</td>
                            <td>女&nbsp;<input type="radio" name="gender" value="1" checked="checked" />&nbsp;男&nbsp;<input type="radio" name="gender" value="2"/></td>
                        </tr>
                        <tr>
                            <td>会员等级：</td>
                            <td><select id="level">
                            </select></td>
                        </tr>
                        <tr>
                            <td>个性签名：</td>
                            <td><input type="text" name='sign' style="width:500px;"></td>
                        </tr>
                        <tr>
                            <td>状态：</td>
                            <td>有效&nbsp;<input type="radio" name="state" value="1" checked="checked"/>&nbsp;无效&nbsp;<input type="radio" name="state" value="2"/></td>
                        </tr>
                        <tr>
                            <td>永久禁播：</td>
                            <td>否&nbsp;<input type="radio" name="ban" checked="checked" value="1"/>&nbsp;是&nbsp;<input type="radio" name="ban" value="2"/></td>
                        </tr>
                        <tr>
                            <td>禁播结束时间：</td>
                            <td class="single-time-picker"><input type="text"/>&nbsp;<span>时间为空的话，直播状态正常；否则结束时间之前禁播。</span></td>
                        </tr>
                        <tr>
                            <td>认证审核：</td>
                            <td>
                                <input type="radio" name="certification" value="1" checked="checked"/>&nbsp;未认证（取消认证）
                                <input type="radio" name="certification" value="2"/>&nbsp;待审核
                                <input type="radio" name="certification" value="3"/>&nbsp;已认证
                                <input type="radio" name="certification" value="4"/>&nbsp;审核不通过
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="submit-btn" type="button" name='edit'>修改提交</button><button class="reset-btn" type="reset">重置</button></td>
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

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- time picker -->
<script src="lib/daterangepicker/moment.js"></script>
<script src="lib/daterangepicker/daterangepicker.js"></script>
<script src="js/single-time-picker.js"></script>
<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


</body>
</html>
