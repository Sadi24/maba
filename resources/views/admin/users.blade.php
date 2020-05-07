@extends('layouts.app')

@section('content')
        <hr />
        <h1 style="display: inline-block;">Users</h1>
        <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-success float-right">
            Add User
        </button>
        <hr />

        <table class="table table-bordered" id="users">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                        <td>{{$user->firstName}}</td>
                        <td>{{$user->lastName}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                        <a  class="btn btn-outline-primary edit" data-id="{{$user->id}}">Edit</a> |
                            <a  class="btn btn-danger delete" data-id="{{$user->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

         <!-- The Modal -->
  <div class="modal" id="createModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form id="addUserForm">
                @csrf
                <div class="form-group row">
                    <label for="firstName" class="col-4 col-form-label">First Name</label>
                    <div class="col-8">
                        <input id="firstName"
                               name="firstName"
                               placeholder="name"
                               class="form-control here"
                               type="text" />
                        <div class="valid-feedback">Looks good!</div>

                        <div class="invalid-feedback">Please name is required.</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastName" class="col-4 col-form-label">Last Name</label>
                    <div class="col-8">
                        <input id="lastName"
                               name="lastName"
                               placeholder="Last Name"
                               class="form-control here"
                               type="text" />
                        <div class="valid-feedback">Looks good!</div>

                        <div class="invalid-feedback">
                            Please title is required.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input id="email"
                               name="email"
                               placeholder="email"
                               class="form-control here"
                               type="text" />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                            Please SubTitle is required.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="time" class="col-4 col-form-label">Phone</label>
                    <div class="col-8">
                        <input id="phone"
                               name="phone"
                               placeholder="phone"
                               class="form-control here"
                               type="string" />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                            Please Price is required.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-4 col-form-label">location</label>
                    <div class="col-8">
                        <input id="location"
                               name="location"
                               placeholder="location"
                               class="form-control here"
                               type="string" />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                            Please location is required.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-4 col-form-label">Password</label>
                    <div class="col-8">
                        <input id="password"
                               name="password"
                               placeholder="password"
                               class="form-control here"
                               type="password" />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                            Please password is required.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <button name="submit" type="button" id="add" class="btn btn-primary">
                            Save
                        </button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>

  <div id="editModal"></div>

        @endsection
