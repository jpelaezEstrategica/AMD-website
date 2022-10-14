<!-- Modal Disable Partner -->
<div class="modal fade" id="lockPart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body l-esp">
        <p class="text-center">¿Estás seguro de que deseas bloquear a este Partner?</p>
        <div class="d-flex justify-content-between">
          <a href="cp-partner-bloqueado.php" class="lebtn btn-ghost">Confirmar</a>
          <!-- al dar click, la tarjeta del partner se vualve opaca y solo funciona el btn de desblquear-->
          <a href="cp-partner-desbloqueado.php;" data-bs-dismiss="modal" class="lebtn btn-main">Cancelar</a>
        </div>
      </div>
      <div class="modal-body l-pt">
        <p class="text-center">Tem certeza que deseja bloquear esse Parceiro?</p>
        <div class="d-flex justify-content-between">
          <a href="cp-partner-bloqueado.php" class="lebtn btn-ghost">Confirmar Bloqueio</a>
          <!-- al dar click, la tarjeta del partner se vualve opaca y solo funciona el btn de desblquear-->
          <a href="cp-partner-desbloqueado.php;" data-bs-dismiss="modal" class="lebtn btn-main">Cancelar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Disable Partner -->
<div class="modal fade" id="valuationClose" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="text-center">Confirmación de cierre de evaluación anual del partner</h4>
        <p class="text-center">Confirmas los resultados de la evaluación anual del listado de actividades definidas por categorías y nivel de partner.</p>
        <p class="text-center">No olvides que los resultados no podrán ser modificados una vez que des clic en el siguiente botón:  </p>
        <div class="d-flex justify-content-between">
          <a href="cp-partner-valuation-alerts.php" class="lebtn btn-ghost">Confirmo el cierre</a>
          <!-- al dar click, la tarjeta del partner se vualve opaca y solo funciona el btn de desblquear-->
          <a href="javascript:;" data-bs-dismiss="modal" class="lebtn btn-main">Cancelar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Disable Partner -->
<div class="modal fade" id="lockRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body l-esp">
        <h4 class="text-center">SOLICITUD EN PROCESO</h4>
        <p class="text-center">Tu solicitud ha sido enviada y está en proceso de aprobación, por favor espera la confirmación en tu correo personal registrado.</p>
        <div class="d-flex justify-content-between">
           <a href="index.php" class="lebtn btn-ghost  w-100">Aceptar</a>
        </div>
      </div>
      <div class="modal-body l-pt">
        <h4 class="text-center">CANDIDATURA EM PROCESSO</h4>
        <p class="text-center">Sua inscrição foi enviada e está em processo de aprovação, aguarde a confirmação em seu e-mail pessoal cadastrado.</p>
        <div class="d-flex justify-content-between">
          <a href="index.php" class="lebtn btn-ghost  w-100">Aceptar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Autorizar Usuarior -->
<div class="modal fade" id="lockAutorizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body l-esp">
        <h4 class="text-center">El usuario ha sido autorizado</h4>  
        <div class="d-flex justify-content-between">
           <a href="cp-usuarios.php" class="lebtn btn-ghost  w-100">Aceptar</a>
        </div>
      </div>
      <div class="modal-body l-pt">
        <h4 class="text-center">USUÁRIO FOI AUTORIZADO</h4>  
        <div class="d-flex justify-content-between">
           <a href="cp-usuarios.php" class="lebtn btn-ghost  w-100">Aceitar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Rechazar Usuario -->
<div class="modal fade" id="lockRechazar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body l-esp">
        <h4 class="text-center">El usuario ha sido RECHAZADO</h4>
        <div class="d-flex justify-content-between">
           <a href="cp-usuarios.php" class="lebtn btn-ghost  w-100">Aceptar</a>
        </div>
      </div>
      <div class="modal-body l-pt">
        <h4 class="text-center">O USUÁRIO FOI REJEITADO</h4>
        <div class="d-flex justify-content-between">
           <a href="cp-usuarios.php" class="lebtn btn-ghost  w-100">Aceitar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Disable Partner -->
<div class="modal fade" id="lockBloquear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="text-center">Motivo del bloqueo</h4>
        <p class="text-center">El usuario será bloqueado. Explica la razón del bloqueado.</p>
     <textarea name="textarea" rows="10" class="w-100">Motivo del bloqueo</textarea><br><br>
        <div class="d-flex justify-content-between">
         <a href="cp-usuarios.php" class="lebtn btn-ghost ">Aceptar</a>
       <a href="cp-usuarios-detalle-bloquear.php" class="lebtn btn-ghost  ">Cancelar</a>
        
    
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Disable Partner -->
<div class="modal fade" id="lockDesbloquear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="text-center">Motivo del desbloqueo</h4>
        <p class="text-center">El usuario será desbloqueado. Explica la razón del desbloqueado.</p>
     <textarea name="textarea" rows="10" class="w-100">Motivo del desbloqueo</textarea><br><br>
        <div class="d-flex justify-content-between">
         <a href="cp-usuarios.php" class="lebtn btn-ghost ">Aceptar</a>
       <a href="cp-usuarios-detalle-desbloquear.php" class="lebtn btn-ghost  ">Cancelar</a>
        
    
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Salva cambios en regla -->
<div class="modal fade" id="alertaSalvarRegla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="text-center">¡Espera!</h4>
        <p class="text-center">No olvides guardar tus cambios antes de salir de esta pantalla.</p>
        <div class="justify-content-center">
         <a href="javascript:;"  data-bs-dismiss="modal"  class="lebtn btn-ghost w-100 d-block ">Seguir editando</a> <br><br>
         <a href="program-manager.php"  data-bs-dismiss="modal"  class="lebtn btn-ghost w-100 d-block ">Ir a Mi Cuenta</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Salva cambios en regla -->
<div class="modal fade" id="alertaConfirmEditRegla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="text-center">¡Espera!</h4>
        <p class="text-center"> ¿Estás seguro que quieres modificar la regla?.</p>
        <div class="justify-content-center">
         <a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#alertaEditRegla" class="lebtn btn-ghost w-100 d-block ">Si, guardar</a> <br><br>
         <a href="javascript:;"  data-bs-dismiss="modal"  class="lebtn btn-ghost w-100 d-block ">Cancelar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal cambiso salvados en regla -->
<div class="modal fade" id="alertaEditRegla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="text-center">Éxito</h4>
        <p class="text-center">La regla se ha modificado con éxito.</p>
        <div class="d-flex justify-content-center">
         <a href="program-manager.php" class="lebtn btn-main">Volver a Mi Cuenta</a>
         <!-- Tras picar est boton se cierra el modal-->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal cambiso salvados en regla -->
<div class="modal fade" id="alertaNuevaRegla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="text-center">Éxito</h4>
        <p class="text-center">La nueva regla se ha guardado.</p>
        <div class="d-flex justify-content-center">
         <a href="program-manager.php" class="lebtn btn-main">Volver a Mi Cuenta</a>
         <!-- Tras picar est boton se cierra el modal-->
        </div>
      </div>
    </div>
  </div>
</div>

