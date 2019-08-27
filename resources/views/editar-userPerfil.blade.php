@extends('layouts.app')

@section('content')
<?php
$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Perfil Usuário";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);
?>


<div class="container mt-5">
    <h1>Editar Perfil</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <img src="{{asset('//placehold.it/100')}}" class="avatar img-circle" alt="avatar">
                <h6>trocar foto...</h6>
                <input type="file" class="form-control">
            </div>
        </div>
        <div class="col-md-9 personal-info">
            <h3>Informações Pessoais</h3>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nome:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Sobrenome:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Senha:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirmar senha:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="button" class="btn btn-primary" value="Salvar">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancelar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>

@endsection
