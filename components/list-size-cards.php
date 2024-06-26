<div class="d-flex pb-5 align-items-center justify-content-center">

	<div class="list-group">

		<label class="list-group-item d-flexx gap-3 bg-body-tertiary">
			<h4 class="d-block">Listado de los tamaños de las cartas</h4>
			<p class="d-block">Las medidas en pixeles añaden 3mm de sangre.</p>
	    </label>

	    <?php foreach($formatoCartas as $formato) { ?>

	    <label class="list-group-item d-flex gap-3">
			<span class="material-symbols-outlined fs-2">playing_cards</span>      
			<span class="">
	    		<strong><?php echo $formato["name"]; ?></strong>
	    		<small class="d-block text-body-secondary">Medidas en mm: <strong><?php echo $formato["w-mm"]; ?> x <?php echo $formato["h-mm"]; ?></strong></small>
	    		<small class="d-block text-body-secondary">Medidas en px (300dpi): <strong><?php echo $formato["w-px"]; ?> x <?php echo $formato["h-px"]; ?></strong></small>
	  		</span>
	    </label>

	    <?php } ?>
	    
	</div>

</div>