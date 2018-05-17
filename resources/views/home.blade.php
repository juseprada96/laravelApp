@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($hoteles as $hotel)
            <div class="col-md-6">
                <a href="hotels/{!! $hotel->id !!}">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{!! $hotel->nombre !!}</h3>
                    </div>
                    <div class="panel-body">
                        <img class="thumbnail" alt="Foto hotel" src="data:image/jpg;base64,{{chunk_split(base64_encode($hotel->imagen))}}"/>
                        <p>Costo: ${!! $hotel->costo !!}</p>
                        <p>Estrellas: {!! $hotel->estrellas !!}</p>
                        <p>Ciudad:{!! $hotel->ciudad !!}</p>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
