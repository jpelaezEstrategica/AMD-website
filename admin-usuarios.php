<div class="row nop d-flex align-items-start justify-content-between">
	<h3>Consultar usuarios</h3>
	<div class="col-12 col-md-7 col-lg-8">
		<form action="#" id="partner-search">
		<select name="usuario-search" id="usuario-search">
			<option value selected>Selecciona una opcion</option>
			<option value="01">Nombre</option>
			<option value="02">Apellido</option>
			<option value="03">Estatus Por Autorizar</option>
			<option value="04">Estatus Autorizado</option>
			<option value="05">Estatus Rechazado</option>
			<option value="06">Estatus Bloqueado</option>
			<option value="07">Puesto</option>
			<option value="08">Compañía</option>
		</select>
		<input type="text" id="search" placeholder="Estatus por autorizar"><a href="cp-partners.php" class="lebtn btn-ghost d-inline">Buscar <i class="fa-solid fa-magnifying-glass"></i></a>
		<!-- <button  onclick="window.location.href='cp-partners.php'preventDefault();">Buscar <i class="fa-solid fa-magnifying-glass"></i></button> -->
	</form>
	</div>
	<div class="col-12 col-md-5 col-lg-4 d-flex justify-content-end">
		<a href="cp-nuevopartner.php" class="lebtn btn-ghost w-100" id="addPartner">Registrar un nuevo usuario +</a>
	</div>
</div>