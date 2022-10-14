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
			</div><!-- 
			<hr>
			<div class="row nop">
				<h2>Consultar o registrar reglas de puntaje</h2>
				<p>Localiza las reglas de puntaje que deseas registrar o consultar o modificar buscando la categoría, región o producto o estado.</p>
				
				<?php// include 'filtro-rules.php' ?>
			</div> -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<div class="row">
							<div class="col-6 col-md-8 col-lg-10">
								<!-- Nombre de la regla -->
								<h3>Dobles puntos verano</h3>
							</div>
							<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-end partnerActions">
								<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa/Inactiva"><i class="fa-solid fa-toggle-on"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Descripción:</b> <br>
								<span class="ruleData" id="ruleDesc">Los AMD Ryzen™ 5 valen doble puntos</span></p>
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
			<div class="card">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h3>Editar</h3>
						<p>Edita los detalles de la regla, no olvides guardar tus cambios al final.</p>
						<form>
							<div class="row nop d-flex justify-content-between">
								<div class="col-12 col-md-6 col-lg-6">
									<label class="color01" for="nruleName">Modifica nombre de la regla*:</label>
									<input type="text" class="w-100" value="Dobles puntos Verano">
									<!-- esta alerta solo aparece si se queda al guardar el campo esta vacio -->
									<div class="invalid-feedback" style="display: block;">
		      							Este campo no puede quedar vacio. Asigna un nombre.
		    						</div>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label class="color01" for="nruleDescrip">Modifica la descripción de la regla*:</label>
									<input type="text" class="w-100" value="Los AMD Ryzen™ 5 valen doble puntos">
									<!-- esta alerta solo aparece si se queda al guardar el campo esta vacio -->
									<div class="invalid-feedback" style="display: block;">
		      							Este campo no puede quedar vacio. Agrega una descripción.
		    						</div>
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
									<label for="pCatVar">Var / Commercial <input type="radio" name="ruleCatego" checked></label>
								</div>
								<div class="col-8 col-md-3 col-lg-3">
									<label for="pCatRcomp">Reseller/Components <input type="radio" name="ruleCatego"></label>
								</div>
								<div class="col-8 col-md-3 col-lg-3">
									<label for="pCatRcomm">Reseller/Commercial <input type="radio" name="ruleCatego"></label>
								</div>
								<div class="col-8 col-md-3 col-lg-3">
									<label for="pCatAll">Todas <input type="radio" name="ruleCatego"></label>
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
						<h3>Establece el puntaje</h3>
						<p>Coloca el puntaje que aplicará a la nueva regla, hazlo solamente sobre el producto o los productos en los que aplicará la regla.</p>
						<form>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD Ryzen™ 3</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD Ryzen™ 5</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" value="10">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD Ryzen™ 7</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD Ryzen™ 9</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD Ryzen™ Threadripper™</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD EPYC™ 8-12n</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD EPYC™ 16-32n</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD EPYC™ 48-56n</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD EPYC™ 64n</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
							<div class="row d-flex justify-content-between puntajesnuevos">
								<div class="col-12 col-md-6 col-lg-6">
									<p class="nop">AMD™ Arena's Missions</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<div class="row d-flex justify-content-between">
				<div class="col-12 col-md-5 col-lg-5">
					<!-- Modal aparece si salen de esta pantalla si editaron y no salvaron -->
					<a href="javscript:;" data-bs-toggle="modal" data-bs-target="#alertaSalvarRegla" class="lebtn btn-main">Volver a mi cuenta</a>
				</div>
				<div class="col-12 col-md-5 col-lg-5">
					<a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#alertaConfirmEditRegla"  class="lebtn btn-main">Guardar</a>
				</div>
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
<?php include 'modales.php' ?>
</main>

<?php include 'footer.php'; ?>