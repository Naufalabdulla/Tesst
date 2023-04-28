<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="bg-warning" style="height: 100vh;">
        <div class="container-lg">
            <div class="justify-content-center">
                @yield('content')
            </div>
        </div>
        <div class="bg-secondary pt-5" style="height: 20vh;">
            <div class="container-lg">
                <div class="justify-content-center">
                    <div class="row gx-5">
                        <div class="col">
                            <h4 class="fw-bold text-white">GAS</h4>
                        </div>
                        <div class="col">
                            <h5 class="text-white">Tentang GAS</h5>
                            <p class="text-white" style="max-width: 10rem;">condition and terms privacy</p>
                        </div>
                        <div class="col">
                            <h5 class="text-white">Hubungi Kami</h5>
                            <p class="text-white" style="max-width: 10rem;">Kritik dan Saran</p>
                        </div>
                        <div class="col">
                            <h5 class="text-white">Follow Us</h5>
                            <p class="text-white" style="max-width: 10rem;">condition and terms privacy</p>
                        </div>
                        <div class="col">
                            <h5 class="text-white">Unduh</h5>
                            <p class="text-white" style="max-width: 10rem;">condition and terms privacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>