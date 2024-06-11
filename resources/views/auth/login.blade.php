<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-container .form-control {
            border-radius: 10px;
        }
        .login-container .btn-primary {
            border-radius: 10px;
            background-color: #007bff;
            border: none;
        }
        .login-container .btn-primary:hover {
            background-color: #0056b3;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
                <span class="text-danger">
                    @error('username')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="text-center">
                <a href="registration" class="text-decoration-underline">Registration</a>&#160;&#160;
                <a href="/" class="text-decoration-underline">Home</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
