@extends('backendblade.admin_master')
@section('content')

<style>
    /* Custom button style */
    .custom-button {
      background-color: #0e920e; /* Green background color */
      color: #FFFFFF; /* White text color */
      border-radius: 10px; /* Rounded corners */
      padding: 10px 20px; /* Padding around the text */
      font-size: 16px; /* Font size */
      transition: background-color 0.3s ease; /* Transition for click effect */
    }

    /* Click effect */
    .custom-button:hover {
      background-color: #6fda6f; /* Darker green background color on hover */
      cursor: pointer; /* Change cursor to pointer on hover */
    }
  </style>
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Publications</h2>
            <p>You can manage publications here</p>
        </div>
        <div>
        </div>
    </div>
                     <!-- card end// -->
                     <div class="row">
                     <div class="card mb-4 col-3">
                        <div class="card-header">
                            <h4>Create Record</h4>
                        </div>
                        <div class="card-body">
                            <form id="publication_form">
                                <div class="mb-4">
                                    <label class="form-label">Title</label>
                                    <input type="text" placeholder="Enter Here" name="title" class="form-control clear_input" id="title" />
                                    <span id="title_error" class="clear_form_error mt-1" style="color: red"></span>
                                </div>
                                <div class="mb-4">
                                    <label for="pdf" class="form-label">Pdf</label>
                                    <input type="file" class="form-control input clear_input dropify" data-height="95"  name="pdf" id="pdf"  >
                                    <span class="clear_form_error mt-1" style="color: red" id="pdf_error"></span>
                                </div>
                                <a id="create_record" class="btn custom-button">Create</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="table-responsive">
                                        <table id="publications_types" class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="align-middle" scope="col">ID</th>
                                                    <th class="align-middle" scope="col">Title</th>
                                                    <th class="align-middle" scope="col">Pdf</th>
                                                    <th class="align-middle" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- table-responsive end// -->
                            </div>
                        </div>
                    </div>

    {{--modal start  --}}
    <div class="modal fade" id="edit_publication_details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Publication Details</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        {{-- form start   --}}
        <form id="update_publication_form">
  
          <input type="hidden" class="form-control clear_input" name="id"  id="update_id"  >
          <div class="form-group">
            <label >Title </label>
            <input type="text" class="form-control clear_input" name="title"  id="edit_title"  >
            <span id="title_edit_error" class="text-danger clear_form_error"></span>
          </div>
  
          <div class="row">
            <hr style="margin-top: 8px !important;">
            <label class="mb-1 text-center">Publication Pdf</label>
            <hr>
            <div class="col-12">
              <label class="mb-1"></label>
              <div class="form-group" id="dropify_image">
                <input type="file" data-height="110" class="form-control input clear_input dropify "   name="pdf" id="pdf_edit"  data-max-file-size-preview="20M"   >
                <span id="pdf_edit_error" class="text-danger clear_form_error"></span>
              </div>
            </div >
          </div>
          <hr>
  
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="update_publication_btn" class="btn btn-primary">Save changes</button>
  
        </form>
        {{-- form end   --}}
            </div>
          </div>
        </div>
      </div>
      {{-- modal  --}}
               
                    <!-- card end// -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
                    <script> 
                        $(document).ready(function() { 
                            $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });  //ajax setup
                  
                        //  view data on table start 
                          $('#publications_types').DataTable({   
                              processing: true,
                              serverSide: true,
                              ajax: '{!! route('admin.publication.recieveData') !!}',
                              
                              columns: [
                                  { data: 'id', name: 'id'},
                                  { data: 'title', name: 'title'},
                                  { data: 'pdf', name: 'pdf'},
                                  { data: 'action', name: 'action'},  
                              ]
                          
                          });
                        $('.dropify').dropify({
                          messages: {
                          'default': 'Drag and drop a Pdf here or click',
                          'replace': 'Drag and drop or click to replace',
                          'remove':  'Remove',
                          'error':   'Ooops, something wrong happended.'
                        }
                        });//add dropify to image
                  
                      //  create project start 
                      $('#create_record').click(function() { 
                          document.getElementById("create_record").disabled = true; //enable button after click it
                          $('.clear_form_error').html(''); 
                      
                      // to get csrf
                      var publication_data = $('#publication_form')[0];
                      var publication_data_ajax = new FormData(publication_data); // get form data
                  
                        Swal.fire({
                        title: 'Please wait...',
                        allowOutsideClick: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                        });
                              // ajax post start 
                              $.ajax({
                      url:"{{ route('admin.publication.create') }}",
                      method:"POST",
                      processData: false,
                      contentType: false,
                      data:publication_data_ajax,
                      success: function(response){  
                      var drEvent = $('.dropify').dropify();
                      drEvent = drEvent.data('dropify');
                      drEvent.resetPreview(); 
                      drEvent.clearElement(); 

                      document.getElementById("create_record").disabled = false; //enable button after click it      
                      if(response.code=="true"){
                      Swal.fire({
                      title: 'Success!',
                      icon: 'success',
                      text: response.msg,
                      confirmButtonText: 'OK'
                      })
                      }
                      else{
                        Swal.fire({
                                      title: 'Error!',
                                      text: response.msg,
                                      icon: 'error',
                                      confirmButtonText: 'OK'
                      })//display error msg
                      }
                  
                      $('.clear_input').val('');
                      $('.clear_form_error').html('');
                    //   Swal.close(); // Close the SweetAlert
                      $('#publications_types').DataTable().ajax.reload();
                      },
                      error:function(error){
                      Swal.close(); // Close the SweetAlert
                      // display validations in created slider 
                      $('#pdf_error').html(error.responseJSON.errors.pdf);
                      $('#title_error').html(error.responseJSON.errors.title);
                      document.getElementById("create_record").disabled = false; //enable button after click it
                      }
                      });
                       });
                      //create slider end
                        });


                   $('body').on('click','.view',function(){

                      var id = $(this).data('id');
                      let url = '{{ url('admin/publication/nextPage') }}'+'/'+id;
                      window.open(url, '_blank');
                    }); 
                        
                   $('body').on('click','.edit',function(){

                    var drEvent = $('#pdf_edit').dropify();
                    drEvent = drEvent.data('dropify');
                    drEvent.resetPreview();
                    drEvent.clearElement();


                    var id = $(this).data('id');
                    $.ajax({
                    url:'{{ url("admin/publication",) }}' + '/'+ id + '/edit',
                    method:'GET',
                    success: function(response){


            
                    $('#update_id').val(response.id);
                    $('#edit_title').val(response.title);
                    $('#edit_publication_details').modal('show');
               
                        },
                            error: function(error){  
                        }
                        });
                    // ajax code end
                    });  
                    
                    $('body').on('click','.delete',function(){

                    var id = $(this).data('id');
                    console.log(id);

                    var confirmed = confirm('Are you sure you want to delete this item?');
                    if (confirmed) {
                    $.ajax({
                        url:'{{ url("admin/publication",) }}' + '/'+ id + '/delete',
                        method:'GET',
                        success: function(response){
                          if(response.code == "true"){
                          Swal.fire({
                          title: 'Success!',
                          icon: 'success',
                          text: response.msg,
                          confirmButtonText: 'OK'
                          })
                          }
                          if(response.code == "false"){
                          Swal.fire({
                          title: 'Success!',
                          icon: 'success',
                          text: response.msg,
                          confirmButtonText: 'OK'
                          })
                          }
                          $('#publications_types').DataTable().ajax.reload();
                            },
                                error: function(error){  
                            }
                            });
                        // ajax code end

                          }
                        }); 
            
            //    update data start   
            $('#update_publication_btn').click(function(){
       
            document.getElementById("update_publication_btn").disabled = true;       
            $('.clear_form_error').html(''); 
                 
             // to get csrf
             var publication_edit_data = $('#update_publication_form')[0];
             var publication_edit_data_ajax = new FormData(publication_edit_data); // get form data
         
                     // ajax post start 
             $.ajax({
             url:'{{ route('admin.publication.update') }}',
             method:"POST",
             processData: false,
             contentType: false,
             data:publication_edit_data_ajax,
             success: function(response){ 
             console.log(response); 
             $('#edit_publication_details').modal('hide');  
             document.getElementById("update_publication_btn").disabled = false;                     
             if(response.code == "true"){
             Swal.fire({
             title: 'Success!',
             icon: 'success',
             text: response.msg,
             confirmButtonText: 'OK'
             })
             }
             if(response.code == "false"){
             Swal.fire({
             title: 'Success!',
             icon: 'success',
             text: response.msg,
             confirmButtonText: 'OK'
             })
             }
             $('.clear_input').val('');
             $('.clear_form_error').html('');
             $('#publications_types').DataTable().ajax.reload();
             },
             error:function(error){
             document.getElementById("update_publication_btn").disabled = false; 
             // display validations in created admin 
             $('#title_edit_error').html(error.responseJSON.errors.title);
             $('#pdf_edit_error').html(error.responseJSON.errors.pdf);
             }
             });     
             });
    //    update data end 

            </script>



</section>

@endsection












































