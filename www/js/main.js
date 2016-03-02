$(function(){

	$('body').on('click', 'a[data-delete-confirm]', function(e) {
		if (!confirm('Naozaj si prajete zmazať ?')) {
			e.preventDefault();
			e.stopImmediatePropagation();
		}
	});
});