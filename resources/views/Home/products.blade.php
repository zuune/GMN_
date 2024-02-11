<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/css/products.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Document</title>
</head>

<body>

    @include('Home.Partials.navbar')

    <div class="img-container">
        <img src="./assets/images/Img(4).png" alt="" class="img-fluid">
        <div class="overlay">
            <p class="fw-bold fs-1">PRODUCTS</p>
            {{-- <i class=" fs-3">OUR PRODUCTS</> --}}
        </div>
    </div>

    <div class="wrapper">
        <div class="mt-5">
            <p id="titleProduct" class="fs-5 mb-0">Our Products</p>
            <p style="color: #E28D26; font-style:normal;" class="">PRODUCTS WE PROVIDE</p>
        </div>
        {{-- <div class="searching">
            <i data-feather="search" class="search"></i>
            <input type="text" class="rounded-5 shadow input fs-5" placeholder="Search">
        </div> --}}
    </div>

    <div class="content-wrapper mt-5">

        @foreach ($products as $item)
        <a href="/products/detail/{{ Crypt::encrypt($item->id) }}" class="card-wrapper">
            <img src="{{ asset($item->image->first()->image) }}" alt="">
            <div>
                <p class="fs-5">{{ $item->product_name }}</p>
            </div>
        </a>
        @endforeach


    </div>

    {{-- <nav aria-label="Page navigation example" class="mt-5">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <!-- Tambahkan item pagination sesuai kebutuhan -->
        </ul>
    </nav> --}}

    @include('Home.Partials.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>