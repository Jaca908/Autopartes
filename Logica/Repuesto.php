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
else if(isset($_POST['btnBorrar']))
{
	Borrar();
}

function GuardarOModificar()//funcion para guardar o modificar un repuesto
{
	$GuardarModificar=$_POST["GuardarModificar"];
	
	$Respuesta='';
	$GuarMod='';

	#ver si es guardar o Modificar
	
	if($GuardarModificar=="Guardar")
	{
		//Guardar
		 $CodigoGeneral=$_POST['CodigoGeneral'];
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
	     $Peso=(!empty($_POST['Peso']))?"".$_POST['Peso']."":'NULL';
	     $Categoria=$_POST['Categoria'];
	     $Medida=(!empty($_POST['Medida']))?"'".$_POST['Medida']."'":'NULL';

	     $Manual=$_POST["Manual"];
		 $Automatico=$_POST["Automatico"];
		 $t4X2=$_POST["t4X2"];
		 $t4X4=$_POST["t4X4"];
		 $Gasolina=$_POST["Gasolina"];
		 $Diesel=$_POST["Diesel"];
		 $Electrico=$_POST["Electrico"];
		 $Hibrido=$_POST["Hibrido"];

	     $CaractRep1=(!empty($_POST['CaractRep1']))?"'".$_POST['CaractRep1']."'":'NULL';
	     $CaractRep2=(!empty($_POST['CaractRep2']))?"'".$_POST['CaractRep2']."'":'NULL';
	     $CaractRep3=(!empty($_POST['CaractRep3']))?"'".$_POST['CaractRep3']."'":'NULL';
	     $CaractAuto1=(!empty($_POST['CaractAuto1']))?"'".$_POST['CaractAuto1']."'":'NULL';
	     $CaractAuto2=(!empty($_POST['CaractAuto2']))?"'".$_POST['CaractAuto2']."'":'NULL';
	     $CaractAuto3=(!empty($_POST['CaractAuto3']))?"'".$_POST['CaractAuto3']."'":'NULL';
	     
	     $CantMinima=$_POST["CantMinima"];
	     
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

		$sql = "SELECT CodigoGeneral, Codigo,Repuesto 
				FROM repuesto 
				WHERE Codigo = '$Codigo' AND FK_modelo='$Modelo' 
				AND FK_generacion='$Generacion' AND FK_grupo='$Grupo'
				AND FK_subgrupo='$Subgrupo' AND FK_marca_repuesto=$Marca and FK_categoria=$Categoria";
							
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
						   (CodigoGeneral,
						    FK_modelo,
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
							FK_categoria,
							Medida,
							Automatico,
							Manual,
							4X2,
							4X4,
							Gasolina,
							Diesel,
							Electrico,
							Hibrido,
							CaractRep1,
							CaractRep2, 
							CaractRep3,
							CaractAuto1,
							CaractAuto2, 
							CaractAuto3,
							CantidadMinima,
							PrecioCosto,
							PrecioVenta,
							Utilidad,
							IVA)
							VALUES('$CodigoGeneral','$Modelo','$Generacion','$Grupo','$Subgrupo','$Codigo',$Marca,$CodigoMarca,$CodigoUniversal,
							$CodigoAlterno,'$Repuesto',$Peso,$Categoria,$Medida,$Automatico,$Manual,$t4X2,$t4X4,$Gasolina,
							$Diesel,$Electrico,$Hibrido,$CaractRep1,$CaractRep2,$CaractRep3,$CaractAuto1,$CaractAuto2,$CaractAuto3,
							$CantMinima,$PrecioCosto,$PrecioVenta,$Utilidad,$IVA);";
								
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
		 $CodigoInterno=$_POST['CodigoInterno'];
		 $CodigoGeneral=$_POST['CodigoGeneral'];
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
	     $Peso=(!empty($_POST['Peso']))?"".$_POST['Peso']."":'NULL';
	     $Categoria=$_POST['Categoria'];
	     $Medida=(!empty($_POST['Medida']))?"'".$_POST['Medida']."'":'NULL';

	     $Manual=$_POST["Manual"];
		 $Automatico=$_POST["Automatico"];
		 $t4X2=$_POST["t4X2"];
		 $t4X4=$_POST["t4X4"];
		 $Gasolina=$_POST["Gasolina"];
		 $Diesel=$_POST["Diesel"];
		 $Electrico=$_POST["Electrico"];
		 $Hibrido=$_POST["Hibrido"];

	     $CaractRep1=(!empty($_POST['CaractRep1']))?"'".$_POST['CaractRep1']."'":'NULL';
	     $CaractRep2=(!empty($_POST['CaractRep2']))?"'".$_POST['CaractRep2']."'":'NULL';
	     $CaractRep3=(!empty($_POST['CaractRep3']))?"'".$_POST['CaractRep3']."'":'NULL';
	     $CaractAuto1=(!empty($_POST['CaractAuto1']))?"'".$_POST['CaractAuto1']."'":'NULL';
	     $CaractAuto2=(!empty($_POST['CaractAuto2']))?"'".$_POST['CaractAuto2']."'":'NULL';
	     $CaractAuto3=(!empty($_POST['CaractAuto3']))?"'".$_POST['CaractAuto3']."'":'NULL';
	     
	     $CantMinima=$_POST["CantMinima"];
	     
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
					SET CodigoGeneral='$CodigoGeneral',
						Codigo='$Codigo',
						FK_modelo='$Modelo',
						FK_generacion='$Generacion',
						FK_grupo='$Grupo',
						FK_subgrupo='$Subgrupo',
						FK_marca_repuesto=$Marca,
						CodigoMarca=$CodigoMarca,
						CodigoUniversal=$CodigoUniversal, 
						CodigoAlterno=$CodigoAlterno, 
						Repuesto='$Repuesto',
						Peso=$Peso,
						FK_categoria='$Categoria',
						Medida=$Medida,
						Automatico=$Automatico,
						Manual=$Manual,
						4X2=$t4X2,
						4X4=$t4X4,
						Gasolina=$Gasolina,
						Diesel=$Diesel,
						Electrico=$Electrico,
						Hibrido=$Hibrido,
						CaractRep1=$CaractRep1,
						CaractRep2=$CaractRep2, 
						CaractRep3=$CaractRep3,
						CaractAuto1=$CaractAuto1,
						CaractAuto2=$CaractAuto2, 
						CaractAuto3=$CaractAuto3,
						CantidadMinima=$CantMinima,
						PrecioCosto=$PrecioCosto,
						PrecioVenta=$PrecioVenta,
						Utilidad=$Utilidad,
						IVA=$IVA 
						WHERE CodigoInterno=$CodigoInterno;";
							
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

function Consultar()//funcion para consultar un repuesto antes de modificar o solo verlo
{
	  $CodigoInterno=$_POST['CodigoInterno'];
	//$FK_Usuario=$_SESSION['IDUsuario'];

	$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($Conexion->connect_error) 
	{
		die("Connection failed: " . $Conexion->connect_error);
	} 

	$sql = "SELECT 
				R.CodigoInterno,
				R.CodigoGeneral,
				R.FK_modelo,
				R.FK_generacion,
				R.FK_grupo,
				R.FK_subgrupo,
				R.Codigo,
				R.FK_marca_repuesto,
				R.CodigoMarca,
				R.CodigoUniversal, 
				R.CodigoAlterno, 
				R.Repuesto,
				R.Peso,
				R.FK_categoria,
				R.Medida,
				R.Automatico,
				R.Manual,
				R.4X2,
				R.4X4,
				R.Gasolina,
				R.Diesel,
				R.Electrico,
				R.Hibrido,
				R.CaractRep1,
				R.CaractRep2, 
				R.CaractRep3,
				R.CaractAuto1,
				R.CaractAuto2, 
				R.CaractAuto3,
				R.CantidadMinima,
				R.PrecioCosto,
				R.PrecioVenta,
				R.Utilidad,
				R.IVA
	 
	  FROM repuesto R 	 
	  WHERE R.CodigoInterno = $CodigoInterno;";
						
	$result = $Conexion->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();

		$CodigoInterno=$row['CodigoInterno'];
		$CodigoGeneral=$row['CodigoGeneral'];
		$FK_modelo=$row["FK_modelo"];
		$FK_generacion=$row["FK_generacion"];
		$FK_grupo=$row["FK_grupo"];
		$FK_subgrupo=$row["FK_subgrupo"];
		$Codigo=$row["Codigo"];
		$FK_marca_repuesto=$row["FK_marca_repuesto"];
		$CodigoMarca=$row["CodigoMarca"];
		$CodigoUniversal=$row["CodigoUniversal"];
		$CodigoAlterno=$row["CodigoAlterno"]; 
		$Repuesto=$row["Repuesto"];
		$Peso=$row["Peso"];
		$Categoria=$row["FK_categoria"];
		$Medida=$row["Medida"];
		$Automatico=$row["Automatico"];
		$Manual=$row["Manual"];
		$t4X2=$row["4X2"];
		$t4X4=$row["4X4"];
		$Gasolina=$row["Gasolina"];
		$Diesel=$row["Diesel"];
		$Electrico=$row["Electrico"];
		$Hibrido=$row["Hibrido"];
		$CaractRep1=$row["CaractRep1"];
		$CaractRep2=$row["CaractRep2"]; 
		$CaractRep3=$row["CaractRep3"];
		$CaractAuto1=$row["CaractAuto1"];
		$CaractAuto2=$row["CaractAuto2"]; 
		$CaractAuto3=$row["CaractAuto3"];
		$CantMinima=$row["CantidadMinima"];
		$PrecioCosto=$row["PrecioCosto"];
		$PrecioVenta=$row["PrecioVenta"];
		$Utilidad=$row["Utilidad"];
		$IVA=$row["IVA"];
	}

	$users_arr[] = array( 
                         "CodigoInterno"=>$CodigoInterno,
                         "CodigoGeneral"=>$CodigoGeneral,
                         "Modelo"=>$FK_modelo,
                         "Generacion"=>$FK_generacion,
                         "Grupo"=>$FK_grupo,
                         "Subgrupo"=>$FK_subgrupo,
                         "Codigo"=>$Codigo,
                         "Marca"=>$FK_marca_repuesto,
                         "CodigoMarca"=>$CodigoMarca,
                         "CodigoUnversal"=>$CodigoUniversal,
                         "CodigoAlterno"=>$CodigoAlterno,
                         "Repuesto"=>$Repuesto,
                         "Peso"=>$Peso,
                         "Categoria"=>$Categoria,
                         "Medida"=>$Medida,
                         "Automatico"=>$Automatico,
                         "Manual"=>$Manual,
                         "4X2"=>$t4X2,
                         "4X4"=>$t4X4,
                         "Gasolina"=>$Gasolina,
                         "Diesel"=>$Diesel,
                         "Electrico"=>$Electrico,
                         "Hibrido"=>$Hibrido,
                         "CaractRep1"=>$CaractRep1,
                         "CaractRep2"=>$CaractRep2,
                         "CaractRep3"=>$CaractRep3,
                         "CaractAuto1"=>$CaractAuto1,
                         "CaractAuto2"=>$CaractAuto2,
                         "CaractAuto3"=>$CaractAuto3,
                         "CantMinima"=>$CantMinima,
                         "PrecioCosto"=>$PrecioCosto,
                         "PrecioVenta"=>$PrecioVenta,
                         "Utilidad"=>$Utilidad,
                         "IVA"=>$IVA,
                     );

    // encoding array to json format
    echo json_encode($users_arr);
    exit; 
}

function Borrar()//funcion para borrar un repuesto
{
	$CodigoInterno=$_POST['CodInterno'];
	
	$Respuesta='';
	
	$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($Conexion->connect_error) 
	{
	 	die("Connection failed: " . $Conexion->connect_error);
	}
	
	$sql="DELETE FROM repuesto WHERE CodigoInterno=$CodigoInterno";
	
	if($Conexion->query($sql) === TRUE) 
	{   
	  $Respuesta = "Repuesto borrado exitosamente";			  
	} 
	else 
	{
	  $Respuesta = "Error al borrar el repuesto";
	}
	
	$users_arr[] = array(
	  "Respuesta"=>$Respuesta,
	);

	echo json_encode($users_arr);
	exit;
}

?>