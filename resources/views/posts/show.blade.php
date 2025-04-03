@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalhes do Cliente</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Nome:</strong> {{ $post->nome }}
                        </div>

                        @if($post->image)
                            <div class="mb-3">
                                <strong>Imagem:</strong><br>
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->nome }}" class="img-fluid rounded" style="max-width: 300px;">
                            </div>
                        @endif

                        <div class="mb-3">
                            <strong>Email:</strong> {{ $post->email }}
                        </div>

                        <div class="mb-3">
                            <strong>Telefone:</strong> {{ $post->telefone }}
                        </div>


                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection