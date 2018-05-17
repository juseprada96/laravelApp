<table class="table table-responsive" id="comentarios-table">
    <thead>
        <th>Usuario Id</th>
        <th>Hotel Id</th>
        <th>Comentario</th>
        <th>Calificacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($comentarios as $comentario)
        <tr>
            <td>{!! $comentario->usuario !!}</td>
            <td>{!! $comentario->hotel_id !!}</td>
            <td>{!! $comentario->comentario !!}</td>
            <td>{!! $comentario->calificacion !!}</td>
            <td>
                {!! Form::open(['route' => ['comentarios.destroy', $comentario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comentarios.show', [$comentario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comentarios.edit', [$comentario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>