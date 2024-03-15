
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

            <?php 
                if (isset($_SESSION['connected'])) {
                    
                    $filename = "uploads/" . $_SESSION['firstname'] . ".png";
                    if (file_exists($filename)) {
                        //on efface le fichier s'il existe
                        unlink($filename);
                    }
                }
            ?>

                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="text-center my-5">
                                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                                        <div class ="">
                                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">
                                        <label for ="upload file" class =""> Veuillez déposer votre image de profil </label>
                                        <br><br>
                                        </h2></span>
                                        </h3>
                                        <input type="file" class="btn btn-primary" id ="upload_file" name ="upload_file"/>
                                        </div>
                                        <br><br>
                                        <button type ="submit" class = "btn btn-primary"> Envoyer </button>
                                    </form>
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
