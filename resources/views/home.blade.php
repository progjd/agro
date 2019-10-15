@extends('layout.site')
@section('titulo', 'Agro')


@section('conteudo')

<div class="">
<!-- -->
<div class="row">

      <div class="col s12 m4 l2" > <!-- Note that "m4 l3" was added -->
      <div class="card-panel N/A transparent"  >
      <a target="_blank" href="http://www.google.com">
        <img class="circle responsive-img" width="150"src="../../dir/cursos/Imagem2257.png">
        </a>
        </div>
        <div class="video-container ">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
        <div class="collection">
        <a target="_blank" href="http://www.agricultura.gov.br/" class="collection-item">www.agricultura.gov.br</a>
        <a target="_blank" href="https://www.bnb.gov.br" class="collection-item">www.bnb.gov.br</a>
        <a target="_blank" href="http://www.aged.ma.gov.br/" class="collection-item">www.aged.ma.gov.br</a>
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
            <h5 class="center-align ">{{$curso->titulo}}</h5>
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
<blockquote class="center-align">
     <h5 class=" #2e7d32 green-text">Vídeos</h5> 
</blockquote>
     <div class="row">
      <div class="col s6 valign-wrapper">
    
    <div class="row ">   
    <video class="responsive-video card-panel " controls>
    <source src="movie.mp4" type="video/mp4">
  </video>
  </div>
  <div class="row ">   
    <video class="responsive-video card-panel " controls>
    <source src="movie.mp4" type="video/mp4">
  </video>
  </div>




      </div>
      <div class="col s6 valign-wrapper">
     <div class="row ">   
    <video class="responsive-video card-panel " controls>
    <source src="movie.mp4" type="video/mp4">
  </video>
  </div>
    <div class="row">
  <video class="responsive-video card-panel " controls>
    <source src="movie.mp4" type="video/mp4">
  </video>
    </div>
        </div>
  
   </div> 


    </div>
<!-- -->
 
     
    
     
     
@endsection

          