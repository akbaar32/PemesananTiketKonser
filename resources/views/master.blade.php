<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aplikasi Pemesanan Tiket Konser</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mystyle.css" rel="stylesheet">
  </head>
  <body>

    <div class="container" id="wrap">
    <center><h3>SELAMAT DATANG DI <br>APLIKASI PEMESANAN TIKET MUSIK KONSER<br>
    <b>NEW DAY IS OVER</b></h3></center>
      <div class="row">
        <hr>
          <nav class="navbar" id="menu">
            <ul class="nav navbar-nav">
              <li><a id="link" href="{{ Route('index') }}">Pemesanan Tiket</a></li>
              <!--<li><a id="link" href="">Keterangan</a></li>-->

            </ul>
          </nav>
        <hr>
      </div>
      <div class="row">
        @yield('content')
      </div>
      <hr>
      <div class="row" id="copy">
        <center>Created By Mahasiswa Uniska - UAS 2018 - 4G Malam<br><small> Muhammad Hanafi, Muhammad Akbar Prasetya, Satria Suprapto, Riky Irawan</small></center>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
  </head>
  <body>

    <a href="{{ Route('index') }}">Data Barang</a> |
    <a href="">Keterangan</a>

    <hr>
    @yield('content')
    <hr>

    <footer>FTI UNISKA 2018</footer>

  </body>
</html>
 --}}
