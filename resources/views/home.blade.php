@extends('layout.site')
@section('titulo', 'Agro')


@section('conteudo')

<div class="">
<!-- -->
<div class="row">

      <div class="col s12 m4 l2"> <!-- Note that "m4 l3" was added -->
      <div class="picture">
      <a href="http://www.google.com">
        <img width="70"src="../../dir/cursos/Imagem2257.png">
        </a>
        </div>
        <div class="collection">
        <a href="http://www.agricultura.gov.br/" class="collection-item">Agricultura</a>
        <a href="#!" class="collection-item">Alvin</a>
        <a href="#!" class="collection-item">Alvin</a>
      </div>
      </div>

      <div class="col s12 m8 l10"> <!-- Note that "m8 l9" was added -->
         <div class="row">     
      @foreach($cursos as $curso)
    
       <div class="col s12 m4">
          <div class="card Medium">
            <div class="card-image ">
            <img  src="{{asset($curso->imagem)}}">
              
            </div>
            <div class="card-content">
            <h3 class="center-align">{{$curso->titulo}}</h3>
              <p>{{$curso->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="#">nada...</a>
            </div>
          </div>
        </div>
        @endforeach
</div>
<div class="row align center" >
{{$cursos->links()}}
</div>

      </div>

    </div>
<!-- -->
 
     
    
     
     
@endsection

          