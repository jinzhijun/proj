$(document).ready(function() {
    //时间表
    $('.search-row #time-picker input').attr('value', moment().subtract('hours', 1).format('YYYY-MM-DD HH:mm') + ' - ' + moment().format('YYYY-MM-DD HH:mm')); 
    var timeStart = moment().subtract('hours', 1),
        timeEnd = moment();

    $('#time-picker').daterangepicker(  
        { 
            maxDate : moment(), //最大时间 
            //起止时间的最大间隔  
            showDropdowns : true,  
            showWeekNumbers : false, //是否显示第几周  
            timePicker : true, //是否显示小时和分钟  
            timePickerIncrement : 1, //时间的增量，单位为分钟  
            timePicker24Hour : true, //是否使用12小时制来显示时间 
            autoApply: true,
            ranges : {  
                '今日': [moment().startOf('day'), moment()],  
                '昨日': [moment().subtract('days', 1).startOf('day'), moment().subtract('days', 1).endOf('day')],  
                '最近7日': [moment().subtract('days', 6), moment()],  
                '上周': [moment().subtract('weeks', 1).startOf('week'), moment().subtract('weeks', 1).endOf('week')],  
                '上个月': [moment().subtract('months', 1).startOf('month'), moment().subtract('months', 1).endOf('month')] ,  
                '去年': [moment().subtract('years', 1).startOf('year'), moment().subtract('years', 1).endOf('year')]  
            },  
            opens : 'center', //日期选择框的弹出位置  
            buttonClasses : [ 'btn btn-default' ],  
            applyClass : 'btn-small btn-primary blue',  
            cancelClass : 'btn-small',  
            format : 'YYYY-MM-DD HH:mm', //控件中from和to 显示的日期格式  
            separator : ' to ',  
            locale : {  
                applyLabel : '确定',  
                cancelLabel : '取消',  
                fromLabel : '起始时间',  
                toLabel : '结束时间',  
                customRangeLabel : '自定义',  
                daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],  
                monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月',  
                        '七月', '八月', '九月', '十月', '十一月', '十二月' ],  
                firstDay : 1  
            }  
        }, function(start, end, label) {//格式化日期显示框  

            timeStart = start;
            timeEnd = end;
            $('.search-row #time-picker input').attr('value', start.format('YYYY-MM-DD HH:mm') + ' - ' + end.format('YYYY-MM-DD HH:mm'));

            $('.search-row #time-picker input').val($('.search-row #time-picker input').attr('value'));
    }); 
    $('.daterangepicker .calendar').css('display', 'block');
    $('.input-mini').css('width', '80%');

    // 时间段搜索
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            if($('.search-row #time-picker input').val()) ;
            else {
                // 输入为空时
                timeStart = null;
                timeEnd = null;
            }
            var min = Date.parse(timeStart);
            var max = Date.parse(timeEnd);
            var time = Date.parse(data[3]);
            
            if ( ( isNaN( min ) && isNaN( max ) ) ||
                 ( isNaN( min ) && time <= max ) ||
                 ( min <= time   && isNaN( max ) ) ||
                 ( min <= time   && time <= max ) )
            {
                return true;
            }
            return false;
        }
    );
    
    var table = $('.data-table').DataTable();
    var pageUrl = window.location.href;
    $('.search-btn').on('click', function() {
        // 关键字搜索
        if(pageUrl.indexOf("system-journal-li.html") > 0) {
            searchKeyWord();
        }
    });
});
    