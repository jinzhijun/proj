
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="main-title-list"><span>手机端配置</span></div>
                <div class="tab-btns">
                    <button class="basics-configuration active">基础配置</button>
                    <button class="tencent-live">腾讯直播</button>
                    <button class="application-configuration">应用设置</button>
                    <button class="order-weight">排序权重</button>
                    <button class="cash-set">提现设置</button>
                    <button class="app-copyright">APP版本管理</button>
                    <button class="share-set">分享设置</button>
                    <button class="third-account">第三方账户</button>
                </div>
                <form class="basics-table" action="" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">程序标题名称:</td>
                            <td><input type="text" id="program-title"></td>
                        </tr>
                        <tr>
                            <td class="item-title">充值比例:</td>
                            <td><input type="text" id="recharge-proportion"><span class='notice'>充值金额与钻石的换算比率如：充值1元，可以获得10个钻石</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信公众号名称:</td>
                            <td><input type="text" id="wechat-name"/></td>
                        </tr>
                        <tr>
                            <td class="item-title">系统LOGO:</td>
                            <td><a href="javascript: void(0);" class="upload-img"><i class="fa fa-upload"></i>上传图片<input type="file"/></a>
                                <img src="" alt="图片">
                                <a href="javascript: void(0);" class="remove-img"><i class="fa fa-trash-o"></i></a>
                                <span class="notice">app的logo</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">兑换比例:</td>
                            <td><input type="text" id="exchange-proportion"><span class="notice">印票与钻石的兑换比例 如：100印票，可以获得1个钻石</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">账号名称:</td>
                            <td><input type="text" id="account-name"><span class="notice">会员中心账号的名称</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">映票兑换比例:</td>
                            <td><input type="text" id="ticket-exchange-proportion"><span class="notice"> 钻石与印票的兑换比例 用于主播收益统计如：1个钻石兑换10映票</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">客服电话:</td>
                            <td><input type="text" id="service-phone"></td>
                        </tr>
                        <tr>
                            <td class="item-title">是否开启全服推送:</td>
                            <td>
                                <select id="for-allserver">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">印客名称:</td>
                            <td><input type="text" id="customer-name"></td>
                        </tr>
                        <tr>
                            <td class="item-title">印票名称:</td>
                            <td><input type="text" id="ticket-name"></td>
                        </tr>
                        <tr>
                            <td class="item-title">app名称:</td>
                            <td><input type="text" id="app-name"></td>
                        </tr>
                        <tr>
                            <td class="item-title">客服邮箱:</td>
                            <td><input type="text" id="service-mail"></td>
                        </tr>
                        <tr>
                            <td class="item-title">分页大小:</td>
                            <td><input type="text" id="page-length"></td>
                        </tr>
                        <tr>
                            <td class="item-title">地区版本号:</td>
                            <td><input type="text" id="area-version"></td>
                        </tr>
                        <tr>
                            <td class="item-title">家族收益比例:</td>
                            <td><input type="text" id="family-benifit"><span class="notice">家族收取主播收益的比例</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">排行榜缓存更新时间:</td>
                            <td><input type="text" id="refresh-time"><span class="notice">单位：秒</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">只有认证才显现在热门:</td>
                            <td>
                                <select id="show-hot">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="notice">1:是 开启只有认证主播显示在首页热门;0:否</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">升级提示等级:</td>
                            <td><input type="text" id="tip-level"><span class="notice"> 用户等级大于等于该值,用户每次登录弹出升级提示</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">每日登录送:</td>
                            <td><input type="text" id="integral-day"><span class="notice">积分(每日首次登录赠送)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">必须输入话题:</td>
                            <td>
                                <select id="input-topic">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="notice">发起直播时候，是否强制输入话题</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">是否分享加印票:</td>
                            <td>
                                <select id="share-add">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="notice">在直播间分享直播增加印票，1是、0否</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">分享加印票:</td>
                            <td><input type="text" id="add-ticket-number"><span class="notice">在直播间分享直播增加多少印票，值必须是整数 如： 1印票</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">认证才能直播:</td>
                            <td>
                                <select id="certification-live">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="notice">发起直播时候,是否强制认证</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="item-title">APP下载链接:</td>
                            <td>http://ilvb.fanwe.net/appdown.php</td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button><button class="reset-btn" type="reset">重置</button></td>
                        </tr>
                    </table>   
                </form>
                <form action="" class="tencent-table" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">SdkAppleId</td>
                            <td><input type="text"><span class="notice">腾讯互动直播SdkAppId</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">账号管理员</td>
                            <td><input type="text"><span class="notice">腾讯互动直播账号管理员</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">视频播放器AppId</td>
                            <td><input type="text"><span class="notice">旁路直播APPId</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">腾讯bizid</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">accountType</td>
                            <td><input type="text"><span class="notice">腾讯云通信accountType</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">保存视频</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select></td>
                        </tr>
                        <tr>
                            <td class="item-title">腾讯云API账号</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">腾讯云API秘钥</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">API下载链接</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td>
                                <button class="submit-btn" type="button">编辑</button>
                                <button class="reset-btn" type="reset">重置</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <form action="" class="application-table" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">短视频时间定义(秒)</td>
                            <td><input type="text"><span class="notice">默认不保存短视频</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">直接删除短(私密)视频</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">直播结束时,直接删除短(私密)视频;0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">吉祥保留号</td>
                            <td><textarea name="" id="" cols="50" rows="10"></textarea><p><span class="notice">预留的吉祥保留号已英文半角逗号隔开</span></p></td>
                        </tr>
                        <tr>
                            <td class="item-title">IOS默认美颜度</td>
                            <td><input type="text"><span class="notice"></span></td>
                        </tr>
                        <tr>
                            <td class="item-title">ANDROID默认美颜度</td>
                            <td><input type="text"><span class="notice"></span></td>
                        </tr>
                        <tr>
                            <td class="item-title">客户端不许自义美颜度</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">用户等级</td>
                            <td><input type="text"><span class="notice">用户等级大于等于该值,有用户加入房间提醒操作</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">心跳超时时间</td>
                            <td><input type="text"><span class="notice">单位:秒;建议设置30秒至90秒之间; 每5秒收集一次心跳,超过时间则会强制结束</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">苹果充值</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">苹果支付价格与普通充值价格相同 0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">机器人数量</td>
                            <td><input type="text"><span class="notice">创建直播时,随机添加机器人数;可以出现在观众列表中的</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">虚拟数量</td>
                            <td><input type="text"><span class="notice">进来一个真实会员,带来几个虚拟会员数量</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">启用脏字过滤</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select></td>
                        </tr>
                        <tr>
                            <td class="item-title">在线时长与积分转化比</td>
                            <td><input type="text"><span class="notice">在线时长参与会员等级升级计算(秒),类似每秒转化为多少积分</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">直播类型</td>
                            <td><select name="" id=""><option value="0">腾讯云互动直播</option>
                            <option value="1">腾讯云直播</option></select></td>
                        </tr>
                        <tr>
                            <td class="item-title">主播允许连接等级</td>
                            <td><input type="text"><span class="notice">会员等级>=当前设定的等级时,才会出现连麦按钮</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">直播时长与家族积分转化比</td>
                            <td><input type="text"><span class="notice">直播时长参与家族等级升级计算(秒),类似每秒转化为多少积分</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">家族收益与家族积分转化比</td>
                            <td><input type="text"><span class="notice">家族收益参与家族等级升级计算(秒),类似每收益转化为多少积分</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">APP下载链接</td>
                            <td>http://ilvb.fanwe.net/appdown.php</td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td>
                                <button class="submit-btn" type="button">编辑</button>
                                <button class="reset-btn" type="reset">重置</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <form action="" class="order-weight-table" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">观看人数权重</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">排序权重</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">持有映票权重</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">等级权重</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">当前视频获取映票权重</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">房间内关注数</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">房间内分享数的权重</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">当前有的关注数权重</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">会员点赞权重</td>
                            <td><input type="text"><span class="notice">点赞,每个用户只记录一次</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">APP下载链接</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button>
                            <button class="reset-btn" type="button">重置</button></td>
                        </tr>
                    </table>
                </form>
                <form action="" class="cash-set-table" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">开启微信提现</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否 1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信提现比例</td>
                            <td><input type="text"><span class="notice">(如：100印票*0.01=1元)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信提现最低额度</td>
                            <td><input type="text"><span class="notice">(元)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">每天提现最大额度</td>
                            <td><input type="text"><span class="notice">(元)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">每月提现一次</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">1:是 每月只许提现一次;0:否</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">每月提现开始时间</td>
                            <td><input type="text"><span class="notice">单位：日，每月提现开始时间 如：5</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">每月提现结束时间</td>
                            <td><input type="text"><span class="notice">单位：日，每月提现结束时间 如：10</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">APP下载链接</td>
                            <td>http://ilvb.fanwe.net/appdown.php</td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button>
                                <button class="reset-btn" type="button">重置</button></td>
                        </tr>
                    </table>
                </form>
                <form action="" class="app-copyright-table" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">android是否强制升级</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">android版本号</td>
                            <td><input type="text"><span class="notice">格式：yyyymmddnn</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">android下载包名</td>
                            <td><input type="text"><span class="notice">放程序根目录下</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">android版本升级内容</td>
                            <td><textarea name="" id="" cols="50" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td class="item-title">ios是否强制升级</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">ios版本号</td>
                            <td><input type="text"><span class="notice">格式：yyyymmddnn</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">ios下载地址</td>
                            <td><input type="text"><span class="notice">appstore连接地址</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">ios版本升级内容</td>
                            <td><textarea name="" id="" cols="50" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td class="item-title">ios审核版本号</td>
                            <td><input type="text"><span class="notice">审核中填写</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">ios开放支付类型</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">IOS默认仅支持苹果应用内支付,需要开放其它支付选是;在苹果审核时一定要选:否</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">APP下载链接</td>
                            <td>http://ilvb.fanwe.net/appdown.php</td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button>
                                <button class="reset-btn" type="button">重置</button></td>
                        </tr>
                    </table>
                </form>
                <form action="" class="share-set-table" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">分享标题</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td class="item-title">支持新浪分享</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">支持微信分享</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">支持QQ分享</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">APP下载链接</td>
                            <td>http://ilvb.fanwe.net/appdown.php</td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button>
                                <button class="reset-btn" type="button">重置</button></td>
                        </tr>
                    </table>
                </form>
                <form action="" class="third-account-table" name="edit">
                    <table>
                        <tr>
                            <td class="item-title">支持手机登录</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">支持新浪登录</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">支持QQ登录</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">支持微信登录</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">0:否;1:是</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信公众号APPID</td>
                            <td><input type="text"><span class="notice">用于提现的公众号的appid</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信公众号SECRIT</td>
                            <td><input type="text"><span class="notice">用于提现的公众号的secrit</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信开放平台APPID</td>
                            <td><input type="text"><span class="notice">用于微信登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信开放平台SECRIT</td>
                            <td><input type="text"><span class="notice">用于微信登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信开放平台APPID</td>
                            <td><input type="text"><span class="notice">用于网页应用微信登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">微信开放平台SECRIT</td>
                            <td><input type="text"><span class="notice">用于网页应用微信登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">新浪APP_KEY</td>
                            <td><input type="text"><span class="notice">用于微博登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">新浪APP_SECRET</td>
                            <td><input type="text"><span class="notice">用于微博登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">新浪APP_KEY</td>
                            <td><input type="text"><span class="notice">用于网页应用微博登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">新浪APP_SECRIT</td>
                            <td><input type="text"><span class="notice">用于网页应用微博登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">安卓端QQ登录APP_ID</td>
                            <td><input type="text"><span class="notice">安卓端QQ登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">IOS端QQ登录APP_ID</td>
                            <td><input type="text"><span class="notice"> IOS端QQ登录</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">安卓(推送)appSecret</td>
                            <td><input type="text"><span class="notice">友盟推送AppMasterSecret,供API对接友盟服务器使用(安卓)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">安卓(推送)appkey</td>
                            <td><input type="text"><span class="notice">友盟推送AppKey(安卓)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">IOS(推送)appSecret</td>
                            <td><input type="text"><span class="notice">友盟推送AppMasterSecret,供API对接友盟服务器使用(IOS)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">IOS(推送)appkey</td>
                            <td><input type="text"><span class="notice">友盟推送AppKey(IOS)</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">开启STS</td>
                            <td><select name="" id=""><option value="0">否</option>
                            <option value="1">是</option></select><span class="notice">将图片直接上传到OSS上,不中转;https://help.aliyun.com/document_detail/31920.html?spm=5176.doc31931.6.206.OEtePt</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">STS_AccessKeyID</td>
                            <td><input type="text"><span class="notice">阿里云STS,AccessKeyID</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">STS_AccessKeySecret</td>
                            <td><input type="text"><span class="notice">阿里云STS,AccessKeySecret</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">STS_RoleArn</td>
                            <td><input type="text"><span class="notice">开通STS,RoleArn</span></td>
                        </tr>
                        <tr>
                            <td class="item-title">APP下载链接</td>
                            <td>http://ilvb.fanwe.net/appdown.php</td>
                        </tr>
                        <tr>
                            <td class="item-title"></td>
                            <td><button class="submit-btn" type="button">编辑</button>
                                <button class="reset-btn" type="button">重置</button></td>
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

