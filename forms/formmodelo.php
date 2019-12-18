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

<div id="DIVModelo" class="form-inline">
<legend>Ingrese el Modelo</legend>
<label for="fname">Código<br>
<input type="text" maxlength="3" id="CodigoModelo" name="txtCodigo" placeholder="Código"/>
</label>

<label for="lname">Modelo<br>
<input type="text" maxlength="50" id="Modelo" name="txtModelo" placeholder="Modelo"/>
</label>

<label for="Estado">Estado<br>
<select id="Estado" class="select" name="Estado">
          <option value=""></option>
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
          <option value="MuyBasico">Muy Básico</option>
        </select>
</label>

<div id="divenviar">
<input type="button" id="EnviarModelo" class="btnenviar" value="Enviar" onclick="EnviarModelo()"></div>



<!--Modal de mensajes-->
<div class="modal fade" id="ModalMSJModelo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Modelo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJModelo">
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

    document.getElementById('CodigoModelo').readOnly = true;

    $.ajax({
            url: '../Logica/Modelo.php',
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
                  document.getElementById('CodigoModelo').value = response[0]['Codigo'];
                  document.getElementById('Modelo').value = response[0]['Modelo'];  
                  document.getElementById('Estado').value = response[0]['Estado'];  
                  
        		}
              
            }
        });

        return false;
  }
  else
  {
    document.getElementById('CodigoModelo').readOnly = false;
  }

}
  </script> 

<script>
	
function EnviarModelo()
{//Funcion para Guardar o Modificar un modelo

	if(document.getElementById('CodigoModelo').value=='')
	{
		$("#MSJModelo").html('Error: Ingrese un código de modelo');
    	$("#ModalMSJModelo").modal("show");	
	}
	else if(document.getElementById('Modelo').value=='')
	{
		$("#MSJModelo").html('Error: Ingrese un modelo');
    	$("#ModalMSJModelo").modal("show");	
	}
	else if(document.getElementById('Estado').value=='')
	{
		$("#MSJModelo").html('Error: Seleccione un estado');
    	$("#ModalMSJModelo").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Modelo.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#CodigoModelo').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('CodigoModelo').value,
             Modelo:document.getElementById('Modelo').value,
             Estado:document.getElementById('Estado').value,
             
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                
                var Respuesta=response[0]['Respuesta'];
				var GuarMod=response[0]['GuarMod'];
				
				$("#MSJModelo").html(Respuesta);
            	$("#ModalMSJModelo").modal("show");
            	
            	sessionStorage.setItem('GuarMod',GuarMod);
              }
              
          }
      });

      return false;
	}
	
}
	
</script>

  <script>
	
$('#ModalMSJModelo').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('formmodelo.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vermodelos.php', '_self');	
	}
});
	
</script>
  

</html>