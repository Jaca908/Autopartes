<!--INCLUYE EL HEAD-->
<?php include_once "headforms.php"?>



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
                                            <li><a href="formmodelo.php">Ingresar Modelo</a></li>
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
                                                <li><a href="../forms/vistas/vergeneraciones.php">Ver Generacion</a></li>
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
						<li><a href="vistas/verrepuestos.php">Ver Repuestos</a></li>
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
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Codigo</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Ingrese el codigo del Repuesto..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Ingrese el nombre del Repuesto..">
      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label for="grupo">Grupo</label>
      </div>
      <div class="col-75">
        <select id="grupo" name="grupo">
          <option value="">Seleccione un grupo</option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>
            
      </div>
      
         <div class="row">
      <div class="col-25">
        <label for="grupo">SubGrupo</label>
      </div>
      <div class="col-75">
        <select id="subgrupo" name="subgrupo">
          <option value="">Seleccione un subgrupo</option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>  
      </div>
      
       <div class="row">
      <div class="col-25">
        <label for="consecutivo">Consecutivo</label>
      </div>
      <div class="col-75">
        <input type="text" id="consecutivo" name="consecutivo" placeholder="Ingrese el Consecutivo..">
      </div>
    </div>
      
             <div class="row">
      <div class="col-25">
        <label for="marca">Marca</label>
      </div>
      <div class="col-75">
        <input type="text" id="marca" name="marca" placeholder="Ingrese la marca del repuesto..">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="caracte">Caract.Rep1</label>
      </div>
      <div class="col-75">
        <input type="text" id="caracte" name="caracte1" placeholder="Ingrese una caracteristica...">
      </div>
    </div>
      
            <div class="row">
      <div class="col-25">
        <label for="caracte2">Caract.Rep2</label>
      </div>
      <div class="col-75">
        <input type="text" id="caracte2" name="caracte2" placeholder="Ingrese una caracteristica...">
      </div>
    </div>
      
         <div class="row">
      <div class="col-25">
        <label for="caracte3">Caract.Rep3</label>
      </div>
      <div class="col-75">
        <input type="text" id="caracte3" name="caracte3" placeholder="Ingrese una caracteristica...">
      </div>
    </div>
      
       <div class="row">
      <div class="col-25">
        <label for="coduniversal">Codigo Universal</label>
      </div>
      <div class="col-75">
        <input type="text" id="coduniversal" name="coduniversal" placeholder="Ingrese el codigo Universal...">
      </div>
    </div>
      
       <div class="row">
      <div class="col-25">
        <label for="codmarca">Cod. Marca</label>
      </div>
      <div class="col-75">
        <input type="text" id="codmarca" name="codmarca" placeholder="Ingrese el codigo de marca...">
      </div>
    </div>
      
             <div class="row">
      <div class="col-25">
        <label for="codalterno">Cod. Alterno</label>
      </div>
      <div class="col-75">
        <input type="text" id="codalterno" name="codalterno" placeholder="Ingrese el codigo alterno...">
      </div>
    </div>
      
        <div class="row">
      <div class="col-25">
        <label for="caractauto">Caract.Auto1</label>
      </div>
      <div class="col-75">
        <input type="text" id="caractauto" name="caractauto" placeholder="Ingrese una caracteristica...">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="caractauto2">Caract.Auto2</label>
      </div>
      <div class="col-75">
        <input type="text" id="caractauto2" name="caractauto2" placeholder="Ingrese una caracteristica...">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="caractauto3">Caract.Auto3</label>
      </div>
      <div class="col-75">
        <input type="text" id="caractauto3" name="caractauto3" placeholder="Ingrese una caracteristica...">
      </div>
    </div>
      
      
      <div class="row">
      <div class="col-25">
        <label for="medida">Medida</label>
      </div>
      <div class="col-75">
        <input type="text" id="medida" name="medida" placeholder="Ingrese la medida...">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="peso">Peso</label>
      </div>
      <div class="col-75">
        <input type="text" id="peso" name="peso" placeholder="Ingrese la peso...">
      </div>
    </div>
      
       <div class="row">
      <div class="col-25">
        <label for="dimension">Dimension</label>
      </div>
      <div class="col-75">
        <input type="text" id="dimension" name="dimension" placeholder="Ingrese la dimension...">
      </div>
      
      
      
      
      
       
       
       
       
       
       
       
       
       
    </div>

    <div class="row">
      <input type="submit" value="Guardar">
    </div>
  </form>
</div>
    </div>   

		</div>

	</div>

</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="../assets/js/script.js"></script>

</body>
</html>
