@extends('backendblade.admin_master')
@section('content')
<section class="content-main">
<div class="row">
    <div class="col-9">
        <div class="content-header">
            <h2 class="content-title">Add new news</h2>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header">
                <h4>News</h4>
            </div>
            <div class="card-body">
                <form id="news_form">
                    @csrf
                    <div class="mb-4">
                        <label for="product_name" class="form-label">News Title</label>
                        <input type="text" placeholder="Type here" class="form-control" name="news_title" id="news_title" />
                    </div>

                    <div class="mb-4">
                        <label class="form-label">News description</label>
                        <textarea placeholder="Type here" name="news_description" class="form-control" id="news_description" rows="4"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="product_name" class="form-label">Image</label>
                        <input
                  type="file"
                  name="newsimage"
                  id="newsimage"
                  class="form-control">
                    </div>


                    <div>
                        <span class="text-danger" id="image-input-error"></span>
                        <button type="button" class="btn btn-md rounded font-sm hover-up" id="add">Upload</button>
                    </div>


            </div>
        </div>

    </div>

</div>
</div>
</form>



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
  <table class="table" id="form_news_list">
  <thead >
  <tr>
  <th>Id</th>
  <th>News Title</th>
  <th>News Description</th>
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

<div class="modal fade bd-example-modal-lg" id="news_view_form_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container">
            <form  id="news_view_form" >
                @csrf
                <input type="hidden" class="form-control clear_input" name="id"  id="update_id"  >
                <label for="email" class="form-label">News Title</label>
                <div class="form-group">
                    <input class="form-control" name="news_title" id="nt" cols="30" rows="2" ></textarea>

                </div>
                <label>News description</label>
                <textarea class="form-control" name="news_description" id="nd" cols="30" rows="4" ></textarea>

                    </fieldset>


                    <span class="text-danger" id="span-error"></span>
                    <div style="padding-top: 3%; padding-bottom: 2%;" >
                    <button type="button" id="ok" class="btn btn-primary">OK</button>
                    <button type="button" id="update" class="btn btn-primary">Update</button>
                    </div>



                </div>
            </form>
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



      <!-- Datatable plugin JS library file -->
      <script type="text/javascript" src=
      "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">

var table = $('#form_news_list').DataTable({

processing: true,
serverSide: true,
ajax: "{{ route('admin.newsdata') }}",
columns: [
    {data: 'id', name: 'id'},
    {data: 'news_title', name: 'news_title'},
    {data: 'news_description', name: 'news_description'},
    {data: 'action', name: 'action',orderable: false, searchable: false},
]
});

$('body').on('click','.delete',function(){


var id = $(this).data('id');

// get ajax data start
$.ajax({

url:'{{ url("admin/news",) }}' + '/'+ id + '/delete',
method:'GET',
success: function(response){
    Swal.fire(
               'Deleted!',
               'You clicked the button!',
               'success'
                )

$('#form_news_list').DataTable().ajax.reload();
},
error: function(error){
}
});
// ajax code end
});



$('body').on('click','.view',function(){

var id = $(this).data('id');

// get ajax data start
$.ajax({

url:'{{ url("admin/news/first",) }}' + '/'+ id + '/view',
method:'GET',
success: function(response){

$('#news_view_form_data').modal('show');
console.log(response);
$('#nt').val(response.news_title);
 $('#nd').val(response.news_description);

 $('#update_id').val(response.id);

},
error: function(error){
}
});
// ajax code end
});

$('#ok').click(function () {
      $('#news_view_form_data').modal('hide');

    });

    $('#update').click(function () {


        var news_update = $('#news_view_form')[0];
          var news_update_ajax = new FormData(news_update);

          $.ajax({
            type:'POST',
            url: "{{ route('admin.updatenews') }}",
             data: news_update_ajax,
             contentType: false,
             processData: false,
             success: (response) => {
               if (response) {
                console.log("cllickde");
                $('#news_view_form_data').modal('hide');
                $('#image-input-error').text('');
                $('#form_news_list').DataTable().ajax.reload();
               }

             },
             error: function(response){
                $('#loading').modal('hide');
                $('#image-input-error').text(response.responseJSON.message);
             }
         })


    });



let btn = document.getElementById("add");
    btn.addEventListener('click', event => {
        $('#loading').modal('show');
          var news_form = $('#news_form')[0];
          var news_form_ajax = new FormData(news_form);

          $.ajax({
            type:'POST',
            url: "{{ route('admin.ajaxaddnews') }}",
             data: news_form_ajax,
             contentType: false,
             processData: false,
             success: (response) => {
               if (response) {
                console.log("cllickde");
                $('#loading').modal('hide');
                $('#news_form')[0].reset();
                Swal.fire(
               'Uploaded!',
               'You clicked the button!',
               'success'
                )
                $('#image-input-error').text('');
                $('#form_news_list').DataTable().ajax.reload();
               }

             },
             error: function(response){
                $('#loading').modal('hide');
                $('#image-input-error').text(response.responseJSON.message);
             }
         })
         .always(function() {

      });


     console.log("clickde");



    });





</script>
</body>

</html>




@endsection
