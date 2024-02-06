<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="/assets/css/login.css">
  <title>Login Page</title>
</head>

<body>

  <div class="container-fluid d-flex align-items-center p-0">
    <div class="col-lg-6 d-flex flex-column align-items-center wrapper">
      <img src="/assets/images/Nav-Left.png" alt="logo" class="img-fluid logo mb-4">
      <p class="text fw-bold fs-4 text-welcome">Welcome to the login page</p>
      <form action="/login" method="post">
        @csrf
        <div class="content mb-3 content-username w-100">
          <label for="username" class="mb-3 label">Username</label>
          <input type="text" class="form-control rounded-pill" placeholder="Username" name="username" id="username">
        </div>
        <div class="content mb-3 w-100">
          <label for="password" class="mb-3 label">Password</label>
          <input type="password" class="form-control rounded-pill" placeholder="Password" name="password" id="password">
          <i data-feather="eye-off" class="eye"></i>
        </div>
        <button class="btn btn-dark rounded-pill" type="submit">Log In</button>
      </div>
      </form>

    <div class="col-lg-6">
      <img src="/assets/image/under-logo.jpg" alt="" class="img-fluid img img-fix-100">
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    feather.replace();
  </script>
  <script src="/assets/js/login.js"></script>
</body>

</html>