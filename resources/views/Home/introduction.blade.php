<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/introduction.css">
    <link rel="stylesheet" href="/assets/css/style-home.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Introduction</title>
</head>

<body>
    <!-- Navbar -->
    @include('Home.Partials.navbar')

    <!-- Hero -->
    <div class="img-container">
        <img src="/assets/image/header-intro.jpg" alt="" class="img-fluid">
        <div class="overlay">
            <p class="fw-bold fs-1">ABOUT US</p>
            <i class=" fs-5">INTRODUCTION</i>
        </div>
    </div>

    <div class="content-container">
        <div class="content">
            <div>
                <p><span style="color: #E28D26;">PT Gerbang Multindo Nusantara (GMN)</span> is a privately owned
                    company. A system integrator, particularly for renewable energy & EE technologies.

                    Initiated by a group of professionals over 30 years whose experiences are in the field of solar PV,
                    solar thermal, micro-hydro, biomass, and energy efficiency.</p>
            </div>

            <img src="/assets/images/Nav-Left.png" alt="" class="img-fluid">
        </div>

        <div class="text-content">
            <p class="header mb-5" style="color: #E28D26;">Vision</p>
            <p class="material-text"> Developing comfortable environment and Renewable Energy. </p>
        </div>
        <div class="text-content">
            <p class="header mb-5" style="color: #E28D26;">Mission</p>
            <p class="material-text">Creating firms in the new and renewable energy sectors to serve the community,
                government, commercial sector, and international institutions through activities: <br>
                1. Design.
                2. Fabrication and assembly.
                3. Equipment procurement, integration, and installation.
                4. Construction and development of new and renewable energy technology systems.
                5. Energy management and accounting, audit, and conservation services.
                6. Community empowerment in the use of renewable energy and energy conservation.</p>
            <p class="material-text">Make efforts to develop human resources to increase capabilities in the field of
                innovative renewable energy technologies, as well as the quality of services and goods, by: <br>
                1. Practical and on-the-job training.
                2. Level education at home and abroad.
                3. Attendance at relevant events such conferences and workshops.</p>
            <p class="material-text">Contributing to attempts to convey the success of using new renewable energy to
                the larger community through: <br>
                1. Involvement in numerous relevant events: exhibitions, lectures, and workshops.
                2. Developing the community's capacity to manage new and renewable energy technology properly.</p>
        </div>
    </div>

    @include('Home.Partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>