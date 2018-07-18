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
			@foreach($slider as $k=>$s)
			<div class="item @if($k==0) active @endif">
				<a href="#"><img src="{{asset('upload/hinhanh/'.$s->photo)}}" alt=""></a>
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
				<div class="box-product">
					<div class="p-block">
						<a href="{{ url('san-pham/'.$hot->alias.'.html') }}">
							<img src="{{ asset('upload/product/'.$hot->photo) }}" alt="{{$hot->name}}">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="{{ url('san-pham/'.$hot->alias.'.html') }}">{{$hot->name}}</a></p>
						@if($hot->price > 0)
						<p class="p-price">{{ number_format($hot->price) }} vnđ</p>
						@else
						<p class="p-price">Liên hệ</p>
						@endif
					</div>
				</div>
			</div>
			@endforeach
			
			
		</div>
	</div>
</div>

<div class="box-content">
	<div class="container-fluid">
		<div class="head-title">
			<h1>Sản phẩm mới</h1>
			<span></span>
		</div>
		<div class="row">

			@foreach($news_product as $n)
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="{{ url('san-pham/'.$n->alias.'.html') }}">
							<img src="{{ asset('upload/product/'.$n->photo) }}" alt="{{$n->name}}">
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="{{ url('san-pham/'.$n->alias.'.html') }}">{{$n->name}}</a></p>
						@if($n->price > 0)
						<p class="p-price">{{ number_format($n->price) }} vnđ</p>
						@else
						<p class="p-price">Liên hệ</p>
						@endif
					</div>
				</div>
			</div>
			@endforeach
			
			
			
		</div>
	</div>
</div>

<div class="box-content bg-1">
	<div class="container-fluid">
		<div class="head-title">
			<h1>Tin tức</h1>
			<span></span>
		</div>

		<div class="owl-carousel pro-slide">
			@foreach($tintuc_moinhat as $news)
			<div class="item">
				<a href="{{url('tin-tuc/'.$news->alias.'.html')}}">
					<img src="{{asset('upload/news/'.$news->photo)}}" alt="{{$news->name}}">
					<p>{{$news->name}}</p>
				</a>
			</div>
			@endforeach
			
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
						@foreach($feedback as $k=>$f)
						<div class="item @if($k==0)active @endif">
							<div class="cus-caption">
								<p>{!! $f->content !!}</p>
							</div>

							<div class="cus-avt">
								<p>{{ $f->name }}</p>
								<p>{{$f->position}}</p>
								<img src="{{asset('upload/hinhanh/'.$f->photo)}}" alt="">
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
					@foreach($partners as $p)
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="{{asset('upload/banner/'.$p->photo)}}" alt=""></a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
