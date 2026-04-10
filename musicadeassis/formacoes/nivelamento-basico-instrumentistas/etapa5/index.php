<?php
session_start();
include_once("../../../config.php");

$_SESSION['improvisos'] = $_POST['improvisos'] ?? 'Não informado';

$brutos = $_POST['consagracao'] ?? [];
$limpos = array_filter(array_map('trim', $brutos));
$lista = !empty($limpos) 
    ? implode(';', $limpos) 
    : "";
$_SESSION['consagracao'] = $lista;

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
    <title>Nivelamento Novos Membros - Etapa 5</title>

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
                            BLOCO 5 — Informática e Slides</h1>
                        </div>
                </div>

                    <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 84%">84%</div>
                        </div>
                    </div>
                </div>


                   
<form name="etapa1" id="etapa1" action="/formacoes/nivelamento-basico-instrumentistas/etapa6/" method="post">
                <!-- bloco A -->
                 <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="color:#000">12. Você sabe preparar slides de músicas para projeção?</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">

                                    <div class="form-check">
                                    <input class="form-check-input" value="Não" type="radio" name="slides" id="sem-formacao-liturgica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="sem-formacao-liturgica">
                                        Não
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" value="Sim nível básico" type="radio" name="slides" id="formacao-basica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-basica">
                                        Sim, nível básico  
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" value="Sim nível intermediário " type="radio" name="slides" id="formacao-intermediaria" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-intermediaria">
                                        Sim, nível intermediário 
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" value="Sim nível avançado" type="radio" name="slides" id="formacao-avancada" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-avancada">
                                        Sim, nível avançado   
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
                                    <h4 style="color:#000">13. Em slides litúrgicos, é correto afirmar que:</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="liturgislides" value="Quanto mais animações melhor" id="nunca-atuei">
                                    <label class="form-check-label" for="nunca-atuei">
                                        Quanto mais animações, melhor  
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="liturgislides" value="Letras decorativas ajudam na oração" id="menos-um-ano">
                                    <label class="form-check-label" for="menos-um-ano">
                                        Letras decorativas ajudam na oração 
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="liturgislides" value="Clareza, contraste e simplicidade são prioritários" id="um-a-3-anos">
                                    <label class="form-check-label" for="um-a-3-anos">
                                        Clareza, contraste e simplicidade são prioritários 
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="liturgislides" value="O fundo deve chamar atenção" id="mais-3-anos">
                                    <label class="form-check-label" for="mais-3-anos">
                                        O fundo deve chamar atenção  
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
                                    <h4 style="color:#000">14. Você sabe: (marque todas que se aplicam)</h4>
                                    <p>(Múltiplas escolhas)</p>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" name="habilidades[]" type="checkbox" value="Usar PowerPoint ou Google Slides" id="bloco1a" onClick="mostraAvancar()">
                                            <label class="form-check-label" for="bloco1a">
                                                Usar PowerPoint ou Google Slides
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="habilidades[]" type="checkbox" value="Ajustar tamanho de fonte para leitura da assembleia" id="bloco1b" onClick="mostraAvancar()">
                                            <label class="form-check-label" for="bloco1b">
                                                Ajustar tamanho de fonte para leitura da assembleia
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="habilidades[]" type="checkbox" value="Organizar repertório por data/tempo litúrgico" id="bloco1c" onClick="mostraAvancar()">
                                            <label class="form-check-label" for="bloco1c">
                                                Organizar repertório por data/tempo litúrgico  
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="habilidades[]" type="checkbox" value="Trabalhar com arquivos compartilhados Drive" id="bloco1d" onClick="mostraAvancar()">
                                            <label class="form-check-label" for="bloco1d">
                                                Trabalhar com arquivos compartilhados (Drive / Nuvem)
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