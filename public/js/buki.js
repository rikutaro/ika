$(window).on("resize", function(){
	$("html").css("zoom" , $(window).width()/320);
}).trigger("resize");
$(document).ready( function(){
	// initialize
	$('.start').prop("disabled", false);
	$('.stop').prop("disabled", true);
	var option = {
		speed : 990,
		startCallback : function() {
			$('.start').prop("disabled", true);
			$('.stop').prop("disabled", false);
		},
		slowDownCallback : function() {
			$('.stop').prop("disabled", true);
		},
		stopCallback : function($stopElm) {
			$('.start').prop("disabled", false);
			$('.stop').hide();
			$('.start').show();
		}
	}
	$('div.roulette').roulette(option);	

	// start
	$('.start').click(function(){
		$('div.roulette').roulette('start');
		$('.stop').show();
		$('.start').hide();
	});
 
	// stop
	$('.stop').click(function(){
		$('div.roulette').roulette('stop');
	});
});