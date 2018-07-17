@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div id="content">
    <div class="breacdcrumbs">
        <div class="container ">
        <ol class="breadcrumb">
          <li><a href="{{url('')}}">Trang chủ</a></li>
          <!-- <li><a href="#">Library</a></li> -->
          <li class="active">Sản phẩm</li>
        </ol>
    </div>
    </div>
    
    <div class="site-content-archive">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="sidebar left-sidebar col-md-3">
                    <aside id="search-2" class="widget widget_search">
                        <form class="search-form" method="get" id="searchform" action=""> 
                            <input type="text" value="" name="s" id="s" placeholder="Search..."> 
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </aside>
                    <!--  -->

                    <aside id="categories-2" class="widget widget_categories">
                        <h4 class="widget-title"><span style="font-size: 16px">Danh mục</span></h4>
                            <ul>
                                @foreach($cate_pro as $cate)
                                <li class="cat-item ">
                                    <a href="{{url('san-pham/'.$cate->alias)}}">{{$cate->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                    </aside>
                </div>
                <div class="site-content-archive-inner col-md-9">
                    <div class="row">
                        @foreach($products as $item)
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="p-block">
                                <a href="{{url('san-pham/'.$item->alias.'.html')}}">
                                    <img src="{{asset('upload/product/'.$item->photo)}}" alt="">
                                    <div class="p-desc">
                                        
                                        
                                    </div>  
                                </a>
                            </div>
                            <p class="p-name"> <a href="{{url('san-pham/'.$item->alias.'.html')}}">{{ $item->name }}</a> </p>
                        </div>
                        @endforeach
                        
                        
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
