@extends('frontend.layout')
@section('title', 'Trang chủ')
@section('content')
    <style>
        /*.sanpham_nb img{*/
        /*    width: 228px;*/
        /*    height: 186px;*/
        /*}*/
    </style>
    <div id="right_ok">
        <h1 class="visit_hidden">CÔNG TY TNHH XUẤT NHẬP KHẨU TM HTS</h1>

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

        @php
        /* Tạm ẩn
        @endphp
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
        @php */ @endphp
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
                        @foreach($categoryData as $category)
                            @if(isset($productGroupCategory[$category['category_id']]) && count($productGroupCategory[$category['category_id']]) >0)
                                @foreach($productGroupCategory[$category['category_id']] as $product)
                                    <div>
                                        <div class="item ">
                                            <div class="list_img">
                                                <a href="{{route('product',$product['slug'])}}">
                                                    <img src="{{$product['image']}}">
                                                </a>
                                            </div>
                                            <div class="clear"></div>
                                            <a href="/product/{{$product['id']}}">
                                                <h3>{{$product['name']}}</h3>
                                            </a>
                                            <p class="giaban">
                                                <b>Giá :</b> <span>{{$product['price'] > 0 ? $product['price'] : 'Liên hệ'}}</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart({{$product['id']}});"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div id="info">
            <div id="sanpham">
                @foreach($categoryData as $category)
                    @if(isset($productGroupCategory[$category['category_id']]) && count($productGroupCategory[$category['category_id']]) >0)
                        <div class="khung">
                            <div class="thanh_title"><a href="san-pham/bo-tao-xung-may-han" title="">
                                    <h2>{{$category['category_name']}}</h2>
                                </a></div>

                            <div class="content_main">
                                <div class="owl-demo">
                                    @foreach($productGroupCategory[$category['category_id']] as $product)
                                        <div>
                                            <div class="item">
                                                <div class="product_img">
                                                    <a href="{{route('product',$product['slug'])}}">
                                                        <img
                                                            src="{{$product['image']}}"
                                                            alt="{{$product['name']}}"/>
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <a href="{{route('product',$product['slug'])}}">
                                                        <h3>{{$product['name']}}</h3>
                                                    </a>
                                                    <div class="boxchitiet">
                                                        <p class="giaban">
                                                            <b>Giá :</b> <span>{{$product['price'] > 0 ? $product['price'] : 'Liên hệ'}}</span>
                                                        </p>
                                                        <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                                                title="Giỏ Hàng">Đặt hàng</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div> <!-- khung -->
                    @endif
                @endforeach

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
            .list_img {
                height: 150px;
            }
        </style>
    </div>
    <!-- main -->
@endsection
