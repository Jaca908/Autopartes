<?php
session_start();
 
require ("../Conexion/Conexion.php");


//Comprbar si el usuario presiono el boton de EnviarGrupo

if(isset($_POST["btnEnviar"]))/*Para guardar o modificar*/
{
	GuardarOModificar();
}
else if(isset($_POST['MostrarDatos']))/*Para consultar y llenar los campos*/
{
	Consultar();
}

function GuardarOModificar()
{
	$GuardarModificar=$_POST["GuardarModificar"];
	
	$Respuesta='';
	$GuarMod='';

	#ver si es guardar o Modificar
	
	if($GuardarModificar=="Guardar")
	{
		//Guardar

		$Codigo=$_POST["Codigo"];
		$Marca=$_POST["Marca"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
			die("Connection failed: " . $Conexion->connect_error);
		}
		 		
		$sql = "SELECT Codigo,MarcaRepuesto FROM marca_repuesto WHERE MarcaRepuesto like '$Marca'";
						
		$result = $Conexion->query($sql);

		if ($result->num_rows > 0) 
		{
			$Respuesta = "Ya existe una marca de repuesto con ese nombre"; 
		}
		else
		{
			//sanitize el sql
			$sql = "INSERT INTO marca_repuesto(MarcaRepuesto)values('$Marca');";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Marca de repuesto guardada exitosamente";
			  $GuarMod='Guardo'; 			  
			} 
			else 
			{
			  $Respuesta = "Error al guardar la marca de repuesto";
			  $GuarMod='Error';
			}
		}		
				
	}			
	else if($GuardarModificar=="Modificar")
	{
		//modificar
		
		$Codigo=$_POST["Codigo"];
		$Marca=$_POST["Marca"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
		 	die("Connection failed: " . $Conexion->connect_error);
		} 
			//sanitize el sql
			$sql = "UPDATE marca_repuesto SET MarcaRepuesto='$Marca' WHERE Codigo='$Codigo'";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Marca de repuesto modificada exitosamente";
			  $GuarMod = 'Modifico'; 			  
			} 
			else 
			{
				 $Respuesta = "Error al modificar la marca de repuesto";
				 $GuarMod='Error';
			}		
	}
	
	$users_arr[] = array( 
                            "Respuesta"=>$Respuesta,
                            "GuarMod"=>$GuarMod,
                       );

      // encoding array to json format
      echo json_encode($users_arr);
      exit;
}

function Consultar()
{
	$Codigo=$_POST['Codigo'];
	
	$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($Conexion->connect_error) 
	{
	 	die("Connection failed: " . $Conexion->connect_error);
	} 
	
	$sql="SELECT Codigo,MarcaRepuesto FROM marca_repuesto WHERE Codigo=$Codigo;";
	
	$result = $Conexion->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();

		$Codigo= $row["Codigo"];
		$Marca=$row["MarcaRepuesto"];
	}

	$users_arr[] = array( 
                         "Codigo"=>$Codigo,"Marca"=>$Marca,
                     );

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}

?>