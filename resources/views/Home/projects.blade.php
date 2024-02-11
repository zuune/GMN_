<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/projects.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Projects</title>
</head>

<body>
    @include('Home.Partials.navbar')

    <div class="img-container">
        <img src="/assets/images/Img-5.png" alt="" class="img-fluid">
        <div class="overlay">
            <p class="fw-bold fs-1">PROJECTS</p>
            {{-- <i class=" fs-3">OUR PROJECTS</> --}}
        </div>
    </div>

    <div class="wrapper">
        <div class="mt-5">
            <p id="titleProject" class="fs-5 mb-0">Our Project</p>
            <p style="color: #E28D26; font-style:normal;" class="">WORK REFERENCES</p>
        </div>
        <div class="content-container">
            <div class="map-indonesia">
                <img src="/assets/images/Map Indonesia.png" alt="" class="img-fluid">
                <div class="lokasi">
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>PLTS NTT
                            Client : Pemerintah Provinsi Nusa Tenggara Timur Dinas Energi dan Sumber Daya Mineral
                            Kapacity : 120 kWp and 40 kWp
                            Date : 16 May 2023 - 12 November 2023
                            Location : Sumba Timur, NTT
                        </p>
                    </div>
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>PJUTS INDO 2
                            Client : EBTKE Kementerian ESDM
                            Capacity : 1.816,15 kWp
                            Date : 12 May 2023 - 31 December 2023
                            Location : Wilayah Indonesia 2
                        </p>
                    </div>
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>Solar 2 Wave - Floating PV
                            Client : Innovate UK
                            Date : 1 March 2023 - Present
                            Location : Gili Ketapang Island, East Java
                        </p>
                    </div>
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>Lift Installation
                            Client : Yayasan Adzkia Sumatera Barat
                            Date : 14 July 2022 - 14 February 2023
                            Location : Padang, West Sumatera
                        </p>
                    </div>
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>Tower ZTE/VIP
                            Client : PT. ZTE Indonesia
                            Date : 6 July 2023 - Present
                            Location : Jabodetabek, Sulawesi dan Kalimantan
                        </p>
                    </div>
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>PLTS Kep. Riau
                            Client : PT. Surya Energi Indotama
                            Capacity : 715 kWp
                            Date : 4 April 2023 - 9 October 2023
                            Location : Riau Islands
                        </p>
                    </div>
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>PLTS
                            Client : GFA Consulting Group
                            Capacity : 52 kWp
                            Date : 17 May 2022 - 12 September 2022
                            Location : 5 Politeknik Negeri in Indonesia
                        </p>
                    </div>
                    <div class="caption-lokasi">
                        <img src="/assets/images/Mark Location.png" alt="">
                        <p>APDAL 1 & 2
                            Client : Kementerian ESDM, Ditjen EBTKE
                            Capacity : 454.600 Ah
                            Date : 31 August 2022
                            Location : Papua dan Papua Barat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <img src="./assets/icons/Arrow Left.svg" alt="" class="arrow carousel-arrow" id="prev-slide">
        <div class="carousel-content shadow">
            @foreach ($projects as $item)
            @php
            $imageUrl = asset($item->image->first()->image);
            @endphp
            <a href="/projects/detail/{{ $item->id }}" style="text-decoration: none;" class="content shadow">
                <img src="{{ $imageUrl }}" alt="" class="img-fluid content-image">
                <p style="color: #E28D26;" class="mb-0 mt-2">{{ $item->project_name }}</p>
                <div style="color: #0395D9; font-size: 14px" class="d-flex align-items-center justify-content-center gap-2 mt-0 pro-desc">
                    <div class="d-flex">
                        <img src="/assets/icons/Vector.svg" alt="">
                        <p class="mt-3">{{ $item->client }}</p>
                    </div>
                    <div class="d-flex">
                        <img src="/assets/icons/Location.svg" alt="">
                        <p class="mt-3">{{ $item->location }}</p>
                    </div>
                 
                </div>
            </a>
            @endforeach
        </div>
        <img src="./assets/icons/Arrow Right.svg" alt="" class="arrow carousel-arrow">
    </div>
    </div>

    <div class="slider d-flex align-items-center justify-content-center gap-5">
        <img src="/assets/icons/arrow-left.svg" alt="" class="arrow line-arrow-left">
        <div class="line d-flex justify-content-around">

            <div class="clickable">
                <svg width="28" height="28" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="circle-icon">
                    <circle cx="28" cy="28" r="28" fill="#0395D9" />
                </svg>
                <p class="fw-semibold">2022</p>
            </div>
            <div class="clickable">
                <svg width="28" height="28" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="circle-icon">
                    <circle cx="28" cy="28" r="28" fill="#0395D9" />
                </svg>
                <p class="fw-semibold">2023</p>
            </div>
            <div class="clickable">
                <svg width="28" height="28" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="circle-icon">
                    <circle cx="28" cy="28" r="28" fill="#0395D9" />
                </svg>
                <p class="fw-semibold">2024</p>
            </div>
        </div>
        <img src="/assets/icons/arrow-right.svg" alt="" class="arrow line-arrow-right">
    </div>

    <div style="margin-bottom: 10rem"></div>

    <!-- want to know more -->
    <div class="container-fluid wta mt-5 d-flex align-items-center justify-content-center flex-column" style="margin-bottom: 10rem">
        <div class="mid">
            <h3 class="text-white fs-1" style="font-style: italic;">Want to see our projects?</h3>
            <div class="wta-sub text-start mt-5 row">
                <div class="col-2">
                    <img class="d-inline" src="assets/img/wtm-icon.png" alt="" style="transform: scale(0.6);">
                </div>
                <div class="col-10">
                    <p class="d-inline text-white fs-3">please download our company profile
                        pdf file <a class="text-white" href="">here</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- want to know more -->
    @include('Home.Partials.footer')
    
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/projects.js"></script>
    <script>
        feather.replace();
    </script>

<script>
    $(document).ready(function () {
        $('.circle-icon').on('click', function () {
            var year = $(this).siblings('p').text();

            $.ajax({
                type: 'GET',
                url: '/projects/getProjectsByYear/' + year,
                dataType: 'json',
                success: function (data) {
                    updateProjects(data.projects);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

        function updateProjects(projects) {
        // Kosongkan atau atur ulang konten proyek
        $('.carousel-content').empty();

        // Loop melalui proyek dan tambahkan informasi proyek ke dalam .carousel-content
        for (var i = 0; i < projects.length; i++) {
            var project = projects[i];
            // Pastikan proyek memiliki gambar sebelum mencoba mengaksesnya
            if (project.image.length > 0) {
                var imageUrl = project.image[0].image;

                var projectHtml = '<a href="/projects/detail/' + project.id + '" style="text-decoration: none;" class="content shadow">';
                projectHtml += '<img src="' + imageUrl + '" alt="" class="img-fluid content-image">';
                projectHtml += '<p style="color: #E28D26;" class="mb-0 mt-2">' + project.project_name + '</p>';
                projectHtml += '<div style="color: #0395D9;" class="d-flex align-items-center justify-content-center gap-2 mt-0">';
                projectHtml += '<img src="/assets/icons/Vector.svg" alt="">';
                projectHtml += '<p class="mt-3" style="font-size: 14px;">' + project.client + '</p>';
                projectHtml += '<img src="/assets/icons/Location.svg" alt="">';
                projectHtml += '<p class="mt-3" style="font-size: 14px;">' + project.location + '</p>';
                projectHtml += '</div></a>';

                // Tambahkan projectHtml ke dalam .carousel-content
                $('.carousel-content').append(projectHtml);
            }
        }
    }
    });
</script>

</body>

</html>


