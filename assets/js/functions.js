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
	$('.innernav .navitem').click(function (e) {
	  		$('.innernav .navitem').removeClass('hover')
	  		$(this).addClass('hover')
	  	});

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

	  	$('.innernav .nav-item').click(function (e) {
	  		$('.innernav .nav-item').removeClass('hover')
	  		$(this).addClass('hover')
	  		console.log('mepicaron');
	  	});

	  	$('.dropdown-toggle').click(function () {
	  			$('#userlog-nav').slideToggle(300);
	  		});

	  		// FORMUALRIOS SHOW CATEGORIA SEGUN SELECT
	  		$('#catPartner').change(function() {
	  			if ($('#varcommercial').is(":selected")) {
	  				console.log('varcommercial esta seleccionado');
	  				$('#catPartnerop1').show();
	  				$('#catPartnerop2').hide();
	  				$('#catPartnerop3').hide();
	  			}if ($('#resellercomponents').is(":selected")) {
	  				console.log('resellercomponents esta seleccionado');
	  				$('#catPartnerop1').hide();
	  				$('#catPartnerop2').show();
	  				$('#catPartnerop3').hide();
	  			}if ($('#resellercommercial').is(":selected")) {
	  				console.log('resellercommercial esta seleccionado');
	  				$('#catPartnerop1').hide();
	  				$('#catPartnerop2').hide();
	  				$('#catPartnerop3').show();
	  			}
	  		});

	  		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
				var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  			return new bootstrap.Tooltip(tooltipTriggerEl)
				})

		
});
	    
