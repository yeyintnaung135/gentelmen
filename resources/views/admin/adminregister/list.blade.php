@extends('layouts.dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin List</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- <h3 class="card-title">Admin</h3> -->
                  </div>
                  <div class="col-sm-6" style="padding-left:30vw">
                    <a href="{{route('create_admin_register')}}" class="btn btn-warning" >Create</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="superAdminTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                      <th>Created Date</th>
                    </tr>
                    </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   

@endsection

@push('datatables-scripts')
<script>
  var superAdminTable = $('#superAdminTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                'url': "{{ route('getAllAdmins') }}",
            },
            columns: [
              {data: 'id'},
              {data: 'name'},
              {data: 'email'},
              {
                data: 'id',
                render: function (data, type, row) {
                  if(`{{Auth::guard('admin')->user()->id }}` == data){
                    var result = `<div style="display: flex;">  
                                      <a type="button" class="btn btn-primary"  href="{{route('edit_admin',':id')}}" style="
                                          width: auto; ">
                                      <span class="fa fa-edit"></span>
                                      </a>
                                  </div>`;
                  } else {
                    var result = ``;
                  }
                  
                  result = result.replace(':id', data);
                  return result;
                }
              },
              {data: 'created_at'}
            ],
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            paging: true,
            dom: 'Blfrtip',
            buttons: ["copy", "csv", "excel", "pdf", "print"],
            columnDefs: [
                {responsivePriority: 1, targets: 1},
                {responsivePriority: 2, targets: 2},
                {responsivePriority: 3, targets: 3},
                {responsivePriority: 4, targets: 4},
                {
                    'targets': [3],
                    'orderable': false,
                },
            ],
            language: {
                "search": '<i class="fa fa-search"></i>',
                "searchPlaceholder": 'Search',
                paginate: {
                    next: '<i class="fa fa-angle-right"></i>', // or '→'
                    previous: '<i class="fa fa-angle-left"></i>' // or '←'
                }
            },

            "order": [[4, "desc"]],
        });
</script>
@endpush
@push('input-file-scripts')
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endpush
@section('js')
<script>
    function delete_banner_confirm(value){
        // alert(value);
        swal({
                title: "Are You Sure Delete",
                icon:'warning',
                buttons: ["No", "Yes"]
            })

          .then((isConfirm)=>{

            if(isConfirm){

                $.ajax({
                    type:'POST',
                    url:'delete_admin_register',
                    dataType:'json',
                    data:{
                      "_token": "{{ csrf_token() }}",
                      "admin_id": value,
                    },

                    success: function(){

                        swal({
                            title: "Success!",
                            text : "Successfully Deleted!",
                            icon : "success",
                        });

                        setTimeout(function(){window.location.reload()}, 1000);


                    },
                });
            }
          });
    }

    // swal({
    //     title: "Your Item was uploaded successfully!",
    //     text: "",
    //     type: "success",
    //     icon: "success"
    // })
</script>

<!-- @if (Session::has('success')) -->
<!-- @endif -->
@endsection



@push('alert-script')
<!-- @if (session()->has('success'))
<script>
   swal({
        title: "Your Item was uploaded successfully!",
        text: "",
        type: "success",
        icon: "success"
    })
</script>
@endif -->
@if (session('success'))
    <script>
        $( document ).ready(function(){
          swal({
        title: "Your Item was uploaded successfully!",
        text: "",
        type: "success",
        icon: "success"
       })
        });
    </script>
@endif
@endpush



