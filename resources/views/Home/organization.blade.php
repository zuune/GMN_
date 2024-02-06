<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/organization.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Organization</title>
</head>

<body>
    @include('Home.Partials.navbar')

    <!-- Hero -->
    <div class="img-container">
        <img src="/assets/image/organization.jpg" alt="" class="img-fluid">
        <div class="overlay">
            <p class="fw-bold fs-1">ABOUT US</p>
            <i class=" fs-5">ORGANIZATION</i>
        </div>
    </div>

    <div class="content-container">
        <p>
            <p style="color: #E28D26; display:inline;">GMN</p> is supported by 27 (twenty seven) personnel and avail to
            minimum 30 (thirty) ex pertise in various fields. The personnel are organized into managerial team,
            professional sections and specialist/supporting staffs/technicians.
        </p>
        <div class="content">
            <div class="d-flex justify-content-center align-items-center" style="overflow: hidden; height: 100%;">
                <img src="/assets/image/pakbambang.JPG" alt="" class="profile-img" style="width: 100%;">
                
            </div>
            <p class="text-content"> <span style="color: #0395D9;">President Director - Gerbang Multindo Nusantara (GMN) 
                </span><br>He oversees operations, project development and marketing, as well as technical issues, to guarantee that projects run smoothly and continuously.
                In 1980, he graduated from Surabaya's "Sepuluh November" Institute of Technology (ITS) with an engineering degree in architecture. He began his career in consulting services linked to housing and spatial planning.
                In the early 1990s, he became interested in the energy industry after participating in GMN project services on energy audits and savings methods in the housing and building sectors.
                He expanded his career into renewable energy, specifically solar photovoltaic, for both urban (e.g., Solar PV Rooftop) and rural (e.g., rural electrification).</p>
        </div>
    </div>
    <div class="content-image container-fluid">
        <img src="/assets/images/Organization.png" alt="" class="img-fluid">
        
    </div>

    @include('Home.Partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>