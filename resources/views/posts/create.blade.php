@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nova Postagem</div>

                <div class="panel-body">
                    <form method="post" action="/posts">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Título:</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comentário:</label>
                            <textarea class="form-control" rows="5" id="comment" name="body" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="slug">Url Amigável:</label>
                            <input type="text" class="form-control" id="slug" name="slug" required>
                        </div>
                        <button type="submit" class="btn btn-default">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
