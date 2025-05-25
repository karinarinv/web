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
  <title>AUDIORA Privacy Policy</title>
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
      color: #ccc;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    a {
      color: #EEE2DF;
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
    <h1>Privacy Policy</h1>

    <p>At AUDIORA, we are committed to protecting your privacy. This policy outlines how we collect, use, and safeguard your personal information.</p>

    <div class="section-title">1. Information We Collect</div>
    <ul>
      <li>Personal details (name, email, phone number) when you create an account or contact us</li>
      <li>Purchase history and device registration information</li>
      <li>Usage data from our website and services</li>
    </ul>

    <div class="section-title">2. How We Use Your Information</div>
    <ul>
      <li>To process purchases and service requests</li>
      <li>To provide customer support</li>
      <li>To improve our products and user experience</li>
      <li>To send service updates or promotional offers (with your consent)</li>
    </ul>

    <div class="section-title">3. Data Protection</div>
    <p>We implement a variety of security measures to maintain the safety of your personal information. Your data is stored in secured systems and access is limited to authorized personnel only.</p>

    <div class="section-title">4. Sharing of Information</div>
    <p>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties except when necessary to fulfill your requests or when legally required.</p>

    <div class="section-title">5. Cookies</div>
    <p>Our website may use cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings.</p>

    <div class="section-title">6. Your Rights</div>
    <p>You have the right to access, correct, or delete your personal information. Please contact us if you wish to do so.</p>

    <div class="section-title">7. Changes to This Policy</div>
    <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date.</p>

    <p>If you have any questions or concerns about this Privacy Policy, please contact our support team at <a href="https://forms.gle/nXuweVaZuu4HbYnY6">support@audiora.id</a>.</p>
  </div>

  <footer>
    &copy; 2025 AUDIORA. All rights reserved. | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php">Terms & Conditions</a>
  </footer>

</body>
</html>
