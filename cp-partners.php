<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop">
				<div class="col-12">
					<h2>Consola de administración de partners<span class="terminal">_</span></h2>
					<p>Bienvenido a la consola de administración de AMD Ultimate Connection. Desde aquí podrás registrar, consultar, actualizar, evaluar, bloquear y desbloquear a todos los partners de la región que forman parte del programa de socios AMD Ultimate Connection. </p>
				</div>
			</div>
			<?php include 'partner-search-and-add.php' ?>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->


	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 2 - Registra Partner [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
				<!-- CARD [↓] ------------------------ -->
				<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<div class="row">
								<div class="col-6 col-md-8 col-lg-10">
									<h3>Perfil del partner</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar partner"><i class="fa fa-pencil"></i></a>
									<a href="cp-partner-val-VarCom_SA.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia Sudamerica</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="parnerData" id="CatEmp">VAR / Commercial</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<span class="parnerData" id="PaisEmp">Perú</span></p>
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
									<h3>Perfil del partner</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar partner"><i class="fa fa-pencil"></i></a>
									<a href="cp-partner-val-VarCom_MX.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnología</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="parnerData" id="CatEmp">VAR / Commercial</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<span class="parnerData" id="PaisEmp">México</span></p>
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
									<h3>Perfil del partner</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar partner"><i class="fa fa-pencil"></i></a>
									<a href="cp-partner-val-VarCom_BR.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia do brasil</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="parnerData" id="CatEmp">VAR / Commercial</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<span class="parnerData" id="PaisEmp">Brasil</span></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- CARD [↑] ------------------------ -->
				<div class="spacer-pm"></div>
				<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<div class="row">
								<div class="col-6 col-md-8 col-lg-10">
									<h3>Perfil del partner</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar partner"><i class="fa fa-pencil"></i></a>
									<a href="cp-partner-val-Components.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia RCOMP</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="parnerData" id="CatEmp">Reseller / Components</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<span class="parnerData" id="PaisEmp">México</span></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- CARD [↑] ------------------------ -->
				<div class="spacer-pm"></div>
								<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<div class="row">
								<div class="col-6 col-md-8 col-lg-10">
									<h3>Perfil del partner</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar partner"><i class="fa fa-pencil"></i></a>
									<a href="cp-partner-val-Commercial.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia RCOMM</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="parnerData" id="CatEmp">Reseller / Commercial</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<span class="parnerData" id="PaisEmp">México</span></p>
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
									<h3>Perfil del partner</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="javascript:;" class="d-inline-block rounded-circle pAction"><i class="fa fa-pencil"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction"><i class="fa fa-file-pen"></i></a>
									<a href="cp-partner-desbloqueado.php" class="d-inline-block rounded-circle pActionUL" data-bs-toggle="tooltip" data-bs-placement="top" title="Desbloquear partner"><i class="fa fa-unlock"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="parnerData" id="CatEmp">Reseller / Commercial</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<span class="parnerData" id="PaisEmp">México</span></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- CARD [↑] ------------------------ -->
				<div class="spacer-pm"></div>

		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 2 - Registra Partner [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<?php include 'modales.php' ?>
</main>
<?php include 'footer.php'; ?>