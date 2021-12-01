@extends('layouts.admin')

@section('content')

    <section class="mg-pegawai-item" id="mg-pegawai-item">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h1 class="pb-5">Management Pegawai</h1>
                    <br>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr class="table-td-head">
                                <td scope="col">ID</td>
                                <td scope="col">Name</td>
                                <td scope="col">Username</td>
                                <td scope="col">Email</td>
                                <td scope="col">Roles</td>
                                <td scope="col">Manage</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-td-content">
                                <td scope="row">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>
                                    <button class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</button>
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                                </td>
                            </tr>
                            <tr class="table-td-content">
                                <td scope="row">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>
                                    <button class="btn btn-primary"><i class="bi bi-pencil"></i>Edit</button>
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="add-pegawai">
                        <button class="btn btn-primary btn-lg"><i class="bi bi-plus"></i> Tambah Pegawai</button>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
