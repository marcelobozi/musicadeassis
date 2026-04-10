<?php
session_start();
include_once("../../../config.php");

$_SESSION['slides'] = $_POST['slides'] ?? 'Não informado';
$_SESSION['liturgislides'] = $_POST['liturgislides'] ?? 'Não informado';

$brutos = $_POST['habilidades'] ?? [];
$limpos = array_filter(array_map('trim', $brutos));
$lista = !empty($limpos) 
    ? implode(';', $limpos) 
    : "";
$_SESSION['habilidades'] = $lista;


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
    <title>Nivelamento Novos Membros - Etapa 6</title>

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
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Formações</a></li>
                        <li class="breadcrumb-item"><a href="/hinario/originais/" style="color:#7e5834">Obrigatórias</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Nivelamento Novos Membros</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bloco 1</li>
                        <li class="breadcrumb-item active" aria-current="page">2</li>
                        <li class="breadcrumb-item active" aria-current="page">3</li>
                        <li class="breadcrumb-item active" aria-current="page">4</li>
                        <li class="breadcrumb-item active" aria-current="page">5</li>
                        <li class="breadcrumb-item active" aria-current="page">6</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

    <div class="container-fluid" style="padding-top:50px;padding-bottom:50px">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <div class="row">
                   
                        <div class="col-md-12 col-12">
                            <h1 class="exo-2-four"><i class="fa fa-comment" aria-hidden="true"></i> 
                            BLOCO 7 — Postura Pastoral e Discernitiva</h1>
                        </div>
                </div>


                    <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 96%">96%</div>
                        </div>
                    </div>
                </div>

<form name="etapa6" id="etapa6" action="/formacoes/nivelamento-basico-instrumentistas/conclusao/" method="post">
                <!-- bloco A -->
                 <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="color:#000">16. Se o celebrante ou a coordenação pedir para trocar um canto já ensaiado, você:</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">

                                    <div class="form-check">
                                    <input class="form-check-input" value="Insiste no repertório escolhido" type="radio" name="retrabalho" id="sem-formacao-liturgica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="sem-formacao-liturgica">
                                        Insiste no repertório escolhido 
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" value="Fica contrariado, mas aceita" type="radio" name="retrabalho" id="formacao-basica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-basica">
                                        Fica contrariado, mas aceita 
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" value="Aceita com espírito de serviço" type="radio" name="retrabalho" id="formacao-intermediaria" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-intermediaria">
                                        Aceita com espírito de serviço 
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" value="Recusa tocar" type="radio" name="retrabalho" id="formacao-avancada" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-avancada">
                                        Recusa tocar     
                                    </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- bloco A -->



<!-- bloco B -->
                <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="color:#000">17. Em poucas palavras, explique por que você deseja servir como músico na Santa Missa e como entende seu papel nesse ministério.</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="proposito" id="proposito" rows="12" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bloco B -->

              

                <div class="row afasta30" id="avancar" style="display:none">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right" aria-hidden="true"></i> Finalizar</button>
                    </div>
                </div>
</form>
            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->

    <?php
    include_once("../../../footer.php");
    ?>

<script>
    function exibe(){
    let extra = document.getElementById("alvo");
    alvo.style.display = "block";
}
    function mostraAvancar(){
    let proxima = document.getElementById("avancar");
    proxima.style.display = "block";
}
</script>
<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>