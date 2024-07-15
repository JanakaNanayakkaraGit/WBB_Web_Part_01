@extends('backendblade.admin_master')
@section('content')
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Add New Content</h2>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Main content</h4>
                </div>
                <div class="card-body">
                    <form id="home_content">
                        @csrf
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Main Title</label>
                            <input type="text" placeholder="Type here" class="form-control" name="m_title" id="m_title" />
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Vedio Title</label>
                            <input type="text" name="v_title" placeholder="Type here" class="form-control" id="v_title" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Vedio description</label>
                            <textarea placeholder="Type here" name="v_description" class="form-control" id="v_description" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Media</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">

                                        <input
                                  type="file"
                                  name="img_one"
                                  id="inputimgone"
                                  class="form-control">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">

                                        <input
                                  type="file"
                                  name="img_two"
                                  id="inputimgtwo"
                                  class="form-control">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">

                                        <input
                                  type="file"
                                  name="img_three"
                                  id="inputimgthree"
                                  class="form-control">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">

                                        <input
                                  type="file"
                                  name="img_four"
                                  id="inputimgfour"
                                  class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>
                            <span class="text-danger" id="image-input-error"></span>
                            <button type="button" class="btn btn-md rounded font-sm hover-up" id="add">Publish</button>
                        </div>


                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Video</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">

                        <input
                  type="file"
                  name="video"
                  id="video"
                  class="form-control">
                    </div>
                </div>

            </div>

        </div>
    </div>
</form>

<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
<div class="modal" style="background: none !important;" id="loading" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="background: none !important;">
      <div class="modal-content" style="background: none !important; border: none;">
        <div class="modal-body" style="background: none !important; text-align: center;">
          <div class="spinner-border text-primary" role="status">
              <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">

      let btn = document.getElementById("add");
    btn.addEventListener('click', event => {
        $('#loading').modal('show');
          var create_content = $('#home_content')[0];
          var create_content_ajax = new FormData(create_content);

          $.ajax({
            type:'POST',
            url: "{{ route('admin.ajaxaddcontent') }}",
             data: create_content_ajax,
             contentType: false,
             processData: false,
             xhr: function() {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener("progress", function(e) {
            if (e.lengthComputable) {
              var percentage = Math.round((e.loaded / e.total) * 100);
              $('.progress .progress-bar').css("width", percentage + '%').attr("aria-valuenow", percentage);
            }
          }, false);
          return xhr;
        },
             success: (response) => {
               if (response) {
                console.log("cllickde");
                $('#loading').modal('hide');
                $('#home_content')[0].reset();
                Swal.fire(
               'Uploaded!',
               'You clicked the button!',
               'success'
                )
                $('#image-input-error').text('');
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
@endsection
