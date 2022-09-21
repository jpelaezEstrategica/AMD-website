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
								<h3>Listado de puntajes México y CAC</h3>
							</div>
							<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
								<a href="program-manager-mxycac-var-edit.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar catálogo de reglas"><i class="fa-solid fa-book"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction active" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Revisión de registro de factura"><i class="fa-solid fa-eye"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Región:</b><br>
								<span class="ruleData" id="ruleRegion">México y CAC</span></p>
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
			<div class="card">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<div class="row">
							<div class="col-12 col-md-8 col-lg-10">
								<h3>Actualizar reglas  de puntaje</h3>
								<p>Marca el producto del puntaje base o temporal, la equivalencia, período de duración de la promoción, región y categoría de Partner en la que aplicará la regla.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h3>Selecciona la región</h3>
						<form>
							<div class="row nop d-flex justify-content-between">
								<div class="col-12 col-xs-6">
									<b>Regiones:</b>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<label for="ruleRegionMxycac">México y CAC <input type="checkbox" checked></label>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<label for="ruleRegionSsa">SSA <input type="checkbox"></label>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<label for="ruleRegionBr">Brasil <input type="checkbox"></label>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<label for="ruleRegionAll">Todas <input type="checkbox"></label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h3>Selecciona la categoría del partner</h3>
						<form>
							<div class="row nop d-flex justify-content-between">
								<div class="col-12 col-xs-6">
									<b>Categorías:</b>
								</div>
								<div class="col-8 col-md-3 col-lg-3">
									<label for="pCatVar">Var / Commercial <input type="checkbox" checked></label>
								</div>
								<div class="col-8 col-md-3 col-lg-3">
									<label for="pCatRcomp">Reseller/Components <input type="checkbox"></label>
								</div>
								<div class="col-8 col-md-3 col-lg-3">
									<label for="pCatRcomm">Reseller/Commercial <input type="checkbox"></label>
								</div>
								<div class="col-8 col-md-3 col-lg-3">
									<label for="pCatAll">Todas <input type="checkbox"></label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h3>Establece una nueva regla</h3>
						<p>Establece los puntos máximos a otorgar en esta promoción.</p>
						<form>
							<div class="row nop d-flex justify-content-between">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="nruleName">Registra nombre de la regla:</label>
									<input type="text" class="w-100" placeholder="Ej. Promociones AMD Ryzen™ 5">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="nruleDescrip">Descripción de la regla:</label>
									<input type="text" class="w-100" placeholder="Ej. Dobles puntos durante todo el trimestre">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h3>Establece el puntaje</h3>
						<p>Puntaje o puntaje temporal de la nueva regla</p>
						<form>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD Ryzen™ 3</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD Ryzen™ 5</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD Ryzen™ 7</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD Ryzen™ 9</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD Ryzen™ Threadripper™</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD EPYC™ 8-12n</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD EPYC™ 16-32n</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD EPYC™ 48-56n</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD EPYC™ 64n</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-4 col-lg-4">
									<p class="nop">AMD™ Arena's Missions</p>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<input type="text" class="w-100" placeholder="Coloca el puntaje temporal">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded-bottom">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h3>Establece las fechas</h3>
						<p>Establece los puntos máximos a otorgar en esta promoción.</p>
						<form>
							<div class="row nop d-flex justify-content-between">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop"><b>Fecha de registro de la regla</b> <br>
									Añade este campo sólo si el cambio es definitiva.</p>
									<label for="ruleDateRecord">Establece la fecha de registro de la regla:</label>
									<input type="date">
									<p class="remind mt-3">Recuerda que al establecer una nueva regla definitiva los Términos y Condiciones deberán modificarse, también.</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop"><b>Fecha de duración del puntaje temporal </b> <br>
									Registra la fecha de inicio y de término de la promoción.</p>
									<div class="row">
										<div class="col-6">
											<label for="ruleDateStart">Establece la fecha de inicio:</label>
											<input type="date">
										</div>
										<div class="col-6">
											<label for="ruleDateEnd">Establece la fecha de término:</label>
											<input type="date">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="row d-flex justify-content-between">
				<div class="col-12 col-md-5 col-lg-5">
					<a href="#" class="lebtn btn-white">Activar / Desactivar Puntaje temporal</a>
				</div>
				<div class="col-12 col-md-5 col-lg-5">
					<a href="#" class="lebtn btn-main">Registrar nueva regla</a>
				</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

</main>

<?php include 'footer.php'; ?>