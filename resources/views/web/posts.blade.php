@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Lista de artículos</h1>
            @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class=panel-heading>
                    {{ $post->name}}
                    </div>
                </div>
                <div class="panel body">
                    @if($post->file)
                    <img src="{{ $post->file }}" class="img-responsive" alt="imagen">
                    @endif
                    {{ $post->excerpt }}
                    <a href="{{ route('post', $post->slug)}}" class="pull-rigth">Leer más</a>
                </div>
            @endforeach
            {{ $posts->render() }}
        </div>
    </div>
</div>
@endsection