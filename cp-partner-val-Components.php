<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop">
				<div class="col-12 l-esp">
					<h2>Resultados de cumplimiento<span class="terminal">_</span></h2>
					<p>Para modificar o actualizar el resultado del cumplimiento del Partner registrado en AMD Ultimate Connection por trimestre, visualiza el listado de actividades definidas por categoría y marca los resultados actuales.</p>
				</div>
				<div class="col-12 l-pt">
					<h2>RESULTADOS DE CONFORMIDADE<span class="terminal">_</span></h2>
					<p>Para modificar ou atualizar o AMD Ultimate Connection Registrado Resultado de conformidade do parceiro por trimestre, veja a lista de atividades definidas por categoria e marque os resultados atuais.</p>
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
				<div class="card rounded-top l-esp">
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
									<span class="partnerData" id="NomEmp">Supertecnologia</span></p>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<span class="partnerData" id="CatEmp">Reseller / Components</span></p>
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
				<div class="card rounded-top l-pt">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<div class="row">
								<div class="col-6 col-md-8 col-lg-10">
									<h3>Perfil do parceiro</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partners.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancelar edición"><i class="fa-solid fa-xmark"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>Nome da empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia</span></p>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>Categoria:</b><br>
									<span class="partnerData" id="CatEmp">Revendedor / Componentes</span></p>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>Status comercial:</b> <br>
									<span class="partnerData" id="EdoEmp">Ativo</span></p>
								</div>
								<div class="col-6 col-md-3 col-lg-3">
									<p><b>País de origem:</b> <br>
									<span class="partnerData" id="PaisEmp">México</span></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="info-partner l-esp">
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
										<span class="partnerData" id="CatPartner">Reseller Commercial</span></p>
									</div>
									<div class="col-4 col-md-3 col-lg-3">
										<p><b>Nivel actual del Partner:</b> <br>
										<span class="partnerData" id="varLvl">Platinum</span></p>
									</div>
								</div>
								<div class="row">
									<table class="valuation-table td-3 d-none d-md-block d-lg-block">
										<tr clasS="valuation-head" bgcolor="#000000">
											<td>Resultados</td>
											<td>Puntajes de ventas por trimestre</td>
											<td>Vendedores completando Misiones en Area al trimestre</td>
										</tr>
										<tr>
											<td>Partner Platinum</td>
											<td>10,000 puntos</td>
											<td>2</td>
										</tr>
									</table>
									<table class="valuation-table td-3 d-block d-md-none d-lg-none">
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
											<td align="center">Partner Platinum</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Puntahes de ventas por trimestre</td>
											<td align="center">5,000</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
											<td align="center">2</td>
										</tr>
									</table>
								</div>
									<br>
								<div class="row mb-5 mt-5">
									<!-- Nav tabs -->
									<ul class="nav lenav-tabs d-flex justify-content-end" id="myTab" role="tablist">
									  <li class="nav-item" role="presentation">
									    <button class="nav-link active" id="pEx-tab" data-bs-toggle="tab" data-bs-target="#PExecutive" type="button" role="tab" aria-controls="PExecutive" aria-selected="true">Platinum</button>
									  </li>
									  <li class="nav-item" role="presentation">
									    <button class="nav-link" id="pEl-tab" data-bs-toggle="tab" data-bs-target="#PElite" type="button" role="tab" aria-controls="PElite" aria-selected="false">Gold</button>
									  </li>
									  <li class="nav-item" role="presentation">
									    <button class="nav-link" id="pSel-tab" data-bs-toggle="tab" data-bs-target="#PSelect" type="button" role="tab" aria-controls="PSelect" aria-selected="false">Silver</button>
									  </li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
									  <div class="tab-pane active" id="PExecutive" role="tabpanel" aria-labelledby="pEx-tab">
									  	<h3>Listado de activivades del nivel Partner Platinum </h3>
									  	<table class="valuation-table td-3 d-none d-md-block d-lg-block">
  											<tr clasS="valuation-head" bgcolor="#000000">
  												<td>Resultados anuales esperados</td>
  												<td>Puntaje de ventas por trimestr</td>
  												<td>Vendedores completando Misiones en Area al trimestre</td>
  											</tr>
  											<tr>
  												<td>Partner Platinum</td>
  												<td>5,000 puntos</td>
  												<td>2</td>
  											</tr>
  										</table>
  										<table class="valuation-table td-3 d-block d-md-none d-lg-none">
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
  												<td align="center">Partner Platinum</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Ryzen trimestrales</td>
  												<td align="center">5,000</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
  												<td align="center">2</td>
  											</tr>
  										</table>
									  </div>
									  <div class="tab-pane" id="PElite" role="tabpanel" aria-labelledby="pEl-tab">
									  	<h3>Listado de activivades del nivel Partner Gold </h3>
									  	<table class="valuation-table td-3 d-none d-md-block d-lg-block">
  											<tr clasS="valuation-head" bgcolor="#000000">
  												<td>Resultados anuales esperados</td>
  												<td>Puntaje de ventas por trimestr</td>
  												<td>Vendedores completando Misiones en Area al trimestre</td>
  											</tr>
  											<tr>
  												<td>Partner Gold</td>
  												<td>10,000 puntos</td>
  												<td>2</td>
  											</tr>
  										</table>
  										<table class="valuation-table td-3 d-block d-md-none d-lg-none">
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
  												<td align="center">Partner Gold</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Ryzen trimestrales</td>
  												<td align="center">5,000</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
  												<td align="center">2</td>
  											</tr>
  										</table>
									  </div>
									  <div class="tab-pane" id="PSelect" role="tabpanel" aria-labelledby="pSel-tab">
									  	<h3>Listado de activivades del nivel Partner Silver </h3>
									  	<table class="valuation-table td-3 d-none d-md-block d-lg-block">
  											<tr clasS="valuation-head" bgcolor="#000000">
  												<td>Resultados anuales esperados</td>
  												<td>Puntaje de ventas por trimestr</td>
  												<td>Vendedores completando Misiones en Area al trimestre</td>
  											</tr>
  											<tr>
  												<td>Partner Silver</td>
  												<td>10,000 puntos</td>
  												<td>2</td>
  											</tr>
  										</table>
  										<table class="valuation-table td-3 d-block d-md-none d-lg-none">
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
  												<td align="center">Partner Silver</td>
  											</tr>
  											<tr>
  												<td clasS="valuation-head" bgcolor="#000000">Unidades Ryzen trimestrales</td>
  												<td align="center">5,000</td>
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
				<div class="info-partner l-pt">
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
										<p><b>Categoría de parceiro atual:</b> <br>
										<span class="partnerData" id="CatPartner">Revendedor Componentes</span></p>
									</div>
									<div class="col-4 col-md-3 col-lg-3">
										<p><b>Nível atual Parceiro::</b> <br>
										<span class="partnerData" id="varLvl">Platinum</span></p>
									</div>
								</div>
								<div class="row">
									<table class="valuation-table td-3 d-none d-md-block d-lg-block">
										<tr clasS="valuation-head" bgcolor="#000000">
											<td>Resultados</td>
											<td>Pontos de vendas por trimestre</td>
											<td>Fornecedores que completam missões de área por trimestre</td>
										</tr>
										<tr>
											<td>Parceiro Platinum</td>
											<td>10,000 puntos</td>
											<td>2</td>
										</tr>
									</table>
									<table class="valuation-table td-3 d-block d-md-none d-lg-none">
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
											<td align="center">Parceiro Platinum</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Puntahes de ventas por trimestre</td>
											<td align="center">5,000</td>
										</tr>
										<tr>
											<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
											<td align="center">2</td>
										</tr>
									</table>
								</div>
									<br>
								<div class="row mb-5 mt-5">
									<!-- Nav tabs -->
									<ul class="nav lenav-tabs d-flex justify-content-end" id="myTab" role="tablist">
									  <li class="nav-item" role="presentation">
									    <button class="nav-link active" id="pEx-tab" data-bs-toggle="tab" data-bs-target="#PExecutivept" type="button" role="tab" aria-controls="PExecutivept" aria-selected="true">Platinum</button>
									  </li>
									  <li class="nav-item" role="presentation">
									    <button class="nav-link" id="pEl-tab" data-bs-toggle="tab" data-bs-target="#PElitept" type="button" role="tab" aria-controls="PElitept" aria-selected="false">Gold</button>
									  </li>
									  <li class="nav-item" role="presentation">
									    <button class="nav-link" id="pSel-tab" data-bs-toggle="tab" data-bs-target="#PSelectpt" type="button" role="tab" aria-controls="PSelectpt" aria-selected="false">Silver</button>
									  </li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="PExecutivept" role="tabpanel" aria-labelledby="pEx-tab">
										  	<h3>LISTA DE ATIVIDADES DE NÍVEL DE PARCEIRO Platinum</h3>
										  	<table class="valuation-table td-3 d-none d-md-block d-lg-block">
	  											<tr clasS="valuation-head" bgcolor="#000000">
	  												<td>Resultados</td>
													<td>Puntahes de ventas por trimestre</td>
													<td>Vendedores completando Misiones en Area al trimestre</td>
	  											</tr>
	  											<tr>
	  												<td>Parceiro Platinum</td>
	  												<td>10,000 puntos</td>
	  												<td>2</td>
	  											</tr>
	  										</table>
	  										<table class="valuation-table td-3 d-block d-md-none d-lg-none">
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
	  												<td align="center">Parceiro Platinum</td>
	  											</tr>
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Puntahes de ventas por trimestre</td>
	  												<td align="center">10,000</td>
	  											</tr>
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
	  												<td align="center">2</td>
	  											</tr>
	  										</table>
										  </div>
										<div class="tab-pane" id="PElitept" role="tabpanel" aria-labelledby="pEl-tab">
										  	<h3>Listado de activivades del nivel Partner Gold </h3>
										  	<table class="valuation-table td-3 d-none d-md-block d-lg-block">
	  											<tr clasS="valuation-head" bgcolor="#000000">
	  												<td>Resultados</td>
	  												<td>Puntahes de ventas por trimestre</td>
	  												<td>Vendedores completando Misiones en Area al trimestre</td>
	  											</tr>
	  											<tr>
	  												<td>Parceiro Gold</td>
	  												<td>5,000 puntos</td>
	  												<td>2</td>
	  											</tr>
	  										</table>
	  										<table class="valuation-table td-3 d-block d-md-none d-lg-none">
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
	  												<td align="center">Parceiro Gold</td>
	  											</tr>
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Puntahes de ventas por trimestre</td>
	  												<td align="center">5,000</td>
	  											</tr>
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Vendedores completando Misiones en Area al trimestre</td>
	  												<td align="center">2</td>
	  											</tr>
	  										</table>
										</div>
										<div class="tab-pane" id="PSelectpt" role="tabpanel" aria-labelledby="pSel-tab">
										  	<h3>Listado de activivades del nivel Partner Silver </h3>
										  	<table class="valuation-table td-3 d-none d-md-block d-lg-block">
	  											<tr clasS="valuation-head" bgcolor="#000000">
	  												<td>Resultados</td>
	  												<td>Puntahes de ventas por trimestre</td>
	  												<td>Vendedores completando Misiones en Area al trimestre</td>
	  											</tr>
	  											<tr>
	  												<td>Parceiro Silver</td>
	  												<td>500 puntos</td>
	  												<td>2</td>
	  											</tr>
	  										</table>
	  										<table class="valuation-table td-3 d-block d-md-none d-lg-none">
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Resultados</td>
	  												<td align="center">Parceiro Silver</td>
	  											</tr>
	  											<tr>
	  												<td clasS="valuation-head" bgcolor="#000000">Puntahes de ventas por trimestre</td>
	  												<td align="center">500</td>
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
									<h3 clasS=nop>QUALIFICAR O PARCEIRO</h3>
									<p>Com base nas informações da lista de atividades definidas por categoria e nível de parceiro, atualize a seção Conformidade Trimestral marcando o resultado atual:</p>
									<table class="timedval-table">
										<tr class="timedval-head">
											<td colspan="2">Implementação de Atividades por Trimestre</td>
										</tr>
										<tr>
											<td>
												Primeiro Trimestre
											</td>
											<td align="right">
												Cobert
											</td>
										</tr>
										<tr>
											<td>
												Segundo Trimestre
											</td>
											<td align="right">
												<label><input type="radio" name="trimes-eval2">Coberto</label>
												<label><input type="radio" name="trimes-eval2">Não Coberto</label>
												<label><input type="radio" name="trimes-eval2">Excede</label>
											</td>
										</tr>
										<tr class=" disabled">
											<td>
												Terceiro Trimestre
											</td>
											<td align="right">
												<label><input type="radio" name="trimes-eval3">Coberto</label>
												<label><input type="radio" name="trimes-eval3">Não Coberto</label>
												<label><input type="radio" name="trimes-eval3">Excede</label>
											</td>
										</tr>
										<tr class=" disabled">
											<td>
												Quarto Trimestre
											</td>
											<td align="right">
												<label><input type="radio" name="trimes-eval4">Coberto</label>
												<label><input type="radio" name="trimes-eval4">Não Coberto</label>
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