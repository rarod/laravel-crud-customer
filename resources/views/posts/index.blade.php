@extends('layouts.app')

@section('content')
    <h1>Todos os Clientes</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->nome }}" width="50" class="rounded-circle mr-2">
                    @endif
                    {{ $post->nome }}
                </td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->telefone }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Detalhes</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Adicionar Cliente</a>
@endsection