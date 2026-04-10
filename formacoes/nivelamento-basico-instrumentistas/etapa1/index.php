<?php
session_start();

$data = date('Ydm');
$consoantes = 'BCDFGHJKLMNPQRSTVWXYZ';
$letras = '';
for ($i = 0; $i < 3; $i++) {
    $letras .= $consoantes[random_int(0, strlen($consoantes) - 1)];
}
$numero = str_pad(random_int(1, 100), 3, '0', STR_PAD_LEFT);
$ticket = $data . '-' . $letras . '-' . $numero;
$_SESSION['ticket'] = $ticket;
$_SESSION['nome'] = $_POST['nome'];

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
    <title>Nivelamento Novos Membros - Etapa 1</title>

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
                    <div class="col-md-12 text-end">
                        <span class="badge text-bg-dark"><?php echo $_SESSION['nome']; ?> | TICKET: <?php echo $_SESSION['ticket'];?></span>
                    </div>
                        <div class="col-md-12 col-12 afasta30">
                            <h1 class="exo-2-four"><i class="fa fa-comment" aria-hidden="true"></i> BLOCO 1 — Perfil e Disponibilidade</h1>
                        </div>
                </div>

                    <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 16%">16%</div>
                        </div>
                    </div>
                </div>

<form name="etapa1" id="etapa1" action="/formacoes/nivelamento-basico-instrumentistas/etapa2/" method="post">
                <!-- bloco A -->
                <div class="row afasta60">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="color:#000">1. Qual instrumento você toca / pretente tocar na liturgia?</h4>
                                    <p>(Múltiplas escolhas)</p>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">
                                    
                                    <div class="form-check">
                                        <input name="instrumento[]" class="form-check-input" type="checkbox" value="Teclado ou piano" id="teclado-ou-piano">
                                            <label class="form-check-label" for="teclado-ou-piano">
                                                Teclado / Piano
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="instrumento[]" class="form-check-input" type="checkbox" value="Violão" id="violao">
                                            <label class="form-check-label" for="violao">
                                                Violão  
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="instrumento[]" class="form-check-input" type="checkbox" value="Baixo" id="baixo">
                                            <label class="form-check-label" for="baixo">
                                                Baixo  
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="instrumento[]" class="form-check-input" type="checkbox" value="Sopros" id="sopros">
                                            <label class="form-check-label" for="sopros">
                                                Sopros  
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="instrumento[]" class="form-check-input" type="checkbox" value="Cordas friccionadas" id="cordas-friccionadas">
                                            <label class="form-check-label" for="cordas-friccionadas">
                                                Cordas friccionadas 
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="instrumento[]" class="form-check-input" type="checkbox" value="Percussão" id="percussao">
                                            <label class="form-check-label" for="percussao">
                                                Percussão
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="instrumento[]" class="form-check-input" type="checkbox" value="Outro" id="outro" onClick="exibe()">
                                            <label class="form-check-label" for="outro">
                                               Outro
                                            </label>
                                    </div>

                                </div>
                            </div>
                            <div class="row afasta20" id="alvo" style="display:none">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="outro-instrumento" id="outro-instrumento" placeholder="Qual instrumento?">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    
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
                                    <h4 style="color:#000">2. Há quanto tempo você atua (ou já atuou) em missas ou celebrações litúrgicas?</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tempo-atuacao" value="Nunca atuei" id="nunca-atuei">
                                    <label class="form-check-label" for="nunca-atuei">
                                        Nunca atuei
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tempo-atuacao" value="Menos de 1 ano" id="menos-um-ano">
                                    <label class="form-check-label" for="menos-um-ano">
                                        Menos de 1 ano
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tempo-atuacao" value="1 a 3 anos" id="um-a-3-anos">
                                    <label class="form-check-label" for="um-a-3-anos">
                                        1 a 3 anos
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tempo-atuacao" value="Mais de 3 anos" id="mais-3-anos">
                                    <label class="form-check-label" for="mais-3-anos">
                                        Mais de 3 anos
                                    </label>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- bloco B -->

<!-- bloco C -->
                <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="color:#000">3. Você já participou de alguma formação litúrgica formal (curso, pastoral, escola de música litúrgica)?</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formacao" value="Sem formação litúrgica" id="sem-formacao-liturgica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="sem-formacao-liturgica">
                                        Não
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formacao" value="Tenho formação litúrgica básica" id="formacao-basica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-basica">
                                        Sim - básica
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formacao" value="Tenho formação litúrgica intermediária" id="formacao-intermediaria" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-intermediaria">
                                        Sim - intermediária
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formacao" value="Tenho formação litúrgica avançada" id="formacao-avancada" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-avancada">
                                        Sim - avançada
                                    </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- bloco C -->

                <div class="row afasta30" id="avancar" style="display:none">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right" aria-hidden="true"></i> Próxima</button>
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