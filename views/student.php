<!DOCTYPE html>
<html lang="Pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Aluno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d7bdbec83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="js.js">

</head>

<body>
    <div id="CorDefundo">
        <section class="section-top">
            <nav class="navbar navbar-expand-xl navbar-togglable">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.html"><img class="navbar-brand-item light-mode-item" src="assets/images/logo.png"
                                alt="logo"></a>
                        <h1 class="title-logo"><span>CANTINA</span>WEB</h1>
                    </div>
                    <nav>
                        <input type="checkbox" id="menu-toggle" />
                        <label for="menu-toggle" class="menu-icon"><i class="fa fa-bars"></i></label>
                        <div class="slideout-sidebar">
                            <ul>
                                <li><a href="aluno.html">Home</a></li>
                                <li><a href="Aluno-Historico.html">Histórico</a></li>
                                <li><a href="index.html">Sair</a></li>
                            </ul>
                        </div>
                    </nav>
                    <br>
                    <br>
        </section>

        <div class="container">
            <div class="jumbotron">
                <h1>Seu saldo é:</h1>
                <div id="minhaDiv">R$500,00</div>
                <p> </p>
                <p> </p>
                <h5>Faça seu pedido na opção comprar e retire no caixa quando sua matrícula for chamada!</h5>
            </div>
        </div>

        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="assets/images/coxinha.png" alt="coxinhadefrango">
                <div class="card-body">
                    <h5 class="card-title">Coxinha de Frango</h5>
                    <p class="card-text"><small class="text-dark">Lorem ipsum ligula ut est integer curae sapien
                            adipiscing, non
                            tempor at vivamus phasellus inceptos.</small> </p>
                    <p class="card-text"><strong class="text-info">R$7,00</strong></p>
                    <form action="/action_page.php">
                        <label for="quantity"></label>
                        <input class="inptQuantidade" type="number" id="quantity" name="quantity" min="1"
                            placeholder="0">
                    </form>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                        autocomplete="off">
                        Comprar
                    </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/salada de frutas.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Salada de frutas</h5>
                    <p class="card-text"><small class="text-dark">Lorem ipsum faucibus potenti lobortis nisi lorem sed
                            enim,
                            suscipit imperdiet himenaeos nec hendrerit aptent.</small> </p>
                    <p class="card-text"><strong class="text-info">R$7,00</strong></p>
                    <form action="/action_page.php">
                        <label for="quantity"></label>
                        <input class="inptQuantidade" type="number" id="quantity" name="quantity" min="0"
                            placeholder="0">
                    </form>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                        autocomplete="off">
                        Comprar
                    </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/sanduichenatural.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Sanduiche Natural de Frango</h5>
                    <p class="card-text"><small class="text-dark">Lorem ipsum quis nulla sit pharetra faucibus cursus
                            bibendum, eu
                            tortor semper fermentum lorem arcu.</small> </p>
                    <p class="card-text"><strong class="text-info">7,00</strong></p>
                    <form action="/action_page.php">
                        <label for="quantity"></label>
                        <input class="inptQuantidade" type="number" id="quantity" name="quantity" min="0"
                            placeholder="0">
                    </form>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                        autocomplete="off">
                        Adicionar
                    </button>
                </div>
            </div>
        </div>


        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="assets/images/coca.png" alt="coxinhadefrango">
                <div class="card-body">
                    <h5 class="card-title">Coca Cola</h5>
                    <p class="card-text"><small class="text-dark">Lorem ipsum ligula ut est integer curae sapien
                            adipiscing, non
                            tempor at vivamus phasellus inceptos.</small> </p>
                    <p class="card-text"><strong class="text-info">R$7,00</strong></p>
                    <form action="/action_page.php">
                        <label for="quantity"></label>
                        <input class="inptQuantidade" type="number" id="quantity" name="quantity" min="1"
                            placeholder="0">
                    </form>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                        autocomplete="off">
                        Adicionar
                    </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/sucomanga.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Suco de Manga</h5>
                    <p class="card-text"><small class="text-dark">Lorem ipsum faucibus potenti lobortis nisi lorem sed
                            enim,
                            suscipit imperdiet himenaeos nec hendrerit aptent.</small> </p>
                    <p class="card-text"><strong class="text-info">R$7,00</strong></p>
                    <form action="/action_page.php">
                        <label for="quantity"></label>
                        <input class="inptQuantidade" type="number" id="quantity" name="quantity" min="1" max="5"
                            placeholder="0">
                    </form>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                        autocomplete="off">
                        Adicionar
                    </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/mingaudeaveia.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Mingau de Aveia</h5>
                    <p class="card-text"><small class="text-dark">Lorem ipsum quis nulla sit pharetra faucibus cursus
                            bibendum, eu
                            tortor semper fermentum lorem arcu.</small> </p>
                    <p class="card-text"><strong class="text-info">7,00</strong></p>
                    <form action="/action_page.php">
                        <label for="quantity"></label>
                        <input class="inptQuantidade" type="number" id="quantity" name="quantity" min="1"
                            placeholder="0">
                    </form>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                        autocomplete="off">
                        Adicionar
                    </button>
                </div>
            </div>
        </div>
        <button id="Butão" type="button" class="btn btn-primary btn-lg">Finalizar pedido</button>
        <button id="Butão" type="button" class="btn btn-secondary btn-lg">Cancelar pedido</button>
        <footer class="footer mt-5 py-5">
            <div class="containerfoot">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <h4 class="footer-title">
                            Endereço
                        </h4>
                        <h6 class="footer-title">
                            Rua x, numero 39
                        </h6>
                    </div>
                    <div class="col-4">
                        <h4 class="footer-title">
                            Fale conosco
                        </h4>
                        <h6 class="footer-title">
                            (71) 99999-9999
                        </h6>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>