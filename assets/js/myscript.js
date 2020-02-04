const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal({
		title: 'Data' + flashData,
		text: 'Berhasil' + flashData,
		type: 'success'
	});
}
