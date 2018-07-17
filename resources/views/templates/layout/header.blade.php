<?php
    $setting = Cache::get('setting');
?>
<div id="top">
    <div class="container-fluid">
        <div class="col-md-12">
            <marquee behavior="" direction=""><p><span style="margin-left: 15px; color: red"><i class="fa fa-envelope"></i> : {{$setting->email}} </span>
                <span style="margin-left: 15px; color: red"><i class="fa fa-phone"></i> : <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></span>
            </p></marquee>
        </div>
       
    </div>
</div>
<div id="nav">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('')}}"><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" class="img-responsive"></a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('') }}">Trang chủ</a></li>
                    <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                    <li><a href="{{url('san-pham')}}">Sản phẩm</a></li>
                    <li><a href="{{url('dich-vu')}}">Dịch vụ</a></li>
                    <!-- <li><a href="{{url('kien-thuc')}}">Kiến thức</a></li> -->
                    <li><a href="{{url('du-an')}}">dự án</a></li>
                    <li><a href="{{url('tin-tuc')}}">tin tức</a></li>
                    <li><a href="{{url('lien-he')}}">liên hệ</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>