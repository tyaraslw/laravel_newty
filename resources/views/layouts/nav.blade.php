<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
<a href="{{ url('home') }}"></a><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path  #e3f2fdfill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laporan pengaduan masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('masyarakat')}}">masyarakat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('petugas')}}">petugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('pengaduan')}}">Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('isi-pengaduan')}}">lapor!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('isi-masyarakat')}}">daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('isi-petugas')}}">isiP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('login')}}">login</a>
        </li>
        <li class="nav-item">
    </div>
    <div class="d-flex">
      <a class="nav-link" href="logout.php">
        <font color="red">logout</font>
      </a>
    </div>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>

    </form>
    </li>
  </div>
</nav>