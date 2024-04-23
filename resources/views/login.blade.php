@extends('layout')
@section('title','Login')
@section('content')
    <div class="container">
        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br>
            <a href="{{route('register.post')}}" ><button type="button" class=" btn btn-primary">Don't have an account? Register Now!</button></a>
        </form>
    </div>
@endsection

