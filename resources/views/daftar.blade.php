<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UAS Laravel 2157401132</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!--CSS-->
    <link href="app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Styles -->
    <style>
    </style>
</head>

<body class="bg-blue">
    <div class="d-flex flex-column center-layer">
        <div class="d-flex flex-column p-4">
            <div class="title-form white">Pendaftaran</div>
            <form method="POST" action="{{ route('daftar.store') }}">
                @csrf
                <div class="pt-2">
                    <label class="text-light">Nama</label>
                </div>
                <div>
                    <input type="text" placeholder="Nama" name="name" id="name" required>
                </div>
                <div class="pt-2">
                    <label class="text-light">Email</label>
                </div>
                <div>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                </div>
                <div class="pt-2">
                    <label class="text-light">Password</label>
                </div>
                <div>
                    <input type="password" placeholder="Password" name="password" id="password" required>
                </div>
                <div class="d-flex flex-row justify-content-center mt-4">
                    <button type="submit">Daftar</button>
                    <div class="btn"><a href="/">Kembali</a></div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>