@extends('layouts.dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pant Measurement List</h1>
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
                    <h3 class="card-title">Additional</h3>
                  </div>
                  <div class="col-sm-6" style="padding-left:30vw">
                    <a href="{{route('add_main_additional')}}" class="btn btn-info" >Create</a>
                  </div>
                </div>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Customer</th>
                    {{-- <th>Name</th> --}}

                    <th>Crotch</th>
                    <th>Thights</th>
                    <th>Length</th>
                    <th>Bottom</th>
                    <th>Knee</th>

                    <th>Stomach</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($lowers as $lower)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$lower->user->name}}</td>
                      {{-- <td>{{$lower->pant_id}}</td> --}}

                      <th>{{$lower->crotch}}{{$lower->measure_type}}</th>
                      <th>{{$lower->thighs}}{{$lower->measure_type}}</th>
                      <th>{{$lower->length}}{{$lower->measure_type}}</th>
                      <th>{{$lower->bottom}}{{$lower->measure_type}}</th>
                      <th>{{$lower->knee}}{{$lower->measure_type}}</th>

                      <th>{{$lower->stomach}}cm</th>
                      <td>
                      <div style="
                          display: flex;
                      ">
                         <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary{{$lower->id}}" style="
                            width: 40%;
                        ">

                         <span class="fa fa-edit"></span>
                         </a>
                        <a type="button" onclick="delete_confirm('{{$lower->id}}')" class="btn btn-block btn-danger" style="
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
                    <th>Customer</th>
                    {{-- <th>Name</th> --}}

                    <th>Crotch</th>
                    <th>Thights</th>
                    <th>Length</th>
                    <th>Bottom</th>
                    <th>Knee</th>

                    <th>Stomach</th>
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
    @include('layouts.lower_measure_popup')


{{-- edit modal --}}
@endsection

@push('datatables-scripts')
<script>
 $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "order": [[0,'desc'],[1,'desc']],
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
                    url:'delete_lower',
                    dataType:'json',
                    data:{
                      "_token": "{{ csrf_token() }}",
                      "lower_id": value,
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
