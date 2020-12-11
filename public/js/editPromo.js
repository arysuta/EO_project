$('#editModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	
	var id = button.data('fid')
	var promo = button.data('fpromo')
	var kategori = button.data('fkategori')
	var lokasi = button.data('flokasi')
	var harga_book = button.data('fharga_book')
	var deskripsi = button.data('fdeskripsi')
	var Harga = button.data('fharga')
	     

	$('#form-edit-modal').attr('action', '/Promo/'+id);

	$('#id').val(id)
	$('#nama2').val(promo)
	$('#kategori').val(kategori)
	$('#lokasi2').val(lokasi)
	$('#harga_book2').val(harga_book)
	$('#deskripsi2').val(deskripsi)
	$('#harga2').val(Harga)
	
})



