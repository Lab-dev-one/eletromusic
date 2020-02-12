<?php

$dados = array();
require_once('config/conexao_banco.php');



if (isset($_POST["2000"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2000';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2001"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2001';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}

if (isset($_POST["2002"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2002';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2003"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2003';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2004"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2004';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2005"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2005';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2006"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2006';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2007"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2007';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2008"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2008';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2009"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2009';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2010"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2010';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2011"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2011';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2012"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2012';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2013"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2013';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2014"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2014';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2015"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2015';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2016"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2016';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2017"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2017';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_POST["2018"])) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2018';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}

if ($dados == null) {
    $sql = DB::getConn()->prepare("select * from musica where ano_lancamento= '2008';");
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_OBJ);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="style.css">

    <title>EletroMusic - Músicas Eletrônicas</title>
</head>

<body>

    <header>
        <!-- inicio Cabecalho -->
        <nav class="navbar navbar-expand-sm navbar-light " style="background: #010103;">
            <div class="container">

                <a href="#" class="navbar-brand mt-3">
                    <h1 style="color: #d527a4;">Eletro<span style="color:white;">Music</span></h1>
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-4 mt-1">
                            <a href="index.html" class="menu">Home</a>
                        </li>
                        <li class="nav-item mr-4 mt-1">
                            <a href="" class="menu">Playlists</a>
                        </li>
                        <li class="nav-item mr-4 mt-1">
                            <a href="historia.html" class="menu">História</a>
                        </li>
                        <li class="nav-item mr-4 mt-1">
                            <a href="evento.html" class="menu">Eventos</a>
                        </li>
                        <li class="nav-item mr-4 mt-1">
                            <a href="cadastro.html" class="menu">Inscrever-se</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="login.html" class="btn btn-outline-light ml-5">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ##### Featured Album Area Start ##### -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="playlist.php" method="post">
                    <div>
                        <button class="btn-outline-dark p-1 mt-5 mb-5" name="2000" type="submit" value="2000">
                            2000
                        </button>
                        <button class="btn-outline-dark p-1" name="2001" type="submit" value="2001">
                            2001
                        </button>
                        <button class="btn-outline-dark p-1" name="2002" type="submit" value="2002">
                            2002
                        </button>
                        <button class="btn-outline-dark p-1" name="2003" type="submit" value="2003">
                            2003
                        </button>
                        <button class="btn-outline-dark p-1" name="2004" type="submit" value="2004">
                            2004
                        </button>
                        <button class="btn-outline-dark p-1" name="2005" type="submit" value="2005">
                            2005
                        </button>
                        <button class="btn-outline-dark p-1" name="2006" type="submit" value="2006">
                            2006
                        </button>
                        <button class="btn-outline-dark p-1" name="2007" type="submit" value="2007">
                            2007
                        </button>
                        <button class="btn-outline-dark p-1" name="2008" type="submit" value="2008">
                            2008
                        </button>
                        <button class="btn-outline-dark p-1" name="2009" type="submit" value="2009">
                            2009
                        </button>
                        <button class="btn-outline-dark p-1" name="2010" type="submit" value="2010">
                            2010
                        </button>
                        <button class="btn-outline-dark p-1" name="2011" type="submit" value="2011">
                            2011
                        </button>
                        <button class="btn-outline-dark p-1" name="2012" type="submit" value="2012">
                            2012
                        </button>
                        <button class="btn-outline-dark p-1" name="2013" type="submit" value="2013">
                            2013
                        </button>
                        <button class="btn-outline-dark p-1" name="2014" type="submit" value="2014">
                            2014
                        </button>
                        <button class="btn-outline-dark p-1" name="2015" type="submit" value="2015">
                            2015
                        </button>
                        <button class="btn-outline-dark p-1" name="2016" type="submit" value="2016">
                            2016
                        </button>
                        <button class="btn-outline-dark p-1" name="2017" type="submit" value="2017">
                            2017
                        </button>
                        <button class="btn-outline-dark p-1" name="2018" type="submit" value="2018">
                            2018
                        </button>
                </form>
                <div class="featured-album-content d-flex flex-wrap">

                    <!-- Album Thumbnail -->
                    <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>

                    <!-- Album Songs -->
                    <div class="album-songs h-100">

                        <!-- Album Info -->
                        <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">

                            <div class="album-title">
                                <h4 class="text-white">Playlist</h4>
                            </div>

                        </div>

                        <div class="album-all-songs">
                            <!-- Music Playlist -->
                            <div class="music-playlist">
                                <?php foreach ($dados as $key) { ?>
                                    <!-- Single Song -->
                                    <div class="single-music active musica">
                                        <h6 class="text-white">
                                            <?php echo ("$key->nome - $key->artista") ?>
                                        </h6>
                                        <audio preload="metadata">
                                            <source src="<?php echo ($key->local_armazenamento) ?>">
                                        </audio>
                                    </div>
                                <?php    } ?>


                            </div>

                        </div>
                        <!-- Now Playing -->
                        <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                            <div class="songs-name">
                                <p>Playing</p>
                                <h6>Drop that beat</h6>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h1 style="color: #d527a4; margin-left: -50px;">Eletro<span style="color:white;">Music</span></h1>
                </div>
                <div class="col-md-2">
                    <h4>company</h4>
                    <ul class="navbar-nav">
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Novidades</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>comunidades</h4>
                    <ul class="navbar-nav">
                        <li><a href="">Artistas</a></li>
                        <li><a href="">Desenvolvedores</a></li>
                        <li><a href="">Marcas</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>links uteis</h4>
                    <ul class="navbar-nav">
                        <li><a href="">Ajuda</a></li>
                        <li><a href="">Player da web</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href=""><img src="imagens/facebook.png"></a>
                        </li>
                        <li>
                            <a href=""><img src="imagens/twitter.png"></a>
                        </li>
                        <li>
                            <a href=""><img src="imagens/instagram.png"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- JavaScript (Opcional) -->

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>