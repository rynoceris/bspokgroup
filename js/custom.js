$(document).ready(function() {          
    
    $('#slides').cycle({ 
	    fx:     'fade', 
	    speed:  'slow', 
	    timeout: 8000, 
	    pager:  'ul#nav',
		pause: 1,
		pauseOnPagerHover: 1,
		manualTrump:   true,
		pagerEvent: 'click',
	    pagerAnchorBuilder: function(idx, slide) { 
	        // return selector string for existing anchor 
	        return '#nav li:eq(' + idx + ') a'; 
	    } 
	});
	
});