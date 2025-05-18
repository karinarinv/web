<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="web.css" />
  <title>Audiora</title>

</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-center">
      <a class="navbar-brand" href="#">AUDIORA</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-lg-auto me-lg-5 mb-2 mb-lg-0 align-items-lg-center">
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Categories
  </a>
  <ul class="dropdown-menu">
    <li class="dropdown-submenu">
      <a class="dropdown-item dropdown-toggle" href="#">Earphone</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Bluetooth Earphone</a></li>
        <li><a class="dropdown-item" href="#">Wired Earphone</a></li>
        <li><a class="dropdown-item" href="#">Bluetooth Headphone</a></li>
      </ul>
    </li>
    <li>
      <a class="dropdown-item" href="#">Speaker</a>
    </li>
  </ul>
</li>



          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>

              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                <li class="nav-item">
                  <a class="nav-link" href="login.php">
                    <i class="bi bi-person me-1"></i>Sign In
                  </a>
                </li>
              </li>
              <li class="dropdown-submenu">
                <li class="nav-item">
                  <a class="nav-link" href="register.php">
                    <i class="bi bi-person me-1"></i>Sign Up
                  </a>
                </li>
              </li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="searchDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-search"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-search">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Go</button>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="full-banner">
 <img src="R47.png" alt="Banner R47" class="banner-img" />
 <a href="#produk" class="banner-button">Lihat Selengkapnya</a>
</div>
 <div class="the-latest">TERBARU</div>

<div class="carousel-container">
  <button class="nav-button nav-prev" onclick="scrollCarousel(-1)">&#10094;</button>
  
  <div class="carousel-track" id="carouselTrack">
    <div class="card">
      <img src="miaw.svg" class="card-img-top" alt="aug">
    </div>
    <div class="card">
      <img src="A66.png" class="card-img-top" alt="66">
    </div>
    <div class="card">
      <img src="ier.png" class="card-img-top" alt="ier">
    </div>
  </div>
  
  <button class="nav-button nav-next" onclick="scrollCarousel(1)">&#10095;</button>
</div>

<script>
  function scrollCarousel(direction) {
    const track = document.getElementById('carouselTrack');
    const cardWidth = track.querySelector('.card').offsetWidth + 20; 
    track.scrollBy({
      left: direction * cardWidth,
      behavior: 'smooth'
    });
  }
</script>

<div class="the-latest">  TERLARIS </div>


  <div class="product-list">
    <div class="product-card">
      <img src="3pro.png" alt="pro2">
      <p class="title">Audiora earbuds 3 pro</p>
      <p class="price">Rp. 3,099,000</p>
      <p class="rating">★★★★☆</p>
    </div>
    <div class="product-card">
      <img src="airdora.png" alt="air">
      <p class="title">Airdora Max Wireless</p>
      <p class="price">Rp. 6,399,000</p>
      <p class="rating">★★★☆☆</p>
    </div>
    <div class="product-card">
      <img src="2black.png" alt="Speaker">
      <p class="title">Audiora 2 maxi</p>
      <p class="price">Rp. 9,399,000</p>
      <p class="rating">★★★★☆</p>
    </div>
    <div class="product-card">
      <img src="h7.png" alt="game">
      <p class="title">Indora H7 Wireless</p>
      <p class="price">Rp. 8,999,000</p>
      <p class="rating">★★★★☆</p>
    </div>
  </div>
</div>

<div class="the-latest"> OFFERS </div>
<div class="product-card-horizontal">
  <img src="reg.png" alt="offer" class="product-image">
  <div class="product-info">
    <p class="price">Dapatkan benefitnya</p>
    <p class="title">Register ke Audiora sekarang!</p>
    <p class="description">Daftarkan Membership Audiora Anda. Dapatkan berbagai keuntungan eksklusif yang tidak bisa Anda temuin di tempat lain.</p>
  </div>
</div>


</body>
</html>
