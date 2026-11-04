$(document).ready(function(){

	//PANTALLAS CHICAS CLICK
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
		if($(window).width() <= 992){
			$(this).css("background-color","#6C93D5");
			
			//Cierra los submenus, hijos de otro dropdown
			if (!$(this).next().hasClass('show')) {
			    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
			}

			var $subMenu = $(this).next('.dropdown-menu');
			$subMenu.toggleClass('show');
			$(this).parents('li.nav-item menu1 text-center.dropdown.show').on('hidden.bs.dropdown', function(e) {
			    $('.dropdown-submenu .show').removeClass('show');
			    $('.dropdown-submenu .show').parent().children("b").html("<i class='fas fa-minus'></i>");

			});

			
			$('.submenu1').children('li').children('a').css("background-color", "#375689");
			$('.submenu2').children('li').children('a').css("background-color", "#44669F");
			$('.submenu3').children('li').children('a').css("background-color", "#5274AE");

			$('.submenu1').children('li').children('a').css("color", "white");
			$('.submenu2').children('li').children('a').css("color", "white");
			$('.submenu3').children('li').children('a').css("color", "white");
		}
		return false;
	});


	//PANTALLAS GRANDES HOVER
		$('.dropdown-menu a.dropdown-toggle').on('mouseover', function(e) {
		if($(window).width() > 992){
			$(this).css("background-color","#6C93D5");
			
			//Cierra los submenus, hijos de otro dropdown
			if (!$(this).next().hasClass('show')) {
			    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
			}

			var $subMenu = $(this).next('.dropdown-menu');
			$subMenu.toggleClass('show');
			$(this).parents('li.nav-item menu1 text-center.dropdown.show').on('hidden.bs.dropdown', function(e) {
			    $('.dropdown-submenu .show').removeClass('show');
			    $('.dropdown-submenu .show').parent().children("b").html("<i class='fas fa-minus'></i>");

			});
		}
		return false;
	});


	$('.menu1').on('click', function(e) {
		$( ".submenu2" ).each(function() {
		  if( $(this).hasClass('show') ){
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-minus'></i>");
		  }else{
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-plus'></i>");
		  }
		});
		$( ".submenu3" ).each(function() {
		  if( $(this).hasClass('show') ){
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-minus'></i>");
		  }else{
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-plus'></i>");
		  }
		});
	});

	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
		$( ".submenu2" ).each(function() {
		  if( $(this).hasClass('show') ){
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-minus'></i>");
		  }else{
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-plus'></i>");
		  }
		});
		$( ".submenu3" ).each(function() {
		  if( $(this).hasClass('show') ){
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-minus'></i>");
		  }else{
		  	$(this).parent().children("a").children("b").html("<i class='fas fa-plus'></i>");
		  }
		});
	});

	if($(window).width() > 992){
  		$('.dropdown-menu a.dropdown-toggle').on('mouseleave', function(e) {
				$(this).css("background-color","white");
		});

		$('.dropdown-item').on('mouseover', function(e) {
				$(this).css("background-color","#6C93D5");
				$(this).css("color","white");
		});
		$('.dropdown-item').on('mouseleave', function(e) {
				$(this).css("background-color","white");
				$(this).css("color","black");
		});
	}

	$('.menuPrincipal li').on('click',function(e){
		if($(window).width() <= 992){
			$('.submenu1').children('li').children('a').css("background-color", "#375689");
			$('.submenu2').children('li').children('a').css("background-color", "#44669F");
			$('.submenu3').children('li').children('a').css("background-color", "#5274AE");

			$('.submenu1').children('li').children('a').css("color", "white");
			$('.submenu2').children('li').children('a').css("color", "white");
			$('.submenu3').children('li').children('a').css("color", "white");
		}

	});

});


