@extends('layout.site')
@section('titulo', 'Agro')

@section('conteudo')
<div class="container">
<h3 class="center">Lista de cursos</h3>
<div class="row">
<table>
<thead>
<tr>
<th>id</th>
<th>Titulo</th>
<th>Descrição</th>
<th>Imagem</th>
<th>Publicado</th>
<th>Ação</th>
</tr>
</thead>
<tbody>
@foreach($registros as $registro)
<tr>
<td>{{$registro->id}}</td>
<td>{{$registro->titulo}}</td>
<td>{{$registro->descricao}}</td>
<td><img width="90" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
<td>{{$registro->publicado}}</td>
<td>
<a class="btn deep-orange" href="{{route('admin.cursos.editar', $registro->id)}}">Editar</a>
<a class="btn red" onclick="confirmacao()" href="" >Delete</a>
<script type="text/javascript">
   
function confirmacao()
{
        if (confirm (" Deseja Deletar ? ")) 
        { 
            window.location.href = "{{route('admin.cursos.deletar', $registro->id)}}";
        } 
        else 
        { 
                return false;
        }
}
</script>
</div>
</div>
</td>
</tr>


@endforeach
</tbody>
</table>

</div>
<div class="row">
<a class="btn deep-blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
</div>

<div class="align center">
{{ $registros->links() }}
</div>
</div>

 
@endsection
