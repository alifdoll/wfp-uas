@extends('layouts.admin')

@section('content')

    <section class="mg-product-detail-item" id="mg-product-detail-item">
        <div class="container">
            <div class="row justify-content-evenly">
                <h1 class="text-center mb-5">Nama Product</h1>
                <br>
                <div class="col-sm-4 text-center col-sm-offset-1">
                    <img src="https://i.redd.it/wao27j4k49961.jpg" width="100%" alt="">
                </div>


                <div class="col-sm-4 col-sm-offset-1">
                    <h2>Spesifikasi</h2>

                    <table class="table">
                        <thead>

                            <tr>
                                <th scope="col">CPU</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">RAM</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Storage</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Graphics</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Display</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Battery</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Color</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Dimensions</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Weights</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Ports</th>
                                <th scope="col">aaa</th>
                            </tr>
                            <tr>
                                <th scope="col">Connectivity</th>
                                <th scope="col">aaa</th>
                            </tr>

                        </thead>
                    </table>
                    <div class="caption-button text-center">
                        <button class="btn btn-primary" style="width: 40%;"><i class="bi bi-pencil"></i>Edit</button>
                        <button class="btn btn-danger" style="width: 40%;"><i class="bi bi-trash"></i>Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
