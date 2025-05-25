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
  <title>AUDIORA Warranty Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #EEE2DF;
      color: #5B61B2;
    }

    .header {
      background-color: #5B61B2;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .content {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .content h1 {
      font-size: 26px;
      margin-bottom: 10px;
    }

    .content p {
      margin-bottom: 15px;
    }

    .section-title {
      font-size: 20px;
      margin-top: 30px;
      border-left: 4px solid #5B61B2;
      padding-left: 10px;
      color: #5B61B2;
    }

    ul {
      margin-left: 20px;
    }

    footer {
      background-color: #EEE2DF;
      color: #5B61B2;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    a {
      color: #5B61B2;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>

  <div class="header">
    <h2>AUDIORA Support</h2>
  </div>

  <div class="content">
    <h1>Warranty Information for AUDIORA Products</h1>
    <p>This article provides important details about the warranty policy for AUDIORA audio devices, including speakers, headphones, and accessories.</p>

    <div class="section-title">Warranty Period</div>
    <p>All AUDIORA products come with a standard <strong>1-year limited warranty</strong> from the date of purchase.</p>

    <div class="section-title">What Is Covered?</div>
    <ul>
      <li>Manufacturing defects in materials and workmanship</li>
      <li>Non-functional internal components (e.g., drivers, Bluetooth chips)</li>
      <li>Charging or battery issues not caused by misuse</li>
    </ul>

    <div class="section-title">What Is Not Covered?</div>
    <ul>
      <li>Physical damage caused by drops, accidents, or improper handling</li>
      <li>Water or moisture damage unless stated as waterproof</li>
      <li>Damage due to unauthorized repair or modification</li>
      <li>Normal wear and tear</li>
    </ul>

    <div class="section-title">How to Claim Warranty</div>
    <p>To request warranty service, please prepare the following:</p>
    <ul>
      <li>Proof of purchase (receipt or invoice)</li>
      <li>Product model and serial number</li>
      <li>Clear description of the issue</li>
    </ul>
    <p>Then contact our support team at <a href="https://forms.gle/nXuweVaZuu4HbYnY6">support@AUDIORA.id</p>

    <div class="section-title">Service Time</div>
    <p>Typical service and replacement process takes about 5-10 business days depending on stock availability and shipping location.</p>
<p>For more information, visit our <a href="help.php">Help Center</a></p>

  <footer>
    &copy; 2025 AUDIORA. All rights reserved. | <a href="privacy.php">Privacy Policy</a> | <a href="term.php">Terms & Conditions</a>
  </footer>

</body>
</html>
