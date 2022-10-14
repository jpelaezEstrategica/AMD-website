<form id="filtroRules">
	<div class="row align-items-end">
		<!-- Oculto hasta que se vuelva a usar -->
		<!-- <div class="col-4 col-md-3 col-lg-3">
			<label for="regionrules">Región</label><br>
			<select name="regiorules" id="regionrules" class="w-75">
				<option value="0" selected>Selecciona la región</option>
				<option value="program-manager-mxycac.php">México y CAC</option>
				<option value="program-manager-ssa.php">SSA</option>
				<option value="program-manager-br.php">Brasil</option>
			</select>
		</div> -->
		
		<div class="col-4 col-md-3 col-lg-3">
			<label for="categorules">Categoría</label><br>
			<select name="categorules" id="categorules" class="w-100">
				<option value="0" selected> Selecciona la Categoría del Partner</option>
				<option value="varcom">VAR/Comercial</option>
				<option value="rcomponent">Reseller/Components</option>
				<option value="rcommercial">Reseller/Commercial</option>
			</select>
		</div>
		<div class="col-4 col-md-4 col-lg-4">
			<label for="categorules">Escribe el nombre de la regla, producto o estado</label><br>
			<input type="text" id="search" placeholder="Nombre de la regla, producto o estado" class="w-100 asCard">
		</div>
		<!-- <div class="col-4 col-md-3 col-lg-3">
			<label for="sociolvlrules">Nivel de Socio</label><br> -->
			<!-- Este Select solo aparece cuando se escoge Var -->
			<!-- <select name="sociolvlrules" id="sociolvlrules" class="w-75">
					<option value="0" selected>Selecciona el nivel</option>
					<option value="exce">Executive</option>
					<option value="sel">Select</option>
					<option value="elt">Elite</option>
				</select> -->
			<!-- Este select aparece cuando escogen cualquiera de los Reseller -->
			<!-- <select name="sociolvlrules" id="sociolvlrules" class="w-75">
				<option value="0" selected>Selecciona el nivel</option>
				<option value="platinum">Platinum</option>
				<option value="gold">Gold</option>
				<option value="silver">Silver</option>
			</select> -->
		<!-- </div> -->
		<div class="col-12 col-md-3 col-lg-3">
			<a href="javascript:;" class="lebtn btn-main">Buscar</a>
		</div>
	</div>
</form>