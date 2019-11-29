<?php
session_start();
 
require ("../Conexion/Conexion.php");


//Comprbar si el usuario presiono el boton de EnviarGrupo

if(isset($_POST["btnEnviar"]))/*Para guardar o modificar*/
{
	GuardarOModificarModelo();
}
else if(isset($_POST['MostrarDatos']))/*Para consultar y llenar los campos*/
{
	ConsultarGrupo();
}

function GuardarOModificarModelo()
{
	$GuardarModificar=$_POST["GuardarModificar"];
	
	$Respuesta='';
	$GuarMod='';

	#ver si es guardar o Modificar
	
	if($GuardarModificar=="Guardar")
	{
		//Guardar

		$Codigo=$_POST["Codigo"];
		$Modelo=$_POST["Modelo"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
			die("Connection failed: " . $Conexion->connect_error);
		} 

		$sql = "SELECT Codigo,Modelo FROM modelo WHERE Codigo = '$Codigo'";
							
		$result = $Conexion->query($sql);

		if ($result->num_rows > 0) 
		{
		$Respuesta = "Ya existe un modelo con ese código";
		$GuarMod='Error'; 
		}
		else # si no existe verificar que no haya otro grupo con el mismo nombre
		{		
			$sql = "SELECT Codigo,Modelo FROM modelo WHERE Modelo like '$Modelo'";
							
			$result = $Conexion->query($sql);

			if ($result->num_rows > 0) 
			{
				$Respuesta = "Ya existe un modelo con ese nombre"; 
			}
			else
			{
				//sanitize el sql
				$sql = "INSERT INTO modelo(Codigo,Modelo)values('$Codigo','$Modelo');";
								
				if($Conexion->query($sql) === TRUE) 
				{   
				  $Respuesta = "Modelo guardado exitosamente";
				  $GuarMod='Guardo'; 			  
				} 
				else 
				{
				  $Respuesta = "Error al guardar el modelo";
				  $GuarMod='Error';
				}
			}		
		}		
	}			
	else if($GuardarModificar=="Modificar")
	{
		//modificar
		
		$Codigo=$_POST["Codigo"];
		$Modelo=$_POST["Modelo"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
		 	die("Connection failed: " . $Conexion->connect_error);
		} 
			//sanitize el sql
			$sql = "UPDATE modelo SET Modelo='$Modelo' where Codigo='$Codigo'";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Modelo modificado exitosamente";
			  $GuarMod = 'Modifico'; 			  
			} 
			else 
			{
				 $Respuesta = "Error al modificar el modelo";
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

?>