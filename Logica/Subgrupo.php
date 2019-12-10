<?php
session_start();
 
require ("../Conexion/Conexion.php");


//Comprbar si el usuario presiono el boton de EnviarGeneracion

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
		$Grupo=$_POST["Grupo"];
		$Subgrupo=$_POST["Subgrupo"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
			die("Connection failed: " . $Conexion->connect_error);
		} 

		$sql = "SELECT Codigo,Subgrupo FROM subgrupo WHERE Codigo = '$Codigo'";
							
		$result = $Conexion->query($sql);

		if ($result->num_rows > 0) 
		{
			$Respuesta = "Ya existe un subgrupo con ese código";
			$GuarMod='Error'; 
		}
		else # si no existe verificar que no haya otro grupo con el mismo nombre
		{		
			$sql = "SELECT Codigo,Subgrupo FROM subgrupo WHERE Subgrupo like '$Subgrupo' AND FK_grupo='$Grupo'";
							
			$result = $Conexion->query($sql);

			if ($result->num_rows > 0) 
			{
				$Respuesta = "Ya existe un subgrupo con ese nombre asignada al grupo seleccionado"; 
			}
			else
			{
				//sanitize el sql
				$sql = "INSERT INTO subgrupo(Codigo,Subgrupo,FK_grupo)values('$Codigo','$Subgrupo','$Grupo');";
								
				if($Conexion->query($sql) === TRUE) 
				{   
				  $Respuesta = "Subgrupo guardado exitosamente";
				  $GuarMod='Guardo'; 			  
				} 
				else 
				{
				  $Respuesta = "Error al guardar el subgrupo";
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
		$Subgrupo=$_POST["Subgrupo"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
		 	die("Connection failed: " . $Conexion->connect_error);
		} 
			//sanitize el sql
			$sql = "UPDATE subgrupo SET Subgrupo='$Subgrupo',FK_grupo='$Grupo' WHERE Codigo='$Codigo'";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Subgrupo modificado exitosamente";
			  $GuarMod = 'Modifico'; 			  
			} 
			else 
			{
				 $Respuesta = "Error al modificar el subgrupo";
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
	//$FK_Usuario=$_SESSION['IDUsuario'];

	$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($Conexion->connect_error) 
	{
		die("Connection failed: " . $Conexion->connect_error);
	} 

	$sql = "SELECT Codigo,Subgrupo,FK_grupo FROM subgrupo WHERE Codigo = '$Codigo'";
						
	$result = $Conexion->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();

		$Codigo= $row["Codigo"];
		$Subgrupo=$row["Subgrupo"];
		$Grupo=$row["FK_grupo"];
	}

	$users_arr[] = array( 
                         "Codigo"=>$Codigo,"Subgrupo"=>$Subgrupo,"Grupo"=>$Grupo,
                     );

    // encoding array to json format
    echo json_encode($users_arr);
    exit; 
}

?>