@extends('layout.site')
@section('titulo', 'Agro')



@section('conteudo')



<div class="container">


<h3 class="center">Entrar</h3>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="red-text">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
<form action="{{route('site.login.entrar')}}" method="post" >
{{ csrf_field() }}

<div class="input-field">
<span>Entrar</span>
<input type="text" name="email" value="{{old('email')}}">
</div>

<div class="input-field">
<span>Senha</span>
<input type="password" name="senha" value="{{old('senha')}}">
</div>

<br><br>
<button class="btn deep-orange">Entrar</button>
</form>
</div>
</div>

 
@endsection