<li class="{{ Request::is('hotels*') ? 'active' : '' }}">
    <a href="{!! route('hotels.index') !!}"><i class="fa fa-edit"></i><span>Hotels</span></a>
</li>

<li class="{{ Request::is('comentarios*') ? 'active' : '' }}">
    <a href="{!! route('comentarios.index') !!}"><i class="fa fa-edit"></i><span>Comentarios</span></a>
</li>

<li class="{{ Request::is('tests*') ? 'active' : '' }}">
    <a href="{!! route('tests.index') !!}"><i class="fa fa-edit"></i><span>Tests</span></a>
</li>

