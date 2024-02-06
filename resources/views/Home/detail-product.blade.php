<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/detailProducts.css">
  <link rel="stylesheet" href="/assets/css/style-home.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <title>Document</title>
</head>

<body>
  @include('Home.Partials.navbar')

  <div class="img-container">
    <img src="/assets/images/Img(4).png" alt="" class="img-fluid">
    <div class="overlay">
      <p class="fw-bold">PRODUCT</p>
      <i class="">{{ $product->product_name }}</p>
    </div>
  </div>
{{-- 
  <div class="our-customer">
    <p class="fw-bold">OUR CUSTOMER</p>
    <div class="customer-img">
      <img src="/assets/images/Place 2.png" alt="">
      <img src="/assets/images/Place 2.png" alt="">
      <img src="/assets/images/Place 2.png" alt="">
    </div>
  </div> --}}

  <div class="content-wrapper">
    <div class="d-flex justify-content-center align-items-center" style=" overflow: hidden; height: 100%;">
      <img src="{{ asset($product->image->first()->image) }}" alt="" class="img-fluid" style="object-fit: cover; height: 80%;">
    </div>
    <div>
      <p ><span style="color: #E28D26; font-size: 2.8vw">{{ $product->product_name }}</span>
        {!! $product->body !!}
      </p>
    </div>
  </div>

  @include('Home.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>