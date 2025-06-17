@extends('admin_backend.admin_master')
@section('index')



  <!--End Menu In Hiddn SideBar -->
  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="images/header-logo2.svg" alt=""></a>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="page-dashboard.html" class="items-center -is-active"><i class="flaticon-discovery mr15"></i>Dashboard</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-message.html" class="items-center"><i class="flaticon-chat-1 mr15"></i>Message</a>
          </div>
          <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-add-property.html" class="items-center"><i class="flaticon-new-tab mr15"></i>Add New Property</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-properties.html" class="items-center"><i class="flaticon-home mr15"></i>My Properties</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-favorites.html" class="items-center"><i class="flaticon-like mr15"></i>My Favorites</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-savesearch.html" class="items-center"><i class="flaticon-search-2 mr15"></i>Saved Search</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-review.html" class="items-center"><i class="flaticon-review mr15"></i>Reviews</a>
          </div>
          <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-package.html" class="items-center"><i class="flaticon-protection mr15"></i>My Package</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-profile.html" class="items-center"><i class="flaticon-user mr15"></i>My Profile</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-login.html" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
          </div>
        </div>
      </div>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
          <div class="row pb40">

            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>Howdy, Ali!</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">All Properties</div>
                  <div class="title">583</div>
                </div>
                <div class="icon text-center"><i class="flaticon-home"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Views</div>
                  <div class="title">192</div>
                </div>
                <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Visitor Reviews</div>
                  <div class="title">438</div>
                </div>
                <div class="icon text-center"><i class="flaticon-review"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Favorites</div>
                  <div class="title">67</div>
                </div>
                <div class="icon text-center"><i class="flaticon-like"></i></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="navtab-style1">
                  <div class="d-sm-flex align-items-center justify-content-between">
                    <h4 class="title fz17 mb20">View statistics</h4>
                    <ul class="nav nav-tabs border-bottom-0 mb30" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link fw600 active" id="hourly-tab" data-bs-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fw600" id="weekly-tab" data-bs-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fw600" id="monthly-tab" data-bs-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
                      <canvas class="chart-container" id="doublebar-chart"></canvas>
                    </div>
                    <div class="tab-pane fade w-100" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                      <canvas class="canvas w-100" id="myChartweave"></canvas>
                    </div>
                    <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                      <div class="chart pt20">
                        <canvas class="w-100" id="myChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <h4 class="title fz17 mb25">Recent Activities</h4>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-home flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Your listing <span class="fw600">House on the beverly hills</span> has been approved</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-review flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Dollie Horton left a review on <span class="fw600">House on the Northridge</span></p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-like flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Someone favorites your <span class="fw600">Triple Story House for Rent</span> listing</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-review flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Someone favorites your <span class="fw600">Triple Story House for Rent</span> listing</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-home flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Your listing <span class="fw600">House on the beverly hills</span> has been approved</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-review flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Dollie Horton left a review on <span class="fw600">House on the Northridge</span></p>
                </div>
                <div class="d-grid">
                  <a href="#" class="ud-btn btn-white2">Veiw More<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
