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
			<form action="#" id="nuevoPartner" clasS="needs-validation" novalidate>
<!-- CARD [↓] ------------------------ -->
				<div class="card rounded l-esp">
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
				<div class="card rounded l-pt">
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-11">
							<h3>ESTABELEÇA A CATEGORIA</h3>
							<p>Defina a categoria do Parceiro a se registrar:</p>
							 <select name="catPartner" id="catPartner">
							 	<option value selected>Selecione uma opção:</option>
							 	<option id="varcommercial" value="varcommecial">VAR/Commercial</option>
							 	<option id="resellercomponents" value="resellercomponents">Revendedor/Components</option>
							 	<option id="resellercommercial" value="resellercommercial">Revendedor/Comercial</option>
							 </select>
							 <br><br>
							 <div class="row hidden" id="catPartnerop1">
							 	<div class="row nop d-flex justify-content-start">
							 		<label for="varLvl"><p>Selecione o nível de parceiro VAR/comercial ao qual o registro pertence:</p></label>
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
							 	<label for="joinVir"><input type="checkbox"> Faz parte do VIR</label>
							 </div>
							 <div class="row hidden" id="catPartnerop2">
							 	<div class="row nop d-flex justify-content-start">
							 		<label for="rComponentLvl"><p>Selecione o nível de parceiro o Componentes/Comercial ao qual o registro pertence:</p></label>
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
							 		<label for="rCommercialLvl"><p>Selecione o nível de parceiro Revendedor ao qual o registro pertence:</p></label>
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
						<div class="col-11 l-esp">
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
						<div class="col-11 l-pt">
							<h3>Dado da empresa</h3>
							<p>Insira os dados seguintes.</p>
							<div class="row nop">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="nomComercial">Nome Comercial</label><br>
									<input type="text" placeholder=" Escreva o nome comercial da empresa">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="nomLegal">Nome Legal</label><br>
									<input type="text" placeholder="Escreva a denominação legal completa">
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
						<div class="col-11 l-esp">
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
						<div class="col-11 l-pt">
							<h3>ENDEREÇO DA EMPRESA</h3>
							<p>Preencha os campos a seguir com o endereço da empresa. Lembre-se de que todos os dados marcados com um asterisco (*) são obrigatórios.</p>
							<div class="row pad">
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empCalle">Rua (*):</label><br>
									<input type="text" placeholder="Nome completo da rua" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empNumExt">Número exterior (*):</label><br>
									<input type="text" placeholder="Escreva o número interior" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empNumint">Número interior:</label><br>
									<input type="text" placeholder="Escreva o número interior" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empColbarrio">Bairro ou bairro (*):</label><br>
									<input type="text" placeholder="Escreva o bairro ou bairro" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empCiudad">Cidade (*):</label><br>
									<input type="text" placeholder="Escreva a cidade sem abreviaturas" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empLocalidad">Município ou localidade (*):</label><br>
									<input type="text" placeholder="Município ou localidade" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empPais">País (*):</label><br>
									<input type="text" placeholder="Nome completo do país" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4">
									<label for="empCP">CEP (*):</label><br>
									<input type="text" placeholder="Escreva o CEP completo" required>
								</div>
								<div class="col-12 col-md-4 col-lg-4 telefonoinputs">
									<label for="empTelefono">Telefone de contato principal:</label><br>
									<select name="lada" id="empLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolívia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Pimenta</option>
										<option value="+57">Colômbia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Equador</option>
										<option value="+52">México</option>
										<option value="+51">Peru</option>
									</select>
									<input type="text" placeholder="Exemplo: (55) 5382 4456">
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
						<div class="col-11 l-esp">
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
									<label for="contPuesto">Cargo:</label><br>
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
						<div class="col-11 l-pt">
							<h3>CONTATO PRINCIPAL DA EMPRESA</h3>
							<p>Preencha os campos com as informações da pessoa que será o principal contato de suporte da empresa dentro do programa de parceiros AMD Ultimate Connection.</p>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contNombre">Nome:</label><br>
									<input type="text" placeholder="Nome ou nomes completos">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contApellido">Sobrenome:</label><br>
									<input type="text" placeholder="Escreva sobrenome paterno e materno" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contPuesto">Cargo:</label><br>
									<input type="text" placeholder="Nome exato do seu cargo">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="contMail">E-mail:</label><br>
									<input type="text" placeholder="Escreva o email completo" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="contTelfijo">Telefone de contato principal:</label><br>
									<select name="lada" id="contTelfijoLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolívia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Pimenta</option>
										<option value="+57">Colômbia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Equador</option>
										<option value="+52">México</option>
										<option value="+51">Peru</option>
									</select>
									<input type="text" placeholder="Ejemplo: (55) 5382 4456">
								</div>
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="contTelcel">Telefone celular:</label><br>
									<select name="lada" id="contTelcelLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolívia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Pimenta</option>
										<option value="+57">Colômbia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Equador</option>
										<option value="+52">México</option>
										<option value="+51">Peru</option>
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
						<div class="col-11 l-esp">
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
									<label for="cont2Puesto">Cargo:</label><br>
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
						<div class="col-11 l-pt">
							<h3>CONTATO SECUNDÁRIO DA EMPRESA (OPCIONAL)</h3>
							<p>Preencha os campos com os dados do contato secundário da empresa, vinculado ao programa de parceiros AMD Ultimate Connection; por exemplo, diretor comercial. É altamente recomendável gravar este contato.</p>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Nombre">Nome:</label><br>
									<input type="text" placeholder="Nome ou nomes completos">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Apellido">Sobrenome:</label><br>
									<input type="text" placeholder="Escreva sobrenome paterno e materno" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Puesto">Cargo:</label><br>
									<input type="text" placeholder="Nome exato do seu cargo">
								</div>
								<div class="col-12 col-md-6 col-lg-6">
									<label for="cont2Mail">E-mail:</label><br>
									<input type="text" placeholder="Escreva o email completo" required>
								</div>
							</div>
							<div class="row pad">
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="cont2Telfijo">Telefone fixo:</label><br>
									<select name="lada" id="contTelfijoLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolívia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Pimenta</option>
										<option value="+57">Colômbia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Equador</option>
										<option value="+52">México</option>
										<option value="+51">Peru</option>
									</select>
									<input type="text" placeholder="Ejemplo: (55) 5382 4456">
								</div>
								<div class="col-12 col-md-6 col-lg-6 telefonoinputs">
									<label for="cont2Telcel">Telefone celular:</label><br>
									<select name="lada" id="contTelcelLada">
										<option value selected>Lada Internacional</option>
										<option value="+54">Argentina</option>
										<option value="+591">Bolívia</option>
										<option value="+55">Brasil</option>
										<option value="+56">Pimenta</option>
										<option value="+57">Colômbia</option>
										<option value="+506">Costa Rica</option>
										<option value="+593">Equador</option>
										<option value="+52">México</option>
										<option value="+51">Peru</option>
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
					<a href="cp-home.php" class="lebtn btn-white w-100 l-esp">Cancelar</a>
					<a href="cp-home.php" class="lebtn btn-white w-100 l-pt">Cancelar</a>
				</div>
				<div class="col-6 col-md-3 col-lg-2">
					<button type="submit" class="lebtn btn-main w-100 l-esp">Guardar</button>
					<button type="submit" class="lebtn btn-main w-100 l-pt">Salvar</button>
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