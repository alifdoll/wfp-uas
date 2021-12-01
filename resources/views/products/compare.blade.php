@extends('layouts.index')

@section('ajax')
    <script>
        function showProduct(productId) {
            $.ajax({
                type: 'POST',
                url: '{{ route('product.compare') }}',
                data: {
                    _token = {{ csrf_token() }},
                    id = productId,


                },
                success: function(data) {
                    $('#tes').html(data.msg);
                    console.log(data);
                },
            });
            // console.log(productId);
        }

        function testing()
        {
            console.log('tes');
        }
    </script>

@endsection

@section('content')

    <div class="mt-5 mb-5 text-center">
        <h1>Compare Device</h1>
    </div>

    <section class="item-compare" id="item-compare">
        <div class="container">
            <div class="choose-compare mt-3 mb-3">
                <div class="row text-center justify-content-around">
                    <div class="col-sm-4">
                        <div class="choose-item">
                            <select class="form-select" aria-label="Default select example">

                                <option selected>Open this select menu</option>
                                @foreach ($product1 as $p1)
                                    <option value="{{ $p1->id }}">{{ $p1->name }}</option>
                                @endforeach

                            </select>
                            <div class="mt-3 mb-5">
                                <button type="button" class="btn btn-outline-primary btn-lg" style="width: 100%;" onclick="showProduct(1)">Primary</button>
                            </div>
                            

                            <img src="https://i.redd.it/wao27j4k49961.jpg" alt="" class="img-fluid">
                            <div class="choose-caption mt-3 mb-3">
                                <h3>Nama</h3>
                                <h4>Price</h4>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-4">
                        <div class="choose-item">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($product2 as $p2)
                                    <option value="{{ $p2->id }}">{{ $p2->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 mb-5">
                                <button type="button" class="btn btn-outline-primary btn-lg" style="width: 100%;" onclick="testing()">Primary</button>
                            </div>
                            <img src="https://i.redd.it/wao27j4k49961.jpg" alt="" class="img-fluid">
                            <div class="choose-caption mt-3 mb-3">
                                <h3>Nama</h3>
                                <h4>Price</h4>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="result-compare mt-5 mb-3">
                <div class="row text-center justify-content-center">
                    <div class="col-sm-8">
                        <h1 class="mb-3" id="tes">SPECIFICATION</h1>
                        <div class="row justify-content-around text-center">
                            <div class="col-sm-5">
                                <div class="table-compare">
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

                            </div>
                            <div class="col-sm-5">
                                <div class="table-compare">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
