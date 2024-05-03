$(document).ready(function(){
    $('.btn-delete').click(function (){
        var title = $(this).data('title');
        title = typeof(title) != 'undefined' ? title : 'Bạn có chắc chắn muốn xóa';
        if (confirm(title) == true) {
            $(this).closest('form').submit();
        } else {
           return false;
        }
    })
})
