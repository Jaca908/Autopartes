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

function GuardarOModificar()//funcion para guardar o modificar una categoria
{
	$GuardarModificar=$_POST["GuardarModificar"];
	
	$Respuesta='';
	$GuarMod='';

	#ver si es guardar o Modificar
	
	if($GuardarModificar=="Guardar")
	{
		//Guardar

		$Codigo=$_POST["Codigo"];
		$Categoria=$_POST["Categoria"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
			die("Connection failed: " . $Conexion->connect_error);
		}
		 		
		$sql = "SELECT Codigo,Categoria FROM categoria WHERE Categoria like '$Categoria'";
						
		$result = $Conexion->query($sql);

		if ($result->num_rows > 0) 
		{
			$Respuesta = "Ya existe una categoría de repuesto con ese nombre"; 
		}
		else
		{
			//sanitize el sql
			$sql = "INSERT INTO categoria(Categoria)values('$Categoria');";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Categoría de repuesto guardada exitosamente";
			  $GuarMod='Guardo'; 			  
			} 
			else 
			{
			  $Respuesta = "Error al guardar la categoria de repuesto";
			  $GuarMod='Error';
			}
		}		
				
	}			
	else if($GuardarModificar=="Modificar")
	{
		//modificar
		
		$Codigo=$_POST["Codigo"];
		$Categoria=$_POST["Categoria"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
		 	die("Connection failed: " . $Conexion->connect_error);
		} 
			//sanitize el sql
			$sql = "UPDATE categoria SET Categoria='$Categoria' WHERE Codigo=$Codigo";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Categoría de repuesto modificada exitosamente";
			  $GuarMod = 'Modifico'; 			  
			} 
			else 
			{
				 $Respuesta = "Error al modificar la categoría de repuesto";
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

function Consultar()//funcion para consultar una categoria antes de modificar o solo ver
{
	$Codigo=$_POST['Codigo'];
	
	$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($Conexion->connect_error) 
	{
	 	die("Connection failed: " . $Conexion->connect_error);
	} 
	
	$sql="SELECT Codigo,Categoria FROM categoria WHERE Codigo=$Codigo;";
	
	$result = $Conexion->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();

		$Codigo= $row["Codigo"];
		$Categoria=$row["Categoria"];
	}

	$users_arr[] = array( 
                         "Codigo"=>$Codigo,"Categoria"=>$Categoria,
                     );

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}

?>