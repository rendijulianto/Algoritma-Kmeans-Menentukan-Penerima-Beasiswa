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
                     <!-----------Profile------------------>
                     <li class="sidebar-item sidebar-profile pt-2">
                        <a class="sidebar-link has-arrow opacity-100 gap-2" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                        <img src="{{asset('assets/images/profile/user-1.jpg')}}" class="rounded" width="30" alt="user" />
                        </span>
                        <span class="hide-menu fw-medium">James White </span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="page-user-profile.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">My Profile</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="page-user-profile.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">My Balance</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="app-email.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Inbox</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="authentication-login.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Logout</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Home -->
                     <!-- ---------------------------------- -->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">PERSONAL</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="icon-tabler.html" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:clipboard-heart-linear" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Icon</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link  has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Widgets</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="widgets-cards.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu"> Cards </span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="widgets-charts.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu"> Charts </span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="widgets-banners.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu"> Banner </span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="widgets-feeds.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu"> Feed Widgets </span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="widgets-apps.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu"> Apps Widgets </span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="widgets-data.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu"> Data Widgets </span>
                              </a>
                           </li>
                        </ul>
                        <!-- ---------------------------------- -->
                        <!-- UI -->
                        <!-- ---------------------------------- -->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">UI</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:text-underline-cross-line-duotone" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">UI Elements</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="ui-accordian.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Accordian</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-badge.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Badge</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-buttons.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Buttons</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-dropdowns.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Dropdowns</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-modals.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Modals</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-tab.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Tab</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-tooltip-popover.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Tooltip & Popover</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-notification.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Notification</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-progressbar.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Progressbar</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-pagination.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Pagination</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-typography.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Typography</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-bootstrap-ui.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Bootstrap UI</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-breadcrumb.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Breadcrumb</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-offcanvas.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Offcanvas</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-lists.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Lists</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-grid.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Grid</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-carousel.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Carousel</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-scrollspy.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Scrollspy</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-spinner.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Spinner</span>
                              </a>
                           </li>
                           <li class="sidebar-item mb-3">
                              <a href="ui-link.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Link</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!----Cards---->
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:ticker-star-outline" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Cards</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="ui-cards.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Basic Cards</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-card-customs.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Custom Cards</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-card-weather.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Weather Cards</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="ui-card-draggable.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Draggable Cards</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!----Component---->
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:compass-square-outline" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Component</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="component-sweetalert.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Sweet Alert</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="component-nestable.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Nestable</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="component-noui-slider.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Noui slider</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="component-rating.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Rating</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="component-toastr.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Toastr</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!----Forms---->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Forms</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:book-2-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Elements</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="form-inputs.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Forms Input</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-input-groups.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Input Groups</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-input-grid.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Input Grid</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-checkbox-radio.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Checkbox & Radios</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-bootstrap-touchspin.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Bootstrap Touchspin</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-bootstrap-switch.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Bootstrap Switch</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-select2.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Select2</span>
                              </a>
                           </li>
                           <li class="sidebar-item mb-3">
                              <a href="form-dual-listbox.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Dual Listbox</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link  has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class=" d-flex ">
                              <iconify-icon icon="solar:qr-code-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Addons</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="form-paginator.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Paginator</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-img-cropper.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Image Cropper</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-dropzone.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Dropzone</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-mask.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Form Mask</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-typeahead.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Form Typehead</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex ">
                              <iconify-icon icon="solar:danger-circle-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Validation</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="form-bootstrap-validation.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Bootstrap Validation</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-custom-validation.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Custom Validation</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link  has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex ">
                              <iconify-icon icon="solar:document-add-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Picker</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="form-picker-colorpicker.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Colorpicker</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-picker-datetimepicker.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Datetimepicker</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Bootstrap Rangepicker</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Bootstrap Datepicker</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-picker-material-datepicker.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Material Datepicker</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:notes-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Editor</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="form-editor-ckeditor.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Ck Editor</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-editor-quill.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Quill Editor</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-editor-summernote.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Summernote Editor</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="form-editor-tinymce.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Tinymce Edtor</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-basic.html" aria-expanded="false">
                           <div class="d-flex ">
                              <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                           </div>
                           <span class="hide-menu">Basic Form</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-vertical.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:slider-vertical-outline"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Vertical</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-horizontal.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:align-vertical-spacing-outline"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Horizontal</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-actions.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:recive-square-outline"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Actions</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-row-separator.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:hamburger-menu-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Row Separator</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-bordered.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:bill-list-linear"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Bordered</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-detail.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:documents-minimalistic-linear"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Detail</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-striped-row.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:bedside-table-outline"></iconify-icon>
                           </div>
                           <span class="hide-menu">Striped Rows</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="form-floating-input.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:flip-horizontal-outline"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Floating Input</span>
                        </a>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Form Wizard -->
                     <!-- ---------------------------------- -->
                     <li class="sidebar-item">
                        <a class="sidebar-link sublink" href="form-wizard.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:weigher-broken"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Wizard</span>
                        </a>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Form Repeater -->
                     <!-- ---------------------------------- -->
                     <li class="sidebar-item">
                        <a class="sidebar-link sublink" href="form-repeater.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:text-selection-linear"></iconify-icon>
                           </div>
                           <span class="hide-menu">Form Repeater</span>
                        </a>
                     </li>
                     <!----Tables---->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Tables</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:sidebar-minimalistic-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Bootstrap Table</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="table-basic.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Basic Table</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="table-dark-basic.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Dark Basic Table</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="table-sizing.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Sizing Table</span>
                              </a>
                           </li>
                           <li class="sidebar-item mb-3">
                              <a href="table-layout-coloured.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Coloured Table</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Datatables</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="table-datatable-basic.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Basic Initialisation</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="table-datatable-api.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">API</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="table-datatable-advanced.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Advanced Initialisation</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Table Jsgrid -->
                     <!-- ---------------------------------- -->
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="table-jsgrid.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:align-top-line-duotone" class="fs-6"></iconify-icon>
                           </div>
                           <span class="hide-menu">Table Jsgrid</span>
                        </a>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Table Responsive -->
                     <!-- ---------------------------------- -->
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="table-responsive.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:adhesive-plaster-outline" class="fs-6"></iconify-icon>
                           </div>
                           <span class="hide-menu">Table Responsive</span>
                        </a>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Table Footable -->
                     <!-- ---------------------------------- -->
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="table-footable.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:stop-line-duotone" class="fs-6"></iconify-icon>
                           </div>
                           <span class="hide-menu">Table Footable</span>
                        </a>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Table Editable -->
                     <!-- ---------------------------------- -->
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="table-editable.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:pen-new-square-broken" class="fs-6"></iconify-icon>
                           </div>
                           <span class="hide-menu">Table Editable</span>
                        </a>
                     </li>
                     <!-- ---------------------------------- -->
                     <!-- Table Bootstrap -->
                     <!-- ---------------------------------- -->
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="table-bootstrap.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:chart-square-line-duotone" class="fs-6"></iconify-icon>
                           </div>
                           <span class="hide-menu">Table Bootstrap</span>
                        </a>
                     </li>
                     <!----Devider----->
                     <!-- <div class="devider"></div> -->
                     <!---------------->
                     <!----Charts---->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Charts</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link  has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:pie-chart-3-broken"></iconify-icon>
                           </div>
                           <span class="hide-menu">Apex Charts</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="chart-apex-line.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Line Chart</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="chart-apex-area.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Area Chart</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="chart-apex-bar.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Bar Chart</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="chart-apex-pie.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Pie Chart</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="chart-apex-radial.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Radial Chart</span>
                              </a>
                           </li>
                           <li class="sidebar-item mb-3">
                              <a href="chart-apex-radar.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Radar Chart</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="chart-sparkline.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:chart-square-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Sparkline Chart</span>
                        </a>
                     </li>
                     <!----Sample Pages---->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Sample Pages</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:documents-linear" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Sample Page</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="pages-animation.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Animation</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="pages-search-result.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Search Result</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="pages-gallery.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Gallery</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="pages-treeview.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Treeview</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="pages-block-ui.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Block-Ui</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="pages-session-timeout.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Session Timeout</span>
                              </a>
                           </li>
                           <li class="sidebar-item mb-3">
                              <a href="pages-utility-classes.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Helper Classes</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!----Sample Pages---->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Icons</span>
                     </li>
                     <li class="sidebar-item ">
                        <a class="sidebar-link" href="icon-tabler.html" aria-expanded="false">
                           <div class="d-flex ">
                              <iconify-icon icon="solar:archive-broken"></iconify-icon>
                           </div>
                           <span class="hide-menu">Tabler Icon</span>
                        </a>
                     </li>
                     <!----Devider----->
                     <!-- <div class="devider"></div> -->
                     <!---------------->
                     <!----Auth Pages---->
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Auth</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="authentication-error.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:bug-broken"></iconify-icon>
                           </div>
                           <span class="hide-menu">Error</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link  has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex ">
                              <iconify-icon icon="solar:login-2-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Login</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="authentication-login.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Side Login</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="authentication-login2.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Boxed Login</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link  has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class=" d-flex">
                              <iconify-icon icon="solar:user-circle-outline"></iconify-icon>
                           </div>
                           <span class="hide-menu">Register</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="authentication-register.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Side Register</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="authentication-register2.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Boxed Register</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:refresh-bold-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Forgot Password</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="authentication-forgot-password.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Side Forgot Password</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="authentication-forgot-password2.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Boxed Forgot Password</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link  has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:signpost-2-line-duotone"></iconify-icon>
                           </div>
                           <span class="hide-menu">Two Steps</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="authentication-two-steps.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Side Two Steps</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a href="authentication-two-steps2.html" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Boxed Two Steps</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link " href="authentication-maintenance.html" aria-expanded="false">
                           <div class="d-flex">
                              <iconify-icon icon="solar:settings-linear"></iconify-icon>
                           </div>
                           <span class="hide-menu">Maintenance</span>
                        </a>
                     </li>
                     <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">others</span>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Menu Level</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                           <li class="sidebar-item">
                              <a href="javascript:void(0)" class="sidebar-link sublink">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Level 1</span>
                              </a>
                           </li>
                           <li class="sidebar-item">
                              <a class="sidebar-link has-arrow sublink" href="javascript:void(0)" aria-expanded="false">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                 </div>
                                 <span class="hide-menu">Level 1.1</span>
                              </a>
                              <ul aria-expanded="false" class="collapse two-level">
                                 <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link sublink">
                                       <div class="round-16 d-flex align-items-center justify-content-center">
                                          <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                       </div>
                                       <span class="hide-menu">Level 2</span>
                                    </a>
                                 </li>
                                 <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow sublink" href="javascript:void(0)" aria-expanded="false">
                                       <div class="round-16 d-flex align-items-center justify-content-center">
                                          <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                       </div>
                                       <span class="hide-menu">Level 2.1</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse three-level">
                                       <li class="sidebar-item">
                                          <a href="javascript:void(0)" class="sidebar-link sublink">
                                             <div class="round-16 d-flex align-items-center justify-content-center">
                                                <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                             </div>
                                             <span class="hide-menu">Level 3</span>
                                          </a>
                                       </li>
                                       <li class="sidebar-item">
                                          <a href="javascript:void(0)" class="sidebar-link sublink">
                                             <div class="round-16 d-flex align-items-center justify-content-center">
                                                <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                             </div>
                                             <span class="hide-menu">Level 3.1</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link link-disabled" href="#disabled" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:forbidden-circle-line-duotone" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">Disabled</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="#sub" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                           </span>
                           <div class="lh-base">
                              <div class="hide-menu">SubCaption</div>
                              <div class="hide-menu fs-2">This is the sutitle</div>
                           </div>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" href="#chip" aria-expanded="false">
                           <div class="d-flex align-items-center gap-2">
                              <span class="d-flex">
                                 <iconify-icon icon="solar:shield-check-line-duotone" class="fs-6"></iconify-icon>
                              </span>
                              <span class="hide-menu">Chip</span>
                           </div>
                           <div class="hide-menu">
                              <span class="badge bg-secondary rounded
                                 ms-auto
                                 px-2
                                 py-1
                                 ">9</span>
                           </div>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" href="#outlined" aria-expanded="false">
                           <div class="d-flex align-items-center gap-2">
                              <span class="d-flex">
                                 <iconify-icon icon="solar:smile-circle-outline" class="fs-6"></iconify-icon>
                              </span>
                              <span class="hide-menu">Outlined</span>
                           </div>
                           <span
                              class="hide-menu badge rounded border border-secondary text-secondary fw-medium fs-2 py-1 px-2">Outline</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link" href="https://google.com/" aria-expanded="false">
                           <span class="d-flex">
                              <iconify-icon icon="solar:link-square-linear" class="fs-6"></iconify-icon>
                           </span>
                           <span class="hide-menu">External Link</span>
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
                     <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="p-2">
                     <i class="ti ti-dots fs-7"></i>
                     </span>
                     </a>
                     <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                           <ul class="navbar-nav flex-row  align-items-center justify-content-center d-flex d-lg-none">
                              <li class="nav-item dropdown">
                                 <a
                                    href="javascript:void(0)"
                                    class="nav-link d-flex d-lg-none align-items-center justify-content-center"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions"
                                    >
                                    <iconify-icon icon="solar:menu-dots-circle-linear"></iconify-icon>
                                 </a>
                              </li>
                         
                           </ul>
                           <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                              <li class="nav-item">
                                 <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
                                    <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                 </a>
                                 <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)" style="display: none;">
                                    <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                 </a>
                              </li>
                              <li class="nav-item d-none d-lg-block search-box">
                                 <a class="nav-link nav-icon-hover d-none d-md-flex waves-effect waves-dark" href="javascript:void(0)"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                                 </a>
                              </li>
                              <!-- ------------------------------- -->
                              <!-- end notification Dropdown -->
                              <!-- ------------------------------- -->
                              <!-- ------------------------------- -->
                              <!-- start language Dropdown -->
                              <!-- ------------------------------- -->
                              <li class="nav-item hover-dd dropdown">
                                 <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                 <img src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px"
                                    class="round-20" />
                                 </a>
                                 <div class="dropdown-menu pt-0 dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                       <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                          <div class="position-relative">
                                             <img src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px"
                                                class="round-20" />
                                          </div>
                                          <p class="mb-0 fs-3">English</p>
                                       </a>
                                       <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                          <div class="position-relative">
                                             <img src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-flag-cn.svg" alt="" width="20px" height="20px"
                                                class="round-20" />
                                          </div>
                                          <p class="mb-0 fs-3">Chinese</p>
                                       </a>
                                       <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                          <div class="position-relative">
                                             <img src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-flag-fr.svg" alt="" width="20px" height="20px"
                                                class="round-20" />
                                          </div>
                                          <p class="mb-0 fs-3">French</p>
                                       </a>
                                       <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                          <div class="position-relative">
                                             <img src="https://bootstrapdemos.wrappixel.com/ample/dist/assets/images/svgs/icon-flag-sa.svg" alt="" width="20px" height="20px"
                                                class="round-20" />
                                          </div>
                                          <p class="mb-0 fs-3">Arabic</p>
                                       </a>
                                    </div>
                                 </div>
                              </li>
                              <!-- ------------------------------- -->
                              <!-- end language Dropdown -->
                              <!-- ------------------------------- -->
                              <!-- ------------------------------- -->
                              <!-- start profile Dropdown -->
                              <!-- ------------------------------- -->
                              <li class="nav-item hover-dd dropdown">
                                 <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                 <img src="{{asset('assets/images/profile/user-1.jpg')}}" alt="user"
                                    class="profile-pic rounded round-30" />
                                 </a>
                        
                              </li>
                              <!-- ------------------------------- -->
                              <!-- end profile Dropdown -->
                              <!-- ------------------------------- -->
                           </ul>
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
                            <a class="sidebar-link" href="icon-tabler.html" aria-expanded="false">
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
                        <li class="sidebar-item">
                           <a class="sidebar-link" href="{{route('kmeans.beasiswa')}}"
                           aria-expanded="false">
                              <span class="d-flex">
                                 <iconify-icon icon="solar:graph-new-up-broken" class="fs-6"></iconify-icon>
                              </span>
                              <span class="hide-menu">
                                   K-Means - Tipe Beasiswa
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