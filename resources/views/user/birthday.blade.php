@extends('layouts.main')

@section('content')

<div class="container">
<h1>Birthday Party</h1>
	<div class="row">
  @foreach ($promos as $promo)
  <div class="col-md-4">
    <div class="thumbnail">

      <a href="{{route('birthday.index')}}/{{$promo->id}}">
        <img src="{{ asset('files/'.$promo->detgambar[0]->nama_gambar) }}" alt="Lights" style="width:100%">
        <div class="caption">  
          <h4>{{  $promo->promo  }}</h4> 
          <p>View Detail</p>
        </div>
      </a>
    </div>
  </div>
@endforeach
</div>
</div>

@endsection