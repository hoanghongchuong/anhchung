@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $cateProject = DB::table('news_categories')->where('com', 'du-an')->get();
?>
<div class="product">
	<div class="container">
		<div class="scholl_alias row">
			<a href="{{url('')}}">Trang chủ <i class="fa fa-angle-right"></i></a>
			<a href="{{url('du-an')}}">Dự án</a>
		</div>
	  <!-- Works Section -->
	    <section id="works" class="works-section section-padding">
	      <div id="">
	        <h2 class="section-title wow fadeInUp"></h2>
	        <div class="row" >
	          <ul id="grid" class="lightgallery">

	            @foreach($projects as $item)
	            <li class="portfolio-item col-xs-12 col-sm-4 col-md-3">
		            <div class="portfolio-bg">
		                <div class="portfolio" >
		                  <a href="{{ url('du-an/'.$item->alias.'.html') }}">
		                  	 <img  src="{{asset('upload/news/'.$item->photo)}}" alt="image"> 
			                  <div class="portfolio-info">
			                    <h3>{{$item->name}}</h3>
			                  </div><!-- /.portfolio-info -->
		                  </a>
		                </div>
		            </div>
	            </li>
				@endforeach
	            
	          </ul><!-- /#grid -->
	        </div><!-- /.row -->
	      </div><!-- /.container -->
	    </section><!-- End Works Section -->

	</div>
</div>
@endsection