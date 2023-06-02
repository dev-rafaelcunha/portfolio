<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Portfólio/Sobre</title>
</head>

<body class="overflow-hidden">

    <!-- CONTAINER -->
    <div class="container" style="height: 100vh;">

        <!-- HEADER -->
        <?php require_once('include/header.php') ?>
        <!-- HEADER -->

        <section class="section-about d-flex align-items-center" style="height: 100vh;">

            <div>

                <div class="title-header">
                    <h2 class="text-center text-danger" style="font-family: 'berkshire Swash', cursive;">Quem Sou?</h2>
                    <p class="text-center fs-5 text-secondary">Perfil profissional | Tudo sobre mim!
                    </p>
                    <div class="d-flex justify-content-center">
                        <span class="points mx-1"></span>
                        <span class="points mx-1"></span>
                        <span class="points mx-1"></span>
                    </div>
                </div>

                <div class="row my-5">

                    <div class="col-5">
                        <img src="img/rafa2.png" alt="Imagem ilustrativa do autor" class="img-about d-md-flex d-none">
                    </div>
                    <div class="col-7 info-about">
                        <h3>Rafael Cunha</h3>
                        <h5>Desenvolvedor PHP</h5>
                        <hr>
                        <div class="paragrafo d-md-inline d-none">
                            <p class="description">Meu nome é Rafael, sou desenvolvedor back-end, atualmente faço
                                estágio na empresa <b>Tork Soluções</b>, como desenvolvedor PHP.
                            </p>
                            <p class="description">Atuo também na parte de front-end, podendo desenvolver sistemas,
                                sites, blogs, altamente responsivos.</p>
                            <p class="description">Amo tecnologia, estou sempre disposto a aprender e compartilhar meus
                                conhecimentos, em busca de novos desafios.</p>
                        </div>
                        <div class="row info-about info-author">
                            <div class="col-md-6 px-0">
                                <p class="badge text-secondary d-flex align-items-center"><i
                                        class="fa-solid fa-calendar-days px-3 text-danger fs-4"></i>Data de Nascimento:
                                    08/04/1996</p>
                                <p class="badge text-secondary d-flex align-items-center"><i
                                        class="fa-solid fa-location-dot px-3 text-danger fs-4"></i>Localidade: Santa
                                    Catarina, Brasil</p>
                            </div>
                            <div class="col-md-6 p-0">
                                <p class="badge text-secondary d-flex align-items-center"><i
                                        class="fa-solid fa-envelope mx-3 text-danger fs-4"></i>Email:
                                    dev.rafaelcunha@gmail.com</p>
                                <p class="badge text-secondary d-flex align-items-center"><i
                                        class="fa-solid fa-phone mx-3 text-danger fs-4"></i>Telefone: (47) 9 8810-8910
                                </p>
                            </div>
                        </div>
                    </div>
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