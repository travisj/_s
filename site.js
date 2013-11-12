$(function() {
	var selectChange = function(urlFunc) {
		return function(e) {
			document.location.href = urlFunc(e);
		}
	};
	$("#archives-select").on('change', selectChange(function(e) {
		return e.target.value;
	}));
	$("#cat").on('change', selectChange(function(e) {
		return "/?cat=" + e.target.value;
	}));

	$("img.hover").on('mouseover', function() {
		var $me = $(this);
		$me.data('orig-src', $me.attr('src'));
		$me.attr('src', $me.data('hover'));
	}).on('mouseleave', function() {
		var $me = $(this);
		$me.attr('src', $me.data('orig-src'));
	});
});
