@extends('layouts.app')

@section('content')
<main class="container">
    <div class="mb-4">
        <h5>Portada de Libro</h5>
        <form action="{{ route('subirFoto') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Agrega una descripción">
            </div>
            <div class="col-md-6">
                <label for="foto" class="form-label">Portada de libro</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Subir</button>
            </div>
        </form>
    </div>

    <div class="row">
        @foreach($fotos as $foto)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/foto/{{$foto->ruta}}" class="card-img-top img-fluid" style="max-height: 300px; object-fit: cover;" alt="Portada del libro">
                    <div class="card-body">
                        <p class="card-text">{{$foto->descripcion}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{$foto->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
