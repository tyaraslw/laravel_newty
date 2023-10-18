<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isi-masyarakat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
@include('layouts.nav') 
     <br>
     <br>
     <h3 style="text-align:center;">{{$isiM}}</h3>
        <form action="isi-masyarakat" method="POST" enctype="multipart/form-data">
            <div class="container">
                @method("POST")
                @csrf 
                <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="col-form-label">Nama</label>
                     <input class="form-control" type="text" name="isi_daftar"  aria-label="default input example">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="col-form-label">Username</label>
                    <input class="form-control" type="text"  name="isi_user" aria-label="default input example">
               </div>

               <div class="mb-3">
                 <label for="inputPassword5" class="form-label">Password</label>
                 <input type="password"  name="isi_pass" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
               </div> 

               <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="col-form-label">No telp</label>
                 <input class="form-control" type="text"  name="isi_no" aria-label="default input example">
               </div>
                  
                  <br>
                <input class="btn btn-primary" type="submit" value="Daftar"> 
        </form> 
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>isi-masyarakat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    @include('layouts.nav') 
     <br>
     <br>
     <h3 style="text-align:center;">{{$isiM}}</h3>
</body>
</html> --}}