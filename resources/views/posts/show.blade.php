@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Postagem #{{ $post->id }}</div>

                <div class="panel-body">
                    <p><b>Usuário: </b> {{ $post->user_id }}</p>
                    <p><b>Título: </b> {{ $post->title }}</p>
                    <p><b>Conteúdo: </b> {{ $post->body }}</p>
                    <p><b>Criado em: </b> {{ $post->created_at }}</p>
                    <p><b>Atualizado em: </b> {{ $post->updated_at }}</p>
                    <form method="post" action="/posts/{{ $post->id }}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <p>
                            <button type="submit" class="btn btn-default">Excluir</button>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection