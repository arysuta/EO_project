
@extends('layouts.coba')

@section('content')

        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Gambar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    
  				<form action="/Detgambar/{{$promos->id}}" method="POST">
  				{{csrf_field()}}
  				{{method_field('PUT')}}

         
        <div class="row">
         @foreach($images as $image)
          <div class="col-md-4">
          <div class="form-group">
            <img src="{{asset('files/'.$image->nama_gambar)}}" width="305" height="175"/>
          </div>
          </div>
          @endforeach
        </div>
          

<!--                     <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">ID</th>
                          <th style="width: 20%">Promo</th>
                          <th>Image</th>            
                          <th style="width: 20%">#Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($images as $image)
                        <tr>
                          <td>{{  $image->Promo->id  }}</td>
                          <td>{{  $image->Promo->promo  }}</td>
                          <td>{{  $image->nama_gambar }}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table> -->
                    <br>
                    <br>
                     <a class="btn btn-primary" href="{{route('Promo.index')}}">Back</a>
                   
                    <!-- <button onclick="OpenModal()" class="btn btn-primary" style="margin-bottom: 5px;" data-toggle="modal" data-target="#PromoModal">+ Tambah Gambar</button> -->
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
       

<!-- </div>
<div class="modal fade" id="PromoModal" tabindex="-1" role="dialog" aria-labelledby="PromoModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="PromoLabel">Promo</h4>
	      </div>
	      <form action="{{ route('Detgambar.store'),'test'}}" method="post" enctype="multipart/form-data" files="true">
	      	{{csrf_field()}}
          {{ method_field('post') }}
	      	<div class="modal-body">
	        	
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Save</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div> -->

@endsection
        
   