<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/detailServices.css">
  <link rel="stylesheet" href="/assets/css/style-home.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <title>Document</title>
</head>

<body>
  @include('Home.Partials.navbar')

  <!-- Hero -->
  <div class="img-container">
    <img src="/assets/images/Img (8).png" alt="" class="img-fluid">
    <div class="overlay">
      <p class="fw-bold fs-1">SERVICES</p>
      <i class=" fs-5">Procurement</i>
    </div>
  </div>

  <div class="content">
    <div class="text-content p-5">
      <p class="fs-3"><span style="color: #E28D26; font-weight: 600;">Procurement</span>
        <span style="font-size: 19px">
            Walk through energy audits, as well as detailed energy investigation by measurements and/or testing, i.e. to identify the energy saving potentials and measures. <br>
Feasibility studies for implementation of energy saving measures by the introduction of energy management system and/or energy efficient technologies. <br>
Maintenance services for energy equipment such as: remote area power supply system (RAPS), air conditioning system (including e.g.: chiller, cooling tower, air handling unit - AHU, and fan coil unit - FCU), and heating system (boiler and heat exchanger). <br>
Development of computer-based energy monitoring and accounting systems. <br>
        </span>
    </p>
    </div>

      <img src="/assets/icons/work2.png" alt="Engineering" class="img-fluid p-5">

  </div>

  @include('Home.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>