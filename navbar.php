
<div class="container-fluid flex-wrap px-4">

	<!-- Boton Sidebar Izquierda -->
	<button class="navbar-toggler p-2 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-label="Sidebar navigation">
 		<span class="material-symbols-outlined fs-2">menu</span>
	</button>

	<!-- Brand -->
	<a class="navbar-brand p-0 me-0 me-lg-2" href="index.php" aria-label="Bootstrap">
		<img src="img/brand.svg" alt="AppName" width="32" height="32">
	</a>
	
	<!-- Boton menu derecha -->
   <button class="navbar-toggler d-flex d-lg-none order-3 p-2 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasMainMenu" aria-controls="offcanvasNavbar" aria-label="Menu navigation">
		<span class="material-symbols-outlined fs-2">more_horiz</span>	   
	</button>
	
	<!-- Menu principal -->
	<div class="offcanvas-lg offcanvas-end flex-grow-1" tabindex="-1" id="offCanvasMainMenu" aria-labelledby="offcanvasNavbarRight">
		
		<!-- Off Canvas Derecho Header -->
		<div class="offcanvas-header px-4 pb-0">
			<h5 class="offcanvas-title text-white" id="offcanvasNavbarRight">Steam Card</h5>
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#offCanvasMainMenu" aria-label="Close"></button>
		</div>
		
		<!-- Off Canvas Derecho Body -->		
		<div class="offcanvas-body p-4 pt-0 p-lg-0">
			<hr class="d-lg-none">
			<!-- Menu principal izquierda -->
	  		<ul class="navbar-nav justify-content-end flex-row flex-wrap pe-3">
	    		<li class="nav-item col-6 col-lg-auto"><a class="nav-link" aria-current="page" href="index.php">Inicio</a></li>
			   <li class="nav-item col-6 col-lg-auto"><a class="nav-link" href="index.php?page=docs">Documentación</a></li>
	  		</ul>
			<hr class="d-lg-none">
			<!-- Menu principal derecha -->
			<ul class="navbar-nav flex-row flex-wrap ms-md-auto">
				<li class="nav-item col-6 col-lg-auto">
        		<a class="nav-link px-lg-2 d-lg-flex text-nowrap" href="https://boardgamegeek.com/boardgame/181521/warhammer-quest-adventure-card-game" target="_blank">
          			<span class="material-symbols-outlined">quick_reference</span>
          			<small class="d-lg-none ms-2">Ficha BGG</small>
        		</a>
      		</li>
				<li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
				   <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
				</li>
				
			</ul>
		</div>

	</div><!-- Menu principal -->

</div><!-- Container fluid -->
