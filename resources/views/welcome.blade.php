<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <section class="background">
        <nav class="navbar navbar-expand-lg navbar-light py-4">
                <div class="container">
                    <a class="navbar-brand" href="#"><b class="utama">KiraPenduduk</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
                        <li class="nav-item">
                        <a class="nav-link utama me-2" aria-current="page" href="#" style="color:#07617D;font-size:14px"><b> Indikator Jumlah Penduduk</b></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link utama me-2" aria-current="page" href="#" style="color:#07617D;font-size:14px"><b> Cara Kerja Website</b></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link utama me-3" aria-current="page" href="#" style="color:#07617D;font-size:14px"><b> Tentang Kami</b></a>
                        </li>
                    </ul>
                    <a href="" class="btn btn-utama btn-sm px-3 py-2">Mulai Sekarang</a>
                    </div>
                </div>
        </nav>
        <div class="container pb-5">
            <div class="halamanPertama">
                <div class="row justify-content-between">
                    <div class="col-lg-6 my-auto">
                        <h1><b>Perkiraan & Prediksi</b></h1>
                        <p>Hitung perkiraan jumlah maksimal penduduk yang ideal 
                            mendiami sebuah kota dan prediksi jumlah penduduk
                            suatu kota di masa yang akan datang</p>
                        <a href="" class="btn btn-utama px-3 py-2">Mulai Sekarang</a>
                    </div>
                    <div class="col-lg-5 mt-5">
                        <img src="{{asset('/img/gambarDashboard.png')}}" alt="" srcset="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>