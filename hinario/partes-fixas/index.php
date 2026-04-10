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
    <title>Hinário - Partes Fixas | Portal da Pastoral da Música | Paróquia São Francisco de Assis - Itapuã</title>

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
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Hinário</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Partes Fixas</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

    <div class="container-fluid" style="background-color:#7e5834;padding-top:80px;padding-bottom:80px">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <div class="row">
                  <div class="col-md-6 col-12" id="welcome">
                    <h1 class="exo-2-four sfcenter" style="color:#f5f5dc">Partes Fixas do Hinário</h1>
                <p style="font-size:1.3em; color:#fff">As partes fixas litúrgicas da Santa Missa são uma joia preciosa da nossa Santa Doutrina. Seguem fórmulas que precisam ser absolutamente conhecidas e respeitadas, e devem ser imunes a improvisações. Por esse mesmo motivo, costumam ser motivo de grande temor pelos músicos, dado o risco de encontrar e usar algum cântico viciado / errado. Por isso, use este site como uma fonte segura para não passar por isso.</p>
                   <span class="light-marrom" style="font-size:4em;color:#f5f5dc"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span>
                  </div>
                  <div class="col-md-6 col-12">
                    <img src="/img/2026/fevereiro/missal.jpg" alt="" class="img-fluid rounded">
                  </div>
                </div>
            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->

<div class="container-fluid" style="background-color:#fff; padding-top:50px;padding-bottom:50px;min-height:450px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four" style="color:#7e5834"><i class="fa fa-list" aria-hidden="true"></i> Listas por Parte</h2>

        </div>
      </div>
      <div class="row justify-content-center" style="margin-top:40px">
        <div class="col-md-12 col-11">
            <div class="row">
              <div class="col-md-3 col-6">
                <a href="/hinario/partes-fixas/melodias-perdao/">
                <img src="/img/2026/fevereiro/icone-perdao.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="col-md-3 col-6">
                <a href="/hinario/partes-fixas/melodias-gloria/">
                <img src="/img/2026/fevereiro/icone-gloria.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="col-md-3 col-6 afastamobile">
                <a href="/hinario/partes-fixas/melodias-santo/">
                <img src="/img/2026/fevereiro/icone-santo.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="col-md-3 col-6 afastamobile">
                <a href="/hinario/partes-fixas/melodias-cordeiro/">
                <img src="/img/2026/fevereiro/icone-cordeiro.jpg" class="img-fluid" alt=""></a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>







    <?php
    include_once("../../footer.php");
    ?>


<!-- Modal -->
<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe id="youtube" src="https://www.youtube.com/embed/VJtSCj4lg6c?rel=0" title="YouTube video" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>

<!-- modal -->
 <script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>