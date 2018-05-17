@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hotel
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <h1>{!! $hotel->nombre !!}</h1>
                    <img alt="Foto Hotel" src="data:image/jpg;base64,{{chunk_split(base64_encode($hotel->imagen))}}"/>
                    <p>Costo: {!! $hotel->costo !!}</p>
                    <p>Ciudad: {!! $hotel->ciudad !!}</p>
                    <p>Estrellas: {!! $hotel->estrellas !!}</p>
                    <div class="row">
                        <div class="row container">
                            {!! Form::open(array('route' => 'comentarios.store')) !!}
                            {!! Form::text('hotel_id', $hotel->id, ['hidden'=>'true']) !!}
                            @include('comentarios.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>

                    @foreach($hotel->comentarios as $comentario)
                    <div class="row container">
                        <div class="panel panel-default">
                            <div class="panel-heading"><p>Usuario: {!! $comentario->usuario->name !!}</p></div>
                            <div class="panel-body">
                                <p>Comentario: {!! $comentario->comentario !!}</p>
                                <p>Calificacion: {!! $comentario->calificacion !!}</p>
                            </div>
                        </div>


                    </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
