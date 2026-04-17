<?php
include_once("../config.php");
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
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escala do Mês - Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>

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
include_once("../menu.php");

?>

<!-- menu -->

  </header>

    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:80px;margin-bottom:40px">
            <div class="col-md-10 col-12">
                <div class="row">
                  <div class="col-md-12">
                    <h1><i class="fa fa-calendar" aria-hidden="true"></i> Escala do Mês</h1>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->





<div class="container-fluid" style="background-color:#7e5834; padding-top:50px;padding-bottom:50px;min-height:450px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four" style="color:#ffffff">Maio 2026</h2>
        </div>
        <div class="col-md-12 afasta20">
          <div class="alert alert-warning" role="alert">
             <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Dias sem equipe:</h4>
             <ul>
              <li><strong>03 (domingo) - 19h</strong>: sem equipe</li>
              <li><strong>17 (domingo) - 8h</strong>: sem equipe</li>
              <li><strong>17 (domingo) - 17h</strong>: sem equipe</li>
              <li><strong>21 (quinta-feira) - 19:30h</strong>: sem equipe</li>
              <li><strong>30 (sábado) - 19:30h</strong>: sem equipe</li>
             </ul>
             <hr>
             <h4>Pode assumir uma dessas missas?</h4>
             <a class="btn btn-success" target="_blank" href="https://wa.me/5527999559079?text=Desejo%20assumir%20uma%20Missa%20sem%20equipe">
              <i class="fa fa-whatsapp" aria-hidden="true"></i> Clique aqui (fale comigo)</a>

          </div>
        </div>
      </div>
      <div class="row" style="margin-top:40px">
        <div class="col-md-12">
          <!-- ACCORDEON -->
          <a href="/img/2026/maio/escala-v0.png">
          <img src="/img/2026/maio/escala-v0.png" alt="" class="img-fluid">
          </a>
          <!-- ACCORDEON -->
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid" style="background-color:#422918; padding-top:50px;padding-bottom:50px;min-height:450px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four" style="color:#ffffff">Abril 2026</h2>
        </div>
        <div class="col-md-12 afasta20">
          <div class="alert alert-warning" role="alert">
             <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Dias sem equipe:</h4>
             <ul>
              <li><strong>MISSAS ASSINALADAS EM ROXO</strong>: extras/ pastorais em função da Semana Santa</li>
              <li>26 (domingo): Missa de Primeira Eucaristia - sem equipe </li>
            </ul>
             <hr>
             <h4>Pode assumir uma dessas missas?</h4>
             <a class="btn btn-success" target="_blank" href="https://wa.me/5527999559079?text=Desejo%20assumir%20uma%20Missa%20sem%20equipe">
              <i class="fa fa-whatsapp" aria-hidden="true"></i> Clique aqui (fale comigo)</a>

          </div>
        </div>
      </div>
      <div class="row" style="margin-top:40px">
        <div class="col-md-12">
        <!-- ACCORDEON -->
        <a href="/img/2026/abril/escala-v6.png">
        <img src="/img/2026/abril/escala-v6.png" alt="" class="img-fluid">
        </a>
        <!-- ACCORDEON -->
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid" style="background-color:#7e5834; padding-top:50px;padding-bottom:50px;min-height:450px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four" style="color:#ffffff">Março 2026</h2>
        </div>
        <div class="col-md-12 afasta20">
          <div class="alert alert-warning" role="alert">
             <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Dias sem equipe:</h4>
             <ul>
              <li><strong>(tudo provisionado por Deus)</li>

             </ul>
             <hr>
             <h4>Pode assumir uma dessas missas?</h4>
             <a class="btn btn-success" target="_blank" href="https://wa.me/5527999559079?text=Desejo%20assumir%20uma%20Missa%20sem%20equipe">
              <i class="fa fa-whatsapp" aria-hidden="true"></i> Clique aqui (fale comigo)</a>

          </div>
        </div>
      </div>
      <div class="row" style="margin-top:40px">
        <div class="col-md-12">
<!-- ACCORDEON -->
 <a href="/img/2026/marco/escala-v7.png">
<img src="/img/2026/marco/escala-v7.png" alt="" class="img-fluid">
</a>
<!-- ACCORDEON -->
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid" style="background-color:#422918; padding-top:50px;padding-bottom:50px;min-height:450px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four" style="color:#ffffff">Fevereiro 2026</h2>
        </div>
      </div>
      <div class="row" style="margin-top:40px">
        <div class="col-md-12">
<!-- ACCORDEON -->
 <a href="/img/escala.png">
<img src="/img/escala.png" alt="" class="img-fluid">
</a>
<!-- ACCORDEON -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- solucao calendario -->



<!-- utilidades via atalhos -->

    <?php
    include_once("../footer.php");
    ?>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>