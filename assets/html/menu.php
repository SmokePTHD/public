<!DOCTYPE html>
<html lang="pt-PT" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicons/favicon.ico">
    <link rel="manifest" href="../img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../js/config.js"></script>
    <script src="../../vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet" id="style-default">
    <link href="../css/user.min.css" rel="stylesheet" id="user-style-default">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

    <script>
        var isFluid = JSON.parse(localStorage.getItem('isFluid'));
        if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
        }
    </script>
    <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
        <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
                document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
        </script>
        <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Ativar/Desativar Menu"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="../public/index.php">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="../img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span>
            </div>
        </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
            <li class="nav-item">
                <!-- parent pages--><a class="nav-link" href="../public/index.php" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
                </div>
                </a>
            </li>
            <li class="nav-item">
                <!-- label-->
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                <div class="col-auto navbar-vertical-label">App
                </div>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                </div>
                <!-- parent pages--><a class="nav-link" href="../public/app/calendar.php" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Agenda</span>
                </div>
                </a>
                <!-- parent pages--><a class="nav-link" href="../public/app/stock.php" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-box"></span></span><span class="nav-link-text ps-1">Stock</span>
                </div>
                </a>
                <!-- parent pages--><a class="nav-link" href="../public/app/chat.php" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Mensagens</span>
                </div>
                </a>
                <!-- parent pages--><a class="nav-link" href="../public/app/email/inbox.php" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span>
                </div>
                </a>
                <!-- parent pages--><a class="nav-link" href="../public/app/kanban.php" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span>
                </div>
                </a>
                <!-- parent pages--><a class="nav-link" href="../public/app/calendar.php" role="button">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-shield"></span></span><span class="nav-link-text ps-1">Gerir</span>
                </div>
                </a>
            </li>
            </ul>              
        </div>
        </div>
    </nav>
    <div class="content">
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="../../index.php">
            <div class="d-flex align-items-center"><img class="me-2" src="../img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span>
            </div>
        </a>
        <ul class="navbar-nav align-items-center d-none d-lg-block">
            <li class="nav-item">
            <div class="search-box" data-list='{"valueNames":["title"]}'>
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                <input class="form-control search-input fuzzy-search" type="search" placeholder=" Procurar" aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>

                </form>
                <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
                </div>
                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                <div class="scrollbar list py-3" style="max-height: 24rem;">
                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="../../app/events/event-detail.html">
                    <div class="d-flex align-items-center">
                        <span class="fas fa-circle me-2 text-300 fs--2"></span>

                        <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                    </div>
                    </a>
                    <a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="../../app/e-commerce/customers.html">
                    <div class="d-flex align-items-center">
                        <span class="fas fa-circle me-2 text-300 fs--2"></span>

                        <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                    </div>
                    </a>

                    <hr class="text-200 dark__text-900" />
                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-0" href="../../app/e-commerce/customers.html">
                    <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                        <div class="flex-1 fs--1 title">All customers list</div>
                    </div>
                    </a>
                    <a class="dropdown-item px-x1 py-1 fs-0" href="../../app/events/event-detail.html">
                    <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                        <div class="flex-1 fs--1 title">Latest events in current month</div>
                    </div>
                    </a>
                    <a class="dropdown-item px-x1 py-1 fs-0" href="../../app/e-commerce/product/product-grid.html">
                    <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                        <div class="flex-1 fs--1 title">Most popular products</div>
                    </div>
                    </a>

                    <hr class="text-200 dark__text-900" />
                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                    <div class="d-flex align-items-center">
                        <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="../assets/img/products/3-thumb.png" alt="" /></div>
                        <div class="flex-1">
                        <h6 class="mb-0 title">iPhone</h6>
                        <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                        </div>
                    </div>
                    </a>
                    <a class="dropdown-item px-x1 py-2" href="#!">
                    <div class="d-flex align-items-center">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/icons/zip.png" alt="" /></div>
                        <div class="flex-1">
                        <h6 class="mb-0 title">Falcon v1.8.2</h6>
                        <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                        </div>
                    </div>
                    </a>

                    <hr class="text-200 dark__text-900" />
                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-l status-online me-2">
                        <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                        </div>
                        <div class="flex-1">
                        <h6 class="mb-0 title">Anna Karinina</h6>
                        <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                        </div>
                    </div>
                    </a>
                    <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-l me-2">
                        <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />

                        </div>
                        <div class="flex-1">
                        <h6 class="mb-0 title">Antony Hopkins</h6>
                        <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                        </div>
                    </div>
                    </a>
                    <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-l me-2">
                        <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

                        </div>
                        <div class="flex-1">
                        <h6 class="mb-0 title">Emma Watson</h6>
                        <p class="fs--2 mb-0 d-flex">Google</p>
                        </div>
                    </div>
                    </a>

                </div>
                <div class="text-center mt-n3">
                    <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                </div>
                </div>
            </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                    </div>
                    <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                    </div>
                </div>
                <div class="scrollbar-overlay" style="max-height:19rem">
                    <div class="list-group list-group-flush fw-normal fs--1">
                    <div class="list-group-title border-bottom">NEW</div>
                    <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                        <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                            <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />

                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>

                        </div>
                        </a>

                    </div>
                    <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                        <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                            <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>

                        </div>
                        </a>

                    </div>
                    <div class="list-group-title border-bottom">EARLIER</div>
                    <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                        <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                            <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />

                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>

                        </div>
                        </a>

                    </div>
                    <div class="list-group-item">
                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                            <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />

                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>

                        </div>
                        </a>

                    </div>
                    <div class="list-group-item">
                        <a class="border-bottom-0 notification notification-flush" href="#!">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                            <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />

                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>

                        </div>
                        </a>

                    </div>
                    </div>
                </div>
                <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
                </div>
            </div>

            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
        
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../js/theme.js"></script>
    <script src="../js/inactivity-lock.js"></script>

  </body>

</html>