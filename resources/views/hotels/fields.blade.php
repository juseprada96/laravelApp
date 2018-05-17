<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo', 'Costo:') !!}
    {!! Form::text('costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Estrellas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estrellas', 'Estrellas:') !!}
    {!! Form::select('estrellas', [1,2,3,4,5], null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::file('imagen') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hotels.index') !!}" class="btn btn-default">Cancel</a>
</div>
