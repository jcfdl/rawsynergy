$(function(){
	$(document).on('click', '.responsive-navigation.nav', function() {
		$(this).toggleClass('open close');		
		$('#site-navigation').toggleClass('width-0 width-100');
		$('.contact-navigation').toggleClass('width-0 width-100');

	})
})