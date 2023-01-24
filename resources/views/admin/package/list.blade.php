@extends('layouts.dashboard')
@section('content')
@include('flash-message')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Package List</h1>
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
                    <!-- <h3 class="card-title">Testimonial</h3> -->
                  </div>
                  <div class="col-sm-6" style="padding-left:29vw">
                    <a href="{{route('add_package')}}" class="btn btn-warning" >Create</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Made In</th>
                    <th>Tailor</th>
                    <th>Price</th>
                    <th>Link</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  @foreach($packages as $package)
                  <tr>
                    <td>{{$i++}}</td>
                    <td><img class="rounded-5 shadow-sm" src="{{'/frontend/package/'. $package->photo}}" alt="" width="150px" height="60px"/></td>
                    <td>{{$package->title}}</td>
                    <td>{{substr($package->description,0,20)}}</td>
                    <td>{{$package->made_in}}</td>
                    <td>{{$package->tailor}}</td>
                    <td>{{$package->price}}</td>
                    <td>{{$package->link}}</td>

                    <td>
                    <div style="
                        display: flex;
                    ">
                    <a type="button" class="btn btn-primary" href="{{route('edit_package',$package->id)}}" style="
                    width: 40%;
                      ">

                       <span class="fa fa-edit"></span>
                       </a>
                      <a type="button" onclick="delete_package_confirm('{{$package->id}}')" class="btn btn-block btn-danger" style="
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Made In</th>
                    <th>Tailor</th>
                    <th>Price</th>
                    <th>Link</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
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
    @include('layouts.package_popup')
{{-- edit modal --}}
@endsection

@push('datatables-scripts')
<script>
 $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "order": [[ 0, 'desc' ], [ 1, 'desc' ]],
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
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
    function delete_package_confirm(value){
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
                    url:'delete_package',
                    dataType:'json',
                    data:{
                      "_token": "{{ csrf_token() }}",
                      "package_id": value,
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
