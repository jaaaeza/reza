<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Halaman Batik</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      margin: 0;
      background-color: #f5f2eb;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background-color: #d9cbb6;
      padding: 12px 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-size: 22px;
      font-weight: bold;
      color: #5c3d2e;
      text-decoration: none;
    }

    .nav-link {
      font-weight: 500;
      color: #5c3d2e;
    }

    .nav-link:hover,
    .nav-link.active {
      color: #000;
      background-color: #ede0d4;
      border-radius: 6px;
      padding: 6px 12px;
    }

    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      width: 100%;
      height: 500px;
      object-fit: cover;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    .card-title {
      font-weight: bold;
      color: #5c3d2e;
    }

    .btn-primary {
      background-color: #6a994e;
      border: none;
    }

    .btn-primary:hover {
      background-color: #52774d;
    }

    .section-title {
      text-align: center;
      margin: 40px 0 20px;
      font-size: 28px;
      color: #5c3d2e;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar d-flex justify-content-between flex-wrap">
    <a class="navbar-brand" href="#">
      <img src="bb.png" alt="Logo" width="30" height="24"> BATIK
    </a>
    <ul class="nav">
      <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
      <li class="nav-item"><a class="nav-link" href="login.php">Keluar</a></li>
    </ul>
  </nav>

  <!-- Section Title -->
  <div class="container">
    <h2 class="section-title">Koleksi Batik Pilihan</h2>

    <div class="row g-4 justify-content-center">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card">
          <img src="baju1.png" class="card-img-top" alt="Batik Parang">
          <div class="card-body text-center">
            <h5 class="card-title"><i>BATIK PARANG</i></h5>
            <p class="card-text">Motif klasik penuh makna filosofi, cocok untuk acara formal dan resmi.</p>
            <a href="#" class="btn btn-primary w-100">Pesan</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="card">
          <img src="batik2.png" class="card-img-top" alt="Batik Kawung">
          <div class="card-body text-center">
            <h5 class="card-title"><i>BATIK KAWUNG</i></h5>
            <p class="card-text">Motif bulatan simetris khas kerajaan, mencerminkan kesederhanaan dan kebijaksanaan.</p>
            <a href="#" class="btn btn-primary w-100">Pesan</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="card">
          <img src="batik3.png" class="card-img-top" alt="Batik Mega Mendung">
          <div class="card-body text-center">
            <h5 class="card-title"><i>BATIK MEGA MENDUNG</i></h5>
            <p class="card-text">Motif awan khas Cirebon, melambangkan ketenangan dan keseimbangan hidup.</p>
            <a href="#" class="btn btn-primary w-100">Pesan</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="card">
          <img src="batik4.png" class="card-img-top" alt="Batik Truntum">
          <div class="card-body text-center">
            <h5 class="card-title"><i>BATIK TRUNTUM</i></h5>
            <p class="card-text">Simbol cinta abadi, sering dipakai dalam upacara pernikahan adat Jawa.</p>
            <a href="#" class="btn btn-primary w-100">Pesan</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
