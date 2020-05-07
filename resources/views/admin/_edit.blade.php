<div class="modal" id="editModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form id="editUserForm" data-id="{{$user->id}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="firstName" class="col-4 col-form-label">First Name</label>
                    <div class="col-8">
                        <input id="firstName"
                               name="firstName"
                               placeholder="name"
                               class="form-control here"
                               type="text"
                    value="{{$user->firstName}}" />
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
                               type="text"
                               value="{{$user->lastName}}"/>
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
                               type="text"
                               value="{{$user->email}}"/>
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
                               type="string"
                               value="{{$user->phone}}" />
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
                               type="string"
                               value="{{$user->location}}"/>
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
                               type="password"
                                />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                            Please password is required.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <button name="submit" type="button" id="edit" class="btn btn-primary">
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

