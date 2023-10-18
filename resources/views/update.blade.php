<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <br>
    <br>
    <center>
    <td><h2>Update here!</h2></td>
    </center>

        <form action={{url("update/$pengaduan->id_pengaduan")}} method="POST" enctype="multipart/form-data">
            <div class="container">
                @method("POST")
                @csrf 
                <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_laporan" rows="3" required>{{$pengaduan->isi_laporan}}</textarea>
                     @error('isi_laporan')
                         <div> {{ $message }}</div>
                     @enderror
                </div>

                <div class="mb-3">
                     <label for="formFile" class="form-label"> Bukti Foto</label>
                     <input type="file" class="form-control" id="formFile" name="foto">
                 </div>
                 
                <input class="btn btn-primary" type="submit" value="Kirim"> 
        </form> 
</body>
</html>