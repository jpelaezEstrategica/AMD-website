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
				<?php //include 'filtro-rules.php' ?>
			</div> -->
			<div class="spacer-pm"></div>
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded-top">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h3>Establece una nueva regla</h3>
						<p>Registra el nombre y detalle de la nueva regla. Si aplica, incluye en el nombre de la regla la región y el producto al que haces referencia.</p>
						<form>
							<div class="row nop d-flex justify-content-between">
								<div class="col-12 col-md-4 col-lg-4">
									<label class="color01" for="nruleName">Registra nombre de la regla*:</label>
									<input type="text" class="w-100" placeholder="Dobles puntos AMD Ryzen™ 5 México">
								</div>
								<div class="col-12 col-md-5 col-lg-5">
									<label class="color01" for="nruleDescrip">Descripción de la regla*:</label>
									<input type="text" class="w-100" placeholder="Ej. Dobles puntos al vender AMD Ryzen 5">
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<label class="color01" for="nruleDescrip">Establece el puntaje de la regla*:</label>
									<input type="text" class="w-100" placeholder="Ej. 10">
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
			<!-- <div class="card rounded-bottom">
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
									<input type="text" class="w-100" placeholder="Coloca el puntaje">
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
			</div> -->
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<div class="row d-flex justify-content-between">
				<div class="col-12 col-md-5 col-lg-5">
					<!-- Modal aparece si salen de esta pantalla si editaron y no salvaron -->
					<a href="javscript:;" data-bs-toggle="modal" data-bs-target="#alertaSalvarRegla" class="lebtn btn-main">Volver a mi cuenta</a>
				</div>
				<div class="col-12 col-md-5 col-lg-5">
					<a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#alertaNuevaRegla"  class="lebtn btn-main">Guardar</a>
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