@extends('layouts.coba')

@section('content')


    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Member <small>List</small></h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table</h2>
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
                          <th style="width: 20%">Nama Member</th>
                          <th>Email</th>
                          <th>created_at</th>
                          <th>updated_at</th>
                          <th>status</th>
                          <tbh style="width: 20%">#Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if (isset($users) && count($users) > 0)
                      @foreach($users as $i => $user)
                        <tr>
                          <td>{{  $i + 1  }}</td>
                          <td>{{  $user->name  }}</td>
                          <td>{{  $user->email }}</td>
                          <td>{{  $user->created_at  }}</td>
                          <td>{{  $user->updated_at  }}</td>
                          <td>{{  $user->status }}</td>
							          <td>
                        
                          <button class="btn btn-danger" data-fid="{{$user->id}}" data-toggle="modal" data-target="#deleteModal">
                            Ban
                          </button>
							  	    </td>
                      <!-- <td> -->
                      <!--   
                          <button class="btn btn-primary" data-fid="{{$user->id}}" data-toggle="modal" data-target="#undeleteModal">
                            Un-ban
                          </button>
                      </td> -->
                    </tr>
                      @endforeach
                      @endif
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




<!-- Delete Film -->
<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="text-center modal-title" id="deleteModal">Banned Confirmation</h4>
	      </div>
	      <form action="" method="POST" id="form-delete-modal">
	      	{{method_field('PATCH')}}
	      	{{csrf_field()}}
	      	<div class="modal-body">
	      		<p class="text-center">Yakin Ingin Menghapus Member ?</p>
	      		<input type="hidden" name="id" id="id-member-delete" value="">
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
	        	<button type="submit" class="btn btn-warning">Yes</button>
	      	</div>
	      </form >
	    </div>
	  </div>
	</div>



@endsection
