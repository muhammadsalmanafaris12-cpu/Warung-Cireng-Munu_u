<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Cireng Munu'u - Renyah & Gurih!</title>
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYU9LwFCCN7cc2xMeJ5q9cIkhSYFgmjkm2Dmc-1eDWLlMw5xBDxnu-oArZq2mdBRyctcylOtc6H8CzoOi_-XJ1lQY6AYJRJiz75g-cLxBFPOhT91ClqY5bGYZkJ1MWgVaZt7l46Ffdz3FLbx4db2OxpcJU6xisJJu0mVN-hvPhcGSI8-ES7fdqR_smi1Dv/s1024/Gemini_Generated_Image_9c4jmm9c4jmm9c4j.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .bg-cream { background-color: #f5f5dc !important; }
        .text-dark-cream { color: #333 !important; }
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlwmNHzBA4fXUYCu_OR3rDVWQDIGQXEY8zL4HBAw4gibo3mL4hGJDsaSCJ9FjqhkvcJOhfYjUARR6ljy3vuJOAWQuwgE49QYzKWbHYF097PqE2U0XX6CtiBW86r1vRFa2T869pxT6g3sGdyDSfIQA57tOun3M98-5oCEYuiGSdPZ5gFPGZ0vdLEYmZiLHP/s1006/paketkomplit.png');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .card-cireng { transition: transform 0.3s; border: none; border-radius: 15px; overflow: hidden; }
        .card-cireng:hover { transform: translateY(-10px); }
        .btn-pesan { background-color: #dc3545; border: none; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-cream sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark-cream" href="#">Cireng Munu'u</a>
            <div class="ms-auto">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-dark btn-sm">Admin</a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <h1 class="display-3 fw-bold">Warung Cireng Munu'u</h1>
            <p class="lead">Sensasi Cireng Isi Paling Renyah dan Bumbu Rahasia yang Bikin Nagih!</p>
            <a href="{{ route('menu') }}" class="btn btn-warning btn-lg fw-bold mt-3">Lihat Menu</a>
        </div>
    </header>

    <footer class="bg-cream py-4 mt-0 text-center">
        <p class="text-dark-cream">&copy; Warung Cireng Munu'u </p>
    </footer>

</body>
</html>