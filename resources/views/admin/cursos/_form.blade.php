
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="red-text">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<div class="input-field">
<label class="control-label">Título</label>
<input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''. old('titulo')}}">
</div>

<div class="input-field">
<label class="control-label">Descrição</label>
<input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''. old('descricao')}}">
</div>

<div class="input-field">
<label class="control-label">Valor</label>
<input type="text" name="valor" value="{{isset($registro->valor)? $registro->valor : ''. old('valor')}}">
</div>

<div class="file-field input-field">
      <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      </div>
      @if(isset($registro->imagem))
      <div class="input-field">
      <img width="90" src="{{asset($registro->imagem)}}">
      </div>
      @endif
      <div class="input-field">
      <p>
      <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked:checked' : '' }} value="true" />
      <label for="test5">Publicar</label>
    </p>
      </div>
