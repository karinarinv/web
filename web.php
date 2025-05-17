<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="web.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
  <title>Audiora</title>

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-bar">
    <div class="container-fluid">
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
                  <li><a class="dropdown-item" href="#">Wired Headphone</a></li>
                  <li><a class="dropdown-item" href="#">Gaming Headphone</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Speaker</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Bluetooth</a></li>
                  <li><a class="dropdown-item" href="#">Wired Speaker</a></li>
                </ul>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promo</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person me-1"></i>Login
            </a>
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
</body>
</html>
