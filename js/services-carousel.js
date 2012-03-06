$(document).ready(function() {
	$(function(){
	        $("div.gallery").carousel({ dispItems: 3,loop: true,pagination:true });
	});
	$(".gallery a.photo").fancybox({
	    'overlayColor': '#000',
	    'overlayOpacity': 0.7
	});
});