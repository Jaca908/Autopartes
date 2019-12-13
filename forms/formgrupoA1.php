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

<div class="form-inline">
<legend>Ingrese el Grupo</legend>

<label for="fname">Código<br>
<input type="text" maxlength="3" id="Codigo" name="txtCodigo" placeholder="Código"/>
</label>

<label for="lname">Grupo<br>
<input type="text" maxlength="50" id="Grupo" name="txtGrupo" placeholder="Grupo"/>
</div>
</label>

<div id="divenviar">
<input type="button" id="enviar" class="btnenviar" value="Enviar" onclick="Enviar()"></div>


 <!--Modal de mensajes-->
 <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Grupo</h4>
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
            url: '../Logica/Grupo.php',
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
                  document.getElementById('Grupo').value = response[0]['Grupo'];                    
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
{//Funcion para Guardar o Modificar un grupo

	if(document.getElementById('Codigo').value=='')
	{
		$("#MSJ").html('Error: Ingrese un código de grupo');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Grupo').value=='')
	{
		$("#MSJ").html('Error: Ingrese un grupo');
    	$("#ModalMSJ").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Grupo.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#Codigo').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('Codigo').value,
             Grupo:document.getElementById('Grupo').value,             
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
		window.open('formgrupo.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vergrupos.php', '_self');	
	}
});
	
</script>

</html>