<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop l-esp">
				<div class="col-12">
					<h2>Resultados de cumplimiento<span class="terminal">_</span></h2>
					<p>Para modificar o actualizar el resultado del cumplimiento del Partner registrado en AMD Ultimate Connection por trimestre, visualiza el listado de actividades definidas por categoría y marca los resultados actuales.</p>
				</div>
			</div>
			<div class="row nop l-pt">
				<div class="col-12">
					<h2>RESULTADOS DE CONFORMIDADE<span class="terminal">_</span></h2>
					<p>Para modificar ou atualizar o resultado de conformidade de seu parceiro registrado no AMD Ultimate Connection por trimestre, veja a lista de atividades definidas por categoria e marque os resultados atuais.</p>
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
	<section class="bg-sec2 l-esp">
		<div class="container">
			<div class="alert alert-danger">
				<div class="row nop">
					<div class="col-10">
						El registro de los resultados trimestrales de la evaluación del partner no se completó correctamente. Te pedimos calificar todos los campos. 
					</div>
					<div class="col-2 d-flex justify-content-end">
						<a href="javascript:;"><i class="fa-solid fa-xmark"></i></a>
					</div>
				</div>
			</div>
			<div class="alert alert-success">
				<div class="row nop">
					<div class="col-10">
						El registro de los resultados trimestrales de la evaluación se registró exitosamente.
					</div>
					<div class="col-2 d-flex justify-content-end">
						<a href="javascript:;"><i class="fa-solid fa-xmark"></i></a>
					</div>
				</div>
			</div>
				<!-- CARD [↓] ------------------------ -->
				<div class="card rounded bg-success">
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
				<div class="card bg-sec3 rounded">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-12 col-md-8 col-lg-8">
										<p>Recuerda, las evaluaciones de cumplimiento se cierran cada año. Si este es el caso, por favor, solicita el cierre dando clic en el siguiente botón:</p>
									</div>
									<div class="col-12 col-md-4 col-lg-4">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#valuationClose" class="lebtn btn-white w-100">Solicito cierre de evaluación</a>
									</div>
								</div>
							</div>
						</div>
					</div>

		</div>
	</section>
	<section class="bg-sec2 l-pt">
		<div class="container">
			<div class="alert alert-danger">
				<div class="row nop">
					<div class="col-10">
						As informações trimestrais de avaliação de resultados de conformidade do parceiro foram atualizadas com sucesso.
					</div>
					<div class="col-2 d-flex justify-content-end">
						<a href="javascript:;"><i class="fa-solid fa-xmark"></i></a>
					</div>
				</div>
			</div>
			<div class="alert alert-success">
				<div class="row nop">
					<div class="col-10">
						O registo dos resultados trimestrais da avaliação foi registado com sucesso.
					</div>
					<div class="col-2 d-flex justify-content-end">
						<a href="javascript:;"><i class="fa-solid fa-xmark"></i></a>
					</div>
				</div>
			</div>
				<!-- CARD [↓] ------------------------ -->
				<div class="card rounded bg-success">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<div class="row">
								<div class="col-6 col-md-8 col-lg-10">
									<h3>PERFIL DO PARCEIRO</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar parceiro"><i class="fa fa-pencil"></i></a>
									<a href="cp-partner-val-VarCom_SA.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Qualificar parceiro"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear parceiro"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nome da empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia Sudamerica</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="parnerData" id="CatEmp">VAR / Commercial</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Status:</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origem:</b> <br>
									<span class="parnerData" id="PaisEmp">Perú</span></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- CARD [↑] ------------------------ -->
				<div class="spacer-pm"></div>
				<div class="card bg-sec3 rounded">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-12 col-md-8 col-lg-8">
										<p>Lembre-se, as revisões de conformidade são encerradas todos os anos. Se este for o caso, solicite o encerramento clicando no botão a seguir:</p>
									</div>
									<div class="col-12 col-md-4 col-lg-4">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#valuationClose" class="lebtn btn-white w-100">Solicito o encerramento da avaliação</a>
									</div>
								</div>
							</div>
						</div>
					</div>

		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 2 - Registra Partner [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<?php include 'modales.php' ?>
</main>
<?php include 'footer.php'; ?>