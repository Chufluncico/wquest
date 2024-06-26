<div id="carta<?php echo $carta["Id"]; ?>" class="carta-objeto<?php objetoBasico($carta); ?>" style="width:<?php echo $sizeCardSmall["alto"]; ?>px;height:<?php echo $sizeCardSmall["ancho"]; ?>px">

	<?php include("components/sangre-small-h.php"); ?>

	<img class="img-fondo" src="<?php imagenFondoObjeto($carta); ?>">

	<div class="tipo-objeto text-nowrap text-center font-casablanca"><?php echo $carta["Tipo"]; ?> - <?php echo $carta["Subtipo"]; ?></div>


	<div class="titulo-objeto text-nowrap text-center font-celestia-sb"><?php echo $carta["Titulo"]; ?></div>

	<div class="subtitulo-objeto text-nowrap text-center font-casablanca"><?php echo $carta["Subtitulo"]; ?></div>

	<div class="texto-objeto">
		<ul>
			<?php buscaTexto($carta); ?>
		</ul>
		<?php buscaFlavor($carta); ?>	
	</div>

	
</div>


<script type="module">
	textFit(document.getElementsByClassName('titulo-objeto'), {maxFontSize: 52, });
	textFit(document.getElementsByClassName('subtitulo-objeto'), {maxFontSize: 32, multiLine: false});
	textFit(document.getElementsByClassName('texto-objeto'), {maxFontSize: 36, });
	textFit(document.getElementsByClassName('tipo-objeto'), {maxFontSize: 34, multiLine: false});
</script>