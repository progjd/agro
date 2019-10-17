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

  
   
<div id="linha">
  <h5 class="align-text center green-text">Vídeo</h5>
   <hr/>
</div>
<style>


hr{
    border-bottom: 4px solid #1de9b6;
  
  box-sizing:border-box;
  width:99%; 
  border-right: 100px; 
}
</style>
     <div class=" valign-wrapper">
         <div class="col m4">
      <div class="responsive-video">
        <iframe width="400" height="200" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
        </div>


        <div class="divider "></div>
  <div class="section">
      <div class="col offset-s0">
    <div class="responsive-video">
        <iframe width="400" height="200" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      </div>
  </div>



       
    </div>
   

   
<!-- -->
    </div>
<!-- -->




 @endsection

          