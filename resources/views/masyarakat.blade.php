<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>masyarakat</title>
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
              <th scope="col">nik</th>
              <th scope="col">nama</th>
              <th scope="col">username</th>
              <th scope="col">password</th>
              <th scope="col">telp</th>
              <th scope="col">opsi</th>
            </tr>

              @foreach ($masyarakat as $masyarakat)
            <tr>
              <td>{{$masyarakat->nik}}</td>  
              <td>{{$masyarakat->nama}}</td>  
              <td>{{$masyarakat->username}} </td>
              <td>{{$masyarakat->password}}</td>  
              <td>{{$masyarakat->telp}}</td>
          <td>
            <a href="hapus-masyarakat/{{$masyarakat->nik}}">Delete</a>|
            <a href="detail-masyarakat/{{$masyarakat->nik}}">Detail</a>|
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
</body>
</html>
