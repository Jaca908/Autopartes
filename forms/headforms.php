<!DOCTYPE html>
<html lang="es" >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Tu Honda APP</title>  
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,800" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<link rel="stylesheet" href="../assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Letra comfortaa-->
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

<!--Script para modal, jquery-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="../assets/js/script.js"></script>

<!--Librerias para el modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><!--este es el estilo del boostrap que necesito pero que distorciona la pagina-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
</html>
<!--STYLE FORMULARIOS-->
<style>
body {font-family: Comfortaa;
color:#fff;}
* {box-sizing: border-box;}

legend{
  color: #fff;
}

#divenviar{
  width: 69%;
  background: transparent;
}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline  input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 2px solid #649DB0;
  border-radius: 10px 50px 50px 10px;
  outline: none;
  color: black;
}

.select {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  width: 100%;
  background-color: #fff;
  border: 2px solid #649DB0;
  border-radius: 10px 50px 50px 10px;
  color:black;
  outline: none;
}


.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: black !important;
  cursor: pointer;
  
}

.btnenviar{
  float: right;
  padding: 10px 20px;
  background-color: white;
  border: 2px solid #006797;
  border-radius: 25px !important;
  color:black;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>