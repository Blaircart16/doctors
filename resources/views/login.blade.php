<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <body>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Login</h1>
                    </div>
                    @if (Session::has('error'))
                    <div class="alert-danger" role="alert">
                        {{Session::get('error')}}
                    @endif
                    </div>
                    <div class="card-body">
                    <form action="{{route ('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
</body>
</html>