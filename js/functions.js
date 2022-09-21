	// Valida los formularios
	(function () {
	  'use strict'
	  // Fetch all the forms we want to apply custom Bootstrap validation styles to
	  var forms = document.querySelectorAll('.needs-validation')
	  // Loop over them and prevent submission
	  Array.prototype.slice.call(forms)
	    .forEach(function (form) {
	      form.addEventListener('submit', function (event) {
	        if (!form.checkValidity()) {
	          event.preventDefault()
	          event.stopPropagation()
	        }
	        form.classList.add('was-validated')
	      }, false)
	    })
	})()
	//Dropdowns de logged user
	var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
	var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
	  return new bootstrap.Dropdown(dropdownToggleEl)
	})

	$(document).ready(function() {
	    // back to top Show/Hide
	    $('#b2t').hide();
	    var elalto =  $(window).height()+140;
	    $(window).scroll(function() {
	    	
	        if ($(document).scrollTop() > 1600) {
	            $('#b2t').fadeIn('slow');
	        }
	        else {
	            $('#b2t').fadeOut('slow');
	        }
	        if ($(document).scrollTop()>= elalto) {
	        	$('#top').addClass('sticky')
	        	//console.log(navtopped);
	        }
	        else{
	         	$('#top').removeClass('sticky')
	         	//console.log(navtopped);
	        }
	    });
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

	  	$('.innernav .navitem').click(function (e) {
	  		$('.innernav .navitem').removeClass('hover')
	  		$(this).addClass('hover')
	  	});
	    
	});