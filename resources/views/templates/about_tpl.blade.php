@extends('index')
@section('content')
<?php
   
    $abouts = DB::table('news')->where('com', 'gioi-thieu')->first();
?>
<div class="product">
    <div class="container">
        <div class="scholl_alias row">
            <a href="{{url('')}}}">Trang chủ <i class="fa fa-angle-right"></i></a>
            <a href="#">Giới thiệu</a>
        </div>
        <div class="news">
            <div class="row">
                
                <div class="col-sm-8 col-md-8 col-lg-8 news_detail">
                    <div class="content-about">
                        {!! $about->content !!}
                    </div>
                </div>
                <div class="col-sm-2 col-md-2"></div>                
            </div>
        </div>        
    </div>
</div>
@endsection
