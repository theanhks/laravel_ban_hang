$(document).ready(function(){
    $('.btn-delete').click(function (){
        if (confirm("Bạn có chắc chắn muốn xóa sản phẩm") == true) {
            $(this).closest('form').submit();
        } else {
           return false;
        }
    })
})
