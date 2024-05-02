@extends('user.layout')
@section('title', 'Trang chủ')
@section('content')
    <style>
        /*.sanpham_nb img{*/
        /*    width: 228px;*/
        /*    height: 186px;*/
        /*}*/
    </style>
    <div id="right_ok">
        <h1 class="visit_hidden">CÔNG TY TNHH XNK MẶT TRỜI VIỆT</h1>

        <script language="javascript">
            function addtocart(pid) {
                document.form_giohang.productid.value = pid;
                document.form_giohang.command.value = 'add';
                document.form_giohang.submit();
            }
        </script>
        <form name="form_giohang" action="index.php" method="post">
            <input type="hidden" name="productid"/>
            <input type="hidden" name="command"/>
        </form>


        <div id="slide_show">
            <style>
                .jssorb05 div {
                    background-position: -7px -7px !important;
                }

                .jssorb05 .av {
                    background-position: -67px -7px !important;
                }

                .jssorb05 div:hover, .jssorb05 .av:hover {
                    background-position: -37px -7px;
                }

                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    width: 16px;
                    height: 16px;
                    background: url('/theme/img/b05.png') no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }

                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    width: 30px !important;
                    height: 30px !important;
                    background: url('images/b05.png') no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }

                .jssorb05 {
                    position: absolute;
                    bottom: 14px !important;
                    right: 127px !important;
                }
            </style>
            <script type="text/javascript" src="{{ asset('js/jssor.js')}}"></script>
            <script type="text/javascript" src="{{ asset('js/jssor.slider.js')}}"></script>
            <script type="text/javascript" src="{{ asset('js/jquery.slider.js')}}"></script>
            <link type="text/css" rel="stylesheet" href="{{ asset('css/style_slider.css')}}"/>

            <div class="slider" data-role="content">

                <div id="slider1_container"
                     style="position: relative; top: 0px; width: 1366px;height:490px; overflow: hidden; margin:0 auto;">
                    <div u="slides"
                         style="cursor: move; position: absolute;margin:0 auto;  top: 0px; width: 1366px; height: 490px; overflow: hidden;">
                        <div>
                            <a u=image href="" target="_blank">
                                <img u=image src="upload/hinhanh/684982263770799_900x350.png" alt="slider"/>
                            </a>

                        </div>
                        <div>
                            <a u=image href="" target="_blank">
                                <img u=image src="upload/hinhanh/472501466462927_900x350.png" alt="slider"/>
                            </a>

                        </div>
                        <div>
                            <a u=image href="" target="_blank">
                                <img u=image src="upload/hinhanh/600234092355391_900x350.jpg" alt="slider"/>
                            </a>

                        </div>
                        <div>
                            <a u=image href="" target="_blank">
                                <img u=image src="upload/hinhanh/633751375262644_900x350.jpg" alt="slider"/>
                            </a>

                        </div>
                        <div>
                            <a u=image href="" target="_blank">
                                <img u=image src="upload/hinhanh/555111774162234_900x350.jpg" alt="slider"/>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <script type="text/javascript">
            $().ready(function () {
                $('.responsive').slick({
                    dots: false,
                    infinite: true,
                    speed: 1500,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: true,

                });
            });

        </script>
        <div class="sanpham_nb">
            <div class="margin_auto">
                <div class="list_carousel_4">
                    <div class="thanh_title"><h2>Sản phẩm nổi bật</h2></div>

                    <div class="responsive">
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                        <img src="upload/product/damai_dacat.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                    <h3>Đá mài, đá cắt</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>Liên hệ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                        <img src="upload/product/damai_dacat2.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                    <h3>Đá mài, đá cắt 2</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>Liên hệ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                        <img src="upload/product/da_xep.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                    <h3>Đá xếp</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>Liên hệ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                        <img src="upload/product/quehan_chosun.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                    <h3>Que hàn Chosun</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>Liên hệ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                        <img src="upload/product/dayhan_chosun.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                    <h3>Dây hàn chosun</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>Liên hệ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


        <div id="info">
            <div id="sanpham">
                <div class="khung">
                    <div class="thanh_title"><a href="san-pham/bo-tao-xung-may-han" title="">
                            <h2>BO TẠO XUNG MÁY HÀN</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <img
                                                src="/upload/product/dayhan_tig_kiswel.png"
                                                alt="Bo 3525 có biến trở chỉnh"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <h3>Dây hàn Tig Kiswel</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <img
                                                src="/upload/product/quehandien_kiswel.png"
                                                alt="Bo 3525 có biến trở chỉnh"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <h3>Que hàn điện Kiswel</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <img
                                                src="/upload/product/que_han_tig_kiswel.png"
                                                alt="Bo 3525 có biến trở chỉnh"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <h3>Que hàn Tig Kiswel</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <img
                                                src="/upload/product/day_han_huyndai.png"
                                                alt="Bo 3525 có biến trở chỉnh"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <h3>Dây hàn Huyndai</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <img
                                                src="/upload/product/quehan_huyndai.png"
                                                alt="Bo 3525 có biến trở chỉnh"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <h3>Que hàn Huyndai</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="clear"></div>
                </div> <!-- khung -->
                <div class="khung">
                    <div class="thanh_title"><a href="san-pham/bo-mach-may-han" title="">
                            <h2>BO MẠCH MÁY HÀN</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <img
                                                src="/upload/product/phu_kien_may_han_tig.png"
                                                alt="Bo TV 101 Khiển Máy Mig"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <h3>Phụ kiện máy hàn TIG</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(210);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <img
                                                src="/upload/product/phu_kien_may_han_tig2.png"
                                                alt="Bo TV 101 Khiển Máy Mig"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <h3>Phụ kiện máy hàn TIG 2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(210);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <img
                                                src="/upload/product/phu_kien_may_han_co2.png"
                                                alt="Bo TV 101 Khiển Máy Mig"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <h3>Phụ kiện máy hàn CO2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(210);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <img
                                                src="/upload/product/phu_kien_may_han_co2_2.png"
                                                alt="Bo TV 101 Khiển Máy Mig"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <h3>Phụ kiện máy hàn CO2 2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(210);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <img
                                                src="/upload/product/may_han_co2.png"
                                                alt="Bo TV 101 Khiển Máy Mig"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <h3>Máy hàn CO2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(210);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div> <!-- khung -->
                <div class="khung">
                    <div class="thanh_title"><a href="san-pham/bo-nguon-may-han" title="">
                            <h2>BO NGUỒN MÁY HÀN</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/may_han_tig.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Máy hàn TIG</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/may_cat_mai_makita.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Máy cắt mài Makita</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/may_cat_mai_bosh.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Máy cắt mài Bosch</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/cuon_pe.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Cuộn PE</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/cuon_pe_2.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Cuộn PE2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div> <!-- khung -->

                <div class="khung">
                    <div class="thanh_title"><a href="san-pham/bo-nguon-may-han" title="">
                            <h2>BĂNG KEO</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/cuon_keo_giay.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Cuộn băng keo giấy</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/cuon_keo_giay2.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Cuộn keo giấy 2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/cuon_keo_trong.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Cuộn keo trong</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="/upload/product/cuon_keo_trong_2.png"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>Cuộn keo trong 2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>Liên Hệ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div> <!-- khung -->
            </div>
        </div>

        <div id="info">
            <div id="sanpham">

            </div>
        </div>


        <script>
            $(document).ready(function () {
                $(".owl-demo").owlCarousel({
                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items: 4,
                    navigation: true,
                    responsiveClass: true,
                });

            });
        </script>
        <style>
            .product_img {
                display: flex;
                height: 220px;
                align-items: center;
            }
            .list_img {
                height: 150px;
            }
        </style>
    </div>
    <!-- main -->
@endsection
