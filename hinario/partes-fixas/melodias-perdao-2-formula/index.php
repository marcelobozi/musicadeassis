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
    <title>Hinário - Perdão 2ª Fórmula] | Portal da Pastoral da Música | Paróquia São Francisco de Assis - Itapuã</title>

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
                        <li class="breadcrumb-item active" aria-current="page">Perdão (Ato Penitencial) - 2ª Fórmula</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

<div class="container-fluid" style="padding-top:40px;padding-bottom:25px;color:#fff;background-color:#3d6a04">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <h2 class="exo-2-four" style="color:#fff"><i class="fa fa-music" aria-hidden="true"></i> Perdão (Ato Penitencial) - 2ª Fórmula</h2>
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
                      <div class="alert alert-success" role="alert">
                        <div class="row">
                          <div class="col-md-12">
                            As letras que seguem abaixo são provenientes do Missal Romano – 3ª Edição Típica. Na medida do possível, usar o “Kýrie Eleison” para as celebrações solenes.
                          </div>
                          <div class="col-md-12 afasta20">
                            <div class="btn-group">
                              <a href="/hinario/partes-fixas/melodias-perdao/" class="btn btn-success" aria-current="page"><i class="fa fa-flask" aria-hidden="true"></i> 1ª Fórmula</a>
                              <a href="/hinario/partes-fixas/melodias-perdao-2-formula/" class="btn btn-success active"><i class="fa fa-flask" aria-hidden="true"></i><i class="fa fa-flask" aria-hidden="true"></i> 2ª Fórmula</a>
                              <a href="/hinario/partes-fixas/melodias-perdao-3-formula/" class="btn btn-success"><i class="fa fa-flask" aria-hidden="true"></i><i class="fa fa-flask" aria-hidden="true"></i><i class="fa fa-flask" aria-hidden="true"></i> 3ª Fórmula</a>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">

                      
                      <h1 class="afasta30"><i class="fa fa-flask" aria-hidden="true"></i><i class="fa fa-flask" aria-hidden="true"></i> 2ª Fórmula</h1>
                      <p style="margin-left:20px;margin-top:30px">
                            <strong>PR</strong>: Tende compaixão de nós, Senhor.<br>
                            <strong>AS</strong>: Porque somos pecadores.
                            <br><br>
                            <strong>PR</strong>: Manifestai, Senhor, a vossa misericórdia.<br>
                            <strong>AS</strong>: E dai-nos a vossa salvação.
                            <br><br>
                            <strong>PR</strong>: Deus todo-poderoso tenha compaixão de nós, perdoe os nossos pecados e nos conduza à vida eterna.<br>
                            <strong>AS</strong>: Amém
                            <br><br>
                            <strong>PR</strong>: Senhor, tende piedade de nós!<br>
                            <strong>PR</strong>: Cristo, tende piedade de nós!<br>
                            <strong>PR</strong>: Senhor, tende piedade de nós!<br>
                    </p>
                  </div>
                  <div class="col-md-12 afasta20">
                      <!-- cards cordeiro -->
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        include_once('perdao.php');
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
          <iframe id="youtube" src="https://www.youtube.com/embed/c4dRN8KOPn4?rel=0" title="YouTube video" allowfullscreen></iframe>
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