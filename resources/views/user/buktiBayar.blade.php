@foreach($data as $image)
  <div class="col-md-4">
  <div class="form-group">
    <img src="{{asset('bukti_file/'.$image->bukti_bayar)}}"/>
  </div>
  </div>
  @endforeach
</div>