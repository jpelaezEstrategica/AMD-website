<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop">
				<div class="col-12">
					<h2>Consola de administración de partners<span class="terminal">_</span></h2>
					<p>Bienvenido a la consola de administración de AMD Ultimate Connection. Desde aquí podrás registrar, consultar, actualizar, evaluar, bloquear y desbloquear a todos los partners de la región que forman parte del programa de socios AMD Ultimate Connection. </p>
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
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancelar edicion"><i class="fa-solid fa-xmark"></i></a>
									<a href="cp-partner-valuation.php" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Calificar partner"><i class="fa fa-file-pen"></i></a>
									<a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear partner"><i class="fa fa-lock" data-bs-toggle="modal" data-bs-target="#lockPart"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Nombre de la empresa:</b><br>
									<input type="text" class="partnerData" id="NomEmp" value="Supertecnologia"></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Categoría:</b><br>
									<input type="text" class="partnerData" id="CatEmp" value="Reseller / Commercial"></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>Estado:</b> <br>
									<input type="text" class="partnerData" id="EdoEmp" value="Activo"></p>
								</div>
								<div class="col-12 col-md-3 col-lg-3">
									<p><b>País de origen:</b> <br>
									<input type="text" class="partnerData" id="PaisEmp" value="México"></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="info-partner">
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-7">
										<h3>Información del partner</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-5 d-flex justify-content-start">
										<a href="cp-partner-info.php" class="lebtn btn-ghost w-50 m-1">Cancelar</a>
										<a href="cp-partner-info-success.php" class="lebtn btn-main w-50 m-1">Guardar</a>
									</div>
								</div>
								<div class="row d-flex justify-content-lg-around justify-content-sm-startjustify-content-start">
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>ID Partner:</b><br>
										<input type="text" class="partnerData" id="IdPart" value="No.Id"></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nombre Comercial:</b><br>
										<input type="text" class="partnerData" id="nomComercial" value="Reseller / Commercial"></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Categoría:</b> <br>
										<input type="text" class="partnerData" id="CatPartner" value="VAR / Commercial"></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nivel:</b> <br>
										<input type="text" class="partnerData" id="varLvl" value="Executive"></p>
									</div>
									<div class="col-4 col-md-6 col-lg-2">
										<p><b>Nombre Legal:</b> <br>
										<input type="text" class="partnerData" id="nomLegal" value="0123435678"></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-7">
										<h3>Domicilio</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-5 d-flex justify-content-start">
										<a href="cp-partner-info.php" class="lebtn btn-ghost w-50 m-1">Cancelar</a>
										<a href="cp-partner-info-success.php" class="lebtn btn-main w-50 m-1">Guardar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Calle: </b><br>
										<input type="text" class="partnerData" id="empCalle" value="Los Angeles, Colorado 24640">
										</p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b> Número: </b><br>
										<input type="text" class="partnerData" id="empNumExt" value="7">
										</p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  Colonia: </b> <br>
										<input type="text" class="partnerData" id="empColBarrio" value="Henderson">
										</p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  Código Postal: </b> <br>
										<input type="text" class="partnerData" id="empCP" value="00000">
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>Municipio: </b><br>
										<input type="text" class="partnerData" id="empCalle" value="West Virginia">
										</p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b> Ciudad:  </b><br>
										<input type="text" class="partnerData" id="empNumExt" value="Kansas">
										</p>
									</div>
									<div class="col-6 col-md-3 col-lg-3">
										<p><b>  País: </b> <br>
										<input type="text" class="partnerData" id="empColBarrio" value="México">
										</p>
									</div>
									<div class="col-6 col-md-3 col-lg-3 telefonoinputs">
										<p><b>  Teléfono principal: </b> <br>
										<select name="lada" id="empLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolivia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Chile</option>
										<option value="+57">Colombia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Ecuador</option>
										<option value="+52">México</option>
										<option value="+51">Perú</option>
										</select>
										<input type="text" placeholder="Ejemplo: (55) 5382 4456" value="5512345678">
										</p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-7">
										<h3>Datos del contacto principal de la empresa</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-5 d-flex justify-content-start">
										<a href="cp-partner-info.php" class="lebtn btn-ghost w-50 m-1">Cancelar</a>
										<a href="cp-partner-info-success.php" class="lebtn btn-main w-50 m-1">Guardar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Nombre: </b><br>
										<input type="text" class="partnerData" id="contNom" value="Cristal">
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Apellido: </b><br>
										<input type="text" class="partnerData" id="contApellido" value="Hawkins">
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Puesto: </b> <br>
										<input type="text" class="partnerData" id="contPuesto" value="Directora de Finanzas">
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Correo: </b><br>
										<input type="text" class="partnerData" id="contMail" value="chawkins11@snikwahlatsirc.net">
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4 telefonoinputs">
										<p><b>  Teléfono celular: </b> <br>
										<select name="lada" id="contTelcelLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolivia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Chile</option>
										<option value="+57">Colombia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Ecuador</option>
										<option value="+52">México</option>
										<option value="+51">Perú</option>
									</select>
									<input type="text" placeholder="Ejemplo: (55) 5382 4456">
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4 telefonoinputs">
										<p><b>  Teléfono fijo: </b> <br>
										<select name="lada" id="contTelfijoLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolivia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Chile</option>
										<option value="+57">Colombia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Ecuador</option>
										<option value="+52">México</option>
										<option value="+51">Perú</option>
									</select>
									<input type="text" placeholder="Ejemplo: (55) 5382 4456">
										</p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card rounded-bottom">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-11">
								<div class="row">
									<div class="col-6 col-md-8 col-lg-7">
										<h3>Datos del contacto secundario de la empresa</h3>
									</div>
									<div class="col-6 col-md-4 col-lg-5 d-flex justify-content-start">
										<a href="cp-partner-info.php" class="lebtn btn-ghost w-50 m-1">Cancelar</a>
										<a href="cp-partner-info-success.php" class="lebtn btn-main w-50 m-1">Guardar</a>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Nombre: </b><br>
										<input type="text" class="partnerData" id="cont2Nom">
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Apellido: </b><br>
										<input type="text" class="partnerData" id="cont2Apellido">
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4">
										<p><b> Puesto: </b> <br>
										<input type="text" class="partnerData" id="cont2Puesto">
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-md-4 col-lg-4">
										<p><b>Correo: </b><br>
										<input type="text" class="partnerData" id="cont2Mail" >
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4 telefonoinputs">
										<p><b>  Teléfono celular: </b> <br>
										<select name="lada" id="cont2TelcelLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolivia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Chile</option>
										<option value="+57">Colombia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Ecuador</option>
										<option value="+52">México</option>
										<option value="+51">Perú</option>
									</select>
									<input type="text" placeholder="Ejemplo: (55) 5382 4456">
										</p>
									</div>
									<div class="col-6 col-md-4 col-lg-4 telefonoinputs">
										<p><b>  Teléfono fijo: </b> <br>
										<select name="lada" id="cont2TelfijoLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolivia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Chile</option>
										<option value="+57">Colombia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Ecuador</option>
										<option value="+52">México</option>
										<option value="+51">Perú</option>
									</select>
									<input type="text" placeholder="Ejemplo: (55) 5382 4456">
										</p>
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