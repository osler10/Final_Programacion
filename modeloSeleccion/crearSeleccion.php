<?php 

include '../modeloSede/modelo_sede.php';
		 $sede=new Sede();
	     $resultado= $sede->listado();	

include '../modeloPais/modelo_pais.php';
		 $pais=new Pais();
	     $resultadoP= $pais->listado();	

include '../modeloTecnico/modelo_tecnico.php';
         $tecnico=new Tecnico();
	     $resultados= $tecnico->listado();
?>

<form id="fnseleccion" role="form" class="form-horizontal">
	<div class="panel-group">	
		<div class="panel panel-primary" >
		  <div class="panel-heading" style="background:#0971B3">
		   <span style="color:#000;">CREANDO SELECCION</span>
		  </div>
		<div class="panel-body">
		
		<div class="form-group">
		<label  for="id_seleccion" class="control-label col-sm-2 hide">Id:</label>
		  <div class="col-sm-10">
		   <input type="text" readonly="true" class="form-control hide"name="id_seleccion">
		 </div>
		</div>
		         
		<div class="form-group">
		 <label  for="nom_seleccion" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	   <input type="text" class="form-control required" minlength="4" name="nom_seleccion">
	     </div>
		</div>
	          

		<div class="form-group">
		  <label  for="id_sede" class="control-label col-sm-2">Sede:</label>
		   <div class="col-sm-10">
		    <select name="id_sede" class="form-control">
			 <?php foreach ($resultado as $row) {?>		 		
			  <option value="<?php echo trim($row['id_sede']); ?>">
			 	<?php echo trim($row['Nom_sede']); ?>
			 </option>
			 <?php }?> 

	        </select>
		   </div>
		</div>

		<div class="form-group">
		  <label  for="id_pais" class="control-label col-sm-2">Pais:</label>
		   <div class="col-sm-10">
		    <select name="id_pais" class="form-control">
			 <?php foreach ($resultadoP as $row) {?>			 			 		
			  <option value="<?php echo trim($row['id_pais']); ?>">
			 	<?php echo trim($row['Nom_pais']); ?>
			  </option>
			 <?php }?> 
	        </select>
		   </div>
		</div>

		<div class="form-group">
		  <label  for="id_tecnico" class="control-label col-sm-2">Tecnico:</label>
		   <div class="col-sm-10">
		    <select name="id_tecnico" class="form-control">
			 <?php foreach ($resultados as $row) {?>			 			 		
			  <option value="<?php echo trim($row['id_tecnico']); ?>">
			 	<?php echo trim($row['Nom_tecnico'].''.$row['Ape_tecnico']); ?>
			  </option>
			 <?php }?> 
	        </select>
		   </div>
		</div>

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit"class="btn btn-primary" data-toggle="tooltip" title="Actualizar" value="Crear">
            <button type="button" id="cerrar_seleccion" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_seleccion"/>
           </div>
        </div>
	  </div>
	</div>
</form> 
</div>  

					
<!--  // funcion principal de jquery -->

<script language="javascript">

		$(document).ready(Inicio);
</script> 


      <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
	  <script language="javascript" src="bootstrap/js/jquery.validate.js"></script>

<!-- // Funcion para validar los dataos del formulario editarPais --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fnseleccion").validate({
			submitHandler: function(form) {
  		    var datos=$("#fnseleccion").serialize();
  		  
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaSelecciones/submenuSeleccionesSeleccion.php");
				}
			})

	 			}
			});
		});
				
    </script>	         