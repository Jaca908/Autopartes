<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Tu Honda APP</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,800" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'><link rel="stylesheet" href="../../assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Letra comfortaa-->
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">



<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="../../assets/css/styledatatable.css">



</head>

<style>
    div.new-wrapper{
        font-family: Comfortaa;
    }
</style>

<body>
<!-- partial:index.partial.html -->
<div class="primary-nav">

	<button href="#" class="hamburger open-panel nav-toggle">
<span class="screen-reader-text">Menu</span>
</button>

	<nav role="navigation" class="menu">

            <a href="../../index.html" class="logotype">TUHONDA<span>APP</span></a>

		<div class="overflow-container">

			<ul class="menu-dropdown">

				

				<li class="menu-hasdropdown">
					<a href="#">Modelo</a><span class="icon"><i class="fa fa-gear"></i></span>

					<label title="toggle menu" for="modelo">
                                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                                        </label>
					<input type="checkbox" class="sub-menu-checkbox" id="modelo" />

					<ul class="sub-menu-dropdown">
                                            <li><a href="../../forms/formmodelo.php">Ingresar Modelo</a></li>
						<li><a href="#">Ver Modelos</a></li>
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
<div class="container">
      <div class="header_wrap">
        <div class="num_rows">
		
				<div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
						 
						 
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
            <option value="5000">Show ALL Rows</option>
						</select>
			 		
			  	</div>
        </div>
        <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
      </div>
<table class="table table-striped table-class" id= "table-id">
  
	
<thead>
<tr>
		<th>Modelo</th>
                <th>Acciones</th>

	</tr>
  </thead>
<tbody>
	<tr>
		<td>Modelo1</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo2</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo3</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo4</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo5</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo6</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo7</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo8</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo9</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo1</td>
                <td>Acciones</td>
	</tr>
        
 		<tr>
		<td>Modelo1</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo2</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo3</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo4</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo5</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo6</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo7</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo8</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo9</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo1</td>
                <td>Acciones</td>
	</tr>	
        <tr>
		<td>Modelo1</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo2</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo3</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo4</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo5</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo6</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo7</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo8</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo9</td>
                <td>Acciones</td>
	</tr>
        
 	<tr>
		<td>Modelo1</td>
                <td>Acciones</td>
	</tr>
        
        

	
  
    <tbody>
</table>

<!--		Start Pagination -->
			<div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>
      <div class="rows_count">Showing 11 to 20 of 91 entries</div>

</div> <!-- 		End of Container -->



<!--  Developed By Yasser Mas -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script  src="../../assets/js/scriptdatatable.js"></script>



</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="../../assets/js/script.js"></script>

</body>
</html>
