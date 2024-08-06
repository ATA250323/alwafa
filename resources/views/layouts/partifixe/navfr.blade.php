<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand p-0">
                <h1 class="text-primary mb-0"><img src="{{ asset('assets/img/logo.jpg') }}" alt="">
                    Al-Wafa
                </h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="{{ route('fracceuils') }}" class="nav-item nav-link active">Acceuil </a>
                    <a href="{{ route('frapropos') }}" class="nav-item nav-link "> A propos</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Services</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Our Features</a>
                            <a href="" class="dropdown-item">Our team</a>
                        </div>
                    </div>
                    <a href="{{ route('frcontacts') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="dropdown ms-3">
                    <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                class="fas fa-globe-europe text-primary me-2"></i> Langue</small></a>
                    <div class="dropdown-menu rounded">
                        <a href="{{ route('fracceuils') }}" class="dropdown-item">Franch</a>
                        <a href="{{ route('aracceuils') }}" class="dropdown-item">Arabic</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->
