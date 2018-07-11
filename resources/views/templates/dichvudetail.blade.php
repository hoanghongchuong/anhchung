@extends('index')
@section('content')

<div class="product">
    <div class="container">
        <div class="scholl_alias row">
            <a href="{{url('')}}}">Trang chủ <i class="fa fa-angle-right"></i></a>
            <a href="{{url('dich-vu')}}">Dịch vụ<i class="fa fa-angle-right"></i></a>
            <a href="#">{{$news_detail->name}}</a>
        </div>
        <div class="news">
            <div class="row">
                
                <div class="col-sm-8 col-md-8 col-lg-8 news_detail">
                    <h1>{{$news_detail->name}}</h1>
                    <p><span class="calendar"><i class="fa fa-calendar"></i> {{date('d/m/Y', strtotime($news_detail->created_at))}}</span></p>

                    <div class="new_content">
                        {!! $news_detail->content !!}
                    </div>
                    <div class=""><div class="fb-comments" data-href="{{ URL::current() }}" data-width="100%" data-numposts="3"></div></div>
                </div>

                
                <div class=" col-sm-4 col-md-4 col-lg-4 news_bar">
                    <h3>Dịch vụ khác</h3>
                    <div class="news_bar_new">
                        @foreach($hot_news as $hot)
                        <div class="media">
                            <a class="pull-left" href="{{url('dich-vu/'.$hot->alias.'.html')}}">
                                <img class="media-object" src="{{asset('upload/news/'.$hot->photo)}}" alt="Image" width="100px">
                            </a>
                            <div class="media-body">
                                <a href="{{url('dich-vu/'.$hot->alias.'.html')}}">
                                    <h4 class="media-heading">{{$hot->name}}</h4>
                                </a>
                                <p class="short-des">{!! $hot->mota !!}</p>
                            </div>
                        </div>
                        @endforeach                    
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection
