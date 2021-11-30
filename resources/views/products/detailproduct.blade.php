@extends('layouts.index')

@section('content')

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Tank Top T-Shirt</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="text-black">Tank Top T-Shirt</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt
                        facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores
                        fuga voluptas, distinctio, aperiam, ratione dolore.</p>
                    <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem
                        perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis
                        perspiciatis illum hic magni iste, velit aperiam quis.</p>
                    <p><strong class="text-primary h4">$50.00</strong></p>
                    <div class="mb-1 d-flex">
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

                    </div>
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder=""
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>

                    </div>
                    <p><a href="/cart" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

                </div>
            </div>
        </div>
    </div>

@endsection
