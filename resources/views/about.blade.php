<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
@include('layouts.nav') 
    <div>
        <a href="{{ url('home') }}">home</a> |
        <a href="{{ url('about') }}">about</a> |
        <a href="{{ url('login') }}">login</a> |
        <a href="{{ url('pengaduan') }}">pengaduan</a>|
        <a href="{{ url('isipengaduan') }}">lapor!</a>|
    </div>    
    <h1>ini halaman about</h1>

    <p>halo selamat datang</p>
</body>
</html>