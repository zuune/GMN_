<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GMN</title>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/style-home.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Icons Google -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style type="text/css">
        .projects-container {
            overflow: hidden;
        }

        .card-wrapper {
            display: flex;
            transition: transform 0.5s ease;
        }

        .card {
            width: 300px;
            margin: 0 10px;
        }
    </style>

</head>

<body class="bg-white">

    @include('Home.Partials.navbar')


    <!-- hero -->
    <div class="video-header">

        <video playsinline autoplay muted loop>
            <source src="/assets/folder/preview2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="overlay">

            <div class="text">
                <h2 class="header" style="font-family: Roboto, Arial, sans-serif;">PT GERBANG MULTINDO NUSANTARA</h2>
                <p style="font-family: Roboto, Arial, sans-serif;">
                    A pioneer of renewable energy services in Indonesia.<br>
                    Established on 1994.
                </p>
            </div>

            <div class="data">
                <ul>
                    <li class="d-sm-flex align-items-center pb-4 mt-2">
                        <img src="assets/image/map.png" alt="">
                        <div class="desc">
                            <h4 style="font-family: Roboto, Arial, sans-serif;">94</h4>
                            <p style="margin-top: -1rem; font-family: Roboto, Arial, sans-serif;">Cities in Indonesia</p>
                        </div>
                    </li>
                    <li class="d-sm-flex align-items-center pb-4 mt-2">
                        <img src="assets/img/Vector.png" alt="">
                        <div class="desc">
                            <h4 style="font-family: Roboto, Arial, sans-serif;">9.073.775 kWp</h4>
                            <p style="margin-top: -1rem; font-family: Roboto, Arial, sans-serif;">PV Installed</p>
                        </div>
                    </li>
                    <li class="d-sm-flex align-items-center pb-4 mt-2">
                        <img src="assets/img/Icon.png" alt="">
                        <div class="desc">
                            <h4 style="font-family: Roboto, Arial, sans-serif;">7.259.020 kWh</h4>
                            <p style="margin-top: -1rem; font-family: Roboto, Arial, sans-serif;">Green Energy</p>
                        </div>
                    </li>
                    <li class="d-sm-flex align-items-center pb-4 mt-2">
                        <img src="assets/img/CO2.png" alt="">
                        <div class="desc">
                            <h4 style="font-family: Roboto, Arial, sans-serif;">5.630.277 Ton</h4>
                            <p style="margin-top: -1rem; font-family: Roboto, Arial, sans-serif;">Estimated Carbon<br>Emission Reduction</p>
                        </div>
                    </li>
                    <li class="d-sm-flex align-items-center pb-4 mt-2">
                        <img src="assets/img/Tree.png" alt="">
                        <div class="desc">
                            <h4 style="font-family: Roboto, Arial, sans-serif;">341</h4>
                            <p style="margin-top: -1rem; font-family: Roboto, Arial, sans-serif;">Estimated Trees Planted</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Data Panel Mobile -->
    <div class="data-mobile">
        <div class="row text-center mx-2 my-4">
            <div class="col-12">
                <div class="card-mobile mt-3 text-center rounded-2 p-2"
                    style="box-shadow: 0 0 10px #ddd;">
                    <div class="card-center">
                        <img src="assets/image/map.png" style="width: 50px;" alt="">
                        <div class="card-body mt-2">
                            <h5 style="color: #0395D9;font-size: medium; font-family: Roboto, Arial, sans-serif;">94</h5>
                            <p style="margin: 0;font-size: small; font-family: Roboto, Arial, sans-serif;">Cities in Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card-mobile mt-3 text-center rounded-2 p-2"
                    style="box-shadow: 0 0 10px #ddd;">
                    <div class="card-center">
                        <img src="assets/img/Vector.png" style="width: 50px;" alt="">
                        <div class="card-body mt-2">
                            <h5 style="color: #0395D9;font-size: medium; font-family: Roboto, Arial, sans-serif;">9.073.775 kWp</h5>
                            <p style="margin: 0;font-size: small; font-family: Roboto, Arial, sans-serif;">PV Installed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card-mobile mt-3 text-center rounded-2 p-2"
                    style="box-shadow: 0 0 10px #ddd;">
                    <div class="card-center">
                        <img src="assets/img/Icon.png" style="width: 40px;" alt="">
                        <div class="card-body mt-2">
                            <h5 style="color: #0395D9;font-size: medium; font-family: Roboto, Arial, sans-serif;">7.259.020 kWh</h5>
                            <p style="margin: 0;font-size: small; font-family: Roboto, Arial, sans-serif;">Green Energy</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-2"></div> -->
            <div class="col-12">
                <div class="card-mobile mt-3 text-center rounded-2 p-2"
                    style="box-shadow: 0 0 10px #ddd;">
                    <div class="card-center">
                        <img src="assets/img/CO2.png" style="width: 50px;" alt="">
                        <div class="card-body mt-2">
                            <h5 style="color: #0395D9;font-size: medium; font-family: Roboto, Arial, sans-serif;">5.630.277 Ton</h5>
                            <p style="margin: 0;font-size: small; font-family: Roboto, Arial, sans-serif;">Estimated Carbon<br>Emission Reduction</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card-mobile mt-3 text-center rounded-2 p-2"
                    style="box-shadow: 0 0 10px #ddd;">
                    <div class="card-center">
                        <img src="assets/img/Tree.png" style="width: 30px;" alt="">
                        <div class="card-body mt-2">
                            <h5 style="color: #0395D9;font-size: medium; font-family: Roboto, Arial, sans-serif;">341</h5>
                            <p style="margin: 0;font-size: small; font-family: Roboto, Arial, sans-serif;">Estimated Trees Planted</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-2"></div> -->
        </div>
    </div>
    <!-- End Data Panel -->

    <!-- about -->
    <div class="container-fluid value" style="margin-top: 8rem;">
        <div class="head d-sm-flex justify-content-between mx-5 align-items-end flex-wrap">

                <div class="title" style="margin: 0; padding: 0;">
                    <h3 style="font-family: Roboto, Arial, sans-serif;">Building high-value, cutting edge <br>
                        system integrator</h3>
                </div>
    
                <div class="subtitle">
                    {{-- <p>By using the services and services we provide,<br>
                        because we;</p> --}}
                </div>


        </div>
        <div class="row d-flex justify-content-around flex-wrap mx-2 mt-5">
            <div class="kotak col-lg-3 mt-4">
                <div class="isi">
                    <img src="assets/img/value/Vector.png" alt="" class="mb-4">
                    <p style="font-family: Roboto, Arial, sans-serif;">Professional and<br>experiment</p>
                </div>
            </div>
            <div class="kotak col-lg-3 mt-4">
                <div class="isi">
                    <img src="assets/img/value/Vector-1.png" alt="" class="mb-4">
                    <p style="font-family: Roboto, Arial, sans-serif;">High quality</p>
                </div>
            </div>
            <div class="kotak col-lg-3 mt-4">
                <div class="isi">
                    <img src="assets/img/value/Vector-2.png" alt="" class="mb-4">
                    <p style="font-family: Roboto, Arial, sans-serif;">Best services</p>
                </div>
            </div>
            <div class="kotak col-lg-3 mt-4">
                <div class="isi">
                    <img src="assets/img/value/Vector-3.png" alt="" class="mb-4">
                    <p style="font-family: Roboto, Arial, sans-serif;">Putting customers<br>first</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Services -->
    <div class="container-fluid services" style="margin-top: 7rem;">

        <div class="row mx-5 ">
            <div class="col-lg-5 service-card d-flex justify-content-center align-items-center">
                <div class="image"></div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 service-desc mx-auto">
                <div class="service-text">
                    <div class="title">
                        <h5 id="titleService">Our Services</h5>
                    </div>
                    {{-- <div class="subtitle">
                        <p style="font-family: Roboto, Arial, sans-serif;">Some of the activity services that can<br>provide. <a href="/services"
                                class="link-see">See More <img style="transform: scale(0.5);"
                                    src="assets/img/arrow-right-small.png" alt=""></a>
                        </p>
                    </div> --}}
                </div>
                <div class="service-kotak">
                    <div class="row">
                        <div class="col-sm-5 kotak k-kecil ">
                            <p style="font-family: Roboto, Arial, sans-serif;">Engineering</p>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 kotak k-kecil">
                            <p style="font-family: Roboto, Arial, sans-serif;">Procurement</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5 kotak k-kecil">
                            <p style="font-family: Roboto, Arial, sans-serif;">Construction</p>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 kotak k-kecil">
                            <p style="font-family: Roboto, Arial, sans-serif;">Maintenance</p>
                        </div>
                    </div>
                    {{-- <div class="row mt-4">
                        <div class="col-sm-5 kotak k-kecil">
                            <p style="font-family: Roboto, Arial, sans-serif;">Manufacturing</p>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 kotak k-kecil">
                            <p style="font-family: Roboto, Arial, sans-serif;">Maintenance</p>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>


    </div>


    <!-- Projects -->
    <div class="container-fluid projects mt-5" id="containerProjects">
        <div class="d-sm-flex justify-content-between mx-5 flex-wrap align-items-end">
            <div class="head-projects">
                <div class="title d-flex align-items-center justify-content-between">
                    <div class="title">
                        <h4 id="titleProject">Our Projects</h4>
                    </div>
                    {{-- <a href="/projects">
                        <p class="mt-2" style="font-family: Roboto, Arial, sans-serif;">See More <img style="transform: scale(0.5);"
                                src="assets/img/arrow-right-small.png" alt=""> </p>
                    </a> --}}
                </div>
                <div class="subtitle">
                    <p id="subtitleProject">Projects we have worked on.</p>
                </div>
            </div>

            <div class="direction">
                <button style="transform: scale(0.8);" class="previous btn" onclick="prevSlide()">
                    <img src="assets/img/arrow-left.png" alt="">
                </button>
                <button style="transform: scale(0.8);" class="next btn text-center" onclick="nextSlide()">
                    <span style="font-family: Roboto, Arial, sans-serif;">Next</span>
                    <img class="ms-3" src="assets/img/arrow-right.png" alt="">
                </button>
            </div>
        </div>

        <div class="projects-container mx-5 mt-5">
            <div class="card-wrapper" id="cardWrapper">


                @foreach ($projects as $item)
                <a  href="/projects/detail/{{ Crypt::encrypt($item->id) }}" style="text-decoration: none;">
                    <div class="card" id="projectCard">
                        <!-- Card Content -->
                        <div class="d-flex justifyc-content-center align-items-center" style="overflow: hidden; height: 400px;">
                            <img src="{{ asset($item->image->first()->image) }}" class="card-img-top" alt="..." style="width: 100%;">

                        </div>
                        <div class="card-body p-4">
                            <p class="card-text" style="font-family: Roboto, Arial, sans-serif;">{{ $item->project_name }}</p>
                            <div class="d-sm-flex justify-content-between align-items-start brand flex-wrap">
                                <p class="name"  style="font-family: Roboto, Arial, sans-serif; font-size: 14px;">{{ $item->client }}</p>
                                <span class="d-flex location">
                                    <img src="/assets/img/Location.png" alt="" style="margin-top: -5px;">
                                    <p class="ms-2"  style="font-family: Roboto, Arial, sans-serif; font-size: 14px;">{{ $item->location }}</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                @endforeach
                


                <!-- Add more cards as needed -->
            </div>

            <div class="row mt-5 text-center">
                <div class="col-12">
                    <a href="/assets/folder/project.pdf" class="fs-5" download="project.pdf" style="cursor: pointer; color: #0395D9;">
                        See more..
                    </a>
                </div>

            </div>
        </div>
    </div>


    <!-- products -->
    <div class="container-fluid products  carousel slide mt-5" id="carouselExampleControls1" data-bs-ride="carousel">
        {{--      style="margin-top: 10rem;" --}}
        <div class="products-title text-center">
            <h2 id="titleProduct">Our Products</h2>
        </div>
        <div class="products-button row d-flex align-items-center mb-2 text-center">
            <div class="col-lg-4 col-sm-0"></div>
            <h2 class="col-lg-4 col-sm-8 text-center " id="subtitleProduct">Products we provide.
            </h2>
            <a href="/products" aria-colspan="col-lg-4 col-sm-4"
                style="transform: scale(0.6); text-decoration: none; font-family: Roboto, Arial, sans-serif;" class="next btn text-center mx-auto">
                <span style="font-family: Roboto, Arial, sans-serif;">See More</span> 
                <img class="ms-3" src="assets/img/arrow-right.png" alt="">
            </a>
        </div>
        {{-- <div class="carousel-inner">
            @foreach ($articles as $key => $article)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="row mx-4 mt-4">
                    @foreach ($article->image as $image)
                        <div class="col-md-6">
                            <div class="">
                                <div class="d-flex justify-content-center align-items-center" style="width: 492px; height: 329px; overflow: hidden;">
                                    <img style="width: 492px;" src="{{ asset($image->image) }}">
                                
                                </div>
                                <h3 class="mt-2">{{ $article->title }}</h3>
                                <p style="font-style: italic;">{{ $article->created_at->format('d F Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach --}}
        <div class="carousel-inner" style="flex-direction: row;">
            @foreach ($products->chunk(3) as $chunk)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="row mx-4 mt-4">
                    @foreach ($chunk as $product)
                        <div class="col-md-4 mb-5">  
                            <div class="p-4" style="box-shadow: 4px 7px 12px #ddd;">
                                <a href="/products/detail/{{ Crypt::encrypt($product->id) }}" class="text-decoration-none" style="color: #000;">
                                    <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 329px; overflow: hidden;">
                                        <img style="width: 100%;" src="{{ asset($product->image->first()->image) }}" alt="{{ $product->title }}">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        </div>
        

            
        </div>
        <div class="products-arrow mt-5 text-center mx-5" >
            <button style="transform: scale(0.8);" class="previous btn" data-bs-target="#carouselExampleControls1"
                data-bs-slide="next" type="button" onclick="aktifElement()">
                <img src="assets/img/arrow-left.png" alt="" height="30px">
            </button>
            <button style="transform: scale(0.8);" class="previous flip btn" data-bs-target="#carouselExampleControls1"
                data-bs-slide="prev" type="button" onclick="aktifElement()">
                <img src="assets/icon/next.png" alt="" height="30px">
            </button>
        </div>
    </div>
    <!-- end products -->

    <!-- Clients -->
    <div class="container-fluid products clients mt-5" style=" font-family: Roboto, Arial, sans-serif;">
        <div class="products-title text-center">
            <h2 id="titleClient">Our Clients</h2>
        </div>
        {{-- <div class="products-button text-center mt-4 ">
            <h2 style="color: #E28D26;font-style: italic; font-weight: 700; font-family: Roboto, Arial, sans-serif;"  id="subtitle-client">Clients entrusted to
                us.
            </h2>
        </div> --}}
    </div>
    <div class="container-client mt-5">
        <img src="assets/image/asco.jpeg" alt="" class="card-client" width="20">
        <img src="assets/image/caa_logo.png" alt="" class="card-client" width="20">
        <img src="assets/image/fokusindo.jpeg" alt="" class="card-client" width="20">
        <img src="assets/image/gayolues.png" alt="" class="card-client" width="20">
        <img src="assets/image/hd-logo-telkomsel-32579.png" alt="" class="card-client" width="20">
        <img src="assets/image/Innovate-UK.jpg" alt="" class="card-client" width="20">
        <img src="assets/image/logo_esdm.png" alt="" class="card-client" width="20">
        <img src="assets/image/suryaenergi.png" alt="" class="card-client" width="20">
        <img src="assets/image/yayasangerak.png" alt="" class="card-client" width="20">
        <img src="assets/image/aliansi.PNG" alt="" class="card-client" width="20">
    </div>
    <div class="container-client">
        <img src="assets/image/andor.PNG" alt="" class="card-client" width="20">
        <img src="assets/image/anekajaya.png" alt="" class="card-client" width="20">
        <img src="assets/image/gayolues.png" alt="" class="card-client" width="20">
        <img src="assets/image/bina.jpeg" alt="" class="card-client" width="20">
        <img src="assets/image/gfa.jpeg" alt="" class="card-client" width="20">
        <img src="assets/image/jaringansolsui.jpeg" alt="" class="card-client" width="20">
        <img src="assets/image/LOGO ADZKIA.png" alt="" class="card-client" width="20">
        <img src="assets/image/sanghiang.png" alt="" class="card-client" width="20">
        <img src="assets/image/alfary.jpeg" alt="" class="card-client" width="20">
        <img src="assets/image/zte.png" alt="" class="card-client" width="20">
    </div>
    <!-- end Clients -->


    <!-- ready to work with us -->
    <div class="container-fluid cta mt-5 d-flex align-items-center justify-content-center flex-column">
        <h1 class="text-white" style="font-family: Roboto, Arial, sans-serif;">Ready to Work With Us?</h1>
        <a href="" class="mt-5 rounded-5 fw-bold button-cta text-dark"
            style="background-color: white;border: none;padding: 15px 30px;text-decoration: none; font-family: Roboto, Arial, sans-serif;">Contact Us</a>
    </div>
    <!-- end ready to work with us -->

    <!-- articles -->
    <div class="container-fluid products Articles mx-5 mt-5" style="font-family: Roboto, Arial, sans-serif;">
        
        <div class="products-title text-center text-sm-center text-lg-start">
            <h5 id="titleArticle">Article</h5>
        </div>
        
        <div class="products-button row d-flex text-center text-lg-start align-items-center text-sm-center">
            <h2 class="col-lg-4" id="subtitleArticle">Our Latest
                News
            </h2>
            <div class="col-lg-3"></div>
            <div class="col-lg-4 p-0 text-lg-end">
                <a href="/articles" style="text-decoration: none; font-family: Roboto, Arial, sans-serif;" class="next btn text-center btn-articles">
                    <span style="font-family: Roboto, Arial, sans-serif;">See More</span>
                    <img class="ms-3" src="assets/img/arrow-right.png" alt="">
                </a>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
                @foreach ($articles->chunk(3) as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row mt-4">
                            @foreach ($chunk as $article)
                                <div class="col-md-4">  
                                    <div class="">
                                        <a href="/articles/detail/{{ Crypt::encrypt($article->id) }}" class="text-decoration-none" style="color: #000; font-family: Roboto, Arial, sans-serif;">
                                            <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 329px; overflow: hidden; font-family: Roboto, Arial, sans-serif;">
                                                <img style="width: 100%;" src="{{ asset($article->image->first()->image) }}" alt="{{ $article->title }}">
                                            </div>
                                            <h3 class="mt-2" style="font-family: Roboto, Arial, sans-serif;">{{ $article->title }}</h3>
                                            <p style="font-style: italic; font-family: Roboto, Arial, sans-serif;">{{ $article->created_at->format('d F Y') }}</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="products-arrow mt-5 text-center mx-5">
            <button style="transform: scale(0.8);" class="previous btn" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <img src="assets/img/arrow-left.png" alt="">
            </button>
            <button style="transform: scale(0.8);" class="previous flip btn" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <img src="assets/img/arrow-left.png" alt="">
            </button>
        </div>
    </div>
    <!-- end articles -->

    <!-- want to know more -->
    <div class="container-fluid wta mt-5 d-flex align-items-center justify-content-center flex-column">
        <div class="mid">
            <h3 class="text-white fs-1" style="font-style: italic; font-family: Roboto, Arial, sans-serif;">Want to know more?</h3>
            <div class="wta-sub text-start mt-5 row">
                <div class="col-2">
                    <img class="d-inline" src="assets/img/wtm-icon.png" alt="" style="transform: scale(0.6); margin-top: -10px; ">
                </div>
                <div class="col-10">
                    <p class="d-inline text-white fs-3" style="font-family: Roboto, Arial, sans-serif;">please download our company profile
                        pdf file <a class="text-white" href="">here</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- want to know more -->

    <!-- footer -->
    @include('Home.Partials.footer')


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
    <!-- ICONS -->
    <script>
        feather.replace();
    </script>





</body>

</html>