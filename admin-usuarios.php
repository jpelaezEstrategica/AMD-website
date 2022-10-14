<div class="row nop d-flex align-items-start justify-content-between">
	<h3 class="l-esp">Consultar usuarios</h3>
	<h3 class="l-pt">Consultar usuários</h3>
	<div class="col-12 col-md-7 col-lg-8 l-esp">
		<form action="#" id="partner-search">
			<select name="usuario-search" id="usuario-search">
				<option value selected>Selecciona una opcion</option>
				<option value="01">Nombre</option>
				<option value="02">Apellido</option>
				<option value="03">Estatus Por Autorizar</option>
				<option value="04">Estatus Autorizado</option>
				<option value="05">Estatus Rechazado</option>
				<option value="06">Estatus Bloqueado</option>
				<option value="07">Cargo</option>
				<option value="08">Compañía</option>
			</select>
			<!-- se generaron 3 inputs de search pero solo se muestra uno de acuerdo a el valor de select sea: Nombre / Cargo / Compañia-->
			<input type="text" id="searchNombre" placeholder="">
			<input type="text" id="searchPuesto" placeholder="" style="display: none;">
			<input type="text" id="searchCompañía" placeholder="" style="display: none;"><a href="cp-partners.php" class="lebtn btn-ghost d-inline">Buscar 	<i class="fa-solid fa-magnifying-glass"></i></a>
			<!-- <button  onclick="window.location.href='cp-partners.php'preventDefault();">Buscar <i class="fa-solid fa-magnifying-glass"></i></button> -->
		</form>
	</div>
	<div class="col-12 col-md-7 col-lg-8 l-pt">
		<form action="#" id="partner-search">
			<select name="usuario-search" id="usuario-search">
				<option value selected>Selecione uma opção</option>
				<option value="01">Nome</option>
				<option value="02">Sobrenome</option>
				<option value="03">Status a ser autorizado</option>
				<option value="04">Status autorizado</option>
				<option value="05">Status rejeitado</option>
				<option value="06">Status Bloqueado</option>
				<option value="07">Posição/Cargo</option>
				<option value="08">Empresa</option>
			</select>
			<input type="text" id="search" placeholder="Estatus por autorizar"><a href="cp-partners.php" class="lebtn btn-ghost d-inline">Pesquisar <i class="fa-solid fa-magnifying-glass"></i></a>
			<!-- <button  onclick="window.location.href='cp-partners.php'preventDefault();">Buscar <i class="fa-solid fa-magnifying-glass"></i></button> -->
		</form>
	</div>
	<div class="col-12 col-md-5 col-lg-4 d-flex justify-content-end">
		<a href="cp-nuevopartner.php" class="lebtn btn-ghost w-100 l-esp" id="addPartner">Registrar un nuevo usuario +</a>
		<a href="cp-nuevopartner.php" class="lebtn btn-ghost w-100 l-pt" id="addPartner">Registrar um novo usuário +</a>
	</div>
</div>


