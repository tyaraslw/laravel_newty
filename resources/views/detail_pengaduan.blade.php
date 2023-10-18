<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>detail</title>
</head>
<body>
<form action="detailpengaduan" method="POST" enctype="multipart/form-data">
    <div class="container">
        <h1>Detail Pengaduan</h1>
        <p class="text-mute">NIK : {{ $data->nik }}</p>
        <p class="bg-secondary p-5">{{ $data->tgl_pengaduan}}</p>
        <p class="bg-secondary p-5">{{ $data->isi_laporan}}</p>
        <p class="bg-secondary p-5">{{ $data->foto}}</p>
        <input class="btn btn-secondary" type="submit" value="kembali"> 
    </div>
</form>
</body>
</html>