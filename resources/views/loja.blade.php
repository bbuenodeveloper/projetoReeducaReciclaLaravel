@extends('layoutsloja.app')

@section('content')

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Loja</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-9 order-2">

                
                <div class="row mb-5">

                    <div class="col-sm-6 col-lg-4 mb-4 mt-5" data-aos="fade-up">
                        <div class="card text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.html"><img src="img/produtos_loja/Produto_1.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class=" p-4">
                                <h3><a href="shop-single.html" class="lojaProdutos">Produto 1</a></h3>
                                <p class="precoLoja font-weight-bold">R$0,00</p>
                                <button type="button" class="btn btn-success">VER PRODUTO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4 mt-5" data-aos="fade-up">
                        <div class="card text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.html"><img src="img/produtos_loja/Produto_1.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class=" p-4">
                                <h3><a href="shop-single.html" class="lojaProdutos">Produto 1</a></h3>
                                <p class="precoLoja font-weight-bold">R$0,00</p>
                                <button type="button" class="btn btn-success">VER PRODUTO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4 mt-5" data-aos="fade-up">
                        <div class="card text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.html"><img src="img/produtos_loja/Produto_1.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class=" p-4">
                                <h3><a href="shop-single.html" class="lojaProdutos">Produto 1</a></h3>
                                <p class="precoLoja font-weight-bold">R$0,00</p>
                                <a class="btn btn-success" href="/internaProduto">VER PRODUTO</button>
                            </div>
                        </div>
                    </div>
                    
                    


                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 order-1 mb-5 mb-md-0">
                <div class="border p-4 rounded mb-4 mt-5">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">CATEGORIAS</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><a href="#" class="d-flex"><span>Categoria 1</span> <span
                                    class="text-black ml-auto">(5)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Categoria 2</span> <span
                                    class="text-black ml-auto">(5)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Categoria 3</span> <span
                                    class="text-black ml-auto">(5)</span></a></li>
                    </ul>
                </div>





            </div>
        </div>
    </div>



</div>
</div>


@endsection
