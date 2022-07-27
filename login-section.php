<?php include 'head-forms.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion MEMBESR LOGIN  [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section>
		<div class="row">
			<div class="container d-flex justify-content-center">
				<div class="col-8 col-md-6 col-lg-6">
					<div class="login-card p-20">
						<h3>Inicio de sesion</h3>
						<p>Para entrar a esta sección escribe tu correo electrónico y contraseña. </p>
						<form clasS="needs-validation" novalidate>
						  <div class="mb-3">
						    <label for="InputEmail1" class="form-label">Correo electrónico:*</label>
						    <input type="email" class="form-control" id="InputEmail1" required>
						    <div class="invalid-feedback">
      							Este campo es obligatorio
    						</div>
						  </div>
						  <div class="mb-3">
						    <label for="InputPassword1" class="form-label">Contraseña</label>
						    <input type="password" class="form-control" id="InputPassword1" required>
						    <div class="invalid-feedback">
      							El correo o contraseña son incorrectos, por favor vuelva a intentarlo.
    						</div>
						  </div>
						  <div class="mb-3 form-check">
						    <input type="checkbox" class="form-check-input" id="Check1" checked required>
						    <label class="form-check-label" for="Check1">He leído y acepto los <a href="javascript:;">términos y condiciones</a></label>
						  </div>
						  <button type="submit" class="bt-main">Iniciar sesion</button>
						  <a href="password-recover.php">¿Olvidaste tu contreseña?</a>
						</form>
						<hr>
						<p><b>¿No tienes cuenta?</b></p>
						<a href="javascript:;" class="btn-ghost">Regístrate</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion MEMBESR LOGIN  [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>
<?php include 'footer.php'; ?>