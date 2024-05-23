@extends('frontend.layout')
@section('title', 'Trang chủ')
@section('content')
    <link href="{{asset('/css/giohang.css')}}" rel="stylesheet" type="text/css" />
    <div id="right_ok">
        <script language="javascript">
            function xoa(pid) {
                if (confirm('Xóa sản phẩm này ! ')) {
                    document.form1.product_id.value = pid;
                    document.form1.command.value = 'delete';
                    document.form1.submit();
                }
            }

            function clear_cart() {
                if (confirm('Bạn Chắc Có Muốn Xóa Giỏ Hàng Hay Không ? ')) {
                    document.form1.command.value = 'clear';
                    document.form1.submit();
                }
            }

            $(document).ready(function () {
                $('.capnhat_sl').keyup(function (event) {
                    /* Act on the event */
                    var soluong = $(this).val();
                    var product = $(this).attr('name');
                    $.ajax({
                        type: 'POST',
                        url: 'ajax/capnhat_giohang.php',
                        data: {
                            soluong: soluong,
                            product: product
                        },
                        success: function (result) {
                            var getData = $.parseJSON(result);
                            $('.capnhat_price_' + product).html(getData.price_item);
                            $('.capnhat_tienhang').html(getData.totalPriceHtml);
                            $('.capnhat_full').html(getData.full_item);
                        }
                    });
                });
            });
        </script>
        <link href="css/giohang.css" rel="stylesheet" type="text/css"/>
        <div id="info">
            <div id="sanpham">
                <div class="thanh_title">
                    <h2>Giỏ hàng</h2>
                </div>
                <div class="khung">
                    <form name="form1" method="post" action="{{route('cart.checkout')}}">
                        @csrf
                        <input type="hidden" name="product_id"/>
                        <input type="hidden" name="command"/>
                        <table border="0" cellpadding="5px" cellspacing="1px" width="100%" class="giohang_tk">
                            <tr class="menu_giohang">
                                <td class="res_cart">STT</td>
                                <td>Sản phẩm</td>
                                <td>Số lượng</td>
                                <td class="res_cart">Tổng giá</td>
                                <td>Xóa</td>
                            </tr>
                            @php
                                $stt = 1;
                                $tongtien = 0;
                            @endphp
                            @if($cart && $productData)

                                @foreach($productData as $product)
                                    <tr class="form_giohang">
                                        <td width="5%" class="res_cart">{{$stt}}</td>
                                        <td width="30%" class="tt_cart">
                                            <a href="{{route('product',$product['slug'])}}">
                                                <img src="{{$product['image']}}"
                                                     alt="{{$product['name']}}" class='img'/>
                                                <h3>{{$product['name']}}</h3>
                                                <span>Giá : {{$product['price'] > 0 ?: 'Liên hệ' }}</span>
                                            </a>
                                        </td>
                                        <td width="8%">{{$cart[$product['id']] ?? 0}}</td>
                                        <td width="10%" class="res_cart">{{$product['price'] * $cart[$product['id']]}}&nbsp;đ</td>
                                        <td width="10%"><img src="images/icon/disabled.png" border="0" onclick="xoa({{$product['id']}})"
                                                             width="20"
                                                             style="cursor: pointer;"/></td>
                                    </tr>
                                    @php
                                        $tongtien += ($product['price'] * $cart[$product['id']]);
                                        $stt++;
                                    @endphp
                                @endforeach
                            @endif
                            <tr class="tienhang">
                                <td colspan="4" style="text-align: right">Tiền hàng</td>
                                <td><b class="capnhat_tienhang">{{$tongtien}}&nbsp;đ</b></td>
                            </tr>
                            <tr class="phivanchuyen">
                                <td colspan="4" style="text-align: right">Phí vận chuyển</td>
                                <td><b class="capnhat_phivanchuyen">0&nbsp;đ</b></td>
                            </tr>
                            <tr class="tonggia">
                                <td colspan="4" style="text-align: right">Tổng giá</td>
                                <td><b class="capnhat_full">{{$tongtien}}&nbsp;đ</b></td>
                            </tr>
                        </table>
                        <div class="col-md-6 col-sm-6 col-xx-12 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xx-12 col-xs-12 cl_input">
                                <label><img src="images/icon/accuont.png" alt=""> Họ tên <span class="alert">*</span></label>
                                <input name="ten" id="ten" class="formsubmit" value="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xx-12 col-xs-12 cl_input">
                                <label><img src="images/icon/phone.png" alt=""> Điện thoại <span class="alert">*</span></label>
                                <input name="dienthoai" id="dienthoai" class="formsubmit" value="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xx-12 col-xs-12 cl_input">
                                <label><img src="images/icon/house.png" alt=""> Địa chỉ <span class="alert">*</span></label>
                                <input name="diachi" id="diachi" class="formsubmit" value="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xx-12 col-xs-12 cl_area">
                            <label><img src="images/icon/thutuc.png" alt=""> Ghi chú đơn hàng </label>
                            <textarea name="noidung"></textarea>
                        </div>
                        <div class="icon_thanh">
                            <p class="limit_checkout" style="color: #f00; font-style: italic;"></p>
                            <input id="submit_thanhtoan" type="submit" name="next" value="Xác nhận đặt hàng" class="g_muatiep">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
