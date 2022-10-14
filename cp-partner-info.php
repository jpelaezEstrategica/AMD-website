<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop">
				<div class="col-12 l-esp">
					<h2>Consola de administración de partners<span class="terminal">_</span></h2>
					<p>Bienvenido a la consola de administración de AMD Ultimate Connection. Desde aquí podrás registrar, consultar, actualizar, evaluar, bloquear y desbloquear a todos los partners de la región que forman parte del programa de socios AMD Ultimate Connection. </p>
				</div>
				<div class="col-12 l-pt">
					<h2>CONSOLE DE ADMINISTRAÇÃO DE PARCEIROS<span class="terminal">_</span></h2>
					<p>Bem-vindo à AMD Ultimate Connection Management Console. A partir daqui você poderá cadastrar, consultar, atualizar, avaliar, bloquear e desbloquear todos os parceiros da região que fazem parte do programa de parceiros AMD Ultimate Connection.</p>
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
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar partner"><i class="fa fa-pencil"></i></a>
									<a href="cp-partner-valuation.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
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
									<span class="partnerData" id="CatEmp">Reseller / Commercial</span></p>
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
				<div class="card rounded l-pt">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<div class="row">
								<div class="col-6 col-md-8 col-lg-10">
									<h3>PERFIL DO PARCEIRO</h3>
								</div>
								<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-around partnerActions">
									<a href="cp-partner-info.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Editar parceiro"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a href="cp-partner-val-VarCom_SA.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Qualificar parceiro"><i class="fa fa-file-pen" aria-hidden="true"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Bloquear parceiro"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nome da empresa:</b><br>
									<span class="partnerData" id="NomEmp">Supertecnologia</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoria:</b><br>
									<span class="parnerData" id="CatEmp">Reseller/ Commercial</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Status Commercial</b> <br>
									<span class="parnerData" id="EdoEmp">Activo</span></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origem:</b> <br>
									<span class="parnerData" id="PaisEmp">Mexico</span></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="info-partner l-esp">
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>Información del partner</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row d-flex justify-content-lg-around justify-content-sm-startjustify-content-start">
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>ID Partner:</b><br>
										<span class="partnerData" id="IdPart">No.Id</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nombre Comercial:</b><br>
										<span class="partnerData" id="nomComercial">Reseller / Commercial</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Categoría:</b> <br>
										<span class="partnerData" id="CatPartner">VAR / Commercial</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nivel:</b> <br>
										<span class="partnerData" id="varLvl">Executive</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nombre Legal:</b> <br>
										<span class="partnerData" id="nomLegal">0123435678</span></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>Domicilio</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Calle: </b><br>
										<span class="partnerData" id="empCalle">
											Los Angeles, Colorado 24640
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b> Número: </b><br>
										<span class="partnerData" id="empNumExt">
											7
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  Colonia: </b> <br>
										<span class="partnerData" id="empColBarrio">
											Henderson
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  Código Postal: </b> <br>
										<span class="partnerData" id="empCP">
											01234
										</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Municipio: </b><br>
										<span class="partnerData" id="empCalle">
											West Virginia
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b> Ciudad:  </b><br>
										<span class="partnerData" id="empNumExt">
											Kansas
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  País: </b> <br>
										<span class="partnerData" id="empColBarrio">
											México
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  Teléfono principal: </b> <br>
										<span class="partnerData" id="empLada">(55)</span><span class="partnerData" id="empTelefono"> 01234 5678
										</span></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>Datos del contacto principal de la empresa</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Nombre: </b><br>
										<span class="partnerData" id="contNom">
											Cristal
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Apellido: </b><br>
										<span class="partnerData" id="contApellido">
											Hawkins
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Cargo: </b> <br>
										<span class="partnerData" id="contPuesto">
											Directora de Finanzas
										</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Correo: </b><br>
										<span class="partnerData" id="contMail">
											chawkins11@snikwahlatsirc.net
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Teléfono celular: </b> <br>
										<span class="partnerData" id="contTelcelLada">(55)</span><span class="partnerData" id="contTelcel"> 01234 5678
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Teléfono celular: </b> <br>
										<span class="partnerData" id="contTelfijoLada">(55)</span><span class="partnerData" id="contTelfijo"> 01234 5678
										</span></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card rounded-bottom">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>Datos del contacto secundario de la empresa</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Nombre: </b><br>
										<span class="partnerData" id="cont2Nom">
											&nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Apellido: </b><br>
										<span class="partnerData" id="cont2Apellido">
											&nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Cargo: </b> <br>
										<span class="partnerData" id="cont2Puesto">
											&nbsp;
										</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Correo: </b><br>
										<span class="partnerData" id="cont2Mail">
											&nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Teléfono celular: </b> <br>
										<span class="partnerData" id="cont2TelcelLada">&nbsp;</span><span class="partnerData" id="cont2Telcel"> &nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Teléfono celular: </b> <br>
										<span class="partnerData" id="cont2TelfijoLada">&nbsp;</span><span class="partnerData" id="cont2Telfijo"> &nbsp;
										</span></p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="info-partner l-pt">
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>INFORMAÇÕES DO PARCEIRO</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row d-flex justify-content-lg-around justify-content-sm-startjustify-content-start">
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>ID do parceiro:</b><br>
										<span class="partnerData" id="IdPart">Não. Id</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nome comercial:</b><br>
										<span class="partnerData" id="nomComercial">Reseller / Commercial</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Categoria:</b> <br>
										<span class="partnerData" id="CatPartner">VAR / Commercial</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nível Comercial:</b> <br>
										<span class="partnerData" id="varLvl">Executivo</span></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nome legal:</b> <br>
										<span class="partnerData" id="nomLegal">0123435678</span></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>ENDEREÇO</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Rua: </b><br>
										<span class="partnerData" id="empCalle">
											Los Angeles, Colorado 24640
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Número: </b><br>
										<span class="partnerData" id="empNumExt">
											7
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Colônia: </b> <br>
										<span class="partnerData" id="empColBarrio">
											Henderson
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  CEP: </b> <br>
										<span class="partnerData" id="empCP">
											01234
										</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Município: </b><br>
										<span class="partnerData" id="empCalle">
											West Virginia
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Cidade:  </b><br>
										<span class="partnerData" id="empNumExt">
											Kansas
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>País: </b> <br>
										<span class="partnerData" id="empColBarrio">
											México
										</span></p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b> Telefone principal: </b> <br>
										<span class="partnerData" id="empLada">(55)</span><span class="partnerData" id="empTelefono"> 01234 5678
										</span></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>DETALHES DE CONTATO DA EMPRESA PRINCIPAL</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Nome: </b><br>
										<span class="partnerData" id="contNom">
											Cristal
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> último Nomen: </b><br>
										<span class="partnerData" id="contApellido">
											Hawkins
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Posição: </b> <br>
										<span class="partnerData" id="contPuesto">
											Directora de Finanzas
										</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Email: </b><br>
										<span class="partnerData" id="contMail">
											chawkins11@snikwahlatsirc.net
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Telefone celular: </b> <br>
										<span class="partnerData" id="contTelcelLada">(55)</span><span class="partnerData" id="contTelcel"> 01234 5678
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Telefone celular: </b> <br>
										<span class="partnerData" id="contTelfijoLada">(55)</span><span class="partnerData" id="contTelfijo"> 01234 5678
										</span></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card rounded-bottom">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-10">
										<h3>DADOS DE CONTATO SECUNDÁRIO DA EMPRESA</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-2">
										<a href="cp-partner-edit.php" class="lebtn btn-ghost w-100">Editar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Nome: </b><br>
										<span class="partnerData" id="cont2Nom">
											&nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Último nome: </b><br>
										<span class="partnerData" id="cont2Apellido">
											&nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Posição: </b> <br>
										<span class="partnerData" id="cont2Puesto">
											&nbsp;
										</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Email: </b><br>
										<span class="partnerData" id="cont2Mail">
											&nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Telefone celular: </b> <br>
										<span class="partnerData" id="cont2TelcelLada">&nbsp;</span><span class="partnerData" id="cont2Telcel"> &nbsp;
										</span></p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>  Telefone celular: </b> <br>
										<span class="partnerData" id="cont2TelfijoLada">&nbsp;</span><span class="partnerData" id="cont2Telfijo"> &nbsp;
										</span></p>
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