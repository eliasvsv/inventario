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
      <tr><th>#</th><th>Nombre</th><th>Usuario</th><th> </th><th></th></tr>
     <?php
     foreach ($usuarios->result() as $usuario) {
        ?>
         <tr><td><?php echo $usuario->idUsuario  ;?></td><td><?php echo $usuario->nombresUsuario . " " .$usuario->apellidosUsuario  ;?></td><td><?php echo $usuario->nombreUsuario;?></td><td><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td><td><span class=" glyphicon glyphicon-erase" aria-hidden="true"></td></tr>    
        <?php
         
     }
     ?>
  </table>
  </div>
</div>
  </div>
  <div class="col-md-2"></div>
</div>