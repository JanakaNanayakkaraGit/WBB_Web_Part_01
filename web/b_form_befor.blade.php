@extends('welfare_master')

@section('content')

<div class="container row" style="padding-top: 12%; padding-bottom:6%;">


      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <a href="{{ url('web/role/divisional') }}">
                <div class="card card-2">
                  <h3>Role of Divisional Secretaries</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <a href="{{ url('web/management/form') }}">
                <div class="card card-3">
                  <h3>Role of Management Assistants</h3>

                </div>
                </a>
        </div>
      </div>

    </div>
  </div>

  <style>

.card{
    height: 100%;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

.card h3{
  font-weight: 600;
}

.card img{
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 120px;
}

.card-1{
  background-image: url('');
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-2{
   background-image: url('{{ asset('assets/img/divisional.png')}}');
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-3{
   background-image: url('{{ asset('assets/img/manage.png')}}');
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

@media(max-width: 990px){
  .card{
    margin: 20px;
  }
}
    </style>

@endsection
