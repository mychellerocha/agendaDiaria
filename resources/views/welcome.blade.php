@extends('layouts.main')

@section('title', 'Agenda Diária')

@section('content')

<div class="container page-todo bootstrap snippets bootdeys">
<div class="botao-novo"><a href="tarefa/novatarefa"><button type="submit">Adicionar nova tarefa</button></a></div><br><br><br>
<div class="col-sm-7 tasks">
	<div class="task-list">
		<h1>Tarefas</h1>
        @foreach($tarefas as $tarefa)
		<div class="task high">
			<div class="desc">
				<div class="title">{{$tarefa->nome}}</div>
				<div>{{$tarefa->descricao}}</div>
			</div>
			<div class="time">
				<div class="date">{{$tarefa->data_tarefa}}</div>
                    <a class="botao" href="{{ route('delete', $tarefa->id ) }}">Deletar</a>
                    <a class="botao" href="{{ route('edit', $tarefa->id ) }}">Alterar</a>
			</div>
		</div>
        @endforeach
		<div class="clearfix"></div>		
	</div>		
</div>
</div>



<style type="text/css">
body
{
    margin-top:70px;
    background:#eee;
}
</style>

@endsection