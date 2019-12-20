<?php
include '../Conexion/Conexion.php';

if(!empty($_POST["Modelo"])){
    //obtener todas las generaciones del modelo seleccionado
    $query = $con->query("SELECT * FROM generacion WHERE FK_modelo = '".$_POST['Modelo']."';");
    
    //contar la cantidad de datos obtenidos
    $rowCount = $query->num_rows;
    
    //si hay datos, cargar el combobox de generaciones
    if($rowCount > 0){
        echo '<option value=""></option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Codigo'].'">'.$row['Generacion'].'</option>';
        }
    }else{
        echo '<option value="">Generación no disponible</option>';
    }
}
?>