<!doctype html>
<html lang="de" data-bs-theme="dark">
    <head>
        <title>{{ config('app.name', 'Laravel') }} || Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]></base><![endif]-->
        <meta name="description" content="Description default here">
        <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="css/igns.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="d-flex justify-content-center">
                    <div class="card col-md-6 col-lg-4 shadow bg-body-secondary">
                        <div class="card-body">
                            <div class="col-12">

                                <div class="card-title border-bottom fw-bold">
                                    <span class="text-danger">I.G.N.S.</span> Login
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-Mail Adresse</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="flex-nowrap p-2 small">
                                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Kennwort</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>

                                    @if ($errors->has('password'))
                                        <div class="flex-nowrap p-2 small">
                                            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-danger col-md-4">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
