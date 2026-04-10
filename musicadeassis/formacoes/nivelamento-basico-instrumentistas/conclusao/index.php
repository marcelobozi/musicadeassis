<?php
session_start();
include_once("../../../config.php");

$_SESSION['quando'] = date('d-m-Y');
$_SESSION['hard_skills'] = 1;
$_SESSION['soft_skills'] = 1;
$_SESSION['proposito'] = $_POST['proposito'] ?? 'Não informado';
$_SESSION['retrabalho'] = $_POST['retrabalho'] ?? 'Não informado';


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
    <title>Nivelamento Novos Membros - Conclusão</title>

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
                        <li class="breadcrumb-item active" aria-current="page">Conclusão</li>
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
                            <h1 class="exo-2-four"><i class="fa fa-check" aria-hidden="true"></i> 
                            Avaliação concluída</h1>
                        </div>
                </div>


                    <div class="row afasta30">
                    <div class="col-md-12">
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 100%">100%</div>
                        </div>
                    </div>
                </div>

              
                    <div class="row afasta30">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                <h2 style="color:#0a3622">Obrigado por ter realizado todo o teste.</h2>
                                <hr>
                                <p>Como dito no início, O objetivo <strong>não é excluir</strong>, mas <strong>discernir o nível de maturidade litúrgica, musical e técnica</strong> do candidato / membro. A partir dos resultados poderemos melhor pensar e estrutrurar treinamentos em grupo ou individuais.</p>
                                <p><strong>A Coordenação.</strong></p>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->

                                    <script>
                                        window.dataLayer = window.dataLayer || [];
                                        dataLayer.push({ results: null });  // Clear the previous ecommerce object.
                                                dataLayer.push({
                                                event: "view_result",
                                                results: {
                                                    apelido: "<?php echo $_SESSION['nome']; ?>",
                                                    ticket: "<?php echo $_SESSION['ticket']; ?>",
                                                    tempo_atuacao: "<?php echo $_SESSION['tempoatuacao']; ?>",
                                                    formacao_previa: "<?php echo $_SESSION['formacao']; ?>",
                                                    instrumentos: "<?php echo $_SESSION['instrumentos']; ?>",
                                                    outro_instrumento: "<?php echo $_SESSION['outroinstrumto']; ?>",
                                                    funcoes_musica_missa: "<?php echo $_SESSION['funcoes_musica']; ?>",
                                                    conformidade_missal: "<?php echo $_SESSION['missal']; ?>",
                                                    perdao: "<?php echo $_SESSION['perdao']; ?>",
                                                    comunhao: "<?php echo $_SESSION['comunhao']; ?>",
                                                    final: "<?php echo $_SESSION['final_missa']; ?>",
                                                    quaresma_advento_regras: "<?php echo $_SESSION['quaresma']; ?>",
                                                    consagracao_comportamento: "<?php echo $_SESSION['consagracao']; ?>",
                                                    improvisos: "<?php echo $_SESSION['improvisos']; ?>",
                                                    saber_preparar_slides: "<?php echo $_SESSION['slides']; ?>",
                                                    conteudo_slides: "<?php echo $_SESSION['liturgislides']; ?>",
                                                    habilidades_ti: "<?php echo $_SESSION['habilidades']; ?>",
                                                    rebeldia: "<?php echo $_SESSION['retrabalho']; ?>",
                                                    proposito: "<?php echo $_SESSION['proposito']; ?>"
                                                }
                                                });
                                                


                                    </script>

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