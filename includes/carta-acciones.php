<div id="carta<?php echo $carta["Id"]; ?>" class="carta-accion" style="width:<?php echo $sizeCardBig["ancho"]; ?>px;height:<?php echo $sizeCardBig["alto"]; ?>px">

	<?php include("components/sangre-v.php"); ?>

	<img class="img-fondo-top" src="<?php imagenFondoAccionTop($carta); ?>">
	<img class="img-fondo-bottom" src="<?php imagenFondoAccionBottom($carta); ?>">
	<img class="img-accion" src="<?php imagenAccion($carta); ?>">

	<div class="titulo-accion text-nowrap text-center font-celestia-sb"><?php echo $carta["Titulo"]; ?></div>

	<span class="texto-tipo-accion text-center font-casablanca"><?php echo $carta["Tipo"]; ?></span>
	
	<div class="texto-accion">
		<ul>
			<?php buscaAcciones($carta) ?>
		</ul>
		<?php buscaFlavor($carta) ?>	
	</div>

	<span class="img-prepararr"><?php buscaPreparar($carta); ?></span>


	<span class="nivel-accion text-center m-0 font-casablanca"><?php echo $carta["Heroe"]; ?> - <?php echo $carta["Nivel"]; ?></span>
	
</div>


<script type="module">
	textFit(document.getElementsByClassName('texto-accion'), {maxFontSize: 34, });
	textFit(document.getElementsByClassName('texto-tipo-accion'), {maxFontSize: 30, multiLine: false});
	textFit(document.getElementsByClassName('titulo-accion'), {maxFontSize: 52, });
	textFit(document.getElementsByClassName('nivel-accion'), {maxFontSize: 34, multiLine: false});
</script>