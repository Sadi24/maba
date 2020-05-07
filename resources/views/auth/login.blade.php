@extends('layouts.app')

@section('content')
<form action="/login" method="POST">
    @foreach ($errors->all() as $error)
        <h1>{{$error}}</h1>
    @endforeach
    @csrf
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"
                       class="form-control"
                       id="exampleInputEmail1"
                       placeholder="Enter email"
                       name="email"/>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       class="form-control"
                       id="exampleInputPassword1"
                       placeholder="Password"
                       name="password"/>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </fieldset>
    </form>
@endsection
