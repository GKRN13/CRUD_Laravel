@extends('layouts.app')

@section('template_title')
    {{ $foto->name ?? 'Show Foto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Foto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fotos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $foto->Autor }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $foto->Descripción }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $foto->Precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
