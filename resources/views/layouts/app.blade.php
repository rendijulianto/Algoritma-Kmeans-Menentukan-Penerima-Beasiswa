<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Red_Theme">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Favicon icon-->
      <link
         rel="shortcut icon"
         type="image/png"
         href="{{asset('assets/images/logos/favicon.png')}}"
         /
      <!-- Core Css -->
      <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
      <title>
            Kmeans - Beasiswa
      </title>
   </head>
   <body>
      <!-- Preloader -->
      <div class="preloader">
         <img src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid" />
      </div>
      <div id="main-wrapper">
         <!-- Sidebar Start -->
         <aside class="left-sidebar with-vertical">
            <div>
               <!-- ---------------------------------- -->
               <!-- Start Vertical Layout Sidebar -->
               <!-- ---------------------------------- -->
               <!-- Sidebar scroll-->
               <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                  <ul id="sidebarnav">
                     <!-- ---------------------------------- -->
                     <!-- Home -->
                     <!-- ---------------------------------- -->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Menu</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('dashboard.index')}}" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:users-group-rounded-bold" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Dashboard</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('mahasiswa.index')}}" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:users-group-rounded-bold" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Mahasiswa</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('kmeans.index')}}"
                        aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:graph-new-up-broken" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">K-Means</span>
                        </a>
                     </li>
                  </ul>
               </nav>
               <!-- End Sidebar scroll-->
            </div>
         </aside>
         <!--  Sidebar End -->
         <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar card rounded-0 border-0">
               <div class="with-vertical">
                  <!-- ---------------------------------- -->
                  <!-- Start Vertical Layout Header -->
                  <!-- ---------------------------------- -->
                  <nav class="navbar navbar-expand-lg px-lg-0 px-3 py-0">
                     <div class="d-none d-lg-block">
                        <div class="brand-logo d-flex align-items-center justify-content-between">
                           <a href="#" class="text-nowrap logo-img">
                              <b class="logo-icon">
                                 <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                 <!-- Dark Logo icon -->
                                
                                 <!-- Light Logo icon -->
                                 
                              </b>
                              <!--End Logo icon -->
                              <!-- Logo text -->
                              <span class="logo-text">
                                 <!-- dark Logo text -->
                               
                              </span>
                           </a>
                        </div>
                     </div>
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link nav-icon-hover sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                              <iconify-icon icon="solar:list-broken"></iconify-icon>
                           </a>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- start notification Dropdown -->
                        <!-- ------------------------------- -->
                        
                     </ul>
                     <div class="d-block d-lg-none">
                        <div class="brand-logo d-flex align-items-center justify-content-between">
                           <a href="index.html" class="text-nowrap logo-img">
                              <b class="logo-icon">
                                 <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                 <!-- Dark Logo icon -->
                                 
                              </b>
                              <!--End Logo icon -->
                              <!-- Logo text -->
                            
                           </a>
                        </div>
                     </div>
                  </nav>
                  <!-- ---------------------------------- -->
                  <!-- End Vertical Layout Header -->
                  <!-- ---------------------------------- -->
                  <!-- ------------------------------- -->
                  <!-- apps Dropdown in Small screen -->
                  <!-- ------------------------------- -->
                  <!--  Mobilenavbar -->
                  <div
                     class="offcanvas offcanvas-start pt-0"
                     data-bs-scroll="true"
                     tabindex="-1"
                     id="mobilenavbar"
                     aria-labelledby="offcanvasWithBothOptionsLabel"
                     >
                     <nav class="sidebar-nav scroll-sidebar">
                        <div class="offcanvas-header justify-content-between">
                           <div class="brand-logo d-flex align-items-center justify-content-between">
                              <a href="index.html" class="text-nowrap logo-img">
                                 <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                  
                                 </b>
                                 <!--End Logo icon -->
                                 <!-- Logo text -->
                                 <span class="logo-text">
                                    <!-- dark Logo text -->
                                  
                                 </span>
                              </a>
                           </div>
                           <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                              ></button>
                        </div>
                        <div
                           class="offcanvas-body pt-0"
                           data-simplebar=""
                           data-simplebar style="height: calc(100vh - 80px)"
                           >
                           <ul id="sidebarnav">
                              <li class="sidebar-item">
                                 <a
                                    class="sidebar-link has-arrow ms-0"
                                    href="javascript:void(0)"
                                    aria-expanded="false"
                                    >
                                    <span>
                                       <iconify-icon icon="solar:shield-plus-outline" class="iconify-sm"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Apps</span>
                                 </a>
                                 <ul aria-expanded="false" class="collapse first-level my-3">
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-chat.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >New messages arrived</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center ">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-invoice.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >Get latest invoice</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-mobile.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >2 Unsaved Contacts</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-message-box.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">Email App</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >Get new emails</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-cart.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >learn more information</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-date.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >Get dates</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-lifebuoy.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >Add new contact</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                       <a href="#" class="d-flex align-items-center">
                                          <div
                                             class="text-bg-light rounded round-40 me-3 p-6 d-flex align-items-center justify-content-center"
                                             >
                                             <img
                                                src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-dd-application.svg"
                                                alt=""
                                                class="img-fluid"
                                                width="24"
                                                height="24"
                                                />
                                          </div>
                                          <div class="d-inline-block">
                                             <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                                             <span class="fs-3 d-block text-muted"
                                                >To-do and Daily tasks</span
                                                >
                                          </div>
                                       </a>
                                    </li>
                                    <ul class="px-8 mt-7 mb-4">
                                       <li class="sidebar-item mb-3">
                                          <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                       </li>
                                       <li class="mb-3">
                                          <a class="fw-semibold bg-hover-primary" href="#"
                                             >Pricing Page</a
                                             >
                                       </li>
                                       <li class="mb-3">
                                          <a
                                             class="fw-semibold bg-hover-primary"
                                             href="#"
                                             >Authentication Design</a
                                             >
                                       </li>
                                       <li class="mb-3">
                                          <a
                                             class="fw-semibold bg-hover-primary"
                                             href="#"
                                             >Register Now</a
                                             >
                                       </li>
                                       <li class="mb-3">
                                          <a
                                             class="fw-semibold bg-hover-primary"
                                             href="#"
                                             >404 Error Page</a
                                             >
                                       </li>
                                       <li class="mb-3">
                                          <a class="fw-semibold bg-hover-primary" href="#"
                                             >Notes App</a
                                             >
                                       </li>
                                       <li class="mb-3">
                                          <a
                                             class="fw-semibold bg-hover-primary"
                                             href="#"
                                             >User Application</a
                                             >
                                       </li>
                                       <li class="mb-3">
                                          <a
                                             class="fw-semibold bg-hover-primary"
                                             href="#"
                                             >Account Settings</a
                                             >
                                       </li>
                                    </ul>
                                 </ul>
                              </li>
                              <li class="sidebar-item">
                                 <a class="sidebar-link  ms-0" href="#" aria-expanded="false">
                                    <span>
                                       <iconify-icon icon="solar:chat-unread-outline" class="iconify-sm"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Chat</span>
                                 </a>
                              </li>
                              <li class="sidebar-item">
                                 <a
                                    class="sidebar-link  ms-0"
                                    href="#"
                                    aria-expanded="false"
                                    >
                                    <span>
                                       <iconify-icon icon="solar:calendar-minimalistic-outline" class="iconify-sm"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Calendar</span>
                                 </a>
                              </li>
                              <li class="sidebar-item">
                                 <a class="sidebar-link  ms-0" href="#" aria-expanded="false">
                                    <span>
                                       <iconify-icon icon="solar:inbox-unread-outline" class="iconify-sm"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Email</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
               <div class="app-header with-horizontal">
                  <nav class="navbar navbar-expand-xl container-fluid">
                     <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                           <a
                              class="nav-link sidebartoggler ms-n3"
                              id="sidebarCollapse"
                              href="javascript:void(0)"
                              >
                              <iconify-icon icon="solar:hamburger-menu-line-duotone"></iconify-icon>
                           </a>
                        </li>
                        <li class="nav-item d-none d-xl-block">
                           <div class="brand-logo d-flex align-items-center justify-content-between">
                              <a href="index.html" class="text-nowrap logo-img">
                                 <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                 
                                 </b>
                                 <!--End Logo icon -->
                                 <!-- Logo text -->
                                 <span class="logo-text">
                                 </span>
                              </a>
                           </div>
                        </li>
            
                     </ul>
                     <a
                        class="navbar-toggler nav-icon-hover p-0 border-0"
                        href="javascript:void(0)"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                     <span class="p-2">
                     <i class="ti ti-dots fs-7"></i>
                     </span>
                     </a>
                     <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                           <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                              <li class="nav-item">
                                 <a
                                    class="nav-link nav-icon-hover moon dark-layout"
                                    href="javascript:void(0)" 
                                    >
                                    <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                 </a>
                                 <a
                                    class="nav-link nav-icon-hover sun light-layout"
                                    href="javascript:void(0)" style="display: none;"
                                    >
                                    <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                 </a>
                              </li>
                      
                              <!-- ------------------------------- -->
                              <!-- end notification Dropdown -->
                              <!-- ------------------------------- -->
                              <!-- ------------------------------- -->
                              <!-- start language Dropdown -->
                              <!-- ------------------------------- -->
            
                              <!-- ------------------------------- -->
                              <!-- end language Dropdown -->
                              <!-- ------------------------------- -->
                              <!-- ------------------------------- -->
                              <!-- start profile Dropdown -->
                              <!-- ------------------------------- -->
                              <li class="nav-item hover-dd dropdown">
                                 <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                 <img src="{{asset('assets/images/profile/user-1.jpg')}}" alt="user" width="30"
                                    class="profile-pic rounded" />
                                 </a>
                               
                              </li>
                              <!-- ------------------------------- -->
                              <!-- end profile Dropdown -->
                              <!-- ------------------------------- -->
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
            </header>
            <!--  Header End -->
            <aside class="left-sidebar with-horizontal">
               <!-- Sidebar scroll-->
               <div>
                  <!-- Sidebar navigation-->
                  <nav class="sidebar-nav scroll-sidebar container-fluid">
                     <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('dashboard.index')}}" aria-expanded="false">
                               <span class="d-flex">
                                  <iconify-icon icon="solar:home-linear" class="fs-6"></iconify-icon>
                               </span>
                               <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('mahasiswa.index')}}"
                            aria-expanded="false">
                               <span class="d-flex">
                                  <iconify-icon icon="solar:users-group-rounded-bold" class="fs-6"></iconify-icon>
                               </span>
                               <span class="hide-menu">
                                    Mahasiswa
                               </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('kmeans.index')}}"
                            aria-expanded="false">
                               <span class="d-flex">
                                  <iconify-icon icon="solar:graph-new-up-broken" class="fs-6"></iconify-icon>
                               </span>
                               <span class="hide-menu">
                                    K-Means
                               </span>
                            </a>
                        </li>
                     
                     </ul>
                  </nav>
                  <!-- End Sidebar navigation -->
               </div>
               <!-- End Sidebar scroll-->
            </aside>
            <div class="body-wrapper">
               <div class="container-fluid">
                  <!-- -------------------------------------------------------------- -->
                  <!-- Breadcrumb -->
                  <!-- -------------------------------------------------------------- -->
                  @yield('breadcrumb')
                  <!-- -------------------------------------------------------------- -->
                  <!-- Breadcrumb End -->
                  <!-- -------------------------------------------------------------- -->
                  @yield('content')
               </div>
               <!----Footer--->
               <!-- -------------------------------------------------------------- -->
               <!-- footer -->
               <!-- -------------------------------------------------------------- -->
               <footer class="footer py-3 bg-white border-top text-center">
                  All Rights Reserved by Rendi Julianto.
               </footer>
               <!-- -------------------------------------------------------------- -->
               <!-- End footer -->
               <!-- -------------------------------------------------------------- -->
               <!----Footer End--->
            </div>
            <script>
               function handleColorTheme(e) {
                 $("html").attr("data-color-theme", e);
                 $(e).prop("checked", !0);
               }
            </script>
            <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
               type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="icon ti ti-settings fs-7 text-white"></i>
            </button>
            <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
               aria-labelledby="offcanvasExampleLabel">
               <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                  <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                     Settings
                  </h4>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               </div>
               <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
                  <h6 class="fw-semibold fs-4 mb-2">Theme</h6>
                  <div class="d-flex flex-row gap-3 customizer-box" role="group">
                     <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary " for="light-layout">
                        <iconify-icon icon="solar:sun-2-outline" class="icon fs-7 me-2"></iconify-icon>
                        Light
                     </label>
                     <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary" for="dark-layout">
                        <iconify-icon icon="solar:moon-outline" class="icon fs-7 me-2"></iconify-icon>
                        Dark
                     </label>
                  </div>
                  <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                  <div class="d-flex flex-row gap-3 customizer-box" role="group">
                     <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                        <iconify-icon icon="solar:align-left-linear" class="icon fs-7 me-2"></iconify-icon>
                        LTR
                     </label>
                     <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                        <iconify-icon icon="solar:align-right-linear" class="icon fs-7 me-2"></iconify-icon>
                        RTL
                     </label>
                  </div>
                  <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>
                  <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                     <input type="radio" class="btn-check" name="color-theme-layout" id="Red_Theme"
                        autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Red_Theme')"
                        for="Red_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="RED_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                           <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                     </label>
                     <input type="radio" class="btn-check" name="color-theme-layout"  id="Aqua_Theme"
                        autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')"
                        for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                           <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                     </label>
                     <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')"
                        for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                           <i class="ti ti-check text-white d-flex icon fs-5"></i> 
                        </div>
                     </label>
                     <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')"
                        for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                           <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                     </label>
                     <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')"
                        for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                           <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                     </label>
                     <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')"
                        for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                           <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                     </label>
                  </div>
                  <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                  <div class="d-flex flex-row gap-3 customizer-box" role="group">
                     <div>
                        <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                           <iconify-icon icon="solar:slider-vertical-minimalistic-linear" class="icon fs-7 me-2"></iconify-icon>
                           Vertical
                        </label>
                     </div>
                     <div>
                        <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                           <iconify-icon icon="solar:slider-minimalistic-horizontal-outline" class="icon fs-7 me-2"></iconify-icon>
                           Horizontal
                        </label>
                     </div>
                  </div>
                  <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>
                  <div class="d-flex flex-row gap-3 customizer-box" role="group">
                     <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                        <iconify-icon icon="solar:cardholder-linear" class="icon fs-7 me-2"></iconify-icon>
                        Boxed
                     </label>
                     <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary" for="full-layout">
                        <iconify-icon icon="solar:scanner-linear" class="icon fs-7 me-2"></iconify-icon>
                        Full
                     </label>
                  </div>
                  <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                  <div class="d-flex flex-row gap-3 customizer-box" role="group">
                     <a href="javascript:void(0)" class="fullsidebar">
                        <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                           <iconify-icon icon="solar:sidebar-minimalistic-outline" class="icon fs-7 me-2"></iconify-icon>
                           Full
                        </label>
                     </a>
                     <div>
                        <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                           <iconify-icon icon="solar:siderbar-outline" class="icon fs-7 me-2"></iconify-icon>
                           Collapse
                        </label>
                     </div>
                  </div>
                  <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>
                  <div class="d-flex flex-row gap-3 customizer-box" role="group">
                     <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary" for="card-with-border">
                        <iconify-icon icon="solar:library-broken" class="icon fs-7 me-2"></iconify-icon>
                        Border
                     </label>
                     <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
                     <label class="btn p-9 btn-outline-primary" for="card-without-border">
                        <iconify-icon icon="solar:box-outline" class="icon fs-7 me-2"></iconify-icon>
                        Shadow
                     </label>
                  </div>
               </div>
            </div>
         </div>
         <!--  Search Bar -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
               <div class="modal-content rounded-1">
                  <div class="modal-header border-bottom">
                     <input
                        type="search"
                        class="form-control fs-3"
                        placeholder="Search here"
                        id="search"
                        />
                     <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                     <i class="ti ti-x fs-5 ms-3"></i>
                     </a>
                  </div>
                  <div class="modal-body message-body" data-simplebar="">
                     <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                     <ul class="list mb-0 py-2">
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Modern</span>
                           <span class="fs-3 text-muted d-block"
                              >/dashboards/dashboard1</span
                              >
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Dashboard</span>
                           <span class="fs-3 text-muted d-block"
                              >/dashboards/dashboard2</span
                              >
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Contacts</span>
                           <span class="fs-3 text-muted d-block">/apps/contacts</span>
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Posts</span>
                           <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Detail</span>
                           <span class="fs-3 text-muted d-block"
                              >/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span
                              >
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Shop</span>
                           <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Modern</span>
                           <span class="fs-3 text-muted d-block"
                              >/dashboards/dashboard1</span
                              >
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Dashboard</span>
                           <span class="fs-3 text-muted d-block"
                              >/dashboards/dashboard2</span
                              >
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Contacts</span>
                           <span class="fs-3 text-muted d-block">/apps/contacts</span>
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Posts</span>
                           <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Detail</span>
                           <span class="fs-3 text-muted d-block"
                              >/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span
                              >
                           </a>
                        </li>
                        <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                           <a href="#">
                           <span class="h6 mb-1">Shop</span>
                           <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="dark-transparent sidebartoggler"></div>
      <!-- Import Js Files -->
      <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/app.min.js')}}"></script>
      <script src="{{asset('assets/js/app.horizontal.init.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
      <script src="{{asset('assets/libs/iconify-icon/dist/iconify-icon.min.js')}}"></script>
      <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
      <script src="{{asset('assets/js/theme.js')}}"></script>
      <script src="{{asset('assets/js/feather.min.js')}}"></script>
      <script src="{{asset('assets/libs/jvectormap/jquery-jvectormap.min.js')}}"></script>
      <script src="{{asset('assets/js/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
      @yield('script')
   </body>
   
</html>