<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <style>
        * { box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #007bff 0%, #00b4d8 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 40px 35px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 380px;
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 { margin-bottom: 25px; color: #333; }

        label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
            font-weight: 600;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: 0.3s;
            font-size: 15px;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0,123,255,0.4);
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: 600;
        }

        button:hover { background: #0056b3; }

        .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 6px;
            font-size: 14px;
        }

        .error {
            background: #ffe6e6;
            color: #d93025;
            border: 1px solid #f5c2c7;
        }

        .success {
            background: #e6ffee;
            color: #0f9d58;
            border: 1px solid #b7e4c7;
        }

        .footer {
            margin-top: 15px;
            font-size: 13px;
            color: #666;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Form Login</h2>

        {{-- Pesan error dari session --}}
        @if(session('error'))
            <div class="message error">{{ session('error') }}</div>
        @endif

        {{-- Pesan sukses dari session --}}
        @if(session('success'))
            <div class="message success">{{ session('success') }}</div>
        @endif

        {{-- Pesan error dari validasi --}}
        @if ($errors->any())
            <div class="message error">
                <ul style="margin: 0; padding-left: 20px; text-align: left;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form login --}}
        <form method="POST" action="{{ url('/auth/login') }}">
            @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>

            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
