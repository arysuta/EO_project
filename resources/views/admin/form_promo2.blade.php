

    <div class="form-group">
	<label for="nama">Nama Paket</label>
	<input type="text" class="form-control"  name="nama" id="nama2">
</div>
<div class="form-group">
	<label for="id_kategori">Kategori</label>
    <select name="kategori" class="form-control">
        <option value="">-pilih kategori-</option>
				@foreach( $kategoris as $kategori )
            @if($promo->kategori_id==$kategori->id)
              <option value="{{ $kategori->id }}" selected>{{ $kategori->kategori }}</option>
            @else
              <option value="{{ $kategori->id }}" >{{ $kategori->kategori }}</option>
            @endif
          @endforeach
        </select>	
</div>
<div class="form-group">
	<label for="lokasi2">Lokasi</label>
	<input type="text" class="form-control"  name="lokasi2" id="lokasi2">
</div>
<div class="form-group">
	<label for="harga_book2">Harga Booking</label>
	<input type="text" class="form-control"  name="harga_book2" id="harga_book2">
</div>
<div class="form-group">
	<label for="kode">Deskripsi</label>
	<textarea rows="5" class="form-control" name="deskripsi2" id="deskripsi2"></textarea>
<!-- 	<input type="text" class="form-control"  name="kode" id="kode2"> -->
</div>
<div class="form-group">
	<label for="harga">Harga Paket</label>
	<input type="text" class="form-control"  name="harga" id="harga2">
</div>



