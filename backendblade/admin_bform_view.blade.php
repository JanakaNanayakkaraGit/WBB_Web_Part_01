@extends('backendblade.admin_master')
@section('content')


<div class="catcard">
<div class="container-fluid-tb py">
<div class="row">
<div class="col-12">
<div class="card">

<div class="card-header pb-0">
<div class="d-lg-flex">
<div>
<h5 class="mb-0">All Forms</h5>
<p class="text-sm mb-0">
A lightweight, extendable, dependency-free javascript HTML table plugin.
</p>
</div>

</div>
</div>
<div class="card multisteps-form__panel p-4 border-radius-xl bg-white js-active">
  <div class="table-responsive">
  <table class="table" id="form_list">
  <thead >
  <tr>
  <th>Fullname</th>
  <th>Address</th>
  <th>NIC</th>
  <th>Phone</th>
  <th>Action</th>
  </tr>
  </thead>
  <tbody>
  </tbody>
  </table>
  </div>
  </div>
</div>
</div>
</div>

<footer class="footer pt-3  ">
<div class="container-fluid">
<div class="row align-items-center justify-content-lg-between">
<div class="col-lg-6 mb-lg-0 mb-4">
<div class="copyright text-center text-sm text-muted text-lg-start">
© <script>
              document.write(new Date().getFullYear())
            </script>,
made with <i class="fa fa-heart"></i> by
<a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
for a better web.
</div>
</div>
<div class="col-lg-6">
<ul class="nav nav-footer justify-content-center justify-content-lg-end">
<li class="nav-item">
<a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
</li>
<li class="nav-item">
<a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
</li>
<li class="nav-item">
<a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
</li>
<li class="nav-item">
<a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
</li>
</ul>
</div>
</div>
</div>
</footer>
</div>
</div>

  </div>

  <div class="modal fade bd-example-modal-lg" id="form_view_details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container">
            <form  id="data_form" >
                @csrf
                <div style="padding-top: 5%;">

                    <fieldset>
                        <div class="row">
                            <div class=" col-md-6">
                                <h2>Applicant information</h2>
                            </div>



                        </div>

                        <div class="fieldset-content">
                            <div class="form-row" style="padding-top: 3%;">
                                <label class="form-label">Applicant Full name</label>

                                    <div class="form-group">
                                        <input type="text" name="full_name"  id="full_name" readonly/>

                                    </div>

                            </div>
                            <div style="padding-top: 1%;">
                            <label for="email" class="form-label">Address</label>
                            <div class="form-group">

                                <input type="text" name="address" id="address" readonly />

                            </div>
                        </div>
                        <div style="padding-top: 1%;">
                            <label for="email" class="form-label">Phone</label>
                            <div class="form-group">

                                <input type="text" name="phone" id="phone" readonly/>

                            </div>

                                <style>
                                  .form-group {
                                   border: 1px solid #ced4da;
                                   padding: 5px;
                                   border-radius: 6px;
                                   width: auto;
                                  }
                                  .form-group:focus {
                                   color: #212529;
                                   background-color: #fff;
                                   border-color: #86b7fe;
                                   outline: 0;
                                   box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
                                  }
                                  .form-group input {
                                   display: inline-block;
                                   width: auto;
                                   border: none;
                                  }
                                 .form-group input:focus {
                                  box-shadow: none;
                                 }
                               </style>
                               </div>
                               <div style="padding-top: 1%;">
                            <label for="ssn" class="form-label">NIC</label>
                            <div class="form-group">
                                <input id='nic' type="text" name="nic" readonly >


                            </div>
                        </div>
                        <div style="padding-top: 1%;">
                            <label for="email" class="form-label">Birth date</label>
                            <div class="form-group">

                                <input type="text" name="birthday" id="birthday" readonly/>

                            </div>
                        </div>



                                    <div class="row" style="padding-top: 3%; padding-left: 10px; padding-right: 10px;">

                                        <div class="form-group">
                                        <div class="col">
                                            <label for="email" class="form-label">Province</label>
                                            <input type="text" name="province" id="province" readonly/>

                                            <label for="email" class="form-label">District</label>
                                            <input type="text" name="district" id="district" readonly/>

                                            <label for="birth_date" class="form-label">Village Officer Division</label>
                                            <input type="text" name="village_officer" id="village_officer" readonly>



                                            <label for="birth_date" class="form-label">Prosperity zone</label>
                                            <input type="text" name="prosperity_zone" id="prosperity_zone" readonly>


                                            <label for="birth_date" class="form-label">Field Secretariat Division</label>
                                            <input type="text"  name="field_division" id="field_division" readonly>


                                        </div>
                                        </div>

                                    </div>



                                        <div class="row" style="padding-top: 3%; padding-right: 10px; ">
                                        <label for="proj" class="form-label">If you are currently benefiting from any welfare scheme,the name of the welfare scheme.</label>
                                        <div class="col">
                                        <div class="form-group">

                                            <input type="text" name="benefit" id="benefit" readonly />

                                        </div>
                                    </div>
                                            <div class="form-group">
                                            <input type="text" placeholder="Price" name="value" id="value" readonly>
                                            </div>

                                    </div>

                                    <div style="padding-top: 3%; ">
                                        <label for="proj" class="form-label">Total number of family members.</label>
                                        <div class="form-group">

                                            <input type="number" name="total_member" id="total_member" readonly>

                                        </div>

                                    </div>

                                    <div  style="padding-top: 3%; ">
                                        <label for="proj" class="form-label">If you are on the waiting list of any welfare scheme,name of those schemes.</label>
                                        <div class="form-group">
                                        <div class="col">

                                            <input type="text" name="suggest_one" id="suggest_one" readonly>

                                        </div>
                                    </div>
                                    <div style="padding-top: 5px;">
                                    <div class="form-group">
                                        <div class="col" >

                                            <input type="text"  name="suggest_two" id="suggest_two" readonly>
                                        </div>
                                    </div>
                                </div>
                                 </div>

                                    <div  style="padding-top: 3%; ">
                                        <label for="proj" class="form-label">Are you a new applicant?</label>
                                        <div class="form-group">
                                            <div class="col" >

                                                <input type="text"  name="user_check" id="user_check" readonly>
                                            </div>
                                        </div>
                                    </div>


                                    <div  style="padding-top: 3%; "  >
                                        <label for="proj" class="form-label">If you are on the waiting list of any welfare scheme,name of those schemes.</label>
                                        <div class="form-group">
                                        <div class="col">

                                            <input type="text" name="optional" id="optional" readonly>

                                        </div>
                                        </div>

                                    </div>

                                    </div>

                        </div>
                    </fieldset>
                    <span class="text-danger" id="span-error"></span>
                    <div style="padding-top: 3%; padding-bottom: 2%;" >
                    <button type="button" id="ok" class="btn btn-primary">OK</button>
                    </div>

                </div>
            </form>
        </div>
        </div>
      </div>
    </div>

  <!--   Core JS Files   -->

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->


  <script>

</script>
      <!-- Datatable plugin JS library file -->
      <script type="text/javascript" src=
      "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">

var table = $('#form_list').DataTable({

processing: true,
serverSide: true,
ajax: "{{ route('admin.formdata') }}",
columns: [
    {data: 'full_name', name: 'full_name'},
    {data: 'address', name: 'address'},
    {data: 'nic', name: 'nic'},
    {data: 'phone', name: 'phone'},
    {data: 'action', name: 'action',orderable: false, searchable: false},
]
});

$('body').on('click','.view',function(){


var id = $(this).data('id');

// get ajax data start
$.ajax({

url:'{{ url("admin/form",) }}' + '/'+ id + '/edit',
method:'GET',
success: function(response){

$('#form_view_details').modal('show');
 $('#full_name').val(response.full_name);
 $('#address').val(response.address);
 $('#phone').val("0"+response.phone);
 $('#nic').val(response.nic);
 $('#phone').val(response.phone);


 $('#field_division').val(response.field_division);
 $('#prosperity_zone').val(response.prosperity_zone);
 $('#village_officer').val(response.village_officer);
 $('#benefit').val(response.benefit);
 $('#value').val("LKR |"+""+response.value);
 $('#total_member').val(response.total_member);
 $('#suggest_one').val(response.suggest_one);
 $('#suggest_two').val(response.suggest_two);
 $('#optional').val(response.optional);
 $('#birthday').val(response.b_date);


 var newuser=response.user_check;
 if(newuser==1){
    $('#user_check').val('Yes');
 }
 else{
    $('#user_check').val('No');
 }


 var district=response.district;
 if(district == 52){
    $('#district').val('Ampara District');
 }
 if(district == 71){
    $('#district').val('Anuradhapura District');
 }
 if(district == 81){
    $('#district').val('Badulla District');
 }
 if(district == 51){
    $('#district').val('Batticaloa District');
 }
 if(district == 11){
    $('#district').val('Colombo District');
 }
 if(district == 31){
    $('#district').val('Galle District');
 }
 if(district == 12){
    $('#district').val('Gampaha District');
 }
 if(district == 33){
    $('#district').val('Hambantota District');
 }
 if(district == 41){
    $('#district').val('Jaffna District');
 }
 if(district == 13){
    $('#district').val('Kalutara District');
 }
 if(district == 21){
    $('#district').val('Kandy District');
 }
 if(district == 92){
    $('#district').val('Kegalle District');
 }
 if(district == 42){
    $('#district').val('Kilinochchi District');
 }
 if(district == 43){
    $('#district').val('Mannar District');
 }
 if(district == 22){
    $('#district').val('Matale District');
 }
 if(district == 32){
    $('#district').val('Matara District');
 }
 if(district == 82){
    $('#district').val('Monaragala District');
 }
 if(district == 45){
    $('#district').val('Mullaitivu District');
 }
 if(district == 23){
    $('#district').val('Nuwara Eliya District');
 }
 if(district == 72){
    $('#district').val('Polonnaruwa District');
 }
 if(district == 62){
    $('#district').val('Puttalam District');
 }
 if(district == 91){
    $('#district').val('Ratnapura district');
 }
 if(district == 53){
    $('#district').val('Trincomalee District');
 }
 if(district == 44){
    $('#district').val('Vavuniya District');
 }


 var province=response.province;
 if(province == 'ws'){
    $('#province').val('Western Province');
 }
 if(province == 'es'){
    $('#province').val('Eastern Province');
 }
 if(province == 'cp'){
    $('#province').val('Central Province');
 }
 if(province == 'sp'){
    $('#province').val('Southern Province');
 }
 if(province == 'sgp'){
    $('#province').val('Sabaragamuwa Province');
 }
 if(province == 'uva'){
    $('#province').val('Uva Province');
 }
 if(province == 'nwp'){
    $('#province').val('North Western Province');
 }
 if(province == 'ncp'){
    $('#province').val('North Central Province');
 }
 if(province == 'np'){
    $('#province').val('Northern Province');
 }




 $('#ok').click(function () {
      $('#form_view_details').modal('hide');

    });




},
error: function(error){
}
});
// ajax code end
});



</script>
</body>

</html>




@endsection
