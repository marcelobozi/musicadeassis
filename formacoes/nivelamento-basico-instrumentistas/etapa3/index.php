<?php
session_start();
include_once("../../../config.php");

$_SESSION['missal'] = $_POST['sobre_musicas'] ?? 'Não informado';
$_SESSION['perdao'] = $_POST['perdao'] ?? 'Não informado';

$brutos = $_POST['funcao_musica'] ?? [];
$limpos = array_filter(array_map('trim', $brutos));
$lista = !empty($limpos) 
    ? implode(';', $limpos) 
    : "";
$_SESSION['funcoes_musica'] = $lista;

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
    <title>Nivelamento Novos Membros - Etapa 3</title>

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
                            <h1 class="exo-2-four"><i class="fa fa-comment" aria-hidden="true"></i> BLOCO 3 — Repertório e Planejamento Musical</h1>
                        </div>
                </div>
                    <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 50%">50%</div>
                        </div>
                    </div>
                </div>
<form name="etapa1" id="etapa1" action="/formacoes/nivelamento-basico-instrumentistas/etapa4/" method="post">
                <!-- bloco A -->
                <div class="row afasta60">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="color:#000">7. O canto de Comunhão deve:</h4>
                                    <p>(Múltipla escolha)</p>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" name="comunhao[]" type="checkbox" value="Ser qualquer música eucarística conhecida" id="bloco1a">
                                            <label class="form-check-label" for="bloco1a">
                                                Ser qualquer música eucarística conhecida 
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="comunhao[]" type="checkbox" value="Ter relação direta com o Evangelho, o tempo litúrgico ou a antífona" id="bloco1b">
                                            <label class="form-check-label" for="bloco1b">
                                                Ter relação direta com o Evangelho, o tempo litúrgico ou a antífona
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="comunhao[]" type="checkbox" value="Ser sempre animado" id="bloco1c">
                                            <label class="form-check-label" for="bloco1c">
                                                Ser sempre animado 
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="comunhao[]" type="checkbox" value="Ser escolhido no dia da missa" id="bloco1d">
                                            <label class="form-check-label" for="bloco1d">
                                                Ser escolhido no dia da missa 
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
                                    <h4 style="color:#000">8. Quem define o repertório final da Missa?</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repertorio_final_missa" value="O instrumentista" id="nunca-atuei">
                                    <label class="form-check-label" for="nunca-atuei">
                                        O instrumentista
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repertorio_final_missa" value="O ministério de música isoladamente" id="menos-um-ano">
                                    <label class="form-check-label" for="menos-um-ano">
                                        O ministério de música isoladamente
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repertorio_final_missa" value="O ministério em comunhão com a coordenação litúrgica" id="um-a-3-anos">
                                    <label class="form-check-label" for="um-a-3-anos">
                                        O ministério em comunhão com a coordenação litúrgica
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repertorio_final_missa" value="O celebrante apenas" id="mais-3-anos">
                                    <label class="form-check-label" for="mais-3-anos">
                                        O celebrante apenas 
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
                                    <h4 style="color:#000">9. Em tempos litúrgicos como Quaresma e Advento, a música deve:</h4>
                                </div>
                            </div>
                            <div class="row afasta20">
                                <div class="col-md-12">

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quaresma" value="Manter o mesmo estilo do Tempo Comum " id="sem-formacao-liturgica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="sem-formacao-liturgica">
                                        Manter o mesmo estilo do Tempo Comum  
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quaresma" value="Ser mais sóbria e coerente com o caráter penitencial/expectante" id="formacao-basica" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-basica">
                                        Ser mais sóbria e coerente com o caráter penitencial/expectante
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quaresma" value="Ser evitada " id="formacao-intermediaria" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-intermediaria">
                                        Ser evitada 
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quaresma" value="Ser substituída por silêncio total" id="formacao-avancada" onClick="mostraAvancar()">
                                    <label class="form-check-label" for="formacao-avancada">
                                        Ser substituída por silêncio total  
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