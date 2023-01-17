@extends('layouts.dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Payment Testing List</h1>
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
                  <div class="col-10">
                      <h3 class="card-title" style="
                          margin-bottom: 10px;
                      ">Payment</h3>
                    </div>
                </div>

              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tran ID</th>
                    <th>Order Code</th>
                    <th>Payer Email</th>
                    <th>Amount</th>
                    <th>Paypal Fee</th>
                    <th>Net Amount</th>
                    <th>Currency</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  @foreach($payments as $pay)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$pay->tran_id}}</td>
                    <td>{{$pay->order->order_code}}</td>
                    <td>{{$pay->payer_email}}</td>
                    <td>{{$pay->amount}}</td>
                    <td>{{$pay->paypal_fee}}</td>
                    <td>{{$pay->net_amount}}</td>
                    <td>{{$pay->currency}}</td>
                    <td>{{$pay->status}}</td>
                    <td>
                        <a type="button" href="#" onclick="delete_confirm('{{$pay->id}}')" class="btn btn-block btn-danger" style="
                            width: 40%;
                            margin-top: 0rem;
                            margin-left: 0.3rem;
                        "><span class="fa fa-trash"></span></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tran ID</th>
                    <th>Order Code</th>
                    <th>Payer Email</th>
                    <th>Amount</th>
                    <th>Paypal Fee</th>
                    <th>Net Amount</th>
                    <th>Currency</th>
                    <th>Status</th>
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
                    url:'delete_payment',
                    dataType:'json',
                    data:{
                      "_token": "{{ csrf_token() }}",
                      "payment_id": value,
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
