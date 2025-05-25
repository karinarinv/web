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
  <meta charset="UTF-8" />
  <title>AUDIORA Terms and Conditions</title>
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
      color: #EEE2DF;
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
      margin-bottom: 20px;
      text-align: center;
      color: #5B61B2;
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
      margin-bottom: 20px;
    }

    p {
      margin-bottom: 15px;
    }

    footer {
      background-color: #5B61B2;
      color: #5B61B2;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    a {
      color: #0056b3;
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
    <h1>Terms and Conditions</h1>

    <p>Welcome to AUDIORA. By accessing or using our products and services, you agree to be bound by the following terms and conditions.</p>

    <div class="section-title">1. Use of Products</div>
    <p>You agree to use AUDIORA products only for their intended purposes and in accordance with any instructions or manuals provided.</p>

    <div class="section-title">2. Warranty</div>
    <p>Our products come with a 1-year limited warranty covering manufacturing defects. The warranty does not cover damage caused by misuse, accidents, or unauthorized modifications.</p>

    <div class="section-title">3. Intellectual Property</div>
    <p>All content, trademarks, and intellectual property related to AUDIORA products and services are owned by AUDIORA and protected by law. Unauthorized use is prohibited.</p>

    <div class="section-title">4. Limitation of Liability</div>
    <p>AUDIORA shall not be liable for any indirect, incidental, or consequential damages arising from the use or inability to use our products.</p>

    <div class="section-title">5. Privacy</div>
    <p>We respect your privacy and handle your data according to our <a href="#">Privacy Policy</a>. Please review it to understand how your information is managed.</p>

    <div class="section-title">6. Changes to Terms</div>
    <p>AUDIORA reserves the right to update or modify these terms at any time without prior notice. Continued use of our products constitutes acceptance of the updated terms.</p>

    <div class="section-title">7. Governing Law</div>
    <p>These terms are governed by the laws of Indonesia. Any disputes will be resolved in the jurisdiction of Indonesian courts.</p>

    <p>If you have any questions about these Terms and Conditions, please contact our support team.</p>

  </div>

  <footer>
    &copy; 2025 AUDIORA. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="terms.php">Terms & Conditions</a>
  </footer>

</body>
</html>
