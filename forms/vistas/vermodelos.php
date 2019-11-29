<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>TUHONDAAPP</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="assets/css/stylemenu.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

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
            
                                </div>  <!-- page-wrapper -->
                </div>
        </div>
    </main>  <!-- page-content" -->
</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script>
<script  src="assets/js/scriptdatatable.js"></script>

</body>
  </html>