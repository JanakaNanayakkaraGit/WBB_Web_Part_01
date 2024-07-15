@extends('welfare_master')

@section('content')



         <div class="main" style="padding-top: 8%;">
             <div class="row main-news">
                 <br>
                 <div class="sms-body">
                     <br>
                     @foreach ($event as $evt)

                     <div class="col-lg-12 ">
                        <div class="container">
                         <div class="sms-title top-title">


                                <h2 class="" style="font-size: 45px;font-weight: 900; padding-bottom: 10px;">{{ $evt->event_title }}</h2>



                         </div>

                         <br>
                         <!--MAIN News-->
                         <div class="container row" style="margin:0;" >
                         <div class="card mb-1 col-md-8">
                             <!--Feature image | Recent post-->
                             <a href="#"><img class="card-img-top" src="{{ url('images/homepage/'.$evt->eventimg) }}"
                                 alt="Card image cap" style="margin-top: 10px;"></a>


                             <div class="card-body">
                                 <!--Category-->
                                 <h3 class="card-title"><a href="#"><span class="badge badge-danger">Latest</span></a></h3>
                                 <!--Content-->
                                 <p class="card-text">
                                    {{ $evt->event_description }}
                                 </p>
                                 <!--Last update-->
                                 <p class="card-text"><small class="text-muted">Last updated &nbsp;{{ \Carbon\Carbon::parse($evt->created_at)->diff(\Carbon\Carbon::now())->format('%im') }} ago</small></p>
                             </div>
                         </div>
                         @endforeach

                         <div class="card mb-1 col-md-4" style="padding: 5px;">
                            @foreach ($evtfive as $evt)
                            <div class="card" style="padding-top: 10px; padding-left: 5px; padding-right: 5px; padding-bottom: 5px;">
                                <img class="card-img-top" src="{{ url('images/homepage/'.$evt->image) }}"
                                        alt="Card image cap">
                         </div>
                         @endforeach
                         @foreach ($evtsix as $evt)
                         <div class="card" style="padding:5px; height: 100%;">
                            <img class="card-img-top" src="{{ url('images/homepage/'.$evt->image) }}"
                                        alt="Card image cap" style="height: 100%;">
                     </div>
                         @endforeach
                         </div>

                        </div>

                    </div>

                         <div class="container ">

                            <div class="card" style="border: none;">

                                <div class="card-body">
                                   <div class="row" style="padding-top: 0%; padding-left:0%;">

                                       <div class="d-flex justify-content-between align-items-center breaking-news bg-white">

                                           <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> {{ $newstring }}
                                           </marquee>

                                       </div>
                                       <style>
                                          .news{
                                           width: 230px;
                                           margin-right: 6%;
                                           }
                                       .news-scroll a{text-decoration: none}.dot{height: 6px;width: 6px;margin-left: 3px;margin-right: 3px;margin-top: 2px !important;background-color: rgb(0, 0, 0);border-radius: 50%;display: inline-block}
                                           </style>
                                   </div>
                                </div>
                            </div>
                            <br>
                            <!--Categories-->
                            <div class="card-columns">
                                 @foreach ($evteight as $evt )
                                <div class="card">
                                    <img class="card-img-top" src="{{ url('images/homepage/'.$evt->eventimg) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <!--Post title -->
                                        <a href="#"><h3 class="card-title">{{ $evt->event_title }}</h3></a>
                                        <!--The content-->
                                        <p class="card-text">{{ $evt->event_description }}</p>
                                        <!-- last update and tags-->
                                        <p class="card-text"><small class="text-muted">Last updated &nbsp;{{ \Carbon\Carbon::parse($evt->created_at)->diff(\Carbon\Carbon::now())->format('%im') }} ago</small> <a href="#"><span class="badge badge-success">New</span></a></p>
                                    </div>
                                </div>
                                @endforeach

                                @foreach ($evtseven as $evt)
                                <div class="card">
                                    <img class="card-img-top" src="{{ url('images/homepage/'.$evt->eventimg) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <!--Post title -->
                                        <a href="#"><h3 class="card-title">{{ $evt->event_title }}</h3></a>
                                        <!--The content-->
                                        <p class="card-text">{{ $evt->event_description }} </p>
                                        <!-- last update and tags-->
                                        <p class="card-text"><small class="text-muted">Last updated &nbsp;{{ \Carbon\Carbon::parse($evt->created_at)->diff(\Carbon\Carbon::now())->format('%im') }} ago</small> <a href="#"><span class="badge badge-success">Updated</span></a></p>
                                    </div>
                                </div>
                                <!--Ad section-->
                                @endforeach


                                <!--/ end-->
                                <!--Post-->
                                <div class="card text-center">
                                    @foreach ($evtfour as $evt )


                                    <div class="card-body">
                                        <!--Post title-->
                                        <a href="#"><h3 class="card-title">{{ $evt->event_title }} </h3></a>
                                        <!--Feature image-->
                                        <a href=""><img class="card-img"
                                            src="{{ url('images/homepage/'.$evt->eventimg) }}"></a>
                                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                                    additional content.</p>
                                        <!--Last update and tags-->
                                        <p class="card-text"><small class="text-muted">Last updated 1h mins ago</small> <a href="#"><span
                                           class="badge badge-info">Updated</span></a></p>
                                    </div>
                                    @endforeach
                                    <!--/ END-->
                                    <!--Post-->
                                </div>



                                <!--/End-->
                                @foreach ($evteight as $evt )
                                <div class="card">
                                    <div class="card-body">
                                        <!--Title-->
                                        <a href="#"><h3 class="card-title">{{ $evt->event_title }}</h3></a>
                                        <br>


                                        <!--The content-->
                                        <p class="card-text">{{ $evt->event_description }}
                                        </p>
                                        <!--Last update and tags-->
                                        <p class="card-text"><small class="text-muted">Last updated &nbsp;{{ \Carbon\Carbon::parse($evt->created_at)->diff(\Carbon\Carbon::now())->format('%im') }} ago</small> <a href="#"></a></p>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                         <div class="container">
                             <div class="row">
                                 <div class="card-group">

                                   @foreach ($eventtwo as $two )
                                     <div class="card">
                                          <span class="badge badge-primary">New</span>

                                         <img class="card-img-top" src="{{ url('images/homepage/'.$two->eventimg) }}"
                                             alt="Card image cap">
                                         <div class="card-body">
                                             <a href="#">
                                                 <h5 class="card-title">{{ $two->event_title }}</h5>
                                             </a>
                                             <p class="card-text">{{ $two->event_description }}
                                             </p>

                                             <p class="card-text"><small class="text-muted">Last updated &nbsp;{{ \Carbon\Carbon::parse($two->created_at)->diff(\Carbon\Carbon::now())->format('%im') }} ago</small></p>
                                         </div>
                                     </div>
                                     @endforeach
                                     <br>
                                     <!-- Top stories-->


                                     <!--/ End top stories-->





                                 </div>

                             </div>

                         </div>





                     <br>
                     <!--/ Sidebar -->
                 </div>
                 <br>
             </div>
             <!-- / End of the row-->

             <!-- / End of row including pagination-->
         </div>

         <br>

     </div>
     </div>
      <!-- Footer-->








@endsection
