@extends('layouts.admin')

@section('content')

    <section class="mg-pegawai-item" id="mg-pegawai-item">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h1 class="pb-5">Management Users</h1>
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
                            @foreach ($p as $users)

                            <tr class="table-td-content">
                                <td scope="row">{{ $users->id }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->username }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->roles }}</td>
                                
                                <td>
                                    <a href="/mgpegawai-edit/{{ $users->id }}" role="button" class="btn btn-primary"><i class="bi bi-pencil"></i>Edit</a>

                                    <button class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button> 
                                </td>
                            </tr>
                                
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                    <div class="add-pegawai">
                        {{-- <button class="btn btn-primary btn-lg"><i class="bi bi-plus"></i> Tambah Pegawai</button> --}}
                        <a href="/mgpegawai-add" role="button" class="btn btn-lg btn-primary"><i class="bi bi-plus"></i> Tambah Users</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
