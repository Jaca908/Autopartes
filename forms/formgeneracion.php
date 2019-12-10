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

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="../assets/js/script.js"></script>

<!--Librerias para el modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><!--este es el estilo del boostrap que necesito pero que distorciona la pagina-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<style>
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  color: black;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit],#enviar {
  background-color: #120B00;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-top: 40px;
  margin-right: -35%;
  position: absolute;
  
}
input[type=submit]:hover {
  background-color: #144033;
}
.container {
  border-radius: 5px;
  background-color: #120B00;
  color: #fff;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
@media (min-width: 1200px){
.container {
    width: 100%;
}
}
</style>

<body>
<!-- partial:index.partial.html -->
<?php include("Menu.php")?>
<div class="new-wrapper">
	<div id="main">
		<div id="main-contents">
                            
                   <div id="wrapper">
<div class="container">
	<fieldset>
                <legend>Ingrese la Generación</legend>
    <div class="row">
      <div class="col-25">
        <label for="fname">Código</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="3" id="Codigo" name="txtCodigo" placeholder="Código"/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Modelo">Modelo</label>
      </div>
      <div class="col-75">
      <?php ?>
        <select id="Modelo" name="Modelo">
          <option value="" selected="selected"></option>
        <?php
          //Cargar Combobox de Modelos
          
          include '../Conexion/Conexion.php';
          
          $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

          if ($Conexion->connect_error) 
          {
            die("Connection failed: " . $Conexion->connect_error);
          } 
          
          $sql = "SELECT Codigo,Modelo FROM modelo";           
          $result = $Conexion->query($sql);
        ?>
        <?php while($ri =  mysqli_fetch_array($result))
              {
              echo "<option value=".$ri['Codigo'].">".$ri['Modelo']."</option>";
              }
        ?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Generación</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="50" id="Generacion" name="txtGeneracion" placeholder="Generación"/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Años</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="50" id="Ano" name="txtAno" placeholder="Años"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-20">
      </div>
      <div class="col-75">
          <input type="button" id="enviar" value="Enviar" onclick="Enviar()">
      </div>
    </div>
    
    <!--Modal de mensajes-->
    <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Generación</h4>
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
    
    </fieldset>
</div>
    </div>   
		</div>
	</div>
</div>
</body>

<script>
	
function Enviar()
{//Funcion para Guardar o Modificar un modelo

	if(document.getElementById('Codigo').value=='')
	{
		$("#MSJ").html('Error: Ingrese un código de generación');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Modelo').value=='')
	{
		$("#MSJ").html('Error: Seleccione un modelo');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Generacion').value=='')
	{
		$("#MSJ").html('Error: Ingrese una generación');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Ano').value=='')
	{
		$("#MSJ").html('Error: Ingrese los años de la generación');
    	$("#ModalMSJ").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Generacion.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#Codigo').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('Codigo').value,
             Modelo:document.getElementById('Modelo').value,
             Generacion:document.getElementById('Generacion').value,
             Ano:document.getElementById('Ano').value,
             
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                
                var Respuesta=response[0]['Respuesta'];
				var GuarMod=response[0]['GuarMod'];
				
				$("#MSJ").html(Respuesta);
            	$("#ModalMSJ").modal("show");
            	
            	sessionStorage.setItem('GuarMod',GuarMod);
              }
              
          }
      });

      return false;
	}
	
}
	
</script>

  <script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('formgeneracion.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vergeneraciones.php', '_self');	
	}
});
	
</script>

</html>