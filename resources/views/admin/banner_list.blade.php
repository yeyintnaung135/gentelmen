@extends('layouts.dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Banner List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6" style="padding-left:30vw">
            <a href="{{route('create_banner')}}" class="btn btn-info">Create</a>
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
              {{-- <div class="card-header">
                <div class="row">
                  <div class="col-sm-6">
                    <h3 class="card-title">Banner</h3>
                  </div>
                  <div class="col-sm-6" style="padding-left:29vw">
                    <a href="{{route('create_banner')}}" class="btn btn-warning" >Create Banner</a>
                  </div>
                </div>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bannerTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Photo</th>
                      <th>Text</th>
                      <th>Button Text</th>
                      <th>Action</th>
                      <th>Created Date</th>
                    </tr>
                    </thead>
                </table>
                {{-- <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Text</th>
                    <th>Button Text</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  @foreach($banners as $banner)
                  <tr>
                    <td>{{$i++}}</td>
                    <td><img class="rounded-5 shadow-sm" src="{{'/frontend/images/'. $banner->photo}}" alt="" width="150px" height="60px"/></td>
                    <td>{{$banner->text}}</td>
                    <td>{{$banner->button_text}}</td>
                    <td>
                    <div style="
                        display: flex;
                    ">
                       <a type="button" class="btn btn-primary" href="{{route('edit_banner',$banner->id)}}" style="
                          width: 40%;
                      ">

                       <span class="fa fa-edit"></span>
                       </a>
                      <a type="button" onclick="delete_banner_confirm('{{$banner->id}}')" class="btn btn-block btn-danger" style="
                          width: 40%;
                          margin-top: 0rem;
                          margin-left: 0.3rem;
                      "><span class="fa fa-trash"></span></a>
                    </div>

                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Text</th>
                    <th>Button Text</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table> --}}
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
    @include('layouts.banner_popup')
{{-- edit modal --}}
@endsection

@push('datatables-scripts')
<script>
   var bannerTable = $('#bannerTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                'url': "{{ route('getAllBanners') }}",
            },
            columns: [
              {data: 'id'},
              {
                data: 'photo',
                render: function (data, type, row) {
                  var result = `<img class="rounded-5 shadow-sm" src="{{'/frontend/images/'. ':photo'}}" alt="" width="150px" height="60px"/>`;
                  result = result.replace(':photo', data);
                  return result;
                }
              },
              {data: 'text'},
              {data: 'button_text'},
              {
                data: 'id',
                render: function (data, type, row) {
                var result = `<div style="
                                  display: flex;
                              ">
                                  <a type="button" class="btn btn-primary" href="{{route('edit_banner',':id')}}" style="
                                    width: 40%;
                                ">

                                  <span class="fa fa-edit"></span>
                                  </a>
                                <a type="button" onclick="delete_banner_confirm(${data})" class="btn btn-block btn-danger" style="
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
                    'targets': [4],
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

            "order": [[5, "desc"]],
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
                    url:'delete_banner',
                    dataType:'json',
                    data:{
                      "_token": "{{ csrf_token() }}",
                      "banner_id": value,
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



