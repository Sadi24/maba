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
