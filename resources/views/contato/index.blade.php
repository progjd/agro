@extends('layout.site')
@section('titulo', 'Agro')

@section('conteudo')
@foreach($contatos as $cont)
  <p>{{$cont->nome}}</p>
  <p>{{$cont->fone}}</p>
  @endforeach
 
@endsection
