<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Warung Cireng Munu'u</title>
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYU9LwFCCN7cc2xMeJ5q9cIkhSYFgmjkm2Dmc-1eDWLlMw5xBDxnu-oArZq2mdBRyctcylOtc6H8CzoOi_-XJ1lQY6AYJRJiz75g-cLxBFPOhT91ClqY5bGYZkJ1MWgVaZt7l46Ffdz3FLbx4db2OxpcJU6xisJJu0mVN-hvPhcGSI8-ES7fdqR_smi1Dv/s1024/Gemini_Generated_Image_9c4jmm9c4jmm9c4j.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffc107 0%, #ffdb58 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            background: white;
        }
        .login-header {
            background: linear-gradient(135deg, #ffc107 0%, #ffdb58 100%);
            color: #333;
            padding: 2rem 1.5rem;
            border-radius: 15px 15px 0 0;
            text-align: center;
        }
        .login-header h2 {
            margin: 0;
            font-weight: 700;
        }
        .login-header p {
            margin: 0.5rem 0 0 0;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        .login-body {
            padding: 2rem 1.5rem;
        }
        .form-group label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }
        .form-control {
            border: 2px solid #eee;
            border-radius: 8px;
            padding: 0.75rem;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #ffc107;
            box-shadow: none;
            background-color: #fff;
        }
        .btn-login {
            background-color: #ffc107;
            border: none;
            padding: 0.75rem;
            font-weight: 700;
            border-radius: 8px;
            width: 100%;
            margin-top: 1rem;
            transition: background-color 0.3s;
            color: #333;
        }
        .btn-login:hover {
            background-color: #e0a800;
            color: #333;
        }
        .alert {
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }
        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }
        .forgot-password a {
            color: #ffc107;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2> Cireng Munu'u</h2>
                <p>Admin Dashboard</p>
            </div>

            <div class="login-body">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>❌ Login Gagal!</strong>
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            placeholder="admin@example.com"
                            required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            placeholder="••••••••"
                            required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Ingat saya
                        </label>
                    </div>

                    <button type="submit" class="btn btn-login btn-danger">
                        🔐 Login
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
