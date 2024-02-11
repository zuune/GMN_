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
  <title>Service - Maintenance</title>
</head>

<body>
  @include('Home.Partials.navbar')

  <!-- Hero -->
  <div class="img-container">
    <img src="/assets/images/Img (8).png" alt="" class="img-fluid">
    <div class="overlay">
      <p class="fw-bold fs-1">SERVICES</p>
      <i class=" fs-5">Maintenance</i>
    </div>
  </div>

  <div class="content">
    <div class="text-content p-5">
      <p class="fs-3"><span style="color: #E28D26; font-weight: 600;">Maintenance</span>
        <span style="font-size: 19px">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, omnis inventore, libero maiores officiis assumenda autem fuga iste debitis harum asperiores, soluta error nemo quam eius explicabo maxime nulla dolor?<br>
        </span>
    </p>
    </div>

      <img src="/assets/icons/wrench2.png" alt="Engineering" class="img-fluid p-5">

  </div>

  @include('Home.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>