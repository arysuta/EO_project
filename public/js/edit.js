
// $('#editModal').on('show.bs.modal', function (event) {
// 	console.log('Modal Opened');
// 	var button = $(event.relatedTarget) // Button that triggered the modal
// 	var id = button.data('fid')
// 	var id_kategori = button.data('fkategori')  
// 	var paket = button.data('fpaket')
// 	var harga = button.data('fharga')
	
// 	var modal = $(this)
// 	modal.find('.modal-body #id').val(id)
// 	modal.find('.modal-body #kategori').val(kategori)
// 	modal.find('.modal-body #paket').val(paket)
// 	modal.find('.modal-body #harga').val(harga)
	
// })

$('#deleteModal').on('show.bs.modal', function (event) {
	console.log('Modal Opened');
	var button = $(event.relatedTarget) // Button that triggered the modal
	var id = button.data('fid') 
	
	$('#id-member-delete').attr('value', id);
	$('#form-delete-modal').attr('action', '/admin/' + id);

})