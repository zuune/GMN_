<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-white py-3">
    <div class="container-fluid ">
        <a class="logo d-flex align-items-center navbar-brand" href="/">
            <img src="/assets/img/logo.png" alt="Logo GMN" width="150px">
        </a>
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item pe-5">
                    <a class="nav-link fw-bolder" href="/">Home</a>
                </li>
                <li class="nav-item pe-5 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="/about-us/introduction">Introduction</a></li>
                        <li><a class="dropdown-item" href="/about-us/founder">Founder</a>
                        <li><a class="dropdown-item" href="/about-us/organization">Organization</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item pe-5 dropdown">
                    <!-- dropdown-toggle -->
                    <a class="nav-link " href="/products">
                        Products
                    </a>
                </li>
                <li class="nav-item pe-5 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="serviceDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="serviceDropdown">
                        <li><a class="dropdown-item" href="/services">All Services</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/services/detail-1">Engineering</a></li>
                        <li><a class="dropdown-item" href="/services/detail-2">Procurement</a>
                        <li><a class="dropdown-item" href="/services/detail-3">Construction</a>
                        <li><a class="dropdown-item" href="/services/detail-4">Maintenance</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item pe-5">
                    <a class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item pe-5">
                    <a class="nav-link" href="/articles">Articles</a>
                </li>
            </ul>
            <!-- User Dropdown -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>ENG</strong>
                </a>
                <ul id="ddmenuLoggedIn" class="dropdown-menu manual-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" id="lang_eng" style="cursor: pointer;">ENG</a></li>
                    <li><a class="dropdown-item" id="lang_ind" style="cursor: pointer;">IND</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>