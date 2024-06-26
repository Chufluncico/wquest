<div class="d-flex flex-columnn flex-md-roww align-items-centerr pb-3 mx-4 mb-5 border-bottom">
    <a href="<?php echo linkExcel($_GET["deck"]); ?>" class="d-flex align-items-center link-body-emphasis text-decoration-none me-3" target="_blank">
        <span class="material-symbols-outlined fs-1" style="color: green;">
		export_notes
		</span>
    </a>
    <span class="fs-4 d-inline-flex align-items-center" style="text-transform: capitalize;"><?php echo $_GET["deck"]; ?> - <?php echo $_GET["uniqueVal"]; ?></span>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-sm-auto">
        <div class="form-check form-switch py-2 d-none">
			<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
			<label class="form-check-label small" for="flexSwitchCheckChecked">Ver Sangre</label>
		</div>
    </nav>
</div>