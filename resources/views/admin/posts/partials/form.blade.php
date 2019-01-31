{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('category_id', 'Categorias')}}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('name', 'Nombre de la categoria') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL Amigable')}}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
    {{ Form::label('file', 'Imagen')}}
    {{ Form::file('file'), ['id' => 'file']}}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado: ')}}
    <label for="">
    {{ Form::radio('status', 'PUBLISHED')}}Publicado
    </label>
    <label for="">
    {{ Form::radio('status', 'DRAFT', true)}}Borrador
    </label>
</div>
<div class="form-group">
    {{Form::label('tags', 'Etiquetas')}}
    <div>
        @foreach($tags as $tag)
        <label for="">
            {{ Form::checkbox('tags[]', $tag->id) }}{{ $tag->name }}
        </label>
        @endforeach
    </div>
</div>
<div class="form-group">
    {{ Form::label('excerpt', 'Extracto')}}
    {{ Form::text('excerpt', null, ['class' => 'form-control', 'rows' => '2', 'id' => 'excerpt']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Contenido')}}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
@section('scripts')
<script scr="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script scr="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>   
<script type="text/javascript">
    $(document).ready( function() {
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });
        CKEDITOR.config.height  =   400;
        CKEDITOR.config.width   =   'auto';
        CKEDITOR.replace('body');
    });

    
</script>
@endsection