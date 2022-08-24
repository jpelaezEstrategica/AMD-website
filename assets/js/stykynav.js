//main nav sticky
	  	$(window).scroll(function() {
	  		var topdoc = $(document).scrollTop(),
 				techo 	  = $('#mainnav').offset().top,
	  			laresta   = (techo-topdoc);
	  		$('#thundera').html(laresta+' PX to top')
	  		if (topdoc > 165) {
	  			$('#mainnav').addClass('sticky');
	  		}else if (topdoc < 164) {
	  			$('#mainnav').removeClass('sticky');	  			
	  		}
	  	});