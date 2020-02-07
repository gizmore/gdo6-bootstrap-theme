"use strict"
$(document).ready(function () {

	window.GDO.Vote = {
		'vote': function(anchor) {
			var a = $(anchor);
			var c = a.parent().eq(0);
			var href = anchor.href + '&ajax=1&fmt=json';
			$.get(href).then(function(response){
				var res = response.data.json;
				console.log(res);
				c.attr('data-initial', a.attr('data-rating'));
				$('#'+res.outcomeId).html(res.outcome);
				window.GDO.Vote.hoverOut(anchor);
				window.GDO.Vote.hoverIn(anchor);
			}, function(response) {
				console.log(response);
				alert(response);
			})
			return false;
		},
		'hoverIn': function(anchor) {
			var a = $(anchor);
			var r = parseInt(a.attr('data-rating'));
			var c = a.parent().eq(0);
			for (var i = 0; i < r; i++) {
				var icon = c.children().eq(i).children().eq(0);
				icon.css('color', 'gold');
			}
		},
		'hoverOut': function(anchor) {
			var a = $(anchor);
			var c = a.parent().eq(0);
			var initial = c.attr('data-initial');
			c.children().each(function() {
				var that = $(this);
				var r = that.attr('data-rating');
				var icon = that.children().eq(0);
				if (parseInt(r) > initial) {
					icon.css('color', 'grey');
				}
			});
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
