@extends('layouts.admin')

@section('content')

    <section class="mg-product-item" id="mg-product-item">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h1 class="pb-5">Management Product</h1>
                    <br>
                    <div class="row justify-content-around text-center">
                        <div class="col-sm-3">
                            <div class="card">
                                <img width="100%" src="https://i.redd.it/wao27j4k49961.jpg" class="img-fluid card-img-top" alt="Hu-Tao">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="/mgproduct-detail" class="btn btn-primary">Detail Product</a>
                                </div>
                              </div>
                              
                            
                        </div>
                    </div>
                   <div class="add-product">
                        <button class="btn btn-primary btn-lg"><i class="bi bi-plus"></i> Tambah product</button>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
