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

function GuardarOModificar()//funcion para guardar o modificar una generacion
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
		$Generacion=$_POST["Generacion"];
		$Ano=$_POST["Ano"];
		$Estado=$_POST["Estado"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
			die("Connection failed: " . $Conexion->connect_error);
		} 

		$sql = "SELECT Codigo,Generacion FROM generacion WHERE Codigo = '$Codigo'";
							
		$result = $Conexion->query($sql);

		if ($result->num_rows > 0) 
		{
			$Respuesta = "Ya existe una generación con ese código";
			$GuarMod='Error'; 
		}
		else # si no existe verificar que no haya otro grupo con el mismo nombre
		{		
			$sql = "SELECT Codigo,Generacion FROM generacion WHERE Generacion like '$Generacion' AND FK_modelo='$Modelo'";
							
			$result = $Conexion->query($sql);

			if ($result->num_rows > 0) 
			{
				$Respuesta = "Ya existe una generación con ese nombre asignada al modelo seleccionado"; 
			}
			else
			{
				//sanitize el sql
				$sql = "INSERT INTO generacion(Codigo,Generacion,Ano,Estado,FK_modelo)values('$Codigo','$Generacion','$Ano','$Estado','$Modelo');";
								
				if($Conexion->query($sql) === TRUE) 
				{   
				  $Respuesta = "Generación guardada exitosamente";
				  $GuarMod='Guardo'; 			  
				} 
				else 
				{
				  $Respuesta = "Error al guardar la generación";
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
		$Generacion=$_POST["Generacion"];
		$Ano=$_POST["Ano"];
		$Estado=$_POST["Estado"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
		 	die("Connection failed: " . $Conexion->connect_error);
		} 
			//sanitize el sql
			$sql = "UPDATE generacion SET Generacion='$Generacion',Ano='$Ano',Estado='$Estado',FK_modelo='$Modelo' WHERE Codigo='$Codigo'";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Generación modificada exitosamente";
			  $GuarMod = 'Modifico'; 			  
			} 
			else 
			{
				 $Respuesta = "Error al modificar la generación";
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

function Consultar()//funcion para consultar una generacion antes de modificar o solo ver
{
	$Codigo=$_POST['Codigo'];
	//$FK_Usuario=$_SESSION['IDUsuario'];

	$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($Conexion->connect_error) 
	{
		die("Connection failed: " . $Conexion->connect_error);
	} 

	$sql = "SELECT Codigo,Generacion,Ano,Estado,FK_modelo FROM generacion WHERE Codigo = '$Codigo'";
						
	$result = $Conexion->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();

		$Codigo= $row["Codigo"];
		$Generacion=$row["Generacion"];
		$Ano=$row["Ano"];
		$Estado=$row["Estado"];
		$Modelo=$row["FK_modelo"];
	}

	$users_arr[] = array( 
                         "Codigo"=>$Codigo,"Generacion"=>$Generacion,"Ano"=>$Ano,"Modelo"=>$Modelo,"Estado"=>$Estado,
                     );

    // encoding array to json format
    echo json_encode($users_arr);
    exit; 
}

?>