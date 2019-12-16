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


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



</head>

<style>
    div.new-wrapper{
        font-family: Comfortaa;
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
		<th>CodModelo</th>
		<th>CodGeneración</th>
		<th>CodGrupo</th>
		<th>CodSubgrupo</th>
		<th>CodMarca</th>
		
		<th>Código</th>
		<th>Repuesto</th>
		<th>Modelo</th>
        <th>Generación</th>
        <th>Grupo</th>
        <th>Subgrupo</th>
        <th>Marca Repuesto</th>
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

          $sql = "SELECT M.Codigo AS CodModelo,G.Codigo AS CodGeneracion,Gr.Codigo AS CodGrupo,
          				 SGr.Codigo AS CodSubgrupo,MR.Codigo AS CodMarca,R.Codigo,
          				 R.Repuesto,M.Modelo,G.Generacion,Gr.Grupo,SGr.Subgrupo,MR.MarcaRepuesto
				  FROM repuesto R INNER JOIN modelo M ON R.FK_modelo=M.Codigo
					 			  INNER JOIN generacion G ON R.FK_generacion=G.Codigo
					 			  INNER JOIN grupo Gr ON R.FK_grupo=Gr.Codigo
								  INNER JOIN subgrupo SGr ON R.FK_subgrupo=SGr.Codigo
								  INNER JOIN marca_repuesto MR ON R.FK_marca_repuesto=MR.Codigo
				 ORDER BY R.Codigo";
          $result = $Conexion->query($sql);
          ?>
          <?php while ($ri =  mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $ri['CodModelo'] . "</td>";
            echo "<td>" . $ri['CodGeneracion'] . "</td>";
            echo "<td>" . $ri['CodGrupo'] . "</td>";
            echo "<td>" . $ri['CodSubgrupo'] . "</td>";
            echo "<td>" . $ri['CodMarca'] . "</td>";
            echo "<td>" . $ri['Codigo'] . "</td>";
            echo "<td>" . $ri['Repuesto'] . "</td>";
            echo "<td>" . $ri['Modelo'] . "</td>";
            echo "<td>" . $ri['Generacion'] . "</td>";
            echo "<td>" . $ri['Grupo'] . "</td>";
            echo "<td>" . $ri['Subgrupo'] . "</td>";
            echo "<td>" . $ri['MarcaRepuesto'] . "</td>";
            echo "<td>";
            echo '<button onClick="ObtenerDatosFila(this)" style="border: none; background: none;"><a class="view" title="Ver y editar" data-toggle="tooltip"><i style="color:#000000" class="material-icons">&#xE417;</i></a></button>';
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
</body>

<script>
//Funcion para consultar/editar los modelos

function ObtenerDatosFila(oButton)
{
	var dgvVerRepuestos = document.getElementById('table');

    sessionStorage.setItem("CodModelo", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[0].innerHTML);
    sessionStorage.setItem("CodGeneracion", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML);
    sessionStorage.setItem("CodGrupo", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[2].innerHTML);
    sessionStorage.setItem("CodSubgrupo", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[3].innerHTML);
    sessionStorage.setItem("CodMarca", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML);
    sessionStorage.setItem("Codigo", dgvVerRepuestos.rows[oButton.parentNode.parentNode.rowIndex].cells[5].innerHTML);
    sessionStorage.setItem("Modificar", 'Modificar');

    location.href = "formrepuesto.php";
}

</script>

</html>
