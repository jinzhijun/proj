function table_init() {
    var table = $('.data-table').DataTable({
        "destroy": true,
        dom: 't,<"tbl-footer clearfix"<"tbl-info pull-left"i><"tbl-pagin pull-right"p>>',
        "pageLength": 10,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        'oLanguage': {
            'sInfo': '共为您找到 _TOTAL_ 条数据，第 _START_ 条至第 _END_ 条',
            "oPaginate": {  
                'sFirst': '首页',
                'sPrevious': '上一页',
                'sNext': '下一页',
                'sLast': '末页'
            }
        },   
        "order": [
            [1, 'asc']
        ]
    });
}
// 关键字搜索
function searchKeyWord() {
    var table = $('.data-table').DataTable();
    var keyWord = $('#key-word > input').val();
    table.search(keyWord).draw();
}

$(document).ready(function() {
    table_init();
    
})