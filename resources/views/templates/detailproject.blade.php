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
			<a href="{{url('du-an')}}">Dự án<i class="fa fa-angle-right"></i></a>
			<a href="#">{{$project->name}}</a>
		</div>
		<div class="news">
			<div class="row">
				
				<div class="col-sm-8 col-md-8 col-lg-8 news_detail">
					<h3>{{$project->name}}</h3>
					<p><span class="calendar"><i class="fa fa-calendar"></i> {{date('d/m/Y', strtotime($project->created_at))}}</span></p>

					<div class="new_content">
						{!! $project->content !!}
					</div>
				</div>

				
				<div class=" col-sm-4 col-md-4 col-lg-4 news_bar">
					<h3>dự án mới nhất</h3>
					<div class="news_bar_new">
						@foreach($newProject as $item)
						<div class="media">
							<a class="pull-left" href="{{ url('du-an/'.$item->alias.'.html') }}">
								<img class="media-object" src="{{asset('upload/news/'.$item->photo)}}" alt="Image" width="100px">
							</a>
							<div class="media-body">
								<a href="{{ url('du-an/'.$item->alias.'.html') }}">
									<h4 class="media-heading">{{$item->name}}</h4>
								</a>
								<p class="limit-desc">{{$item->mota}}</p>
							</div>
						</div>
						@endforeach

				</div>
			</div>
		</div>

		
	</div>
</div>
@endsection