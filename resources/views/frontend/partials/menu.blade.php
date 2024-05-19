<div id="main_menu">
    <div class="margin_auto">





        <nav id="smoothmenu1" class="ddsmoothmenu">
            <ul>
                <li class="icon active"><a href="/">Trang Chủ</a></li>
{{--                <li class="icon "><a href="phu-kien-han-cat.html">Phụ kiện hàn cắt</a></li>--}}
                <li class=""><a href="lien-he.html">Liên hệ</a></li>
                <div class="Box__User">
                    <div class="user-header">
                        <a data-bs-toggle="modal" data-bs-target="#popup-login" data-dismiss="modal" class="mr-3">
                            <i class="fa fa-sign-in-alt"></i>
                            <span>Đăng nhập</span>
                        </a>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.frm_timkiem').submit(function(){
                            var timkiem = $('#name_tk').val();
                            if(!timkiem){
                                alert('Bạn chưa nhập từ khóa . ');
                            } else {
                                window.location.href="tim-kiem.html?keywords="+timkiem;
                            }
                            return false;
                        })
                    });
                </script>

                <div id="timkiem">
                    <form action="tim-kiem.html" method="" name="frm2" class="frm_timkiem">
                        <input type="text" name="timkiem" id="name_tk" class="input" placeholder="Tìm sản phẩm của bạn.">
                        <button type="submit" value="Tìm" class="nut_tim"></button>
                    </form>
                </div>    </ul>

        </nav>

        <div class="giohang_top">
            <a href="gio-hang.html">
                <p> Giỏ hàng</p>
                <p><span>(0) </span> sp</p>
            </a>
        </div>


        <a href="#menu_mobi" class="ui-link">
            <div class="icon_menu">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom1"></span>
            </div>
        </a>

    </div>
</div>
<div class="clear"></div>
