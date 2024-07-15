@extends('backendblade.admin_master')
@section('content')
<section class="content-main">
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Programes Management</h2>
        <p>You can manage programes here   </p>
    </div>
</div>

<div class="row">
    <div class="col-12 ">
        <div class="card" >
     <div class="card-header d-flex justify-content-between align-items-center">
          Create Program
          <a href="#program_list" style="color: red">Programes List</a>
        </div>  
            <div class="card-body">
                  <form id="create_program_form">
                     <div class="row mb-2">
                     <div class="col-12">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control input clear_input"  name="title" id="title"   placeholder="Enter Program Title">
                            <span id="title_error" class="text-danger clear_form_error">    </span>
                        </div>
                     </div>
                     </div>
                     <div class="row mb-2">
                      <div class="col-12">
                         <div class="form-group mb-2">
                          <label for="exampleInputEmail1">End Date</label>
                             <input type="datetime-local" class="form-control input clear_input"  name="end_date" id="end_date" placeholder="Select a date" >
                             <span id="end_date_error" class="text-danger clear_form_error">    </span>
                         </div>
                      </div>
                      </div>
                     <div class="row mb-2">
                      <div class="col-12">
                      <div class="form-group mb-2">
                      <input type="file" class="form-control input clear_input dropify" data-height="95"  name="program_image" id="program_image" data-allowed-file-extensions="jpeg png jpg gif" data-max-file-size-preview="5M"  placeholder="Program Image">
                      <span id="program_image_error" class="text-danger clear_form_error">    </span>
                     </div>
                     </div>
                     </div>
                        <div class="row">
                        <hr class="width:8px !important;">    
                          <div class="col-4">
                         <div class="form-group mb-2">
                        <div class="col-12"> <input type="checkbox" class="mr-2"  name="target" required   id="target"  data-toggle="toggle" data-on="Target Program(Yes)" data-off="Target Program(No)" data-onstyle="success" data-offstyle="danger" data-width="200" data-height="30"> </div>
                          </div>
                       </div>
                        <hr class="width:8px !important;"> 
                       </div>
                    <button type="button" id="create_program_btn" class="btn btn-primary mt-1">Create</button>
                  </form>
            </div>
          </div>
    </div>
    {{-- end create new admin   --}}
    <div class="col-12 ">
      {{-- table for view update delete admins  --}}
        <div class="card">
        <div class="card-header">
          Program list
        </div>
        <div class="card-body m-1">
      <table id="program_list" class="table table-striped">
        <thead>
          <tr>
            <th >ID</th>
            <th >Title</th>
            <th >Is Target</th>
            <th >Image</th>
            <th >Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
        </table>
        </div>
      </div>
      {{-- end table for view update delete admins --}}
    </div>
</div>

{{-- project edit modal start  --}}
<div class="modal fade" id="edit_project_details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Program Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{-- form start   --}}
      <form id="update_program_form">
        <input type="hidden" class="form-control clear_input" name="id"  id="edit_id"  >

        <div class="form-group">
          <label >Title</label>
          <input type="text" class="form-control clear_input" name="title"  id="edit_title"  >
          <span id="edit_title_error" class="text-danger clear_form_error"></span>
        </div>

        <div class="form-group">
          <label >End Date</label>
          <input type="datetime-local" class="form-control clear_input" name="end_date"  id="edit_end_date"  >
          <span id="edit_end_date_error" class="text-danger clear_form_error"></span>
        </div>

        <div class="form-group mt-2">
          <div class="row">
            <div class="col-12"> <input type="checkbox" class="mr-2"  name="target_edit" required    id="target_edit"  data-toggle="toggle" data-on="Target Program(Yes)" data-off="Target Program(No)" data-onstyle="success" data-offstyle="danger" data-width="150" data-height="45"> </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group" id="dropify_image_edit">
              <label >Program image</label>
              <input type="file" data-height="95" class="form-control input clear_input dropify "   name="program_image_edit" id="program_image_edit"   placeholder="Enter Project Name" data-allowed-file-extensions="jpeg png jpg gif" data-max-file-size-preview="5M" >
              <span id="program_image_edit_error" class="text-danger clear_form_error"></span>
            </div>
          </div>
            <div class="col-6">
              <label >Current Image</label>
              <div id="display_new_image_edit">
              </div>
            </div >
        </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="update_program_btn" class="btn btn-primary">Save changes</button>
      </form>
      {{-- form end   --}}
          </div>
        </div>
      </div>
    </div>

  </section>
        {{-- category edit modal end  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        $('#program_list').DataTable({   
            processing: true,
            serverSide: true,
            ajax:'{!! route('admin.programes.recieveData') !!}',
            
            columns: [
                { data: 'id', name: 'id'},
                { data: 'title', name: 'title'},
                { data: 'target', name: 'target'},
                { data: 'image', name: 'image'},
                { data: 'action', name: 'action'},  
            ]
        
        });

      $('#edit_description').summernote({
      height:200,
      placeholder: 'write here...',
      toolbar: [
    // [groupName, [list of button]]
    ['style', [  'underline', 'clear']],
    ]
      }); //add summernote to edit_description

      
      $('.dropify').dropify({
        messages: {
        'default': 'Drag and drop a program image here or click',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
      });//add dropify to image

    //  create project start 
    $('#create_program_btn').click(function() { 
    document.getElementById("create_program_btn").disabled = true;
    $('.clear_form_error').html(''); 
    
    // to get csrf
    var project = $('#create_program_form')[0];
    var project_ajax = new FormData(project); // get form data
    // ajax post start 
    $.ajax({

    url:"{{ route('admin.program.create') }}",
    method:"POST",
    processData: false,
    contentType: false,
    data:project_ajax,
    success: function(response){ 
    console.log(response);   
    document.getElementById("create_program_btn").disabled = false;
 
    var drEvent = $('.dropify').dropify();
    drEvent = drEvent.data('dropify');
    drEvent.resetPreview(); 
    drEvent.clearElement(); 

    if(response.code == "true"){
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
    $('#program_list').DataTable().ajax.reload();
    
    },

    error:function(error){
    document.getElementById("create_program_btn").disabled = false;
    $('#end_date_error').html(error.responseJSON.errors.end_date);
    $('#title_error').html(error.responseJSON.errors.title);
    $('#program_image_error').html(error.responseJSON.errors.program_image);

    }
    });
     });
    //create project end

    //  delete button start
   $('body').on('click','.delete',function(){

    var id = $(this).data('id');
   
    if(confirm("Are you sure you want to delete record ? ")){
    $.ajax({
    url:'{{ url("admin/Programes",) }}' + '/'+ id + '/delete',
    method:'GET',
    success: function(response){
    if(response.code == "true"){
    Swal.fire({
    icon: 'success',
    text: response.msg,
    })
    }
    if(response.code == "false"){
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: response.msg,
    })
    }
    $('#program_list').DataTable().ajax.reload();
      },
      error: function(error){  
      }
      });
    }
      // ajax code end
      });
        // delete button end

  //  Start edit button 
  $('body').on('click','.edit',function(){

    var drEvent = $('#program_image_edit').dropify();
    drEvent = drEvent.data('dropify');
    drEvent.resetPreview();
    drEvent.clearElement();

    $('.clear_form_error').html(''); 
    var id = $(this).data('id');

    $.ajax({
    url:'{{ url("admin/program",) }}' + '/'+ id + '/edit',
    method:'GET',
    success: function(response){
    console.log(response);
    $('#edit_id').val(response.id);
    $('#edit_title').val(response.title);
    $('#client_name_edit').val(response.pro_client_name);
    $('#edit_end_date').val(response.end_date);

    //start status of projects 
    if(response.target == 0){
    $('#target_edit').bootstrapToggle('off');
    }
    else{
    $('#target_edit').bootstrapToggle('on');
    }
     //end status of projects 

     var display_image =  document.getElementById('display_new_image_edit');
     var img  = '';
     img+='<img  style="height:100px;  object-fit: cover;" src="{{ asset('backend/assets/Programes/')}}/' +response.program_image+ '" alt="">';
     display_image.innerHTML = img; 
     
     $('#edit_project_details').modal('show');
  
   },
   error: function(error){  
   }
   });
   // ajax code end
   });
  //  end edit button 

  //  start post updated form 
  $('#update_program_btn').click(function() { 
    $('.clear_form_error').html('');
    document.getElementById("update_program_btn").disabled = true;
     
    // to get csrf
    var program_data = $('#update_program_form')[0];
    var program_data_ajax = new FormData(program_data); // get form data

            // ajax post start 
            $.ajax({
    url:"{{ route('admin.program.update') }}",
    method:"POST",
    processData: false,
    contentType: false,
    data:program_data_ajax,
    success: function(response){  
    document.getElementById("update_program_btn").disabled = false;

    // var drEvent = $('#project_image_edit').dropify();
    // drEvent = drEvent.data('dropify');
    // drEvent.resetPreview();
    // drEvent.clearElement();

    if(response.code == "true"){
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
    $('#edit_project_details').modal('hide');
    $('.clear_input').val('');
    $('.clear_form_error').html('');
    $('#program_list').DataTable().ajax.reload();
    },

    error:function(error){
    document.getElementById("update_program_btn").disabled = false;
    $('#edit_title_error').html(error.responseJSON.errors.title);
    $('#edit_end_date_error').html(error.responseJSON.errors.end_date);
    $('#program_image_edit_error').html(error.responseJSON.errors.program_image_edit);
  
    }
    });
    });

  //  end post updated form 


      }); 
    </script>
  


@endsection






























