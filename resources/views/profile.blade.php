@extends('layouts.app')

@section('content')

<hr />
<div class="row">
    <div class="col-sm-10"><h1>Profile</h1></div>
</div>
<hr />
<div class="row">
    {{-- <div class="col-sm-3">
        <!-- left col -->


    </div> --}}
    <!-- /col-3 -->
    <div class="col-sm-12">

        <form class="form" action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">

            <div class="text-center">
                    <img src="/images/{{$user->image}}"
                         class="avatar rounded-circle img-thumbnail"
                         alt="avatar" />
                    <h6>Upload a different photo...</h6>
                    <input type="file" name="image" class="text-center center-block file-upload" />
                </div>
                <br />
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="col-xs-6">
                    <label for="firstName"><h4>First name</h4></label>
                    <input type="text"
                           class="form-control"
                           name="firstName"
                           id="firstName"
                           placeholder="first name"
                           value="{{$user->firstName}}" />

                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                    <label for="lastName"><h4>Last name</h4></label>
                    <input type="text"
                           class="form-control"
                           name="lastName"
                           id="lastName"
                           placeholder="last name"
                           value="{{$user->lastName}}" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-6">
                    <label for="phone"><h4>Phone</h4></label>
                    <input type="text"
                           class="form-control"
                           name="phone"
                           id="phone"
                           placeholder="enter phone"
                           value="{{$user->phone}}" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                    <label for="email"><h4>Email</h4></label>
                    <input type="email"
                           class="form-control"
                           name="email"
                           id="email"
                           placeholder="you@email.com"
                           value="{{$user->email}}" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                    <label for="email"><h4>Location</h4></label>
                    <input type="text"
                           class="form-control"
                           id="location"
                           placeholder="somewhere"
                           name="location"
                           value="{{$user->location}}" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <br />
                    <button class="btn btn-lg btn-success  d-flex" type="submit">
                        <i class="material-icons mr-1"> save </i> Save
                    </button>
                </div>
            </div>
        </form>

        <hr />
    </div>
    <!-- /tab-content -->
</div>
<!-- /col-9 -->
@endsection
