

<form id="fnpais" role="form" class="form-horizontal">
	<div class="panel-group">
	  <div class="panel panel-primary" >
		 <div class="panel-heading" style="background:#0971B3">
		   <span style="color:#000;">CREANDO PAIS</span>
		 </div>
	    <div class="panel-body">

		<div class="form-group">
		  <label  for="id_pais" class="control-label col-sm-2 hide">ID:</label>
		  <div class=" col-sm-10">
		  <input type="text" class="form-control hide" value=""name="id_pais" >
		  </div>
		</div>
		
		<div class="form-group">
		   <label  for="nom_pais" class="control-label col-sm-2">Nombre:</label>
		   <div class="col-sm-10">
	        <input type="text"class="form-control required" minlength="4" name="nom_pais">
	       </div>
		</div>

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_pais" value="Crear">
            <button type="button" id="cerrar_pais" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_pais"/>
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

<!-- // Funcion para validar los dataos del formulario crearPais --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fnpais").validate({
			submitHandler: function(form) {
  		        var datos=$("#fnpais").serialize();
  		        
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("php/submenuAjustesPaises.php");
				}
			})

	 			}
			});
		});
				
    </script>	        	
				
  		        




					