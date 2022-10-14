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
								<a href="#" class="d-inline-block rounded-circle pAction active" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar catálogo de reglas"><i class="fa-solid fa-book"></i></a>
								<a href="program-manager-rules-edit.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Regla activa"><i class="fa-regular fa-lightbulb"></i></a>
								<!-- <a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Regla inactiva"><i class="fa-solid fa-lightbulb"></i></a> -->
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Región:</b><br>
								<span class="ruleData" id="ruleRegion">SSA</span></p>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<p><b>Categoría del partner:</b><br>
								<span class="ruleData" id="ruleCat">VAR/Commercial</span></p>
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
			<!-- CARD [↓] ------------------------ -->
			<div class="card rounded-bottom">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h2>Listado de puntajes SSA</h2>
						<div class="row justify-content-end">
							<h3>Categoría VAR/Commercial</h3>
							<table class="valuation-table2 sb-none td-6 d-none d-md-block d-lg-block">
								<tr bgcolor="#000000" class="valuation-head">
									<td>Nombre</td>
									<td>Descripción</td>
									<td>Periodo</td>
									<td>Estado regla</td>
									<td>Productos</td>
									<td>Puntaje</td>
									<td>Puntaje temporal</td>
									<td>Estado puntaje</td>
								</tr>
								<tr>
									<td rowspan="2">Dobles puntos patrios</td>
									<td rowspan="2">Los AMD Ryzen™ 5 y los AMD Ryzen™ Threadripper™  valen dobles puntos</td>
									<td rowspan="2">01/09/22 - 30/09/22</td>
									<td rowspan="2">Activo</td>
									<td>AMD Ryzen™ 5 </td>
									<td>5 puntos</td>
									<td>10 pt</td>
									<td><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD Ryzen™ Threadripper™ </td>
									<td>11 puntos</td>
									<td>22 pt</td>
									<td><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
							</table>
							<table class="valuation-table2 td-3 sb-none d-block d-md-none d-lg-none w-100">
								<tr>
									<td bgcolor="#000000" class="valuation-head">Nombre</td>
									<td colspan="2">Dobles puntos patrios</td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Descripción</td>
									<td colspan="2">Los AMD Ryzen™ 5 y los AMD Ryzen™ Threadripper™  valen dobles puntos</td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Periodo</td>
									<td colspan="2">01/09/22 - 30/09/22</td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Estado</td>
									<td colspan="2">Activo</td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Productos</td>
									<td>AMD Ryzen™ 5 </td>
									<td>AMD Ryzen™ Threadripper™ </td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Puntaje</td>
									<td>5 puntos</td>
									<td>11 puntos</td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Puntaje temporal</td>
									<td>10 pt</td>
									<td>22 pt</td>
								</tr>
							</table>
							<div class="spacer-pm"></div>
							<h3>Listado regular activo</h3>
							<table class="valuation-table2 sb-none">
								<tr bgcolor="#000000" class="valuation-head">
									<td>Productos</td>
									<td>Estado regla</td>
									<td>Puntaje</td>
									<td align="center">Modificar Estado</td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 3</td>
									<td>Activo</td>
									<td>3 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 5</td>
									<td>Inactivo</td>
									<td>5 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-off"></i></a></td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 7</td>
									<td>Activo</td>
									<td>7 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 9</td>
									<td>Activo</td>
									<td>9 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD Ryzen™ Threadripper™</td>
									<td>Inactivo</td>
									<td>11 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-off"></i></a></td>
								</tr>
								<tr>
									<td>AMD EPYC™ 8-12n</td>
									<td>Activo</td>
									<td>17 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD EPYC™ 16-32n</td>
									<td>Activo</td>
									<td>29 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD EPYC™ 48-56n </td>
									<td>Activo</td>
									<td>43puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD EPYC™ 64n </td>
									<td>Activo</td>
									<td>76 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
								<tr>
									<td>AMD™ Arena´s Missions </td>
									<td>Activo</td>
									<td>5 puntos</td>
									<td align="center"><a href="#" class="d-inline-block rounded-circle rAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Activa / Inactiva"><i class="fa-solid fa-toggle-on"></i></a></td>
								</tr>
							</table>
							<div class="col-12 col-md-4 col-lg-4 pt-5">
								<a href="program-manager-rules-edit.php" class="lebtn btn-ghost">Actualizar reglas</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CARD [↑] ------------------------ -->
			<div class="spacer-pm"></div>
			<div class="row d-flex justify-content-center">
				<div class="col-12 col-md-5 col-lg-5">
					<a href="program-manager.php" class="lebtn btn-main">Iniciar una busqueda nueva</a>
				</div>
				<!-- <div class="col-12 col-md-5 col-lg-5">
					<a href="program-manager-mxycac-var-edit.php" class="lebtn btn-main">Registrar nueva regla</a>
				</div> -->
			</div>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
<script></script>
</main>

<?php include 'footer.php'; ?>