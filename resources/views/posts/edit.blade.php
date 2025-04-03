@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $post->nome }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $post->email }}" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" value="{{ $post->telefone }}">
        </div>
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" name="image" class="form-control">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->nome }}" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
    </form>
@endsection