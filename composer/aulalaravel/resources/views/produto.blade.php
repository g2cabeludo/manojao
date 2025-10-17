@extends('layouts.app')

@section('conteudo')
    <h1>Produtos</h1>
@endsection

<div>
    <h1>{{ $titulo }}</h1>

    @if(count($produto) > 0)
    <ul>
         @foreach($produto as $produt0)
             <li>{{ $produt0 }}</li>
        @endforeach
    </ul>

    @else    
        <p>Nenhum produto cadastrado.</p>
    @endif
</div>
