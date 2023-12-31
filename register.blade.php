<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Register<br />
            <span class="text-primary">Pengaduan Masyarakat</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Silahkan daftarkan diri anda 
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="login" method="POST" enctype="multipart/form-data">
              @method("POST")
              @csrf 
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="nik"/>
                      <label class="form-label" for="form3Example1">NIK</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="nama"/>
                      <label class="form-label" for="form3Example2">Nama</label>
                    </div>
                  </div>
                </div>

                <!-- username input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="username"/>
                  <label class="form-label" for="form3Example3">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- telp input -->
                  <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="telp"/>
                  <label class="form-label" for="form3Example3">No Telp</label>
                </div>

                <!-- Submit button -->
                <input class="btn btn-primary" type="submit" value="Register"> 

                 <!-- Register buttons -->
                 <div class="text-center">
                <p>Kembali <a href="login">Login</a></p>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<!-- @include('layouts.nav')  -->
<!-- <h1>Register</h1><br>
    <form action={{url('register')}} method="post">
        @method('POST')
        @csrf
        <div>
        NIK : <input type="text" name="nik" id="">
        </div>
        <div>
        Nama : <input type="text" name="nama" id="">
        </div>
        <div>
        Username : <input type="text" name="username" id="">
        </div>
        <div>
        Password : <input type="password" name="password" id="">
        </div>
        <div>
        Telp : <input type="text" name="telp" id="">
        </div>
        <br>
        <input class="btn btn-primary" type="submit" value="Register"> 
           <div class="register-link">
                <p>Kembali <a href="login">Login</a></p>
            </div>
</form> -->