<?php include 'head-forms.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion INICIA SESION  [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="nop">
		<div class="row">
			<div class="container d-flex justify-content-center">
				<div class="col-8 col-md-5 col-lg-4">
					<div class="login-card bg-sec1 p-20">
						<h3 class="text-center">Recuperar contraseña</h3>
						<p>Escribe una nueva contraseña para reestablecer tu cuenta en AMD Ultimate Connection y tener acceso a tu perfil.</p>
						<form clasS="needs-validation" novalidate>
						  <div class="mb-3">
						    <label for="InputEmail1" class="form-label">Nueva contraseña*:</label>
						    <input type="password" class="form-control" id="InputEmail1" required><br>
						    <div class="invalid-feedback">
      							La contraseña ingresada no cumple con las reglas establecidas.
    						</div>
						    <p>Para definir tu contraseña, considera utilizar al menos:</p>
						    <div class="row nop align-items-center">
						    	<div class="col-6">
						    		<ul class="bullets">
						    			<li>Una letra mayúscula</li>
						    			<li>Una letra minúscula</li>
						    			<li>Un número</li>
						    		</ul>
						    	</div>
						    	<div class="col-6">
						    		<ul class="bullets">
						    			<li>Uno de estos carácteres especiales @#_*%/</li>
						    		</ul>
						    	</div>
						    </div>
						  </div>
						  <div class="mb-3">
						  	<label for="InputEmail2" class="form-label">Confirma tu contraseña*:</label>
						  	<input type="password" class="form-control" id="InputEmail2" required>
						    <div class="invalid-feedback">
      							La contraseña ingresada no coincide, intenta de nuevo.
    						</div>
						  </div>
						  <div class="mb-3 form-check">
						    <input type="checkbox" class="form-check-input" id="Check1" checked required>
						    <label class="form-check-label" for="Check1">He leído y acepto los <a class="miss" href="javascript:;">términos y condiciones</a></label>
						  </div>
						  <button type="submit" class="lebtn lebtn-w100 btn-main">Cambiar contraseña</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion CREA UNA NUEVA PASSWORD [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>
<?php include 'footer.php'; ?>