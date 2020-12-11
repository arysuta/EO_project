
<div class="form-group">
	<label for="nama">Nama Paket</label>
	<input type="text" class="form-control"  name="nama" id="nama">
</div>
<div class="form-group">
	<label for="id_kategori">Kategori</label>
    <select name="kategori" class="form-control">
        <option value="">-pilih kategori-</option>
          @foreach( $kategoris as $kategori )
            <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
          @endforeach
        </select>
</div>

<div class="form-group">
    <label for="lokasi">Lokasi</label>
	<input type="text" class="form-control"  name="lokasi" id="lokasi">
</div>
<div class="form-group">
	<label for="harga_book">Harga Booking</label>
	<input type="text" class="form-control"  name="harga_book" id="harga_book">
</div>
<div class="form-group">
	<label for="deskripsi">Deskripsi</label>
	<textarea rows="5" class="form-control" name="deskripsi" id="deskripsi"></textarea>
<!-- 	<input type="text" class="form-control"  name="kode" id="kode"> -->
</div>
<div class="form-group">
	<label for="harga">Harga Paket</label>
	<input type="text" class="form-control"  name="harga" id="harga">
</div>
<div class="form-group">
    <label>File</label>
    <input type="file" id="file" name="file[]" multiple="">
</div>


