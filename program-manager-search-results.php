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
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<div class="row">
							<div class="col-6 col-md-8 col-lg-10">
								<!-- Nombre de la regla -->
								<h3 class="ruleName"><b>Nombre de la regla:</b>
								<span class="ruleData" id="ruleDesc">Dobles puntos verano</span></h3>
							</div>
							<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
								<a href="program-manager-rules-edit.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Regla"><i class="fa fa-pencil"></i></a>
								<!-- <a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a> -->
								<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa/Inactiva"><i class="fa-solid fa-toggle-on"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Descripción:</b> <br>
								<span class="ruleData" id="ruleDesc">Los AMD Ryzen 5 valen doble puntos</span></p>
							</div>
							<div class="col-12 col-md-3 col-lg-3">
								<p><b>Categoría del partner:</b><br>
								<span class="ruleData" id="ruleCat">VAR/Commercial</span></p>
							</div>
							<div class="col-12 col-md-2 col-lg-2">
								<p><b>Puntaje:</b> <br>
								<span class="ruleData" id="rulePts">10</span></p>
							</div>
							<div class="col-12 col-md-3 col-lg-3">
								<p><b>Estado de la regla:</b> <br>
								<span class="ruleData" id="ruleStatus">Activa</span></p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded pLocked">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<div class="row">
							<div class="col-6 col-md-8 col-lg-10">
								<!-- Nombre de la regla -->
								<h3 class="ruleName"><b>Nombre de la regla:</b>
								<span class="ruleData" id="ruleDesc">Triple puntos Navidad</span></h3>
							</div>
							<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
								<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Regla"><i class="fa fa-pencil"></i></a>
								<!-- <a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a> -->
								<a href="javascript:;" class="d-inline-block rounded-circle pActionUL" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa/Inactiva"><i class="fa-solid fa-toggle-off"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Descripción:</b> <br>
								<span class="ruleData" id="ruleDesc">Los AMD Ryzen 5 valen el triple de puntos en Navidad</span></p>
							</div>
							<div class="col-12 col-md-3 col-lg-3">
								<p><b>Categoría del partner:</b><br>
								<span class="ruleData" id="ruleCat">VAR/Commercial</span></p>
							</div>
							<div class="col-12 col-md-2 col-lg-2">
								<p><b>Puntaje:</b> <br>
								<span class="ruleData" id="rulePts">15</span></p>
							</div>
							<div class="col-12 col-md-3 col-lg-3">
								<p><b>Estado de la regla:</b> <br>
								<span class="ruleData" id="ruleStatus">Inactiva</span></p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<div class="row justify-content-around">
				<div class="col-4">
					<a href="program-manager.php" class="lebtn btn-main w-100">Volver a Mi Cuenta</a>
				</div>
				<div class="col-4">
					<a href="program-manager-rules-new.php" class="lebtn btn-main w-100">Registrar nueva regla</a>
				</div>
			</div>

	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>

<?php include 'footer.php'; ?>