<?php include 'head-forms.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion INICIA SESION  [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="nop">
		<div class="row">
			<div class="container d-flex justify-content-center">
				<div class="col-8 col-md-5 col-lg-4 l-esp">
					<div class="login-card bg-sec1 p-20">
						<h3>Inicio de sesión</h3>
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
						    <span class="posrel"><input type="password" class="form-control" id="InputPassword1" required placeholder="Introduce la contraseña"><i class="fa-solid fa-eye" id="togglepsw"></i></span>
						    <div class="invalid-feedback">
      							El correo o contraseña son incorrectos, por favor vuelva a intentarlo.
    						</div>
						  </div>
						  <div class="mb-3 form-check">
						    <input type="checkbox" class="form-check-input" id="Check1" checked required>
						    <label class="form-check-label" for="Check1">He leído y acepto los <a class="" href="javascript:;">términos y condiciones</a></label>
						  </div>
						  <!-- quitar el onlclick cuando entre a produccion [⬇]-->
						  <button type="submit" class="lebtn lebtn-w100 btn-main" onclick="window.location.href='programa-socios-logged.php'">Iniciar sesion</button>
						  <!-- quitar el onlclick cuando entre a produccion [⬆] -->
						  <a href="password-recover.php">¿Olvidaste tu contreseña?</a>
						</form>
						<hr>
						<p><b>¿No tienes cuenta?</b></p>
						<a href="javascript:;" class="lebtn btn-ghost">Regístrate</a>
					</div>
						<p class="text-center">Conoce nuestro <a class="" href="https://www.amd.com/es/corporate/privacy" targte="_blank">aviso de privacidad</a></p>
				</div>
				<div class="col-8 col-md-5 col-lg-4 l-pt">
					<div class="login-card bg-sec1 p-20">
						<h3>CONECTE-SE</h3>
						<p>Para visualizar esta seção pedimos que entre na plataforma:</p>
						<form clasS="needs-validation" novalidate>
						  <div class="mb-3">
						    <label for="InputEmail1" class="form-label">Correio eletrônico:*</label>
						    <input type="email" class="form-control" id="InputEmail1" required>
						    <div class="invalid-feedback">
      							Este campo é obrigatório
    						</div>
						  </div>
						  <div class="mb-3">
						    <label for="InputPassword1" class="form-label">Senha</label>
						    <span class="posrel"><input type="password" class="form-control" id="InputPassword1" required placeholder="Introduce la contraseña"><i class="fa-solid fa-eye" id="togglepsw"></i></span>
						    <div class="invalid-feedback">
      							O e-mail ou a senha estão incorretos, tente novamente.
    						</div>
						  </div>
						  <div class="mb-3 form-check">
						    <input type="checkbox" class="form-check-input" id="Check1" checked required>
						   	<label class="form-check-label" for="Check1">Li e aceito os <a class="" href="javascript:;">termos e condições</a></label>
						  </div>
						  <!-- quitar el onlclick cuando entre a produccion [⬇]-->
						  <button type="submit" class="lebtn lebtn-w100 btn-main" onclick="window.location.href='programa-socios-logged.php'">Iniciar sessão</button>
						  <!-- quitar el onlclick cuando entre a produccion [⬆] -->
						  <a href="password-recover.php">Você esqueceu sua senha?</a>
						</form>
						<hr>
						<p><b>Você não tem uma conta?</b></p>
						<a href="javascript:;" class="lebtn btn-ghost">Cadastre-se</a>
					</div>
						<p class="text-center">Conheça nosso <a class="" href="https://www.amd.com/es/corporate/privacy" targte="_blank">aviso de privacidade</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion MEMBESR LOGIN  [↑] ------------------------ -->
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