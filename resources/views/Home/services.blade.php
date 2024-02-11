<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/services.css">
  <link rel="stylesheet" href="/assets/css/style-home.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <title>SERVICES</title>
</head>

<body>
 @include('Home.Partials.navbar')

  <!-- Hero -->
  <div class="img-container">
    <img src="/assets/images/Img (8).png" alt="" class="img-fluid">
    <div class="overlay">
      <p class="fw-bold fs-1">SERVICES</p>
      {{-- <i class=" fs-3">OUR SERVICES</> --}}
    </div>
  </div>

  <div class="card-container d-flex" id="serviceList">
    <a href="/services/detail-1" style="text-decoration: none;"
      class="card d-flex justify-content-center align-items-center shadow p-3">
      <img src="/assets/icons/eng2.png" alt="" class="img-fluid">
      <p style="font-size: 16px" class="fw-semibold mt-5">Engineering</p>
    </a>
    <a href="/services/detail-2" style="text-decoration: none;"
      class="card d-flex justify-content-center align-items-center shadow p-3">
      <img src="/assets/icons/procurement2.png" alt="" class="img-fluid">
      <p style="font-size: 16px" class="fw-semibold mt-5">Procurement</p>
    </a>
    <a href="/services/detail-3" style="text-decoration: none;"
      class="card d-flex justify-content-center align-items-center shadow p-3">
      <img src="/assets/icons/work2.png" alt="" class="img-fluid">
      <p style="font-size: 16px" class="fw-semibold mt-5">Construction</p>
    </a>
    <a href="/services/detail-4" style="text-decoration: none;"
    class="card d-flex justify-content-center align-items-center shadow p-3">
    <img src="/assets/icons/wrench2.png" alt="" class="img-fluid">
    <p style="font-size: 16px" class="fw-semibold mt-5">Maintenance</p>
  </a>
  </div>

  @include('Home.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>