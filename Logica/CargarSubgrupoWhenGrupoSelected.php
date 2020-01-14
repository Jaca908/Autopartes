<?php

include '../Conexion/Conexion.php';

//funcion para cargar los subgrupos en un combobox cuando se selecciona un Grupo

if(!empty($_POST["Grupo"])){
	
	$query="SELECT * FROM subgrupo WHERE FK_grupo = '".$_POST['Grupo']."';";
	
    //obtener todas los subgrupos del modelo seleccionado
    $query = $con->query($query);
    
    //contar la cantidad de datos obtenidos
    $rowCount = $query->num_rows;
    
    //si hay datos, cargar el combobox de subgrupos
    if($rowCount > 0){
        echo '<option value=""></option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Codigo'].'">'.$row['Subgrupo'].'</option>';
        }
    }else{
        echo '<option value="">Subgrupo no disponible</option>';
    }
}
?>