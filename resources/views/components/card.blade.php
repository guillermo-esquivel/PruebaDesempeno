<div class="col-lg-3 text-center mb-4">

    <div 
        style="cursor:pointer"
        data-bs-toggle="modal"
        data-bs-target="#modal{{ Str::slug($nombre) }}"
    >

        <img 
            src="{{ asset($imagen) }}" 
            alt="{{ $nombre }}"
            class="card-img"
            width="200"
            height="200"
        >

        <h4>{{ $nombre }}</h4>

        <p class="precio">$ {{ $precio }}</p>

    </div>

</div>

<div class="modal fade" id="modal{{ Str::slug($nombre) }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">{{ $nombre }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">

                <img 
                    src="{{ asset($imagen) }}" 
                    class="img-fluid mb-3"
                >

                <p><strong>Precio:</strong> $ {{ $precio }}</p>

                
                <p>{{ $descripcion }}</p>

            </div>

        </div>
    </div>
</div>