"use strict";

$(function() {
	
	window.GDO.error = function(html, title) {
		let ok = t('btn_ok');
		title = title || t('sitename');
		let modal = `
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">${title}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>${html}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">${ok}</button>
      </div>
    </div>
  </div>
</div>`;
		let defer = $.Deferred();
		let dialog = $(modal);
		dialog.modal().on('hidden.bs.modal', function() {
			dialog.remove();
			defer.resolve();
		});
		return defer.promise();
	};

	window.GDO.Language = {
		'switch': function(select) {
			var curr = window.location.pathname + window.location.search;
			var href = window.GDO_WEB_ROOT + "index.php?mo=Language&me=SwitchLanguage&ref=";
			href += encodeURIComponent(curr);
			href += "&_lang=" + $(select).val();
			window.location.href = href;
		}
	};
	
	window.GDO.Vote = {
		'vote': function(anchor) {
			var a = $(anchor);
			var c = a.parent().eq(0);
			var href = anchor.href + '&_ajax=1&_fmt=json';
			$.get(href).then(function(response){
				var res = response.json.data;
				c.attr('data-initial', a.attr('data-rating'));
//				$('#'+res.outcomeId).find('.vote-count').html(res.count);
//				$('#'+res.outcomeId).find('.vote-rating').html(res.rating);
				$('#'+res.outcomeId).html(res.outcome);
				window.GDO.Vote.hoverOut(anchor);
				window.GDO.Vote.hoverIn(anchor);
			}, function(response) {
				window.GDO.error(response);
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
	let conv = window.GDO.Moment.convertFormat;

	$('.gdt-datetime input').datetimepicker({
		useCurrent: false,
		locale: window.GDO_LANGUAGE,
		format: conv(window.GDO_TRANS.t('df_long')),
	});
	
	$('.gdt-date input').datetimepicker({
		useCurrent: false,
		locale: window.GDO_LANGUAGE,
		format: conv(window.GDO_TRANS.t('df_day')),
	});
	
	$('.gdt-week input').datetimepicker({
		useCurrent: false,
		locale: window.GDO_LANGUAGE,
		format: conv(window.GDO_TRANS.t('df_day')),
	});
	
	$('.gdt-month input').datetimepicker({
		useCurrent: false,
		locale: window.GDO_LANGUAGE,
		format: conv(window.GDO_TRANS.t('df_day')),
	});
	
	$('.gdt-birthdate input').datetimepicker({
		locale: window.GDO_LANGUAGE,
		format: conv(window.GDO_TRANS.t('df_day')),
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
		var hidden2 = $('#nocompletion_'+name);
		hidden.attr('name', input.attr('name'));
		input.removeAttr('name');
		hidden.val(input.val());
		
		if (datajson.selected.id == datajson.emptyValue) {
			input.attr('placeholder', datajson.selected.text);
		}
		else {
			input.val(datajson.selected.text)
		}
		
		input.on('keydown.aa keypress.aa cut.aa paste.aa', function($e) {
			setTimeout(function(){
				hidden.val(input.val());
				hidden2.val('1');
			});
		});
		
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
					$.get(datajson.completionHref + "&_fmt=json&query=" + encodeURIComponent(query)).then(function(result){
						callback(result.json.data);
					});
				}
			}
		]).on('autocomplete:selected', function(event, suggestion, dataset, context) {
			hidden.val(suggestion.id);
			hidden2.val('0');
		});
	});

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
	
	// Focus first form field
	if (window.GDO_FIRST_EDITABLE_FIELD) {
		$('#' + window.GDO_FIRST_EDITABLE_FIELD).focus();
	}

});
