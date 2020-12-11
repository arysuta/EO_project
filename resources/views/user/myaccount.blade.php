@extends('layouts.main')

@section('content')

@foreach ($users as $user)
<div class="">
    <!-- UI - X Starts -->
    <div class="ui-67">
    
      <!-- Head Starts -->
      <div class="ui-head bg-lblue">
        <!-- Details -->
        <div class="ui-details">
          <!-- Name -->
          <h3 id="name-header">{{$user->name}}</h3>
          <!-- Designation -->
          <h4>My Account</h4>
        </div>
        <!-- Image -->
        <div class="ui-image">
          <!-- User Image -->
          <img src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="Profile Picture" class="img-responsive" width="100" height="100">
        </div>
      </div>
@endforeach
      <!-- Head Ends -->
      
      <!-- Content Starts -->
      <div class="ui-content">
        
        <div class="row">
          <div class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2 acc-col">
          
            <section>
              <h3>My Account</h3>
              @foreach ($users as $user)
              <form method="POST" action="/user/{{ $user->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                
                <div class="row">
                   <div class="col-sm-12">
                    <label for="inputName" class="control-label">Name:</label>
                      <input type="text" class="form-control" id="name2" name="name2" value="{{$user->name}}">
                  </div>               
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="inputEmail3" class="control-label">Email:</label>
                      <input type="email" class="form-control" id="email2" name="email2" value="{{$user->email}}">
                  </div>
                  <div class="col-sm-6">
                    <label for="inputPassword3" class="control-label">Phone Number:</label>
                      <input type="number" class="form-control" id="phone2" name="phone2" value="{{$user->phone}}">
                  </div>  
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <label for="inputEmail3" class="control-label">Address:</label>
                      <input type="text" class="form-control" id="address2" name="address2" value="{{$user->address}}">
                  </div>

                  <div class="col-sm-6">
                  <label for="jenis_kel">Sex</label>
                    <select id="jenis_kel" name="jenis_kel2" class="form-control" value="{{ $user->jenis_kel }}">
                          <option value="pria">Male</option>
                          <option value="wanita">Female</option>
                    </select>
                  </div>
                 </div>

             
                <div class="col-sm-12">
                  <div class="btn-div">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                    <!-- <a href="https://creativethoughtz.com" class="btn btn-success pull-right">Update</a> -->
                  </div>
                </div>
                </form>   
            </section>
            @endforeach
           
          
<!--           <section>
            <h3>Login Information</h3>
            <form class="" role="form">
              <div class="row">
                <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label">Password:</label>
                  <div class="">
                    <input type="password" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="inputPassword3" class="control-label">Confirm:</label>
                  <div class="">
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="btn-div">
                    <a href="https://creativethoughtz.com" class="btn btn-success pull-right">Update</a>
                  </div>
                </div>           
              </div>
            </form>  
          </section> -->
          


          </div>
          <!-- col-8 -->
        </div>

      </div>
      <!-- Content Ends -->
    </div>
    <!-- UI - X Ends -->
</div>
@endsection