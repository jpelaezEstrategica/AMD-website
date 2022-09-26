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
								<option value="0" selected>Selecciona la región</option>
								<option value="mxycac">México y CAC</option>
								<option value="ssa">SSA</option>
								<option value="br">Brasil</option>
								<!-- <option value="mxycac">México y CAC</option> -->
								<!-- <option value="ssa">SSA</option> -->
								<!-- <option value="br">Brasil</option> -->
							</select>
						</div>
						<div class="col-4 col-md-3 col-lg-3">
							<label for="categorules">Categoría</label><br>
							<select name="categorules" id="categorules" class="w-75">
								<option value="0" selected> Selecciona la Categoría</option>
								<option value="varcom">VAR/Comercial</option>
								<option value="rcomponent">Reseller/Components</option>
								<option value="rcommercial">Reseller/Commercial</option>
							</select>
						</div>
						<div class="col-4 col-md-3 col-lg-3">
							<label for="sociolvlrules">Nivel de Socio</label><br>
							<!-- Este Select solo aparece cuando se escoge Var -->
							<select name="sociolvlrules" id="sociolvlrules" class="w-75">
								<option value="0" selected>Selecciona el nivel</option>
								<option value="exce">Executive</option>
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