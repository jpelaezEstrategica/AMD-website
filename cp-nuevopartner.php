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
			<form action="#" id="nuevoPartner" clasS="needs-validation" novalidate>
<!-- CARD [↓] ------------------------ -->
				<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<h3>Establece la categoría</h3>
							<p>Establece la categoría del Partner a registrar:</p>
							 <select name="catPartner" id="catPartner">
							 	<option value selected>Selecciona una opción</option>
							 	<option id="varcommercial" value="varcommecial">VAR/Commercial</option>
							 	<option id="resellercomponents" value="resellercomponents">Reseller/Components</option>
							 	<option id="resellercommercial" value="resellercommercial">Reseller/Commercial</option>
							 </select>
							 <br><br>
							 <div class="row hidden" id="catPartnerop1">
							 	<div class="row nop d-flex justify-content-start">
							 		<label for="varLvl"><p>Selecciona el nivel de partner VAR/Commercial al que pertenece el registro:</p></label>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="varcommerial-lvl" value="executive" id="varcommercial-exe"><label for="varcommercial-exe">Executive</label>
							 		</div>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="varcommerial-lvl" value="elite" id="varcommercial-elt"><label for="varcommercial-elt">Elite</label>
							 		</div>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="varcommerial-lvl" value="select" id="varcommercial-sel"><label for="varcommercial-sel">Select</label>
							 		</div>
							 	</div>
							 </div>
							 <div class="row">
							 	<label for="joinVir"><input type="checkbox"> Forma parte de VIR</label>
							 </div>
							 <div class="row hidden" id="catPartnerop2">
							 	<div class="row nop d-flex justify-content-start">
							 		<label for="rComponentLvl"><p>Selecciona el nivel de partner Components/Commercial al que pertenece el registro:</p></label>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="component-lvl" value="plat" id="component-plat"><label for="component-plat">Platinum</label>
							 		</div>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="component-lvl" value="gold" id="component-gold"><label for="component-gold">Gold</label>
							 		</div>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="component-lvl" value="silver" id="component-silver"><label for="component-silver">Silver</label>
							 		</div>
							 	</div>
							 </div>
							 <div class="row hidden" id="catPartnerop3">
							 	<div class="row nop d-flex justify-content-start">
							 		<label for="rCommercialLvl"><p>Selecciona el nivel de partner Reseller al que pertenece el registro:</p></label>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="reseller-lvl" value="plat" id="reseller-plat"><label for="reseller-plat">Platinum</label>
							 		</div>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="reseller-lvl" value="gold" id="reseller-gold"><label for="reseller-gold">Gold</label>
							 		</div>
							 		<div class="col-4 col-lg-2 col-md-2">
							 			<input type="radio" name="reseller-lvl" value="silver" id="reseller-silver"><label for="reseller-silver">Silver</label>
							 		</div>
							 	</div>
							 </div>
						</div>
					</div>
				</div>
<!-- CARD [↑] ------------------------ -->
				<div class="spacer-pm"></div>				
<!-- CARD [↓] ------------------------ -->
				<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<h3>Datos de la empresa</h3>
							<p>Captua los siguientes datos</p>
							<div class="row nop">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="nomComercial">Nombre Comercial</label><br>
									<input type="text" placeholder="Escribe el nombre comercial de la empresa">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="nomLegal">Nombre Legal</label><br>
									<input type="text" placeholder="Escribe el nombre legal completo">
								</div>
							</div>
						</div>
					</div>
				</div>
<!-- CARD [↑] ------------------------ -->

				<div class="spacer-pm"></div>				
<!-- CARD [↓] ------------------------ -->
				<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<h3>Domicilio de la empresa</h3>
							<p>Llena los siguientes campos con el domicilio de la empresa. Recuerda todos los datos marcados con asterisco (*) son obligatorios.</p>
							<div class="row pad">
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empCalle">Calle (*):</label><br>
									<input type="text" placeholder="Nombre completo de la calle" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empNumExt">Número exterior (*):</label><br>
									<input type="text" placeholder="Escriba el número exterior" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empNumint">Número interior:</label><br>
									<input type="text" placeholder="Escriba el número interior" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empColbarrio">Colonia o Barrio (*):</label><br>
									<input type="text" placeholder="Escriba la colonia o barrio" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empCiudad">Ciudad (*):</label><br>
									<input type="text" placeholder="Escribe la ciudad sin abreviaturas" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empLocalidad">Municipio o localidad (*):</label><br>
									<input type="text" placeholder="Municipio o localidad" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empPais">País (*):</label><br>
									<input type="text" placeholder="Escriba la colonia o barrio" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empCP">Código postal (*):</label><br>
									<input type="text" placeholder="000000" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4 telefonoinputs">
									<label for="empTelefono">Telefono principal de contacto:</label><br>
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
									<input type="text" placeholder="Ejemplo: (55) 5382 4456">
								</div>
							</div>
						</div>
					</div>
				</div>
<!-- CARD [↑] ------------------------ -->
				<div class="spacer-pm"></div>				
<!-- CARD [↓] ------------------------ -->
				<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<h3>Contacto principal de la empresa</h3>
							<p>Llena los campos con los datos de la persona que será el contacto principal de soporte de la empresa dentro del programa de partners AMD Ultimate Connection.</p>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contNombre">Nombre:</label><br>
									<input type="text" placeholder="Nombre o nombres completos">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contApellido">Apellido:</label><br>
									<input type="text" placeholder="Escriba apellido paterno y materno" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contPuesto">Puesto:</label><br>
									<input type="text" placeholder="Nombre exacto del puesto">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contMail">Correo:</label><br>
									<input type="text" placeholder="Escribe el correo completo" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="contTelfijo">Teléfono fijo:</label><br>
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
								</div>
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="contTelcel">Teléfono celular:</label><br>
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
									<input type="text" placeholder="Ejemplo: (55) 2875 0738">
								</div>
							</div>

						</div>
					</div>
				</div>
<!-- CARD [↑] ------------------------ -->
				<div class="spacer-pm"></div>				
<!-- CARD [↓] ------------------------ -->
				<div class="card rounded">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<h3>Contacto secundario de la empresa</h3>
							<p> Llena los campos con los datos del contacto secundario de la empresa, ligado al programa de partners AMD Ultimate Connection; por ejemplo, director comercial. Es altamente recomendable registrar este contacto.</p>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Nombre">Nombre:</label><br>
									<input type="text" placeholder="Nombre o nombres completos">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Apellido">Apellido:</label><br>
									<input type="text" placeholder="Escriba apellido paterno y materno" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Puesto">Puesto:</label><br>
									<input type="text" placeholder="Nombre exacto del puesto">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Mail">Correo:</label><br>
									<input type="text" placeholder="Escribe el correo completo" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="cont2Telfijo">Teléfono fijo:</label><br>
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
								</div>
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="cont2Telcel">Teléfono celular:</label><br>
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
									<input type="text" placeholder="Ejemplo: (55) 2875 0738">
								</div>
							</div>

						</div>
					</div>
				</div>
<!-- CARD [↑] ------------------------ -->
			<div class="row d-flex justify-content-between">
				<div class="col-6 col-md-3 col-lg-2">
					<a href="cp-home.php" class="lebtn btn-white w-100">Cancelar</a>
				</div>
				<div class="col-6 col-md-3 col-lg-2">
					<button type="submit" class="lebtn btn-main w-100">Guardar</button>
				</div>
			</div>
			</form>
		</div>
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 2 - Registra Partner [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
</main>
<?php include 'footer.php'; ?>