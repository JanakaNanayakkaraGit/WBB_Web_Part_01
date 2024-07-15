@extends('welfare_master')

@section('content')


    <div class="container" style="padding-top: 3%;">

        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4 ">
                <div class="container d-flex justify-content-center mt-100">
                    <div class="row">
                        <div class="col-md-6">
                           <div class="card">
                               <div class="card-body text-center">

                                <p class="card-title mt-3">
                                    <div class="small-4" style="text-align: center; padding-top: 10%;
                        padding-bottom: 10%">
                                        <i class="fa fa-map-marker text-primary " style="font-size:48px;"></i>
                                    </div>

                                    <p class="para-1" style="color: #000000;"> Welfare Benefits Board <br> Ministry of Finance,Economic Stabilization <br> and
                                        National Policies<br>1st Floor, New Building,<br>Colombo 01,<br>Sri Lanka</p>
                                    </p>


                                    </p>


                               </div>
                           </div>
                        </div>
                    </div>
                   </div>


            </div>
            <style>
                @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);



           .mt-100{

               margin-top:100px;
           }

           .card {
               position: relative;
               display: flex;
               width: 350px;
               flex-direction: column;
               min-width: 0;
               word-wrap: break-word;
               background-color: #fff;
               background-clip: border-box;
               border: 1px solid #d2d2dc;
               border-radius: 11px;
               -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
               -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
               box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
           }

           .card .card-body {
               padding: 1rem 1rem
           }

           .card-body {
               flex: 1 1 auto;
               padding: 1.25rem
           }

           p{
               font-size: 14px;
           }

           h4{
                   margin-top: 18px;
           }


           .btn:focus {
               outline: none
           }

           .btn {
               border-radius: 22px;
               text-transform: capitalize;
               font-size: 13px;
               padding: 8px 19px;
               cursor: pointer;
               color: #fff;
               background-color: #D50000;

           }


           .btn:hover{

               background-color: #D32F2F !important;
           }
           </style>
           <div class="col-lg-4 col-sm-6 mb-4 ">

            <div class="container d-flex justify-content-center mt-100">
                <div class="row">
                    <div class="col-md-6">
                       <div class="card" style="height: 128%;">
                           <div class="card-body text-center">

                            <p class="card-title mt-3">
                                <div class="small-4" style="text-align: center; padding-top: 10%;
                    padding-bottom: 10%">
                                    <i class="fa fa-phone text-primary " style="font-size:48px;"></i>
                                </div>

                                <p class="para-1" style="color: #000000;"> +(94)112 484 500 (Ext. 4117) <br>+(94)112 484 600 (Ext. 4117)<br> +(94)112 484
                                    700 (Ext. 4117)</p>
                                </p>


                                </p>


                           </div>
                       </div>
                    </div>
                </div>
               </div>


                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">

                    <div class="container d-flex justify-content-center mt-100">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="card" style="height: 140%;">
                                   <div class="card-body text-center">

                                    <p class="card-title mt-3">
                                        <div class="small-4" style="text-align: center; padding-top: 10%;
                            padding-bottom: 10%">
                                            <i class="fa fa-envelope text-primary " style="font-size:48px;"></i>
                                        </div>

                                        <p class="para-1" style="margin-bottom:-1px; color: #000;">info@iwms.wbb.gov.lk</p>
                                        <p class="para-1" style=" color: #000;">welfarebenefitboard2016@gmail.com</p>


                                        </p>


                                   </div>
                               </div>
                            </div>
                        </div>
                       </div>


                        </div>
        </div>
    </div>
    </div>



    </div>

    </div>


    <div class="row id">


        <div class="mf-section-title text-center dark large-size margbtm20">
            <h1 style="color:black;font-weight:bold;font-family: 'PT Serif', serif;">Find Us</h1>
            <hr style="border: 3px solid hsl(154, 100%, 21%) ; width:20vh; margin: auto;margin-bottom:20px">
        </div>
        <div class="col 12">



            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.645107861561!2d79.8332806!3d6.9310279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25924de870667%3A0xa0d952b7f92c711d!2sMinistry%20of%20Finance!5e0!3m2!1sen!2slk!4v1684477732165!5m2!1sen!2slk"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="content">

        <div class="container">
          <div class="row align-items-stretch no-gutters contact-wrap">
            <div class="col-md-12">
              <div class="form h-100">
                <h3>Contact Us</h3>
                <form class="mb-5"  id="contactForm" name="contactForm">
                    @csrf
                  <div class="row">
                    <label for="" class="col-form-label"><h2>Contact Us</h2></label>
                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Name *</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Email *</label>
                      <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-12 form-group mb-3">
                      <label for="message" class="col-form-label">Message *</label>
                      <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                        <button type="button" class="btn btn-md rounded btn-primary" id="send">Send message</button>
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>


                <div id="form-message-warning mt-4"></div>


              </div>
            </div>
          </div>
        </div>

      </div>


    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

        let btn = document.getElementById("send");
      btn.addEventListener('click', event => {

            var send_content = $('#contactForm')[0];
            var send_content_ajax = new FormData(send_content);

            $.ajax({
              type:'POST',
              url: "{{ route('admin.ajaxmessage') }}",
               data: send_content_ajax,
               contentType: false,
               processData: false,
               success: (response) => {
                 if (response) {

                  $('#contactForm')[0].reset();
                  Swal.fire(
                 'Sent message!',
                 'You clicked the button!',
                 'success'
                  )
                  $('#image-input-error').text('');
                 }

               },
               error: function(response){

                  $('#image-input-error').text(response.responseJSON.message);
               }
           })
           .always(function() {

        });







       console.log("clickde");



      });
      </script>
@endsection
