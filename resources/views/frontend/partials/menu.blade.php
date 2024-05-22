<div id="main_menu">
    <div class="margin_auto">





        <nav id="smoothmenu1" class="ddsmoothmenu">
            <ul>
                <li class="icon active"><a href="/">Trang Chủ</a></li>
{{--                <li class="icon "><a href="phu-kien-han-cat.html">Phụ kiện hàn cắt</a></li>--}}
                <li class=""><a href="lien-he.html">Liên hệ</a></li>
                <div class="Box__User">
                    @if (!auth()->check())
                    <div class="user-header">
                        <a href="{{ route('login') }}" class="mr-3">
                            <i class="fa fa-sign-in-alt"></i>
                            <span>Đăng nhập</span>
                        </a>
                    </div>
                    @else
                    <div class="user-header user-cart">
                        <span><i class="fa fa-user align-middle me-1"></i> Tài khoản</span>
                        <div class="sub_login">
                            <div class="main_content_sub_login">
                                <span class="arrow_sub_login"></span>
                                <a href="javacript:;">
                                    <i class="fa fa-shopping-cart me-1"></i>
                                    <span>Lịch sử mua hàng</span>
                                </a>
                                <a href="{{ route('auth.mypage') }}">
                                    <i class="fa fa-info-circle me-1"></i>
                                    <span>Thông tin</span>
                                </a>
                                <a href="javacript:;" data-bs-toggle="modal" data-bs-target="#popup-change-password" data-dismiss="modal">
                                    <i class="fa fa-key me-1"></i>
                                    <span>Đổi mật khẩu</span>
                                </a>
                                <form method="post" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <a href="javacript:;">
                                        <i class="fa fa-sign-out-alt"></i>
                                        <span class="logout">Đăng xuất</span>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.frm_timkiem').submit(function(){
                            var timkiem = $('#name_tk').val();
                            if(!timkiem){
                                alert('Bạn chưa nhập từ khóa . ');
                            } else {
                                window.location.href="tim-kiem.html?keyword="+timkiem;
                            }
                            return false;
                        })
                        $('.logout').click(function(e) {
                            e.preventDefault(); // Prevent default anchor tag behavior
                            // Submit the form using its submit() method
                            $(this).closest('form').submit();
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
            <a href="{{route('cart.index')}}">
                <p> Giỏ hàng</p>
                <p><span>({{cart_total()}}) </span> sp</p>
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
