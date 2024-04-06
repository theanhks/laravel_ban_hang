@extends('user.layout')
@section('title', 'Trang chủ')
@section('content')
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
                                        <img src="upload/product/bo-3525-co-bien-tro-tinh-chinh-2794_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                    <h3>Bo 3525 có biến trở chỉnh</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>52.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-ic3525-pc817.html">
                                        <img src="upload/product/bo-ic3525-pc817-4639_269.91189427313x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-ic3525-pc817.html">
                                    <h3>BO IC3525 PC817</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>55.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(194);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3843-dung.html">
                                        <img src="upload/product/bo-3843-dung-1991_270x219.92242595205.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3843-dung.html">
                                    <h3>BO 3843 đứng</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>32.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-24v-7-chan.html">
                                        <img src="upload/product/bo-24v-7-chan-5095_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-24v-7-chan.html">
                                    <h3>BO 24V 7 CHÂN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(196);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-1515.html">
                                        <img src="upload/product/bo-1515-141_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-1515.html">
                                    <h3>BO 15:15</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>44.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(202);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                        <img src="upload/product/bo-tv-101-khien-may-mig-590_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                    <h3>Bo TV 101 Khiển Máy Mig</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>440.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(210);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-dk250315400-lk-cam.html">
                                        <img src="upload/product/bo-dk250315400-lk-cam-8304_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-dk250315400-lk-cam.html">
                                    <h3>BO DK250/315/400 LK CẮM</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>200.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(218);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-ap-eer42x15-84580.html">
                                        <img src="upload/product/bien-ap-eer42x15-84580-4093_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-ap-eer42x15-84580.html">
                                    <h3>Biến Áp EER42x15 8:45:80</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>57.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(222);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-ap-eer42x15-224.html">
                                        <img src="upload/product/bien-ap-eer42x15-224-9587_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-ap-eer42x15-224.html">
                                    <h3>Biến Áp EER42x15 22:4</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>57.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(229);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/ba-eer42-214.html">
                                        <img src="upload/product/eer42-214-8415_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/ba-eer42-214.html">
                                    <h3>BA EER42 21:4</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>57.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(246);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-ap-nguon-ee25-2006-2-cuon-dau-ra-.html">
                                        <img
                                            src="upload/product/bien-ap-nguon-ee25-2006--2-cuon-dau-ra--3506_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-ap-nguon-ee25-2006-2-cuon-dau-ra-.html">
                                    <h3>Biến Áp Nguồn EE25 200:6 ( 2 cuộn đầu ra )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>16.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(247);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/relay-srd24vdcsla-10a-250v.html">
                                        <img src="upload/product/relay-srd24vdcsla-10a-250v-270_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/relay-srd24vdcsla-10a-250v.html">
                                    <h3>Relay SRD-24VDC-SL-A 10A 250V</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>7.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(261);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/relay-smi24vdcsla-10a-250v.html">
                                        <img src="upload/product/relay-smi24vdcsla-10a-250v-2105_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/relay-smi24vdcsla-10a-250v.html">
                                    <h3>Relay SMI-24VDC-SL-A 10A 250V</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>13.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(262);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/relay-30a24v-songle.html">
                                        <img src="upload/product/relay-24v30a-9211_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/relay-30a24v-songle.html">
                                    <h3>ReLay 30A/24V SONGLE</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(264);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/lnk626pn.html">
                                        <img src="upload/product/lnk626-pg-1502_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/lnk626pn.html">
                                    <h3>LNK626PN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>15.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(265);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/sg3525-cam.html">
                                        <img src="upload/product/sg3525-cam-1-4878_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/sg3525-cam.html">
                                    <h3>SG3525 Cắm</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>7.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(273);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-cap-nguon-dieu-chinh-030v-3a.html">
                                        <img src="upload/product/bo-cap-nguon-dieu-chinh-030v-3a-4639_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-cap-nguon-dieu-chinh-030v-3a.html">
                                    <h3>Bộ Cấp Nguồn Điều Chỉnh 0-30v 3A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>1.000.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(277);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dong-ho-do-dt9205a.html">
                                        <img src="upload/product/dt9205a-6990_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dong-ho-do-dt9205a.html">
                                    <h3>ĐỒNG HỒ DO DT9205A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>130.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(285);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/quat-90x90-24v-025a.html">
                                        <img src="upload/product/quat-90x90-995_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/quat-90x90-24v-025a.html">
                                    <h3>QUẠT 90x90 24v 0.25a</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>21.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(302);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/quat-24v025a-12012038mm.html">
                                        <img src="upload/product/quat-120x120-7119_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/quat-24v025a-12012038mm.html">
                                    <h3>QUẠT 24V/0.25A 120*120*38mm</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>55.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(303);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/van-khi-24v-dc-vz15.html">
                                        <img src="upload/product/van-khi-24v-dc-vz1-6203_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/van-khi-24v-dc-vz15.html">
                                    <h3>VAN KHÍ 24V DC VZ-1.5</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>75.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(315);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/van-khi-220v-vz15.html">
                                        <img src="upload/product/van-khi-220v-vz1-1678_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/van-khi-220v-vz15.html">
                                    <h3>VAN KHÍ 220V VZ-1.5</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>75.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(316);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/b1022w-1k-.html">
                                        <img src="upload/product/b1022w-1k--7639_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/b1022w-1k-.html">
                                    <h3>B102/2W ( 1K )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>5.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(318);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dong-ho-hien-thi-loai-to-73x40mm.html">
                                        <img src="upload/product/dong-ho-hien-thi-loai-to-73x40mm-8570_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dong-ho-hien-thi-loai-to-73x40mm.html">
                                    <h3>Đồng Hồ Hiển Thị Loại To 73x40mm</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>24.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(324);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dong-ho-hien-thi-loai-nho-42x23.html">
                                        <img src="upload/product/dong-ho-hien-thi-loai-nho-42x23-1883_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dong-ho-hien-thi-loai-nho-42x23.html">
                                    <h3>ĐỒNG HỒ HIỂN THỊ LOẠI NHỎ 42x23</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>17.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(325);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-fbt02.html">
                                        <img src="upload/product/cao-ap-fbt02-4238_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-fbt02.html">
                                    <h3>CAO ÁP FBT-02</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(328);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-bsh10n5.html">
                                        <img src="upload/product/cao-ap-bsh10n5-5929_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-bsh10n5.html">
                                    <h3>CAO ÁP BSH10-N5</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(329);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-ftn506.html">
                                        <img src="upload/product/cao-ap-ftn506-7271_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-ftn506.html">
                                    <h3>CAO ÁP FT-N506</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(330);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-mat-nhua-may-han.html">
                                        <img src="upload/product/bo-mat-nhua-may-han-4342_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-mat-nhua-may-han.html">
                                    <h3>BỘ MẶT NHỰA MÁY HÀN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>120.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(352);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/diode-cau-s35vb100.html">
                                        <img src="upload/product/s35vb100-35a-1000v-6927_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/diode-cau-s35vb100.html">
                                    <h3>DIODE CẦU S35VB100</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(355);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/diode-cau-s50vb100.html">
                                        <img src="upload/product/s50vb100-50a-1000v-9906_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/diode-cau-s50vb100.html">
                                    <h3>DIODE CẦU S50VB100</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>15.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(360);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-may-kr500.html">
                                        <img src="upload/product/bo-may-kr500-1713_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-may-kr500.html">
                                    <h3>Bo Máy KR500</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>950.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(364);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/k3878-9a-900v-thao-may.html">
                                        <img src="upload/product/k3878-9a-900v-thao-may-7884_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/k3878-9a-900v-thao-may.html">
                                    <h3>K3878 9A 900V Tháo Máy</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(389);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dau-ket-noi-sung-han-tig.html">
                                        <img src="upload/product/dau-ket-noi-sung-han-tig-8647_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dau-ket-noi-sung-han-tig.html">
                                    <h3>Đầu Kết Nối Súng Hàn Tig</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>30.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(434);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-uc3846-dan-may-hong-ky-.html">
                                        <img src="upload/product/bo-3525-co-bien-tro-tinh-chinh-1-2193_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-uc3846-dan-may-hong-ky-.html">
                                    <h3>BO UC3846 DÁN ( máy hồng ký )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(527);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-che--24v.html">
                                        <img src="upload/product/bo-che--24v-4211_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-che--24v.html">
                                    <h3>BO CHẾ + - 24V</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>50.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(610);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-do-may-mosfet-nguon-lien.html">
                                        <img src="upload/product/bo-do-may-mosfet-nguon-lien-5937_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-do-may-mosfet-nguon-lien.html">
                                    <h3>Bo Độ Máy Mosfet Nguồn Liền</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>250.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(615);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/kinh-han-dien-tu-tx012.html">
                                        <img src="upload/product/kinhhantudongtx0121-2186_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/kinh-han-dien-tu-tx012.html">
                                    <h3>KÍNH HÀN ĐIỆN TỬ TX-012</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>260.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(637);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-sl-3691.html">
                                        <img src="upload/product/cao-ap-sl3691-9464_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-sl-3691.html">
                                    <h3>CAO ÁP SL -3691</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>55.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(638);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-ag1372.html">
                                        <img
                                            src="upload/product/bo-khien-30-chan-chay-ic-3583525-ma-ag1372-7397_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-ag1372.html">
                                    <h3>Bo Khiển 30 Chân Chạy IC 358/3525 MÃ AG1372</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>100.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(656);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-ag1367.html">
                                        <img
                                            src="upload/product/bo-khien-30-chan-chay-ic-31403525-ma-ag1367-1122_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-ag1367.html">
                                    <h3>Bo Khiển 30 Chân Chạy IC 3140/3525 MÃ AG1367</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(658);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/b4722w-47k-.html">
                                        <img src="upload/product/b4722w-4-9263_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/b4722w-47k-.html">
                                    <h3>B472/2W ( 4.7K )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(673);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/shun-4v100a.html">
                                        <img src="upload/product/shun-4v100a-7796_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/shun-4v100a.html">
                                    <h3>SHUN 4V/100A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>140.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(686);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-20-om-50w-20r50w-.html">
                                        <img src="upload/product/dien-tro-20-om-50w-20r50w--9549_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-20-om-50w-20r50w-.html">
                                    <h3>Điện Trở 20 ôm 50w ( 20R50W )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>40.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(692);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-470uf400v-35x50-moi-100.html">
                                        <img src="upload/product/tu-470uf450v-35x50-moi-100-4158_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-470uf400v-35x50-moi-100.html">
                                    <h3>TỤ 470UF/400V 35x50 mới 100%</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>19.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(693);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-01.html">
                                        <img src="upload/product/bo-cao-ap-cut-70-3741_247.3388042204x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-01.html">
                                    <h3>CAO ÁP 01</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>470.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(699);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-1k6w.html">
                                        <img src="upload/product/1k-1398_181.73913043478x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-1k6w.html">
                                    <h3>ĐIỆN TRỞ 1K/6W</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>3.500 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(700);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-khien-13-chan-ma-pkt12a0.html">
                                        <img src="upload/product/bo-khien-13-chan-ma-pkt12a0-5619_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-khien-13-chan-ma-pkt12a0.html">
                                    <h3>Bo Khiển 13 Chân Mã PK-T12-A0</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(707);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/-bo-2-coc-han-dkj-1025-noi-ngoai.html">
                                        <img src="upload/product/dkj-5070-noi-ngoai-1-5424_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/-bo-2-coc-han-dkj-1025-noi-ngoai.html">
                                    <h3>( Bộ 2 Cọc Hàn ) DKJ 10-25 Nối Ngoài</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>38.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(716);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/shun-cut-60a.html">
                                        <img src="upload/product/shun-cut-60a-8261_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/shun-cut-60a.html">
                                    <h3>SHUN CUT 60A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>15.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(742);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-nhiet-16p.html">
                                        <img src="upload/product/16p-8258_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-nhiet-16p.html">
                                    <h3>ĐIỆN TRỞ NHIỆT 16P</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>5.500 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(749);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cong-tac-30a250v-khong-den.html">
                                        <img src="upload/product/cong-tac-30a250v-khong-den-4431_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cong-tac-30a250v-khong-den.html">
                                    <h3>Công Tắc 30A/250V Không Đèn</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>11.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(750);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/igbt-100a1700v-cu-xac-to.html">
                                        <img src="upload/product/100a-9993_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/igbt-100a1700v-cu-xac-to.html">
                                    <h3>IGBT 100A/1700V cũ xác to</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>630.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(754);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cong-tac-30a-400v-3-pha.html">
                                        <img src="upload/product/cong-tac-30a-400v-3-pha-3370_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cong-tac-30a-400v-3-pha.html">
                                    <h3>CÔNG TẮC 30A 400V 3 PHA</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>45.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(758);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/led-mau-xanh-3mm-bich-50-con-.html">
                                        <img src="upload/product/479f6e1b7ef449289473b85b6ce008bc-9705_220x220.jpeg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/led-mau-xanh-3mm-bich-50-con-.html">
                                    <h3>led màu xanh 3mm ( bịch 50 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(776);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/giac-ket-noi-day-nguon-may-han-bich-100-cai.html">
                                        <img src="upload/product/8ed2835eab404016833bce7e77513d6e-9340_220x220.jpeg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/giac-ket-noi-day-nguon-may-han-bich-100-cai.html">
                                    <h3>Giắc Kết Nối dây nguồn máy hàn ( bịch 100 cái</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(777);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dau-kep-day-bich-100-cai-.html">
                                        <img src="upload/product/916ca968065447768e2685cc8f6d8e23-865_220x220.jpeg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dau-kep-day-bich-100-cai-.html">
                                    <h3>đầu kẹp dây ( bịch 100 cái ) </h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>35.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(778);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/oc-nho-m36-goi-100-con-.html">
                                        <img src="upload/product/oc-nho-m36-goi-100-con--7466_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/oc-nho-m36-goi-100-con-.html">
                                    <h3>Ốc Nhỏ M3*6 ( gói 100 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>18.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(779);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-20-mos-kieu-bien-ap-dau-ra-mac-song-song-.html">
                                        <img
                                            src="upload/product/bo-20-mos-kieu-bien-ap-dau-ra-mac-song-song--4129_270x219.92242595205.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-20-mos-kieu-bien-ap-dau-ra-mac-song-song-.html">
                                    <h3>BO 20 MOS ( kiểu biến áp đầu ra mắc song song )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>280.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(780);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/ic-4688-dan.html">
                                        <img src="upload/product/4688-dan-4160_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/ic-4688-dan.html">
                                    <h3>IC 4688 DÁN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>7.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(782);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/mat-na-han-dien-tu-co-dieu-chinh.html">
                                        <img src="upload/product/a4e4f1e0bd6e4030197f-4374_220.88924818108x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/mat-na-han-dien-tu-co-dieu-chinh.html">
                                    <h3>Mặt nạ hàn điện tử có điều chỉnh</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>220.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(882);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/kinh-han-dien-tu-loai-tot.html">
                                        <img src="upload/product/f9c7387c80f77da924e6-6234_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/kinh-han-dien-tu-loai-tot.html">
                                    <h3>Kính hàn điện tử loại tốt</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>120.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(883);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/kinh-han-dien-tu-tx012s.html">
                                        <img src="upload/product/8ca9a81f1094edcab485-9131_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/kinh-han-dien-tu-tx012s.html">
                                    <h3>Kính hàn điện tử TX012s</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>180.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(884);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/mat-na-han-dien-tu-bang-da.html">
                                        <img src="upload/product/8ed8b1fc72d2918cc8c3-copy-5183_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/mat-na-han-dien-tu-bang-da.html">
                                    <h3>mặt nạ hàn điện tử bằng da</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>120.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(888);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/kinh-han-dien-tu-tx009.html">
                                        <img src="upload/product/kinh-hop-giay-2477_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/kinh-han-dien-tu-tx009.html">
                                    <h3>Kính hàn điện tử TX009</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>80.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(935);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/quat-80x80-24v-025a.html">
                                        <img src="upload/product/quat-80x80-24v-0-6427_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/quat-80x80-24v-025a.html">
                                    <h3>Quạt 80x80 24V 0.25A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>22.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(940);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/quat-90x90-12v025a.html">
                                        <img src="upload/product/90x90-8647_165x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/quat-90x90-12v025a.html">
                                    <h3>QUẠT 90X90 12V0.25A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>22.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(942);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tam-kinh-dung-cho-non-han.html">
                                        <img
                                            src="upload/product/z2571760881142ec3ec36215385892e3fce15f92ef4c7e-831_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tam-kinh-dung-cho-non-han.html">
                                    <h3>tấm kính dùng cho nón hàn</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>130.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(971);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-tro-5-chan-b102-1k-.html">
                                        <img src="upload/product/bien-tro-5-chan-b102-1k--7083_269.74427994616x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-tro-5-chan-b102-1k-.html">
                                    <h3>Biến Trở 5 Chân B102 ( 1K )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(974);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-1.html">
                                        <img
                                            src="upload/product/z3014550117719f9a9b43c4ed194917d6741c46f8b9ee4-745_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-1.html">
                                    <h3>BO LASER MẪU 1</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>55.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(999);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/fr107-1a1000v-1-goi-100-con-.html">
                                        <img src="upload/product/fr107-5908_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/fr107-1a1000v-1-goi-100-con-.html">
                                    <h3>FR107 (1A1000V) ( 1 gói 100 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>30.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1083);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-ap-chia-xung-eel22-252525.html">
                                        <img src="upload/product/bien-ap-chia-xung-eel22-252525-4790_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-ap-chia-xung-eel22-252525.html">
                                    <h3>Biến Áp Chia Xung EEL-22 25:25:25</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>28.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1115);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/quat-250fzy8d-380v100w.html">
                                        <img src="upload/product/quat-250fzy8d-380v100w-1888_269.82292637465x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/quat-250fzy8d-380v100w.html">
                                    <h3>QUẠT 250FZY8-D 380V-100W</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>580.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1119);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-ft467a.html">
                                        <img src="upload/product/cao-ap-ft467a-2380_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-ft467a.html">
                                    <h3>CAO ÁP FT-467A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1122);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-fbt13.html">
                                        <img src="upload/product/cao-ap-fbt13-1901_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-fbt13.html">
                                    <h3>CAO ÁP FBT-13</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1123);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-06-may-1-pha-722-.html">
                                        <img src="upload/product/cao-ap-06-may-1-pha-722--1887_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-06-may-1-pha-722-.html">
                                    <h3>CAO ÁP 06 MÁY 1 PHA ( 7:22: )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>300.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1125);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-cao-ap-14.html">
                                        <img src="upload/product/bo-cao-ap-14-553_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-cao-ap-14.html">
                                    <h3>BO CAO ÁP 14</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>320.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1128);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-ap-nguon-ee25-2006-1-cuon-dau-ra-.html">
                                        <img
                                            src="upload/product/bien-ap-nguon-ee25-2006--1-cuon-dau-ra--6789_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-ap-nguon-ee25-2006-1-cuon-dau-ra-.html">
                                    <h3>Biến Áp Nguồn EE25 200:6 ( 1 cuộn đầu ra )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>14.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1132);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/fr107-dan-1-goi-100-con-.html">
                                        <img src="upload/product/fr107-dan-1-goi-100-con--3106_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/fr107-dan-1-goi-100-con-.html">
                                    <h3>FR107 DÁN ( 1 gói 100 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>35.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1151);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/1n5819-dan-1-goi-50-con-.html">
                                        <img src="upload/product/1n5819-5415_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/1n5819-dan-1-goi-50-con-.html">
                                    <h3>1N5819 DÁN ( 1 gói 50 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>35.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1152);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/zener-15v-12w-dan-kieu-1206-goi-50-con-.html">
                                        <img
                                            src="upload/product/zener-15v-12w-dan-kieu-1206-goi-50-con--1881_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/zener-15v-12w-dan-kieu-1206-goi-50-con-.html">
                                    <h3>ZENER 15V 1/2W Dán Kiểu 1206( gói 50 con ) </h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>15.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1161);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/quat-220v-150fzyd-30w.html">
                                        <img src="upload/product/quat-220v-150fzyd-30w-3205_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/quat-220v-150fzyd-30w.html">
                                    <h3>Quạt 220V 150FZY-D 30W</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>210.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1220);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-ap-chia-xung-eel22-252525-co-day.html">
                                        <img
                                            src="upload/product/bien-ap-chia-xung-eel22-252525-co-day-8372_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-ap-chia-xung-eel22-252525-co-day.html">
                                    <h3>Biến Áp Chia Xung EEL-22 25:25:25 Có Dây</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>30.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1262);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bien-tro-b502-2w-5k-.html">
                                        <img src="upload/product/bien-tro-b502-2w-5k--571_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bien-tro-b502-2w-5k-.html">
                                    <h3>Biến Trở B502 2W ( 5K )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1294);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/relay-may-ct312-ct416-24v-40a.html">
                                        <img src="upload/product/relay-may-ct312-ct416-24v-40a-796_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/relay-may-ct312-ct416-24v-40a.html">
                                    <h3>Relay Máy CT312 CT416 24V 40A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>200.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(263);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/-bo-2-coc-han-dkj-1025-trong-cai-.html">
                                        <img src="upload/product/dkj-1025-trong-cai--6597_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/-bo-2-coc-han-dkj-1025-trong-cai-.html">
                                    <h3>( Bộ 2 Cọc Hàn ) DKJ 10-25 TRONG ( CÁI )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>13.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(435);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-168-lk-cam.html">
                                        <img src="upload/product/bo-168-lk-cam-3567_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-168-lk-cam.html">
                                    <h3>BO 16:8 LK CẮM</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>42.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(488);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-pkt6a2.html">
                                        <img
                                            src="upload/product/bo-khien-30-chan-chay-ic-3583525-ma-pkt6a2-6316_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-pkt6a2.html">
                                    <h3>Bo Khiển 30 Chân Chạy IC 358/3525 MÃ PK-T6-A2</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(690);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-02.html">
                                        <img src="upload/product/wsme250p-2187_255.90132827324x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-02.html">
                                    <h3>CAO ÁP 02</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>480.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(698);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-2.html">
                                        <img src="upload/product/mau-2-654_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-2.html">
                                    <h3>BO LASER MẪU 2</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>95.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(913);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/b1022w-kep.html">
                                        <img src="upload/product/b102-8040_248.24691358025x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/b1022w-kep.html">
                                    <h3>B102/2W KÉP</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(320);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-cbb22-475j400v.html">
                                        <img src="upload/product/475j-8882_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-cbb22-475j400v.html">
                                    <h3>TỤ CBB22 475J/400V</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>5.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(341);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-nhiet-15p-100-om-.html">
                                        <img src="upload/product/dien-tro-nhiet-15p--100-om--2235_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-nhiet-15p-100-om-.html">
                                    <h3>Điện Trở Nhiệt 15P ( 100 ôm )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>4.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(346);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cau-diode-4-lop-400a-3-pha.html">
                                        <img
                                            src="upload/product/cau-diode-4-lop-400a-3-pha-7890_269.82292637465x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cau-diode-4-lop-400a-3-pha.html">
                                    <h3>CẦU DIODE 4 LỚP 400A 3 PHA</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>720.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(359);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/diode-byv26e.html">
                                        <img src="upload/product/byv26e-303_270x192.72413793103.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/diode-byv26e.html">
                                    <h3>DIODE BYV26E</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>3.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(376);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/igbt-200a1200v-xac-lon-cu.html">
                                        <img src="upload/product/igbt-200a-409_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/igbt-200a1200v-xac-lon-cu.html">
                                    <h3>IGBT 200A/1200V xác lớn cũ</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>850.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(408);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-chia-xung-168-loai-lon.html">
                                        <img src="upload/product/bo-chia-xung-168-loai-lon-8293_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-chia-xung-168-loai-lon.html">
                                    <h3>Bo Chia Xung 16:8 Loại Lớn</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(506);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-03.html">
                                        <img src="upload/product/cao-ap-03-6377_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-03.html">
                                    <h3>CAO ÁP 03</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>450.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(684);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-tk51ta2.html">
                                        <img
                                            src="upload/product/bo-khien-30-chan-chay-ic-31403525-ma-tk51ta2-5774_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-tk51ta2.html">
                                    <h3>Bo Khiển 30 Chân Chạy IC 3140/3525 MÃ TK-51T-A2</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(689);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tl494cn-cam.html">
                                        <img src="upload/product/494cn-3493_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tl494cn-cam.html">
                                    <h3>TL494CN cắm</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>9.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(783);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-3.html">
                                        <img src="upload/product/mau-3-3036_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-3.html">
                                    <h3>BO LASER MẪU 3</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>70.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(914);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-102-dan-kieu-1206-goi-50-con-.html">
                                        <img src="upload/product/tu-102-dan-kieu-1206-goi-50-con--646_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-102-dan-kieu-1206-goi-50-con-.html">
                                    <h3>Tụ 102 Dán Kiểu 1206 ( gói 50 con ) </h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>20.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1153);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/relay-nhiet-thuong-mo-80-do-loai-co-day.html">
                                        <img
                                            src="upload/product/relay-nhiet-thuong-mo-80-do-loai-co-day-3108_269.82292637465x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/relay-nhiet-thuong-mo-80-do-loai-co-day.html">
                                    <h3>Relay Nhiệt Thường Mở 80 Độ Loại Có Dây</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>9.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(260);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-168-lk-dan.html">
                                        <img src="upload/product/bo-168-lk-dan-5598_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-168-lk-dan.html">
                                    <h3>BO 16:8 LK DÁN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>42.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(275);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-bsh17.html">
                                        <img src="upload/product/cao-ap-bsh17-6746_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-bsh17.html">
                                    <h3>CAO ÁP BSH-17</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>50.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(327);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/k2698-thao-may.html">
                                        <img src="upload/product/k2698-thao-may-9249_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/k2698-thao-may.html">
                                    <h3>K2698 Tháo Máy</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>9.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(388);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-khien-20-chan-chay-ic-0843846-ma-xugo28a1.html">
                                        <img
                                            src="upload/product/bo-khien-20-chan-chay-ic-0843846-ma-xugo28a1-2071_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-khien-20-chan-chay-ic-0843846-ma-xugo28a1.html">
                                    <h3>Bo Khiển 20 Chân Chạy IC 084/3846 MÃ XUGO28-A1</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>100.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(449);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/may-han-mig-jasic-250-3-pha.html">
                                        <img src="upload/product/mig-jasic-7409_270x202.5.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/may-han-mig-jasic-250-3-pha.html">
                                    <h3>MÁY HÀN MIG JASIC 250 3 PHA</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>9.850.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(468);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/may-han-mig-jasic-250-1-pha.html">
                                        <img src="upload/product/mig-jasic-4899_270x202.5.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/may-han-mig-jasic-250-1-pha.html">
                                    <h3>MÁY HÀN MIG JASIC 250 1 PHA</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>9.700.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(472);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/shun-500a75mv.html">
                                        <img src="upload/product/shun-500a75mv-6379_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/shun-500a75mv.html">
                                    <h3>shun 500A/75mv</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(655);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-4.html">
                                        <img
                                            src="upload/product/z30145507428756a4fa3e548c2acd3cb65f5baf8856aca-891_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-4.html">
                                    <h3>BO LASER MẪU 4</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>75.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(915);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-103-dan-kieu-1206-goi-50-con-.html">
                                        <img src="upload/product/tu-103-dan-kieu-1206-goi-50-con--7234_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-103-dan-kieu-1206-goi-50-con-.html">
                                    <h3>Tụ 103 Dán Kiểu 1206 ( gói 50 con ) </h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>20.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1154);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-chia-xung-157-loai-lon.html">
                                        <img src="upload/product/bo-chia-xung-157-loai-lon-7922_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-chia-xung-157-loai-lon.html">
                                    <h3>Bo Chia Xung 15:7 Loại Lớn</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>65.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(206);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-nguon-tig-cut-da-gan-tu.html">
                                        <img src="upload/product/bo-nguon-tig-cut-da-gan-tu-6575_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-nguon-tig-cut-da-gan-tu.html">
                                    <h3>Bo Nguồn Tig - Cut Đã Gắn Tụ</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>440.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(219);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/relay-nhiet-thuong-mo-loai-tron-85-do.html">
                                        <img
                                            src="upload/product/relay-nhiet-thuong-mo-loai-tron-85-do-2325_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/relay-nhiet-thuong-mo-loai-tron-85-do.html">
                                    <h3>Relay Nhiệt Thường Mở Loại Tròn 85 Độ</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>9.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(259);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-25-chan-3846-lk-cam.html">
                                        <img src="upload/product/bo-25-chan-3846-lk-cam-6782_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-25-chan-3846-lk-cam.html">
                                    <h3>BO 25 CHÂN 3846 LK CẮM</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>55.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(274);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/b104-4-chan-100k.html">
                                        <img src="upload/product/b104-4-chan-100k-3960_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/b104-4-chan-100k.html">
                                    <h3>B104 4 CHÂN (100K)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>12.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(322);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-40uf-1250v.html">
                                        <img src="upload/product/tu-40uf-1250v-9050_269.82292637465x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-40uf-1250v.html">
                                    <h3>Tụ 40UF 1250V</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>160.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(343);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/mf-9z24.html">
                                        <img src="upload/product/z24-cu-848_270x182.90322580645.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/mf-9z24.html">
                                    <h3>MF 9Z24</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>3.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(392);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-1000uf35v.html">
                                        <img src="upload/product/tu-1000uf-8934_220x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-1000uf35v.html">
                                    <h3>TỤ 1000UF/35V</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>2.500 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(475);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/igbt-50jr22-50a-600v-thao-may.html">
                                        <img src="upload/product/igbt-50jr22-50a-600v-thao-may-4522_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/igbt-50jr22-50a-600v-thao-may.html">
                                    <h3>IGBT 50JR22 50A 600V Tháo Máy</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>Liên Hệ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(636);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3525-1-ic.html">
                                        <img src="upload/product/bo-3525-1-ic-3149_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-1-ic.html">
                                    <h3>BO 3525 1 IC</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>100.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(644);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/shun-rcs09k10a.html">
                                        <img src="upload/product/shun-rcs09k10a-3402_270x219.92242595205.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/shun-rcs09k10a.html">
                                    <h3>Shun RCS09K-10A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>150.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(676);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-tv-21.html">
                                        <img src="upload/product/bo-tv-21-4341_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-tv-21.html">
                                    <h3>BO TV 21</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>390.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(784);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-5.html">
                                        <img src="upload/product/mau-5-4171_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-5.html">
                                    <h3>BO LASER MẪU 5</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>75.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(916);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-104-dan-kieu-1206-goi-50-con-.html">
                                        <img src="upload/product/tu-104-dan-kieu-1206-goi-50-con--6226_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-104-dan-kieu-1206-goi-50-con-.html">
                                    <h3>Tụ 104 Dán Kiểu 1206 ( gói 50 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>20.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1155);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-dan-10-om-kieu-1206-smd-goi-100-con.html">
                                        <img
                                            src="upload/product/dien-tro-dan-10-om-kieu-1206-smd-goi-100-con-766_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-dan-10-om-kieu-1206-smd-goi-100-con.html">
                                    <h3>Điện Trở Dán 10 ôm Kiểu 1206 SMD ( Gói 100 Con)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1205);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-06-may-3-pha-845-.html">
                                        <img src="upload/product/cao-ap-06-may-3-pha-845--2219_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-06-may-3-pha-845-.html">
                                    <h3>CAO ÁP 06 MÁY 3 PHA ( 8:45: )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>300.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(213);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/ic-tl084-cam.html">
                                        <img src="upload/product/ic-tl084-cam-776_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/ic-tl084-cam.html">
                                    <h3>IC TL084 CẮM</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>6.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(498);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-2020.html">
                                        <img src="upload/product/bo-20-2808_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-2020.html">
                                    <h3>BO 20:20</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>55.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(762);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-6.html">
                                        <img src="upload/product/mau-6-4270_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-6.html">
                                    <h3>BO LASER MẪU 6</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>80.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(917);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/diode-1n4148-dan-kieu-1206-goi-100-con-.html">
                                        <img
                                            src="upload/product/diode-1n4148-dan-kieu-1206-goi-100-con--951_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/diode-1n4148-dan-kieu-1206-goi-100-con-.html">
                                    <h3>DIODE 1N4148 Dán Kiểu 1206( gói 100 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>20.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1156);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-dan-20-om-kieu-1206-smd-goi-100-con.html">
                                        <img
                                            src="upload/product/dien-tro-dan-20-om-kieu-1206-smd-goi-100-con-1601_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-dan-20-om-kieu-1206-smd-goi-100-con.html">
                                    <h3>Điện Trở Dán 20 ôm Kiểu 1206 SMD ( Gói 100 Con)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1206);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-047uf-1200vdc-den.html">
                                        <img src="upload/product/tu-0-9808_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-047uf-1200vdc-den.html">
                                    <h3>Tụ 0.47UF 1200VDC ĐEN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>60.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(326);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/kep-mass-300a.html">
                                        <img src="upload/product/kep-mass-300a-2170_269.91189427313x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/kep-mass-300a.html">
                                    <h3>KẸP MASS 300A</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>14.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(445);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/shun-300a-75mv.html">
                                        <img src="upload/product/shun-300a-75mv-6852_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/shun-300a-75mv.html">
                                    <h3>SHUN 300A 75mv</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>40.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(465);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-nguon-may-igbt-co-cau-co-4-tu-470uf.html">
                                        <img
                                            src="upload/product/bo-nguon-may-igbt-co-cau-co-4-tu-470uf-7491_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-nguon-may-igbt-co-cau-co-4-tu-470uf.html">
                                    <h3>Bo Nguồn Máy igbt Có Cầu Có 4 tụ 470uf</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>250.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(747);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-07.html">
                                        <img src="upload/product/6af05df4905e4e829a9b8815d7422ae6-7907_220x220.jpeg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-07.html">
                                    <h3>CAO ÁP 07</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>490.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(765);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-7.html">
                                        <img src="upload/product/mau-7-4698_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-7.html">
                                    <h3>BO LASER MẪU 7</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(918);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/zener-62v-12w-dan-kieu-1206-goi-50-con-.html">
                                        <img src="upload/product/zener-6-4188_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/zener-62v-12w-dan-kieu-1206-goi-50-con-.html">
                                    <h3>ZENER 6.2V 1/2W Dán Kiểu 1206( gói 50 con ) </h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>15.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1157);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-dan-100-om-kieu-1206-smd-goi-100-con.html">
                                        <img
                                            src="upload/product/dien-tro-dan-100-om-kieu-1206-smd-goi-100-con-9940_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-dan-100-om-kieu-1206-smd-goi-100-con.html">
                                    <h3>Điện Trở Dán 100 ôm Kiểu 1206 SMD ( Gói 100 Con)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1207);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/kim-han-vang-500a.html">
                                        <img src="upload/product/kim-han-vang-500a-2519_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/kim-han-vang-500a.html">
                                    <h3>kìm hàn vàng 500a</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>23.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(446);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-08.html">
                                        <img src="upload/product/cao-ap-08-5773_270x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-08.html">
                                    <h3>CAO ÁP 08</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>420.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(668);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-8.html">
                                        <img
                                            src="upload/product/z30145421223609c9403a3195774608e5ba8c4a7465649-1382_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-8.html">
                                    <h3>BO LASER MẪU 8</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>65.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(986);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/zener-51v-12w-dan-kieu-1206-goi-50-con-.html">
                                        <img src="upload/product/zener-5-5577_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/zener-51v-12w-dan-kieu-1206-goi-50-con-.html">
                                    <h3>ZENER 5.1V 1/2W Dán Kiểu 1206( gói 50 con ) </h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>15.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1158);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/zener-12v-12w-dan-kieu-1206-goi-50-con-.html">
                                        <img
                                            src="upload/product/zener-12v-12w-dan-kieu-1206-goi-50-con--9140_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/zener-12v-12w-dan-kieu-1206-goi-50-con-.html">
                                    <h3>Zener 12V 1/2W Dán Kiểu 1206( gói 50 con )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>15.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1159);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-dan-1k-om-kieu-1206-smd-goi-100-con.html">
                                        <img
                                            src="upload/product/dien-tro-dan-1k-om-kieu-1206-smd-goi-100-con-2667_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-dan-1k-om-kieu-1206-smd-goi-100-con.html">
                                    <h3>Điện Trở Dán 1K ôm Kiểu 1206 SMD ( Gói 100 Con)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1208);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-09.html">
                                        <img src="upload/product/wsm315-891_248.31683168317x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-09.html">
                                    <h3>CAO ÁP 09</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>300.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(697);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-9.html">
                                        <img
                                            src="upload/product/z301453899670658a04a156ba7337a63cb0df550cae841-9131_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-9.html">
                                    <h3>BO LASER MẪU 9</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>70.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(987);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-dan-51k-kieu-1206-smd-goi-100-con.html">
                                        <img src="upload/product/dien-tro-dan-5-5919_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-dan-51k-kieu-1206-smd-goi-100-con.html">
                                    <h3>Điện Trở Dán 5.1K Kiểu 1206 SMD ( Gói 100 Con)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1209);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/van-khi-36v-ac-vz15.html">
                                        <img src="upload/product/van-khi-36v-ac-vz1-2095_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/van-khi-36v-ac-vz15.html">
                                    <h3> VAN KHÍ 36V AC VZ-1.5</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>75.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(317);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/tu-2x16uf-400vdc.html">
                                        <img src="upload/product/tu-2x16uf-400vdc-2612_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/tu-2x16uf-400vdc.html">
                                    <h3>Tụ 2x16UF 400VDC</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>190.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(333);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/igbt-100a1200v-xac-nho-cu.html">
                                        <img src="upload/product/igbt-100a-xac-nho-5086_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/igbt-100a1200v-xac-nho-cu.html">
                                    <h3>IGBT 100A/1200V xác nhỏ cũ</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>500.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(406);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-24v-7-chan-lk-dan.html">
                                        <img src="upload/product/bo-24v-7-chan-lk-dan-1921_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-24v-7-chan-lk-dan.html">
                                    <h3>BO 24V 7 CHÂN LK DÁN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>13.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(448);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cao-ap-10.html">
                                        <img src="upload/product/bo-cao-ap-10-723_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cao-ap-10.html">
                                    <h3>CAO ÁP 10</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>270.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(599);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/cuon-hoi-tiep-igbt.html">
                                        <img src="upload/product/cuon-hoi-tiep-7321_230.44410413476x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/cuon-hoi-tiep-igbt.html">
                                    <h3>CUỘN HỒI TIẾP IGBT</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>20.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(639);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/shun-300ts.html">
                                        <img src="upload/product/shun-300ts-151_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/shun-300ts.html">
                                    <h3>SHUN 300TS</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>45.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(705);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-330k5w.html">
                                        <img src="upload/product/dien-tro-330k-7745_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-330k5w.html">
                                    <h3>ĐIỆN TRỞ 330K/5W</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>3.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(757);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-tv-05.html">
                                        <img src="upload/product/bo-tv-05-8768_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-tv-05.html">
                                    <h3>BO TV 05</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>55.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(760);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-tv-22.html">
                                        <img src="upload/product/bo-tv-22-5582_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-tv-22.html">
                                    <h3>BO TV 22</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>45.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(785);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-262626.html">
                                        <img src="upload/product/bo-26-3434_220x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-262626.html">
                                    <h3>BO 26:26:26</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>150.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(786);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-khien-14-chan-chay-ic-3846-ma-ag1349.html">
                                        <img
                                            src="upload/product/bo-khien-14-chan-chay-ic-3846-ma-ag1349-6984_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-khien-14-chan-chay-ic-3846-ma-ag1349.html">
                                    <h3>Bo Khiển 14 Chân Chạy IC 3846 MÃ AG1349</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>110.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(787);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3583525-14-chan.html">
                                        <img src="upload/product/bo-3583525-14-chan-7455_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3583525-14-chan.html">
                                    <h3>BO 358/3525 14 CHÂN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>80.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(788);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3846-13-chan.html">
                                        <img src="upload/product/bo-3846-13-chan-666_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3846-13-chan.html">
                                    <h3>BO 3846 13 CHÂN</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>100.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(789);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-3525-2-bien-tro.html">
                                        <img src="upload/product/bo-3525-2-bien-tro-5411_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-3525-2-bien-tro.html">
                                    <h3>BO 3525 2 BIẾN TRỞ</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>90.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(790);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-1515-co-hoi-tiep.html">
                                        <img src="upload/product/bo-15-8985_220x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-1515-co-hoi-tiep.html">
                                    <h3>BO 15:15 CÓ HỒI TIẾP</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>250.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(791);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-tv-23.html">
                                        <img src="upload/product/bo-tv-23-732_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-tv-23.html">
                                    <h3>BO TV 23</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>320.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(792);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/kinh-han-dien-tu-chong-khoi.html">
                                        <img
                                            src="upload/product/kinhhandientukh0061m4g3grr4twsimgab1f47350x350maxb-3888_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/kinh-han-dien-tu-chong-khoi.html">
                                    <h3>kính hàn điện tử chống khói</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>120.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(890);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-10.html">
                                        <img
                                            src="upload/product/z301468335982868843528ec777a785b9371b995adc6c8-407_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-10.html">
                                    <h3>BO LASER MẪU 10</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>95.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(992);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-cao-ap-12.html">
                                        <img src="upload/product/bo-cao-ap-12-3653_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-cao-ap-12.html">
                                    <h3>BO CAO ÁP 12</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>270.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1026);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-cao-ap-13.html">
                                        <img src="upload/product/bo-cao-ap-13-7834_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-cao-ap-13.html">
                                    <h3>BO CAO ÁP 13</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>420.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1027);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-danh-lua-cao-ap.html">
                                        <img src="upload/product/bo-danh-lua-cao-ap-6485_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-danh-lua-cao-ap.html">
                                    <h3>BỘ ĐÁNH LỬA CAO ÁP</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>45.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1136);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-nguon-tig-cut-chua-gan-tu.html">
                                        <img src="upload/product/bo-nguon-tig-cut-chua-gan-tu-7657_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-nguon-tig-cut-chua-gan-tu.html">
                                    <h3>Bo Nguồn Tig - Cut Chưa Gắn Tụ</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>320.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(212);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-11.html">
                                        <img
                                            src="upload/product/z30145277483820d889259d8e3376d1e3791919a287492-2337_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-11.html">
                                    <h3>BO LASER MẪU 11</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>80.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(989);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-dan-51-om--kieu-1206-smd-goi-100-con.html">
                                        <img src="upload/product/dien-tro-dan-5-4602_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-dan-51-om--kieu-1206-smd-goi-100-con.html">
                                    <h3>Điện Trở Dán 5.1 ôm Kiểu 1206 SMD ( Gói 100 Con)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1211);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-12.html">
                                        <img
                                            src="upload/product/z3014522373560a2d2a5f380aee9bdb69936991a363bc7-1222_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-12.html">
                                    <h3>BO LASER MẪU 12</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>65.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(990);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/dien-tro-dan-22-om--kieu-1206-smd-goi-100-con.html">
                                        <img src="upload/product/dien-tro-dan-2-787_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/dien-tro-dan-22-om--kieu-1206-smd-goi-100-con.html">
                                    <h3>Điện Trở Dán 2.2 ôm Kiểu 1206 SMD ( Gói 100 Con)</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>10.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1212);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-13.html">
                                        <img
                                            src="upload/product/z301451603301542acd4706b8314ab4201bf9d0ae84ee1-6306_220x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-13.html">
                                    <h3>BO LASER MẪU 13</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>85.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(991);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-14.html">
                                        <img src="upload/product/bo-laser-mau-14-5543_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-14.html">
                                    <h3>BO LASER MẪU 14</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>160.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1201);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-15.html">
                                        <img src="upload/product/bo-laser-mau-15-1257_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-15.html">
                                    <h3>BO LASER MẪU 15</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>160.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1202);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bo-laser-mau-16.html">
                                        <img src="upload/product/bo-laser-mau-16-2618_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bo-laser-mau-16.html">
                                    <h3>BO LASER MẪU 16</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>155.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1203);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/-bo-2-coc-han-dkj-1025-ngoai-duc-.html">
                                        <img src="upload/product/dkj-1025-ngoai-duc--6173_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/-bo-2-coc-han-dkj-1025-ngoai-duc-.html">
                                    <h3>( Bộ 2 Cọc Hàn ) DKJ 10-25 NGOÀI ( ĐỰC )</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>13.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(436);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/ba-eel25-200163333.html">
                                        <img src="upload/product/eel25-200163333-9721_270x220.jpg">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/ba-eel25-200163333.html">
                                    <h3>BA EEL25 200:16:33:33</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>28.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(238);"
                                                        title="Giỏ Hàng">Đặt hàng</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="item ">
                                <div class="list_img">
                                    <a href="san-pham/bt-98212213.html">
                                        <img src="upload/product/bt-98-5850_214.31524547804x220.png">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <a href="san-pham/bt-98212213.html">
                                    <h3>BT 98:21:22:13</h3>
                                </a>
                                <p class="giaban">
                                    <b>Giá :</b> <span>28.000 VNĐ</span>
                                </p>
                                <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(223);"
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
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-3525-co-bien-tro-tinh-chinh-2794_270x220.jpg"
                                                alt="Bo 3525 có biến trở chỉnh"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-co-bien-tro-chinh.html">
                                            <h3>Bo 3525 có biến trở chỉnh</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>52.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(193);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-ic3525-pc817.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-ic3525-pc817-4639_269.91189427313x220.png"
                                                alt="BO IC3525 PC817"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-ic3525-pc817.html">
                                            <h3>BO IC3525 PC817</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>55.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(194);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-dk250315400-lk-cam.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-dk250315400-lk-cam-8304_270x220.jpg"
                                                alt="BO DK250/315/400 LK CẮM"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-dk250315400-lk-cam.html">
                                            <h3>BO DK250/315/400 LK CẮM</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>200.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(218);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-uc3846-dan-may-hong-ky-.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-3525-co-bien-tro-tinh-chinh-1-2193_270x220.jpg"
                                                alt="BO UC3846 DÁN ( máy hồng ký )"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-uc3846-dan-may-hong-ky-.html">
                                            <h3>BO UC3846 DÁN ( máy hồng ký )</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>85.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(527);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-ag1372.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-khien-30-chan-chay-ic-3583525-ma-ag1372-7397_270x220.jpg"
                                                alt="Bo Khiển 30 Chân Chạy IC  358/3525 MÃ AG1372"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-ag1372.html">
                                            <h3>Bo Khiển 30 Chân Chạy IC 358/3525 MÃ AG1372</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>100.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(656);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-ag1367.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-khien-30-chan-chay-ic-31403525-ma-ag1367-1122_270x220.jpg"
                                                alt="Bo Khiển 30 Chân Chạy IC  3140/3525 MÃ AG1367"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-ag1367.html">
                                            <h3>Bo Khiển 30 Chân Chạy IC 3140/3525 MÃ AG1367</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>85.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(658);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-khien-13-chan-ma-pkt12a0.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-khien-13-chan-ma-pkt12a0-5619_270x220.jpg"
                                                alt="Bo Khiển 13 Chân Mã PK-T12-A0"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-khien-13-chan-ma-pkt12a0.html">
                                            <h3>Bo Khiển 13 Chân Mã PK-T12-A0</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>85.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(707);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-pkt6a2.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-khien-30-chan-chay-ic-3583525-ma-pkt6a2-6316_270x220.jpg"
                                                alt="Bo Khiển 30 Chân Chạy IC  358/3525 MÃ PK-T6-A2"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-3583525-ma-pkt6a2.html">
                                            <h3>Bo Khiển 30 Chân Chạy IC 358/3525 MÃ PK-T6-A2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>85.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(690);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-tk51ta2.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-khien-30-chan-chay-ic-31403525-ma-tk51ta2-5774_270x220.jpg"
                                                alt="Bo Khiển 30 Chân Chạy IC  3140/3525 MÃ TK-51T-A2"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-khien-30-chan-chay-ic-31403525-ma-tk51ta2.html">
                                            <h3>Bo Khiển 30 Chân Chạy IC 3140/3525 MÃ TK-51T-A2</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>85.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(689);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-khien-20-chan-chay-ic-0843846-ma-xugo28a1.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-khien-20-chan-chay-ic-0843846-ma-xugo28a1-2071_270x220.jpg"
                                                alt="Bo Khiển 20 Chân Chạy IC  084/3846 MÃ XUGO28-A1"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-khien-20-chan-chay-ic-0843846-ma-xugo28a1.html">
                                            <h3>Bo Khiển 20 Chân Chạy IC 084/3846 MÃ XUGO28-A1</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>100.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(449);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-25-chan-3846-lk-cam.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-25-chan-3846-lk-cam-6782_270x220.jpg"
                                                alt="BO 25 CHÂN 3846 LK CẮM"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-25-chan-3846-lk-cam.html">
                                            <h3>BO 25 CHÂN 3846 LK CẮM</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>55.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(274);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-1-ic.html">
                                            <img src="thumb/230x205/2/upload/product/bo-3525-1-ic-3149_270x220.jpg"
                                                 alt="BO 3525 1 IC"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-1-ic.html">
                                            <h3>BO 3525 1 IC</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>100.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(644);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-khien-14-chan-chay-ic-3846-ma-ag1349.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-khien-14-chan-chay-ic-3846-ma-ag1349-6984_270x220.jpg"
                                                alt="Bo Khiển 14 Chân Chạy IC 3846  MÃ AG1349"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-khien-14-chan-chay-ic-3846-ma-ag1349.html">
                                            <h3>Bo Khiển 14 Chân Chạy IC 3846 MÃ AG1349</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>110.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(787);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3583525-14-chan.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-3583525-14-chan-7455_270x220.jpg"
                                                alt="BO 358/3525 14 CHÂN"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3583525-14-chan.html">
                                            <h3>BO 358/3525 14 CHÂN</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>80.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(788);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3846-13-chan.html">
                                            <img src="thumb/230x205/2/upload/product/bo-3846-13-chan-666_270x220.jpg"
                                                 alt="BO 3846 13 CHÂN"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3846-13-chan.html">
                                            <h3>BO 3846 13 CHÂN</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>100.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(789);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3525-2-bien-tro.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-3525-2-bien-tro-5411_270x220.jpg"
                                                alt="BO 3525 2 BIẾN TRỞ"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3525-2-bien-tro.html">
                                            <h3>BO 3525 2 BIẾN TRỞ</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>90.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(790);"
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
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-tv-101-khien-may-mig-590_270x220.jpg"
                                                alt="Bo TV 101 Khiển Máy Mig"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-tv-101-khien-may-mig.html">
                                            <h3>Bo TV 101 Khiển Máy Mig</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>440.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(210);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-may-kr500.html">
                                            <img src="thumb/230x205/2/upload/product/bo-may-kr500-1713_270x220.jpg"
                                                 alt="Bo Máy KR500"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-may-kr500.html">
                                            <h3>Bo Máy KR500</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>950.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(364);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-do-may-mosfet-nguon-lien.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-do-may-mosfet-nguon-lien-5937_270x220.jpg"
                                                alt="Bo Độ Máy Mosfet Nguồn Liền"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-do-may-mosfet-nguon-lien.html">
                                            <h3>Bo Độ Máy Mosfet Nguồn Liền</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>250.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(615);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-20-mos-kieu-bien-ap-dau-ra-mac-song-song-.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-20-mos-kieu-bien-ap-dau-ra-mac-song-song--4129_270x219.92242595205.png"
                                                alt="BO 20 MOS ( kiểu biến áp đầu ra mắc song song )"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-20-mos-kieu-bien-ap-dau-ra-mac-song-song-.html">
                                            <h3>BO 20 MOS ( kiểu biến áp đầu ra mắc song song )</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>280.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(780);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-tv-05.html">
                                            <img src="thumb/230x205/2/upload/product/bo-tv-05-8768_270x220.jpg"
                                                 alt="BO TV 05"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-tv-05.html">
                                            <h3>BO TV 05</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>55.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(760);"
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
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-3843-dung-1991_270x219.92242595205.jpg"
                                                alt="BO 3843 đứng"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-3843-dung.html">
                                            <h3>BO 3843 đứng</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>32.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(195);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-24v-7-chan.html">
                                            <img src="thumb/230x205/2/upload/product/bo-24v-7-chan-5095_270x220.jpg"
                                                 alt="BO 24V 7 CHÂN"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-24v-7-chan.html">
                                            <h3>BO 24V 7 CHÂN</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>12.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(196);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-che--24v.html">
                                            <img src="thumb/230x205/2/upload/product/bo-che--24v-4211_270x220.jpg"
                                                 alt="BO CHẾ + - 24V"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-che--24v.html">
                                            <h3>BO CHẾ + - 24V</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>50.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(610);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-nguon-tig-cut-da-gan-tu.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-nguon-tig-cut-da-gan-tu-6575_270x220.jpg"
                                                alt="Bo Nguồn Tig - Cut Đã Gắn Tụ"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-nguon-tig-cut-da-gan-tu.html">
                                            <h3>Bo Nguồn Tig - Cut Đã Gắn Tụ</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>440.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(219);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-nguon-may-igbt-co-cau-co-4-tu-470uf.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-nguon-may-igbt-co-cau-co-4-tu-470uf-7491_270x220.jpg"
                                                alt="Bo Nguồn Máy igbt Có Cầu Có 4 tụ 470uf"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-nguon-may-igbt-co-cau-co-4-tu-470uf.html">
                                            <h3>Bo Nguồn Máy igbt Có Cầu Có 4 tụ 470uf</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>250.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(747);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-24v-7-chan-lk-dan.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-24v-7-chan-lk-dan-1921_270x220.jpg"
                                                alt="BO 24V 7 CHÂN LK DÁN"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-24v-7-chan-lk-dan.html">
                                            <h3>BO 24V 7 CHÂN LK DÁN</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>13.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(448);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-nguon-tig-cut-chua-gan-tu.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-nguon-tig-cut-chua-gan-tu-7657_270x220.jpg"
                                                alt="Bo Nguồn Tig - Cut Chưa Gắn Tụ"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-nguon-tig-cut-chua-gan-tu.html">
                                            <h3>Bo Nguồn Tig - Cut Chưa Gắn Tụ</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>320.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(212);"
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
                    <div class="thanh_title"><a href="san-pham/quat" title="">
                            <h2>QUẠT</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/quat-90x90-24v-025a.html">
                                            <img src="thumb/230x205/2/upload/product/quat-90x90-995_270x220.jpg"
                                                 alt="QUẠT 90x90 24v 0.25a"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/quat-90x90-24v-025a.html">
                                            <h3>QUẠT 90x90 24v 0.25a</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>21.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(302);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/quat-24v025a-12012038mm.html">
                                            <img src="thumb/230x205/2/upload/product/quat-120x120-7119_270x220.jpg"
                                                 alt="QUẠT 24V/0.25A 120*120*38mm"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/quat-24v025a-12012038mm.html">
                                            <h3>QUẠT 24V/0.25A 120*120*38mm</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>55.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(303);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/quat-80x80-24v-025a.html">
                                            <img src="thumb/230x205/2/upload/product/quat-80x80-24v-0-6427_270x220.jpg"
                                                 alt="Quạt 80x80 24V 0.25A"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/quat-80x80-24v-025a.html">
                                            <h3>Quạt 80x80 24V 0.25A</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>22.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(940);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/quat-90x90-12v025a.html">
                                            <img src="thumb/230x205/2/upload/product/90x90-8647_165x220.jpg"
                                                 alt="QUẠT 90X90 12V0.25A"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/quat-90x90-12v025a.html">
                                            <h3>QUẠT 90X90 12V0.25A</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>22.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(942);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/quat-250fzy8d-380v100w.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/quat-250fzy8d-380v100w-1888_269.82292637465x220.jpg"
                                                alt="QUẠT 250FZY8-D 380V-100W"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/quat-250fzy8d-380v100w.html">
                                            <h3>QUẠT 250FZY8-D 380V-100W</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>580.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1119);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/quat-220v-150fzyd-30w.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/quat-220v-150fzyd-30w-3205_270x220.jpg"
                                                alt="Quạt 220V 150FZY-D 30W"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/quat-220v-150fzyd-30w.html">
                                            <h3>Quạt 220V 150FZY-D 30W</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>210.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1220);"
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
                    <div class="thanh_title"><a href="san-pham/cong-tac" title="">
                            <h2>CÔNG TẮC</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/cong-tac-30a250v-khong-den.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/cong-tac-30a250v-khong-den-4431_270x220.jpg"
                                                alt="Công Tắc 30A/250V Không Đèn"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/cong-tac-30a250v-khong-den.html">
                                            <h3>Công Tắc 30A/250V Không Đèn</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>11.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(750);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/cong-tac-30a-400v-3-pha.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/cong-tac-30a-400v-3-pha-3370_270x220.jpg"
                                                alt="CÔNG TẮC  30A 400V 3 PHA"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/cong-tac-30a-400v-3-pha.html">
                                            <h3>CÔNG TẮC 30A 400V 3 PHA</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>45.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(758);"
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
                    <div class="thanh_title"><a href="san-pham/mosfet" title="">
                            <h2>MOSFET</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/k3878-9a-900v-thao-may.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/k3878-9a-900v-thao-may-7884_270x220.jpg"
                                                alt="K3878 9A 900V  Tháo Máy"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/k3878-9a-900v-thao-may.html">
                                            <h3>K3878 9A 900V Tháo Máy</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>12.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(389);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/k2698-thao-may.html">
                                            <img src="thumb/230x205/2/upload/product/k2698-thao-may-9249_270x220.jpg"
                                                 alt="K2698 Tháo Máy"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/k2698-thao-may.html">
                                            <h3>K2698 Tháo Máy</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>9.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(388);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/mf-9z24.html">
                                            <img src="thumb/230x205/2/upload/product/z24-cu-848_270x182.90322580645.png"
                                                 alt="MF 9Z24"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/mf-9z24.html">
                                            <h3>MF 9Z24</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>3.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(392);"
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
                    <div class="thanh_title"><a href="san-pham/diode" title="">
                            <h2>DIODE</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/diode-cau-s35vb100.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/s35vb100-35a-1000v-6927_270x220.jpg"
                                                alt="DIODE CẦU S35VB100"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/diode-cau-s35vb100.html">
                                            <h3>DIODE CẦU S35VB100</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>12.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(355);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/diode-cau-s50vb100.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/s50vb100-50a-1000v-9906_270x220.jpg"
                                                alt="DIODE CẦU S50VB100"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/diode-cau-s50vb100.html">
                                            <h3>DIODE CẦU S50VB100</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>15.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(360);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/fr107-1a1000v-1-goi-100-con-.html">
                                            <img src="thumb/230x205/2/upload/product/fr107-5908_270x220.jpg"
                                                 alt="FR107 (1A1000V) ( 1 gói 100 con )"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/fr107-1a1000v-1-goi-100-con-.html">
                                            <h3>FR107 (1A1000V) ( 1 gói 100 con )</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>30.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1083);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/fr107-dan-1-goi-100-con-.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/fr107-dan-1-goi-100-con--3106_270x220.jpg"
                                                alt="FR107 DÁN ( 1 gói 100 con )"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/fr107-dan-1-goi-100-con-.html">
                                            <h3>FR107 DÁN ( 1 gói 100 con )</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>35.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1151);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/cau-diode-4-lop-400a-3-pha.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/cau-diode-4-lop-400a-3-pha-7890_269.82292637465x220.jpg"
                                                alt="CẦU DIODE 4 LỚP 400A 3 PHA"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/cau-diode-4-lop-400a-3-pha.html">
                                            <h3>CẦU DIODE 4 LỚP 400A 3 PHA</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>720.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(359);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/diode-byv26e.html">
                                            <img src="thumb/230x205/2/upload/product/byv26e-303_270x192.72413793103.png"
                                                 alt="DIODE BYV26E"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/diode-byv26e.html">
                                            <h3>DIODE BYV26E</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>3.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(376);"
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
                    <div class="thanh_title"><a href="san-pham/van-khi" title="">
                            <h2>VAN KHÍ</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/van-khi-24v-dc-vz15.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/van-khi-24v-dc-vz1-6203_270x220.jpg"
                                                alt="VAN KHÍ 24V DC VZ-1.5"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/van-khi-24v-dc-vz15.html">
                                            <h3>VAN KHÍ 24V DC VZ-1.5</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>75.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(315);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/van-khi-220v-vz15.html">
                                            <img src="thumb/230x205/2/upload/product/van-khi-220v-vz1-1678_270x220.jpg"
                                                 alt="VAN KHÍ 220V VZ-1.5"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/van-khi-220v-vz15.html">
                                            <h3>VAN KHÍ 220V VZ-1.5</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>75.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(316);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/van-khi-36v-ac-vz15.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/van-khi-36v-ac-vz1-2095_270x220.jpg"
                                                alt=" VAN KHÍ 36V AC VZ-1.5"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/van-khi-36v-ac-vz15.html">
                                            <h3> VAN KHÍ 36V AC VZ-1.5</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>75.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(317);"
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
                    <div class="thanh_title"><a href="san-pham/tu-dien" title="">
                            <h2>TỤ ĐIỆN</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/tu-470uf400v-35x50-moi-100.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/tu-470uf450v-35x50-moi-100-4158_270x220.jpg"
                                                alt="TỤ 470UF/400V  35x50 mới 100%"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/tu-470uf400v-35x50-moi-100.html">
                                            <h3>TỤ 470UF/400V 35x50 mới 100%</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>19.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(693);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/tu-cbb22-475j400v.html">
                                            <img src="thumb/230x205/2/upload/product/475j-8882_270x220.jpg"
                                                 alt="TỤ CBB22 475J/400V"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/tu-cbb22-475j400v.html">
                                            <h3>TỤ CBB22 475J/400V</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>5.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(341);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/tu-40uf-1250v.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/tu-40uf-1250v-9050_269.82292637465x220.jpg"
                                                alt="Tụ 40UF 1250V"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/tu-40uf-1250v.html">
                                            <h3>Tụ 40UF 1250V</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>160.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(343);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/tu-1000uf35v.html">
                                            <img src="thumb/230x205/2/upload/product/tu-1000uf-8934_220x220.png"
                                                 alt="TỤ 1000UF/35V"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/tu-1000uf35v.html">
                                            <h3>TỤ 1000UF/35V</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>2.500 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(475);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/tu-047uf-1200vdc-den.html">
                                            <img src="thumb/230x205/2/upload/product/tu-0-9808_270x220.jpg"
                                                 alt="Tụ 0.47UF 1200VDC ĐEN"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/tu-047uf-1200vdc-den.html">
                                            <h3>Tụ 0.47UF 1200VDC ĐEN</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>60.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(326);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/tu-2x16uf-400vdc.html">
                                            <img src="thumb/230x205/2/upload/product/tu-2x16uf-400vdc-2612_270x220.jpg"
                                                 alt="Tụ 2x16UF 400VDC"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/tu-2x16uf-400vdc.html">
                                            <h3>Tụ 2x16UF 400VDC</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>190.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(333);"
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
                    <div class="thanh_title"><a href="san-pham/bo-chia-xung" title="">
                            <h2>BO CHIA XUNG</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-1515.html">
                                            <img src="thumb/230x205/2/upload/product/bo-1515-141_270x220.jpg"
                                                 alt="BO 15:15"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-1515.html">
                                            <h3>BO 15:15</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>44.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(202);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-168-lk-cam.html">
                                            <img src="thumb/230x205/2/upload/product/bo-168-lk-cam-3567_270x220.jpg"
                                                 alt="BO 16:8 LK CẮM"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-168-lk-cam.html">
                                            <h3>BO 16:8 LK CẮM</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>42.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(488);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-chia-xung-168-loai-lon.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-chia-xung-168-loai-lon-8293_270x220.jpg"
                                                alt="Bo Chia Xung 16:8 Loại Lớn"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-chia-xung-168-loai-lon.html">
                                            <h3>Bo Chia Xung 16:8 Loại Lớn</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>60.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(506);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-168-lk-dan.html">
                                            <img src="thumb/230x205/2/upload/product/bo-168-lk-dan-5598_270x220.jpg"
                                                 alt="BO 16:8 LK DÁN"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-168-lk-dan.html">
                                            <h3>BO 16:8 LK DÁN</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>42.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(275);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-chia-xung-157-loai-lon.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-chia-xung-157-loai-lon-7922_270x220.jpg"
                                                alt="Bo Chia Xung 15:7 Loại Lớn"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-chia-xung-157-loai-lon.html">
                                            <h3>Bo Chia Xung 15:7 Loại Lớn</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>65.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(206);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-2020.html">
                                            <img src="thumb/230x205/2/upload/product/bo-20-2808_220x220.jpg"
                                                 alt="BO 20:20"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-2020.html">
                                            <h3>BO 20:20</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>55.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(762);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-262626.html">
                                            <img src="thumb/230x205/2/upload/product/bo-26-3434_220x220.png"
                                                 alt="BO 26:26:26"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-262626.html">
                                            <h3>BO 26:26:26</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>150.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(786);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-1515-co-hoi-tiep.html">
                                            <img src="thumb/230x205/2/upload/product/bo-15-8985_220x220.png"
                                                 alt="BO 15:15 CÓ HỒI TIẾP"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-1515-co-hoi-tiep.html">
                                            <h3>BO 15:15 CÓ HỒI TIẾP</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>250.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(791);"
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
                    <div class="thanh_title"><a href="san-pham/bien-ap-may-han" title="">
                            <h2>BIẾN ÁP MÁY HÀN</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bien-ap-eer42x15-84580.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bien-ap-eer42x15-84580-4093_270x220.jpg"
                                                alt="Biến Áp EER42x15 8:45:80"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bien-ap-eer42x15-84580.html">
                                            <h3>Biến Áp EER42x15 8:45:80</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>57.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(222);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bien-ap-eer42x15-224.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bien-ap-eer42x15-224-9587_270x220.jpg"
                                                alt="Biến Áp EER42x15 22:4"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bien-ap-eer42x15-224.html">
                                            <h3>Biến Áp EER42x15 22:4</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>57.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(229);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/ba-eer42-214.html">
                                            <img src="thumb/230x205/2/upload/product/eer42-214-8415_270x220.jpg"
                                                 alt="BA EER42 21:4"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/ba-eer42-214.html">
                                            <h3>BA EER42 21:4</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>57.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(246);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bien-ap-chia-xung-eel22-252525.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bien-ap-chia-xung-eel22-252525-4790_270x220.jpg"
                                                alt="Biến Áp Chia Xung  EEL-22 25:25:25"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bien-ap-chia-xung-eel22-252525.html">
                                            <h3>Biến Áp Chia Xung EEL-22 25:25:25</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>28.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1115);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bien-ap-chia-xung-eel22-252525-co-day.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bien-ap-chia-xung-eel22-252525-co-day-8372_270x220.jpg"
                                                alt="Biến Áp Chia Xung  EEL-22 25:25:25 Có Dây"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bien-ap-chia-xung-eel22-252525-co-day.html">
                                            <h3>Biến Áp Chia Xung EEL-22 25:25:25 Có Dây</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>30.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(1262);"
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
                    <div class="thanh_title"><a href="san-pham/phu-tung-sua-chua-may-han" title="">
                            <h2>PHỤ TÙNG SỬA CHỮA MÁY HÀN</h2>
                        </a></div>

                    <div class="content_main">

                        <div class="owl-demo">
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-cap-nguon-dieu-chinh-030v-3a.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-cap-nguon-dieu-chinh-030v-3a-4639_270x220.jpg"
                                                alt="Bộ Cấp Nguồn Điều Chỉnh  0-30v 3A"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-cap-nguon-dieu-chinh-030v-3a.html">
                                            <h3>Bộ Cấp Nguồn Điều Chỉnh 0-30v 3A</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>1.000.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(277);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/dong-ho-do-dt9205a.html">
                                            <img src="thumb/230x205/2/upload/product/dt9205a-6990_270x220.jpg"
                                                 alt="ĐỒNG HỒ DO DT9205A"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/dong-ho-do-dt9205a.html">
                                            <h3>ĐỒNG HỒ DO DT9205A</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>130.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(285);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/bo-mat-nhua-may-han.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/bo-mat-nhua-may-han-4342_270x220.jpg"
                                                alt="BỘ MẶT NHỰA MÁY HÀN"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/bo-mat-nhua-may-han.html">
                                            <h3>BỘ MẶT NHỰA MÁY HÀN</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>120.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(352);"
                                                                    title="Giỏ Hàng">Đặt hàng</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="item1">
                                    <div class="product_img">
                                        <a href="san-pham/oc-nho-m36-goi-100-con-.html">
                                            <img
                                                src="thumb/230x205/2/upload/product/oc-nho-m36-goi-100-con--7466_270x220.jpg"
                                                alt="Ốc Nhỏ M3*6 ( gói 100 con )"/>
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <a href="san-pham/oc-nho-m36-goi-100-con-.html">
                                            <h3>Ốc Nhỏ M3*6 ( gói 100 con )</h3>
                                        </a>
                                        <div class="boxchitiet">
                                            <p class="giaban">
                                                <b>Giá :</b> <span>18.000 VNĐ</span>
                                            </p>
                                            <div class="dathang"><a href="javascript:void(0)" onclick="addtocart(779);"
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
    </div>
    <!-- main -->
@endsection
