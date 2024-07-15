@extends('welfaresl_master')
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
          <p>2002 අංක 24 දරන සුබසාධන ප්‍රතිලාභ පනතේ 3 වැනි වගන්තියට අනුව සුබසාධක ප්‍රතිලාභ මණ්ඩලය (WBB) ස්ථාපිත කර ඇත. එය ක්‍රියාත්මක වන්නේ 2016 පෙබරවාරි 15 ​​වැනිදාය. 2002 අංක 24 දරන සුබසාධන ප්‍රතිලාභ පනත ගැසට් පත්‍රය යටතේ විය ශ්‍රී ලංකා ප්‍රජාතාන්ත්‍රික සමාජවාදී ජනරජයේ අතිවිශේෂ අංක 1952/22 ගැසට් පත්‍රය-2016 පෙබරවාරි 02 අඟහරුවාදා. <br><br>

            ගරු. WB පනතේ 2 වගන්තිය අනුව මුදල් අමාත්‍යවරයා විසින් එහි සභාපතිවරයා සහ සාමාජිකයින් ආණ්ඩුක්‍රම ව්‍යවස්ථා සභාවේ උපදේශනයෙන් පත් කර ඇත. සුභසාධන ප්‍රතිලාභ පනතට අනුව WBB හි ප්‍රධාන කාර්යයන් පහත පරිදි වේ;.</p>

        <div>
            <ul>
                <li>පනත මගින් ප්‍රදානය කර ඇති හෝ පවරා ඇති බලතල, යුතුකම් සහ කාර්යයන් ක්‍රියාත්මක කිරීම, ඉටු කිරීම සහ ඉටු කිරීම.</li>
                <li>දිස්ත්‍රික් ලේකම්වරයෙකුට, ප්‍රාදේශීය ලේකම්වරයෙකුට හෝ ග්‍රාම නිලධාරීවරයෙකුට හෝ රාජ්‍ය නිලධාරියෙකුට මණ්ඩලයට පැවරී ඇති ඕනෑම බලයක්, රාජකාරියක් හෝ කාර්යයක් සඳහා බලතල පැවරීම.</li>
                <li>සුබසාධන ප්‍රතිලාභ යෝජනා ක්‍රම පිහිටුවීම
                    <ol>
                        <li>සුදුසුකම් සඳහා නිර්ණායක සකස් කරන්න</li>
                        <li>යෝජනා ක්‍රමයක් අනුව මුල්‍ය ප්‍රතිපාදන සඳහන් කරන්න</li>
                        <li>යෝජනා ක්රමය ආරම්භ කරන දිනය සඳහන් කරන්න</li>
                        <li>ලබා දිය යුතු මූල්‍ය හෝ වෙනත් ප්‍රතිලාභ සඳහන් කරන්න</li>
                        <li>ප්‍රතිලාභ ලැබීමට පුද්ගලයන්ට හිමිකම් ඇති කාලසීමාව සඳහන් කරන්න</li>
                        <li>ප්‍රතිලාභීන් වන මුළු පුද්ගලයින් සංඛ්‍යාව නියම කරන්න</li>
                      </ol>
                </li>

                <li>ප්‍රතිලාභීන් තෝරා ගැනීම සහ විරෝධතා සහ දුක්ගැනවිලි කළමනාකරණය කිරීම සඳහා තේරීම් කමිටු සහ අභියාචනා කමිටු පත් කිරීම.</li>
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
                            <h4 class="category">අපගේ දැක්ම</h4>

                            <p class="description">"ශ්‍රී ලාංකේය සමාජය තුළ සැබවින්ම අවශ්‍යතා ඇති මිනිසුන්ගේ ජීවන තත්ත්වය නඟා සිටුවීමේ ගමනේ පෙරගමන්කරුවා වීමට"</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-6 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                        <div class="content" style="height: 50%;">
                            <h4 class="category">අපගේ මෙහෙවර</h4>

                            <p class="description">"මේ සියල්ලටම පොදු දෙය නම්, ඔවුන් යෙදුමෙන් හෝ සේවාවෙන් තොරතුරු ඉවත් කර එය මොහොතට අදාළ කර ගැනීමයි.." </p>
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
            <h3>මණ්ඩල සාමාජිකයින්</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/Mr._B._Wijayaratne.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">B.විජයරත්න (සභාපති)</h3>
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
                      <h3 class="name">කමල් පද්මසිරි (සාමාජික)</h3>
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
                        A.R.දේසප්‍රිය(සාමාජික)</h3>
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
                      <h3 class="name">	Mr.කුමාර දුනුසිංහ (සාමාජික)</h3>
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
                    Ms.K.H.ජෙසී මුලර් (සාමාජික)</h3>
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
            <h3>සුබසාධන ප්‍රතිලාභ මණ්ඩල කාර්ය මණ්ඩලය</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/Mr._B._Wijayaratne.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">බී.විජයරත්න (කොමසාරිස්)</h3>
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
                      <h3 class="name">K.S.C.සුගත් කුමාර(අතිරේක කොමසාරිස්)</h3>
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
                      <h3 class="name">W.H.අනුෂ්කා විමලජීව (ගණකාධිකාරී)</h3>
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
                      <h3 class="name">	N.H.P.N.ජානක නානායක්කාර (පද්ධති පරිපාලක)</h3>
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
                    W. දමන්ත ලක්ප්‍රිය(තොරතුරු තාක්ෂණ විධායක)</h3>
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
                    K. තර්ෂන්(මෘදුකාංග සංවර්ධක)</h3>
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
            <h3> කාර්ය මණ්ඩලය</h3>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('web_images/about/iconn.png') }}">
              </div>
              <div class="team-content">
                <h3 class="name">අමාලි දිනුෂිකා (සංවර්ධන නිලධාරී)</h3>
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
                        G.I.C.පෙරේරා (කාර්යාල සහයක)</h3>
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
                      <h3 class="name">A.P.S.මුණසිංහ (කළමනාකරණ සහකාර)</h3>
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
                        K.D.S.N.චමිල් (කාර්යාල සහයක)</h3>
                      <h4 class="title">+94112151481</h4>


                    </div>
                    <ul class="social">

                    </ul>
                  </div>
          </div>





        </div>
      </div>




      <div class="container-fluid">
        <h4>පාර්ශවකරුවන්</h4>

        <div class="card-media" >
            <a href="https://www.treasury.gov.lk/">
          <div class="card-media-body" >
            <span class="card-media-body-heading">
                මුදල්, ආර්ථික ස්ථායීකරණ සහ ජාතික ප්‍රතිපත්ති අමාත්‍යාංශය</span>
          </div>
        </a>
        </div>
        <div class="card-media">
            <a href="https://www.pubad.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">රාජ්‍ය පරිපාලන, ස්වදේශ කටයුතු, පළාත් සභා සහ පළාත් පාලන අමාත්‍යාංශය</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a href="https://www.childwomenmin.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">කාන්තා, ළමා කටයුතු සහ සමාජ සවිබල ගැන්වීම් අමාත්‍යාංශය</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://www.samurdhi.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">සමෘද්ධි සංවර්ධන දෙපාර්තමේන්තුව</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="http://www.statistics.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">ජනලේඛන සහ සංඛ්‍යාලේඛන දෙපාර්තමේන්තුව</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://srilankaeldercare.gov.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">ජාතික සභාව සහ වැඩිහිටි ලේකම් කාර්යාලය(NSE)</span>
            </div>
        </a>
          </div>
          <div class="card-media">
            <a  href="https://www.icta.lk/">
            <div class="card-media-body">
              <span class="card-media-body-heading">
                ශ්‍රී ලංකා තොරතුරු හා සන්නිවේදන තාක්ෂණ නියෝජිතායතනය</span>
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
















