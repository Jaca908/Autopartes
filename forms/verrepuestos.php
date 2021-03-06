<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Tu Honda APP</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,800" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link rel="stylesheet" href="../assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Letra comfortaa-->
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="../assets/js/script.js"></script>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../assets/css/styledatatable.css">

	    <!--Librerias para el modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



</head>

<style>
    div.new-wrapper{
        font-family: Comfortaa;
    }
    
    .thtd{
		display: none;
	}

</style>

<body>
<!-- partial:index.partial.html -->
<?php include("Menu.php") ?>

<div class="new-wrapper">
<div class="container">
      <div class="header_wrap">
        <div class="num_rows">
		
				<div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
						 
						 
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
            <option value="5000">Mostrar todo</option>
						</select>
			 		
			  	</div>
        </div>
        <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Buscar.." class="form-control">
        </div>
      </div>
<table class="table table-striped table-class" id= "table">
  
	
<thead>
<tr>
		<th class="thtd">CodigoInterno</th>
		<th class="thtd">CodModelo</th>
		<th class="thtd">CodGeneración</th>
		<th class="thtd">CodGrupo</th>
		<th class="thtd">CodSubgrupo</th>
		<th class="thtd">CodMarca</th>
		<th class="thtd">CodCategoria</th>
		<th class="thtd">Código</th>

		<th>Código General</th>
		<th>Código de Marca</th>
		<th>Subgrupo</th>
		<th>Caráct. Repuesto</th>
		<th>Marca Repuesto</th>
        <th>Generación</th>
        <th>Años</th>
        <th>Caráct. Auto</th>
        <th>Acciones</th>
        
	</tr>
  </thead>
<tbody>
	<?php
          //Cargar lista de Modelos en la tabla
          
          include '../Conexion/Conexion.php';
          
          $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

          if ($Conexion->connect_error) {
            die("Connection failed: " . $Conexion->connect_error);
          }

          $sql = "SELECT R.CodigoInterno,        				 
          				 R.CodigoGeneral,R.CodigoMarca,SGr.Subgrupo,CaractAuto1,R.CaractRep1,MR.MarcaRepuesto,G.Generacion,G.Ano
				  FROM repuesto R INNER JOIN modelo M ON R.FK_modelo=M.Codigo
					 			  INNER JOIN generacion G ON R.FK_generacion=G.Codigo
					 			  INNER JOIN grupo Gr ON R.FK_grupo=Gr.Codigo
								  INNER JOIN subgrupo SGr ON R.FK_subgrupo=SGr.Codigo
								  INNER JOIN marca_repuesto MR ON R.FK_marca_repuesto=MR.Codigo
								  INNER JOIN categoria C ON R.FK_categoria=C.Codigo
				 ORDER BY R.Codigo";
          $result = $Conexion->query($sql);
          ?>
          <?php while ($ri =  mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td class='thtd'>" . $ri['CodigoInterno'] . "</td>";
            
            echo "<td>" . $ri['CodigoGeneral'] . "</td>";
            echo "<td>" . $ri['CodigoMarca'] . "</td>";
            echo "<td>" . $ri['Subgrupo'] . "</td>";
            echo "<td>" . $ri['CaractRep1'] . "</td>";
            echo "<td>" . $ri['MarcaRepuesto'] . "</td>";
            echo "<td>" . $ri['Generacion'] . "</td>";
            echo "<td>" . $ri['Ano'] . "</td>";
            echo "<td>" . $ri['CaractAuto1'] . "</td>";
            echo "<td>";
            echo '<button onClick="ObtenerDatosFila(this)" style="border: none; background: none;"><a class="view" title="Ver y editar" data-toggle="tooltip"><i id="ver_editar_icon" class="material-icons">&#xE417;</i></a></button>';
            echo '<button Onclick="ObtenerFilaABorrar(this)" style="border: none; background: none;"><a class="delete" title="Borrar" data-toggle="tooltip"><i class="material-icons" style=" color: yellow;">&#xE92B;</i></a></button>';
            echo "</td>";
            echo "</tr>";
          } ?>

        
    </tbody>
</table>

<!--		Start Pagination -->
			<div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>
      <div class="rows_count">Mostrando 11 a 20 de 91 datos</div>

</div> <!-- 		End of Container -->



<!--  Developed By Yasser Mas -->

<!-- para que funcione la tabla -->
<script  src="../assets/js/scriptdatatable.js"></script>

</div>

  <div class="modal fade" id="ModalAdvertencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:#F0AD4E;" id="exampleModalLabel">Advertencia</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="color:black;" id="MSJAdvertencia">
        </div>
        <div class="modal-footer">
          <button type="button" onclick="BorrarRepuesto()" class="btn btn btn-warning" data-dismiss="modal">Borrar</button>
          <button type="button" onclick="LimpiarSession()" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="DialogMSJ" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Repuesto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="color:black;" id="MSJ">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

</body>

<script>
//Funcion para consultar/editar los repuestos

function ObtenerDatosFila(oButton)
{
	var dgvVerRepuestos = document.getElementById('table');

    sessionStorage.setItem("CodigoInterno", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[0].innerHTML);
    sessionStorage.setItem("Modificar", 'Modificar');

    location.href = "formrepuesto.php";
}

</script>

<script>
  function ObtenerFilaABorrar(oButton) {
    /*funcion para cargar el msj de advertencia antes de borrar un repuesto*/
    var dgvVerRepuestos = document.getElementById('table');

    sessionStorage.setItem("CodInterno", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[0].innerHTML);
    sessionStorage.setItem("Borrar", 'Borrar');
    sessionStorage.setItem("IndiceBoton", oButton.parentNode.parentNode.rowIndex);

    $("#MSJAdvertencia").html("¿Desea borrar el documento seleccionado?");
    $("#ModalAdvertencia").modal("show");
  }
</script>

<script>
  function BorrarRepuesto() {
    var IndBoton = sessionStorage.getItem("IndiceBoton");
    var dgvVerRepuestos = document.getElementById('table');
    var CodInterno = sessionStorage.getItem("CodInterno");
    var Borrar = sessionStorage.getItem("Borrar");

    sessionStorage.clear();

      $.ajax({
        url: '../Logica/Repuesto.php',
        type: 'post',
        data: {
          btnBorrar: Borrar,
          CodInterno: CodInterno,
        },
        dataType: 'json',
        success: function(response) {

          var len = response.length;

          if (len > 0) {
          	
          	var Respuesta = response[0]['Respuesta'];

			//dgvVerRepuestos.deleteRow(IndBoton);	

            $("#MSJ").html(Respuesta);
            $("#ModalMSJ").modal("show");

          }

        }
      });

      return false;
  }
</script>

<script>
  function LimpiarSession() {
    sessionStorage.clear();
  }
</script>

  <script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
		
	//window.open('formmarca.php', '_self');
	location.reload();
});
	
</script>

</html>
