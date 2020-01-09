<!--INCLUYE EL HEAD-->
<?php include("headforms.php")?>

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
<label for="fname"><span style="color:#ff0000; font-size: 25px">*</span>C&oacute;digo<br>
<input type="text" maxlength="3" id="CodigoModelo" name="txtCodigo" placeholder="C&oacute;digo"/>
</label>

<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span>Modelo<br>
<input type="text" maxlength="50" id="Modelo" name="txtModelo" placeholder="Modelo"/>
</label>

<div id="divenviar">
<input type="button" id="EnviarModelo" class="btnenviar" value="Enviar" onclick="EnviarModelo()">
	<div class="campobli">
			<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span> Campos Obligatorios</label>
	</div>
</div>



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

<div id="DIVGeneracion" class="form-inline">
<legend>Ingrese la Generaci&oacute;n</legend>
  <label for="fname"><span style="color:#ff0000; font-size: 25px">*</span>C&oacute;digo<br>
			  <input type="text" maxlength="3" id="CodigoGeneracion" name="txtCodigo" placeholder="C&oacute;digo"/>
	</label>
	   

	<label for="Modelo"><span style="color:#ff0000; font-size: 25px">*</span>Modelo<br>

	<?php ?>
        <select id="cmbModelo" name="Modelo" class="select">
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
	</label>

	<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span>Generaci&oacute;n<br>
	<input type="text" maxlength="50" id="Generacion" name="txtGeneracion" placeholder="Generaci&oacute;n"/>
	</label>

	<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span>A&ntilde;os<br>
	<input type="text" maxlength="50" id="Ano" name="txtAno" placeholder="A&ntilde;os"/>
	</label>
	
	<label for="Estado"><span style="color:#ff0000; font-size: 25px">*</span>Estado<br>
<select id="Estado" class="select" name="Estado">
          <option value=""></option>
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
          <option value="MuyBasico">Muy B&aacute;sico</option>
        </select>
</label>
	
	<div id="divenviar">
	<input type="button" id="EnviarGeneracion" class="btnenviar" value="Enviar" onclick="EnviarGeneracion() ">
		<div class="campobli">
			<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span> Campos Obligatorios</label>
		</div>
	</div>



	  <!--Modal de mensajes-->
	  <div class="modal fade" id="ModalMSJGeneracion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Generaci&oacute;n</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJGeneracion">
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
        </div>
    </div>
    <!--FIN Modal de mensajes-->
</div>

<div id="DIVGrupo" class="form-inline">
<legend>Ingrese el Grupo</legend>

<label for="fname"><span style="color:#ff0000; font-size: 25px">*</span>C&oacute;digo<br>
<input type="text" maxlength="3" id="CodigoGrupo" name="txtCodigo" placeholder="C&oacute;digo"/>
</label>

<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span>Grupo<br>
<input type="text" maxlength="50" id="Grupo" name="txtGrupo" placeholder="Grupo"/>

</label>

<div id="divenviar">
<input type="button" id="EnviarGrupo" class="btnenviar" value="Enviar" onclick="EnviarGrupo()">
	<div class="campobli">
			<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span> Campos Obligatorios</label>
	</div>
</div>


 <!--Modal de mensajes-->
 <div class="modal fade" id="ModalMSJGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Grupo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJGrupo">
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
        </div>
    </div>
</div>

<div id="DIVSubgrupo" class="form-inline">
<legend>Ingrese el Subgrupo</legend>

<label for="fname"><span style="color:#ff0000; font-size: 25px">*</span>C&oacute;digo<br>
<input type="text" maxlength="3" id="CodigoSubgrupo" name="txtCodigo" placeholder="C&oacute;digo"/>
</label>

<label for="Grupo"><span style="color:#ff0000; font-size: 25px">*</span>Grupo<br>
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

    <label for="lname"><span style="color:#ff0000; font-size: 25px">*</span>Subgrupo<br>
    <input type="text" maxlength="100" id="Subgrupo" name="txtSubgrupo" placeholder="Subgrupo"/>
</label>

<div id="divenviar">
<input type="button" id="enviarSubgrupo" class="btnenviar" value="Enviar" onclick="EnviarSubgrupo()">
	<div class="campobli">
			<label for="lname"><span style="color:#ff0000; font-size: 25px">*</span> Campos Obligatorios</label>
	</div>
</div>

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
var Form=sessionStorage.getItem("Form");

  if(Codigo!=null && Modificar!=null)
  {
    sessionStorage.clear();
	
	if(Form=='Modelo')
	{
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
        		}
              
            }
        });

        return false;	
	}
	else if(Form=='Generacion')
	{
		document.getElementById('CodigoGeneracion').readOnly = true;

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
                  document.getElementById('CodigoGeneracion').value = response[0]['Codigo'];
                  document.getElementById('Generacion').value = response[0]['Generacion'];
                  document.getElementById('Ano').value = response[0]['Ano'];
                  document.getElementById('Estado').value = response[0]['Estado'];
                  document.getElementById('cmbModelo').value = response[0]['Modelo'];   
                  
        		}
              
            }
        });

        return false;
	}
	else if(Form=='Grupo')
	{
		document.getElementById('CodigoGrupo').readOnly = true;

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
                  document.getElementById('CodigoGrupo').value = response[0]['Codigo'];
                  document.getElementById('Grupo').value = response[0]['Grupo'];                    
        		}
              
            }
        });

        return false;
	}
	else if(Form=='Subgrupo')
	{
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
  }
  else
  {
    if(Form=='Modelo')
    {
		document.getElementById('CodigoModelo').readOnly = false;
	}
	else if(Form=='Generacion')
    {
		document.getElementById('CodigoGeneracion').readOnly = false;
	}
	else if(Form=='Grupo')
    {
		document.getElementById('CodigoGrupo').readOnly = false;
	}
	else if(Form=='Subgrupo')
    {
		document.getElementById('CodigoSubgrupo').readOnly = false;
	}
  }

}
  </script> 



<script>
	
function EnviarModelo()
{//Funcion para Guardar o Modificar un modelo

	if(document.getElementById('CodigoModelo').value=='')
	{
		$("#MSJModelo").html('Error: Ingrese un c&oacute;digo de modelo');
    	$("#ModalMSJModelo").modal("show");	
	}
	else if(document.getElementById('Modelo').value=='')
	{
		$("#MSJModelo").html('Error: Ingrese un modelo');
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
		window.open('formingresarmodificardatos.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vermodelos.php', '_self');	
	}
});
	
</script>
  

<script>
	
function EnviarGeneracion()
{//Funcion para Guardar o Modificar una generacion

	if(document.getElementById('CodigoGeneracion').value=='')
	{
		$("#MSJGeneracion").html('Error: Ingrese un c&oacute;digo de generaci&oacute;n');
    	$("#ModalMSJGeneracion").modal("show");	
	}
	else if(document.getElementById('cmbModelo').value=='')
	{
		$("#MSJGeneracion").html('Error: Seleccione un modelo');
    	$("#ModalMSJGeneracion").modal("show");	
	}
	else if(document.getElementById('Generacion').value=='')
	{
		$("#MSJGeneracion").html('Error: Ingrese una generaci&oacute;n');
    	$("#ModalMSJGeneracion").modal("show");	
	}
	else if(document.getElementById('Ano').value=='')
	{
		$("#MSJGeneracion").html('Error: Ingrese los a&ntilde;os de la generaci&oacute;n');
    	$("#ModalMSJGeneracion").modal("show");	
	}
	else if(document.getElementById('Estado').value=='')
	{
		$("#MSJModelo").html('Error: Seleccione un estado');
    	$("#ModalMSJModelo").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Generacion.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#CodigoGeneracion').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('CodigoGeneracion').value,
             Modelo:document.getElementById('cmbModelo').value,
             Generacion:document.getElementById('Generacion').value,
             Ano:document.getElementById('Ano').value,
             Estado:document.getElementById('Estado').value,
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                
                var Respuesta=response[0]['Respuesta'];
				var GuarMod=response[0]['GuarMod'];
				
				$("#MSJGeneracion").html(Respuesta);
            	$("#ModalMSJGeneracion").modal("show");
            	
            	sessionStorage.setItem('GuarMod',GuarMod);
              }
              
          }
      });

      return false;
	}
	
}
	
</script>

  <script>
	
$('#ModalMSJGeneracion').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('formingresarmodificardatos.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vergeneraciones.php', '_self');	
	}
});
	
</script>


<script>
	
function EnviarGrupo()
{//Funcion para Guardar o Modificar un grupo

	if(document.getElementById('CodigoGrupo').value=='')
	{
		$("#MSJGrupo").html('Error: Ingrese un c&oacute;digo de grupo');
    	$("#ModalMSJGrupo").modal("show");	
	}
	else if(document.getElementById('Grupo').value=='')
	{
		$("#MSJGrupo").html('Error: Ingrese un grupo');
    	$("#ModalMSJGrupo").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Grupo.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#CodigoGrupo').is('[readonly]'))?"Modificar":"Guardar", 
             Codigo:document.getElementById('CodigoGrupo').value,
             Grupo:document.getElementById('Grupo').value,             
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                
                var Respuesta=response[0]['Respuesta'];
				var GuarMod=response[0]['GuarMod'];
				
				$("#MSJGrupo").html(Respuesta);
            	$("#ModalMSJGrupo").modal("show");
            	
            	sessionStorage.setItem('GuarMod',GuarMod);
              }
              
          }
      });

      return false;
	}
	
}
	
</script>

  <script>
	
$('#ModalMSJGrupo').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('formingresarmodificardatos.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('vergrupos.php', '_self');	
	}
});
	
</script>

<script>
	
function EnviarSubgrupo()
{//Funcion para Guardar o Modificar una generacion

	if(document.getElementById('CodigoSubgrupo').value=='')
	{
		$("#MSJSubgrupo").html('Error: Ingrese un c&oacute;digo de subgrupo');
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
		window.open('formingresarmodificardatos.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('versubgrupos.php', '_self');	
	}
});
	
</script>

</html>