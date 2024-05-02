<?php 
session_start();

echo $_SERVER;
?>

<!DOCTYPE html>
<html lang="pt-PT" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Clinica Rio Este | Login</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative">
            <div class="card overflow-hidden z-index-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);">
                      </div>
                      <!--/.bg-holder-->

                      <div class="z-index-1 position-relative">
                        <a class="d-flex justify-content-center align-items-center" href="../../../index.php">
                          <img src="../../../assets/img/logoClinica.png" width="320">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <div class="row justify-content-center">
                        <div class="col-auto">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-4xl me-4">
                              <img class="rounded-circle" src="../../../assets/img/team/1.jpg" alt="" />

                            </div>
                            <div class="flex-1">
                              <h4>Olá !</h4>
                              <p class="mb-0">Introduza a sua password<br> para continuar.</p>
                            </div>
                          </div>
                          <form class="mt-4 row gx-2">
                            <div class="col">
                              <input class="form-control" type="password" placeholder="Password" aria-label="User's password" aria-describedby="user-password" />
                            </div>
                            <div class="col-4">
                              <button class="btn btn-primary d-block w-100" style="background: #0388A6;" id="user-password" type="button" onclick="check()">Login</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script>
      async function check(){
        password = document.getElementById('user-password').value;
        
        const data = await fetch('../../../backend/lock-screen-check.php', )
      }
    </script>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>

  </body>

</html>