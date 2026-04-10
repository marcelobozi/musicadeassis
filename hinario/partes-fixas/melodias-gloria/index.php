<?php
include_once("../../../config.php");
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
    <title>Hinário - Glória | Portal da Pastoral da Música | Paróquia São Francisco de Assis - Itapuã</title>

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
include_once("../../../menu.php");

?>

<!-- menu -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:10px;font-size:.9em;font-family: Exo 2, sans-serif">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#7e5834">Início</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Hinário</a></li>
                        <li class="breadcrumb-item"><a href="/hinario/partes-fixas/" style="color:#7e5834">Partes Fixas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Glória</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

<div class="container-fluid" style="padding-top:40px;padding-bottom:25px;color:#fff;background-color:#ff7628">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <h2 class="exo-2-four" style="color:#fff"><i class="fa fa-music" aria-hidden="true"></i> Glória</h2>
    </div>
  </div>
</div>

<!-- utilidades via atalhos -->

<div class="container-fluid" style="background-color:#fff; padding-bottom:50px;min-height:450px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row justify-content-center">
        <div class="col-md-12 col-11" style="background-color:#fff;padding-top:40px;padding-bottom:45px;border-radius:1em">
              <div class="row">
                <!-- biblioteca -->
<div class="col-md-12">

                      <div class="alert alert-warning" role="alert">
                        A letra que segue abaixo é proveniente do Missal Romano – 3ª Edição Típica. Seguindo a Instrução Geral do Missal Romano, essa letra não pode ser substituída por nenhum outra, seguindo antiquíssima tradição da Igreja. 
                      </div>
                      <p style="font-weight:700;margin-left:20px;margin-top:30px">
                           HINO DO GLÓRIA<br>
                      <br>
                      Glória a Deus nas alturas<br>
                      e paz na terra aos homens por Ele amados.<br>
                      <br>
                      Senhor Deus, Rei dos céus, Deus Pai todo-poderoso:<br>
                      nós Vos louvamos,<br>
                      nós Vos bendizemos,<br>
                      nós Vos adoramos,<br>
                      nós Vos glorificamos,<br>
                      nós Vos damos graças,<br>
                      por vossa imensa glória.<br>
                      <br>
                      Senhor Jesus Cristo, Filho Unigénito,<br>
                      Senhor Deus, Cordeiro de Deus, Filho de Deus Pai:<br>
                      Vós que tirais o pecado do mundo, tende piedade de nós;<br>
                      Vós que tirais o pecado do mundo, acolhei a nossa súplica;<br>
                      Vós que estais à direita do Pai, tende piedade de nós.<br>
                      <br>
                      Só Vós sois o Santo;<br>
                      só Vós, o Senhor;<br>
                      só Vós, o Altíssimo, Jesus Cristo;<br>
                      com o Espírito Santo na glória de Deus Pai.<br>
                      Amém.
                    </p>
                  </div>
                  <div class="col-md-12 afasta20">
                      <!-- cards cordeiro -->
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        include_once('gloria.php');
                        ?>
                        </div>
                      <!-- cards cordeiro -->
                  </div>
                <!-- biblioteca -->
              </div>
        </div>
      </div>
    </div>
  </div>
</div>







    <?php
    include_once("../../../footer.php");
    ?>


<!-- Modal -->
<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">VÍDEO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe id="youtube" src="https://www.youtube.com/embed/EK1VOFS6xkQ?rel=0" title="YouTube video" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>

<!-- modal -->
 <script src="videos.js"></script>
<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>