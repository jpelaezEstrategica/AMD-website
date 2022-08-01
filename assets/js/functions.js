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
	    var elalto =  $(window).height();

	    $(window).scroll(function() {
	        if ($(document).scrollTop() > 1600) {
	            $('#b2t').fadeIn('slow');
	        }
	        else {
	            $('#b2t').fadeOut('slow');
	        }
	        if ($(document).scrollTop()>= elalto) {
	        	$('#top').addClass('sticky')
	        	console.log('sepega');
	        }
	        else{
	         	$('#top').removeClass('sticky')
	         	console.log('sedespega');
	        }
	    });
	  	


	    
	});