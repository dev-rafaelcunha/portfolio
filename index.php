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

<body class="light">

    <!-- CONTAINER -->
    <div class="container" style="height: 100vh;">

      <!-- HEADER -->
      <?php require_once('include/header.php') ?>
      <!-- HEADER -->

        <section class="section-home d-flex align-items-center" style="height: 100vh !important;">

            <div class="row">
                <div class="col-6 mx-5">
                    <h2 class="py-5 title">Rafael Cunha</h2>
                    <h3 class="py-2 typing d-sm-flex">Desenvolvedor Back-end</h3>
                    <hr>
                    <div class="d-lg-inline d-none justify-content-center">
                        <p class="my-4 description text-start">Sejam bem Vindos! Me chamo Rafael, tenho 27 anos, e estou
                            cursando Engenharia de Software.</p>
                        <p class="description">Passei minha vida buscando algo que realmente fizesse sentido, até me
                            deparar com o mundo de
                            Desenvolvimento, onde estou feliz, empolgado e totalmente focado, <span
                                class="description-bold">me aperfeiçoando e buscando novos desafios para
                                carreira.</span></p>
                    </div>
                    <div class="py-5 d-flex align-itens-center">
                        <a class="btn btn-lg btn-outline-danger description-bold cv" href="file/Currículo Rafa.pdf" target="_blank">Download CV</a>
                    </div>
                </div>
                <div class="col my-4 py-2">
                    <img src="img/rafa.png" alt="Imagem ilustrativa do autor" class="img-author d-lg-flex d-none">
                </div>
            </div>

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