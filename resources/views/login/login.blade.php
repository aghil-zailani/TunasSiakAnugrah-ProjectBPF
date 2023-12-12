<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "sistemprestasi";

// $koneksi = mysqli_connect($server, $username, $password, $db);

// require_once "vendor/autoload.php";

// // init configuration
// $clientID = '815999352863-1a1qlpjc37tb1v5200qo9emohv1lnoao.apps.googleusercontent.com';
// $clientSecret = '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';
// $redirectUri = 'http://localhost/sistemPrestasi/public/Prestasi';

// // create Client Request to access Google API
// $client = new Google_Client();
// $client->setClientId($clientID);
// $client->setClientSecret($clientSecret);
// $client->setRedirectUri($redirectUri);
// $client->addScope("email");
// $client->addScope("profile");

// $login_url = $client->createAuthUrl();
// session_write_close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $judul }}</title>
    <link rel="shortcut icon" href="dist/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="dist/assets/images/logo/favicon.png" type="image/png">
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
</head>
<!-- link css bootstrap -->

</head>

<body>

    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-attachment-fixed ">
        <div class="flex-center flex-column flex-column-fluid p-10 pb-lg-20" style="margin-top:30vh;">
            <!-- form masuk web -->
                <div class="text-center mb-2 ">
                    <img id="logo" src="/logo/tsa1.png" alt="" style="width: 350px; height:auto;" class="img-fluid" />
                </div>
                <form action="#" method="POST">
                    @csrf
                <div class="container d-flex justify-content-center align-items-center box-area">
                    <div class="row border rounded-4 p-3 bg-white shadow box-area form w-50">
                        <div class="mb-4">
                            <button type="submit" name="login" class="btn btn-flex flex-center btn-primary btn-lg w-100 mt-2" style="font-size:20px;">
                                <img src="/logo/google.png" style="width: 30px; height: auto" class="img-fluid">
                                Sign in with Google</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- form masuk web -->

    <!-- footer -->
    <footer id="footer" class="text-center position-relative w-100 fixed-bottom " style="margin-top: 10%;">
        <p class="text-secondary">
            Tunas Siak Anugrah &copy; | 2023
        </p>
    </footer>
    <!-- footer -->

    <!-- link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- link js bootstrap -->
</body>

</html>
