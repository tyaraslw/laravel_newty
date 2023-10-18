<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>petugas</title>
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
              <th scope="col">id_petugas</th>
              <th scope="col">nama</th>
              <th scope="col">username</th>
              <th scope="col">password</th>
              <th scope="col">telp</th>
              <th scope="col">level</th>
              <th scope="col">opsi</th>
            </tr>

              @foreach ($petugas as $petugas)
            <tr>
              <td>{{$petugas->id_petugas}}</td>  
              <td>{{$petugas->nama_petugas}}</td>  
              <td>{{$petugas->username}} </td>
              <td>{{$petugas->password}}</td>  
              <td>{{$petugas->telp}}</td>
              <td>{{$petugas->level}}</td>
          <td>
            <a href='halaman_edit.php?id_pengaduan=$pengaduan[id_pengaduan]'>Edit</a>|
            <a href='proseshapus.php?id_pengaduan=$pengaduan[id_pengaduan]'>Delete</a>
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
</body>
</html>