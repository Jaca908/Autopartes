<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Tu Honda APP</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,800" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'><link rel="stylesheet" href="../assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Letra comfortaa-->
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<style>
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit],#enviar {
  background-color: #120B00;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: -35%;
}
input[type=submit]:hover {
  background-color: #144033;
}
.container {
  border-radius: 5px;
  background-color: #120B00;
  color: #fff;
  padding: 20px;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
<!-- partial:index.partial.html -->
<div class="primary-nav">
	<button href="#" class="hamburger open-panel nav-toggle">
<span class="screen-reader-text">Menu</span>
</button>
	<nav role="navigation" class="menu">
		<a href="#" class="logotype">TUHONDA<span>APP</span></a>
		<div class="overflow-container">
			<ul class="menu-dropdown">
				
				<li class="menu-hasdropdown">
					<a href="#">Modelo</a><span class="icon"><i class="fa fa-gear"></i></span>
					<label title="toggle menu" for="modelo">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="modelo" />
					<ul class="sub-menu-dropdown">
						<li><a href="#">Ingresar Modelo</a></li>
                                                <li><a href="../forms/vistas/vermodelos.php">Ver Modelos</a></li>
					</ul>
				</li>
                                
                                <li class="menu-hasdropdown">
					<a href="#">Generacion</a><span class="icon"><i class="fa fa-gear"></i></span>
					<label title="toggle menu" for="generacion">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="generacion" />
					<ul class="sub-menu-dropdown">
                                            <li><a href="formgeneracion.php">Ingresar Generacion</a></li>
                                            <li><a href="../forms/vistas/vergeneracion.php">Ver Generacion</a></li>
					</ul>
				</li>
                                
                              <li class="menu-hasdropdown">
					<a href="#">Grupos</a><span class="icon"><i class="fa fa-gear"></i></span>
					<label title="toggle menu" for="grupo">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="grupo" />
					<ul class="sub-menu-dropdown">
						<li><a href="formgrupo.php">Ingresar Grupo</a></li>
						<li><a href="forms/vistas/vergrupos.php">Ver Grupo</a></li>
					</ul>
				</li>
                                
                                <li class="menu-hasdropdown">
					<a href="#">SubGrupo</a><span class="icon"><i class="fa fa-gear"></i></span>
					<label title="toggle menu" for="subgrupo">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="subgrupo" />
					<ul class="sub-menu-dropdown">
						<li><a href="formsubgrupo.php">Ingresar SubGrupo</a></li>
						<li><a href="forms/vistas/versubgrupos.php">Ver SubGrupo</a></li>
					</ul>
				</li>
                                
                                <li class="menu-hasdropdown">
					<a href="#">Repuesto</a><span class="icon"><i class="fa fa-gear"></i></span>
					<label title="toggle menu" for="repuesto">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="repuesto" />
					<ul class="sub-menu-dropdown">
						<li><a href="formrepuesto.php">Ingresar Repuesto</a></li>
						<li><a href="forms/vistas/verrepuestos.php">Ver Repuestos</a></li>
					</ul>
				</li>
				<li><a href="#">Favourites</a><span class="icon"><i class="fa fa-heart"></i></span></li>
				<li><a href="#">Messages</a><span class="icon"><i class="fa fa-envelope"></i></span></li>
			</ul>
		</div>
	</nav>
</div>
<div class="new-wrapper">
	<div id="main">
		<div id="main-contents">
                            
                   <div id="wrapper">
<div class="container">
	<fieldset>
                <legend>Ingrese el Modelo</legend>
    <div class="row">
      <div class="col-25">
        <label for="fname">Codigo</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="5" id="Codigo" name="txtCodigo" placeholder="Codigo"/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Modelo</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="50" id="Modelo" name="txtModelo" placeholder="Modelo"/>
      </div>
    </div>
   <!-- <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>-->
    <div class="row">
      <div class="col-20">
      </div>
      <div class="col-75">
          <input type="button" id="enviar" value="Enviar">
      </div>
    </div>
    </fieldset>
</div>
    </div>   
		</div>
	</div>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="../assets/js/script.js"></script>
</body>
</html>