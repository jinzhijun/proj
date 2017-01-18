
// common scripts

(function() {
    "use strict";

   // Sidebar toggle

   jQuery('.menu-list > a').click(function() {
      
      var parent = jQuery(this).parent();
      var sub = parent.find('> ul');
      
      if(!jQuery('body').hasClass('sidebar-collapsed')) {
         if(sub.is(':visible')) {
            sub.slideUp(300, function(){
               parent.removeClass('nav-active');
               jQuery('.body-content').css({height: ''});
               adjustMainContentHeight();
            });
         } else {
            visibleSubMenuClose();
            parent.addClass('nav-active');
            sub.slideDown(300, function(){
                adjustMainContentHeight();
            });
         }
      }
      return false;
   });

   function visibleSubMenuClose() {

      jQuery('.menu-list').each(function() {
         var t = jQuery(this);
         if(t.hasClass('nav-active')) {
            t.find('> ul').slideUp(300, function(){
               t.removeClass('nav-active');
            });
         }
      });
   }

   function adjustMainContentHeight() {

      // Adjust main content height
      var docHeight = jQuery(document).height();
      if(docHeight > jQuery('.body-content').height())
         jQuery('.body-content').height(docHeight);
   }

   // add class mouse hover

   jQuery('.side-navigation > li').hover(function(){
      jQuery(this).addClass('nav-hover');
   }, function(){
      jQuery(this).removeClass('nav-hover');
   });


   // Toggle Menu

   jQuery('.toggle-btn').click(function(){

      var body = jQuery('body');
      var bodyposition = body.css('position');

      if(bodyposition != 'relative') {

         if(!body.hasClass('sidebar-collapsed')) {
            body.addClass('sidebar-collapsed');
            jQuery('.side-navigation ul').attr('style','');

         } else {
            body.removeClass('sidebar-collapsed chat-view');
            jQuery('.side-navigation li.active ul').css({display: 'block'});

         }
      } else {

         if(body.hasClass('sidebar-open'))
            body.removeClass('sidebar-open');
         else
            body.addClass('sidebar-open');

         adjustMainContentHeight();
      }

      // 首页时注释
       // var owl = $("#news-feed").data("owlCarousel");
       // owl.reinit();

   });
   

   searchform_reposition();

   jQuery(window).resize(function(){

      if(jQuery('body').css('position') == 'relative') {

         jQuery('body').removeClass('sidebar-collapsed');

      } else {

         jQuery('body').css({left: '', marginRight: ''});
      }

      searchform_reposition();

   });

   function searchform_reposition() {
      if(jQuery('.search-content').css('position') == 'relative') {
         jQuery('.search-content').insertBefore('.sidebar-left-info .search-field');
      } else {
         jQuery('.search-content').insertAfter('.right-notification');
      }
   }

    // right slidebar

    // $(function(){
    //     $.slidebars();
    // });

    // body scroll

    // $("html").niceScroll({
    //     styler: "fb",
    //     cursorcolor: "#a979d1",
    //     cursorwidth: '5',
    //     cursorborderradius: '15px',
    //     background: '#404040',
    //     cursorborder: '',
    //     zindex: '12000'
    // });

//     $(".notification-list-scroll").niceScroll({
//         styler: "fb",
//         cursorcolor: "#DFDFE2",
//         cursorwidth: '3',
//         cursorborderradius: '15px',
// //        background: '#404040',
//         cursorborder: '',
//         zindex: '12000'
//     });



    // collapsible panel
    
    $('.panel .tools .t-collapse').click(function () {
        var el = $(this).parents(".panel").children(".panel-body");
        if ($(this).hasClass("fa-chevron-down")) {
            $(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
            el.slideUp(200);
        } else {
            $(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
            el.slideDown(200); }
    });


    // close panel 
    $('.panel .tools .t-close').click(function () {
        $(this).parents(".panel").parent().remove();
    });


    // side widget close

    $('.side-w-close').on('click', function(ev) {
        ev.preventDefault();
        $(this).parents('.aside-widget').slideUp();
    });
    $('.info .add-people').on('click', function(ev) {
        ev.preventDefault();
        $(this).parents('.tab-pane').children('.aside-widget').slideDown();

    });


    // refresh panel

    $('.box-refresh').on('click', function(br) {
        br.preventDefault();
        $("<div class='refresh-block'><span class='refresh-loader'><i class='fa fa-spinner fa-spin'></i></span></div>").appendTo($(this).parents('.tools').parents('.panel-heading').parents('.panel'));

        setTimeout(function() {
            $('.refresh-block').remove();
        }, 1000);

    });

    // tool tips

    $('.tooltips').tooltip();

    // popovers

    $('.popovers').popover();

    /*-----------------my script-----------------*/

    $('.log-in-btn').on('click',function() {
        window.location.href = 'index.html';
    });
    
    $('div.left-notification li').each(function(i) {
      switch(i) {
        case 0:
          $(this).find('a').attr('href','index.html');
          break;
        case 1:
          $(this).find('a').attr('href','anchormanager_normalanchor.html');
          break;
        case 2:
          $(this).find('a').attr('href','videomanage_topiclist.html');
          break;
        case 3:
          $(this).find('a').attr('href', 'propsmanage_propslist.html');
          break;
        case 4:
          $(this).find('a').attr('href', 'fundmanage_payinterface.html');
          break;
        case 5:
          $(this).find('a').attr('href', 'reportmanage_reporttype.html');
          break;
        case 6:
          $(this).find('a').attr('href', 'articlemanage_categorylist.html');
          break;
        case 7:
          $(this).find('a').attr('href', 'messagemanage_smslist.html');
          break;
        case 8:
          $(this).find('a').attr('href', 'systemset_systemconfiguration.html');
          break;
      }
    });
    // 表格复选框点击事件
    // 全选
    $('.data-table th input[type=checkbox]').on('click', function() {
        if($(this).is(':checked')) {
            $('.data-table td input[type=checkbox]').each(function(i, e) {
                e.checked = true;
                $(this).parents('tr').addClass('selected');
            });
        } else {
            $('.data-table td input[type=checkbox]').each(function(i, e) {
                e.checked = false;
                $(this).parents('tr.selected').removeClass('selected');
            });
        }
    });
    // 单选
    $('td input[type=checkbox]').on('click', function() {
        if($(this).is(':checked')) {
            $(this).parents('tr').addClass('selected');
        } else {
            $(this).parents('tr.selected').removeClass('selected');
        }
    });

    // 操作点击事件
    $('ul.operation').prev().on('click',function() {
        var icon = $(this).find('i');
        if($(icon).hasClass('fa-plus')) {
            $(icon).removeClass('fa-plus');
            $(icon).addClass('fa-minus');
            $(this).next().css('display', 'block');
        } 
        else if($(icon).hasClass('fa-minus')) {
            $(icon).removeClass('fa-minus');
            $(icon).addClass('fa-plus');
            $(this).next().css('display', 'none');
        }
    });

    $('ul.operation').prev().blur(function() {
        var icon = $(this).find('i');
        if($(icon).hasClass('fa-minus')) {
            $(icon).removeClass('fa-minus');
            $(icon).addClass('fa-plus');
            $(this).next().css('display', 'none');
        }
    });

    // 举报页面跳转
    $('a[name=report]').attr('href', "videomanage_report.html");

    /*------------------------a标签内容切换 star------------------------*/
    //推荐点击事件
    $('a[name=bund], a[name=suggest]').on('click', function() {
        if($(this).find('span').text() == '是') {
          $(this).find('span').text('否');
        } else {
          $(this).find('span').text('是');
        }
    });
    $('a[name=state], a[name=report-state], a[name=article-state], a[name=problem-state]').on('click', function() {
        if($(this).find('span').text() == '有效') {
          $(this).find('span').text('无效');
        } else {
          $(this).find('span').text('有效');
        }
    });
    /*------------------------a标签内容切换 end------------------------*/

    // 主播信息编辑下拉框信息添加
    var province = ["安徽","澳门","北京","福建","甘肃","广东","广西自治区","贵州","海南","河北","河南","黑龙江","湖北","湖南","吉林","江苏","江西","辽宁","内蒙古自治区","宁夏自治区","青海","山东","山西","陕西","上海","四川","台湾","天津","西藏自治区","香港","新疆自治区","云南","浙江","重庆"];
    var city = [ ["合肥","安庆","蚌埠","亳州","巢湖","滁州","阜阳","贵池","淮北","淮南","黄山","界首","六安","马鞍山","明光","宿州","天长","铜陵","芜湖","宣州"],
                 ["澳门"],
                 ["北京"],
                 ["福州","长乐","福安","福清","建瓯","建阳","晋江","龙海","龙岩","南安","南平","宁德","莆田","泉州","三明","邵武","石狮","武夷山","厦门","永安","漳平","漳州"],
                 ["兰州","白银","敦煌","嘉峪关","金昌","酒泉","临夏","平凉","天水","武威","西峰","玉门","张掖"],
                 ["广州","潮阳","潮州","澄海","从化","东莞","恩平","佛山","高明","高要","高州","鹤山","河源","花都","化州","惠阳","惠州","江门","揭阳","开平","乐昌","雷州","廉江","连州","罗定","茂名","梅州","南海","番禺","普宁","清远","三水","汕头","汕尾","韶关","深圳","顺德","四会","台山","吴川","新会","兴宁","阳春","阳江","英德","云浮","增城","湛江","肇庆","中山","珠海"],
                 ["南宁","北海","北流","百色","防城港","贵港","桂林","桂平","河池","合山","柳州","赁祥","钦州","梧州","玉林","宜州"],
                 ["贵阳","安顺","毕节","赤水","都匀","凯里","六盘水","清镇","铜仁","兴义","遵义"],
                 ["海口","儋州","琼海","琼山","三亚","通什"],
                 ["石家庄","安国","保定","霸州","泊头","沧州","承德","定州","丰南","高碑店","蒿城","邯郸","河间","衡水","黄骅","晋州","冀州","廊坊","鹿泉","南宫","秦皇岛","任丘","三河","沙河","深州","唐山","武安","邢台","辛集","新乐","张家口","涿州","遵化"],
                 ["郑州","安阳","长葛","登封","邓州","巩义","鹤壁","辉县","焦作","济源","开封","灵宝","林州","漯河","洛阳","南阳","平顶山","濮阳","沁阳","汝州","三门峡","商丘","卫辉","舞钢","项城","荥阳","新密","新乡","信阳","新郑","许昌","偃师","义马","禹州","周口","驻马店"],
                 ["哈尔滨","阿城","安达","北安","大庆","富锦","海林","海伦","鹤岗","黑河","佳木斯","鸡西","密山","牡丹江","讷河","宁安","齐齐哈尔","七台河","双城","尚志","双鸭山","绥芬河","绥化","铁力","同江","五常","五大连池","伊春","肇东"],
                 ["武汉","安陆","当阳","丹江口","大冶","恩施","鄂州","广水","洪湖","黄石","黄州","荆门","荆沙","老河口","利川","麻城","浦圻","潜江","石首","十堰","随州","天门","武穴","襄樊","咸宁","仙桃","孝感","宜昌","宜城","应城","枣阳","枝城","钟祥"],
                 ["长沙","常德","郴州","衡阳","洪江","怀化","津市","吉首","耒阳","冷水江","冷水滩","涟源","醴陵","临湘","浏阳","娄底","汨罗","韶山","邵阳","武冈","湘潭","湘乡","益阳","永州","沅江","岳阳","张家界","株洲","资兴"],
                 ["长春","白城","白山","大安","德惠","敦化","公主岭","和龙","桦甸","珲春","集安","蛟河","吉林","九台","辽源","临江","龙井","梅河口","舒兰","四平","松原","洮南","通化","图们","延吉","愉树"],
                 ["南京","常熟","常州","丹阳","东台","高邮","海门","淮安","淮阴","江都","姜堰","江阴","靖江","金坛","昆山","连云港","溧阳","南通","邳州","启乐","如皋","宿迁","苏州","太仓","泰兴","泰州","通州","吴江","无锡","兴化","新沂","徐州","盐城","扬中","扬州","宜兴","仪征","张家港","镇江"],
                 ["南昌","德兴","丰城","赣州","高安","吉安","景德镇","井冈山","九江","乐平","临川","萍乡","瑞昌","瑞金","上饶","新余","宜春","鹰潭","樟树"],
                 ["沈阳","鞍山","北票","本溪","朝阳","大连","丹东","大石桥","东港","凤城","抚顺","阜新","盖州","海城","葫芦岛","锦州","开原","辽阳","凌海","凌源","盘锦","普兰店","铁法","铁岭","瓦房店","兴城","新民","营口","庄河"],
                 ["呼和浩特","包头","赤峰","东胜","二连浩特","额尔古纳","丰镇","根河","海拉尔","霍林郭勒","集宁","临河","满洲里","通辽","乌兰浩特","乌海","锡林浩特","牙克石","扎兰屯","鄂尔多斯"],
                 ["银川","青铜峡","石嘴山","吴忠"],
                 ["西宁","德令哈","格尔木"],
                 ["济南","安丘","滨州","昌邑","德州","东营","肥城","高密","菏泽","胶南","胶州","即墨","济宁","莱芜","莱西","莱阳","莱州","乐陵","聊城","临清","临沂","龙口","蓬莱","平度","青岛","青州","曲阜","日照","荣成","乳山","寿光","泰安","滕州","潍坊","威海","文登","新泰","烟台","兖州","禹城","枣庄","章丘","招远","诸城","淄博","邹城"],
                 ["太原","长治","大同","高平","古交","河津","侯马","霍州","介休","晋城","临汾","潞城","朔州","孝义","忻州","阳泉","永济","原平","榆次","运城"],
                 ["西安","安康","宝鸡","韩城","汉中","华阴","商州","铜川","渭南","咸阳","兴平","延安","榆林"],
                 ["上海"],
                 ["成都","巴中","崇州","达川","德阳","都江堰","峨眉山","涪陵","广汉","广元","华蓥","简阳","江油","阆中","乐山","泸州","绵阳","南充","内江","攀枝花","彭州","邛崃","遂宁","万县","万源","西昌","雅安","宜宾","自贡","资阳"],
                 ["台北"],
                 ["天津"],
                 ["拉萨","日喀则"],
                 ["香港"],
                 ["乌鲁木齐","阿克苏","阿勒泰","阿图什","博乐","昌吉","阜康","哈密","和田","克拉玛依","喀什","库尔勒","奎屯","石河子","塔城","吐鲁番","伊宁"],
                 ["昆明","保山","楚雄","大理","东川","个旧","景洪","开远","曲靖","瑞丽","思茅","畹町","宣威","玉溪","昭通"],
                 ["杭州","慈溪","东阳","奉化","富阳","海宁","湖州","建德","江山","嘉兴","金华","兰溪","临海","丽水","龙泉","宁波","平湖","衢州","瑞安","上虞","绍兴","台州","桐乡","温岭","温州","萧山","义乌","乐清","余杭","余姚","永康","舟山","诸暨"],
                 ["重庆","合川","江津","南川","永川"] ];

    // 添加省份
    for (var i = 0; i <= province.length - 1; i++) {
      $('select#province').append("<option name='" + i + "' value='"+ province[i] + "'>" + province[i] + "</option>");
    };

    // 添加城市
    $('select#province').on('change', function() {
        //获取省份的数组下标
        var provinceInd = province.indexOf($('select#province').val());
        // 移除上次添加的城市
        $('select#city > option:first-child').nextAll().remove();
        // 添加城市
        if(provinceInd >= 0) {
            for (var j = 0; j <= city[provinceInd].length - 1; j++) {
                $('select#city').append("<option name='" + j + "' value='"+ city[provinceInd][j] + "'>" + city[provinceInd][j] + "</option>");
              };
        }
        
    });

    // 添加等级
    for (var i = 1; i <= 103; i++) {
        $('select#level').append("<option value='" + i + "'>Lv" + i + "</option>");
    };

    //普通主播信息提交
    function formSubmit() {
        $('form[name=edit]').submit();
        alert("提交成功");
    }

    $('button.submit-btn').on('click', function() {
        formSubmit();
    });

    // 显示图片
    $('a.upload-img input').change(function(e) {
        for (var i = 0; i < e.target.files.length; i++) {  
            var file = e.target.files.item(i);            
            var freader = new FileReader();  
            freader.readAsDataURL(file); 

            var img = $(this).parent().next();
            freader.onload = function(e) {  
                var src = e.target.result;
                $(img).attr('src', src);
            }  
        }  
    });

    // 删除图片
    $('a.remove-img').on('click', function() {
        $(this).prev().attr('src', '');
        $('a.upload-img input').val('');
    });

    // 审核显示
    $('table#to-certification-lis a').on('click', function() {
        $('.cover').show();
        $('.cover-content').show();
    });

    // 审核隐藏
    $('.panel-title a').on('click', function() {
        $('.cover').hide();
        $('.cover-content').hide();
    });

    // 审核类型选择
    $('input[name=certification-type]').click(function() {
        var val = parseInt($(this).attr('value'));
        switch(val) {
          case 1:
            $('tr#introduction').hide();
            $('tr#edit-btns').hide();
            break;
          case 2:
            $('tr#introduction').hide();
            $('tr#edit-btns').show();
            break;
          case 3:
            $('tr#introduction').show();
            $('tr#edit-btns').show();
            break;
        }
    });

    // 审核查看图片
    $('.cover-content table a').on('click', function() {
      if($(this).find('img').length > 0) {       
          window.open($(this).find('img').attr('src'));
      }
    });

    // 重置--删除图片
    $('.reset-btn').on('click', function() {
      $('a.upload-img').next().attr('src','');
    });

    // 查看支付记录
    $('a[name=check]').attr('href', 'fundmanage_payrecord.html');

    // 话题管理
    $('a[name=category-name]').on('click', function() {
        $('.cover').show();
        $('.cover-content').show();
    });

    //删除行
    $('.remove-btn').on('click', function () {
        if($('tr').hasClass('selected')) {
            if(confirm('你确定要删除这些数据吗？')) {
                $('tr.selected').remove();
            }
        } else {
            alert("您还未选中任何数据？");
        }
        
    } );

    $('a[name=remove]').on('click', function() {
        $(this).parents('tr').remove();
    });
    // 新增数据
    $('.add-row-btn').on('click', function() {
        $('.cover').show();
        $('.cover-content').show();
    });

    // 系统配置，手机端配置切换
    var forms = $('.wrapper form');
    $(forms).each(function(i) {
        if(i === 0)
          $(this).show();
        else
          $(this).hide();
    });

    $('.tab-btns button').on('click', function() {
        $('button.active').removeClass('active');
        $(this).addClass('active');
        $('.tab-btns button').each(function(i) {
            if($(this).hasClass('active')) {
                $(forms[i]).show();
            } else {
              $(forms[i]).hide();
            }
        });
    });

})(jQuery);