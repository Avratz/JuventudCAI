//Note: line height is set to match main_height and main_min_height respectivly
main_height = 157
main_min_height = 50
var full = false;
var small = false;

$(window).scroll(function(){
if(($(document).scrollTop()<=20)){
	//controls elements dimentions on scroll
	small = false;
	var s = $(document).scrollTop();

	$('.navbar-dark .container').stop().animate({
            height:main_height-s,
    },10);
		$('.navbar-dark').stop().animate({
				height:main_height-s,
				lineHeight:'auto',
	    },10);
			$('.PartidosBox').show();
			$('.nbar-brand').show();
			$('.sumate').show();
			$('.nbar-brand-min').hide();
			$('#logos').stop().animate({
					height:'100%',
				},10);
				$("#social").show();
				$(".navtop").hide();

	//Elements under main bar fix
	//Laggy? Remove this code. The over flow is has a pretty cool effect anyway.

} else if(($(document).scrollTop()>5) ){
	//hold animation on fast scroll
	small = true;
	$('.PartidosBox').hide();
	$('.nbar-brand').hide();
	$('.sumate').hide();
	$('.nbar-brand-min').show();
	var s = $(document).scrollTop();
	$('.navbar-dark .container').stop().animate({
            height:main_min_height,
    },10);
				$('.navbar-dark').stop().animate({
						height:main_min_height,
						lineHeight:main_min_height,
					},0);
				$('#logos').stop().animate({
									height:'100%',
								},5);
						$("#social").hide();
						$(".navtop").show();

		$('#nextElementFix').stop().animate({
			paddingTop:main_min_height-s
    	},15);
}
});
$('.navbar-toggler').click(function() {
	if (!full) {
		$('body').bind('touchmove', function(e){e.preventDefault()})
	$('.navbar-dark .container').stop().animate({
            height:'100vh',
    },10);
  	$('.navbar-dark').stop().animate({
			height:'100vh',},10);
				full = true;
		}else {
			$('body').unbind('touchmove')
			if (!small){
				var Ancho = 157;
			} else {
				var Ancho = 50;
			}
			$('.navbar-dark .container').stop().animate({
								height: Ancho,
				},10);
				$('.navbar-dark').stop().animate({
					height: Ancho,},10);
			full = false
		}
});
