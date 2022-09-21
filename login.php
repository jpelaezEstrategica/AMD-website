<?php include 'head-forms.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion INICIA SESION  [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="nop">
		<div class="row">
			<div class="container d-flex justify-content-center">
				<div class="col-10 col-md-5 col-lg-4">
					<div class="login-card bg-sec1 p-20">
						<h3 class="text-center">Inicio de sesión</h3>
						<p>Si ya estás registrado en AMD Ultimate Connection ingresa tu correo electrónico y contraseña.</p>
						<form clasS="needs-validation" novalidate>
						  <div class="mb-3">
						    <label for="InputEmail1" class="form-label">Correo electrónico:*</label>
						    <input type="email" class="form-control" id="InputEmail1" required placeholder="Ej. juan@dominio.com">
						    <div class="invalid-feedback">
      							¡Lo sentimos! El correo electrónico ingresado no es con el que estás registrado en AMD Ultimate Connection.
    						</div>
						  </div>
						  <div class="mb-3">
						    <label for="InputPassword1" class="form-label">Contraseña</label>
						    <span class="posrel"><input type="password" class="form-control" id="InputPassword1" required placeholder="Introduce la contraseña"><i class="fa-solid fa-eye" id="togglepsw"></i></span>
						    <div class="invalid-feedback">
      							El correo o contraseña son incorrectos, por favor vuelva a intentarlo.
    						</div>
						  </div>
						  <div class="mb-3 form-check">
						    <input type="checkbox" class="form-check-input" id="Check1" checked required>
						    <label class="form-check-label" for="Check1">He leído y acepto los <a class="" href="javascript:;">términos y condiciones</a></label>
						  </div>
						  <button type="submit" class="lebtn lebtn-w100 btn-main">Iniciar sesion</button>
						  <a class="text-center d-block mt-2 mb-2" href="password-recover.php">¿Olvidaste tu contreseña?</a>
						</form>
						<hr>
						<p><b>¿No tienes cuenta?</b></p>
						<a href="javascript:;" class="lebtn lebtn-w100 btn-ghost">Regístrate</a>
					</div>
					<p class="text-center">Conoce nuestro <a class="" href="https://www.amd.com/es/corporate/privacy" targte="_blank">aviso de privacidad</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion INICIA SESION  [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>
<script>
// Password Toggle
const togglePassword = document.querySelector('#togglepsw');
const password = document.querySelector('#InputPassword1');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
    this.classList.toggle('fa-eye');
});
</script>
<?php include 'footer.php'; ?>