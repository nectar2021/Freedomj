<header class="header-nav nav-homepage-style stricky main-menu">
  <nav class="posr">
    <div class="container-fluid px-3 px-lg-4 posr menu_bdrt1">
      <div class="row align-items-center justify-content-between gx-3">
        <!-- Left: Logo (always visible) -->
        <div class="col-auto pe-2 d-flex align-items-center">
          <a class="header-logo d-inline-flex align-items-center" href="{{ route('home') }}">
            <img class="logo-light" src="{{ asset('frontend/assets/images/m.png') }}" alt="Logo Light">
            <img class="logo-dark d-none" src="{{ asset('frontend/assets/images/k.png') }}" alt="Logo Dark">
          </a>
        </div>

        <!-- Middle: Desktop nav (≥ lg) -->
        <div class="col d-none d-lg-flex justify-content-center">
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">            <!-- Services -->
            <li class="visible_list has-submenu">
              <a class="list-item" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="title">Services</span>
              </a>
              <ul class="sub-menu">
                <li><a class="dropdown-link" href="{{ route('services.ifm') }}">Integrated Facilities Management</a></li>
                <li><a class="dropdown-link" href="{{ route('services.pms') }}">Property Management Services</a></li>
                <li><a class="dropdown-link" href="{{ route('services.mms') }}">Maintenance Management Services</a></li>
                <li><a class="dropdown-link" href="{{ route('services.eabs') }}">Estate Agency/Brokerage Services</a></li>
                <li><a class="dropdown-link" href="{{ route('services.ams') }}">Asset Management Services</a></li>
                <li><a class="dropdown-link" href="{{ route('services.pds') }}">Property Development Services</a></li>
                <li><a class="dropdown-link" href="{{ route('services.la') }}">Land Administration</a></li>
              </ul>
            </li>

            <!-- Research -->
            <li class="visible_list has-submenu">
              <a class="list-item" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="title">Research</span>
              </a>
              <ul class="sub-menu">
                <li><a class="dropdown-link" href="#">Market Insights</a></li>
                <li><a class="dropdown-link" href="#">Trends & Reports</a></li>
                <li><a class="dropdown-link" href="#">White Papers</a></li>
                <li><a class="dropdown-link" href="#">Data Tools</a></li>
              </ul>
            </li>

            <!-- Properties -->
            <li class="visible_list has-submenu">
              <a class="list-item" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="title">Properties</span>
              </a>
              <ul class="sub-menu">
                <li><a class="dropdown-link" href="#">Property List V1</a></li>
                <li><a class="dropdown-link" href="#">Property List V2</a></li>
                <li><a class="dropdown-link" href="#">Property Grid View</a></li>
                <li><a class="dropdown-link" href="#">Single Property</a></li>
              </ul>
            </li>

            <!-- Singles -->
            <li class="visible_list"><a class="list-item" href="#"><span class="title">Experts</span></a></li>
            <li class="visible_list"><a class="list-item" href="#"><span class="title">Our Offices</span></a></li>

            <!-- Careers -->
            <li class="visible_list has-submenu">
              <a class="list-item" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="title">Careers</span>
              </a>
              <ul class="sub-menu">
                <li><a class="dropdown-link" href="#">Open Roles</a></li>
                <li><a class="dropdown-link" href="#">Internships</a></li>
                <li><a class="dropdown-link" href="#">Submit Resume</a></li>
              </ul>
            </li>

            <!-- About -->
            <li class="visible_list"><a class="list-item" href="#"><span class="title">About Us</span></a></li>
          </ul>
        </div>

        <!-- Right: CTA (≥ xl) + Mobile toggle (< lg) -->
        <div class="col-auto d-flex align-items-center">
          <a class="ud-btn add-property menu-btn bdrs60 d-none d-xl-inline-flex me-2" href="page-dashboard-add-property.html">Add Property<i class="fal fa-arrow-right-long"></i></a>

          <!-- Mobile hamburger (visible < lg) -->
          <button class="btn btn-outline-secondary d-lg-none" type="button"
                  data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu"
                  aria-label="Open menu">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
      <div class="offcanvas-header">
        <h6 class="offcanvas-title" id="mobileMenuLabel">Menu</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <nav class="mobile-nav">
          <ul class="list-unstyled mb-0">
            <!-- Services (collapsible) -->
            <li class="mb-2">
              <button class="btn w-100 d-flex justify-content-between align-items-center mobile-parent"
                      data-bs-toggle="collapse" data-bs-target="#mServices" aria-expanded="false">
                <span>Services</span><i class="fas fa-chevron-down small"></i>
              </button>
              <div id="mServices" class="collapse">
                <ul class="list-unstyled ps-3 mt-2">
                  <li><a href="{{ route('services.ifm') }}">Integrated Facilities Management</a></li>
                  <li><a href="{{ route('services.pms') }}">Property Management Services</a></li>
                  <li><a href="{{ route('services.mms') }}">Maintenance Management Services</a></li>
                  <li><a href="{{ route('services.eabs') }}">Estate Agency/Brokerage Services</a></li>
                  <li><a href="{{ route('services.ams') }}">Asset Management Services</a></li>
                  <li><a href="{{ route('services.pds') }}">Property Development Services</a></li>
                  <li><a href="{{ route('services.la') }}">Land Administration</a></li>
                </ul>
              </div>
            </li>

            <!-- Research -->
            <li class="mb-2">
              <button class="btn w-100 d-flex justify-content-between align-items-center mobile-parent"
                      data-bs-toggle="collapse" data-bs-target="#mResearch" aria-expanded="false">
                <span>Research</span><i class="fas fa-chevron-down small"></i>
              </button>
              <div id="mResearch" class="collapse">
                <ul class="list-unstyled ps-3 mt-2">
                  <li><a href="#">Market Insights</a></li>
                  <li><a href="#">Trends & Reports</a></li>
                  <li><a href="#">White Papers</a></li>
                  <li><a href="#">Data Tools</a></li>
                </ul>
              </div>
            </li>

            <!-- Properties -->
            <li class="mb-2">
              <button class="btn w-100 d-flex justify-content-between align-items-center mobile-parent"
                      data-bs-toggle="collapse" data-bs-target="#mProperties" aria-expanded="false">
                <span>Properties</span><i class="fas fa-chevron-down small"></i>
              </button>
              <div id="mProperties" class="collapse">
                <ul class="list-unstyled ps-3 mt-2">
                  <li><a href="#">Property List V1</a></li>
                  <li><a href="#">Property List V2</a></li>
                  <li><a href="#">Property Grid View</a></li>
                  <li><a href="#">Single Property</a></li>
                </ul>
              </div>
            </li>

            <!-- Singles -->
            <li class="mb-2"><a class="btn w-100 text-start" href="#">Experts</a></li>
            <li class="mb-2"><a class="btn w-100 text-start" href="#">Our Offices</a></li>

            <!-- Careers -->
            <li class="mb-2">
              <button class="btn w-100 d-flex justify-content-between align-items-center mobile-parent"
                      data-bs-toggle="collapse" data-bs-target="#mCareers" aria-expanded="false">
                <span>Careers</span><i class="fas fa-chevron-down small"></i>
              </button>
              <div id="mCareers" class="collapse">
                <ul class="list-unstyled ps-3 mt-2">
                  <li><a href="#">Open Roles</a></li>
                  <li><a href="#">Internships</a></li>
                  <li><a href="#">Submit Resume</a></li>
                </ul>
              </div>
            </li>

            <!-- About -->
            <li class="mb-2"><a class="btn w-100 text-start" href="#">About Us</a></li>

            <!-- CTA on mobile -->
            <li class="mt-3">
              <a class="ud-btn add-property menu-btn w-100" href="page-dashboard-add-property.html">Add Property<i class="fal fa-arrow-right-long"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>
</header>
