<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/detailArticle.css">
  <link rel="stylesheet" href="/assets/css/style-home.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <title>Document</title>
</head>

<body>
  @include('Home.Partials.navbar')

  <!-- Hero -->
  <div class="img-container">
    <img src="/assets/image/Img.png" alt="" class="img-fluid">
    <div class="overlay">
      <p class="fw-bold fs-1">ARTICLE</p>
      <i class=" fs-5 ">{{ $article->title }}</>
    </div>
  </div>

  <div class="content">
    <div>
      <p style="color: #E28D26;" class="fw-bold fs-4 mt-3">{{ $article->title }}</>
        <p style="color: #0395D9;" class="fs-4">{{ $article->created_at->format('d F Y') }}</p>
        <p>
          {!! $article->body !!}
        </p>
    </div>
    <img src="{{ asset($article->image->first()->image) }}" alt="" class="img-fluid shadow rounded-2 mx-auto my-4">
  </div>

  @include('Home.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>