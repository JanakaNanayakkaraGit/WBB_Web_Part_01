@extends('welfareta_master')
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
          <p>நலப் பலன்கள் வாரியம் (WBB) 2002 ஆம் ஆண்டின் 24 ஆம் இலக்க நலப் பலன்கள் சட்டத்தின் பிரிவு 3 இன் அடிப்படையில் நிறுவப்பட்டது. இது பிப்ரவரி 15, 2016 முதல் செயல்பாட்டுக்கு வருகிறது. 2002 ஆம் ஆண்டின் 24 ஆம் எண் நலப் பலன்கள் சட்டம் அரசிதழின் கீழ் வெளியிடப்பட்டது. இலங்கை ஜனநாயக சோசலிசக் குடியரசின் வர்த்தமானி 1952/22 2016 பெப்ரவரி 02 செவ்வாய் கிழமை. <br><br>

            கௌரவ. WB சட்டத்தின் 2வது பிரிவின்படி அரசியலமைப்பு சபையின் ஆலோசனையுடன் நிதி அமைச்சர் அதன் தலைவர் மற்றும் உறுப்பினர்களை நியமித்துள்ளார். நலன்புரி நன்மை சட்டத்தின்படி WBB இன் முக்கிய செயல்பாடுகள் பின்வருமாறு;.</p>

        <div>
            <ul>
                <li>சட்டத்தால் வழங்கப்பட்ட அல்லது ஒதுக்கப்பட்ட அதிகாரங்கள், கடமைகள் மற்றும் செயல்பாடுகளை செயல்படுத்துதல், நிறைவேற்றுதல் மற்றும் நிறைவேற்றுதல்.</li>
                <li>மாவட்டச் செயலாளர், பிரதேச செயலாளர் அல்லது கிராம உத்தியோகத்தர் அல்லது அரச உத்தியோகத்தர் எவருக்கும் அதிகாரங்களை வழங்குதல்.</li>
                <li>நலத்திட்ட உதவித் திட்டங்களை நிறுவுதல்
                    <ol>
                        <li>தகுதிக்கான அளவுகோல்களை உருவாக்குங்கள்</li>
                        <li>திட்டத்தின் அடிப்படையில் நிதி ஒதுக்கீட்டைக் குறிப்பிடவும்</li>
                        <li>திட்டம் தொடங்கும் தேதியைக் குறிப்பிடவும்</li>
                        <li>வழங்கப்பட வேண்டிய நிதி அல்லது பிற நன்மைகளைக் குறிப்பிடவும்</li>
                        <li>நன்மைகளைப் பெறுவதற்கு நபர்களுக்கு உரிமையுள்ள காலத்தைக் குறிப்பிடவும்</li>
                        <li>பயனாளிகளாக இருக்கும் மொத்த நபர்களின் எண்ணிக்கையை குறிப்பிடவும்</li>
                      </ol>
                </li>

                <li>பயனாளிகளைத் தேர்ந்தெடுப்பதற்கு தேர்வுக் குழுக்கள் மற்றும் மேல்முறையீட்டுக் குழுக்களை நியமித்து, ஆட்சேபனைகள் மற்றும் குறைகளை நிர்வகிக்கவும்.</li>
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
                            <h4 class="category">எமது நோக்கம்</h4>

                            <p class="description">"இலங்கை சமூகத்தில் உண்மையில் தேவைப்படுவோரின் வாழ்வாதாரத்தை மேம்படுத்தும் பயணத்தில் முன்னோடியாக மாறுதல்"</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-6 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                        <div class="content" style="height: 50%;">
                            <h4 class="category">எங்கள் நோக்கம்</h4>

                            <p class="description">"இவை அனைத்திற்கும் பொதுவானது என்னவென்றால், அவை செயலி அல்லது சேவையிலிருந்து தகவலை வெளியே இழுத்து, அதைத் தருணத்திற்குப் பொருத்தமானதாக மாற்றுகின்றன." </p>
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
            <h3>வாரிய உறுப்பினர்கள்</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/Mr._B._Wijayaratne.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">B.விஜயரத்ன (தலைவர்)</h3>
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
                      <h3 class="name">கமல் பத்மசிறி (உறுப்பினர்)</h3>
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
                        A.R.தேசப்ரியா (உறுப்பினர்)</h3>
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
                      <h3 class="name">	Mr.குமார துனுசிங்க (உறுப்பினர்)</h3>
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
                    Ms.K.H.ஜெஸ்ஸி முல்லர் (உறுப்பினர்)</h3>
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
            <h3>நலப் பலன்கள் வாரிய ஊழியர்கள்</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/Mr._B._Wijayaratne.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">B.விஜயரத்ன (கமிஷனர்)</h3>
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
                      <h3 class="name">K.S.C.சுகத் குமார (கூடுதல் கமிஷனர்)</h3>
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
                      <h3 class="name">W.H.அனுஷ்கா விமலஜீவ (கணக்காளர்)</h3>
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
                      <h3 class="name">	N.H.P.N.ஜனக நாணயக்கார(கணினி நிர்வாகி)</h3>
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
                    W. டமந்த லக்ப்ரியா (ஐடி நிர்வாகி)</h3>
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
                    K. தர்ஷன் (மென்பொருள் உருவாக்குபவர்)</h3>
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
            <h3> பணியாளர்கள்</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
              </div>
              <div class="team-content">
                <h3 class="name">அமலி தினுஷிகா (வளர்ச்சி அலுவலர்)</h3>
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
                        G.I.C.பெரேரா  (அலுவலக உதவியாளர்)</h3>
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
                      <h3 class="name">A.P.S.முனசிங்க (
                        மேலாண்மை உதவியாளர்)</h3>
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
                        K.D.S.N.சாமில் (அலுவலக உதவியாளர்)</h3>
                      <h4 class="title">+94112151481</h4>


                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>





        </div>
      </div>




      <div class="container-fluid">
        <h4>பங்குதாரர்கள்</h4>

        <div class="card-media" >
            <a href="https://www.treasury.gov.lk/">
          <div class="card-media-body" >
            <span class="card-media-body-heading">நிதி அமைச்சகம், பொருளாதார ஸ்திரப்படுத்தல் மற்றும் தேசிய கொள்கைகள்</span>
          </div>
        </a>
        </div>
        <div class="card-media">
            <a href="https://www.pubad.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">பொது நிர்வாகம், உள்நாட்டலுவல்கள், மாகாண சபைகள் மற்றும் உள்ளூராட்சி அமைச்சு</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a href="https://www.childwomenmin.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">பெண்கள், குழந்தைகள் விவகாரங்கள் மற்றும் சமூக அதிகாரமளித்தல் அமைச்சகம்</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://www.samurdhi.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">சமுர்த்தி அபிவிருத்தி திணைக்களம்</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="http://www.statistics.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">மக்கள் தொகை கணக்கெடுப்பு மற்றும் புள்ளியியல் துறை</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://srilankaeldercare.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">தேசிய கவுன்சில் மற்றும் முதியோர்களுக்கான செயலகம் (NSE)</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://www.icta.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">இலங்கையின் தகவல் மற்றும் தொடர்பாடல் தொழில்நுட்ப நிறுவனம்</span>
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
















