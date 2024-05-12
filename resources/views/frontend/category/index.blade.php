@extends('frontend.layout')
@section('title', 'Trang chủ')
@section('content')
    <div id="right_ok">
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
        <div id="info">
            <div id="sanpham">
                <div class="khung">
                    <div class="thanh_title">
                        <h2><span class="text-uppercase">{{$category->category_name}}</span></h2>
                    </div>
                    <div>
                        <div class="box">
                            @foreach($productData as $product)
                                <div class="item1">
                                    <div class="product_img height-standard">
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
                                            <p class="giaban">
                                                <b>Giá :</b> <span>{{$product->price > 0 ? $product->price : 'Liên hệ'}}</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1200);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                        <div class="paging"></div>
                    </div>
                </div>
            </div>
        </div>
        <div style='display:none'>
            <div id='inline_content'></div>
        </div>
    </div>
@endsection
