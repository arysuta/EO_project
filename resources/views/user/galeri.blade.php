@extends('layouts.main')

@section('content')

<section style="background-color: white;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
								
				<!-- title-01 -->
				<div class="title-01">
					<h2 class="title-01__title">Galleries</h2>
				</div><!-- End / title-01 -->
								
			</div>
		</div>
	</div>



	<div class="consult-project">
	  	<form action="" method="POST">
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
	</div>
</section>

@endsection