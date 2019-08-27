@extends('layouts.appPainel')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-2">Cadastro de Empresas</h1>
                    <form dataroute="{{ route('produto.cadastrar') }}" method="post" id="formProdutos"
                        class="user-info-setting-form" enctype="multipart/form-data">
                        @csrf
                        <div class="md-form mt-5">
                            <input type="text" name="nome" id="nome" class="form-control">
                            <label for="nome" class="font-weight-light">Nome do Produto</label>
                        </div>

                        <div class="md-form mt-5">
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                            <label for="descricao" class="font-weight-light">Descrição do Produto</label>
                        </div>
                        <div class="md-form mt-5">
                            <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
                            <label for="preco" class="font-weight-light">Preço do produto</label>
                        </div>
                        <div class="md-form mt-5">
                            <input type="number" class="form-control" id="quantidade_estoque" name="quantidade_estoque"
                                required>
                            <label for="quantidade_estoque" class="font-weight-light">Quantidade em estoque</label>
                        </div>
                        <div class="md-form mt-5">
                            <select class="custom-select" id="categorias_id" name="categorias_id"
                                aria-label="Example select with button addon" required>
                                <option selected disabled>Selecione</option>
                                <option value="1">Categoria 1</option>
                                <option value="2">Categoria 2</option>
                                <option value="3">Categoria 3</option>
                            </select>
                            <label for="categorias_id" class="font-weight-light">Categoria do Produto</label>
                        </div>
                        <div class="md-form mb-5">
                            <input type="file" class="form-control-file" id="imagem" name="imagem" required>
                            <label for="imagem" class="font-weight-light">Imagem do produto</label>
                        </div>
                        <button type="submit"
                            class="btn btn-success btn-rounded waves-effect waves-light">CADASTRAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
