<div id="left">
    <div class="danhmuc">
        <div class="thanh">Danh mục sản phẩm</div>
        @php $categoryData = getCategoryLeftMenu() @endphp
        <div class="left dmsp">
            <ul>
                <li>
                    <a href="#">TẤT CẢ SẢN PHẨM</a>
                </li>
                @foreach($categoryData as $category)
                    <li><a href="{{route('product_of_category',$category['category_name'])}}">
                            <img src="{{$category['image']}}" alt="{{$category['category_name']}}">
                            <span class="text-uppercase">{{$category['category_name']}}</span>
                        </a>
                        <ul>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="danhmuc">
        <div class="thanh">Hỗ trợ trực tuyến</div>
        <div class="left hotro">
            <div class="box_left">
                <div class="hotline_l">07 74 74 74 33</div>
                <div class="item_ht">
                    <p class="phong">Nhân Viên Kinh Doanh</p>
                    <p><i class="fas fa-phone-volume"></i>0976 400 078(Nhân viên kinh doanh 1)</p>
                    <p><i class="fas fa-envelope"></i>htsvn.com.vn</p>
                </div>
                <div class="item_ht">
                    <p class="phong">Nhân Viên Kĩ Thuật</p>
                    <p><i class="fas fa-phone-volume"></i>0976 400 078(Mr Kĩ Thuật 1)</p>
                    <p><i class="fas fa-envelope"></i>htsvn.com.vn</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="danhmuc">
        <div class="thanh">Video</div>
        <div class="left hotro">
            <script type="text/javascript">
                $(document).ready(function (e) {
                    $('#clickvideo').change(function () {
                        var src = 'http://www.youtube.com/embed/' + $(this).val();
                        $('.left_video iframe').attr('src', src);
                    });
                });
            </script>
            <div class="video_popup left_video">
                <iframe title="" width="100%" src="http://www.youtube.com/embed/m1U1Bird3HI" frameborder="0"
                        allowfullscreen></iframe>
            </div>
            <select id="clickvideo">
                <option value="m1U1Bird3HI">cách chế máy hàn đơn giản</option>
            </select>
        </div>
    </div>
    <div class="danhmuc">
        <div class="thanh">Bản đồ</div>
        <div class="left hotro">
            <style>
                .hotro iframe {
                    width: 100%;
                    height: 250px;
                }
            </style>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d466.1896023538358!2d106.96455950379558!3d10.865645265884668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1714573913373!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="danhmuc">
        <div class="thanh">Thống kê truy cập</div>
        <div class="left hotro">
            <div class="clear"></div>
            <ul class="thongke">
                <li> Đang online : <span>4</span></li>
                <li> Truy cập Tuần : <span>1407</span></li>
                <li> Truy cập Tháng : <span>1407</span></li>
                <li> Tổng truy cập : <span>932684</span></li>
            </ul>
        </div>
    </div>
</div>
