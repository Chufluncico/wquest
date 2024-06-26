<!-- recibe el array con las cartas a mostrar -->
<?php $deck = $_GET["deck"] ?>
<?php $arrayCards = buildArrayCards($_GET["deck"], $_GET["uniqueKey"], $_GET["uniqueVal"]); ?>


<?php include("components/header-deck.php"); ?>

<div class="container-fluid">
	<div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-3">

		<?php foreach($arrayCards as $carta) { ?>
		<div class="col">
			<div class="card border-0">
				<div class="card-bodyy d-flex justify-content-center p-0 font-minion">
					<?php include("includes/carta-$deck.php"); ?>
				</div>
				<div class="card-footerr d-flex justify-content-center">
					<button type="button" id="boton" class="btn btn-sm btn-primary mt-2 boton-carta" value="<?php echo $carta["Id"]; ?>">Descargar carta</button>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>
</div>

