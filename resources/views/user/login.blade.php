<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Prayer Room | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand bg-light py-3 mb-4">
        <div class="container">
            <a class="navbar-brand mb-2 mb-md-0 text-dark" href="#">The Prayer Room</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!--Login-->
    @if (session('status'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-triangle-fill"></i> Whoops!</strong> {{session('status')}}
    </div>
    @endif

    <div class="container text-center col-md-6 col-12">
        @yield('login_social')
        <form action="{{route('login')}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" @error('email')
                    style="border-style: solid; border-width: medium; border-color: red;" @enderror
                    value="{{old('email')}}">
            </div>
            @error('email')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="mb-3">
                <label for="InputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" @error('password')
                    style="border-style: solid; border-width: medium; border-color: red;" @enderror>
            </div>
            @error('password')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <script src="js/bootstrap.bundle.js" async defer></script>
</body>

</html>