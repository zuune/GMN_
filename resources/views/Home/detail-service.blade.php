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
  <title>SERVICES - ENGINEERING</title>
</head>

<body>
  @include('Home.Partials.navbar')

  <!-- Hero -->
  <div class="img-container">
    <img src="/assets/images/Img (8).png" alt="" class="img-fluid">
    <div class="overlay">
      <p class="fw-bold fs-1">SERVICES</p>
      <i class=" fs-5">ENGINEERING</i>
    </div>
  </div>

  <div class="content">
    <div class="text-content p-5">
      <p class="fs-3"><span style="color: #E28D26; font-weight: 600;">Engineering</span>
        <span style="font-size: 19px">
          Energy supply system, electrical and mechanical design and construction, for private houses, real estates, commercial buildings, and industries. <br>
Planning for reliable, efficient, and rational energy supply systems for remote applications such as: telecommunication systems, village energy supply, home industries, agriculture processing center, drinking water supply, and public health facilities utilizing locally available energy sources like, solar, micro-hydro, wind, biomass and combination of them. <br>
Delivery and installation of technical systems utilizing renewable energy sources for communication sectors (i.e. photovoltaic, micro-hydro), such as: base transceiver station (BTS), repeater station, radio communication (e.g. sea navigation, railway crossing, radio beacon, and highway information system), cathodic protection, traffic signaling (e.g. light house, buoy, barrier flasher), <br>
Planning and supply of system for decentralized power supply systems and rural electrification, such as: stand-alone photovoltaic, micro-hydro power, biomass, wind energy converter, and hybrid power systems. <br>
        </span>
      </p>
    </div>

      <img src="/assets/icons/eng2.png" alt="Engineering" class="img-fluid p-5" >

  </div>

  @include('Home.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>