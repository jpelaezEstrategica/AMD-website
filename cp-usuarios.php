<?php include 'head-logged.php'; ?>

<main>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↓] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<section class="bg-sec2">
		<div class="container">
			<div class="row nop">
				<div class="col-12 l-esp">
					<h2>ADMINiSTRAR USUARIOS<span class="terminal">_</span></h2>
					<p>En esta sección de la consola podrás crear nuevos usuarios autorizados por AMD, además de consultar o editar los datos de usuarios registrados previamente.</p>
				</div>
				<div class="col-12 l-pt">
					<h2>GERENCIAR USUÁRIOS<span class="terminal">_</span></h2>
					<p>Nesta seção da console você pode criar novos usuários autorizados pela AMD, bem como consultar ou editar os dados de usuários previamente cadastrados.</p>
				</div>
			</div>
			<?php include 'admin-usuarios.php' ?>
		</div>
		
	</section>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Seccion 1 - Search control panel [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	
	<section class="bg-sec2">
		
		<div class="container ">
			<div class="row ">
				<div class="col-12 col-md-12 col-lg-4 offset-md-4 d-flex justify-content-end">
					<a href="cp-partners.php" class="lebtn btn-main w-100 btn-outline-primary l-esp">Consola de partners</a>
					<a href="cp-partners.php" class="lebtn btn-main w-100 btn-outline-primary l-pt">Consola de parceiros</a>
				</div>
			</div>
		</div>
		
	</section>
	
	
</main>

<?php include 'footer.php'; ?>