<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>TUHONDAAPP</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="../layouts/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style >
    body{
        font-family: 'Comfortaa', cursive !important;
    }
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family: 'Comfortaa', cursive;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); 
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
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
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
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
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">TuHondaAPP</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
            <img class="img-responsive img-rounded" src="./assets/img/logo3.png"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Nombre
            <strong>Usuario</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>En linea</span>
          </span>
        </div>
      </div>
<div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-car-side"></i>
              <span>Modelo</span>
              <!--<span class="badge badge-pill badge-warning">New</span>-->
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="formulariomodelo.php">Ingresar Modelos
                    <!--<span class="badge badge-pill badge-success">Pro</span>-->
                  </a>
                </li>
                <li>
                  <a href="#">Ver Modelos</a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Generacion</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="formulariogeneracion.php">Ingresar Generaciones

                  </a>
                </li>
                <li>
                  <a href="#">Ver Generaciones</a>
                </li>

              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-cogs"></i>
              <span>Respuesto General</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="formulariorepuestogeneral.php">Ingresar Repuesto General</a>
                </li>
                <li>
                  <a href="#">Ver Repuestos Generales</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-cog"></i>
              <span>Repuesto Especifico</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="formulariorepuestoespecifico.php">Ingresar Repuesto Especifico</a>
                </li>
                <li>
                  <a href="#">Ver Repuestos Especificos</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-tools"></i>
              <span>Repuesto Final</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="formulariorepuestofinal.php">V=Ingresar Repuesto Final</a>
                </li>
                <li>
                  <a href="#">Ver Repuestos Finales</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Administracion</span>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-user-friends"></i>
              <span>Usuarios</span>
              <span class="badge badge-pill badge-primary">!!</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-users"></i>
              <span>Clientes</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-cog"></i>
              <span>Ajustes</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
        <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
     <main class="page-content">
    <div class="container-fluid">
      <h2>TUHONDAAPP</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
         
        </div>
        <div class="form-group col-md-12">
         
        </div>
      </div>
      <h5>Ingrese los datos correspondientes</h5>
      <hr>
      <div class="row" id="carga">
               <div id="wrapper">
            <fieldset>
                <legend>Ingrese el Repuesto Especifico</legend>
                <div>
                    <input type="text" maxlength="3" id="Codigo" name="txtCodigo" placeholder="Codigo"/>
                </div>
                <div>
                    <input type="text" maxlength="50" id="RepuestoEspecifico" name="txtRepuestoEspecifico" placeholder="Repuesto Específico"/>
                </div>
<!--                <div>
                    <input type="radio" name="Estado" value="1">Activo<br>
                    <input type="radio" name="Estado" value="0">Inactivo<br>
                </div>-->
                 
                <input type="button" name="btnEnviar" value="Enviar"/>
            </fieldset>    
    </div>  

 
        </div>

      </div>
      
        </div>

  </main> <!-- page-content" -->
</div>
<!-- page-wrapper -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script>
<script  src="../layouts/js/script.js"></script>

</body>
  </html>