@extends('welfaresl_master')

@section('content')

 <!-- Top content -->
 <div class="top-content" style="padding-top: 6%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-top: 8%;">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($video as $key=>$vdo)
                            <li data-target="#carousel-example" data-slide-to="{{$key}}" {{ $key == 0 ? 'class="active"' : '' }}></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($video as $key=>$vdo)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$vdo->path}}" allowfullscreen></iframe>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">


    <div class="portfolio-item row">
        @foreach ($image as $ig )
       <div class="item selfie col-lg-3 col-md-4 col-6 col-sm" style="padding-top:2%;">

          <img class="img-fluid" src="{{ url('images/homepage/'.$ig->image) }}" alt="">
          </a>
       </div>
       @endforeach
    </div>
 </div>



  <script>

    </script>
@endsection
