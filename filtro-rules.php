<form id="filtroRules">
	<div class="row align-items-end">
		<div class="col-4 col-md-3 col-lg-3">
			<label for="regionrules">Región</label><br>
			<select name="regiorules" id="regionrules" class="w-75" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
				<option value="0" selected>Selecciona la región</option>
				<option value="program-manager-mxycac.php">México y CAC</option>
				<option value="program-manager-ssa.php">SSA</option>
				<option value="program-manager-br.php">Brasil</option>
				<!-- <option value="mxycac">México y CAC</option> -->
				<!-- <option value="ssa">SSA</option> -->
				<!-- <option value="br">Brasil</option> -->
			</select>
		</div>
		<div class="col-4 col-md-3 col-lg-3">
			<label for="categorules">Categoría</label><br>
			<select name="categorules" id="categorules" class="w-75">
				<option value="0" selected> Selecciona la Categoría</option>
				<option value="varcom">VAR/Comercial</option>
				<option value="rcomponent">Reseller/Components</option>
				<option value="rcommercial">Reseller/Commercial</option>
			</select>
		</div>
		<div class="col-4 col-md-3 col-lg-3">
			<label for="sociolvlrules">Nivel de Socio</label><br>
			<select name="sociolvlrules" id="sociolvlrules" class="w-75">
				<option value="0" selected>Selecciona el nivel</option>
				<option class="varselect" value="exce">Executive</option>
				<option class="varselect" value="sel">Select</option>
				<option class="varselect" value="elt">Elite</option>
				<option class="novarselect" value="platinum">Platinum</option>
				<option class="novarselect" value="gold">Gold</option>
				<option class="novarselect" value="silver">Silver</option>
			</select>
		</div>
		<div class="col-12 col-md-3 col-lg-3">
			<a href="javascript:;" class="lebtn btn-ghost">Buscar</a>
		</div>
	</div>
</form>
<script>
	$("#categorules").change(function () {
  var selected_option = $('#fnivel').val();

  if (selected_option === 'varcom') {
    $(".varselect").show();
    $(".novarselect").hide();
  }
  else {
    $(".varselect").hide();
    $(".novarselect").show();
  }
})
</script>