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
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formações - Portal da Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>


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
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:10px;font-size:.9em;font-family: Exo 2, sans-serif">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#7e5834">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Formações</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
<!-- ULTIMAS -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-11" style="padding-top:40px;padding-bottom:10px">


            <div class="row" style="margin-bottom:40px">
                <div class="col-md-12">
                    <h1><i class="fa fa-graduation-cap" aria-hidden="true"></i> Formações</h1>
                </div>
              
                <div class="col-md-12">
<!-- cards-->
<div class="row afasta40 row-cols-1 row-cols-md-3 g-4">


  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/001.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">O Missal Romano aplicado à música litúrgica</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Todos os músicos e cantores da pastoral | <strong>Benefício</strong>: Clareza total sobre o que pode, deve ou não ser cantado |  <strong>Nível</strong>: 2
        </p>
        <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/002.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Função ritual do canto na Santa Missa</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Cantores, salmistas e líderes musicais | <strong>Benefício</strong>: Escolher músicas que servem ao rito, não ao gosto pessoal  |  <strong>Nível</strong>: 2 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/003.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">O que cantar em cada parte da Missa (sem improvisos)</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Coordenadores e músicos que escolhem repertório | 
            <strong>Benefício</strong>: Segurança na escolha correta de cantos para cada rito  |  
            <strong>Nível</strong>: 3 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/004.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Erros mais comuns na música litúrgica (e como corrigi-los)</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Grupos experientes com vícios musicais | 
            <strong>Benefício</strong>: Correção de práticas que geram desconfortos  |  
            <strong>Nível</strong>: 3 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/005.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Salmo Responsorial: ministério, técnica e espiritualidade</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Salmistas e instrumentistas de apoio | 
            <strong>Benefício</strong>: Execução correta de um dos pontos mais sensíveis da Missa  |  
            <strong>Nível</strong>: 4 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/006.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tempo Litúrgico e coerência musical</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Quem monta repertório ao longo do ano | 
            <strong>Benefício</strong>: Harmonia entre música, tempo litúrgico e espiritualidade  |  
            <strong>Nível</strong>: 3 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/007.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Música litúrgica x música religiosa: diferenças essenciais</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Músicos vindos de grupos de oração ou eventos | 
            <strong>Benefício</strong>: Eliminar confusões que causam correções públicas  |  
            <strong>Nível</strong>: 2 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>



  <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/008.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Instrumentação na Missa: quando, como e quanto usar</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Instrumentistas (teclado, violão, sopro, percussão) | 
            <strong>Benefício</strong>: Uso equilibrado e liturgicamente adequado dos instrumentos  |  
            <strong>Nível</strong>: 4 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>




 <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/009.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">O papel do músico como ministro, não como artista</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Todo o ministério de música | 
            <strong>Benefício</strong>: Mudança de mentalidade e postura ministerial  |  
            <strong>Nível</strong>: 1 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>




 <div class="col">
    <div class="card h-100">
      <img src="/img/cursos/010.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Comunicação e unidade com o pároco e a equipe litúrgica</h5>
        <p class="card-text">
            <strong>Para quem</strong>: Coordenadores e lideranças musicais | 
            <strong>Benefício</strong>: Redução de conflitos e correções públicas  |  
            <strong>Nível</strong>: 2 </p>
            <hr>
        <button class="btn btn-danger" onClick="aindaNao()">Em Breve</button>
      </div>
    </div>
  </div>



  
</div>



<!-- cards-->
                </div>
            </div>



        </div>
    </div>
</div>

<!-- ULTIMAS -->

    <?php
    include_once("../footer.php");
    ?>
<script>
  function aindaNao(){
    window.alert("Estamos formatando os cursos!\nEm caso de dúvidas, entre em contato com a Coordenação da Pastoral pela opção no MENU do site (topo).");
  }
</script>
<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>