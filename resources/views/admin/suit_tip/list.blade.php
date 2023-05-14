@extends('layouts.dashboard')

@section('content')
@include('flash-message')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Suit Tip List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6" style="padding-left: 33vw">
            <a  href="{{route('add_suit_tip')}}" type="button" class="btn btn-primary">Create</a>
          </div>
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
              {{-- <div class="card-header">
                <div class="row">
                  <div class="col-sm-6">
                    <h3 class="card-title">Additional</h3>
                  </div>
                  <div class="col-sm-6" style="padding-left:30vw">
                    <a href="{{route('add_pant_pleat')}}" class="btn btn-info" >Create</a>
                  </div>
                </div>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <table id="suitTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Photo</th>
                      <th>Brand</th>
                      <th>Headline</th>
                      <th>Description</th>
                      <th>Feature</th>
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


{{-- edit modal --}}
@endsection

@push('datatables-scripts')
<script>
  var suitTable = $('#suitTable').DataTable({
           processing: true,
           serverSide: true,
           ajax: {
               'url': "{{ route('getAllSuits') }}",
           },
           columns: [
             {data: 'id'},
             {
               data: 'photo',
               render: function (data, type, row) {
                 var result = `<img class="rounded-5 shadow-sm" src="{{'/assets/images/suit_tip/'. ':photo'}}" alt="" width="100px" height="60px"/>`;
                 result = result.replace(':photo', data);
                 return result;
               }
             },
             {data: 'brand'},
             {data: 'title'},
             {
                data: 'description',
                render: function (data, type, row) {
                  var result = data.substring(0, 20);
                  return result + '...';
                }
             },
             {data: 'feature'},
             {
               data: 'id',
               render: function (data, type, row) {
                  var result = `<div style="
                                    display: flex;
                                ">
                                  <a type="button" class="btn btn-primary" href="{{route('edit_suit_tip',':id')}}" style="
                                      width: 40%;
                                  ">

                                  <span class="fa fa-edit"></span>
                                  </a>
                                  <a type="button" onclick="delete_confirm(${data})" class="btn btn-block btn-danger" style="
                                      width: 40%;
                                      margin-top: 0rem;
                                      margin-left: 0.3rem;
                                  "><span class="fa fa-trash"></span></a>
                                </div>`;
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
               {
                   'targets': [5],
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

           "order": [[6, "desc"]],
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
    function delete_confirm(value){
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
                    url:'delete_suit_tip',
                    dataType:'json',
                    data:{
                      "_token": "{{ csrf_token() }}",
                      "suit_tip_id": value,
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
</script>

@endsection
