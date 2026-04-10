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
    <title>SubCooordenações - Portal da Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>


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
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Quem Somos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Subcoordenações</li>
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
                <div class="col-md-12">
                    <h1><i class="fa fa-user" aria-hidden="true"></i> Subcoordenações</h1>
                </div>
                <div class="col-md-12 afasta40" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><i class="fa fa-user" aria-hidden="true"></i>
                             Discernimento Musical: <span style="color:#000">Rômulo Madureira</span></h3>
                            <p><strong>Responsabilidade primária: </strong> 
                            Com suporte direto da Coordenação, ele é responsável por acolher, orientar e discernir candidatos interessados em servir como ministros de música na Pastoral da Música, avaliando sua disposição espiritual, aptidão musical e alinhamento pastoral, e realizando o encaminhamento adequado para as etapas de integração e formação no ministério.
                        </p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:romulo@musicadeassis.com.br">romulo@musicadeassis.com.br</a></p>
                        </div>
                       
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row" style="margin-bottom:40px">
                
                <div class="col-md-12" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><i class="fa fa-user" aria-hidden="true"></i>
                             Curadoria Litúrgica: <span style="color:#000">Ana Sales</span></h3>
                            <p><strong>Responsabilidade primária: </strong> auxiliar a Coordenação na diversificação da oferta de cânticos para uso das equipes, sendo "guardiã" dos preceitos litúrgicos. Ajudará sobretudo o Coordenador na escolha dos cânticos que serão disponibilizados pelo  no NOVO Portal da Pastoral, que a Coordenação publicará por meio de cifras, letras e vídeos.</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:ana@musicadeassis.com.br">ana@musicadeassis.com.br</a></p>
                        </div>
                       
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row" style="margin-bottom:40px">
     
                <div class="col-md-12" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><i class="fa fa-user" aria-hidden="true"></i>
                             Iconografia Sacro-Litúrgica: <span style="color:#000">Maíra Calegário</span></h3>
                            <p><strong>Responsabilidade primária: </strong> definir e cuidar da padronização da comunicação visual de materiais e peças usadas pela Pastoral, como materiais de projeções, disponibilizando para a Coordenação fazer chegar nas equipes e qualificar / orientar quanto ao uso. Eventualmente, fazer interface com a Pastoral da Comunicação (PASCOM).</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:maira@musicadeassis.com.br">maira@musicadeassis.com.br</a></p>
                        </div>
                       
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row" style="margin-bottom:40px">
          
                <div class="col-md-12" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><i class="fa fa-user" aria-hidden="true"></i>
                             Subcoordenação Adjunta: <span style="color:#000">Lorena Pauvolid</span></h3>
                            <p><strong>Responsabilidade primária: </strong> substituir a Coordenação em casos em que, por motivos de força maior, ele se encontre provisoriamente indisponível para o exercício de suas funções, como viagens ou questões de saúde.</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:lorena@musicadeassis.com.br">lorena@musicadeassis.com.br</a></p>
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