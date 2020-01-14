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

function GuardarOModificar()//funcion para guardar o modificar un grupo
{
	$GuardarModificar=$_POST["GuardarModificar"];
	
	$Respuesta='';
	$GuarMod='';

	#ver si es guardar o Modificar
	
	if($GuardarModificar=="Guardar")
	{
		//Guardar

		$Codigo=$_POST["Codigo"];
		$Grupo=$_POST["Grupo"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
			die("Connection failed: " . $Conexion->connect_error);
		} 

		$sql = "SELECT Codigo,Grupo FROM grupo WHERE Codigo = '$Codigo'";
							
		$result = $Conexion->query($sql);

		if ($result->num_rows > 0) 
		{
		$Respuesta = "Ya existe un grupo con ese código";
		$GuarMod='Error'; 
		}
		else # si no existe verificar que no haya otro grupo con el mismo nombre
		{		
			$sql = "SELECT Codigo,Grupo FROM grupo WHERE Grupo like '$Grupo'";
							
			$result = $Conexion->query($sql);

			if ($result->num_rows > 0) 
			{
				$Respuesta = "Ya existe un grupo con ese nombre"; 
			}
			else
			{
				//sanitize el sql
				$sql = "INSERT INTO grupo(Codigo,Grupo)values('$Codigo','$Grupo');";
								
				if($Conexion->query($sql) === TRUE) 
				{   
				  $Respuesta = "Grupo guardado exitosamente";
				  $GuarMod='Guardo'; 			  
				} 
				else 
				{
				  $Respuesta = "Error al guardar el grupo";
				  $GuarMod='Error';
				}
			}		
		}		
	}			
	else if($GuardarModificar=="Modificar")
	{
		//modificar
		
		$Codigo=$_POST["Codigo"];
		$Grupo=$_POST["Grupo"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
		 	die("Connection failed: " . $Conexion->connect_error);
		} 
			//sanitize el sql
			$sql = "UPDATE grupo SET Grupo='$Grupo' WHERE Codigo='$Codigo'";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Grupo modificado exitosamente";
			  $GuarMod = 'Modifico'; 			  
			} 
			else 
			{
				 $Respuesta = "Error al modificar el grupo";
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

function Consultar()//funcion para consultar un grupo antes de modificar o solo ver
{
	$Codigo=$_POST['Codigo'];
	
	$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($Conexion->connect_error) 
	{
	 	die("Connection failed: " . $Conexion->connect_error);
	} 
	
	$sql="SELECT Codigo,Grupo FROM grupo WHERE Codigo='$Codigo';";
	
	$result = $Conexion->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();

		$Codigo= $row["Codigo"];
		$Grupo=$row["Grupo"];
	}

	$users_arr[] = array( 
                         "Codigo"=>$Codigo,"Grupo"=>$Grupo,
                     );

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}

?>