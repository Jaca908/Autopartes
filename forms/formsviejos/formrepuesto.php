<!--INCLUYE EL HEAD-->
<?php include_once "headforms.php"?>

<!-- MENU -->
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

var CodModelo=sessionStorage.getItem("CodModelo");
var CodGeneracion=sessionStorage.getItem("CodGeneracion");
var CodGrupo=sessionStorage.getItem("CodGrupo");
var CodSubgrupo=sessionStorage.getItem("CodSubgrupo");
var CodMarca=sessionStorage.getItem("CodMarca");
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
              
              CodModelo:CodModelo,
              CodGeneracion:CodGeneracion,
              CodGrupo:CodGrupo,
              CodSubgrupo:CodSubgrupo,
              CodMarca:CodMarca,
              Codigo:Codigo
            },
            dataType: 'json',
            success:function(response){
              
                var len = response.length;

                if(len > 0)
                {
                  	 document.getElementById('Modelo').value = response[0]['Modelo'];
		             
		             document.getElementById('Grupo').value = response[0]['Grupo'];
		             
		             document.getElementById('Codigo').value = response[0]['Codigo'];
		             document.getElementById('Marca').value = response[0]['Marca'];
		             document.getElementById('CodigoMarca').value = response[0]['CodigoMarca'];
		             document.getElementById('CodigoUniversal').value = response[0]['CodigoUnversal'];
		             document.getElementById('CodigoAlterno').value = response[0]['CodigoAlterno'];
		             document.getElementById('Repuesto').value = response[0]['Repuesto'];
		             document.getElementById('Peso').value = response[0]['Peso'];
		             document.getElementById('Dimension').value = response[0]['Dimension'];
		             document.getElementById('Medida').value = response[0]['Medida'];
		             
		             if(response[0]['Manual']==1){document.getElementById("Manual").checked=true;}
		             if(response[0]['Automatico']==1){document.getElementById("Automatico").checked=true;}
		             if(response[0]['4X2']==1){document.getElementById("4X2").checked=true;}
		             if(response[0]['4X4']==1){document.getElementById("4X4").checked=true;}
		             if(response[0]['Gasolina']==1){document.getElementById("Gasolina").checked=true;}
		             if(response[0]['Diesel']==1){document.getElementById("Diesel").checked=true;}
		             if(response[0]['Electrico']==1){document.getElementById("Electrico").checked=true;}
		             if(response[0]['Hibrido']==1){document.getElementById("Hibrido").checked=true;}
	             
		             document.getElementById("Caracteristica1").value = response[0]['Caracteristica1'];
		             document.getElementById("Caracteristica2").value = response[0]['Caracteristica2'];
		             document.getElementById("Caracteristica3").value = response[0]['Caracteristica3'];
		             document.getElementById("PrecioCosto").value = response[0]['PrecioCosto'];
		             document.getElementById("PrecioVenta").value = response[0]['PrecioVenta'];
		             document.getElementById("Utilidad").value = response[0]['Utilidad'];
		             document.getElementById("IVA").value = response[0]['IVA'];
		             
		             
				        var CodigoModelo = response[0]['Modelo'];
				        
				        if(CodigoModelo){
				            $.ajax({
				                type:'POST',
				                url:'../Logica/CargarGeneracionWhenModeloSelected.php',
				                data:'Modelo='+CodigoModelo,
				                success:function(html){
				                    $('#Generacion').html(html);
				                    document.getElementById('Generacion').value = response[0]['Generacion'];
				                }
				            }); 
				        }else{
				            $('#Generacion').html('<option value=""></option>');
				        }
				        
				        
				       var CodigoGrupo = response[0]['Grupo'];
				        
				        if(CodigoGrupo){
				            $.ajax({
				                type:'POST',
				                url:'../Logica/CargarSubgrupoWhenGrupoSelected.php',
				                data:'Grupo='+CodigoGrupo,
				                success:function(html){
				                    $('#Subgrupo').html(html);
				                    document.getElementById('Subgrupo').value = response[0]['Subgrupo'];
				                }
				            }); 
				        }else{
				            $('#Subgrupo').html('<option value=""></option>');
				        }  
				        
				                    
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