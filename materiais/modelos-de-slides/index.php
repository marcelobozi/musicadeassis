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
    <title>Modelos de Slides - Portal da Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>


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
                        <li class="breadcrumb-item active" aria-current="page">Modelos de slides</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
<!-- ULTIMAS -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-11" style="padding-top:40px;padding-bottom:10px">

        

<!-- bloco noticia inicio -->
            <div class="row" style="margin-bottom:40px">

                <div class="col-md-12" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><i class="fa fa-desktop" aria-hidden="true"></i><span style="color:#000"> Slides básicos</span></h3>
                            
                        </div>
                       
                        <div class="col-md-12" style="padding-bottom:30px;padding-top:20px">
                            <ul class="list-group">
                            <li class="list-group-item"><strong>Descrição:</strong> slide básico para missa, contendo capa, orientações à assembleia, aviso sobre fotos e vídeos durante a Missa e slides para adicionar texto de músicas</li>
                            <li class="list-group-item"><strong>Formato de arquivo: </strong> Power Point (PPTX)</li>
                            <li class="list-group-item"><strong>Editável? (alterável):</strong> sim</li>
                            <li class="list-group-item"><strong>Última atualização:</strong> <span style="background-color:#ffff00">09/02/2026</span></li>
                            </ul>
                        </div>
                    </div>
                      <div class="row" style="padding-bottom:20px">
                        <div class="col-md-6 col-12">
                                <a href="https://musicadeassis.com.br/arquivos/slides_basicos.pptx" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Clique aqui para Baixar</a>
                        </div>
                        <div class="col-md-6 col-12 afastamobile">
                            <input type="text" class="form-control" value="https://musicadeassis.com.br/arquivos/slides_basicos.pptx">
                        </div>
                    </div>
                </div>
    
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 23 Fev:</span>   
                            <span style="color:#000">Slides iniciais do Segundo Domingo da Quaresma (28/02 a 01/03)</span></h3>
                            <p>Capa dos slides de Missa do 2º Domingo da Quaresma + orientações + avisos de uso de imagem atualizados.</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/materiais/slides-dominicais/segundo-domingo-quaresma.pptx" class="btn btn-lg btn-warning">
                                <i class="fa fa-download" aria-hidden="true"></i> Clique Aqui para baixar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->
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