@extends('layout')
@section('title','Register')
@section('content')
    <div class="container">
        <form class="ms-auto me-auto mt-auto" style="width: 500px">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleUsername" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
