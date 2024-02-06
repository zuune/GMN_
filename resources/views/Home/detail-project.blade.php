<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/detailProjects.css">
  <link rel="stylesheet" href="/assets/css/style-home.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <title>Project {{ $project->project_name }}</title>
</head>

<body>
  <!-- Navbar -->
  @include('Home.Partials.navbar')

  <div class="img-container">
    <img src="/assets/images/Img-3.png" alt="" class="img-fluid">
    <div class="overlay">
      <p class="fw-bold fs-4">PROJECT</p>
      <i class=" fs-3">{{ $project->project_name }}</>
    </div>
  </div>

  <div class="content-wrapper"  >
    <div class="content d-flex flex-column gap-2">
      <div class="client d-flex">
        <p style="color: #E28D26;" class="d-flex"> Client <span class="me-5" style="color: #E28D26;">:</span></p>
        <p>{{ $project->client }}</p>
      </div>
      <div class="location">
        <p><span style="color: #E28D26;">Location <span class="ms-2 me-5">:</span></span>{{ $project->location }}</p>
      </div>
      <p>{!! $project->body !!}</p>
    </div>
    <img src="{{ asset($project->image->first()->image) }}" alt="" class="img-fluid m-5" width="400px">
  </div>

  @include('Home.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>