<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container px-5">
        <a class="navbar-brand" href="#">
            <img src="/template/assets/logohyper.png" alt="" style="width: 300px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/newscontroller" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        News
                    </a>
                    <ul class="dropdown-menu shadow-lg" aria-labelledby="servicesDropdown" style="background-color: #f8f9fa; border-radius: 5px;">
                        <li><a class="dropdown-item" href="/newscontroller">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/newscontroller/new">Add News</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/servicescontroller" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                    </a>
                    <ul class="dropdown-menu shadow-lg" aria-labelledby="servicesDropdown" style="background-color: #f8f9fa; border-radius: 5px;">
                        <li><a class="dropdown-item" href="/servicescontroller">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/servicescontroller/new">Add Services</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/portofoliocontroller" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Portofolio
                    </a>
                    <ul class="dropdown-menu shadow-lg" aria-labelledby="servicesDropdown" style="background-color: #f8f9fa; border-radius: 5px;">
                        <li><a class="dropdown-item" href="/portofoliocontroller">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/portofoliocontroller/new">Add Portofolio</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/aboutuscontroller" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu shadow-lg" aria-labelledby="servicesDropdown" style="background-color: #f8f9fa; border-radius: 5px;">
                        <li><a class="dropdown-item" href="/aboutuscontroller">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/aboutuscontroller/new">Add Employee</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>