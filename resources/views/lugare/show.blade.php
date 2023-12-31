@extends('layouts.plantilla')
@extends('layouts.app')

@section('template_title')
    {{ $lugare->name ?? "{{ __('Show') Lugare" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lugare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugares.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $lugare->lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $lugare->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $lugare->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $lugare->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
