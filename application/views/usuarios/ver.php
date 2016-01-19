<style>
    #circulo { 
   width: 14px;
   height: 14px;
    background-color: #009926;
    border-radius: 7px;   }
    
</style>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Listado de Usuarios</h3>
  </div>
  <div class="panel-body">
   <!-- Table -->
  <table class="table">
      <tr><th>#</th><th>Nombre</th><th>Usuario</th><th>Clave</th><th>Modificar</th><th>Borrar</th><th>Status</th></tr>
     <?php
     foreach ($usuarios->result() as $usuario) {
        ?>
      <tr><td><?php echo $usuario->idUsuario  ;?></td><td><?php echo $usuario->nombresUsuario . " " .$usuario->apellidosUsuario  ;?></td><td><?php echo $usuario->nombreUsuario;?></td><td><strong>*****</strong></td><td><span  class="glyphicon glyphicon-edit" aria-hidden="true"></span></td><td><span id="<?php echo $usuario->idUsuario  ;?>" class=" glyphicon glyphicon-erase botonEleminar" aria-hidden="true"></td><td><div id="circulo"></div></td></tr>    
        <?php
         
     }
     ?>
  </table>
  </div>
</div>
  </div>
  <div class="col-md-2"></div>
</div>
<script>
$(document).ready(function() {
  jQuery(".botonEleminar").click(function() {
    var id = jQuery(this).attr("id");
    $.post( "usuarios?cat=2", { idUsuario: id } ).done(function( data ) {
    location.reload();
  });
});
});
</script>