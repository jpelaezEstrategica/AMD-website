<?php include 'head-forms.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion RECUEPRA TU PASSWORD  [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section>
		<div class="row">
			<div class="container d-flex justify-content-center">
				<div class="col-8 col-md-6 col-lg-6">
					p.
					<div class="login-card p-20">
						<h3>Recuperar contraseña</h3>
						<p>Escribe la dirección de correo electrónico con la que estás registrado al programa, ahí recibirás el link para reestablecer la contraseña</p>
						<form clasS="needs-validation" novalidate>
						  <div class="mb-3">
						    <label for="InputEmail1" class="form-label">Correo electrónico:*</label>
						    <input type="email" class="form-control" id="InputEmail1" required>
						    <div class="invalid-feedback">
      							El correo electrónico proporcionado no es válido. Por favor, revisa que sea el mismo con el que estás registrado en AMD Ultimate Connection. 
    						</div>
						  </div>
						  <div class="mb-3 form-check">
						    <input type="checkbox" class="form-check-input" id="Check1" checked required>
						    <label class="form-check-label" for="Check1">He leído y acepto los <a href="javascript:;">términos y condiciones</a></label>
						  </div>
						  <button type="submit" class="bt-main">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion RECUEPRA TU PASSWORD  [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>
<?php include 'footer.php'; ?>