<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Commerce</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-md" style="background-color: darkslategrey">
      <div class="container">
        <a href="" class="navbar-brand">Dream Stationary</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbar Text" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="index.html" class="nav-link active" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Lacak Paket</a>
            </li>
          </ul>
          <span class="navbar nav ml-auto">
            <form class="container-fluid justify-content-start">
              <a href="#" class="btn btn-outline-warning" role="button">
                <i class="fa fa-shopping-cart" aria-hidden="true">Cart</i>
              </a>
            </form>
          </span>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Start Cart -->
    <section class="bg-light h-100" style="background-color: white">
      <div class="container h-100 py-5">
        <div class="row d-flex justify-content-between align-items-center">
          <div class="col-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h3 class="fw-normal mb-0 text-black">
                <i class="fa fa-shopping-cart" aria-hidden="true">Cart</i>
              </h3>
            </div>
            <!-- Detail Barang -->
            <div class="card rounded-3 mb-4">
              <div class="card-body p4">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="col md-2 col-lg-2 col-xl-2">
                    <img src="iphone.jpg" alt="" class="img-fluid rounded-3" />
                  </div>
                  <div class="col md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2">Iphone</p>
                    <p><span class="text-muted">Color: </span>Darksky</p>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                    <input type="number" class="form-control form-control-sm" id="form1" min="1" none="quantity" value="1" />
                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h5 class="mb-0">Rp. 10.000.000</h5>
                  </div>
                  <div class="co-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-danger">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Detail Barang -->

            <!-- payment button -->
            <div class="d-grid gap-2">
              <button class="btn btn-success" type="button">Proceed Payment</button>
            </div>
            <!-- payment button end -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Cart -->

    <!-- footer -->
    <footer class="bg-dark" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pt-5">
            <h2 class="h2 text-success border-bottom pb-3 border-light logo">Dream Stationary</h2>
            <ul class="list-unstyled text-light footer-link-list">
              <li><i class="fas fa-map-marker-alt fa-fw"></i>Jl. Menuju Kemenangan No.99</li>
              <li>
                <i class="fa fa-phone fa-fw"></i>
                <a href="tel:010-020-0340" class="text-decoration-none">(021) 326 917</a>
              </li>
              <li>
                <i class="fa fa-phone fa-fw"></i>
                <a href="mailto:info@company.com" class="text-decoration-none">info@company.com</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 pt-5">
            <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
            <ul class="list-unstyled text-light footer-link-list">
              <li><a href="index.html" class="text-decoration-none">Home</a></li>
              <li><a href="index.html" class="text-decoration-none">About Us</a></li>
              <li><a href="index.html" class="text-decoration-none">Shop Locations</a></li>
              <li><a href="index.html" class="text-decoration-none">FAQs</a></li>
              <li><a href="index.html" class="text-decoration-none">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="w-100 bg-black py-3">
        <div class="container">
          <div class="row pt-2">
            <div class="col-12">
              <p class="text-left text-light">Copyright &copy; 2022 Dream</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <!-- Bootrstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
