<?php
include_once("../../../../config.php");
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
    <title>Cordeiro - Lorena Pauvolid</title>

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
include_once("../../../../menu.php");

?>

<!-- menu -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:10px;font-size:.9em;font-family: Exo 2, sans-serif">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#7e5834">Início</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Hinário</a></li>
                        <li class="breadcrumb-item"><a href="/hinario/originais/" style="color:#7e5834">Originais</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Cordeiro</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cordeiro - Lorena Pauvolid</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

    <div class="container-fluid" style="padding-top:80px;padding-bottom:80px">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <div class="row">
                    <div class="col-md-2 col-3">
                        <img src="/img/musicos/lorena.jpg" class="img-fluid" alt="">
                    </div>
                        <div class="col-md-6 col-9">
                            <h1 class="exo-2-four" style="font-weight:900;color:#ac5a0d">Cordeiro</h1>
                            <h3 class="exo-2-four">Lorena Pauvolid</h3>
                            <h4><span class="badge text-bg-warning">Tom: G</span></h4>
                        </div>
                </div>


                <div class="row afasta30">
                    <div class="col-md-12" style="border-top:dashed 1px #f0b378">

                      <div class="row afasta20">
                        <div class="col-md-12">
                            <h4 style="font-weight:600;color:#ac5a0d" class="exo-2-four">Ouça:</h4>
                        </div>
                      </div>
                      <div class="row afasta20">
                        <div class="col-md-12">
                            <audio controls class="w-100">
                                <source src="/midia/cordeiro-lorena.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                      </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->

<!-- LETRA -->
 <style>
    .cifra{
    font-weight:500;
    color:#ff7700;
    font-size:1.1em;
    margin-top:-10px
    }
    .letra{
    font-size:1.4em;
    margin-top:-25px;
    }
  .separador{
    margin-top:30px
  }
 </style>
<div class="container-fluid" style="margin-bottom:100px">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12" id="cantico">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>INTRO: G - D/F# - C - Am - D - G</strong>
                    </div>
                </div>
                <div class="col-md-12 afasta20">
                    <!-- cifras -->
                            <p class="cifra"><span style="margin-left:3em">G</span><span style="margin-left:14em">D/F#</span></p>
                            <p class="letra">Cordeiro de Deus que tirais o pecado do mundo,</p>

                            <p class="cifra"><span style="margin-left:6em">C</span></p>
                            <p class="letra">Tende piedade!</p>

                            <p class="cifra"><span style="margin-left:6em">Am</span></p>
                            <p class="letra">Tende piedade!</p>

                            <p class="cifra"><span style="margin-left:6em">D</span></p>
                            <p class="letra">Tende piedaaaaaaa-de!</p>

                            <p class="cifra"><span style="margin-left:8em">G</span></p>
                            <p class="letra">Piedade de nós.</p>


                            <p class="separador">&nbsp;</p>


                            <p class="cifra"><span style="margin-left:3em">G</span><span style="margin-left:14em">D/F#</span></p>
                            <p class="letra">Cordeiro de Deus que tirais o pecado do mundo,</p>

                            <p class="cifra"><span style="margin-left:6em">C</span></p>
                            <p class="letra">Tende piedade!</p>

                            <p class="cifra"><span style="margin-left:6em">Am</span></p>
                            <p class="letra">Tende piedade!</p>

                            <p class="cifra"><span style="margin-left:6em">D</span></p>
                            <p class="letra">Tende piedaaaaaaa-de!</p>

                            <p class="cifra"><span style="margin-left:8em">G</span></p>
                            <p class="letra">Piedade de nós.</p>


                            <p class="separador">&nbsp;</p>

                            <p class="cifra"><span style="margin-left:3em">C</span><span style="margin-left:14.5em">G/B</span></p>
                            <p class="letra">Cordeiro de Deus que tirais o pecado do mundo,</p>

                            <p class="cifra"><span style="margin-left:6em">D</span></p>
                            <p class="letra">Dai-nos a paz!</p>

                            <p class="cifra"><span style="margin-left:6em">C</span></p>
                            <p class="letra">Dai-nos a paz!</p>

                            <p class="cifra"><span style="margin-left:6em">G</span></p>
                            <p class="letra">Dai-nos a paz!</p>

                    <!--cifras  -->

                </div>
                <div class="col-md-12 afasta40">
                    <div class="alert alert-secondary" role="alert" style="font-size:.8em">
                        Atenção: o conteúdo artístico aqui publicado é de propriedade intelectual dos seus autores que, de bom agrado disponibilizam para uso dentro de ambientes católicos. Sinta-se à vontade para reproduzir, desde que sejam dados os devidos créditos. Caso por algum motivo acredite que este conteúdo não deveria estar aqui disponibilizado, envie mensagem para: <a href="mailto:publicacoes@musicadeassis.com.br">publicacoes@musicadeassis.com.br</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LETRA -->



    <?php
    include_once("../../../../footer.php");
    ?>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>