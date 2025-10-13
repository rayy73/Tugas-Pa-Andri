<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sisfo Kepegawaian</title>

    <!-- Custom fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">

    <!-- Custom styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="p-5">

                                    <!-- Header -->
                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Selamat Datang</h1>
                                        <p class="text-muted">Silakan login untuk melanjutkan</p>
                                    </div>

                                    <!-- Login Form -->
                                    <form class="user" action="/sesi/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                   class="form-control form-control-user"
                                                   value="{{ Session::get('email') }}"
                                                   placeholder="Masukkan Username / Email"
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password"
                                                   class="form-control form-control-user"
                                                   placeholder="Masukkan Password Anda"
                                                   required>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>

                                    <!-- Message -->
                                    @if(session('success'))
                                        <div class="alert alert-info mt-3">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
