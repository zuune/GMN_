<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/founder.css">
    <link rel="stylesheet" href="/assets/css/style-home.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Founder</title>
</head>
<body>
    @include('Home.Partials.navbar')

    <!-- Hero -->
    <div class="img-container">
        <img src="/assets/image/header-founder.jpg" alt="" class="img-fluid">
        <div class="overlay">
            <p class="fw-bold fs-1">ABOUT US</p>
            <i class=" fs-5">FOUNDER</i>
        </div>
    </div>

    <div class="content container-fluid">
        <p class="text-content"> <span style="color: #0395D9;">Founder - Gerbang Multindo Nusantara (GMN) </span> <br>
            Mr. Ir. Chayun Budiono, M.Sc.rer.nat, was borned on 1951, in Kebumen, Central Java, Indonesia

Received a bachelor degree in Physics in 1975, and then obtained an engineering degree on Engineering Physics in 1978, from Institut Teknologi Sepuluh Nopember (ITS) of Surabaya.
He was granted an opportunity to pursue a master degree in Renewable Energy System with emphasis on Economics of Energy Supply System from the University of Oldenburg (Germany), and graduated in 1993. 

He has been active in renewable energy development activities since his under-graduation in 1975 where he started his involvement with solar collectors, solar desalination, domestic solar water heating, and solar dryer. Since then, his life been devoted in renewable energy developments and energy conservation activities, particularly those related closely with rural, off-grid and sustainable development.

After his graduation in 1978, he has opportunities to work in many energy related fields at various company and  institutions e.g.: Indonesia State Oil Company (PERTAMINA), Agency for Development and Application of Technology (BPPT) and many private enterprises. He has been providing expertise to a broad range of services in energy planning and auditing, cogeneration in industrial process, and renewable energy development for rural applications (including biomass, solar PV and thermal, and small hydro).

After returning back to Indonesia by end of 1993, he started to work as a freelance consultant in energy related matters. In 1996, together with his 2 other partners, he established a limited company, namely: PT Gerbang Multindo Nusantara (GMN). 

In 2022, Mr. Chayun retired from GMN. After retirement, he is now active as part-time lecturer and trainer on many energy related topics, both online and offline.</p>
       <div class="d-flex justify-content-center p-5" style="overflow: hidden; height: 100%;">
            <img src="/assets/image/founder2.jpg" alt="" class="profile-img">
            
        </div>
    </div>

    @include('Home.Partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>