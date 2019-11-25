$(document).ready(function () {

	$('#sidebarLeftCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
		$('#wrapSidebar').toggleClass('leftActive');
	});
	
	// Date
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
	
	// Autocomplete
	$('.gdt-auto-complete').each(function() {
		var that = $(this);
		var datajson = JSON.parse(that.attr('gdo-autocomplete-init'));
		var input = that.find('input');
		input.autocomplete({
		}, [
			{
				displayKey: function(result) {
					return result.text;
				},
				source: function name(query, callback) {
					$.get(datajson.completionHref + "&query=" + encodeURIComponent(query)).then(function(result){
						callback(result);
					});
					
				}
			}
		]);
	});
	
	
});
