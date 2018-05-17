<table class="table table-responsive" id="hotels-table">
    <thead>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Costo</th>
        <th>Estrellas</th>
        <th>Imagen</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($hotels as $hotel)
        <tr>
            <td>{!! $hotel->nombre !!}</td>
            <td>{!! $hotel->ciudad !!}</td>
            <td>{!! $hotel->costo !!}</td>
            <td>{!! $hotel->estrellas !!}</td>
            <td><img alt="Foto Hotel" src="data:image/jpg;base64,{{chunk_split(base64_encode($hotel->imagen))}}"/></td>
            <td>
                {!! Form::open(['route' => ['hotels.destroy', $hotel->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hotels.show', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hotels.edit', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>