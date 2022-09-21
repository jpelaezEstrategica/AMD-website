<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop">
				<div class="col-12">
					<h2 class="dressedh1">Administración de reglas de puntaje<span class="terminal">_</span></h2>
					<p>Registra o modifica reglas y equivalencias de puntaje por categoría, nivel y país de origen del socio. También puedes consultar las reglas activas actuales.</p>
				</div>
			</div>
			<div class="row nop">
				<h2>Consultar reglas de puntaje</h2>
				<p>Localiza la categoría  y país del origen de las reglas de puntaje que deseas consultar y modificar.</p>
				<?php include 'filtro-rules.php' ?>
			</div>
		</div>
		<div class="row">
			<div class="spacer-p2">&nbsp;</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>

<?php include 'footer.php'; ?>