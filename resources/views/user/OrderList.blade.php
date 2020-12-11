@extends('layouts.main')

@section('content')


<div class="container">
	<div class="row">
		
        <div class="col-md-12">
        
        <div class="table-responsive">
              <h4>Attention! Payment limit is 3 days after booking</h4>
              <h5>Please transfer dp payment to the following account:</h5>
              <h5>->  BNI = 1234555567891234 a / n Ayu Widiari</h5>
              <h5>->  BCA = 9876555554321 a / n Ary Suta</h5>
              <h5>->  Mandiri = 678955551234 a / n Angga Zena</h5>
              <h5>->  BRI = 432155559876 a / n Febby Laksmi </h5><br> 
              <table id="mytable" class="table table-bordred table-striped">
                   
                  <thead>
                   <th style="width: 1%">No</th>
                   <th style="width: 30%">Package Name</th>
                   <th style="width: 10%">Category</th>
                   <th style="width: 15%">DP Price</th>
                   <th style="width: 10%">Booking Date</th>
                   <th style="width: 10%">Bank</th>
                   <th style="width: 15%">Payment Proof</th>
                   <th style="width: 10%">Status</th>
                   <th style="width: 10%">Action</th>
                  </thead>
                <tbody>
                @if(count($list) > 0)
                @foreach($list as $i => $data)
                  <tr>
                    <td>{{  $i + 1  }}</td>
                    <td>{{  $data->promo  }}</td>
                    <td>{{  $data->kategori }}</td>
                    <td>{{  $data->harga_book  }} K</td>
                    <td>{{  $data->tanggal_pesan  }}</td>
                    <td>{{  $data->jenis_bank  }}</td>
                    <td><a href="/gambarbukti/{{$data->id}}">View</a></td>
                    <td>{{  $data->status  }}</td>
                    <td>
                        <button onclick="updateTransaksi(this)" data-id="{{$data->id}}" class="btn btn-primary" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-pencil"></span></button></p></td>
                    <td>
                        <button onclick="deleteTransaksi(this)" data-id="{{$data->id}}" class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-close"></span></button></p></td>
                  </tr>
                @endforeach
                @else
                  <tr>
                    <td>No Package have been Booked</td>
                  </tr>
                @endif
               </tbody>
            </table>

            <br>
            <br>
            <br>

{{--             <div class="clearfix"></div>
            <ul class="pagination pull-right">
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
                
            </div> --}}
            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Upload Your Payment Receipt</h4>
      </div>
          <form id="formUpdate" method="post" action="" enctype="multipart/form-data">
          {{method_field('PUT')}}
          {{csrf_field()}}
          <div class="modal-body">
         <div class="form-group">
            <label for="exampleInputFile">Choose A Picture</label>
            <input name="bukti_bayar" type="file" id="exampleInputFile">
        </div>
      </div>
          <div class="modal-footer ">
        <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </form>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Cancel Transaction</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to cancel this transaction?</div>
       
      </div>
        <div class="modal-footer ">
        <form id="formCancel" action="#" method="post">
          {{csrf_field()}}
          <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

<script type="text/javascript">
  function deleteTransaksi(e){
    id = $(e).attr('data-id');

    $("#formCancel").attr('action', "{{url('canceltrans')}}/"+id);

  }  

  function updateTransaksi(e){
    id = $(e).attr('data-id');

    $("#formUpdate").attr('action', "{{url('updatetrans')}}/"+id);

  }  
</script>
 
@endsection