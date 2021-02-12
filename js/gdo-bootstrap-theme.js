"use strict"
$(document).ready(function () {

	window.GDO.Language = {
		'switch': function(select) {
			var curr = window.location.pathname + window.location.search;
			var href = window.GWF_WEB_ROOT + "index.php?mo=Language&me=SwitchLanguage&ref=";
			href += encodeURIComponent(curr);
			href += "&lang=" + $(select).val();
			window.location.href = href;
		}
	};
	
	window.GDO.Vote = {
		'vote': function(anchor) {
			var a = $(anchor);
			var c = a.parent().eq(0);
			var href = anchor.href + '&ajax=1&fmt=json';
			$.get(href).then(function(response){
				var res = response.data.json;
				c.attr('data-initial', a.attr('data-rating'));
//				$('#'+res.outcomeId).find('.vote-count').html(res.count);
//				$('#'+res.outcomeId).find('.vote-rating').html(res.rating);
				$('#'+res.outcomeId).html(res.outcome);
				window.GDO.Vote.hoverOut(anchor);
				window.GDO.Vote.hoverIn(anchor);
			}, function(response) {
				console.log(response);
				alert(response.responseJSON.data.error);
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

	$('.selectpicker').selectpicker({
//		'liveSearch': true,
		'noneResultsText': window.t('no_select_match'),
	});

	$('[data-toggle="tooltip"]').tooltip();   
	
	$('#sidebarLeftCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
		$('#wrapSidebar').toggleClass('leftActive');
	});
	
	// Date
	$('.gdt-datetime input').datetimepicker({
		useCurrent: false,
		locale: window.GWF_LANGUGE,
		format: window.GDO_TRANS.t('df_moment_long'),
	});
	
	$('.gdt-date input').datetimepicker({
		useCurrent: false,
		locale: window.GWF_LANGUGE,
		format: window.GDO_TRANS.t('df_moment_day'),
	});
	
	$('.gdt-birthdate input').datetimepicker({
		locale: window.GWF_LANGUGE,
		format: window.GDO_TRANS.t('df_moment_day'),
		viewMode: 'years',
		maxDate: new Date(),
		useCurrent: false
	});
	
	// Autocomplete
	$('.gdo-autocomplete').each(function() {
		var that = $(this);
		var datajson = JSON.parse(that.attr('data-gdt-config'));
		var input = that.find('input.form-control');
		
		// switch hidden field
		var name = datajson.name;
		var hidden = $('#gdo-autocomplete-id-'+name);
		hidden.attr('name', input.attr('name'));
		input.removeAttr('name');
		hidden.val(input.val());
		
		if (datajson.selected.id == datajson.emptyValue) {
			input.attr('placeholder', datajson.selected.text);
		}
		else {
			input.val(datajson.selected.text)
		}
		input.autocomplete({
		}, [
			{
				displayKey: function(result) {
					return result.text;
				},
				templates: {
					suggestion: function(suggestion) {
						return suggestion.display;
					}
				},
				source: function name(query, callback) {
					$.get(datajson.completionHref + "&query=" + encodeURIComponent(query)).then(function(result){
						callback(result);
					});
				}
			}
		]).on('autocomplete:selected', function(event, suggestion, dataset, context) {
//			var name = $(event.target).attr('data-gdt-name');
//			var hidden = $('#gdo-autocomplete-id-'+name);
			hidden.val(suggestion.id);
		});
	});
	
});

$(function() {
	$(".sidebar-dropdown > a").click(function() {
		$(".sidebar-submenu").slideUp(200);
		if ($(this).parent().hasClass("active")) {
			$(".sidebar-dropdown").removeClass("active");
			$(this).parent().removeClass("active");
		}
		else {
			$(".sidebar-dropdown").removeClass("active");
			$(this).next(".sidebar-submenu").slideDown(200);
			$(this).parent().addClass("active");
		}
	});
	
	$("#close-sidebar").click(function() {
		$(".page-wrapper").removeClass("toggled");
	});

	$("#show-sidebar").click(function() {
		$(".page-wrapper").addClass("toggled");
	});
	
	// init
	if ($(document).width() > 800) {
		$(".page-wrapper").addClass("toggled");
	}
	
	// Visible
	$('.page-wrapper').removeClass('n');
	
});
