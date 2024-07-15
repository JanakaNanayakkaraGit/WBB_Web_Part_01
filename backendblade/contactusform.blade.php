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
  <table class="table" id="contact_list">
  <thead >
  <tr>
  <th>Name</th>
  <th>Email</th>
  <th>Message</th>
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
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="4" ></textarea>
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

var table = $('#contact_list').DataTable({

processing: true,
serverSide: true,
ajax: "{{ route('admin.contactdata') }}",
columns: [
    {data: 'name', name: 'name'},
    {data: 'email', name: 'email'},
    {data: 'message', name: 'message'},
    {data: 'action', name: 'action',orderable: false, searchable: false},

]
});



$('body').on('click','.view',function(){


var id = $(this).data('id');

// get ajax data start
$.ajax({

url:'{{ url("admin/contact/form",) }}' + '/'+ id + '/view',
method:'GET',
success: function(response){

$('#form_view_details').modal('show');
 $('#message').val(response.message);


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
