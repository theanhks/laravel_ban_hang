@extends('frontend.layout')
@section('title', 'Trang chủ')
@section('content')
    <div id="right_ok">
        <link href="{{asset('/js/magiczoomplus/magiczoomplus.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <script src="{{asset('/js/magiczoomplus/magiczoomplus.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('.thanhtoannhanh').click(function(e) {
                    var pid = $(this).data('id');
                    var soluong = $('.soluong_12').val();
                    if(soluong <= 0){
                        alert('Bạn chưa chọn số lượng !');
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "ajax/add_giohang.php",
                        data: {pid:pid,soluong:soluong},
                        success: function(string){
                            var getData = $.parseJSON(string);
                            var result = getData.result_giohang;
                            var count = getData.count;

                            if(result > 0) {
                                alert('Bạn đã thêm thành công sản phẩm này vào giỏ hàng');
                                window.location.href="gio-hang.html";
                            }
                            else if (result == -1)alert('Sản phẩm này không tồn tại');
                            else if (result == 0)
                            { alert('Sản phẩm này đã có trong giỏ hàng'); window.location.href="thanh-toan.html";
                            }
                        }
                    });
                });

            });
        </script>
        <form name="form_giohang" action="index.php" method="post">
            <input type="hidden" name="productid"/>
            <input type="hidden" name="command"/>
        </form>
        <div id="info">
            <div id="sanpham">
                <div class="khung">
                    <div class="thanh_title">
                        <h2>Sản Phẩm chi tiết</h2>
                    </div>
                    <div class="khung_1 col-md-12 col-sm-12 col-xx-12 col-xs-12">
                        <div class="clear"></div>
                        <div class="frame_images col-md-6 col-sm-6 col-xx-12 col-xs-12">
                            <div class="app-figure" id="zoom-fig">
                                <a href="{{$product->image}}" id="Zoom-1" class="MagicZoom"
                                   title="{{$product->name}}">
                                    <img src="{{$product->image}}" alt="{{$product->name}}"
                                         width="250"/></a>
                            </div>
                            <div class="selectors">
                                <script type="text/javascript" language="javascript"
                                        src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
                                <script type="text/javascript" language="javascript">
                                    $(function () {
                                        $('#foo3').carouFredSel({

                                            height: 'auto',
                                            prev: '#prev13',
                                            next: '#next13',
                                            auto: true,
                                            scroll: 1
                                        });
                                    });
                                </script>
                                <style type="text/css" media="all">
                                    .list_carousel {
                                        width: 100%;
                                        position: relative;
                                        float: left;
                                    }

                                    .list_carousel ul {
                                        margin: 0;
                                        width: 100%;
                                        padding: 0;
                                        list-style: none;
                                        display: block;
                                    }

                                    .list_carousel li {
                                        display: block;
                                        float: left;
                                        padding: 5px 5px 5px 5px;
                                    }

                                    .list_carousel li img {
                                        float: left;
                                        border: 1px solid #aa1d23;
                                        padding: 2px;
                                    }

                                    .list_carousel li a {
                                        text-decoration: none;
                                    }

                                    .list_carousel li a h3 {
                                        color: #835410;
                                        text-align: center;
                                        font-weight: 500;
                                        margin-top: 10px;
                                        font-size: 16px;
                                        margin-bottom: 10px;
                                        text-transform: uppercase;
                                    }

                                    .list_carousel li:hover {
                                    }

                                    .list_carousel li.active {
                                    }

                                    .list_carousel.responsive {
                                        width: auto;
                                        margin-left: 0;
                                    }

                                    .clearfix {
                                        float: none;
                                        clear: both;
                                    }

                                    .pager {
                                        float: left;
                                        width: 320px;
                                        text-align: center;
                                    }

                                    .pager a {
                                        margin: 0 5px;
                                        text-decoration: none;
                                    }

                                    .pager a.selected {
                                        text-decoration: underline;
                                    }

                                    .timer {
                                        background-color: #999;
                                        height: 6px;
                                        width: 0px;
                                    }

                                    .prev13 {
                                        width: 20px;
                                        height: 24px;
                                        position: absolute;
                                        z-index: 10;
                                        background: url(images/left_dt.png) no-repeat;
                                        top: 25px;
                                        left: 0px;
                                    }

                                    .next13 {
                                        width: 20px;
                                        height: 24px;
                                        position: absolute;
                                        z-index: 10;
                                        background: url(images/right_dt.png) no-repeat;
                                        top: 25px;
                                        right: -5px;
                                    }

                                    .caroufredsel_wrapper {
                                        width: 100% !important;
                                    }
                                </style>
                                <div class="list_carousel">
                                    <a href="#prev13" id="prev13" class="prev13"></a>
                                    <a href="#next13" id="next13" class="next13"></a>
                                    <div class="clearfix"></div>
                                    <ul id="foo3">
                                        <li><a data-zoom-id="Zoom-1"
                                               href="{{$product->image}}"
                                               data-image="{{$product->image}}">
                                                <img u="image"
                                                     src="{{$product->image}}"
                                                     width="80" height="60"/></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="khung_thongtin col-md-6 col-sm-6 col-xx-12s col-xs-12">
                            <li>
                                <h1>{{$product->name}}</h1>
                            </li>
                            <li class="gia_detail"><b>Giá :</b> {{$product->price > 0 ? $product->price : 'Liên hệ'}}</li>
                            <li class="MASP"><b>MASP :</b> {{$product->product_code != '' ? $product->product_code : $product->name}}</li>
                            <li class="MASP"> mới</li>
                            <li class="khuyenmai_detail">
                                {{$product->name}}
                            </li>
                            <li>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <script type="text/javascript"
                                        src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59c3280d217de9ae"></script>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <div class="addthis_inline_share_toolbox_5yd7"></div>
                            </li>
                            <li class="masp">Số lượng : <input type="text" size="1" class="soluong_12" value="1"/></li>
                            <li class="dathang_detail">
                                <div class="thanhtoannhanh" data-id="1200">Đặt hàng ngay</div>
                            </li>
                            <!--             <li class="huongdan_detail"><a href="huong-dan-mua-hang.html" class="huongdan">Hướng dẫn mua hàng online</a></li>
                               -->
                        </ul>
                        <!-- khungthongtin -->
                        <div class="clear"></div>
                        <div id="container_product">
                            <div id="tabs">
                                <ul>
                                    <li class="active"><a href="tab-1">Thông tin sản phẩm</a></li>
                                </ul>
                                <div class="clear"></div>
                                <div id="tab-1" style="display: block;">
                                    <div class="noidung_ta" style="clear:left;">
                                        <div style="clear:left;"></div>
                                        <br/><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- container_product -->
                    </div>
                    <div class="clear"></div>
                    <div class="thanh_title">
                        <h2>Sản phẩm cùng loại</h2>
                    </div>
                    <div>
                        @foreach($productRelated as $product)
                            <div class="item1">
                                <div class="masp">
                                    <p>MSP</p>
                                </div>
                                <div class="product_img">
                                    <a href="{{route('product',$product->slug)}}">
                                        <img src="{{$product->image}}"
                                             alt="{{$product->name}}"/>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <a href="{{route('product',$product->slug)}}">
                                        <h3>{{$product->name}}</h3>
                                    </a>
                                    <div class="boxchitiet">
                                        <p class="giaban">Giá: {{$product->price >0 ? $product->price : 'Liên hệ'}}</p>
                                        <div class="giohang"><a href="javascript:void(0)" alt="giỏ hàng"
                                                                onclick="addtocart(1199);">Giỏ hàng</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
