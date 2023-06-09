@extends('layouts.main')
@section('title', 'Eventos')
@section('content')    
    <h1>Ola, mundo</h1>
    <img src="https://img.freepik.com/fotos-premium/palco-vazio-com-equipamento-de-iluminacao-em-um-palco-spotlight-brilha-no-palco-renderizacao-em-3d_39972-797.jpg" alt="" srcset="" />

    @if($nome == "Pedro")
        <p>Seu nome é {{$nome}}</p>
    @else
    <p>Seu nome mão é Matheus, seu nome é {{$nome}}, você tem {{$idade}} anos e trabalha como {{$profissao}}</p>

    @endif @foreach($arr as $value)
        <p>{{ $value }} - teste</p>
    @endforeach 
    @php $name = "kaua"; echo $name; @endphp

@endsection