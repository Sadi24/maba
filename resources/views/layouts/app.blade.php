<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page Title</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet" />
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">Maba</a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarColor01"
                aria-controls="navbarColor01"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a href="/" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <input id="search" class="form-control mr-sm-2 ml-15"
                       type="text"
                       placeholder="Search" />

                    @guest
                    <span class="badge badge-light bg-secondary"></span>
                    @else
                    <a href="/cart" class="p-cart">
                    <span class="material-icons md-48 " style="color: black;">shopping_cart</span>
                    <span class="badge badge-light bg-secondary">{{Auth::user()->products()->sum('count')}}</span>
                    @endguest
                </a>
                @guest
                <a href="/register" class="btn btn-secondary my-2 my-sm-0 ml-4">Sign up</a>
                <a href="/login" class="btn btn-secondary my-2 my-sm-0 ml-2">Login</a>
                @else
                <div class="form-inline my-2 my-lg-0">
                        <a href="/profile" class="btn btn-secondary my-2 my-sm-0 ml-4">Profile</a>
                        <a href="/logout" class="btn btn-danger my-2 my-sm-0 ml-2">LogOut</a>
                </div>
                @endguest


            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:100px">
        @yield('content')

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2019-2020 Maba</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <input type="hidden" id="token" value="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
            $("#search").keyup(function(){
                var text = $("#search").val();
                var token = $("#token").val();
                $.post('/search' , {text : text , _token : token}).done(function(data){
                    $("#products").replaceWith(data);
                });
            });
            $("#add").click(function(){
                var data = $("#addUserForm").serialize();
                $.post("/admin/users" , data).done(function(data){
                       $("#myModal").modal("hide");
                       $("#users").replaceWith(data);
                });
            });

            $(".edit").click(function(){
                var id = $(this).data("id");
                $.get(`/admin/users/${id}/edit`).done(function(data){
                    $("#editModal").replaceWith(data);
                    $("#editModal").modal("show");
                });
            });

            $(document).on('click' ,'#edit' , function(){
                var data = $("#editUserForm").serialize();
                var id = $("#editUserForm").data('id');
                $.post(`/admin/users/${id}` , data).done(function(data){
                    $("#users").replaceWith(data);
                    $("#editModal").modal("hide");
                });
            });



           $(document).on('click' ,'.delete' , function(){
                var id = $(this).data("id");
                $.get(`/admin/users/delete/${id}`).done(function(data){
                    $("#users").replaceWith(data);
                });
            });
    </script>
</body>
</html>
