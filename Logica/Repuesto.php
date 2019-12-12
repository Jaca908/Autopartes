<?php
session_start();
 
require ("../Conexion/Conexion.php");


//Comprbar si el usuario presiono el boton de Enviar

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

		 $Modelo=$_POST['Modelo'];
	     $Generacion=$_POST['Generacion'];
	     $Grupo=$_POST['Grupo'];
	     $Subgrupo=$_POST['Subgrupo'];
	     $Codigo=$_POST['Codigo'];
	     $Marca=$_POST['Marca'];
	     $CodigoMarca=(!empty($_POST['CodigoMarca']))?"'".$_POST['CodigoMarca']."'":'NULL';
	     $CodigoUniversal=(!empty($_POST['CodigoUniversal']))?"'".$_POST['CodigoUniversal']."'":'NULL';
	     $CodigoAlterno=(!empty($_POST['CodigoAlterno']))?"'".$_POST['CodigoAlterno']."'":'NULL';
	     $Repuesto=$_POST['Repuesto'];
	     $Peso=$_POST['Peso'];
	     $Dimension=$_POST['Dimension'];
	     $Medida=$_POST['Medida'];

	     $Manual=$_POST["Manual"];
		 $Automatico=$_POST["Automatico"];
		 $t4X2=$_POST["t4X2"];
		 $t4X4=$_POST["t4X4"];
		 $Gasolina=$_POST["Gasolina"];
		 $Diesel=$_POST["Diesel"];
		 $Electrico=$_POST["Electrico"];
		 $Hibrido=$_POST["Hibrido"];

	     $Caracteristica1=(!empty($_POST['Caracteristica1']))?"'".$_POST['Caracteristica1']."'":'NULL';
	     $Caracteristica2=(!empty($_POST['Caracteristica2']))?"'".$_POST['Caracteristica2']."'":'NULL';
	     $Caracteristica3=(!empty($_POST['Caracteristica3']))?"'".$_POST['Caracteristica3']."'":'NULL';
	     $PrecioCosto=$_POST["PrecioCosto"];
	     $PrecioVenta=$_POST["PrecioVenta"];
	     $Utilidad=$_POST["Utilidad"];
	     $IVA=$_POST["IVA"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
			die("Connection failed: " . $Conexion->connect_error);
		} 

		$sql = "SELECT Codigo,Repuesto 
				FROM repuesto 
				WHERE Codigo = '$Codigo' AND FK_modelo='$Modelo' 
				AND FK_generacion='$Generacion' AND FK_grupo='$Grupo'
				AND FK_subgrupo='$Subgrupo' AND FK_marca_repuesto='$Marca'";
							
		$result = $Conexion->query($sql);

		if ($result->num_rows > 0) 
		{
			$Respuesta = "Ya existe un repuesto con ese código";
			$GuarMod='Error'; 
		}
		else # si no existe verificar que no haya otro grupo con el mismo nombre
		{		
				//sanitize el sql
				$sql = "INSERT INTO repuesto
						   (FK_modelo,
							FK_generacion,
							FK_grupo,
							FK_subgrupo,
							Codigo,
							FK_marca_repuesto,
							CodigoMarca,
							CodigoUniversal, 
							CodigoAlterno, 
							Repuesto,
							Peso,
							Dimension,
							Medida,
							Automatico,
							Manual,
							4X2,
							4X4,
							Gasolina,
							Dielsel,
							Electrico,
							Hibrido,
							Caracteristica1,
							Caracteristica2, 
							Caracteristica3,
							PrecioCosto,
							PrecioVenta,
							Utilidad,
							IVA)
							VALUES('$Modelo','$Generacion','$Grupo','$Subgrupo','$Codigo',$Marca,$CodigoMarca,$CodigoUniversal,
							$CodigoAlterno,'$Repuesto',$Peso,'$Dimension','$Medida',$Automatico,$Manual,$t4X2,$t4X4,$Gasolina,
							$Diesel,$Electrico,$Hibrido,$Caracteristica1,$Caracteristica2,$Caracteristica3,$PrecioCosto,
							$PrecioVenta,$Utilidad,$IVA);";
								
				if($Conexion->query($sql) === TRUE) 
				{   
				  $Respuesta = "Repuesto guardado exitosamente";
				  $GuarMod='Guardo'; 			  
				} 
				else 
				{
				  $Respuesta = "Error al guardar el repuesto";
				  $GuarMod='Error';
				}
					
		}		
	}			
	else if($GuardarModificar=="Modificar")
	{
		//modificar
		
		 $Modelo=$_POST['Modelo'];
	     $Generacion=$_POST['Generacion'];
	     $Grupo=$_POST['Grupo'];
	     $Subgrupo=$_POST['Subgrupo'];
	     $Codigo=$_POST['Codigo'];
	     $Marca=$_POST['Marca'];
	     $CodigoMarca=(!empty($_POST['CodigoMarca']))?"'".$_POST['CodigoMarca']."'":'NULL';
	     $CodigoUniversal=(!empty($_POST['CodigoUniversal']))?"'".$_POST['CodigoUniversal']."'":'NULL';
	     $CodigoAlterno=(!empty($_POST['CodigoAlterno']))?"'".$_POST['CodigoAlterno']."'":'NULL';
	     $Repuesto=$_POST['Repuesto'];
	     $Peso=$_POST['Peso'];
	     $Dimension=$_POST['Dimension'];
	     $Medida=$_POST['Medida'];

	     $Manual=$_POST["Manual"];
		 $Automatico=$_POST["Automatico"];
		 $t4X2=$_POST["t4X2"];
		 $t4X4=$_POST["t4X4"];
		 $Gasolina=$_POST["Gasolina"];
		 $Diesel=$_POST["Diesel"];
		 $Electrico=$_POST["Electrico"];
		 $Hibrido=$_POST["Hibrido"];

	     $Caracteristica1=(!empty($_POST['Caracteristica1']))?"'".$_POST['Caracteristica1']."'":'NULL';
	     $Caracteristica2=(!empty($_POST['Caracteristica2']))?"'".$_POST['Caracteristica2']."'":'NULL';
	     $Caracteristica3=(!empty($_POST['Caracteristica3']))?"'".$_POST['Caracteristica3']."'":'NULL';
	     $PrecioCosto=$_POST["PrecioCosto"];
	     $PrecioVenta=$_POST["PrecioVenta"];
	     $Utilidad=$_POST["Utilidad"];
	     $IVA=$_POST["IVA"];
		//$FK_Usuario=$_SESSION['IDUsuario'];
		
		$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($Conexion->connect_error) 
		{
		 	die("Connection failed: " . $Conexion->connect_error);
		} 
			//sanitize el sql
			$sql = "UPDATE repuesto 
					SET FK_modelo='$Modelo',
						FK_generacion='$Generacion',
						FK_grupo='$Grupo',
						FK_subgrupo='$Subgrupo',
						FK_marca_repuesto=$Marca,
						CodigoMarca=$CodigoMarca,
						CodigoUniversal=$CodigoUniversal, 
						CodigoAlterno=$CodigoAlterno, 
						Repuesto='$Repuesto',
						Peso=$Peso,
						Dimension='$Dimension',
						Medida='$Medida',
						Automatico=$Automatico,
						Manual=$Manual,
						4X2=$t4X2,
						4X4=$t4X4,
						Gasolina=$Gasolina,
						Dielsel=$Diesel,
						Electrico=$Electrico,
						Hibrido=$Hibrido,
						Caracteristica1=$Caracteristica1,
						Caracteristica2=$Caracteristica2, 
						Caracteristica3=$Caracteristica3,
						PrecioCosto=$PrecioCosto,
						PrecioVenta=$PrecioVenta,
						Utilidad=$Utilidad,
						IVA=$IVA 
						WHERE Codigo='$Codigo';";
							
			if($Conexion->query($sql) === TRUE) 
			{   
			  $Respuesta = "Repuesto modificado exitosamente";
			  $GuarMod = 'Modifico'; 			  
			} 
			else 
			{
				 $Respuesta = "Error al modificar el repuesto";
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

	$sql = "SELECT Codigo,Generacion,Ano,FK_modelo FROM generacion WHERE Codigo = '$Codigo'";
						
	$result = $Conexion->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();

		$Codigo= $row["Codigo"];
		$Generacion=$row["Generacion"];
		$Ano=$row["Ano"];
		$Modelo=$row["FK_modelo"];
	}

	$users_arr[] = array( 
                         "Codigo"=>$Codigo,"Generacion"=>$Generacion,"Ano"=>$Ano,"Modelo"=>$Modelo,
                     );

    // encoding array to json format
    echo json_encode($users_arr);
    exit; 
}

?>