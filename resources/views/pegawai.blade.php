<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            padding: 50px;
            color: #333;
        }
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #1976d2;
            margin-bottom: 25px;
        }
        .info {
            line-height: 1.8;
        }
        .hobi {
            display: flex;
            align-items: flex-start;
        }
        .hobi strong {
            min-width: 80px;
        }
        .hobi ul {
            list-style: circle;
            margin: 0;
            padding-left: 18px;
        }
        .btn-home {
            display: block;
            text-align: center;
            margin-top: 30px;
        }
        .btn-home a {
            background: #1976d2;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-home a:hover {
            background: #0d47a1;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Data Pegawai</h1>

    <div class="info">
        <p><strong>Nama:</strong> {{ $name }}</p>
        <p><strong>Umur:</strong> {{ $my_age }} tahun</p>

        <div class="hobi">
            <strong>Hobi:</strong>
            <ul>
                @foreach($hobbies as $hobby)
                    <li>{{ $hobby }}</li>
                @endforeach
            </ul>
        </div>

        <p><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</p>
        <p><strong>Sisa Hari Menuju Wisuda:</strong> {{ $time_to_study_left }} hari</p>
        <p><strong>Semester Saat Ini:</strong> {{ $current_semester }}</p>
        <p><strong>Motivasi:</strong> {{ $motivasi }}</p>
        <p><strong>Cita-cita:</strong> {{ $future_goal }}</p>
    </div>
    <div class="btn-home">
        <a href="{{ url('/home') }}">Kembali ke Home</a>
    </div>
</div>
</body>
</html>
