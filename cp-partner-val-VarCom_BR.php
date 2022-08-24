<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop">
				<div class="col-12">
					<h2>Resultados de cumplimiento<span class="terminal">_</span></h2>
					<p>Para modificar o actualizar el resultado del cumplimiento del Partner registrado en AMD Ultimate Connection por trimestre, visualiza el listado de actividades definidas por categoría y marca los resultados actuales.</p>
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
				<div class="card rounded-top">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<div class="row">
								<div class="col-6 col-md-8 col-lg-10">
									<h3>Perfil del partner</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partners.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancelar edición"><i class="fa-solid fa-xmark"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia do Brasil</span></p>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="partnerData" id="CatEmp">VAR / Commercial</span></p>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<span class="partnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<span class="partnerData" id="PaisEmp">México</span></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="info-partner">
					<div class="card rounded-bottom">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>Categoría</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-4 col-md-3 col-lg-3">
										<p><b>Categoría:</b> <br>
										<span class="partnerData" id="CatPartner">VAR / Commercial</span></p>
									</div>
									<div class="col-4 col-md-3 col-lg-3">
										<p><b>Nivel actual del Partner:</b> <br>
										<span class="partnerData" id="varLvl">Executive</span></p>
									</div>
								</div>
								<div class="row">
									<table class="valuation-table td-5 d-none d-md-block d-lg-block">
										<tr clasS="valuation-head" bgcolor="#000000">
											<td>Resultados</td>
											<td>Unidades Ryzen trimestrales</td>
											<td>Unidades Epyc trimestrales</td>
											<td>Reporte mensual de Sales-out</td>
											<td>Vendedores completando Misiones en Area al trimestre</td>
										</tr>
										<tr>
											<td>Partner Executive</td>
											<td>5,000</td>
											<td>120</td>
											<td>Si</td>
											<td>2</td>
										</tr>
									</table>
									<table class="valuation-table td-5 d-block d-md-none d-lg-none">
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
											<td align="center">Partner Executive</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Unidades Ryzen trimestrales</td>
											<td align="center">5,000</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Unidades Epyc trimestrales</td>
											<td align="center">120</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Reporte mensual de Sales-out</td>
											<td align="center">Si</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
											<td align="center">2</td>
										</tr>
									</table>
								</div>
									<br>
								<div class="row mb-5">
									<!-- Nav tabs -->
									<ul class="nav lenav-tabs d-flex justify-content-end" id="myTab" role="tablist">
									  <li class="nav-item" role="presentation">
									    <button class="nav-link active" id="pEx-tab" data-bs-toggle="tab" data-bs-target="#PExecutive" type="button" role="tab" aria-controls="PExecutive" aria-selected="true">Partner Executive</button>
									  </li>
									  <li class="nav-item" role="presentation">
									    <button class="nav-link" id="pEl-tab" data-bs-toggle="tab" data-bs-target="#PElite" type="button" role="tab" aria-controls="PElite" aria-selected="false">Partner Elite</button>
									  </li>
									  <li class="nav-item" role="presentation">
									    <button class="nav-link" id="pSel-tab" data-bs-toggle="tab" data-bs-target="#PSelect" type="button" role="tab" aria-controls="PSelect" aria-selected="false">Partner Select</button>
									  </li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
									  <div class="tab-pane active" id="PExecutive" role="tabpanel" aria-labelledby="pEx-tab">
									  	<h3>Listado de activivades del nivel Partner Executive </h3>
									  	<table class="valuation-table td-5 d-none d-md-block d-lg-block">
  											<tr clasS="valuation-head" bgcolor="#000000">
  												<td>Resultados anuales esperados</td>
  												<td>Unidades Ryzen por año</td>
  												<td>Unidades Epyc trimestrales</td>
  												<td>Reporte Mensual de Sales-out</td>
  												<td>Vendedores completando Misiones en Area al trimestre</td>
  											</tr>
  											<tr>
  												<td>Partner Executive</td>
  												<td>20,000</td>
  												<td>400</td>
  												<td>Si</td>
  												<td>6</td>
  											</tr>
  										</table>
  										<table class="valuation-table td-5 d-block d-md-none d-lg-none">
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
  												<td align="center">Partner Executive</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Ryzen trimestrales</td>
  												<td align="center">20,000</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Epyc trimestrales</td>
  												<td align="center">400</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
  												<td align="center">6</td>
  											</tr>
  										</table>
									  </div>
									  <div class="tab-pane" id="PElite" role="tabpanel" aria-labelledby="pEl-tab">
									  	<h3>Listado de activivades del nivel Partner Elite </h3>
									  	<table class="valuation-table td-5 d-none d-md-block d-lg-block">
  											<tr clasS="valuation-head" bgcolor="#000000">
  												<td>Resultados anuales esperados</td>
  												<td>Unidades Ryzen por año</td>
  												<td>Unidades Epyc trimestrales</td>
  												<td>Reporte Mensual de Sales-out</td>
  												<td>Vendedores completando Misiones en Area al trimestre</td>
  											</tr>
  											<tr>
  												<td>Partner Elite</td>
  												<td>8,000</td>
  												<td>200</td>
  												<td>Si</td>
  												<td>4</td>
  											</tr>
  										</table>
  										<table class="valuation-table td-5 d-block d-md-none d-lg-none">
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
  												<td align="center">Partner Elite</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Ryzen trimestrales</td>
  												<td align="center">8,000</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Epyc trimestrales</td>
  												<td align="center">200</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
  												<td align="center">4</td>
  											</tr>
  										</table>
									  </div>
									  <div class="tab-pane" id="PSelect" role="tabpanel" aria-labelledby="pSel-tab">
									  	<h3>Listado de activivades del nivel Partner Select </h3>
									  	<table class="valuation-table td-5 d-none d-md-block d-lg-block">
  											<tr clasS="valuation-head" bgcolor="#000000">
  												<td>Resultados anuales esperados</td>
  												<td>Unidades Ryzen por año</td>
  												<td>Unidades Epyc trimestrales</td>
  												<td>Reporte Mensual de Sales-out</td>
  												<td>Vendedores completando Misiones en Area al trimestre</td>
  											</tr>
  											<tr>
  												<td>Partner Select</td>
  												<td>4,000</td>
  												<td>100</td>
  												<td>Si</td>
  												<td>2</td>
  											</tr>
  										</table>
  										<table class="valuation-table td-5 d-block d-md-none d-lg-none">
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
  												<td align="center">Partner Select</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Ryzen trimestrales</td>
  												<td align="center">4,000</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Epyc trimestrales</td>
  												<td align="center">100</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
  												<td align="center">2</td>
  											</tr>
  										</table>
									  </div>
									</div>
								</div>
								<br>
								<div class="row nop">
									<h3 clasS=nop>Califica al partner</h3>
									<p>De acuerdo con la información del listado de actividades definidas por categoría y nivel del partner, actualiza la sección de Cumplimiento trimestral marcando el resultado actual:</p>
									<table class="timedval-table">
										<tr class="timedval-head">
											<td colspan="2">Cumplimiento de actividades por trimestre</td>
										</tr>
										<tr>
											<td>
												Primer Trimestre
											</td>
											<td align="right">
												Cubierto
											</td>
										</tr>
										<tr>
											<td>
												Segundo Trimestre
											</td>
											<td align="right">
												<label><input type="radio" name="trimes-eval2">Cubierto</label>
												<label><input type="radio" name="trimes-eval2">No Cubierto</label>
												<label><input type="radio" name="trimes-eval2">Excede</label>
											</td>
										</tr>
										<tr class=" disabled">
											<td>
												Tercer Trimestre
											</td>
											<td align="right">
												<label><input type="radio" name="trimes-eval3">Cubierto</label>
												<label><input type="radio" name="trimes-eval3">No Cubierto</label>
												<label><input type="radio" name="trimes-eval3">Excede</label>
											</td>
										</tr>
										<tr class=" disabled">
											<td>
												Cuarto Trimestre
											</td>
											<td align="right">
												<label><input type="radio" name="trimes-eval4">Cubierto</label>
												<label><input type="radio" name="trimes-eval4">No Cubierto</label>
												<label><input type="radio" name="trimes-eval4">Excede</label>
											</td>
										</tr>
									</table>
								</div>

							</div>
						</div>
					</div>
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