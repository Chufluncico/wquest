<div id="carta<?php echo $carta["Id"]; ?>" class="carta-lugar" style="width:<?php echo $sizeCardBig["ancho"]; ?>px;height:<?php echo $sizeCardBig["alto"]; ?>px">

	<?php include("components/sangre-v.php"); ?>
	
	<img class="img-fondo" src="img/lugares/bg-lugar.png">
	<img class="img-lugar" src="<?php imagenLugar($carta); ?>">

	<div class="titulo-lugar text-nowrap text-center font-celestia-sb"><?php echo $carta["Titulo"]; ?></div>

	<div class="grupo-lugar text-center text-nowrap font-casablanca"><?php echo $carta["Grupo"]; ?></div>

	<div class="nivel-lugar text-center text-nowrap font-casablanca"><?php echo $carta["Nivel"]; ?></div>

	<div class="texto-lugar">
		<?php buscaFlavor($carta); ?>
		<ul class="text-centerr">
			<?php buscaTexto($carta); ?>
		</ul>

	</div>

	<div class="enemigos-luz text-nowrap text-center font-ardagh"><?php echo $carta["Enemigos-luz"]; ?></div>
	<div class="enemigos-luz-stroke text-nowrap text-center font-ardagh"><?php echo $carta["Enemigos-luz"]; ?></div>

	<div class="enemigos-sombra text-nowrap text-center font-ardagh"><?php echo $carta["Enemigos-sombra"]; ?></div>
	<div class="enemigos-sombra-stroke text-nowrap text-center font-ardagh"><?php echo $carta["Enemigos-sombra"]; ?></div>

	<div class="exploracion-lugar text-nowrap text-center font-ardagh"><?php echo $carta["Exploracion"]; ?></div>
	<div class="exploracion-lugar-stroke text-nowrap text-center font-ardagh"><?php echo $carta["Exploracion"]; ?></div>

	
</div>


<script type="module">
	textFit(document.getElementsByClassName('texto-lugar'), {maxFontSize: 34, });
	textFit(document.getElementsByClassName('grupo-lugar'), {maxFontSize: 32, multiLine: false});
	textFit(document.getElementsByClassName('titulo-lugar'), {maxFontSize: 52, multiLine: false});
</script>