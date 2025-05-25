<?php
include 'koneksi.php';
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="about.css" />
  <title>About us</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-center">
      <a class="navbar-brand" href="web.php">AUDIORA</a>
    </div>
  </nav>

  <div class="full-banner">
    <img src="us.svg" alt="Banner R47" class="banner-img" />
  </div>

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us - JETE</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <section class="values-section">
  <div class="atmin"> OUR VALUES </div>
    <div class="values-container">
      <div class="value-card">
       <h3><i class="fa-solid fa-earth-asia"></i></h3>
        <p><strong>Our Value</strong><br>Beneficial to the nation and state</p>
      </div>
      <div class="value-card">
        <h3><i class="fa-solid fa-handshake"></i></h3>
        <p><strong>Our Value</strong><br>Integrity, honesty and trustworthiness</p>
      </div>
      <div class="value-card">
            <h3><i class="fa-solid fa-chart-simple"></i></h3>
        <p><strong>Our Value</strong><br>Valuing and fostering development</p>
      </div>
      <div class="value-card">
            <h3><i class="fa-solid fa-chalkboard-user"></i></i></h3>
        <p><strong>Our Value</strong><br>Learning and Striving for Excellence</p>
      </div>
      <div class="value-card">
            <h3><i class="fa-solid fa-heart-circle-check"></i></h3>
        <p><strong>Our Value</strong><br>Best service and WOW</p>
      </div>
    </div>
  </section>
<br>
  <section class="vision-mission">
  <div class="atmin"> OUR VISION AND MISSION </div>
  <div class="tabs-container">
    <div class="tab-content" id="vision">
      <h3>Company Vision</h3>
      <p>To be Indonesia's foremost audio technology brand, delivering immersive sound experiences that inspire creativity and connect people through music.</p>
    </div>
    <div class="divider"></div>
    <div class="tab-content" id="mission">
      <h3>Company Mission</h3>
      <p>To design innovative, high-quality, and affordable audio products that empower users to enjoy superior sound, backed by exceptional customer support and a strong nationwide presence.</p>
    </div>
  </div>
</section>


<br>
<div class="atmin"> MEET THE PROJECT PARTNERS </div>
 <section class="value-section">
    <div class="image-container">
      <img src="https://i.pinimg.com/736x/30/3b/f6/303bf68a8dcb75c94f78034163ba8dc5.jpg" alt="Audiora Profile" />
      <a href="https://www.instagram.com/karinarinv" target="_blank" class="ig-link">
        <i class="fab fa-instagram"></i> <span>@Karinarinv</span>
      </a>
    </div>
    <div class="text-container">
      <h2>UI Design Creator</h2>
      <p><strong>Putri Karina Tumanggor</strong></p>
      <p>NIM : 124240047<p>
      <p>
        Putri Karina Tumanggor adalah mahasiswa Sistem Informasi semester 2 yang memiliki passion dalam desain UI/UX dan berkontribusi besar dalam menciptakan tampilan website Audiora yang menarik dan user-friendly.
      </p>
    </div>
  </section> 

<section class="value-section reverse">
  <div class="image-container">
    <img src="https://i.pinimg.com/736x/a6/ae/66/a6ae6698ca5b17380b929be3619a343a.jpg" alt="Audiora Profile 2" />
    <a href="https://www.instagram.com/danu.amn" target="_blank" class="ig-link">
      <i class="fab fa-instagram"></i> <span>@danu.amn</span>
    </a>
  </div>
  <div class="text-container">
    <h2>System Function Implementer</h2>
    <p><strong>SEPTO DANU AYMAN</strong></p>
    <p>NIM : 124240051<p>
    Septo Danu Ayman Mahasiswa SI semester 2 asal bekasi yang berusaha keras membangun audiora agar menghasilkan website yang bermanfaat bagi user </p>
  </div>
</section>

</body>
</html>

</body>
</html>
