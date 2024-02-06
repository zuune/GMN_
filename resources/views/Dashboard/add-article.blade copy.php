<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Articles  - GMN Dashboard</title>
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
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

</head>

<body>
@include('Dashboard.Partials.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Articles</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="articles.html">Articles</a></li>
          <li class="breadcrumb-item active">Add New Article</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title" style="color: #000;">Form</h5>
                <a href="">
                  <a href="/dashboard/articles" class="fs-6" style="color: #E68924;">Back</a>
                </a>
              </div>

              <!-- General Form Elements -->
              <form method="POST" action="/dashboard/articles/add" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" required id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputSlug" class="col-sm-2 col-form-label">Slug</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" required id="inputSlug">
                  </div>
                </div>
                {{-- <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="">
                  </div>
                </div> --}}
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image[]" multiple>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputBody" class="col-sm-2 col-form-label">Body</label>
                  <div class="col-sm-10">
                    <!-- Quill Editor Default -->
                    <textarea class="form-control" id="body" placeholder="Enter the Description" name="body" style="width: 100%;"></textarea>
                    <!-- End Quill Editor Default -->

                  </div>
                </div>



                <div class="row mb-3">
                  <div class="col-sm-12 justify-content-end d-flex">
                    <button type="submit" class="btn text-white" style="background-color: #E68924;">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>





<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <script>
    $(document).ready(function() {
      // Menangkap perubahan pada field "Title"
      $('#inputText').on('input', function() {
        // Mendapatkan nilai dari field "Title"
        var title = $(this).val().toLowerCase();
  
        // Mengganti spasi dengan tanda dash "-"
        var slug = title.replace(/\s+/g, '-');
  
        // Mengisi nilai slug ke field "Slug"
        $('#inputSlug').val(slug);
      });
    });
  </script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <!-- jQuery -->





</body>

</html>