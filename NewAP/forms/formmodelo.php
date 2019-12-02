<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tu Honda APP</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,800" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'><link rel="stylesheet" href="../assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Letra comfortaa-->
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
</head>

<style >
    /*Estilo para el formulario*/
    body{
        font-family: 'Comfortaa', cursive !important;
    }
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family: 'Comfortaa', cursive;
    }
    legend {
        color:white;
        font-size:16px;
        padding:0 10px;
        background: black;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: black; 
        
        padding:20px;
        border-color: black;
    }
    input,
    textarea {
        color: black;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background: black;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: black;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
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
						<li><a href="">Ingresar Generacion</a></li>
						<li><a href="">Ver Generacion</a></li>
					</ul>
				</li>
                                
                                <li class="menu-hasdropdown">
					<a href="#">Repuesto General</a><span class="icon"><i class="fa fa-gear"></i></span>

					<label title="toggle menu" for="repuestogene">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="repuestogene" />

					<ul class="sub-menu-dropdown">
						<li><a href="">Ingresar Repuesto General</a></li>
						<li><a href="">Ver Repuestos Generales</a></li>
					</ul>
				</li>
                                
                                <li class="menu-hasdropdown">
					<a href="#">Repuesto Especifico</a><span class="icon"><i class="fa fa-gear"></i></span>

					<label title="toggle menu" for="repuestoespe">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="repuestoespe" />

					<ul class="sub-menu-dropdown">
						<li><a href="">Ingresar Repuesto Especifico</a></li>
						<li><a href="">Ver Repuestos Especificos</a></li>
					</ul>
				</li>
                                
                                <li class="menu-hasdropdown">
					<a href="#">Repuesto Final</a><span class="icon"><i class="fa fa-gear"></i></span>

					<label title="toggle menu" for="repuestofinal">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="repuestofinal" />

					<ul class="sub-menu-dropdown">
						<li><a href="">Ingresar Repuesto Final</a></li>
						<li><a href="">Ver Repuestos Finales</a></li>
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
            <fieldset>
                <legend>Ingrese el Modelo</legend>
                <div>
                    <input type="text" maxlength="5" id="Codigo" name="txtCodigo" placeholder="Codigo"/>
                </div>
                <div>
                    <input type="text" maxlength="50" id="Modelo" name="txtModelo" placeholder="Modelo"/>
                </div>
           <!--     <div>
                    <input type="radio" name="Estado" value="1">Activo<br>
                    <input type="radio" name="Estado" value="0">Inactivo<br>
                </div>-->
                 
                <input type="button" onclick="GuardarModificar()" name="btnEnviar" value="Enviar"/>
            </fieldset>    
    </div>   

		</div>

	</div>

</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="../assets/js/script.js"></script>

</body>
</html>
