$(function() {
	$('.dropdown-menu .dropdown-submenu li').hover(function(){
		$(this).siblings().removeClass("active");
		$(this).addClass("active");
		$(this).parent().find("i").removeClass("active");
		$(this).find("i").addClass("active");
		
		if($(this).hasClass('tudo')){
			$('.dropdown-content.testes').addClass('hidden');
			$('.dropdown-content.tudo').removeClass('hidden');
		}else if($(this).hasClass('comparativos')){
			$('.dropdown-content.testes').addClass('hidden');
			$('.dropdown-content.comparativos').removeClass('hidden');
		}else if($(this).hasClass('impressoes')){
			$('.dropdown-content.testes').addClass('hidden');
			$('.dropdown-content.impressoes').removeClass('hidden');
		}else if($(this).hasClass('longa-duracao')){
			$('.dropdown-content.testes').addClass('hidden');
			$('.dropdown-content.longa-duracao').removeClass('hidden');
		}else if($(this).hasClass('teste-de-pista')){
			$('.dropdown-content.testes').addClass('hidden');
			$('.dropdown-content.teste-de-pista').removeClass('hidden');
		}
	});
	
	$('.mega_menu .dropdown').hover(function(){
		isThis = this;
		var delay = 300;
		$('.mega_menu .dropdown').removeClass('open');
		$(isThis).addClass('open');
		timeoutOpenID = setTimeout(function (){
			$(isThis).find('.dropdown-menu').addClass('openHover');
		}, delay);
	});
	$('.mega_menu .dropdown').mouseleave(function(){
		var delay = 100;
		$(isThis).removeClass('open');
		timeoutCloseID = setTimeout(function (){
			clearTimeout(timeoutOpenID);
			$('.dropdown-menu').removeClass('openHover');
		}, delay);
	});
	$('.dropdown-menu').hover(function(){
		$(isThis).addClass('open');
		clearTimeout(timeoutCloseID);
		$(isThis).find('.dropdown-menu').addClass('openHover');
	});
	$('.dropdown-menu').mouseleave(function(){
		var delay = 100;
		$(isThis).removeClass('open');
		timeoutCloseID = setTimeout(function (){
			$(isThis).find('.dropdown-menu').removeClass('openHover');
		}, delay);
	});
	
	$('.navbar-toggle').click(function(){
		if($(this).hasClass('collapsed')){
			$(this).find('.icon-bar').addClass('hidden');
			$(this).find('.close-menu-colapse').removeClass('hidden');
		}else{
			$(this).find('.close-menu-colapse').addClass('hidden');
			$(this).find('.icon-bar').removeClass('hidden');
		}
	});
	
	$('.search-custom-smartphone input').focus(function() {
		$('.navbar-brand').addClass('hidden');
		$('.icon-search-custom-smartphone').addClass('hidden');
	});
	$('.search-custom-smartphone input').focusout(function() {
		var search = $('.search-custom-smartphone input').val();
		if(search == ''){
			$('.navbar-brand').removeClass('hidden');
			$('.icon-search-custom-smartphone').removeClass('hidden');
		}
	});
	$(document).on('scroll', function () {
		if ($(window).scrollTop() > 1) {
			$('.navbar').addClass('header-fixed');
		} else {
			$('.navbar').removeClass('header-fixed');
		}
	});
});