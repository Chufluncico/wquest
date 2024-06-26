<div id="carta<?php echo $carta["Id"]; ?>" class="carta-mazmorra" style="width:<?php echo $sizeCardSmall["ancho"]; ?>px;height:<?php echo $sizeCardSmall["alto"]; ?>px">

	<?php include("components/sangre-small-v.php"); ?>

	<img class="img-fondo" src="<?php imagenFondoMazmorra($carta); ?>">

	<div class="tipo-mazmorra text-nowrap text-center font-celestia-sc"><?php echo $carta["Tipo"]; ?></div>

	<div class="titulo-mazmorra text-nowrap text-center font-celestia-sb"><?php echo $carta["Titulo"]; ?></div>

	<div class="texto-mazmorra text-center">
		<?php buscaFlavor($carta); ?>
		<ul>
			<?php buscaTexto($carta); ?>
		</ul>
	</div>

	
</div>


<script type="module">
	textFit(document.getElementsByClassName('titulo-mazmorra'), {maxFontSize: 44, });
	textFit(document.getElementsByClassName('texto-mazmorra'), {maxFontSize: 32, });
	textFit(document.getElementsByClassName('tipo-mazmorra'), {maxFontSize: 26, multiLine: false});
</script>