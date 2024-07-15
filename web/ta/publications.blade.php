@extends('welfareta_master')
@section('content')
<div class="container" style="padding-top: 10%;">
    <h4>நலன்புரி நன்மைகள் வாரிய வெளியீடுகள்</h4>

    @foreach ($data as $item)
    <div class="card-media" >
        <a href="{{ route('web.publication.pdf', ['id' => $item->id]) }}">
      <div class="card-media-body" >

        <span class="card-media-body-heading">
            {{ $item->title }}</span>

      </div>
    </a>
    </div>

    @endforeach





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
@endsection
















































