<!-- Extende todo o código da página layout.blade.php -->
@extends('layout')


<!-- Seção a ser utilzada com o blade -->
@section('cabecalho')
Linguagens
@endsection() 
<!-- Final da seção -->

<!-- Seção a ser utilzada com o blade -->
@section('conteudo')
<a href="/linguagens/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach ($linguagens as $ling)
        <li class="list-group-item"><?= $ling; ?></li>
    @endforeach
</ul>
@endsection
<!-- Final da seção -->



<!-- $html = "<ul>";
    
        foreach($linguagens as $ling){
            $html .= "<li>$ling</li>";
        }
    
        $html .= "</ul>";
    
        return $html; -->
<!--
    Digite "!",
    Depois aperte a tecla "tabe".
-->