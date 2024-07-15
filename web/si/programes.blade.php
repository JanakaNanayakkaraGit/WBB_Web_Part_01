@extends('welfaresl_master')
@section('content')
<style>
   .underline {
       margin-top:5px ;
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



.card {
  /* width: 300px; */
  background-color: #ffffff;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  overflow: hidden;
}

.card .card-content {
  display: flex;
}

.card .card-image {
  flex: 0 0 100px;
  margin-right: 10px;
}

.card .card-image img {
  width: 100px;
  height: 100px;
  object-fit: cover;
}

.card .card-text {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card .card-text p {
  font-size: 14px;
  text-align: center;
  margin: 0;
}

</style>
  <!-- About Us Section -->
  <section id="about" class="py-5 mt-5 p-3">

  <div class="row p-3 mt-5">
  <h2  class="underline text-center mb-5">රජය විසින් යෝජනා කරන ලද සුබසාධන ප්‍රතිලාභ යෝජනා ක්‍රම</h2>

  @foreach ($data as $item)
  <div class="col-md-4 col-sm-12 mt-2">
    <div class="card">
      <div class="card-content">
        <div class="card-image p-1">
          <img src="{{ asset('backend/assets/Programes/'.$item->program_image) }}" alt="Card Image">
        </div>
        <div class="card-text">
          <p>{{ $item->title }}</p>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  </div>

  <div class="row p-3 mt-5">
    <h2  class="underline text-center mb-5">ඉලක්කගත වැඩසටහන්</h2>

    @foreach ($Targeted as $item)
    <div class="col-md-4 col-sm-12 mt-2">
      <div class="card">
        <div class="card-content">
          <div class="card-image p-1">
            <img src="{{ asset('backend/assets/Programes/'.$item->program_image) }}" alt="Card Image">
          </div>
          <div class="card-text">
            <p>{{ $item->title }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    </div>

  </section>
@endsection













































































