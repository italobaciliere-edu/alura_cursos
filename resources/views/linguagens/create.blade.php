@extends('layout')


@section('cabecalho')
ADICIONAR LINGUAGENS
@endsection()


@section('conteudo')
<form>
    <div class="form-group">
        <label for="nome_linguagem">Nome da Linguagem</label>
        <input type="text" class="form-control" id="nome_linguagem">
        <small id="emailHelp" class="form-text text-muted">We'll never share your response with anyone else.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection()