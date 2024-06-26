<div id="carta<?php echo $carta["Id"]; ?>" class="carta-heroe" style="width:<?php echo $sizeCardBig["alto"]; ?>px;height:<?php echo $sizeCardBig["ancho"]; ?>px">

	<?php include("components/sangre-h.php"); ?>
	
	<img class="img-fondo" src="<?php imagenFondoHeroe($carta); ?>">
	<?php //imagenHeroe($carta); ?>

	<div class="titulo-heroe text-nowrap text-center font-celestia-sb"><?php echo $carta["Clase"]; ?></div>

	<div class="texto-heroe text-center">
		<ul>
			<?php buscaTexto($carta); ?>
		</ul>
		<?php buscaFlavor($carta); ?>
	</div>

	<div class="vida-heroe text-nowrap text-center font-ardagh"><?php echo $carta["Vida"]; ?></div>
	<div class="vida-heroe-stroke text-nowrap text-center font-ardagh"><?php echo $carta["Vida"]; ?></div>

	
</div>


<script type="module">
	
	textFit(document.getElementsByClassName('titulo-heroe'), {maxFontSize: 52, });
	textFit(document.getElementsByClassName('texto-heroe'), {maxFontSize: 36, });

</script>