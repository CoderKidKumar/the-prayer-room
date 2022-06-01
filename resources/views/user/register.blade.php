<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Prayer Room | Sign Up</title>
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
    <!--Register-->
    <div class="container text-center col-md-6 col-12">
    @yield('signup_social')
        <form class="row g-3" action="{{route('register')}}" method="post">
            @csrf
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required
                    @error('first_name') style="border-style: solid; border-width: medium; border-color: red;" @enderror
                    value="{{old('first_name')}}">
                    <label for="floatingInput">First Name</label>
                </div>
                @error('first_name')
                <div class="text-danger">
                   {{$message}} 
                </div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required
                    @error('last_name') style="border-style: solid; border-width: medium; border-color: red;" @enderror
                    value="{{old('last_name')}}">
                    <label for="floatingInput">Last Name</label>
                </div>
                @error('last_name')
                <div class="text-danger">
                   {{$message}} 
                </div>
                @enderror
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" placeholder="name@example.com" required
                    @error('email') style="border-style: solid; border-width: medium; border-color: red;" @enderror
                    value="{{old('email')}}">
                    <label for="floatingInput">Email address</label>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                    </div>
                </div>
                @error('email')
                <div class="text-danger">
                   {{$message}} 
                </div>
                @enderror
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" placeholder="Password" required
                    @error('password') style="border-style: solid; border-width: medium; border-color: red;" @enderror>
                    <label for="floatingPassword">Password</label>
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-32 characters long, contain at least one letter, one number,
                        and one special character. It must NOT contain spaces or emoji.
                    </div>
                </div>
                @error('password')
                <div class="text-danger">
                   {{$message}} 
                </div>
                @enderror
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password" required>
                    <label for="floatingPassword">Confirm Password</label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
        </form>
    </div>

    <script src="js/bootstrap.bundle.js" async defer></script>
</body>

</html>