@extends('layout.site')
@section('titulo', 'Agro')

@section('conteudo')
<div class="container">
<h3 class="center">Entrar</h3>
<div class="row">
<form action="{{route('site.login.entrar')}}" method="post" >
{{ csrf_field() }}

<div class="input-field">
<span>Entrar</span>
<input type="text" name="email">
</div>

<div class="input-field">
<span>Senha</span>
<input type="password" name="senha">
</div>

<br><br>
<button class="btn deep-orange">Entrar</button>
</form>
</div>
</div>

 
@endsection