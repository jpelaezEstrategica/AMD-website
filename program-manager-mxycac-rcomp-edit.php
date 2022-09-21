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
								<a href="#" class="d-inline-block rounded-circle pAction active" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar catálogo de reglas"><i class="fa-solid fa-book"></i></a>
								<a href="#" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar reglas"><i class="fa fa-file-pen"></i></a>
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
			<div class="card rounded-bottom">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-11">
						<h2>Listado de puntajes México y CAC</h2>
						<div class="row justify-content-end">
							<h3>Categoría Reseller/Components</h3>
							<table class="valuation-table2 sb-none td-6 d-none d-md-block d-lg-block">
								<tr bgcolor="#000000" class="valuation-head">
									<td>Nombre</td>
									<td>Descripción</td>
									<td>Periodo</td>
									<td>Productos</td>
									<td>Puntaje</td>
									<td>Puntaje temporal</td>
								</tr>
								<tr>
									<td rowspan="2">Dobles puntos patrios</td>
									<td rowspan="2">Los AMD Ryzen™ 5 y los AMD Ryzen™ Threadripper™  valen dobles puntos</td>
									<td rowspan="2">01/09/22 - 30/09/22</td>
									<td>AMD Ryzen™ 5 </td>
									<td>5 puntos</td>
									<td>10 pt</td>
								</tr>
								<tr>
									<td>AMD Ryzen™ Threadripper™ </td>
									<td>45 puntos</td>
									<td>90 pt</td>
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
									<td bgcolor="#000000" class="valuation-head">Productos</td>
									<td>AMD Ryzen™ 5 </td>
									<td>AMD Ryzen™ Threadripper™ </td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Puntaje</td>
									<td>5 puntos</td>
									<td>45 puntos</td>
								</tr>
								<tr>
									<td bgcolor="#000000" class="valuation-head">Puntaje temporal</td>
									<td>10 pt</td>
									<td>90 pt</td>
								</tr>
							</table>
							<div class="spacer-pm"></div>
							<h3>Listado regular activo</h3>
							<table class="valuation-table2 sb-none">
								<tr bgcolor="#000000" class="valuation-head">
									<td>Productos</td>
									<td>Puntaje</td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 3</td>
									<td>3 puntos</td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 5</td>
									<td>5 puntos</td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 7</td>
									<td>7 puntos</td>
								</tr>
								<tr>
									<td>AMD Ryzen™ 9</td>
									<td>9 puntos</td>
								</tr>
								<tr>
									<td>AMD Ryzen™ Threadripper™</td>
									<td>11 puntos</td>
								</tr>
								<tr>
									<td>AMD EPYC™ 8-12n</td>
									<td>17 puntos</td>
								</tr>
								<tr>
									<td>AMD EPYC™ 16-32n</td>
									<td>29 puntos</td>
								</tr>
								<tr>
									<td>AMD EPYC™ 48-56n </td>
									<td>43puntos</td>
								</tr>
								<tr>
									<td>AMD EPYC™ 64n </td>
									<td>76 puntos</td>
								</tr>
								<tr>
									<td>AMD™ Arena´s Missions </td>
									<td>5 puntos</td>
								</tr>
							</table>
							<div class="col-12 col-md-4 col-lg-4 pt-5">
								<a href="#" class="lebtn btn-ghost">Actualizar reglas</a>
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