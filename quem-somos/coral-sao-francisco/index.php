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
    <title>Coral São Francisco - Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>

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
<!-- menu -->
<div class="container-fluid" style="background-color:#2e1e11">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:15px;font-size:.9em;font-family: Exo 2, sans-serif;color:#fff !important">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#fff">Início</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#fff">Quem Somos</a></li>
                        <li class="breadcrumb-item"  aria-current="page">Coral São Francisco</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:80px">
            <div class="col-md-10 col-12">
                <img src="/img/coral-sao-francisco-de-assis.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->

<div class="container-fluid" style="background-color:#7e5834; padding-top:50px;padding-bottom:50px;min-height:450px;margin-top:60px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12" style="text-align:center">
          <h1 class="exo-2-four" style="color:#ffffff">Coral São Francisco de Assis</h1>
        </div>
      </div>
      <div class="row" style="margin-top:40px">
        <div class="col-md-12">
<!-- ACCORDEON -->
<p style="font-size:1.2em; color:#fff">Com a finalidade de melhor estruturar a nossa Paróquia para a realização de Missas mais solenes, criou-se no ano de 2025 uma nova composição do Coral São Francisco de Assis, sob a supervisão do regente Luciano Miziara.</p>
<p style="font-size:1.2em; color:#fff">Os ensaios ocorrem semanas antes das apresentações previstas, e sempre às quartas e quintas-feiras, às 19 horas, em um dos espaços cedidos pela Paróquia e previamente divulgados no grupo de WhatsApp do Coral.</p>

<h2 class="afasta40" style="color:#fff">Como fazer parte do Coral?</h2>
<p style="font-size:1.2em; color:#fff">Caso possua aptidão musical e sinta-se chamado para fazer parte do nosso grupo, você pode se cadastrar pelo nosso <span style="color:#f3b998;font-weight:700">ACOLHIMENTO PASTORAL DA MÚSICA</span> (<a style="color:#fff" href="#faca-parte">clique aqui</a>). </p>
<!-- ACCORDEON -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- AGENDA -->

<div class="container-fluid afasta40" style="margin-bottom:50px">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <h2><i class="fa fa-calendar" aria-hidden="true"></i> Agenda de Apresentações confirmadas</h2>
                    </div>
                    <div class="col-md-12 col-12 afasta20">
                            <ul class="list-group">
                              <li class="list-group-item"><strong>04 de Abril de 2026</strong>: Missa da Vigília Pascal. 19:30h. <strong>Local:</strong> Matriz (Igreja S. Francisco de Assis). <a href="/quem-somos/coral-sao-francisco/missa-vigilia-pascal/">Acesse roteiro</a> (uso dos coralistas)</li>
                            </ul>
                    </div>
                    <div class="col-md-12 col-12"></div>
                </div>
        </div>
    </div>
</div>

<!-- AGENDA -->

<!-- FAÇA PARTE -->

<div class="container-fluid afasta40" style="background-color:#2b1509;padding-top:50px;padding-bottom:45px" id="faca-parte">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <h2>Faça parte do Coral São Francisco!</h2>
                        <hr>
                        <p style="font-size:1.2em; color:#fff">
                            Cadastre-se pelo nosso ACOLHIMENTO VOCACIONAL da Pastoral da Música. Também por lá você poderá conferir algumas orientações para que se sinta mais confiante a assumir esta missão.
                        </p>
                    </div>
                    <div class="col-md-12 col-12 afasta20">
                        <a href="/chamados/" class="btn btn-warning btn-lg">Clique aqui</a>
                    </div>
                    <div class="col-md-12 col-12"></div>
                </div>
        </div>
    </div>
</div>

<!-- FAÇA PARTE -->


<div class="container-fluid" id="faq" style="padding-top:45px;padding-bottom:45px">
  <div class="row justify-content-center">
    <div class="col-md-10">

      <div class="row">
        <div class="col-md-12">
              <h2><i class="fa fa-question-circle" aria-hidden="true"></i> Perguntas Frequentes e Respostas</h2>
        </div>
      </div>

            <div class="row">
              <div class="col-md-12 afasta20">
<!--accordeon  -->
                  
<div class="accordion accordion-flush" id="accordionFlushExample">


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       Quem pode participar?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Cantores(as) com experiência ou que almejam adquirir experiência. Pessoas com vontade de aprender e colocar seus dons a serviço da Igreja.</div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Como participar?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Se deseja fazer parte dessa missão e contribuir com seus talentos, entre em contato conosco!
        <hr>
        <a class="btn btn-primary" href="/chamados/">Cadastre-se aqui.</a>
      </div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCinco" aria-expanded="false" aria-controls="flush-collapseCinco">
        Não sei ler partitura. Isso atrapalha?
      </button>
    </h2>
    <div id="flush-collapseCinco" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Boa parte dos membros usa partitura. Mas para perfeita execução das músicas o importante mesmo é ensaio prévio. E isso irá compensar caso não domine partituras.</div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeis" aria-expanded="false" aria-controls="flush-collapseSeis">
        Tenho interesse no Coral. Mas não sei cantar. Mesmo assim posso participar?
      </button>
    </h2>
    <div id="flush-collapseSeis" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Sim! Aqui ninguém nasce pronto. O coral é justamente um espaço de aprendizado. Durante os ensaios, trabalhamos noções básicas de canto e técnica vocal. Várias pessoas no grupo nunca tiveram experiência musical antes — o que todos têm em comum é o desejo sincero de servir e amar mais a Deus por meio do canto.</div>
    </div>
  </div>

      <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseGhjs" aria-expanded="false" aria-controls="flush-collapseGhjs">
        Não tenho tempo para ensaiar. Isso atrapalha?
      </button>
    </h2>
    <div id="flush-collapseGhjs" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Sim! Coral demanda disponibilidade. Os ensaios são vitais para que tenhamos um patamar de qualidade harmônica digna do Nosso Senhor. Ele merece.<br>
    Por isso é desejável que, nas semanas antes das apresentações, você se disponibilize para comparecer aos ensaios, que ocorrem às 19h em uma das igrejas da Paróquia. Sempre previamente comunicado.</div>
    </div>
  </div>


</div>



<!--accordeon  -->
              </div>
          </div>

    </div>
  </div>
</div>

    <?php
    include_once("../../footer.php");
    ?>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>