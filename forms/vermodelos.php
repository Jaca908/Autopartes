<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>TUHONDAAPP</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="../layouts/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'><link rel="stylesheet" href="../css/style.css">
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
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <caption class="text-center">An example of a responsive table based on <a href="https://datatables.net/extensions/responsive/" target="_blank">DataTables</a>:</caption>
        <thead>
          <tr>
            <th>Country</th>
            <th>Languages</th>
            <th>Population</th>
            <th>Median Age</th>
            <th>Area (Km²)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Argentina</td>
            <td>Spanish (official), English, Italian, German, French</td>
            <td>41,803,125</td>
            <td>31.3</td>
            <td>2,780,387</td>
          </tr>
          <tr>
            <td>Australia</td>
            <td>English 79%, native and other languages</td>
            <td>23,630,169</td>
            <td>37.3</td>
            <td>7,739,983</td>
          </tr>
          <tr>
            <td>Greece</td>
            <td>Greek 99% (official), English, French</td>
            <td>11,128,404</td>
            <td>43.2</td>
            <td>131,956</td>
          </tr>
          <tr>
            <td>Luxembourg</td>
            <td>Luxermbourgish (national) French, German (both administrative)</td>
            <td>536,761</td>
            <td>39.1</td>
            <td>2,586</td>
          </tr>
          <tr>
            <td>Russia</td>
            <td>Russian, others</td>
            <td>142,467,651</td>
            <td>38.4</td>
            <td>17,076,310</td>
          </tr>
          <tr>
            <td>Sweden</td>
            <td>Swedish, small Sami- and Finnish-speaking minorities</td>
            <td>9,631,261</td>
            <td>41.1</td>
            <td>449,954</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5" class="text-center">Data retrieved from <a href="http://www.infoplease.com/ipa/A0855611.html" target="_blank">infoplease</a> and <a href="http://www.worldometers.info/world-population/population-by-country/" target="_blank">worldometers</a>.</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
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

<!--Datatables-->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script><script  src="../js/script.js"></script>

</body>
  </html>