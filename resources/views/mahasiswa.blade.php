<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Data Mahasiswa</title>
</head>
<body>
<h2>Data Mahasiswa</h2>
<div class="wrapper">

    <!-- TABLE -->
    <div class="card">
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Fakultas</th>
                <th>Universitas</th>
                <th>Domisili</th>
            </tr>

            @foreach($data as $row)
            <tr>
                <td>{{ $row->nim }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jurusan }}</td>
                <td>{{ $row->fakultas }}</td>
                <td>{{ $row->universitas }}</td>
                <td>{{ $row->domisili }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- FORM -->
    <div class="card">
        <h3>Tambah Data</h3>
        <form action="/store" method="POST">
            @csrf
            <div class="form-grid">
                <input type="text" name="nim" placeholder="NIM">
                <input type="text" name="nama" placeholder="Nama">
                <input type="text" name="jurusan" placeholder="Jurusan">
                <input type="text" name="fakultas" placeholder="Fakultas">
                <input type="text" name="universitas" placeholder="Universitas">
                <input type="text" name="domisili" placeholder="Domisili">
            </div>
            <div class="btn-center">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>

    <!-- PROFIL-->
    <div class="card owner-card">
        <h3>Data Pemilik</h3>
        <div class="owner-content">
            <img src="{{ asset('images/profile.png') }}" alt="Foto Pemilik" class="owner-img">
            <div class="owner-details">
                <p><span class="label">Nama</span>: Rizkya Dwi Aulya Fasya</p>
                <p><span class="label">Kelas</span>: Sistem Informasi-A</p>
                <p><span class="label">NIM</span>: 255150401111025</p>
            </div>
        </div>
    </div>

</div>
</body>
</html>