<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="front-pages">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Landing Page - Front Pages | Frest - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/front-config.js"></script>
  </head>

  <body>
    <script src="../../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../../assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="py-0 shadow-none layout-navbar">
      <div class="container">
        <div class="px-3 navbar navbar-expand-lg landing-navbar px-md-4">
          <!-- Menu logo wrapper: Start -->
          <div class="py-0 navbar-brand app-brand demo d-flex me-4">
            <!-- Mobile menu toggle: Start-->
            <button
              class="px-0 border-0 navbar-toggler me-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="align-middle tf-icons bx bx-menu bx-sm"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="26px"
                  height="26px"
                  viewBox="0 0 26 26"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>icon</title>
                  <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                      <stop stop-color="#5A8DEE" offset="0%"></stop>
                      <stop stop-color="#699AF9" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                      <stop stop-color="#FDAC41" offset="0%"></stop>
                      <stop stop-color="#E38100" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                      <g id="Login" transform="translate(519.000000, 244.000000)">
                        <g id="Logo" transform="translate(148.000000, 42.000000)">
                          <g id="icon" transform="translate(0.000000, 4.000000)">
                            <path
                              d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                              id="Combined-Shape"
                              fill="#4880EA"></path>
                            <path
                              d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                              id="Combined-Shape2"
                              fill="url(#linearGradient-1)"></path>
                            <rect
                              id="Rectangle"
                              fill="url(#linearGradient-2)"
                              x="0"
                              y="0"
                              width="7.68181818"
                              height="7.68181818"></rect>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Frest</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="top-0 border-0 navbar-toggler text-heading position-absolute end-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="tf-icons bx bx-x bx-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingTeam">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingContact">Contact us</a>
              </li>
              <li class="nav-item mega-dropdown">
                <a
                  href="javascript:void(0);"
                  class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                  aria-expanded="false"
                  data-bs-toggle="mega-dropdown"
                  data-trigger="hover">
                  <span data-i18n="Pages">Pages</span>
                </a>
                <div class="p-4 dropdown-menu">
                  <div class="row gy-4">
                    <div class="col-12 col-lg">
                      <div class="mb-2 h6 d-flex align-items-center mb-lg-3">
                        <div class="flex-shrink-0 avatar avatar-sm me-2">
                          <span class="rounded avatar-initial bg-label-primary"><i class="bx bx-grid-alt"></i></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pricing-page.html">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Pricing">Pricing</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="payment-page.html">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Payment">Payment</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="checkout-page.html">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Checkout">Checkout</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="help-center-landing.html">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Help Center">Help Center</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="mb-2 h6 d-flex align-items-center mb-lg-3">
                        <div class="flex-shrink-0 avatar avatar-sm me-2">
                          <span class="rounded avatar-initial bg-label-primary"><i class="bx bx-lock-open"></i></span>
                        </div>
                        <span class="ps-1">Auth Demo</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-basic.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Login (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-cover.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Login (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-basic.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Register (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-cover.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Register (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-multisteps.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Register (Multi-steps)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-basic.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Forgot Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-cover.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Forgot Password (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-basic.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Reset Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-cover.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Reset Password (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="mb-2 h6 d-flex align-items-center mb-lg-3">
                        <div class="flex-shrink-0 avatar avatar-sm me-2">
                          <span class="rounded avatar-initial bg-label-primary"><i class="bx bx-image-alt"></i></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-error.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Error
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-under-maintenance.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Under Maintenance
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-comingsoon.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Coming Soon
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-not-authorized.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Not Authorized
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-basic.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Verify Email (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-cover.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Verify Email (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-basic.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Two Steps (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-cover.html"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Two Steps (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                      <div class="p-2 bg-body nav-img-col">
                        <img
                          src="../../assets/img/front-pages/misc/nav-item-col-img.png"
                          alt="nav item col image"
                          class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../vertical-menu-template/index.html" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="flex-row navbar-nav align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <i class="bx bx-sm"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                    <span class="align-middle"><i class="bx bx-sun me-2"></i>Light</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                    <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                    <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              <a href="{{  route('login')}}" class="btn btn-primary"
                ><span class="tf-icons bx bx-user me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
          <div class="container">
            <div class="text-center hero-text-box">
              <h1 class="text-primary hero-title display-4 fw-bold">One dashboard to manage all your businesses</h1>
              <h2 class="pb-1 mb-4 hero-sub-title h6">
                Production-ready & easy to use Admin Template<br class="d-none d-lg-block" />
                for Reliability and Customizability.
              </h2>
              <div class="landing-hero-btn d-inline-block position-relative">
                <span class="hero-btn-item position-absolute d-none d-md-flex text-heading"
                  >Join community
                  <img
                    src="../../assets/img/front-pages/icons/Join-community-arrow.png"
                    alt="Join community arrow"
                    class="scaleX-n1-rtl"
                /></span>
                <a href="#landingPricing" class="btn btn-primary">Get early access</a>
              </div>
            </div>
            <div id="heroDashboardAnimation" class="hero-animation-img">
              <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                  <img
                    src="../../assets/img/front-pages/landing-page/hero-dashboard-light.png"
                    alt="hero dashboard"
                    class="animation-img"
                    data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                  <img
                    src="../../assets/img/front-pages/landing-page/hero-elements-light.png"
                    alt="hero elements"
                    class="top-0 position-absolute hero-elements-img animation-img start-0"
                    data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="landing-hero-blank"></div>
      </section>
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
          <div class="pb-1 mb-3 text-center">
            <span class="badge bg-label-primary">Useful Features</span>
          </div>
          <h3 class="mb-1 text-center">
            <span class="section-title">Everything you need</span> to start your next project
          </h3>
          <p class="pb-3 mb-3 text-center mb-md-5">
            Not just a set of tools, the package includes ready-to-deploy conceptual application.
          </p>
          <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
            <div class="text-center col-lg-4 col-sm-6 features-icon-box">
              <div class="mb-3 text-center">
                <img src="../../assets/img/front-pages/icons/laptop.png" alt="laptop charging" />
              </div>
              <h5 class="mb-3">Quality Code</h5>
              <p class="features-icon-description">
                Code structure that all developers will easily understand and fall in love with.
              </p>
            </div>
            <div class="text-center col-lg-4 col-sm-6 features-icon-box">
              <div class="mb-3 text-center">
                <img src="../../assets/img/front-pages/icons/rocket.png" alt="transition up" />
              </div>
              <h5 class="mb-3">Continuous Updates</h5>
              <p class="features-icon-description">
                Free updates for the next 12 months, including new demos and features.
              </p>
            </div>
            <div class="text-center col-lg-4 col-sm-6 features-icon-box">
              <div class="mb-3 text-center">
                <img src="../../assets/img/front-pages/icons/paper.png" alt="edit" />
              </div>
              <h5 class="mb-3">Stater-Kit</h5>
              <p class="features-icon-description">
                Start your project quickly without having to remove unnecessary features.
              </p>
            </div>
            <div class="text-center col-lg-4 col-sm-6 features-icon-box">
              <div class="mb-3 text-center">
                <img src="../../assets/img/front-pages/icons/check.png" alt="3d select solid" />
              </div>
              <h5 class="mb-3">API Ready</h5>
              <p class="features-icon-description">
                Just change the endpoint and see your own data loaded within seconds.
              </p>
            </div>
            <div class="text-center col-lg-4 col-sm-6 features-icon-box">
              <div class="mb-3 text-center">
                <img src="../../assets/img/front-pages/icons/user.png" alt="lifebelt" />
              </div>
              <h5 class="mb-3">Excellent Support</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
            <div class="text-center col-lg-4 col-sm-6 features-icon-box">
              <div class="mb-3 text-center">
                <img src="../../assets/img/front-pages/icons/keyboard.png" alt="google docs" />
              </div>
              <h5 class="mb-3">Well Documented</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Useful features: End -->

      <!-- Real customers reviews: Start -->
      <section id="landingReviews" class="pb-0 section-py bg-body landing-reviews">
        <!-- What people say slider: Start -->
        <div class="container">
          <div class="row align-items-center gx-0 gy-4 g-lg-5">
            <div class="col-md-6 col-lg-5 col-xl-3">
              <div class="pb-1 mb-3">
                <span class="badge bg-label-primary">Real Customers Reviews</span>
              </div>
              <h3 class="mb-1"><span class="section-title">What people say</span></h3>
              <p class="mb-3 mb-md-5">
                See what our customers have to<br class="d-none d-xl-block" />
                say about their experience.
              </p>
              <div class="gap-3 landing-reviews-btns d-flex align-items-center">
                <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn" type="button">
                  <i class="bx bx-chevron-left bx-sm"></i>
                </button>
                <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn" type="button">
                  <i class="bx bx-chevron-right bx-sm"></i>
                </button>
              </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-9">
              <div class="mb-5 overflow-hidden swiper-reviews-carousel pb-md-2 pb-md-3">
                <div class="swiper" id="swiper-reviews">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-1.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Frest is hands down the most useful front end Bootstrap theme I've ever used. I can't wait
                            to use it again for my next project.”
                          </p>
                          <div class="mb-3 text-warning">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Cecilia Payne</h6>
                              <p class="mb-0 small text-muted">CEO of Airbnb</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-2.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “I've never used a theme as versatile and flexible as Frest. It's my go to for building
                            dashboard sites on almost any project.”
                          </p>
                          <div class="mb-3 text-warning">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Eugenia Moore</h6>
                              <p class="mb-0 small text-muted">Founder of Hubspot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-3.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            This template is really clean & well documented. The docs are really easy to understand and
                            it's always easy to find a screenshot from their website.
                          </p>
                          <div class="mb-3 text-warning">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Curtis Fletcher</h6>
                              <p class="mb-0 small text-muted">Design Lead at Dribbble</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-4.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            All the requirements for developers have been taken into consideration, so I’m able to build
                            any interface I want.
                          </p>
                          <div class="mb-3 text-warning">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bx-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Sara Smith</h6>
                              <p class="mb-0 small text-muted">Founder of Continental</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-5.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “I've never used a theme as versatile and flexible as Frest. It's my go to for building
                            dashboard sites on almost any project.”
                          </p>
                          <div class="mb-3 text-warning">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Eugenia Moore</h6>
                              <p class="mb-0 small text-muted">Founder of Hubspot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-6.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo mollitia, ad eum
                            officia numquam nostrum repellendus consequuntur!
                          </p>
                          <div class="mb-3 text-warning">
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bxs-star bx-sm"></i>
                            <i class="bx bx-star bx-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Sara Smith</h6>
                              <p class="mb-0 small text-muted">Founder of Continental</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- What people say slider: End -->
        <hr class="m-0" />
        <!-- Logo slider: Start -->
        <div class="container">
          <div class="py-4 swiper-logo-carousel my-lg-2">
            <div class="swiper" id="swiper-clients-logos">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_1-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_1-light.png"
                    data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_2-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_2-light.png"
                    data-app-dark-img="front-pages/branding/logo_2-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_3-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_3-light.png"
                    data-app-dark-img="front-pages/branding/logo_3-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_4-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_4-light.png"
                    data-app-dark-img="front-pages/branding/logo_4-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_5-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_5-light.png"
                    data-app-dark-img="front-pages/branding/logo_5-dark.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Logo slider: End -->
      </section>
      <!-- Real customers reviews: End -->

      <!-- Our great team: Start -->
      <section id="landingTeam" class="section-py landing-team">
        <div class="container">
          <div class="pb-1 mb-3 text-center">
            <span class="badge bg-label-primary">Our Great Team</span>
          </div>
          <h3 class="mb-1 text-center"><span class="section-title">Supported</span> by Real People</h3>
          <p class="pb-3 text-center mb-md-5">Who is behind these great-looking interfaces?</p>
          <div class="mt-2 row gy-5">
            <div class="col-lg-3 col-sm-6">
              <div class="mt-3 shadow-none card mt-lg-0">
                <div class="bg-label-primary position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-1.png"
                    class="bottom-0 position-absolute card-img-position start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="text-center border card-body border-label-primary border-top-0">
                  <h5 class="mb-0 card-title">Sophie Gilbert</h5>
                  <p class="mb-0 text-muted">Project Manager</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="mt-3 shadow-none card mt-lg-0">
                <div class="bg-label-info position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-2.png"
                    class="bottom-0 position-absolute card-img-position start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="text-center border card-body border-label-info border-top-0">
                  <h5 class="mb-0 card-title">Paul Miles</h5>
                  <p class="mb-0 text-muted">UI Designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="mt-3 shadow-none card mt-lg-0">
                <div class="bg-label-danger position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-3.png"
                    class="bottom-0 position-absolute card-img-position start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="text-center border card-body border-label-danger border-top-0">
                  <h5 class="mb-0 card-title">Nannie Ford</h5>
                  <p class="mb-0 text-muted">Development Lead</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="mt-3 shadow-none card mt-lg-0">
                <div class="bg-label-success position-relative team-image-box">
                  <img
                    src="../../assets/img/front-pages/landing-page/team-member-4.png"
                    class="bottom-0 position-absolute card-img-position start-50 scaleX-n1-rtl img-fluid"
                    alt="human image" />
                </div>
                <div class="text-center border card-body border-label-success border-top-0">
                  <h5 class="mb-0 card-title">Chris Watkins</h5>
                  <p class="mb-0 text-muted">Marketing Manager</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our great team: End -->

      <!-- Pricing plans: Start -->
      <section id="landingPricing" class="section-py bg-body landing-pricing">
        <div class="container">
          <div class="pb-1 mb-3 text-center">
            <span class="badge bg-label-primary">Pricing Plans</span>
          </div>
          <h3 class="mb-1 text-center"><span class="section-title">Tailored pricing plans</span> designed for you</h3>
          <p class="pb-3 mb-4 text-center">
            All plans include 40+ advanced tools and features to boost your product.<br />Choose the best plan to fit
            your needs.
          </p>
          <div class="mb-5 text-center">
            <div class="pt-3 position-relative d-inline-block pt-md-0">
              <label class="switch switch-primary me-0">
                <span class="switch-label">Pay Monthly</span>
                <input type="checkbox" class="switch-input price-duration-toggler" checked />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Pay Annual</span>
              </label>
              <div class="pricing-plans-item position-absolute d-flex">
                <img
                  src="../../assets/img/front-pages/icons/pricing-plans-arrow.png"
                  alt="pricing plans arrow"
                  class="scaleX-n1-rtl" />
                <span class="mt-2 fw-medium ms-1"> Save 25%</span>
              </div>
            </div>
          </div>
          <div class="row gy-4 pt-lg-3">
            <!-- Basic Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="../../assets/img/front-pages/icons/paper-airplane.png"
                      alt="paper airplane icon"
                      class="pb-2 mb-4 scaleX-n1-rtl" />
                    <h4 class="mb-1">Basic</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="mb-0 price-monthly h1 text-primary fw-bold">$19</span>
                      <span class="mb-0 price-yearly h1 text-primary fw-bold d-none">$14</span>
                      <sub class="mb-0 h6 text-muted ms-1">/mo</sub>
                    </div>
                    <div class="pt-2 position-relative">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 168 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Timeline
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Basic search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Live chat widget
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Email marketing
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Custom Forms
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Traffic analytics
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Basic Support
                      </h5>
                    </li>
                  </ul>
                  <div class="pt-3 mt-4 d-grid">
                    <a href="payment-page.html" class="btn btn-label-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Basic Plan: End -->

            <!-- Favourite Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="border shadow-lg card border-primary">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="../../assets/img/front-pages/icons/plane.png"
                      alt="plane icon"
                      class="pb-2 mb-4 scaleX-n1-rtl" />
                    <h4 class="mb-1">Team</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="mb-0 price-monthly h1 text-primary fw-bold">$29</span>
                      <span class="mb-0 price-yearly h1 text-primary fw-bold d-none">$22</span>
                      <sub class="mb-0 h6 text-muted ms-1">/mo</sub>
                    </div>
                    <div class="pt-2 position-relative">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 264 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Everything in basic
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Timeline with database
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Advanced search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Marketing automation
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Advanced chatbot
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Campaign management
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Collaboration tools
                      </h5>
                    </li>
                  </ul>
                  <div class="pt-3 mt-4 d-grid">
                    <a href="payment-page.html" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Favourite Plan: End -->

            <!-- Standard Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="../../assets/img/front-pages/icons/shuttle-rocket.png"
                      alt="shuttle rocket icon"
                      class="pb-2 mb-4 scaleX-n1-rtl" />
                    <h4 class="mb-1">Enterprise</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="mb-0 price-monthly h1 text-primary fw-bold">$49</span>
                      <span class="mb-0 price-yearly h1 text-primary fw-bold d-none">$37</span>
                      <sub class="mb-0 h6 text-muted ms-1">/mo</sub>
                    </div>
                    <div class="pt-2 position-relative">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 444 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Everything in premium
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Timeline with database
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Fuzzy search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        A/B testing sanbox
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Custom permissions
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Social media automation
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="p-0 badge badge-center rounded-pill bg-label-primary me-2"
                          ><i class="bx bx-check bx-xs"></i
                        ></span>
                        Sales automation tools
                      </h5>
                    </li>
                  </ul>
                  <div class="pt-3 mt-4 d-grid">
                    <a href="payment-page.html" class="btn btn-label-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Standard Plan: End -->
          </div>
        </div>
      </section>
      <!-- Pricing plans: End -->

      <!-- Fun facts: Start -->
      <section id="landingFunFacts" class="section-py landing-fun-facts">
        <div class="container">
          <div class="row gy-3">
            <div class="col-sm-6 col-lg-3">
              <div class="border shadow-none card border-label-primary">
                <div class="text-center card-body">
                  <img src="../../assets/img/front-pages/icons/laptop.png" alt="laptop" class="mb-2" />
                  <h5 class="mb-1 h2">7.1k+</h5>
                  <p class="mb-0 fw-medium">
                    Support Tickets<br />
                    Resolved
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="border shadow-none card border-label-success">
                <div class="text-center card-body">
                  <img src="../../assets/img/front-pages/icons/user-success.png" alt="laptop" class="mb-2" />
                  <h5 class="mb-1 h2">50k+</h5>
                  <p class="mb-0 fw-medium">
                    Join creatives<br />
                    community
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="border shadow-none card border-label-info">
                <div class="text-center card-body">
                  <img src="../../assets/img/front-pages/icons/diamond-info.png" alt="laptop" class="mb-2" />
                  <h5 class="mb-1 h2">4.8/5</h5>
                  <p class="mb-0 fw-medium">
                    Highly Rated<br />
                    Products
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="border shadow-none card border-label-warning">
                <div class="text-center card-body">
                  <img src="../../assets/img/front-pages/icons/check-warning.png" alt="laptop" class="mb-2" />
                  <h5 class="mb-1 h2">100%</h5>
                  <p class="mb-0 fw-medium">
                    Money Back<br />
                    Guarantee
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Fun facts: End -->

      <!-- FAQ: Start -->
      <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
          <div class="pb-1 mb-3 text-center">
            <span class="badge bg-label-primary">FAQ</span>
          </div>
          <h3 class="mb-1 text-center">Frequently asked <span class="section-title">questions</span></h3>
          <p class="pb-3 mb-5 text-center">Browse through these FAQs to find answers to commonly asked questions.</p>
          <div class="row gy-5">
            <div class="col-lg-5">
              <div class="text-center">
                <img
                  src="../../assets/img/front-pages/landing-page/faq-boy-with-logos.png"
                  alt="faq boy with logos"
                  class="faq-image" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="accordion accordion-header-primary" id="accordionExample">
                <div class="card accordion-item active">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionOne"
                      aria-expanded="true"
                      aria-controls="accordionOne">
                      Do you charge for each upgrade?
                    </button>
                  </h2>

                  <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                      marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                      soufflé. Wafer gummi bears marshmallow pastry pie.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionTwo"
                      aria-expanded="false"
                      aria-controls="accordionTwo">
                      Do I need to purchase a license for each website?
                    </button>
                  </h2>
                  <div
                    id="accordionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                      dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                      beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionThree"
                      aria-expanded="false"
                      aria-controls="accordionThree">
                      What is regular license?
                    </button>
                  </h2>
                  <div
                    id="accordionThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Regular license can be used for end products that do not charge users for access or service(access
                      is free and there will be no monthly subscription fee). Single regular license can be used for
                      single end product and end product can be used by you or your client. If you want to sell end
                      product to multiple clients then you will need to purchase separate license for each client. The
                      same rule applies if you want to use the same end product on multiple domains(unique setup). For
                      more info on regular license you can check official description.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFour"
                      aria-expanded="false"
                      aria-controls="accordionFour">
                      What is extended license?
                    </button>
                  </h2>
                  <div
                    id="accordionFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                      Mollitia reprehenderit neque repellat delenibx delectus architecto dolorum maxime, blanditiis
                      earum ea, incidunt quam possimus cumque.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFive"
                      aria-expanded="false"
                      aria-controls="accordionFive">
                      Which license is applicable for SASS application?
                    </button>
                  </h2>
                  <div
                    id="accordionFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                      nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                      labore enim architecto non!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ: End -->

      <!-- CTA: Start -->
      <section id="landingCTA" class="pb-0 section-py landing-cta p-lg-0">
        <div class="container">
          <div class="row align-items-center gy-5 gy-lg-0">
            <div class="text-center col-lg-6 text-lg-start">
              <h6 class="mb-1 h2 text-primary fw-bold">Ready to Get Started?</h6>
              <p class="mb-4 fw-medium">Start your project with a 14-day free trial</p>
              <a href="payment-page.html" class="btn btn-primary">Get Started</a>
            </div>
            <div class="text-center col-lg-6 pt-lg-5 text-lg-end">
              <img
                src="../../assets/img/front-pages/landing-page/cta-dashboard.png"
                alt="cta dashboard"
                class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <!-- CTA: End -->

      <!-- Contact Us: Start -->
      <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
          <div class="pb-1 mb-3 text-center">
            <span class="badge bg-label-primary">Contact US</span>
          </div>
          <h3 class="mb-1 text-center"><span class="section-title">Let's work</span> together</h3>
          <p class="mb-4 text-center mb-lg-5 pb-md-3">Any question or remark? just write us a message</p>
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="p-2 border contact-img-box position-relative h-100">
                <img
                  src="../../assets/img/front-pages/landing-page/contact-customer-service.png"
                  alt="contact customer service"
                  class="contact-img w-100 scaleX-n1-rtl img-fluid" />
                <div class="px-4 pt-3 pb-1">
                  <div class="row gy-3 gx-md-4">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="p-2 rounded badge bg-label-primary me-2"><i class="bx bx-envelope bx-sm"></i></div>
                        <div>
                          <p class="mb-0">Email</p>
                          <h5 class="mb-0">
                            <a href="mailto:example@gmail.com" class="text-heading">example@gmail.com</a>
                          </h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="p-2 rounded badge bg-label-success me-2">
                          <i class="bx bx-phone-call bx-sm"></i>
                        </div>
                        <div>
                          <p class="mb-0">Phone</p>
                          <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-1">Send a message</h4>
                  <p class="mb-4">
                    If you would like to discuss anything related to payment, account, licensing,<br
                      class="d-none d-lg-block" />
                    partnerships, or have pre-sales questions, you’re at the right place.
                  </p>
                  <form>
                    <div class="row g-4">
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-fullname">Full Name</label>
                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-email">Email</label>
                        <input
                          type="text"
                          id="contact-form-email"
                          class="form-control"
                          placeholder="johndoe@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Message</label>
                        <textarea
                          id="contact-form-message"
                          class="form-control"
                          rows="9"
                          placeholder="Write a message"></textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send inquiry</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
      <div class="footer-top">
        <div class="container">
          <div class="row gx-0 gy-4 g-md-5">
            <div class="col-lg-5">
              <a href="landing-page.html" class="mb-4 app-brand-link">
                <span class="app-brand-logo demo">
                  <svg
                    width="26px"
                    height="26px"
                    viewBox="0 0 26 26"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>icon</title>
                    <defs>
                      <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                        <stop stop-color="#5A8DEE" offset="0%"></stop>
                        <stop stop-color="#699AF9" offset="100%"></stop>
                      </linearGradient>
                      <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                        <stop stop-color="#FDAC41" offset="0%"></stop>
                        <stop stop-color="#E38100" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                        <g id="Login" transform="translate(519.000000, 244.000000)">
                          <g id="Logo" transform="translate(148.000000, 42.000000)">
                            <g id="icon" transform="translate(0.000000, 4.000000)">
                              <path
                                d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                id="Combined-Shape"
                                fill="#4880EA"></path>
                              <path
                                d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                id="Combined-Shape2"
                                fill="url(#linearGradient-1)"></path>
                              <rect
                                id="Rectangle"
                                fill="url(#linearGradient-2)"
                                x="0"
                                y="0"
                                width="7.68181818"
                                height="7.68181818"></rect>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </span>
                <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Frest</span>
              </a>
              <p class="mb-4 footer-text footer-logo-description">
                Most developer friendly & highly customisable Admin Dashboard Template.
              </p>
              <form class="footer-form">
                <label for="footer-email" class="small">Subscribe to newsletter</label>
                <div class="mt-1 d-flex">
                  <input
                    type="email"
                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                    id="footer-email"
                    placeholder="Your email" />
                  <button
                    type="submit"
                    class="shadow-none btn btn-primary rounded-0 rounded-end-bottom rounded-end-top">
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="mb-4 footer-title">Demos</h6>
              <ul class="list-unstyled mb-md-0">
                <li class="mb-3">
                  <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
                </li>
                <li class="mb-3">
                  <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
                </li>
                <li class="mb-3">
                  <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
                </li>
                <li class="mb-3">
                  <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link"
                    >Semi Dark Layout</a
                  >
                </li>
                <li>
                  <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="mb-4 footer-title">Pages</h6>
              <ul class="list-unstyled mb-md-0">
                <li class="mb-3">
                  <a href="pricing-page.html" class="footer-link">Pricing</a>
                </li>
                <li class="mb-3">
                  <a href="payment-page.html" class="footer-link"
                    >Payment<span class="px-2 rounded badge bg-primary ms-2">New</span></a
                  >
                </li>
                <li class="mb-3">
                  <a href="checkout-page.html" class="footer-link">Checkout</a>
                </li>
                <li class="mb-3">
                  <a href="help-center-landing.html" class="footer-link">Help Center</a>
                </li>
                <li>
                  <a href="{{  route('login') }}" target="_blank" class="footer-link"
                    >Login/Register</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-4">
              <h6 class="mb-4 footer-title">Download our app</h6>
              <a href="javascript:void(0);" class="pb-2 mb-3 d-block footer-link"
                ><img src="../../assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon"
              /></a>
              <a href="javascript:void(0);" class="d-block footer-link"
                ><img src="../../assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="py-3 footer-bottom">
        <div
          class="container flex-wrap text-center d-flex justify-content-between flex-md-row flex-column text-md-start">
          <div class="mb-2 mb-md-0">
            <span class="footer-text"
              >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
            <a href="https://pixinvent.com" target="_blank" class="text-white fw-medium footer-link">Pixinvent,</a>
            <span class="footer-text"> Made with ❤️ for a better web.</span>
          </div>
          <div>
            <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/github-light.png"
                alt="github icon"
                data-app-light-img="front-pages/icons/github-light.png"
                data-app-dark-img="front-pages/icons/github-dark.png" />
            </a>
            <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/facebook-light.png"
                alt="facebook icon"
                data-app-light-img="front-pages/icons/facebook-light.png"
                data-app-dark-img="front-pages/icons/facebook-dark.png" />
            </a>
            <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/twitter-light.png"
                alt="twitter icon"
                data-app-light-img="front-pages/icons/twitter-light.png"
                data-app-dark-img="front-pages/icons/twitter-dark.png" />
            </a>
            <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/instagram-light.png"
                alt="google icon"
                data-app-light-img="front-pages/icons/instagram-light.png"
                data-app-dark-img="front-pages/icons/instagram-dark.png" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/front-main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/front-page-landing.js"></script>
  </body>
</html>
