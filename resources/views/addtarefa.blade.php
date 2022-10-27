@extends('layouts.main')

@section('title', 'Adicionar tarefa')

@section('content')

<div class="container page-todo bootstrap snippets bootdeys">
<div class="botao-voltar"><a href="/"><button type="submit">← Ir para lista de tarefas</button></a></div><br><br><br>
    <div class="col-sm-7 tasks">
	    <div class="task-list">
            <form action="/tarefa" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome" class="bold-p">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>

                <div class="form-group">
                    <label for="data_tarefa" class="bold-p">Data da Tarefa</label>
                    <input type="date" name="data_tarefa" id="data_tarefa" class="form-control" maxlength="8">
                </div>

                <div class="form-group">
                    <label for="descricao" class="bold-p">Descrição da Tarefa</label><br>
                    <input type="text" name="descricao" id="descricao" class="form-control" required>
                </div>

                <div class="text-center"><input type="submit" value="Adicionar tarefa"></div>
                <div class="clearfix"></div>
            </form>		
	    </div>		
    </div>
</div>

<style type="text/css">
body
{
    margin-top:190px;
    background:#eee;
}
</style>

@endsection