@extends('layouts.admin') @section('header')
<h3 class="page-title">Transactions <small>List Transactions</small></h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">List Transactions</a>
            <i class="fa fa-angle-right"></i>
        </li>
    </ul>
</div>
@endsection @section('content')

<section class="mg-pegawai-item" id="mg-pegawai-item">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="pb-5">Management Transaction</h1>
                <br />
                <table class="table table-striped text-center">
                    <thead>
                        <tr class="table-td-head">
                            <td scope="col">ID</td>

                            <td scope="col">Name</td>
                            <td scope="col">Date</td>
                            <td scope="col">Manage</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $o)

                        <tr class="table-td-content">
                            <td scope="row">{{ $o->id }}</td>

                            <td>{{ $o->name }}</td>
                            <td>{{ $o->created_at }}</td>

                            <td>
                                @if($o->paid_at == null)
                                <a
                                    href="/mgpegawai-edit/{{ $o->id }}"
                                    role="button"
                                    class="btn btn-primary"
                                    ></i>Confirm</a
                                >
                                @else
                                <a role="button" class="btn btn-success"
                                    ></i>Confirmed</a
                                >
                                @endif
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
