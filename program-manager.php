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
					<p>Registra o modifica las reglas y equivalencias de puntaje por categoría. También, podrás consultar las reglas actuales.</p>
				</div>
			</div>
			<div class="row nop">
				<h2>Consultar o registrar reglas de puntaje</h2>
				<p>Localiza las reglas de puntaje que deseas consultar o modificar buscando la categoría, producto o estado.</p>
				
				<?php include 'filtro-rules.php' ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-4">
					<a href="program-manager-rules-new.php" class="lebtn btn-main w-100">Registrar nueva regla</a>
				</div>
				<div class="spacer-p2">&nbsp;</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>

<?php include 'footer.php'; ?>