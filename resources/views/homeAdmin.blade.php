@extends('layouts.admin')

@section('content')

    <section class="dashboard-item" id="dashboard-item">
        <div class="container">
            <div class="row mb-5 mt-5 justify-content-around text-center">
                <div class="col-sm-6">
                    <h2 class="pb-5">Management Pegawai</h2>
                    <div class="caption-dashboard mt-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores voluptatum distinctio at
                            inventore, blanditiis saepe quod quo, magni, aspernatur doloribus eum. Veniam numquam
                            perferendis assumenda distinctio. Perspiciatis, quibusdam dolorem!</p>
                        <a href="/mgpegawai" role="button" class="btn btn-lg btn-primary">View</a>
                    </div>

                </div>
                <div class="col-sm-6">
                    <h2 class="pb-5">Management Product</h2>
                    <div class="caption-dashboard mt-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores voluptatum distinctio at
                            inventore, blanditiis saepe quod quo, magni, aspernatur doloribus eum. Veniam numquam
                            perferendis assumenda distinctio. Perspiciatis, quibusdam dolorem!</p>
                        <a href="/mgproduct" role="button" class="btn btn-lg btn-primary">View</a>
                    </div>

                </div>
            </div>
        </div>


    </section>



@endsection
