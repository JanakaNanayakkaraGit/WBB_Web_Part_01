@extends('welfaresl_master')

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="images/logo.png" alt="img" class="fh5co_logo_width"/>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            @foreach ($news as $new)


            <div class="fh5co_suceefh5co_height"><img  src="{{ url('images/homepage/'.$new->newsimage) }}" alt="img"/>

                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ \Carbon\Carbon::parse($new->created_at)->format('d/m/Y')}}
                    </a></div>
                    <div class=""><a href="{{route('web.si.news.view', ['id' => $new->id])}}" class="fh5co_good_font"> {{ $new->news_title }}</a></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-6">
            <div class="row">
                @foreach ($newsfirst as $news)
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ url('images/homepage/'.$news->newsimage) }}" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ \Carbon\Carbon::parse($news->created_at)->format('d/m/Y')}} </a></div>
                            <div class=""><a href="{{route('web.si.news.view', ['id' => $news->id])}}" class="fh5co_good_font_2">{{ substr(strip_tags($news->news_title), 0, 58) }} </a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">පුවත්</div>
                </div>
                @foreach ($newsall as $all)
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{ url('images/homepage/'.$all->newsimage) }}"  alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="{{route('web.si.news.view', ['id' => $all->id])}}" class="fh5co_magna py-1"> {{ $all->news_title }} </a> <a href="single.html" > - {{ \Carbon\Carbon::parse($news->created_at)->format('d-m-Y')}} </a>
                        <div class="fh5co_consectetur"> {{ substr(strip_tags($all->news_description), 0, 220) }}
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">වඩාත්ම ජනප්රියයි</div>
                </div>
                @foreach ($newspopular as $pop)
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="{{ url('images/homepage/'.$pop->newsimage) }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"><a href="{{route('web.si.news.view', ['id' => $pop->id])}}"> {{ substr(strip_tags($pop->news_title), 0, 34) }}</a></div>
                        <div class="most_fh5co_treding_font_123"> {{ \Carbon\Carbon::parse($news->created_at)->format('d-m-Y')}} </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>

    </div>
</div>





@endsection
