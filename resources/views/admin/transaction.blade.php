@extends('layouts.coba')

@section('content')

<div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaksi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 10%">Nama Member</th>
                          <th>Nama Paket</th>
                          <th style="width: 10%">Kategori</th>
                          <th>Bank</th>
                          <th>No Rekening</th>
                          <th>Atas Nama</th>
                          <th>Bukti</th> 
                          <th>Status </th>           
                          <th style="width: 20%">#Action</th>
                        </tr>
                      </thead>
                      <tbody>
                     @if(count($list) > 0)
                     @foreach($list as $i => $data)
                        <tr>
                          <td>{{  $i + 1  }}</td>
                          <td>{{  $data->name  }}</td>
                          <td>{{  $data->promo  }}</td>
                          <td>{{  $data->kategori  }}</td>
                          <td>{{  $data->jenis_bank  }}</td>
                          <td>{{  $data->no_rek  }}</td>
                          <td>{{  $data->atasnama  }}</td>
                          <td><a href="/gambarbukti/{{$data->id}}">View</a></td>
                          <td>{{  $data->status  }}</td>
					              	<td>
                              <button onclick="acceptTransaksi(this)" data-id="{{$data->id}}" class="btn btn-success" data-toggle="modal" data-target="#accept"> 
                              Accept
                            </button>
                              <button onclick="declineTransaksi(this)" data-id="{{$data->id}}" class="btn btn-danger" data-toggle="modal" data-target="#decline"> 
                              Decline
                            </button>
					               </td>
                       </tr>
                    @endforeach
                    @else
                      <tr>
                        <td>No Package have been Booked</td>
                      </tr>
                    @endif  
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>

<div class="modal modal-danger fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="accept">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="text-center modal-title" id="accept">Accept Confirmation</h4>
        </div>

          <div class="modal-body">
            <p class="text-center">Yakin Ingin Menerima Transaksi ?</p>
          </div>

          <div class="modal-footer">
          <form id="formAccept" action="#" method="post">
          {{csrf_field()}}
           <button type="submit" class="btn btn-success">Yes</button>
          </form>
          <div>
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
           </div>
          </div>
{{--         </form > --}}
      </div>
    </div>
  </div>

<div class="modal modal-danger fade" id="decline" tabindex="-1" role="dialog" aria-labelledby="decline">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="text-center modal-title" id="decline">Decline Confirmation</h4>
        </div>

          <div class="modal-body">
            <p class="text-center">Yakin Ingin Menolak Transaksi ?</p>
            <input type="hidden" name="id" id="id-member-delete" value="">
          </div>
          <form id="formDecline" action="#" method="post">
          {{csrf_field()}}
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Yes</button>
          </form>
              <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            </div>
          
{{--         </form > --}}
      </div>
    </div>
  </div>

<script type="text/javascript">
  function acceptTransaksi(e){
    id = $(e).attr('data-id');

    $("#formAccept").attr('action', "{{url('accepttrans')}}/"+id);

  }  

    function declineTransaksi(e){
    id = $(e).attr('data-id');

    $("#formDecline").attr('action', "{{url('declinetrans')}}/"+id);

  }  
</script>

@endsection