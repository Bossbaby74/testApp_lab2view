@extends('layout')
@section('title','admin')
@section('content')
    <h1 style="text-align: center">ADMIN DASHBOARD</h1>
    <div class="container mt-3 mr-5 ">
        <table class="table table-primary table-striped table-hover table-bordered border-success">
            <thead>
            <tr>
                <th scope="col" class="col-3">Name</th>
                <th scope="col" class="col-5 content-align-center">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user?->name}}</td>
                    <td>{{$user?->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="button-class mt-auto position-absolute top-50 start-50 translate-middle mt-1">
        <button type="button" class="btn btn-primary mr-1 position-relative">Edit</button>
        <button type="reset" class="btn btn-danger">Delete</button>

    </div>

@endsection
