@extends('layouts.appPainel')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5">
            <div class="jumbotron  border rounded border-success">
                    <center><div class="logoRegister mb-4">
                            <a href="index.html">
                                <img class="logoRegister mb-3" src="img/logologin.png" alt>
                            </a>
                        <div></center>
                <form action="{{ route('produto.cadastrar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <h1 class="mb-4">Cadastro de Produtos</h1>
                    <div class="form-group">
                        <label for="nomeProduto">Nome do produto</label>
                        <input type="text" class="form-control" id="nomeProduto" name="nome"
                            placeholder="Nome do produto" required>
                    </div>
                    <div class="form-group">
                        <label for="descricaoProduto">Descrição do Produto</label>
                        <textarea class="form-control" id="descricaoProduto" name="descricao"
                            rows="3" required placeholder="Descrição do produto"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="precoProduto">Preço do produto</label>
                        <input type="number" step="0.01" class="form-control" id="precoProduto" name="preco"
                            placeholder="Preço" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidadeProduto">Quantidade em estoque</label>
                        <input type="number" class="form-control" id="quantidadeProduto" name="quantidade_estoque"
                            placeholder="Quantidade em estoque" required>
                    </div>
                    <div class="form-group">
                        <label for="categoriaProduto">Categoria do Produto</label>
                        <select class="custom-select" id="categoriaProduto" name="categorias_id"
                            aria-label="Example select with button addon" required>
                            <option selected disabled>Selecione</option>
                            <option value="1">Categoria 1</option>
                            <option value="2">Categoria 2</option>
                            <option value="3">Categoria 3</option>
                        </select>
                    </div>
                    <div class="form-group mb-5">
                        <label for="imagemProduto">Imagem do produto</label>
                        <input type="file" class="form-control-file" id="imagemProduto" name="imagem" required>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right widthHeightBtn">CADASTRAR PRODUTOS</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
