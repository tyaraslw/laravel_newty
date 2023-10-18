<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
            Login<br/>
            <span class="text-primary">Pengaduan Masyarakat</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            silahkan masuk akun anda dan lapor pengaduan anda
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
                <!-- username input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="username" />
                  <label class="form-label" for="form3Example3" >Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password" />
                  <label class="form-label" for="form3Example4" >Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Remember me
                  </label>
                </div>

                <!-- Submit button -->
                <input class="btn btn-primary" type="submit" value="Login"> 

                <!-- Register buttons -->
                <div class="text-center">
                <p>Tidak punya akun? <a href="register">Register</a></p>
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
<!--  @include('layouts.nav')  
<div class="wrapper">
        <form action="login" method="POST" enctype="multipart/form-data">
            @method("POST")
            @csrf 
    <h1>Login</h1><br>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
            </div>

            <input class="btn btn-primary" type="submit" value="kirim"> 

            <div class="register-link">
                <p>Tidak punya akun? <a href="register">Register</a></p>
            </div>   
        </form>
    </div> -->