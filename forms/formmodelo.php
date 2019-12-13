<!--INCLUYE EL HEAD-->
<?php include_once "headforms.php"?>

<!--Menu-->
<?php include("Menu.php") ?>

<div class="new-wrapper">
	<div id="main">
		<div id="main-contents">
                            
                   <div id="wrapper">
<div class="container">
	<fieldset>
                <legend>Ingrese el Modelo</legend>
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
        <label for="lname">Modelo</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="50" id="Modelo" name="txtModelo" placeholder="Modelo"/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Estado">Estado</label>
      </div>
      <div class="col-75">
        <select id="Estado" name="Estado">
          <option value=""></option>
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
          <option value="MuyBasico">Muy Básico</option>
        </select>
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
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Modelo</h4>
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
                  document.getElementById('Codigo').value = response[0]['Codigo'];
                  document.getElementById('Modelo').value = response[0]['Modelo'];  
                  document.getElementById('Estado').value = response[0]['Estado'];  
                  
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
{//Funcion para Guardar o Modificar un modelo

	if(document.getElementById('Codigo').value=='')
	{
		$("#MSJ").html('Error: Ingrese un código de modelo');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Modelo').value=='')
	{
		$("#MSJ").html('Error: Ingrese un modelo');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Estado').value=='')
	{
		$("#MSJ").html('Error: Seleccione un estado');
    	$("#ModalMSJ").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Modelo.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#Codigo').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('Codigo').value,
             Modelo:document.getElementById('Modelo').value,
             Estado:document.getElementById('Estado').value,
             
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
		window.open('formmodelo.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vermodelos.php', '_self');	
	}
});
	
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="../assets/js/script.js"></script>

</html>