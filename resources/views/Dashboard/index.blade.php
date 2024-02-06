<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Overview - GMN Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/logo.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">


</head>

<body>

  @include('Dashboard.Partials.sidebar');

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row card-container">
          <div class="col-lg-6 col-md-8 col-sm-10 card mx-2 p-3">

              <div class="card-title" style="margin-left: 1rem;">Products</div>
                <div class="d-flex card-body align-items-center">
                  <span class="circle rounded-circle me-4 d-flex justify-content-center align-items-center" style="background-color: #F2F2F2; width: 60px; height: 60px;">
                    <img src="/assets/icon/Sell.png" alt="" class="img-fluid" width="39px">
                  </span>
                  <div class="card-description">
                    <p class="fs-3 mb-1">{{ count($products) }}</p>
                    <div class="date">{{ $products->last()->created_at->format('d F Y') }}</div>
                  </div>
                </div>

          </div>

          <div class="col-lg-6 col-md-8 col-sm-10 card mx-2 p-3">

            <div class="card-title" style="margin-left: 1rem;">Articles</div>
              <div class="d-flex card-body align-items-center">
                <span class="circle rounded-circle me-4 d-flex justify-content-center align-items-center" style="background-color: #F2F2F2; width: 60px; height: 60px;">
                  <img src="/assets/icon/Page.png" alt="" class="img-fluid" width="39px">
                </span>
                <div class="card-description">
                  <p class="fs-3 mb-1">{{ count($articles) }}</p>
                  <div class="date">{{ $articles->last()->created_at->format('d F Y') }}</div>
                </div>
              </div>

        </div>

        <div class="col-lg-6 col-md-8 col-sm-10 card mx-2 p-3">

          <div class="card-title" style="margin-left: 1rem;">Projects</div>
            <div class="d-flex card-body align-items-center">
              <span class="circle rounded-circle me-4 d-flex justify-content-center align-items-center" style="background-color: #F2F2F2; width: 60px; height: 60px;">
                <img src="/assets/icon/Project.png" alt="" class="img-fluid" width="39px">
              </span>
              <div class="card-description">
                <p class="fs-3 mb-1">{{ count($projects) }}</p>
                <div class="date">{{ $projects->last()->created_at->format('d F Y') }}</div>
              </div>
            </div>

      </div>


       
      </div>
    </section>

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>