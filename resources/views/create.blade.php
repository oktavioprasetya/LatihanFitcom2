<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 30px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button, .tombol {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 20px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Tambah Siswa</h1>
    <p>Masukkan data siswa baru.</p>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <label for="nis">NIS</label>
        <input
            type="text"
            id="nis"
            name="nis"
            value="{{ old('nis') }}"
            required
        >

        <label for="nama">Nama Siswa</label>
        <input
            type="text"
            id="nama"
            name="nama"
            value="{{ old('nama') }}"
            required
        >

        <label for="kelas">Kelas</label>
        <input
            type="text"
            id="kelas"
            name="kelas"
            value="{{ old('kelas') }}"
            placeholder="Contoh: XI"
            required
        >

        <label for="jurusan">Jurusan</label>
        <input
            type="text"
            id="jurusan"
            name="jurusan"
            value="{{ old('jurusan') }}"
            placeholder="Contoh: RPL"
            required
        >

        <button type="submit">Simpan Siswa</button>

        <a href="{{ route('siswa.index') }}" class="tombol">
            Kembali
        </a>
    </form>

</div>

</body>
</html>