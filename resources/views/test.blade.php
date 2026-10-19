<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        .tombol {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f3f4f6;
        }

        .berhasil {
            color: green;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Daftar Siswa</h1>
    <p>Data siswa yang tersimpan di database.</p>

    @if (session('success'))
        <p class="berhasil">{{ session('success') }}</p>
    @endif

    <a href="{{ route('siswa.create') }}" class="tombol">
        + Tambah Siswa
    </a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($siswas as $siswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>