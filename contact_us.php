<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Fakebook - Partout, pour tous</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                <a class="navbar-brand" href="index.php"><span ><img src="assets/bouton_simple.png" width="200" height="70" alt="fakebook"></span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.php">Page d'accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="sign_up.php">Sign up</a></li>
                            <li class="nav-item"><a class="nav-link" href="sign_in.php">Sign in</a></li>
                            <li class="nav-item"><a class="nav-link" href="account.php">Votre profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact_us.php">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="d-flex justify-content-center mb-4"><img src="assets/lettre.png" width="100" height="100" alt=""></div>
                            <h1 class="fw-bolder">Vous voulez nous contacter ?</h1>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                    <div class="form-floating mb-3">
                                        <iframe width="540" height="650" src="https://1f6e07d1.sibforms.com/serve/MUIFAORj2Tk5AERD9uIOck3Y35z2uxzB7kBad7W--TwdiNfPPqyzc_A8sVi5BdtqLEB_s5fXef0fHlZp8Pi2iWKIJW_JCuPNkts9UtR2HHBLnfgPBLDiaexaNEkaypwfwX5IVglkuWzbY09PJdWfmjl-rfJs3vpQlP95LcK-q857jQhZqd-enPMtBMpJ4wnEKnzaCctiHWtiVJH7" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>                        </div>
                    </div>
                </div><br><br>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="row align-items-center gx-5">
                                    <img src="assets/design_aide.png" width="100px" height="300px" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8"><div>Pour plus d'informations,  bah allez vous faire foutre !</div></div>
                        </div>
                    </div>
                </div>

            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; SAFI BOUGHERARA</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="contact_us.php">Contact</a>
                    </div>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
