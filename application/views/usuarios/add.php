<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<style>
    .error{
        color:red;
    }
</style>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <form method="post" action="usuarios?cat=1" id="registroUsuario" name="registroUsuario" class="form-horizontal">
        <div class="form-group">
        <label for="nombreUsuario" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group">
            <label for="apellidosUsuario" class="col-sm-2 control-label">Apellidos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="apellidosUsuario" name="apellidosUsuario" placeholder="Apellidos">
            </div>
        </div>
           <div class="form-group">
               <label for="empresa" class="col-sm-2 control-label">Empresa</label>
               <div class="col-sm-10">    <select class="form-control" name="empresa" id="empresa" name="empresa">
         <?php
        foreach ($combo as $linea) {
            ?>
               <option value="<?php echo $linea['idEmpresa']?>"><?php echo $linea['nombreEmpresa']?></option>
                <?php
            
        }
         ?>
               </select>
           </div></div>
        <div class="form-group">
            <label for="usuario"  class="col-sm-2 control-label">Usuario</label>
            <div class="col-sm-10">
                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Nombre de usuario">
            </div>
        </div>
         <div class="form-group">
            <label for="clave" class="col-sm-2 control-label">Clave</label>
            <div class="col-sm-10">
                <input name="clave" type="password" class="form-control" id="clave">
            </div>
        </div>  
              <div class="form-group">
                  <input  type="submit" class="btn btn-primary" value="Registrar Usuario!!">
            </div>
        </div>  
         
</form>
  </div>
  <div class="col-md-4"></div>
  
<div id="mensaje-exito" class="alert alert-success" role="alert">Usuario Registrado con Exito !!!</div>
</div>
<script>
$(document).ready(function() {
    $("#mensaje-exito").hide();

    $("#registroUsuario").validate({
        rules: {
            nombreUsuario: { required: true, maxlength: 200},
            apellidosUsuario: { required: true, maxlength: 200},
            usuario: { required:true,maxlength:25},
            clave: { required:true,minlength: 2, maxlength: 200}
           
        },
        messages: {
            nombreUsuario: "Este campo es requerido.",
            apellidosUsuario: "Este campo es requerido.",
            usuario : "Su nombre de usuario es requerido.",
            clave : "La clave es un campo requerido.",
                   },
        submitHandler: function(form){
           //  form.submit();
         $.post( "usuarios", $( "#registroUsuario" ).serialize() )
                 .done(function( data ) {
          $("#mensaje-exito").fadeIn( 300 ).delay( 800 ).fadeOut( 400 );
                    });
        }
    });
});
</script>