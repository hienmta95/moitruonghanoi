$(document).ready(function() {
	var wd_width = $(window).width();
	if(wd_width > 960) {
		var accordion2 = UIkit.accordion(UIkit.$('#aside-categories'), {collapse:false, showfirst: false});
	   	accordion2.find('[data-wrapper]').each(function () {
	    	accordion2.toggleItem(UIkit.$(this), true, false);
	    });
	}


	if($('.playvideo')) {
		$('.playvideo').click(function(event) {
			var video = $(this).attr('data-video');
			var parent = $(this).parent();
			$(this).remove();
			$('<iframe width="100%" height="100%" frameborder="0" allowfullscreen></iframe>')
			    .attr("src", 'http://www.youtube.com/embed/' + video)
			    .appendTo(parent);
			event.preventDefault();
		});
	}
});