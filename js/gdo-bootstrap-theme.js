$(document).ready(function () {

	$('#sidebarLeftCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
		$('#wrapSidebar').toggleClass('leftActive');
	});
	

	$('.gdt-datetime input').datetimepicker({
		useCurrent: false,
		locale: window.GWF_LANGUGE,
		format: 'YYYY-MM-DD hh:ii:ss'
	});
	
	$('.gdt-date input').datetimepicker({
		useCurrent: false,
		locale: window.GWF_LANGUGE,
		format: 'YYYY-MM-DD'
	});
	
	$('.gdt-birthdate input').datetimepicker({
		locale: window.GWF_LANGUGE,
		format: 'YYYY-MM-DD',
		viewMode: 'years',
		maxDate: new Date(),
		useCurrent: false
	});
	
});
