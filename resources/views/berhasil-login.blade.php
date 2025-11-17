<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #007bff 0%, #00b4d8 100%);
            margin: 0;
            padding: 0;
            color: #333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-container {
            background: #fff;
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 450px;
            width: 100%;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            margin-bottom: 15px;
            color: #007bff;
        }

        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
            margin: 5px;
        }

        .btn-home {
            background: #28a745;
            color: white;
        }

        .btn-home:hover {
            background: #218838;
        }

        .btn-logout {
            background: #dc3545;
            color: white;
        }

        .btn-logout:hover {
            background: #c82333;
        }

        footer {
            margin-top: 30px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Selamat Datang!</h1>
        <p>Anda berhasil login ke sistem. Silakan pilih menu di bawah ini.</p>

        <a href="{{ url('/home') }}" class="btn btn-home">🏠 Kembali ke Home</a>

        <footer>
            <p>© 2025 Sistem Login </p>
        </footer>
    </div>
</body>
</html>
