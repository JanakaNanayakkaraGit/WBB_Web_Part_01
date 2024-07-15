@extends('welfare_master')

@section('content')


<div class="single">

@foreach ($shownews as $news)



<div id="fh5co-title-box" style="background-image: url({{url('images/homepage/'.$news->newsimage)}}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">

        <span>{{ \Carbon\Carbon::parse($news->created_at)->format('d-m-Y')}} </span>
        <h2>{{ substr(strip_tags($news->news_title), 0, 62) }}</h2>
    </div>
</div>
<div id="fh5co" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                @php
   $description =  $news->news_description ; // Your description variable
   $paragraphs = explode("\n", $description); // Split the description into paragraphs
@endphp

<h4 class="card-title" style="margin-bottom: 20px;">{{ $news->news_title }}</h4>


@foreach ($paragraphs as $paragraph)

   <p>{{ $paragraph }}</p>
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
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                @foreach ($newspopular as $pop)
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="{{ url('images/homepage/'.$pop->newsimage) }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"><a href="{{route('web.news.view', ['id' => $pop->id])}}"> {{ substr(strip_tags($pop->news_title), 0, 34) }}</a></div>
                        <div class="most_fh5co_treding_font_123"> {{ \Carbon\Carbon::parse($news->created_at)->format('d-m-Y')}} </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
</div>



@endforeach

</div>


@endsection
