@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div class="container">
  <div class="scholl_alias row">
      <a href="{{url('')}}">Trang chủ <i class="fa fa-angle-right"></i></a>
      <a href="#">Liên hệ</a>
    </div>
</div>
<div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <form class="form-horizontal" action="{{route('postContact')}}" method="post">
                    <input name='_token' type='hidden' value="{{csrf_token()}}">
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email" name="name">Họ tên:</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" required="" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email" name="email">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd" name="phone">Sđt:</label>
                    <div class="col-sm-10"> 
                      <input type="text" name="phone" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd" name="address">Địa chỉ:</label>
                    <div class="col-sm-10"> 
                      <input type="text" name="address" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd" name="content">Nội dung:</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" name="content" rows="5"></textarea>
                    </div>
                  </div>
                
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info">Gửi</button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 contact-info">
              <p><strong>Địa chỉ:</strong> {{ $setting->address }}</p>
              <p><strong>Tel:</strong> {{ $setting->phone }}</p>
              <p><strong>Email:</strong>  {{ $setting->email }}</p>
                
            </div>
        </div>
    </div>
</div>
@endsection
