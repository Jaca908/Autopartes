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

<div id="DIVSubgrupo" class="form-inline">
<legend>Ingrese el Subgrupo</legend>

<label for="fname">Código<br>
<input type="text" maxlength="3" id="CodigoSubgrupo" name="txtCodigo" placeholder="Código"/>
</label>

<label for="Grupo">Grupo<br>
        <select id="cmbGrupo" class="select" name="Grupo">
          <option value="" selected="selected"></option>
        <?php
          //Cargar Combobox de Modelos
          
          include '../Conexion/Conexion.php';
          
          $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

          if ($Conexion->connect_error) 
          {
            die("Connection failed: " . $Conexion->connect_error);
          } 
          
          $sql = "SELECT Codigo,Grupo FROM grupo";           
          $result = $Conexion->query($sql);
        ?>
        <?php while($ri =  mysqli_fetch_array($result))
              {
              echo "<option value=".$ri['Codigo'].">".$ri['Grupo']."</option>";
              }
        ?>
        </select>
    </label>

    <label for="lname">Subgrupo<br>
    <input type="text" maxlength="100" id="Subgrupo" name="txtSubgrupo" placeholder="Subgrupo"/>
</label>

<div id="divenviar">
<input type="button" id="enviarSubgrupo" class="btnenviar" value="Enviar" onclick="EnviarSubgrupo()"></div>

<!--Modal de mensajes-->
<div class="modal fade" id="ModalMSJSubgrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Subgrupo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJSubgrupo">
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
        </div>
    </div>
</div>
    </div>   
		</div>
	</div>
</div>
</body>

<script type="text/javascript">

/*Cargar datos al abrir la pagina para consultar cuando se pulse el boton de ver*/
window.onload = function() { 

var Codigo=sessionStorage.getItem("Codigo");
var Modificar=sessionStorage.getItem("Modificar");

  if(Codigo!=null && Modificar!=null)
  {
    sessionStorage.clear();

    document.getElementById('CodigoSubgrupo').readOnly = true;

    $.ajax({
            url: '../Logica/Subgrupo.php',
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
                  document.getElementById('CodigoSubgrupo').value = response[0]['Codigo'];
                  document.getElementById('Subgrupo').value = response[0]['Subgrupo'];
                  document.getElementById('cmbGrupo').value = response[0]['Grupo'];   
                  
        		}
              
            }
        });

        return false;
  }
  else
  {
    document.getElementById('CodigoSubgrupo').readOnly = false;
  }

}
  </script> 

<script>
	
function EnviarSubgrupo()
{//Funcion para Guardar o Modificar una generacion

	if(document.getElementById('CodigoSubgrupo').value=='')
	{
		$("#MSJSubgrupo").html('Error: Ingrese un código de subgrupo');
    	$("#ModalMSJSubgrupo").modal("show");	
	}
	else if(document.getElementById('cmbGrupo').value=='')
	{
		$("#MSJSubgrupo").html('Error: Seleccione un grupo');
    	$("#ModalMSJSubgrupo").modal("show");	
	}
	else if(document.getElementById('Subgrupo').value=='')
	{
		$("#MSJSubgrupo").html('Error: Ingrese un subgrupo');
    	$("#ModalMSJSubgrupo").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Subgrupo.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#CodigoSubgrupo').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('CodigoSubgrupo').value,
             Grupo:document.getElementById('cmbGrupo').value,
             Subgrupo:document.getElementById('Subgrupo').value,             
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                
                var Respuesta=response[0]['Respuesta'];
				var GuarMod=response[0]['GuarMod'];
				
				$("#MSJSubgrupo").html(Respuesta);
            	$("#ModalMSJSubgrupo").modal("show");
            	
            	sessionStorage.setItem('GuarMod',GuarMod);
              }
              
          }
      });

      return false;
	}
	
}
	
</script>

  <script>
	
$('#ModalMSJSubgrupo').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('formsubgrupo.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('versubgrupos.php', '_self');	
	}
});
	
</script>

</html>