@extends('layout')
@section('title','Register')
@section('content')
    <div class="container bg-tertiary mt-8">
        <form action="{{route('register.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
            </div>
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
            <a href="{{route('login.post')}}" ><button type="button" class=" btn btn-primary">Already have an account? Login Instead!</button></a>
        </form>
    </div>

@endsection
