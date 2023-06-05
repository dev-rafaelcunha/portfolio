<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Portfólio</title>
</head>

<body class="overflow-hidden">

    <!-- CONTAINER -->
    <div class="container" style="height: 100vh;">

        <!-- HEADER -->
        <?php require_once('include/headerMobile.php') ?>
        <!-- HEADER -->

        <section class="section-mobile d-flex align-items-center justify-content-center overflow-auto" style="height: 100vh;">

            <nav>

                <div class="nav" id="navbarSupportedContent">
                    <ul class="navbar-nav h5 nav-mobile">
                        <li class="nav-item">
                            <a class="nav-link link" aria-current="page" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="tech.php">Tecnologias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Projetos
                            </a>
                            <ul class="dropdown-menu">
                                <li><span class="dropdown-item d-flex align-items-center" style="font-size: 14px;"><span
                                            class="px-2">
                                            <strong>Próprio</strong></span></span></li>
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="http://localhost/sistema-php/" target="_blank"><span
                                            class="px-2 d-flex align-items-center"><i
                                                class="fa-solid fa-circle px-2 text-danger"
                                                style="font-size: 5px;"></i>Sistema PHP
                                        </span></a></li>
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="http://localhost/sistema-php-lite/" target="_blank"><span
                                            class="px-2 d-flex align-items-center"><i
                                                class="fa-solid fa-circle px-2 text-danger"
                                                style="font-size: 5px;"></i>Sistema PHP vLite
                                        </span></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><span class="dropdown-item d-flex align-items-center" style="font-size: 14px;"><span
                                            class="px-2">
                                            <strong>Hcode Treinamentos</strong></span></span></li>
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="http://localhost/estudos/netflix-clone/" target="_blank"><span
                                            class="px-2 d-flex align-items-center"><i
                                                class="fa-solid fa-circle px-2 text-danger"
                                                style="font-size: 5px;"></i>Netflix Clone
                                        </span></a></li>
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="http://localhost/estudos/hcode-bootstrap/Whatsapp/" target="_blank"><span
                                            class="px-2 d-flex align-items-center"><i
                                                class="fa-solid fa-circle px-2 text-danger"
                                                style="font-size: 5px;"></i>WhatsApp Clone
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Contatos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="https://contate.me/rafaelcunha" target="_blank"><i
                                            class="fa-brands fa-whatsapp text-danger fs-5 px-2"></i><span
                                            class="">WhatsApp</span></a></li>
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="https://www.instagram.com/dev.rafaelcunha/" target="_blank"><i
                                            class="fa-brands fa-instagram text-danger fs-5 px-2"></i><span
                                            class="">Instagram</span></a></li>
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="https://www.linkedin.com/in/devrafaelcunha/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in text-danger fs-5 px-2"></i><span
                                            class=""><strong>Linkedin</strong></span></a></li>
                                <li><a class="dropdown-item d-flex align-items-center" style="font-size: 14px;"
                                        href="https://github.com/dev-rafaelcunha" target="_blank"><i
                                            class="fa-brands fa-github text-danger fs-5 px-2"></i><span
                                            class=""><strong>GitHub</strong></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>

        </section>
    </div>
    <!-- CONTAINER -->

    <!-- FOOTER -->
    <?php require_once('include/footer.php') ?>
    <!-- FOOTER -->

    <script src="js/script.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a57e572c96.js" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>