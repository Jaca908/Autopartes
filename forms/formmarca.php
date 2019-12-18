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

<div id="DIVMarca" class="form-inline">
<legend>Ingrese la Marca de Repuesto</legend>
<label style="display: none" for="fname">Código<br>
<input type="hidden" id="CodigoMarca" name="txtCodigo" placeholder="Código"/>
</label>
<label for="lname">Marca<br>
<input type="text" maxlength="100" id="Marca" name="txtMarca" placeholder="Marca de Repuesto"/>
</label>

<div id="divenviar">
<input type="button" id="enviar" class="btnenviar" value="Enviar" onclick="Enviar()"></div>

<!--Modal de mensajes-->
<div class="modal fade" id="ModalMSJMarca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Marca de Repuesto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJMarca">
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

    document.getElementById('CodigoMarca').readOnly = true;

    $.ajax({
            url: '../Logica/Marca.php',
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
                  document.getElementById('CodigoMarca').value = response[0]['Codigo'];
                  document.getElementById('Marca').value = response[0]['Marca'];                    
        		}
              
            }
        });

        return false;
  }
  else
  {
    document.getElementById('CodigoMarca').readOnly = false;
  }

}
  </script> 

<script>
	
function Enviar()
{//Funcion para Guardar o Modificar una marca

	/*if(document.getElementById('Codigo').value=='')
	{
		$("#MSJMarca").html('Error: Ingrese un código de marca de repuesto');
    	$("#ModalMSJMarca").modal("show");	
	}
	else*/ if(document.getElementById('Marca').value=='')
	{
		$("#MSJMarca").html('Error: Ingrese una marca de repuesto');
    	$("#ModalMSJMarca").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Marca.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#CodigoMarca').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('CodigoMarca').value,
             Marca:document.getElementById('Marca').value,             
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                
                var Respuesta=response[0]['Respuesta'];
				var GuarMod=response[0]['GuarMod'];
				
				$("#MSJMarca").html(Respuesta);
            	$("#ModalMSJMarca").modal("show");
            	
            	sessionStorage.setItem('GuarMod',GuarMod);
              }
              
          }
      });

      return false;
	}
	
}
	
</script>

  <script>
	
$('#ModalMSJMarca').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('formmarca.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vermarcas.php', '_self');	
	}
});
	
</script>

</html>