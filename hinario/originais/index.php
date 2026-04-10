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
    <title>Canções Originais | Portal da Pastoral da Música | Paróquia São Francisco de Assis - Itapuã</title>

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
                        <li class="breadcrumb-item active" aria-current="page">Originais</li>
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
                    <h1 class="exo-2-four sfcenter" style="color:#f5f5dc">Cânticos originais</h1>
                <p style="font-size:1.3em; color:#fff">Tocados pelo Carisma do Espírito Santo, e pelo sendo de bem-servir, nossos membros tem diversificado seu repertório por meio de canções autorais, sempre respeitando os preceitos litúrgicos e do Missal.</p>
                   <span class="light-marrom" style="font-size:4em;color:#f5f5dc"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span>
                  </div>
                  <div class="col-md-6 col-12">
                    <img src="/img/compondo.jpg" alt="" class="img-fluid rounded">
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
          <h2 class="exo-2-four" style="color:#7e5834">Cânticos autorais</h2>
          <h4>Cânticos criados por nossos membros</h4>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top:40px">
        <div class="col-md-12 col-11" style="background-color:#fff;padding-top:40px;padding-bottom:45px;border-radius:1em">
<!-- tabs -->
 <style>
    .nav-link {
    color: #7e5834;
}
.thumbsong{
    border: solid 1px #7e5834;
    padding:15px;
    border-radius:0.8em;
    font-family: "Exo 2", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}
.autores{
    text-decoration: none !important;
}
 </style>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Cordeiro (2)</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Santo (1)</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Glória (0)</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Perdão (2)</button>
  </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others-tab-pane" type="button" role="tab" aria-controls="others-tab-pane" aria-selected="false">Outros (2)</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
<!--Cordeiro  -->
<div class="row justify-content-center">
    <div class="col-md-11 col-12">

        <div class="row">

        
                <div class="col-md-4" style="padding-top:15px;padding-bottom:15px; margin-right:15px">
                    <div class="row thumbsong">
                        <div class="col-md-3 col-4">
                          <a href="/hinario/originais/cordeiro/cordeiro-lorena-pauvolid/" style="text-decoration:none; color:#714425">
                            <img src="/img/musicos/lorena.jpg" class="img-fluid"></a></div>
                            <div class="col-md-9 col-6 autores">
                                <h4><a href="/hinario/originais/cordeiro/cordeiro-lorena-pauvolid/" style="text-decoration:none; color:#714425">Cordeiro</a></h4>
                                <h6><span class="badge text-bg-warning">Lorena Pauvolid</span></h6>
                            </div>
                    </div>
                </div>
    


                <div class="col-md-4" style="padding-top:15px;padding-bottom:15px; ">
                    <div class="row thumbsong">
                        <div class="col-md-3 col-4">
                          <a href="/hinario/originais/cordeiro/cordeiro-pedro-afonso/" style="text-decoration:none; color:#714425">
                            <img src="/img/musicos/pedro-afonso.png" class="img-fluid"></a></div>
                            <div class="col-md-9 col-6 autores">
                                <h4><a href="/hinario/originais/cordeiro/cordeiro-pedro-afonso/" style="text-decoration:none; color:#714425">Cordeiro</a></h4>
                                <h6><span class="badge text-bg-warning">Pedro Afonso</span></h6>
                            </div>
                    </div>
                </div>


                



    </div>
</div>
</div>
<!--Cordeiro  -->
  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
<!--Santo  -->
<div class="row justify-content-center">
    <div class="col-md-11 col-12">

        <div class="row">

        
                <div class="col-md-4" style="padding-top:15px;padding-bottom:15px; ">
                    <div class="row thumbsong">
                        <div class="col-md-3 col-4">
                          <a href="/hinario/originais/santo/santo-pedro-afonso/" style="text-decoration:none; color:#714425">
                            <img src="/img/musicos/pedro-afonso.png" class="img-fluid"></a></div>
                            <div class="col-md-9 col-6 autores">
                                <h4><a href="/hinario/originais/santo/santo-pedro-afonso/" style="text-decoration:none; color:#714425">Santo</a></h4>
                                <h6><span class="badge text-bg-warning">Pedro Afonso</span></h6>
                            </div>
                    </div>
                </div>


        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>


    </div>
</div>
</div>
<!--Santo  -->
  </div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
<!--Gloria  -->

<!--Gloria  -->
  </div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
<!--Perdao  -->
<div class="row justify-content-center">
    <div class="col-md-11 col-12">

        <div class="row">

        
                <div class="col-md-4" style="padding-top:15px;padding-bottom:15px; margin-right:15px">
                    <div class="row thumbsong">
                        <div class="col-md-3 col-4">
                          <a href="/hinario/originais/perdao/perdao-pedro-afonso/" style="text-decoration:none; color:#714425">
                            <img src="/img/musicos/pedro-afonso.png" class="img-fluid"></a></div>
                            <div class="col-md-9 col-6 autores">
                                <h4><a href="/hinario/originais/perdao/perdao-pedro-afonso/" style="text-decoration:none; color:#714425">Perdão</a></h4>
                                <h6><span class="badge text-bg-warning">Pedro Afonso</span></h6>
                            </div>
                    </div>
                </div>




                                <div class="col-md-4" style="padding-top:15px;padding-bottom:15px; ">
                    <div class="row thumbsong">
                        <div class="col-md-3 col-4">
                          <a href="/hinario/originais/outros/ato-penitencial-3-domingo-quaresma--ano-a/" style="text-decoration:none; color:#714425">
                            <img src="/img/musicos/pedro-afonso.png" class="img-fluid"></a></div>
                            <div class="col-md-9 col-6 autores">
                                <h4><a href="/hinario/originais/outros/ato-penitencial-3-domingo-quaresma--ano-a" style="text-decoration:none; color:#714425">Ato Penitencial - Domingo III Quaresma Ano A</a></h4>
                                <h6><span class="badge text-bg-warning">Pedro Afonso</span></h6>
                            </div>
                    </div>
                </div>


        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>


    </div>
</div>
</div>
<!--Perdao  -->
  </div>
</div>


  <div class="tab-pane fade" id="others-tab-pane" role="tabpanel" aria-labelledby="others-tab" tabindex="0">
<!--Outros  -->



<div class="row justify-content-center">
    <div class="col-md-11 col-12">

        <div class="row">

        
                <div class="col-md-4" style="padding-top:15px;padding-bottom:15px; margin-right:15px">
                    <div class="row thumbsong">
                        <div class="col-md-3 col-4">
                          <a href="/hinario/originais/outros/entrada-3-domingo-quaresma-ano-a/" style="text-decoration:none; color:#714425">
                            <img src="/img/musicos/pedro-afonso.png" class="img-fluid"></a></div>
                            <div class="col-md-9 col-6 autores">
                                <h4><a href="/hinario/originais/outros/entrada-3-domingo-quaresma-ano-a/" style="text-decoration:none; color:#714425">Entrada - Domingo III Quaresma Ano A</a></h4>
                                <h6><span class="badge text-bg-warning">Pedro Afonso</span></h6>
                            </div>
                    </div>
                </div>
    


                <div class="col-md-4" style="padding-top:15px;padding-bottom:15px; ">
                    <div class="row thumbsong">
                        <div class="col-md-3 col-4">
                          <a href="/hinario/originais/outros/ato-penitencial-3-domingo-quaresma--ano-a/" style="text-decoration:none; color:#714425">
                            <img src="/img/musicos/pedro-afonso.png" class="img-fluid"></a></div>
                            <div class="col-md-9 col-6 autores">
                                <h4><a href="/hinario/originais/outros/ato-penitencial-3-domingo-quaresma--ano-a" style="text-decoration:none; color:#714425">Ato Penitencial - Domingo III Quaresma Ano A</a></h4>
                                <h6><span class="badge text-bg-warning">Pedro Afonso</span></h6>
                            </div>
                    </div>
                </div>



    </div>
</div>
</div>


<!--Outros  -->
  </div>

<!-- tabs  -->
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