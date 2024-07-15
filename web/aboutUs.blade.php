@extends('welfare_master')
@section('content')
<style>
   .underline {
      position: relative;
      display: inline-block;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    .underline::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -2px;
      width: 100%;
      height: 2px;
      background-color: #FF0000;
      transform: scaleX(0);
      transform-origin: bottom left;
      transition: transform 0.3s ease-in-out;
    }

    .underline:hover::after {
      transform: scaleX(1);
    }


    .custom-div img {
      width: 100%;
      height: 100%;
      border: 2px solid #000;

    }
    .custom-div2 {
      /* border: 1px solid #ccc; */
      /* text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; */
    }

    .custom-div2 p {
      text-align: justify;
    }
    .card{
        background-color: rgb(255, 255, 236) !important;
    }
    .col-8 {
        display: flex;
        justify-content: left;
        align-items: center;
        text-align: left;
        font-size: 12px;
    }

    .col-8 ul {
        overflow: auto; /* Add scroll bar when content exceeds div height */
    }


</style>
  <!-- About Us Section -->
  <section id="about" class="py-5 mt-5 p-3">

      <div  class="row p-3 mt-5">
        <div class="col-lg-6 col-sm-12 col-md-12 custom-div">
            <img src="{{ asset('web_images/about/people-holding-rubber-heart.jpg') }}" alt="Your Image">
          </div>
        <div class="col-lg-6 col-sm-12 col-md-12 custom-div2 mt-3">
          {{-- <h2 class="underline ">About Us</h2> --}}
          <p>Welfare Benefits Board (WBB) has been established in terms of section 3 of Welfare Benefits Act, No. 24 of 2002. It has been coming into operation on the 15th February 2016. The Welfare Benefits Act No. 24 of 2002 was Gazette under the Gazette of Democratic Socialist Republic of Sri Lanka Extraordinary No. 1952/22-Tuesday February 02, 2016. <br><br>

            Hon. Minister of Finance has appointed its Chairman and members with the consultation of Constitutional Council as per Section 2 of WB Act. The main functions of WBB as per the Welfare Benefit Act are as follows;.</p>

        <div>
            <ul>
                <li>To exercise, perform and discharge the powers, duties and functions conferred on or assigned to it, by the Act.</li>
                <li>To delegate powers to any of District Secretary, Divisional Secretary or Grama Niladhari or public officer any power, duty or function vested in the Board.</li>
                <li>Establishment of Welfare Benefit Schemes
                    <ol>
                        <li>Develop the criteria for eligibility</li>
                        <li>Specify the financial allocation in terms of a Scheme</li>
                        <li>Specify the date of commencement of the Scheme</li>
                        <li>Specify the financial or other benefits to be granted</li>
                        <li>State the period for which persons are entitled to receive benefits</li>
                        <li>Stipulate the total number of persons who will be beneficiaries</li>
                      </ol>
                </li>

                <li>Appoint selection committees and appeal committees to beneficiary selection and manage objections and grievances.</li>
              </ul>
        </div>
        </div>
      </div>

      <div class="container-fluid bootstrap snippets bootdeys" >
        <div class="row">
            <div class="col-md-6 col-sm-6 content-card" >
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                        <div class="content" style="height: 50%;">
                            <h4 class="category">OUR VISION</h4>

                            <p class="description">"To become the forerunner in the journey of uplifting the living codition of thoes who are indeed in need in the Sri Lanka society"</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-6 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                        <div class="content" style="height: 50%;">
                            <h4 class="category">OUR MISSION</h4>

                            <p class="description">"What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment." </p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>


        </div>
        </div>
        <style>
            .card-big-shadow {
    max-width: auto;
    position: relative;
}

.coloured-cards .card {
    margin-top: 30px;
}

.card[data-radius="none"] {
    border-radius: 0px;
}
.card {

    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}


.card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
    color: #FFFFFF;
}
.card.card-just-text .content {
    padding: 50px 65px;
    text-align: center;
}
.card .content {
    padding: 20px 20px 10px 20px;
}
.card[data-color="blue"] .category {
    color: #7a9e9f;
}

.card .category{
    font-size: 28px;
}

.card .label {
    font-size: 14px;
    margin-bottom: 0px;
}
.card-big-shadow:before {
    background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}
h4, .h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}
h6, .h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}
.card .description {
    font-size: 24px;
    color: #66615b;
}
.content-card{

    margin-top:30px;
}
a:hover, a:focus {
    text-decoration: none;
}

/*======== COLORS ===========*/
.card[data-color="blue"] {
    background: #b8d8d8;
}
.card[data-color="blue"] .description {
    color: #506568;
}

.card[data-color="green"] {
    background: #d5e5a3;
}
.card[data-color="green"] .description {
    color: #60773d;
}
.card[data-color="green"] .category {
    color: #92ac56;
}

.card[data-color="yellow"] {
    background: #ffe28c;
}
.card[data-color="yellow"] .description {
    color: #b25825;
}
.card[data-color="yellow"] .category {
    color: #d88715;
}

.card[data-color="brown"] {
    background: #d6c1ab;
}
.card[data-color="brown"] .description {
    color: #75442e;
}
.card[data-color="brown"] .category {
    color: #a47e65;
}

.card[data-color="purple"] {
    background: #baa9ba;
}
.card[data-color="purple"] .description {
    color: #3a283d;
}
.card[data-color="purple"] .category {
    color: #5a283d;
}

.card[data-color="orange"] {
    background: #ff8f5e;
}
.card[data-color="orange"] .description {
    color: #772510;
}
.card[data-color="orange"] .category {
    color: #e95e37;
}
            </style>


      <div class="container">
        <div class="row">
            <h3>Board Members</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/Mr._B._Wijayaratne.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">B.Wijayaratne (Chairman)</h3>
                <h4 class="title">+94112484500 (Ext. 4117)</h4>
                <h5 class="title">commissioner.wbb@gmail.com</h5>
                <h6 class="title" style="font-size: 12px;">commissioner.wbb@mo.treasury.gov.lk</h6>
              </div>
              <ul class="social">

              </ul>
            </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/kmsrnew.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Kamal Padmasiri (Member)</h3>
                      <h4 class="title">+94716905042</h4>

                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/desap.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">
                        A.R.Desapriya (Member)</h3>
                      <h4 class="title">+94776665559</h4>
                      <h5 class="title">dasapriyaar@gmail.com</h5>

                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/dunu.jpg') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">	Mr.Kumara Dunusinghe (Member)</h3>
                      <h4 class="title">+94777411839</h4>


                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="{{ asset('web_images/about/jesim.png') }}">
                </div>
                <div class="team-content">
                  <h3 class="name">
                    Ms.K.H.Jessi Mueller (Member)</h3>
                  <h4 class="title">+94716543678</h4>
                  <h5 class="title">jessimueller20@gmail.com</h5>

                </div>
                <ul class="social">

                </ul>
              </div>
          </div>
        </div>
      </div>
      <style>


.our-team {
  padding: 30px 0 40px;
  margin-bottom: 30px;
  background-color: #f7f5ec;
  text-align: center;
  overflow: hidden;
  position: relative;
}

.our-team .picture {
  display: inline-block;
  height: 130px;
  width: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}

.our-team .picture::before {
  content: "";
  width: 100%;
  height: 0;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 0.9;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}

.our-team:hover .picture::before {
  height: 100%;
}

.our-team .picture::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

.our-team .picture img {
  width: 100%;
  height: auto;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
}

.our-team:hover .picture img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}

.our-team .title {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}

.our-team .social {
  width: 100%;
  padding: 0;
  margin: 0;
  background-color: #1369ce;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}

.our-team:hover .social {
  bottom: 0;
}

.our-team .social li {
  display: inline-block;
}

.our-team .social li a {
  display: block;
  padding: 10px;
  font-size: 17px;
  color: white;
  transition: all 0.3s ease 0s;
  text-decoration: none;
}

.our-team .social li a:hover {
  color: #1369ce;
  background-color: #f7f5ec;
}
        </style>


      <div class="container">
        <div class="row">
            <h3>Welfare Benefits Board Staff</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/Mr._B._Wijayaratne.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">B.Wijayaratne (Commissioner)</h3>
                <h4 class="title">+94112484500 (Ext. 4117)</h4>
                <h5 class="title">commissioner.wbb@gmail.com</h5>
                <h6 class="title" style="font-size: 12px;">commissioner.wbb@mo.treasury.gov.lk</h6>
              </div>
              <ul class="social">

              </ul>
            </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">K.S.C.Sugath Kumara (Additional Commissioner)</h3>
                      <h4 class="title">+94774769534</h4>

                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">W.H.Anushkha Wimalajeewa (Accountant)</h3>
                      <h4 class="title">+94779947726</h4>


                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">	N.H.P.N.Janaka Nanayakkara (System Administrator)</h3>
                      <h4 class="title">+94112484500(Ext. 4117)</h4>
                      <h5 class="title">janaka.nhp.sliit@gmail.com</h5>

                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                </div>
                <div class="team-content">
                  <h3 class="name">
                    W. Damantha Lakpriya (IT Executive)</h3>
                  <h4 class="title">+94112484500(Ext. 4117)</h4>
                  <h5 class="title">damantha.lakpriya@gmail.com</h5>

                </div>
                <ul class="social">

                </ul>
              </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                </div>
                <div class="team-content">
                  <h3 class="name">
                    K. Tharshan (Software Developer)</h3>
                  <h4 class="title">+94112484500(Ext. 4117)</h4>
                  <h5 class="title">tharshan1000@gmail.com</h5>

                </div>
                <ul class="social">

                </ul>
              </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="row">
            <h3> Staff</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
              </div>
              <div class="team-content">
                <h3 class="name">Amali Dinushika (Development Officer)</h3>
                <h4 class="title">+94112151481</h4>
                <h5 class="title">amalidinushika4@gmail.com</h5>

              </div>
              <ul class="social">

              </ul>
            </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">
                        G.I.C.Perera  (Office Assistant)</h3>
                      <h4 class="title">+94112151481</h4>

                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">A.P.S.Munasinghe (Management Assistant)</h3>
                      <h4 class="title">+94112151481</h4>


                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
                    </div>
                    <div class="team-content">
                      <h3 class="name">
                        K.D.S.N.Chamil (Office Assistant)</h3>
                      <h4 class="title">+94112151481</h4>


                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>





        </div>
      </div>




      <div class="container-fluid">
        <h4>Stakeholders</h4>

        <div class="card-media" >
            <a href="https://www.treasury.gov.lk/">
          <div class="card-media-body" >
            <span class="card-media-body-heading">Ministry of Finance, Economic Stabilization and National Policies</span>
          </div>
        </a>
        </div>
        <div class="card-media">
            <a href="https://www.pubad.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">Ministry of Public Administration, Home Affairs, Provincial Councils and Local Government</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a href="https://www.childwomenmin.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">Ministry of Women, Child Affairs and Social Empowerment</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://www.samurdhi.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">Department of Samurdhi Development</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="http://www.statistics.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">Department of Census & Statistics</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://srilankaeldercare.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">National Council and Secretariat for Elders (NSE)</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://www.icta.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">Information and Communication Technology Agency of Sri Lanka</span>
            </div>
        </a>
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
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .12);
  height: 75px;
  margin-bottom: 25px;
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

.card-media-body {
  background-color: #fff;
  color: #1369ce;
  float: left;
  height: 100%;
  padding: 12px 15px;
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
      </div>


  </section>

@endsection
















