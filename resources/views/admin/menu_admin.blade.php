<button class="bi-list btn btn-lg ms-4 "
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling"
        aria-controls="offcanvasScrolling">
</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasScrolling"
     aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menú de opciones</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Desde aquí puedes acceder a los administradores de los diferentes componentes que conforman al sistema.</p>

        <div class="d-grid gap-2 mt-5">
            <button class="btn btn-primary" type="button" onclick="location.href = '{{route('escuelas')}}'">Escuelas</button>
            <button class="btn btn-primary" type="button" onclick="">Actividades</button>
            <button class="btn btn-primary" type="button" onclick="location.href = '{{route('profesores')}}'">Profesores</button>
            <button class="btn btn-primary" type="button">Multimedia de la página</button>
        </div>
    </div>
</div>

