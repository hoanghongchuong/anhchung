    @extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<div id="slide">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			@foreach($slider as $key=>$item)
			<div class="item @if($key == 0)active @endif">
				<a href="{{$item->link}}"><img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt=""></a>
			</div>
			@endforeach
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</div>
<div class="box-content">
	<div class="container-fluid">
		<div class="head-title">
			<h1>sản phẩm nổi bật</h1>
			<span></span>
		</div>
		<div class="row">
			@foreach($hot_product as $hot)
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="p-block">
					<a href="{{url('san-pham/'.$hot->alias.'.html')}}">
						<img src="{{asset('upload/product/'.$hot->photo)}}" title="{{$hot->name}}" alt="{{$hot->name}}">
						<div class="p-desc">
							<p class="p-name">{{$hot->name}}</p>
							<!-- <p>Hiện đại, ưu tín</p> -->
						</div>	
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<div class="box-content bg-1">
	<div class="container-fluid">
		<div class="head-title color-white">
			<h1>sản phẩm khác</h1>
			<span></span>
		</div>

		<div class="owl-carousel pro-slide">
			@foreach($news_product as $newP)
			<div class="item">
				<a href="{{url('san-pham/'.$newP->alias.'.html')}}">
					<img src="{{asset('upload/product/'.$newP->photo)}}" alt="{{$newP->name}}" title="{{$newP->name}}">
					<p>{{$newP->name}}</p>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="box-content bg-2">
	<div class="container-fluid">
		<div class="why-us">
			<div class="row"> 
<<<<<<< HEAD
				<img src="{{asset('public/images/why.png')}}" alt="" class="img-postision">
=======
				<img src="{{ asset('public/images/why.png')}}" alt="" class="img-postision">
>>>>>>> ed99bb31e78802e838ff61624d15fc12525a0013
				<div class="col-sm-4 col-md-4 col-lg-4 why-left">
					
				</div>
				<div class="col-sm-8 col-md-8 col-lg-8 why-right">
					<div class="head-title">
						<h1>tại sao chọn chúng tôi</h1>
						<span></span>
					</div>
					<?php $choose = DB::table('lienket')->where('com','taisao')->get(); ?>
					@foreach($choose as $ch)
					<div class="media">
						<a class="pull-left" href="#">
<<<<<<< HEAD
							<img class="media-object" src="{{asset('upload/hinhanh/'.$ch->photo)}}" alt="Image">
						</a>
						<div class="media-body">
							<h4 class="media-heading">{{$ch->name}}</h4>
							<p>{{$ch->mota}}</p>
=======
							<img class="media-object" src="{{ asset('public/images/1.png')}}" alt="Image">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Lịch sử công ty</h4>
							<p>Công ty Cổ phần tư vấn và Chuyển giao công nghệ quốc tế, tự hào là doanh nghiệp bảo hiểm nhân thọ nước ngoài đầu tiên có mặt tại Việt Nam</p>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="{{ asset('public/images/2.png')}}" alt="Image">
						</a>
						<div class="media-body">
							<h4 class="media-heading">SỨ MỆNH CỦA CHÚNG TÔI</h4>
							<p>Công ty Cổ phần tư vấn và Chuyển giao công nghệ quốc tế, tự hào là doanh nghiệp bảo hiểm nhân thọ nước ngoài đầu tiên có mặt tại Việt Nam</p>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="{{ asset('public/images/3.png')}}" alt="Image">
						</a>
						<div class="media-body">
							<h4 class="media-heading">TẦM NHÌN TƯƠNG LAI</h4>
							<p>Công ty Cổ phần tư vấn và Chuyển giao công nghệ quốc tế, tự hào là doanh nghiệp bảo hiểm nhân thọ nước ngoài đầu tiên có mặt tại Việt Nam</p>
>>>>>>> ed99bb31e78802e838ff61624d15fc12525a0013
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="hot-project">
			<div class="head-title">
				<h1>dự án tiêu biểu</h1>
				<span></span>
			</div>
			<?php $hotProject = DB::table('news')->where('com', 'du-an')->where('status', 1)->where('noibat', 1)->take(8)->orderBy('id','desc')->get() ?>
			<div class="row">
				@foreach($hotProject as $p)
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="project-block">
						<a href="{{url('du-an/'.$p->alias.'.html')}}">
							<img src="{{asset('upload/news/'.$p->photo)}}" alt="">
							<div class="block-frog">
								<i class="fa fa-search"></i>
							</div>
						</a>
					</div>	
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="box-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 customer-said">
				<div class="head-title heaf-left">
					<h1>khách hàng nói gì</h1>
					<span></span>
				</div>
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						@foreach($feedback as $k=>$fb)
						<div class="item @if($k==0) active @endif">
							<div class="cus-caption">
								<p>{!!$fb->content!!}</p>
							</div>

							<div class="cus-avt">
								<p>{{$fb->name}}</p>
								<p>{{$fb->position}}</p>
								<img src="{{asset('upload/hinhanh/'.$fb->photo)}}" alt="">
							</div>
						</div>
						@endforeach
					</div>
					
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6 partner">
				<div class="head-title heaf-left">
					<h1>đối tác của chúng tôi</h1>
					<span></span>
				</div>
				<div class="row">
					@foreach($partners as $partner)
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="{{asset('upload/banner/'.$partner->photo)}}" alt=""></a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
