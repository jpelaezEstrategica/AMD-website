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
		<div class="container card rounded p-5">
			<div class="row nop">
				<div class="col-12 l-esp">
					<h2>Resultado de la búsqueda</h2>
					<table class="table table-bordered align-middle partnerActions">
						<thead class="bg-black text-white text-center ">
							<tr>
								<th scope="col">NOMBRE</th>
								<th scope="col">APELLIDO</th>
								<th colspan="2" scope="col">ESTATUS</th>
								<th scope="col">PUESTO</th>
								<th scope="col">COMPAÑIA</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center">
								<td>Juan Pablo</td>
								<td>Alvarez</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>

							</tr>
							<tr class="text-center">
								<td>Pablo</td>
								<td>Briseño</td>
								<td>Autorizado</td><td><span class="bullet_status_autorizado">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Rechazado</td><td><span class="bullet_status_rechazado">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Bloqueado</td><td><span class="bullet_status_bloqueado">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan Pablo</td>
								<td>Alvarez</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>

							</tr>
							<tr class="text-center">
								<td>Pablo</td>
								<td>Briseño</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalle"><i class="fa fa-search"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-12 l-pt">
					<h2>RESULTADOS DA PESQUISA</h2>
					<table class="table table-bordered align-middle partnerActions">
						<thead class="bg-black text-white text-center ">
							<tr>
								<th scope="col">NOME</th>
								<th scope="col">SOBRENOME</th>
								<th colspan="2" scope="col">STATUS</th>
								<th scope="col">CARGO</th>
								<th scope="col">EMPRESA</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center">
								<td>Juan Pablo</td>
								<td>Alvarez</td>
								<td>Por autorizar</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>

							</tr>
							<tr class="text-center">
								<td>Pablo</td>
								<td>Briseño</td>
								<td>Autorizado</td><td><span class="bullet_status_autorizado">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Rejeitado</td><td><span class="bullet_status_rechazado">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>Bloqueado</td><td><span class="bullet_status_bloqueado">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan Pablo</td>
								<td>Alvarez</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>

							</tr>
							<tr class="text-center">
								<td>Pablo</td>
								<td>Briseño</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
							<tr class="text-center">
								<td>Juan</tdh>
								<td>Cardenas</td>
								<td>A ser autorizado</td>
								<td><span class="bullet_status_pendiente">&nbsp;</span></td>
								<td>Vendedor Sr.</td>
								<td>Empresa S.A de C.V.</td>
								<td><a href="javascript:;" class="d-inline-block rounded-circle pAction" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar detalhes"><i class="fa fa-search"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>

	</section>

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