@extends('layouts.admin')
@section('header')
    <h3 class="page-title">
        Home <small>Main Menu</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>


        </ul>

    </div>
@endsection

@section('content')

    <section class="dashboard-item" id="dashboard-item">
        <div class="container">
            <div class="row mb-5 mt-5 justify-content-around text-center">
                @if (Auth::user()->suspend == 'suspend')
                <div class="alert alert-danger">
                    <h3>Mohon maaf, akun ada saat ini sedang tersuspend. Harap menghubungi administrator.</h3>
                </div>
                
                @endif
                @if (Auth::user()->suspend == 'unsuspend')
                    @if (Auth::user()->roles == 'administrator')
                        <div class="col-sm-4">
                            <h2 class="pb-5">Management Pegawai</h2>
                            <div class="caption-dashboard mt-5">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores voluptatum
                                    distinctio at
                                    inventore, blanditiis saepe quod quo, magni, aspernatur doloribus eum. Veniam numquam
                                    perferendis assumenda distinctio. Perspiciatis, quibusdam dolorem!</p>
                                <a href="/mgpegawai" role="button" class="btn btn-lg btn-primary">View</a>
                            </div>
                        </div>
                    @endif


                    <div class="col-sm-4">
                        <h2 class="pb-5">Management Product</h2>
                        <div class="caption-dashboard mt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores voluptatum
                                distinctio at
                                inventore, blanditiis saepe quod quo, magni, aspernatur doloribus eum. Veniam numquam
                                perferendis assumenda distinctio. Perspiciatis, quibusdam dolorem!</p>
                            <a href="/mgproduct" role="button" class="btn btn-lg btn-primary">View</a>
                        </div>

                    </div>


                    <div class="col-sm-4">
                        <h2 class="pb-5">Management Transaction</h2>
                        <div class="caption-dashboard mt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores voluptatum distinctio
                                at
                                inventore, blanditiis saepe quod quo, magni, aspernatur doloribus eum. Veniam numquam
                                perferendis assumenda distinctio. Perspiciatis, quibusdam dolorem!</p>
                            <a href="/mgorder" role="button" class="btn btn-lg btn-primary">View</a>
                        </div>

                    </div>

                    <div class="row mb-5 mt-5 justify-content-around text-center">
                        <div class="col-sm-4">
                            <h2 class="pb-5">Management Category</h2>
                            <div class="caption-dashboard mt-5">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores voluptatum
                                    distinctio
                                    at
                                    inventore, blanditiis saepe quod quo, magni, aspernatur doloribus eum. Veniam
                                    numquam
                                    perferendis assumenda distinctio. Perspiciatis, quibusdam dolorem!</p>
                                <a href="/mgcate" role="button" class="btn btn-lg btn-primary">View</a>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <h2 class="pb-5">Management Brand</h2>
                            <div class="caption-dashboard mt-5">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores voluptatum
                                    distinctio
                                    at
                                    inventore, blanditiis saepe quod quo, magni, aspernatur doloribus eum. Veniam
                                    numquam
                                    perferendis assumenda distinctio. Perspiciatis, quibusdam dolorem!</p>
                                <a href="/mgbrand" role="button" class="btn btn-lg btn-primary">View</a>
                            </div>

                        </div>

                @endif
            </div>
        </div>
        </div>


    </section>



@endsection
