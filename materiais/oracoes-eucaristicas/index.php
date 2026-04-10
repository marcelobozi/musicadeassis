<?php
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
    <title>Orações Eucarísticas - Portal da Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>


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
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Materiais</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orações Eucarísticas</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
<!-- ULTIMAS -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-11" style="padding-top:40px;padding-bottom:10px">
<!-- cards -->

<div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="card">
      <img src="/img/capa-oracoes-eucaristicas.png" class="card-img-top" alt="...">
      <div class="card-body">
       <div class="row">
        <div class="col-md-12">
            <h5 class="card-title">Orações Eucarísticas (I, II, III, IV, V) na terceira edição</h5>
        </div>
        <div class="col-md-12 afasta20">
            <div class="list-group">
            <a href="/materiais/oracoes-eucaristicas/i/" class="list-group-item list-group-item-action"><i class="fa fa-book" aria-hidden="true"></i> Oração Eucarística I</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book" aria-hidden="true"></i> Oração Eucarística II</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book" aria-hidden="true"></i> Oração Eucarística III</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book" aria-hidden="true"></i> Oração Eucarística IV</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book" aria-hidden="true"></i> Oração Eucarística V</a>
            </div>
        </div>
       </div>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="/img/capa-oracoes-eucaristicas.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oração Eucarística para Diversas Circunstâncias</h5>
        <p class="card-text">Disponível no Site da Matriz</p>
        <hr>
        <a href="https://portadeassis.com.br/publicacoes/devocionario/oracoes-eucaristicas/19283-oracao-eucaristica-para-diversas-circunstancias" class="btn btn-warning" target="_blank"><i class="fa fa-external-link-square" aria-hidden="true"></i> Acesse aqui</a>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="/img/capa-oracoes-eucaristicas.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oração Eucarística sobre a Reconciliação</h5>
        <p class="card-text">Disponível no Site da Matriz</p>
        <hr>
        <a href="https://portadeassis.com.br/publicacoes/devocionario/oracoes-eucaristicas/19284-oracao-eucaristica-sobre-a-reconciliacao" class="btn btn-warning" target="_blank"><i class="fa fa-external-link-square" aria-hidden="true"></i> Acesse aqui</a>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="/img/capa-oracoes-eucaristicas.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oração Eucarística para Missas com Crianças</h5>
        <p class="card-text">Disponível no Site da Matriz</p>
        <hr>
        <a href="https://portadeassis.com.br/publicacoes/devocionario/oracoes-eucaristicas/19285-oracao-eucaristica-para-missas-com-criancas" class="btn btn-warning" target="_blank"><i class="fa fa-external-link-square" aria-hidden="true"></i> Acesse aqui</a>
      </div>
    </div>
  </div>
</div>

<!-- cards -->
        </div>
    </div>
</div>

<!-- ULTIMAS -->

    <?php
    include_once("../../footer.php");
    ?>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>