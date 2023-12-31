{{-- @extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tunas Siak Anugrah | {{ $judul }}</title>
    <link rel="shortcut icon" href="{{ url('logo/tsa.png') }}" type="image/x-icon">

    <link rel="shortcut icon" href="{{ url('img/favicon/favicon.png') }}" type="image/png" />
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<!-- link css bootstrap -->

<div class="container my-lg-5">

</div>

<!-- form masuk web -->
<form action="#" method="POST">
@csrf
    <div class="container d-flex justify-content-center align-items-center min-vh-200" style="margin-top: 10%;">
        <div class="row border rounded-4 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <img id="animasiLogin" src="{{ url('logo/tsa.png') }}" alt="" style="width:25vw; height:auto" class="img-fluid" />
            </div>

            <div class="col-md-6 mb-5 right-box">
                <h2 class="text-center fw-bold mb-5 mt-3">Masuk</h2>

                <!-- input email -->
                <div class="form-floating mb-3 mt-3">
                    <input type="email" class="form-control" id="floatingInput" name='email' required />
                    <label for="floatingInput">Email</label>
                </div>
                <!-- input email -->

                <!-- input password -->
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword"  name='password' required />
                    <label for="floatingPassword">Password</label>
                </div>
                <!-- input password -->

                <!-- garis lurus -->
                <div class="border mt-4"></div>
                <!-- garis lurus -->

                <!-- tombol masuk -->
                <button type="submit" name="login" class="btn btn-primary col-12 mt-4 fw-bold">{{ __('Login') }}</button>
                <!-- tombol masuk -->
            </div>
        </div>
    </div>
</form>
<!-- form masuk web -->

<!-- footer -->
<footer id="footer" class="text-center position-relative w-100 fixed-bottom " style="margin-top: 10%;">
    <p class="text-secondary">
        Tunas Siak Anugrah &copy; | 2023
    </p>
</footer>
<!-- footer -->

<!-- link js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- link js bootstrap -->
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="/dist/assets/css/main/app.css">
    <link rel="stylesheet" href="/dist/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="{{ url('dist/logo/tsa.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('dist/logo/tsa.png') }}" type="image/png">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">                        
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <h2 class=" fw-bold mb-5 mt-3">Masuk</h2>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="email" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <!-- garis lurus -->
                        <div class="border mt-4"></div>
                        <!-- garis lurus -->

                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>                
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
