@extends('layouts.admin')

@section('content')

    <section class="mg-product-detail-item" id="mg-product-detail-item">
        <div class="container">
            <h1 class="mt-5 mb-5 text-center">Edit Product</h1>
            <div class="row justify-content-around">

                <div class="col-sm-8">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" value="{{ $p->name }}" id="name"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" value="{{ $p->price }}" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" value="{{ $p->stock }}" id="stock">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL</label>
                            <input type="url" class="form-control" value="{{ $p->image }}" id="image">
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a description here" id="desc"
                                style="height: 100px">{{ $p->description }}</textarea>
                            <label for="desc">Description</label>
                        </div>

                        <div class="mb-4 mt-4">
                            <label for="exampleInputEmail1" class="form-label">Category</label>

                            <select class="form-select" aria-label="Default select example">

                                @foreach ($c as $cate)
                                    <option {{ $cate->id==$p->category?'selected':'' }} value="{{ $cate->id }}">{{ $cate->name }}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Brand</label>

                            <select class="form-select" aria-label="Default select example">

                                @foreach ($b as $brand)
                                    <option {{ $brand->id==$p->brand?'selected':'' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="table-detail-product-item">
                            <h2 class="mt-5">Spesifikasi</h2>
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th scope="col">CPU</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->cpu }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">RAM</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->ram }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Storage</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->storage }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Graphics</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->graphics }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Display</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->display }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Battery</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->battery_capacity }}"
                                                id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Color</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->color }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Dimensions</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->dimensions }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Weight</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->weight }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Ports</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->ports }}" id="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Connectivity</th>
                                        <th scope="col">
                                            <input type="text" class="form-control" value="{{ $p->connectivity }}"
                                                id="">
                                        </th>
                                    </tr>

                                </thead>
                            </table>
                        </div>
                        <button class="btn btn-lg btn-primary" style="width: 100%;">Submit</button>
                    </form>





                </div>
            </div>
        </div>
    </section>


@endsection
