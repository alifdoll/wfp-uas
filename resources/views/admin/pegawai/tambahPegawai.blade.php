@extends('layouts.admin')

@section('content')

    <section class="mg-pegawai-item" id="mg-pegawai-item">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h1 class="mb-5">Tambah User</h1>
                    <div class="row text-left">
                        <div class="col-sm-6 col-sm-offset-3">
                            <form>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" value="" class="form-control">
                                   
                                </div>


                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" value="">
                                   
                                </div>

                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value=""
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                        else.</div>
                                   
                                </div>

                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" value="" id="exampleInputPassword1">
                                   
                                </div>

                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Roles</label>
                                   
                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>Open this select menu</option>
                                        <option value="administrator">Administrator</option>
                                        <option value="customer">Customer</option>
                                        <option value="pegawai">Pegawai</option>

                                    </select>
                                   
                                </div>
                               
                                <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


@endsection
