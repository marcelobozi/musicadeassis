<?php
session_start();
include_once("../../config.php");
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <?php
/**
 * Validação de Ambiente de Produção
 * Focado em stack Apache/PHP
 */

// Definimos o domínio de produção
$prodDomain = 'musicadeassis.com.br';

// Verificamos se o host atual coincide com a produção
// O uso de strtolower previne problemas com headers fora do padrão
if (isset($_SERVER['HTTP_HOST']) && strtolower($_SERVER['HTTP_HOST']) === $prodDomain) {
    ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MXFR6WHS');</script>
<!-- End Google Tag Manager -->
    <?php
}
?>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nivelamento Novos Membros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>

    </style>
    <link  rel="stylesheet" type="text/css"  media="all" href="/assets/css/estilo.css" />
    <link  rel="stylesheet" type="text/css"  media="all" href="/assets/css/responsive.css" />
  </head>
  <body>
<?php
/**
 * Validação de Ambiente de Produção
 * Focado em stack Apache/PHP
 */

// Definimos o domínio de produção
$prodDomain = 'musicadeassis.com.br';

// Verificamos se o host atual coincide com a produção
// O uso de strtolower previne problemas com headers fora do padrão
if (isset($_SERVER['HTTP_HOST']) && strtolower($_SERVER['HTTP_HOST']) === $prodDomain) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXFR6WHS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php
}
?>
  <header>

<!-- menu -->
<?php
include_once("../../menu.php");

?>

<!-- menu -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:10px;font-size:.9em;font-family: Exo 2, sans-serif">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#7e5834">Início</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Formações</a></li>
                        <li class="breadcrumb-item"><a href="/hinario/originais/" style="color:#7e5834">Obrigatórias</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nivelamento Novos Membros</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

    <div class="container-fluid" style="padding-top:50px;padding-bottom:50px">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <div class="row">
                   
                        <div class="col-md-12 col-12">
                            <h1 class="exo-2-four"><i class="fa fa-file-text" aria-hidden="true"></i> Avaliação de Aptidão</h1>
                            <h3 class="afasta20">Músico Instrumentista para a Santa Missa </h3>
                        </div>
                </div>



                <div class="row afasta50">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                        <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Esta avaliação simula um exame de aptidão pastoral e musical, inspirado em critérios reais usados em paróquias, catedrais e universidades católicas. O objetivo <strong>não é excluir</strong>, mas <strong>discernir o nível de maturidade litúrgica, musical e técnica</strong> do candidato, identificando se ele está apto a:</p>
                        <ul>
                            <li>Atuar imediatamente;</li>
                            <li>Atuar como <strong>estagiário</strong> acompanhando equipes experientes;</li>
                            <li>Ou se precisa de formação prévia.</li>
                            </ul>
                            <hr>
                            <a class="btn btn-warning btn-lg" href="#apelido"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i> Começar</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->

<!-- ponto de partida -->
<div class="container-fluid" style="background-color:#ac5a0d;color:#fff;padding-top:80px;padding-bottom:80px">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">

            <div class="row">
                <div class="col-md-12">
                <h3 style="color:#fff">Comece por aqui.</h3>
                <p>Informe seu primeiro nome ou como gostaria de ser chamado. Em seguida, clique em "iniciar":</p>
                </div>
            </div>

            

            <div class="row afasta3">
                <div class="col-md-12">
                    <form action="/formacoes/nivelamento-basico-instrumentistas/etapa1/" method="post">
                        <div class="row afasta40">
                            <div class="col-md-6 col-8" id="apelido"><input style="text-transform:uppercase" type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome" required></div>
                            <div class="col-md-6 col-4"><button type="submit" class="btn btn-warning"><i class="fa fa-arrow-right" aria-hidden="true"></i> Iniciar</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ponto de partida -->

    <?php
    include_once("../../footer.php");
    ?>


<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>