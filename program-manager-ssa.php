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
				<h2>Consultar o registrar reglas de puntaje</h2>
				<p>Localiza la categoría  y país del origen de las reglas de puntaje que deseas consultar y modificar.</p>
				<!-- Filtro de las Reglas -->
				<form id="filtroRules">
					<div class="row align-items-end">
						<div class="col-4 col-md-3 col-lg-3">
							<label for="regionrules">Región</label><br>
							<select name="regiorules" id="regionrules" class="w-75">
								<option value="0">Selecciona la región</option>
								<option value="program-manager-mxycac.php">México y CAC</option>
								<option value="program-manager-ssa.php" selected>SSA</option>
								<option value="program-manager-br.php">Brasil</option>
								<!-- <option value="mxycac">México y CAC</option> -->
								<!-- <option value="ssa">SSA</option> -->
								<!-- <option value="br">Brasil</option> -->
							</select>
						</div>
						<div class="col-4 col-md-3 col-lg-3">
							<label for="categorules">Categoría</label><br>
							<select name="categorules" id="categorules" class="w-75">
								<option value="0"> Selecciona la Categoría</option>
								<option value="varcom" selected>VAR/Comercial</option>
								<option value="rcomponent">Reseller/Components</option>
								<option value="rcommercial">Reseller/Commercial</option>
							</select>
						</div>
						<div class="col-4 col-md-3 col-lg-3">
							<label for="sociolvlrules">Nivel de Socio</label><br>
							<!-- Este Select solo aparece cuando se escoge Var -->
							<select name="sociolvlrules" id="sociolvlrules" class="w-75">
								<option value="0">Selecciona el nivel</option>
								<option value="exce" selected>Executive</option>
								<option value="sel">Select</option>
								<option value="elt">Elite</option>
							</select>
							<!-- Este select aparece cuando escogen cualquiera de los Reseller -->
							<!-- <select name="sociolvlrules" id="sociolvlrules" class="w-75">
								<option value="0" selected>Selecciona el nivel</option>
								<option value="platinum">Platinum</option>
								<option value="gold">Gold</option>
								<option value="silver">Silver</option>
							</select> -->
						</div>
						<div class="col-12 col-md-3 col-lg-3">
							<a href="javascript:;" class="lebtn btn-ghost">Buscar</a>
						</div>
					</div>
				</form>
				<!-- Filtro de las Reglas -->
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
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Revisión de registro de factura"><i class="fa-solid fa-lightbulb"></i></a>
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
								<span class="ruleData" id="ruleLvl">Executive</span></p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
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