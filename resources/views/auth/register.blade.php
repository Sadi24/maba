@extends('layouts.app')

@section('content')
<form action="/register" method="POST">
    @foreach ($errors->all() as $error)
         <h1>{{$error}}</h1>
    @endforeach
         @csrf
        <fieldset>
            <legend>Sign up</legend>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       id="exampleInputEmail1"
                       placeholder="Enter email"
                       />
            </div>
            <div class="form-group">
                <label for="exampleInputFirstName1">First Name</label>
                <input type="text"
                       class="form-control"
                       name="firstName"
                       id="exampleInputFirstName1"
                       placeholder="Enter First Name" />
            </div>
            <div class="form-group">
                <label for="exampleInputLastName1">Last Name</label>
                <input type="text"
                       class="form-control"
                       name="lastName"
                       id="exampleInputLastName1"
                       placeholder="Enter Last Name" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       id="exampleInputPassword1"
                       placeholder="Password" />
            </div>
            <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password"
                       class="form-control"
                       name="password_confirmation"
                       id="exampleInputConfirmassword1"
                       placeholder="Password" />
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </fieldset>
    </form>
@endsection
