@extends('welfaresl_master')

@section('content')



 <!-- ======= Hero Section ======= -->
<div id="ert">
    <div class="d-flex align-items-start bg-light mb-3" style="height: 2%">
        <div class="col">  <a  href="{{ url('/en/home') }}">English</a></div>
        <div class="col"><a  href="{{ url('/si/home') }}">සිංහල</a></div>
        <div class="col"><a   href="{{ url('/ta/home') }}">தமிழ்</a></div>
        <style>
            .col{
            border:1px solid rgb(253, 253, 253);
            border-radius: 5px;
            text-align: center;
            background-color: #e0bf00;
            text-decoration-color: #fff;
            padding: 5px;
            }
            </style>
      </div>
        <div class="container-fluid px-0 conton">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner " >
                    <div class="carousel-item active" >
                      <img    src="{{ asset('assets/img/sliderimgone.jpg') }}"  class="w-100 img-fluid h-auto " alt="..." >

                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/sliderimgtwo.jpg') }}"  class="w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/sliderimgthree.jpg') }}"   class="w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/sliderimgfour.jpg') }}"  class="w-100 img-fluid" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/sliderimgfive.jpg') }}" class="w-100 img-fluid" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/sliderimgsix.jpg') }}" class="w-100 img-fluid" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/sliderimgseven.jpg') }}" class="w-100 img-fluid" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/sliderimgeight.jpg') }}" class="w-100 img-fluid" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/sliderimgnine.jpg') }}" class="w-100 img-fluid" alt="...">
                      </div>

                  </div>
            </div>

          </div>
        </div>
<style>
    .carousel-inner{
        padding-top: 3%;
        height: 100%;
    }

    @media (max-width: 991px) {

#ert{
    margin-top:20%;
}
.carousel-inner{
        padding-top: 0%;
        height: 100%;
    }

      }

    </style>



  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->

        <div class="container-fluid  px-0">

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 news-box" style="position: relative; z-index: 100;" data-aos="fade-up">
                <div class="icon-box">
                  <div class="row need">
                    <img src="{{ asset('assets/img/clicon.png') }}"  style="width:13%; height:13%;" alt="logo" class="icon1" onclick="document.location.href = 'tel:94112484600'"/>
                        <div class="col-md-6 ">
                        <span style="font-size:14px;">Need help? Call us</span><br>
                        <span style="font-size:14px;font-weight:bold;">(+94)11 24-84600(4117)</span>
                        </div>
                        <div  style="padding-top: 22px;">
                            <button class=" btn  bg-primary text-white btnapply button" style="width: 100%; height: 100%; font-size: 24px; font-family: 'Oswald', sans-serif; ">

                               <div class="spinner scroll-down" >Click<br> me<a class="animate"> </a> </div>
                               <b class="aply" >{{ trans('messages.Appeal & Objection') }}</b>
                               <style>
                                 @media (max-width: 520px) {
                                    b.aply{
        font-size: 10px;
      }
                                    .spinner {
    background: url() no-repeat center;
    display: block;
    margin: 0% auto;
    width: 09px;
    height: 39px;

    color: #210555;
    padding-top: 8px;
    background-size: 50%;

}


                                 }

                                 .aply{
                                    font-size: 20px;
                                 }

.spinner {
    background: url(data:image/png;base64,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) no-repeat center;
    display: block;
    margin: 0% auto;
    position: relative;
    width: 109px;
    height: 59px;
    font-size: 14px;
    color: #210555;
    padding-top: 8px;
}
@-webkit-keyframes pulse {
 0% {
 opacity: 0;
 background-position: center top;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
 10% {
 opacity: 0;
}
 50% {
 opacity: 1;
 -moz-background-size: 20% auto;
 -o-background-size: 20% auto;
 -webkit-background-size: 20% auto;
 background-size: 20% auto;
}
 90% {
 opacity: 0;
}
 100% {
 opacity: 0;
 background-position: center bottom;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
}
 @-moz-keyframes pulse {
 0% {
 opacity: 0;
 background-position: center top;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
 10% {
 opacity: 0;
}
 50% {
 opacity: 1;
 -moz-background-size: 20% auto;
 -o-background-size: 20% auto;
 -webkit-background-size: 20% auto;
 background-size: 20% auto;
}
 90% {
 opacity: 0;
}
 100% {
 opacity: 0;
 background-position: center bottom;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
}
 @-ms-keyframes pulse {
 0% {
 opacity: 0;
 background-position: center top;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
 10% {
 opacity: 0;
}
 50% {
 opacity: 1;
 -moz-background-size: 20% auto;
 -o-background-size: 20% auto;
 -webkit-background-size: 20% auto;
 background-size: 20% auto;
}
 90% {
 opacity: 0;
}
 100% {
 opacity: 0;
 background-position: center bottom;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
}
 @keyframes pulse {
 0% {
 opacity: 0;
 background-position: center top;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
 10% {
 opacity: 0;
}
 50% {
 opacity: 1;
 -moz-background-size: 20% auto;
 -o-background-size: 20% auto;
 -webkit-background-size: 20% auto;
 background-size: 20% auto;
}
 90% {
 opacity: 0;
}
 100% {
 opacity: 0;
 background-position: center bottom;
 -moz-background-size: 0 auto;
 -o-background-size: 0 auto;
 -webkit-background-size: 0 auto;
 background-size: 0 auto;
}
}
.scroll-down a {

  display: block;
  opacity: 0;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  line-height: 0;
  font-size: 0;
  color: transparent;
  margin-left: auto;
  margin-right: auto;
  -moz-background-size: 0 auto;
  -o-background-size: 0 auto;
  -webkit-background-size: 0 auto;
  background-size: 0 auto;
  -webkit-animation: pulse 1.5s 0s infinite normal ease forwards;
  -moz-animation: pulse 1.5s 0s infinite normal ease forwards;
  -o-animation: pulse 1.5s 0s infinite normal ease forwards;
  animation: pulse 1.5s 0s infinite normal ease forwards;
  background-image: url(images/arrow-down.svg);
  background-repeat: no-repeat;
}
.scroll-down a:before, .scroll-down a:after {
  content: " ";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMzBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMzAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGw9IiMwMTM0NmIiIGQ9Ik0yMS44NSw3LjE2YzAsMC4zMDktMC4xMTgsMC42MTctMC4zNTMsMC44NTNsLTUuNjgxLDUuNjhjLTAuNDcxLDAuNDcxLTEuMjMzLDAuNDcxLTEuNzA0LDBsLTUuNjgxLTUuNjgNCgkJYy0wLjQ3LTAuNDcxLTAuNDctMS4yMzMsMC0xLjcwNGMwLjQ3MS0wLjQ3LDEuMjM0LTAuNDcsMS43MDQsMGw0LjgyOCw0LjgyOGw0LjgyOC00LjgyOGMwLjQ3Mi0wLjQ3LDEuMjM0LTAuNDcsMS43MDQsMA0KCQlDMjEuNzMxLDYuNTQzLDIxLjg1LDYuODUyLDIxLjg1LDcuMTZ6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==) no-repeat center top;
  -moz-background-size: 100% auto;
  -o-background-size: 100% auto;
  -webkit-background-size: 100% auto;
  background-size: 100% auto;
}
.scroll-down a:before {
  -webkit-animation: pulse 1.5s 0.25s infinite normal ease forwards;
  -moz-animation: pulse 1.5s 0.25s infinite normal ease forwards;
  -o-animation: pulse 1.5s 0.25s infinite normal ease forwards;
  animation: pulse 1.5s 0.25s infinite normal ease forwards;
}
.scroll-down a:after {
  -webkit-animation: pulse 1.5s 0.5s infinite normal ease forwards;
  -moz-animation: pulse 1.5s 0.5s infinite normal ease forwards;
  -o-animation: pulse 1.5s 0.5s infinite normal ease forwards;
  animation: pulse 1.5s 0.5s infinite normal ease forwards;
}
                                </style>
                            </button>
                            <style>
                                .button {
                                  background-color: #1c87c9;
                                  -webkit-border-radius: 60px;
                                  border-radius: 10px;
                                  border-color: #000000;
                                  color: #eeeeee;
                                  cursor: pointer;
                                  display: inline-block;
                                  font-family: sans-serif;
                                  font-size: 20px;
                                  padding: 5px 15px;
                                  text-align: center;
                                  text-decoration: none;
                                }
                                @keyframes glowing {
                                  0% {
                                    background-color: #ffffff;
                                    box-shadow: 0 0 5px #000000;
                                  }
                                  50% {
                                    background-color: #fafafa;
                                    box-shadow: 0 0 40px #000000;
                                  }
                                  100% {
                                    background-color: #ffffff;
                                    box-shadow: 0 0 5px #000000;
                                  }
                                }
                                .button {
                                  animation: glowing 1300ms infinite;
                                }
                              </style>
                        </div>
                       <style>
                           @media (max-width: 520px) {
                .btnapply {
            width: 50%;
            height: 40%;

            }
            .aply{
                font-size: 14px;
            }

        }
                        </style>


                  </div>

                </div>
              </div>

              <div class="col-md-8 col-lg-8 second justify-content-end feed-box" style="position: relative; padding-top:2%;" data-aos="fade-up">
                <div class="icon-box-two " >

                    <div class="col-md-12 col-lg-12 " style="color: #000000;">

                            <div class="row" style="padding-top: 2%; padding-left:2%;">

                              <img src="{{ asset('assets/img/presentation.png') }}" style="width:8%; height:35%;margin-top: 1%; " alt="logo" class="icon1"/>
                                  <div class="col-md-3">
                                  <span style="font-size:18px;font-weight:bold;color:#210555">{{ trans('messages.Technical') }}</span><br>
                                  <div class="p" style="margin-top: -4px;"> <span style="font-size:16px;font-weight:bold;">{{ trans('messages.Session') }}</span></div>
                                  </div>


                                  <img src="{{ asset('assets/img/meganew.png') }}" style="width:8%; height:35%;margin-top: 1%;" alt="logo" class="icon1"/>
                                  <div class="col-md-3">
                                    <a style="color:black !important;" href="{{ route('web.sl.programes') }}">
                                    <span style="font-size:18px;font-weight:bold;color:#210555">{{ trans('messages.Awareness') }}</span><br>
                                    <div class="p" style="margin-top: -4px;"><span style="font-size:16px;font-weight:bold;">{{ trans('messages.Programme') }}</span></div>
                                    </a>
                                  </div>
                                  <img src="{{ asset('assets/img/rego.png') }}" style="width:8%; height:35%; padding-top: 5px;" alt="logo" class="icon1"/>
                                  <div class="col-md-3 ">
                                    <span style="font-size:18px;font-weight:bold;color:#210555">{{ trans('messages.Officer') }}</span><br>
                                    <div class="p" style="margin-top: -4px;"><span style="font-size:16px;font-weight:bold;">{{ trans('messages.Registeration') }}</span></div>
                                  </div>


                            </div>

                    </div>

                    <div class="col-md-12 col-lg-12 " style="color: #000000;">

                        <div class="row" style="padding-top: 6%; padding-left:2%;">

                            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">

                                <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> {{ $newsString }}
                                </marquee>
                                <div class="d-flex flex-row flex-grow-1 news"><span class="d-flex align-items-center">&nbsp; <a href="{{ url('news/sl/more') }}" class="btn btn-primary ">පුවත් සහ සංග්‍රහය</a></span></div>
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


              </div>





          </div>

        </div>

        <div class="container-fluid " style="padding-top: 20px;">
            <div class="container">
        <div class="card-load" >
            <a href="{{ url('web/pdf/1/home') }}">
          <div class="card-media-load" >
            <span class="card-media-body-heading">Stakeholder Engagement Plan (SEP) -Social Protection Project (P178973) - 17April</span>
          </div>
        </a>

        </div>
    </div>

    <div class="container" style="padding-top: 20px;">
        <div class="card-load" >
            <a href="{{ url('web/pdf/2/home') }}">
          <div class="card-media-load" >
            <span class="card-media-body-heading">
                Environment Social Commitment Plan (ESCP) -Social Protection Project - (P178973)-17April</span>
          </div>
        </a>

        </div>
    </div>
</div>
        <style>

            .u-float-right {
              float: right;
            }

            .u-flex-center {
              display: -webkit-flex;
              display: flex;
              -webkit-justify-content: center;
              justify-content: center;
              -webkit-align-items: center;
              align-items: center;
            }

            .subtle {
              color: #888;
              font-size: 12px;
            }

            .card-media {

              height: 100%;
              margin-top: 15px;
              transition: all 300ms ease-out;
              width: 100%;
            }
            .card-load {
              border-radius: 8px;
              border-radius: 8px;
              border: #1369ce 2px solid;

              height: auto;
              margin-bottom: 5px;
              transition: all 300ms ease-out;
              width: 100%;
            }

            .card-media:hover {
              box-shadow: 0 5px 14px rgba(0, 0, 0, .2);
            }

            .card-media-object-container {
              background: none;
              float: left;
              height: 100%;
              width: 35%;
              position: relative;
            }

            .card-media-object {
              background-position: center center;
              background-size: cover;
              height: 100%;
            }

            .card-media-object:after {
              content: " ";
              display: block;
              height: 100%;
              left: 0;
              opacity: 0;
              position: absolute;
              right: 0;
              top: 0;
              transition: all 300ms ease-out;
              z-index: 10;
            }

            .card-media:hover .card-media-object:after {
              background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 52%, rgba(0,0,0,0.4) 100%);
              background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
              background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
              filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
              opacity: 1;
            }

            .card-media-object-tag {
              background-color: #fff;
              border-radius: 2px;
              padding: 2px 7px;
              position: absolute;
              right: 10px;
              top: 10px;
            }

            .card-media-object-social-list {
              bottom: 4px;
              left: 10px;
              list-style-type: none;
              margin: 0;
              padding: 0;
              position: absolute;
              z-index: 20;
            }

            .card-media-object-social-list li {
              border-radius: 50%;
              display: inline-block;
              height: 30px;
              margin-right: 6px;
              opacity: 0;
              overflow: hidden;
              transform: translateY(5px);
              transition: all 300ms ease-out;
              width: 30px;
            }

            .card-media:hover .card-media-object-social-list li {
              opacity: 1;
              transform: translateY(0);
            }

            .card-media-object-social-list li:nth-child(1) {
              transition-delay: 0;
            }
            .card-media-object-social-list li:nth-child(2) {
              transition-delay: 75ms;
            }
            .card-media-object-social-list li:nth-child(3) {
              transition-delay: 150ms;
            }

            .card-media-object-social-list-item-additional {
              border: 1px solid #fff;
              color: #fff;
              font-size: 12px;
              padding-top: 7px;
              text-align: center;
            }

            .card-media-load {
              background-color: #fff;
              color: #1369ce;
              float: left;

              height: 100%;
              padding: 5px 5px;
              position: relative;
              width: 65%;
            }

            .card-media-body-top {
              display: block;
            }

            .card-media-body-top-icons {
              margin-top: -2px;
              opacity: 0;
              transition: all 300ms ease-out;
              transform: translateY(-5px);
            }

            .card-media:hover .card-media-body-top-icons {
              opacity: 1;
              transform: translateY(0);
            }

            .card-media-body-top-icons > svg {
              cursor: pointer;
              margin-left: 10px;
              transition: all 300ms ease-out;
            }

            .card-media-body-top-icons > svg:hover {
              fill: #444;
            }

            .card-media-body-heading {
              display: block;
              margin-top: 10px;
            }

            .card-media-body-supporting-bottom {
              position: absolute;
              bottom: 10px;
              left: 0;
              opacity: 1;
              padding: 0 15px;
              transition: all 300ms ease-out;
              width: 100%;
            }

            .card-media:hover .card-media-body-supporting-bottom {
              opacity: 0;
              transform: translateY(-8px);
            }

            .card-media-body-supporting-bottom-text {
              display: inline-block;
            }

            .card-media-body-supporting-bottom-reveal {
              opacity: 0;
              transform: translateY(8px);
              transition: all 300ms ease-out;
            }

            .card-media:hover .card-media-body-supporting-bottom-reveal {
              opacity: 1;
              transform: translateY(0);
            }

            .card-media-link {
              color: #41C1F2;
              text-decoration: none;
            }
                </style>
       @foreach ($section as $item)


        <div class="container-fluid" style="margin-top:8px;">
            <div class="row" style="margin-left: 0%">

            <div class="col-md-10 col-lg-6 inition-text" >
                <p id="two" >{{ $item->m_title }}

                </p>




                   </div>
                   <style>

                    #two {
                      font-size: 30px;
                      font-family: sans-serif;
                      font-weight: bold;
                      margin-top: 3%;
                      color: #210555;
                    }

                    @media (max-width: 820px) {
                        #two {
                      font-size: 18px;
                      font-family: sans-serif;
                      font-weight: bold;
                      margin-top: 1%;
                      color: #210555;
                    }

                }

                    #three {
                      font-size: 20px;
                      font-family: sans-serif;


                      color: #000000;
                    }
                    .container {
          display: flex;
          flex-wrap: nowrap;
          margin-top: auto;

        }

        .box {
          width: 25%;
          padding-top: 20px;
          align-items: flex-end;
          margin-bottom: 0%;
        }
        .parent {
            position: relative;
          }

          .bottom {
            position: absolute; /* Set div position to relative */
          }
                    </style>


            </div>
        </div>

<div class="container-fluid  ">
    <div class="row" style="margin-left: 0%">
        <div class="col-md-6 col-lg-4  vedio-play" >
            <video width="150%" height="100%" controls>

                <source src="{{ url('storage/vedioupload/'. $item->v_path) }}" type="video/mp4">

                Your browser does not support HTML5 video.
              </video>
    </div>
    <div class="col-md-8 col-lg-6 inition" >
        <hr class="new5">
        <style>
        hr.new5 {
            border: 10px solid rgb(25, 5, 97);
            border-radius: 5px;
          }
          </style>
        <p id="two" >{{ $item->v_title }}

        </p>

            <p class="show-read-more">{{ $item->v_description }}</p>
            <script>
                $(document).ready(function(){
                    var maxLength = 120;
                    $(".show-read-more").each(function(){
                        var myStr = $(this).text();
                        if($.trim(myStr).length > maxLength){
                            var newStr = myStr.substring(0, maxLength);
                            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                            $(this).empty().html(newStr);
                            $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
                            $(this).append('<span class="more-text">' + removedStr + '</span>');
                        }
                    });
                    $(".read-more").click(function(){
                        $(this).siblings(".more-text").contents().unwrap();
                        $(this).remove();
                    });
                });
                </script>
                <style>
                    .show-read-more .more-text{
                        display: none;
                    }
                </style>
        </p>


                <div class="row">
                    <div class="container " >
                        <div class="box">  <img  src="{{ url('images/homepage/'.$item->img_one) }}" height="100%" width="90%"></div>
                        <div class="box">  <img  src="{{ url('images/homepage/'.$item->img_two) }}" height="100%" width="90%"></div>
                        <div class="box">  <img  src="{{ url('images/homepage/'.$item->img_three) }}" height="100%" width="90%"></div>
                        <div class="box">  <img src="{{ url('images/homepage/'.$item->img_four) }}" height="100%" width="90%"></div>
                      </div>

                </div>

           </div>
           @endforeach
           <style>

            #two {
              font-size: 30px;
              font-family: sans-serif;
              font-weight: bold;
              margin-top: 3%;
              color: #210555;
            }

            @media (max-width: 820px) {
                #two {
              font-size: 18px;
              font-family: sans-serif;
              font-weight: bold;
              margin-top: 1%;
              color: #210555;
            }

        }

            #three {
              font-size: 20px;
              font-family: sans-serif;


              color: #000000;
            }
            .container {
  display: flex;
  flex-wrap: nowrap;
  margin-top: auto;

}

.box {
  width: 25%;
  padding-top: 20px;
  align-items: flex-end;
  margin-bottom: 0%;
}
.parent {
    position: relative;
  }

  .bottom {
    position: absolute; /* Set div position to relative */
  }
            </style>


    </div>
</div>
<hr>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 col-md-6 col-lg-8" style="background-color: #fff;">
        <div class="row" >
            <h1 class="my-4" id="evt-text" style="margin: 0; color: #210555"><b>{{ $evetitle }} </b></h1>
            @foreach ($event as $evt)
            <div class="col-lg-6 col-sm-2 mb-8"  >
              <div class="card-deck h-100" >
                <section class="row" >

                    <div class="col-md-10 background-white py-3 rtr" style="background-color: #fff; margin-left:4%; margin-top: -60px;">
                        <div class="clearfix">

                            <img src="{{ url('images/homepage/'.$evt->eventimg) }}" class="col-md-6  rounded float-left img-fluid imagertr" alt="..." style="" >

                            <h6 style="padding-top: 15px;"><b style="color: #210555;">{{ $evt->event_title }}</b></h6>
                            <p class="d-inline" style="font-size: 14px;" >
                                {{-- {{ substr(strip_tags($evt->event_description), 0, 120) }} --}}
                                {{ $evt->event_description }}
                                      <br>
                                    <a href="{{ url('read/sl/more') }}" class="btn btn-primary " style="margin-top: 2%;">දිගටම කියවන්න</a>

                              </p>
                          </div>
                    </div>
                    <style>
                               @media (max-width: 520px) {
                .clearfix {
                    margin-left: -5%;

            }
            .imagertr{
                margin-left: -5%;
            }

        }
                        </style>


                  </section>
              </div>
            </div>
         @endforeach



        </div>
      </div>
      <div class="col-sm-3 col-md-6 col-lg-4" >
        <a href="{{ url('web/sl/beneficiary/form') }}">
        <div class="card " style="padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
            <img class="card-img" src="{{ url('images/homepage/bformnew.jpg') }}" alt="Card image">
     </div>
    </a>
         <div class="card " style="padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
            <img class="card-img" src="{{ url('images/homepage/gapplication.jpg') }}" alt="Card image">
     </div>
     <div class="card " style="padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
        <img class="card-img" src="{{ url('images/homepage/dsect.jpg') }}" alt="Card image">
 </div>

    </div>
  </div>




    <!-- /.row -->




  <div class="container-fluid" style="padding-left: 2%; padding-right:2%;">

    <!-- Page Heading -->


    <div class="row" style="padding-left: 3%;">

      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card-deck h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('assets/img/onephoto.png') }}" alt=""></a>


        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card-deck h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('assets/img/twophoto.png') }}" alt=""></a>

        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card-deck h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('assets/img/uu.png') }}" alt=""></a>

        </div>
      </div>



    </div>
    <!-- /.row -->


  </div>


  @include('web.messagesl')



  </main><!-- End #main -->
  <!-- ======= Footer ======= -->

    @endsection


















