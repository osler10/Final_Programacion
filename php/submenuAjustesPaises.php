<!-- Codigo php para mostrar Ciudades  en el menu Ajustes-->

 <?php 
      include '../modeloPais/modelo_pais.php';
 		 $pais=new Pais();
		 $listado=$pais->listado();
 ?>

	
<!-- estructura para mostrar el submenu Ciudades-->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>PAISES</span></div>
   	 <div class="table-responsive">
      <table class="table"  >
	   <tbody>
			<?php foreach($listado as $fila){ ?>
          <tr>
    <td class="edit_pais" title="<?php echo $fila['id_pais'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_pais'] ?></td>
    <td><a href="#" class="borrar_pais" title="<?php echo $fila['id_pais'] ?>" ><i class="fa fa-trash pull-right" aria-hidden="true"></i>
     </a></td>
         </tr>
            <?php } ?>
       </tbody>
     </table>
     </div>
  </div>
  </div>
<!-- Panel donde se mostrara el  formulario para editar Ciudad -->
	<div class="col-sm-8">
		<div id="editar">	
		  <a href="#" id="nuevo_pais"><i class="fa fa-plus-circle" aria-hidden="true"></i> Pais</a>
	  </div> 
	</div>
         
</div>
     
<!--funcion principal de jquery-->

 <script language="javascript">
	$(document).ready(Inicio);
 </script>	
    

