<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $cateProducts = Cache::get('cateProducts');
    $brands = DB::table('partner')->orderBy('id')->get();
?>
<footer>
        <div id="footer">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 socical contact">
                    <h3>Thông tin liên hệ</h3>
                    <ul>
                        <li>Địa chỉ: {{ $setting->address }}</li>
                        <li>Tel: {{$setting->phone}}</li>
                        <li>Email: {{$setting->email}}</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 socical website">
                    <h3>Danh mục</h3>
                    <ul>
                        <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('')}}">Trang chủ</a></li>
                        <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                        <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('san-pham')}}">Sản phẩm</a></li>
                        <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('dich-vu')}}">Dịch vụ</a></li>
                        
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 socical">
                    <h3>liên kết</h3>
                    <ul>
                        <!-- <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('kien-thuc')}}">Kiến thức</a></li> -->
                        <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('du-an')}}"> Dự án</a></li>
                       <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('tin-tuc')}}"> Tin tức</a></li>
                        <li><img src="{{ asset('public/images/li.png')}}"><a href="{{url('lien-he')}}"> Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 socical">
                    <h3>facebook</h3>
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="300px" data-height="140px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
        <!-- <div class="last">
            Copyright 2018 Hoa Nam, All Right Reserved.
        </div> -->
    </footer>

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>