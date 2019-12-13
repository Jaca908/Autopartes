<!--INCLUYE EL HEAD-->
<?php include_once "headforms.php"?>

<!-- INCLUYE EL MENU-->
<?php include("Menu.php")?>
<!-- INCLUYE EL MENU-->


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

          <!--INICIA PHP-->
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
        <!--TERMINA PHP-->

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
    <!--FIN Modal de mensajes-->
    </fieldset>
</div>
    </div>   
		</div>
	</div>
</div>
</body>


<!--INICIO SCRIPTS JS-->
<script type="text/javascript">

/*Cargar datos al abrir la pagina para consultar cuando se pulse el boton de ver*/
window.onload = function() { 

var Codigo=sessionStorage.getItem("Codigo");
var Modificar=sessionStorage.getItem("Modificar");

  if(Codigo!=null && Modificar!=null)
  {
    sessionStorage.clear();

    document.getElementById('Codigo').readOnly = true;

    $.ajax({
            url: '../Logica/Generacion.php',
            type: 'post',
            data: 
            {
              MostrarDatos:'MostrarDatos',
              Codigo:Codigo
            },
            dataType: 'json',
            success:function(response){
              
                var len = response.length;

                if(len > 0)
                {
                  document.getElementById('Codigo').value = response[0]['Codigo'];
                  document.getElementById('Generacion').value = response[0]['Generacion'];
                  document.getElementById('Ano').value = response[0]['Ano'];
                  document.getElementById('Modelo').value = response[0]['Modelo'];   
                  
        		}
              
            }
        });

        return false;
  }
  else
  {
    document.getElementById('Codigo').readOnly = false;
  }

}
  </script> 

<script>
	
function Enviar()
{//Funcion para Guardar o Modificar una generacion

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
<!--FIN SCRIPTS JS-->
</html>