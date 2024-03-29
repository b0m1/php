@extends('layouts.app')

@section('template_title')
    {{ $juego->name ?? 'Show Juego' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Juego</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('juegos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $juego->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $juego->anho }}
                        </div>
                        <div class="form-group">
                            <strong>Plataforma:</strong>
                            {{ $juego->plataforma_id }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $juego->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $juego->estado_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
