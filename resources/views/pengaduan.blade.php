<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>pengaduan</title>
</head>
<body>
  @include('layouts.nav') 
    <br>
    <br>
      <h3 style="text-align:center;">{{$TextIsi}}</h3>
      <br>
        <div class="container">
          <table class="table"> 
            <tr>
              <th scope="col">NIK</th>
              <th scope="col">tanggal</th>
              <th scope="col">isi_laporan</th>
              <th scope="col">foto</th>
              <th scope="col">status</th>
              <th scope="col">opsi</th>
            </tr>

              @foreach ($pengaduan as $pengaduan)
            <tr>
              <td>{{$pengaduan->nik}}</td>  
              <td>{{$pengaduan->tgl_pengaduan}}</td>  
              <td>{{$pengaduan->isi_laporan}} </td>
              <td><img src='{{asset("storage/image/" .$pengaduan->foto)}}' widht="100px"/></td>  
              <td>{{$pengaduan->status}}</td>
            <td>
            <a href="hapus-pengaduan/{{$pengaduan->id_pengaduan}}">Delete</a>|
            <a href="detail-pengaduan/{{$pengaduan->id_pengaduan}}">Detail</a>|
            <a href="update/{{$pengaduan->id_pengaduan}}">Update</a>        
            </form>
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
</body>
</html>