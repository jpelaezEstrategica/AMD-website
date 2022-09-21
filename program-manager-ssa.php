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
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<div class="row">
							<div class="col-6 col-md-8 col-lg-10">
								<h3>Listado de puntajes SSA</h3>
							</div>
							<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
								<a href="program-manager-ssa-var-edit.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar catálogo de reglas"><i class="fa-solid fa-book"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Revisión de registro de factura"><i class="fa-solid fa-eye"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Región:</b><br>
								<span class="ruleData" id="ruleRegion">SSA</span></p>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Categoría del partner:</b><br>
								<span class="ruleData" id="ruleCat">VAR/Components</span></p>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Nivel del socio:</b> <br>
								<span class="ruleData" id="ruleLvl">Platinum</span></p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<div class="row">
							<div class="col-6 col-md-8 col-lg-10">
								<h3>Listado de puntajes SSA</h3>
							</div>
							<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
								<a href="program-manager-ssa-rcomm-edit.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar catálogo de reglas"><i class="fa-solid fa-book"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Revisión de registro de factura"><i class="fa-solid fa-eye"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Región:</b><br>
								<span class="ruleData" id="ruleRegion">SSA</span></p>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Categoría del partner:</b><br>
								<span class="ruleData" id="ruleCat">Reseller/Components</span></p>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Nivel del socio:</b> <br>
								<span class="ruleData" id="ruleLvl">Platinum</span></p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<div class="row">
							<div class="col-6 col-md-8 col-lg-10">
								<h3>Listado de puntajes SSA</h3>
							</div>
							<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
								<a href="program-manager-ssa-rcomm-edit.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar catálogo de reglas"><i class="fa-solid fa-book"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Revisión de registro de factura"><i class="fa-solid fa-eye"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Región:</b><br>
								<span class="ruleData" id="ruleRegion">SSA</span></p>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Categoría del partner:</b><br>
								<span class="ruleData" id="ruleCat">Reseller/Commercial</span></p>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Nivel del socio:</b> <br>
								<span class="ruleData" id="ruleLvl">Platinum</span></p>
							</div>
						</div>

					</div>
				</div>
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