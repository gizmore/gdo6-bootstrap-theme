"use strict"
$(document).ready(function () {

	window.GDO.Vote = {
		'vote': function(anchor) {
			var a = $(anchor);
			var href = anchor.href + '&ajax=1&fmt=json';
			$.get(href).then(function(response){
				var res = response.data.json;
				console.log(res);
				$('#'+res.outcomeId).html(res.outcome);
			}, function(response) {
				console.log(response);
				alert(response);
			})
			return false;
		}
	};
	
	$('[data-toggle="tooltip"]').tooltip();   
	
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
