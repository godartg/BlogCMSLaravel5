@section('scripts')

@endsection
<div class="form-group">
    {{ Form::label('name', 'Nombre de la categoria') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Contenido')}}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
