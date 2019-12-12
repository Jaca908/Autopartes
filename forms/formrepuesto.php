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
  width: 20%;
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
                <legend>Ingrese el Repuesto</legend>
                
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
        <label for="Generacion">Generación</label>
      </div>
      <div class="col-75">
        <select id="Generacion" name="Generacion">
          <option value="" selected="selected"></option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Grupo">Grupo</label>
      </div>
      <div class="col-75">
      <?php ?>
        <select id="Grupo" name="Grupo">
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
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Subgrupo">Subgrupo</label>
      </div>
      <div class="col-75">
        <select id="Subgrupo" name="Subgrupo">
          <option value="" selected="selected"></option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="fname">Consecutivo</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="3" id="Codigo" name="txtCodigo" placeholder="Código"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Grupo">Marca de Repuesto</label>
      </div>
      <div class="col-75">
      <?php ?>
        <select id="Marca" name="Marca">
          <option value="" selected="selected"></option>
        <?php
          //Cargar Combobox de Modelos
          
          include '../Conexion/Conexion.php';
          
          $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

          if ($Conexion->connect_error) 
          {
            die("Connection failed: " . $Conexion->connect_error);
          } 
          
          $sql = "SELECT Codigo,MarcaRepuesto FROM marca_repuesto";           
          $result = $Conexion->query($sql);
        ?>
        <?php while($ri =  mysqli_fetch_array($result))
              {
              echo "<option value=".$ri['Codigo'].">".$ri['MarcaRepuesto']."</option>";
              }
        ?>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="fname">Código de Marca</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="100" id="CodigoMarca" name="txtCodigoMarca" placeholder="Código de Marca"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="fname">Código Universal</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="100" id="CodigoUniversal" name="txtCodigoUniversal" placeholder="Código Universal"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="fname">Código Alterno</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="100" id="CodigoAlterno" name="txtCodigoAlterno" placeholder="Código Alterno"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Repuesto</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="100" id="Repuesto" name="txtRepuesto" placeholder="Repuesto"/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Peso</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="11" id="Peso" name="txtPeso" placeholder="Peso"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Dimensiones</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="50" id="Dimension" name="txtDimension" placeholder="Dimensiones"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Medidas</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="50" id="Medida" name="txtMedida" placeholder="Medidas"/>
      </div>
    </div>
    
    <div class="row">
			<div class="col-75">
				
        		<label><input type="checkbox" id="Manual" value="Manual"> Manual</label>
	        	<label><input type="checkbox" id="Automatico" value="Automatico"> Automático</label>
	        	
	        	&nbsp;&nbsp;

	        	<label><input type="checkbox" id="4X2" value="4X2"> 4X2</label>
	        	<label><input type="checkbox" id="4X4" value="4X4"> 4X4</label>
	        	
	        	<br>
	        	
	        	<label><input type="checkbox" id="Gasolina" value="Gasolina"> Gasolina</label>
		        <label><input type="checkbox" id="Diesel" value="Diesel"> Diesel</label>
		        <label><input type="checkbox" id="Electrico" value="Electrico"> Eléctrico</label>
		        <label><input type="checkbox" id="Hibrido" value="Hibrido"> Híbrido</label>
	        	
      		</div>
    </div>
       
    <div class="row">
      <div class="col-25">
        <label for="caracte">Característica 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="Caracteristica1" name="Caracteristica1" placeholder="Caracteristica 1">
      </div>
    </div>
      
            <div class="row">
      <div class="col-25">
        <label for="caracte2">Característica 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="Caracteristica2" name="Caracteristica2" placeholder="Caracteristica 2">
      </div>
    </div>
      
         <div class="row">
      <div class="col-25">
        <label for="caracte3">Característica 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="Caracteristica3" name="Caracteristica3" placeholder="Caracteristica 3">
      </div>
    </div>
      
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Precio de Costo</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="11" id="PrecioCosto" name="txtPrecioCosto" placeholder="Precio de Costo"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Precio de Venta</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="11" id="PrecioVenta" name="txtPrecioVenta" placeholder="Precio de Venta"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Utilidad</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="11" id="Utilidad" name="txtUtilidad" placeholder="Utilidad"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">IVA</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="6" id="IVA" name="txtIVA" placeholder="IVA"/>
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
            url: '../Logica/Repuesto.php',
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
{//Funcion para Guardar o Modificar un repuesto

	if(document.getElementById('Modelo').value=='')
	{
		$("#MSJ").html('Error: Seleccione un modelo');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Generacion').value=='')
	{
		$("#MSJ").html('Error: Seleccione una generación');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Grupo').value=='')
	{
		$("#MSJ").html('Error: Seleccione un grupo');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Subgrupo').value=='')
	{
		$("#MSJ").html('Error: Seleccione un subgrupo');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Codigo').value=='')
	{
		$("#MSJ").html('Error: Ingrese un consecutivo de repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Marca').value=='')
	{
		$("#MSJ").html('Error: Seleccione una marca de repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Repuesto').value=='')
	{
		$("#MSJ").html('Error: Ingrese una descripción del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Peso').value=='')
	{
		$("#MSJ").html('Error: Ingrese el peso del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Dimension').value=='')
	{
		$("#MSJ").html('Error: Ingrese las dimensiones del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Medida').value=='')
	{
		$("#MSJ").html('Error: Ingrese las medidas del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(!document.getElementById("Manual").checked && !document.getElementById("Automatico").checked)
	{
		$("#MSJ").html('Error: Seleccione un tipo de transmisión del vehículo: manual-automático');
    	$("#ModalMSJ").modal("show");
	}
	else if(!document.getElementById("4X4").checked && !document.getElementById("4X2").checked)
	{
		$("#MSJ").html('Error: Seleccione un tipo de tracción del vehículo: 4X2-4X4');
    	$("#ModalMSJ").modal("show");
	}
	else if(!document.getElementById("Gasolina").checked && !document.getElementById("Diesel").checked &&
			!document.getElementById("Electrico").checked && !document.getElementById("Hibrido").checked)
	{
		$("#MSJ").html('Error: Seleccione un tipo de combustible del vehículo: gasolina, diesel, eléctrico, híbrido');
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('PrecioCosto').value=='')
	{
		$("#MSJ").html('Error: Ingrese el precio de costo del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('PrecioVenta').value=='')
	{
		$("#MSJ").html('Error: Ingrese el precio de venta del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(document.getElementById('Utilidad').value=='')
	{
		$("#MSJ").html('Error: Ingrese el porcentaje de utilidad del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else if(parseFloat(document.getElementById('Utilidad').value)>999)
    {
		$("#MSJ").html("Error: el porcentaje de utilidad no puede ser mayor a 999%");
      	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('IVA').value=='')
	{
		$("#MSJ").html('Error: Ingrese el porcentaje de IVA del repuesto');
    	$("#ModalMSJ").modal("show");	
	}
	else
	{  
		$.ajax({
          url: '../Logica/Repuesto.php',
          type: 'post',
          data: 
          {
             btnEnviar:"Enviar",
             GuardarModificar:($('#Codigo').is('[readonly]'))?"Modificar":"Guardar", 
             Modelo:document.getElementById('Modelo').value,
             Generacion:document.getElementById('Generacion').value,
             Grupo:document.getElementById('Grupo').value,
             Subgrupo:document.getElementById('Subgrupo').value,
             Codigo:document.getElementById('Codigo').value,
             Marca:document.getElementById('Marca').value,
             CodigoMarca:document.getElementById('CodigoMarca').value,
             CodigoUniversal:document.getElementById('CodigoUniversal').value,
             CodigoAlterno:document.getElementById('CodigoAlterno').value,
             Repuesto:document.getElementById('Repuesto').value,
             Peso:document.getElementById('Peso').value,
             Dimension:document.getElementById('Dimension').value,
             Medida:document.getElementById('Medida').value,
             
             Manual:(document.getElementById("Manual").checked)?1:0,
			 Automatico:(document.getElementById("Automatico").checked)?1:0,
			 t4X2:(document.getElementById("4X2").checked)?1:0,
			 t4X4:(document.getElementById("4X4").checked)?1:0,
			 Gasolina:(document.getElementById("Gasolina").checked)?1:0,
			 Diesel:(document.getElementById("Diesel").checked)?1:0,
			 Electrico:(document.getElementById("Electrico").checked)?1:0,
			 Hibrido:(document.getElementById("Hibrido").checked)?1:0,
             
             Caracteristica1:document.getElementById("Caracteristica1").value,
             Caracteristica2:document.getElementById("Caracteristica2").value,
             Caracteristica3:document.getElementById("Caracteristica3").value,
             PrecioCosto:document.getElementById("PrecioCosto").value,
             PrecioVenta:document.getElementById("PrecioVenta").value,
             Utilidad:document.getElementById("Utilidad").value,
             IVA:document.getElementById("IVA").value,
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
		window.open('formrepuesto.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('verrepuestos.php', '_self');	
	}
});
	
</script>

<script type="text/javascript">
$(document).ready(function(){
//funciones para cambiar el subgrupo y generaciopn dependiendo de lo que seleccione el usuario

  $('#Modelo').on('change',function(){
        var Codigo = $(this).val();
        if(Codigo){
            $.ajax({
                type:'POST',
                url:'../Logica/CargarGeneracionWhenModeloSelected.php',
                data:'Modelo='+Codigo,
                success:function(html){
                    $('#Generacion').html(html);
                }
            }); 
        }else{
            $('#Generacion').html('<option value=""></option>');
        }
    });
    
      $('#Grupo').on('change',function(){
        var Codigo = $(this).val();
        if(Codigo){
            $.ajax({
                type:'POST',
                url:'../Logica/CargarSubgrupoWhenGrupoSelected.php',
                data:'Grupo='+Codigo,
                success:function(html){
                    $('#Subgrupo').html(html);
                }
            }); 
        }else{
            $('#Subgrupo').html('<option value=""></option>');
        }
    });
});
</script>


<script type="text/javascript">
  
  /*Filtarar campos*/


  // Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
}

//Moneda con dos decimales)
setInputFilter(document.getElementById("Peso"), function(value) {
  return /^\d*[.]?\d{0,2}$/.test(value); });

setInputFilter(document.getElementById("PrecioCosto"), function(value) {
  return /^\d*[.]?\d{0,2}$/.test(value); });

setInputFilter(document.getElementById("PrecioVenta"), function(value) {
  return /^\d*[.]?\d{0,2}$/.test(value); });

setInputFilter(document.getElementById("Utilidad"), function(value) {
  return /^\d*[.]?\d{0,2}$/.test(value); });

setInputFilter(document.getElementById("IVA"), function(value) {
  return /^\d*$/.test(value); });


</script>

</html>