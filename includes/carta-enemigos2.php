<div id="carta<?php echo $carta["Id"]; ?>" class="carta-enemigo" style="width:<?php echo $sizeCardBig["ancho"]; ?>px;height:<?php echo $sizeCardBig["alto"]; ?>px">

	<?php include("components/sangre-v.php"); ?>
	
	<img class="img-fondo" src="img/enemigos/<?php fondoEnemigo($carta); ?>.png">
	<img class="img-enemigo" src="<?php imagenEnemigo($carta); ?>">

	<div class="titulo-enemigo text-nowrap text-center font-celestia-sb"><?php echo $carta["Titulo"]; ?></div>

	<div class="subtitulo-enemigo text-center text-nowrap font-casablanca"><?php subtituloEnemigo($carta); ?></div>

	<div class="nivel-enemigo text-center text-nowrap font-caslon"><?php echo $carta["Nivel"]; ?></div>

	<div class="daño-enemigo text-nowrap text-center font-ardagh"><?php echo $carta["Ataque"]; ?></div>
	<div class="daño-enemigo-stroke text-nowrap text-center font-ardagh"><?php echo $carta["Ataque"]; ?></div>

	<div class="resistencia-enemigo text-nowrap text-center font-ardagh"><?php echo $carta["Resistencia"]; ?></div>
	<div class="resistencia-enemigo-stroke text-nowrap text-center font-ardagh"><?php echo $carta["Resistencia"]; ?></div>

	<div class="vida-enemigo text-nowrap text-center font-ardagh"><?php echo $carta["Vida"]; ?></div>
	<div class="vida-enemigo-stroke text-nowrap text-center font-ardagh"><?php echo $carta["Vida"]; ?></div>

	<div class="container overflow-hiddenn text-center acciones-enemigo font-domisc text-uppercasee">
		<div class="row gxx-5 align-items-centerr">
			<?php listaAccionesEnemigos($carta); ?>
		</div>
	</div>

	<div class="texto-enemigo<?php esNemesis($carta) ?> text-center font-crimson">
		<ul class="text-center">
			<?php buscaEfectos($carta) ?>
			<?php buscaAccionesEnemigo($carta) ?>
		</ul>
		<?php buscaFlavor($carta) ?>
	</div>
	<div class="accion-nemesis d-inline-blockk align-middle">
		<?php buscaAccionNemesis($carta) ?>
	</div>
	
</div>


<script type="module">
	//textFit(document.getElementsByClassName('vida-enemigo'), {maxFontSize: 100, multiLine: false});
	//textFit(document.getElementsByClassName('vida-enemigo-stroke'), {maxFontSize: 100, multiLine: false});
	//textFit(document.getElementsByClassName('daño-enemigo'), {maxFontSize: 100, multiLine: false});
	//textFit(document.getElementsByClassName('daño-enemigo-stroke'), {maxFontSize: 100, multiLine: false});
	//textFit(document.getElementsByClassName('resistencia-enemigo'), {maxFontSize: 60, multiLine: false});
	//textFit(document.getElementsByClassName('resistencia-enemigo-stroke'), {maxFontSize: 60, multiLine: false});
	textFit(document.getElementsByClassName('item-accion-enemigo'), {maxFontSize: 40, multiLine: false});
	textFit(document.getElementsByClassName('accion-nemesis'), {maxFontSize: 34, multiLine: true});
	textFit(document.getElementsByClassName('subtitulo-enemigo'), {maxFontSize: 28, multiLine: false});
	textFit(document.getElementsByClassName('titulo-enemigo'), {maxFontSize: 52, });
	textFit(document.getElementsByClassName('texto-enemigo'), {maxFontSize: 34, });
	textFit(document.getElementsByClassName('texto-enemigo-nemesis'), {maxFontSize: 34, });
</script>