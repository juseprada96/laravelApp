@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hotel
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(array('route' => 'hotels.store', 'files' => true)) !!}

                        @include('hotels.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
