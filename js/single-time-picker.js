$(document).ready(function() {
    //时间表 
    var timeInd = -1;
    $('.single-time-picker input').focus(function() {
        timeInd = $(this).data('index');
    });

    $('.single-time-picker').daterangepicker(  
        { 
            //起止时间的最大间隔  
            "showDropdowns" : true,  
            "showWeekNumbers" : false, //是否显示第几周  
            "timePicker" : true, //是否显示小时和分钟  
            "timePickerIncrement" : 1, //时间的增量，单位为分钟  
            "timePicker24Hour" : true, //是否使用12小时制来显示时间 
            "singleDatePicker": true,
            "autoApply": true,  
            "opens" : 'right', //日期选择框的弹出位置  
            "buttonClasses" : [ 'btn btn-default' ],  
            "applyClass" : 'btn-small btn-primary blue',  
            "cancelClass" : 'btn-small',  
            "format" : 'YYYY-MM-DD HH:mm', //控件中from和to 显示的日期格式 
            "locale" : {  
                "applyLabel" : '确定',  
                "cancelLabel" : '取消',  
                "daysOfWeek" : [ '日', '一', '二', '三', '四', '五', '六' ],  
                "monthNames" : [ '一月', '二月', '三月', '四月', '五月', '六月',  
                        '七月', '八月', '九月', '十月', '十一月', '十二月' ],  
                "firstDay" : 1  
            }  
        }, function(start, end, label) {//格式化日期显示框 
            if(timeInd === -1) {
                $('.single-time-picker input').attr('value', start.format('YYYY-MM-DD HH:mm'));
            } else if(timeInd === 1) {
                $('.single-time-picker input[data-index=1]').attr('value', start.format('YYYY-MM-DD HH:mm'));
            } else if(timeInd === 2) {
                $('.single-time-picker input[data-index=2]').attr('value', start.format('YYYY-MM-DD HH:mm'));
            }
             
    }); 
    
    $('button.reset-btn').on('click', function() {
        $('.single-time-picker input').attr('value','');
        $('a.upload-img').next().attr('src','');
    });
            
});
    