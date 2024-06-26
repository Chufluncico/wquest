<div id="sidebarMenu" class="offcanvas-lg offcanvas-start" tabindex="-1"  aria-labelledby="sidebarMenuLabel">
    
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">WQ Fan Made</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body d-md-flex flex-column">
        <nav class="w-100">
            <ul class="sidebar-nav-links flex-columnn list-unstyled pb-3 mb-0 pb-md-2 pe-lg-2">

                <li class="sidebar-group-links py-2">
                    <strong class="d-flex w-100 align-items-center fw-semibold">
                        <span class="material-symbols-outlined me-2">domino_mask</span>
                        Heroes
                    </strong>
                    <ul class="list-unstyled fw-normal pb-2 small">
                        <?php sidebarUniqueLinks("heroes", "Clase"); ?>
                    </ul>
                </li>

                <li class="sidebar-group-links py-2">
                    <strong class="d-flex w-100 align-items-center fw-semibold">
                        <span class="material-symbols-outlined me-2">swords</span>
                        Acciones de Heroe
                    </strong>
                    <ul class="list-unstyled fw-normal pb-2 small">
                        <?php sidebarUniqueLinks("acciones", "Heroe"); ?>
                    </ul>
                </li>

                <li class="sidebar-group-links py-2">
                    <strong class="d-flex w-100 align-items-center fw-semibold">
                        <span class="material-symbols-outlined me-2">person_alert</span>
                        Enemigos
                    </strong>
                    <ul class="list-unstyled fw-normal pb-2 small">
                        <?php sidebarUniqueLinks("enemigos", "Familia"); ?>
                    </ul>
                </li>

                <li class="sidebar-group-links py-2">
                    <strong class="d-flex w-100 align-items-center fw-semibold">
                        <span class="material-symbols-outlined me-2">location_on</span>
                        Lugares
                    </strong>
                    <ul class="list-unstyled fw-normal pb-2 small">
                        <?php sidebarUniqueLinks("lugares", "Grupo"); ?>
                    </ul>
                </li>

                <li class="sidebar-group-links py-2">
                    <strong class="d-flex w-100 align-items-center fw-semibold">
                        <span class="material-symbols-outlined me-2">tools_power_drill</span>
                        Objetos
                    </strong>
                    <ul class="list-unstyled fw-normal pb-2 small">
                        <?php sidebarUniqueLinks("objetos", "Tipo"); ?>
                    </ul>
                </li>

                <li class="sidebar-group-links py-2">
                    <strong class="d-flex w-100 align-items-center fw-semibold">
                        <span class="material-symbols-outlined me-2">gate</span>
                        Mazmorra
                    </strong>
                    <ul class="list-unstyled fw-normal pb-2 small">
                        <?php sidebarUniqueLinks("mazmorra", "Tipo"); ?>
                    </ul>
                </li>

            </ul>
        </nav>
    </div><!-- Off Canvas Body -->

</div><!-- #sidebarMenu -->
