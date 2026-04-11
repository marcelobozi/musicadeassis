<?php
include_once("../../../config.php");
$aleluia = 0;
$exulte = 0;
$aspersao = 0;
$ladainha = 0;
$gloria = 0;
$ofertas =  0;
$santo =  0;
$cordeiro =  0;
$comunhao =  0;
$pos =  0;
$final = 0;
$total = ($aleluia  + $exulte + $aspersao + $ladainha + $gloria + $ofertas + $santo + $cordeiro + $comunhao + $pos + $final) / 11;
$ultimo = "10/04/2026 19h";
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
    <title>Missa em Comemoração ao Dia do Sagrado Coração de Jesus - Coral São Francisco - Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <style>
h2{
  color:#000 !important
}
body{
  background:#ad1f1d
}
.branca{
  background:#fff;
}
.font-controls{
  position:fixed;
  right:20px;
  bottom:20px;
  z-index:9999;
  background:#fff;
  border:1px solid #ccc;
  border-radius:10px;
  padding:10px;
  box-shadow:0 2px 10px rgba(0,0,0,.15);
  display:flex;
  gap:8px;
}

.font-controls button{
  min-width:42px;
  height:42px;
  border:1px solid #333;
  background:#fff;
  border-radius:8px;
  font-weight:700;
  cursor:pointer;
}

.font-controls button:hover{
  background:#f3f3f3;
}

@media print {
  body * {
    display: none !important;
  }

  @page {
    margin: 8mm;
  }

  body,
  .container-fluid,
  .container,
  .row,
  [class*="col-"] {
    display: block !important;
    margin: 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
  }

  .imprimir,
  .imprimir * {
    display: revert !important;
    visibility: visible !important;
  }

  .imprimir {
    display: block !important;
    margin: 0 0 2mm 0 !important;
    padding: 0 !important;
    line-height: 1.15;
    page-break-inside: avoid;
    break-inside: avoid;
  }

  h2.imprimir,
  h3.imprimir,
  p.imprimir {
    margin-top: 0 !important;
    margin-bottom: 1.8mm !important;
  }

  h2.imprimir {
    font-size: 18px !important;
    line-height: 1.1 !important;
  }

  h3.imprimir {
    font-size: 14px !important;
    line-height: 1.1 !important;
  }

  h2.imprimir {
    break-before: page;
    page-break-before: always;
    break-after: avoid-page;
    page-break-after: avoid;
  }

  h2.imprimir:first-of-type {
    break-before: auto;
    page-break-before: auto;
  }

  h3.imprimir {
    break-after: avoid-page;
    page-break-after: avoid;
  }

  p.imprimir {
    font-size: 10px !important;
    line-height: 1.1 !important;
    break-inside: avoid-page;
    page-break-inside: avoid;
    break-after: page;
    page-break-after: always;
  }

  p.imprimir:last-of-type {
    break-after: auto;
    page-break-after: auto;
  }

  hr {
    margin: 1.2mm 0 2mm 0 !important;
  }

  .font-controls {
    display: none !important;
  }
}

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
<div class="container-fluid" style="background-color:#2e1e11">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:15px;font-size:.9em;font-family: Exo 2, sans-serif;color:#fff !important">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#fff">Início</a></li>
                        <li class="breadcrumb-item"><a href="/quem-somos/" style="color:#fff">Quem Somos</a></li>
                        <li class="breadcrumb-item"><a href="/quem-somos/coral-sao-francisco/" style="color:#fff">Coral São Francisco</a></li>
                        <li class="breadcrumb-item"  aria-current="page">Missa em Comemoração ao Dia do Sagrado Coração de Jesus</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
  </header>

    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:40px">
            <div class="col-md-6 col-11">
                

            <div class="row" style="margin-bottom:40px; padding-top:10px">
               <div class="col-md-12 col-12 text-center">
                <a  class="btn btn-success" target="_blank" href="https://wa.me/?text=Confira%20os%20canticos%20que%20executaremos%20no%20Coral%20na%20Missa%20de%20Vigilia%20Pascal%2004%20de%20Abril https://musicadeassis.com.br/quem-somos/coral-sao-francisco/missa-vigilia-pascal/"><i class="fa fa-whatsapp" aria-hidden="true"></i> Compartilhar </a>
                <a class="btn btn-dark" href="javascript:window.print()"><i class="fa fa-print" aria-hidden="true"></i> Imprimir</a>
              </div>
              <div class="col-md-12 col-12 afasta20 text-center">
                <span style="font-size:.8em;color:#FFF !important"><i class="fa fa-clock" aria-hidden="true"></i> Última atualização: 
                <?php echo $ultimo;?></span>
                <h1 class="afasta30" style="color:#fff">Missa em Comemoração ao Dia do Sagrado Coração de Jesus - 12/06/2026</h1>
              </div>
            </div>

      
            <div class="row" style="border:dashed 1px #939393;padding-bottom:20px;border-radius:20px;background-color:#fff;padding-top:5px">
              <div class="col-md-12 text-center">
                <span style="font-size:.8em">PROGRESSO GERAL:</span> 
              </div>
              <div class="col-md-12 afasta20">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $total;?>" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: <?php echo $total;?>%"><?php echo $total;?>%</div>
                </div>
              </div>
            </div>







              <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> ENTRADA</h2>
                        <h3 class="text-center imprimir">Coração Santo - 4 vozes</h3>
                            <!-- progresso -->
                            <div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $gloria; ?>" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width: <?php echo $gloria; ?>%"><?php echo $gloria; ?>%</div>
                            </div>
                            <!-- progresso -->
                    </div>
                    <div class="col-md-12">
                        <div class="ratio ratio-16x9">
                          <iframe src="https://www.youtube.com/embed/BOPV_YtYYiE?rel=0" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-12 afasta40">
        
                    </div>
                    <div class="col-md-12 afasta20">
                        <p class="imprimir">
                          <strong>Coração Santo, Tu reinarás,<br>
                                  Tu nosso encanto sempre serás!</strong><br>
                                  <br>
                                  1. Jesus amável, Jesus piedoso,<br>
                                  Deus amoroso, frágua de amor!<br>
                                  Aos Teus pés venho, se Tu me deixas,<br>
                                  Humildes queixas, sentido expor!<br>
                                  <br>
                                  2. Divino peito, que amor inflama<br>
                                  Em viva chama de eterna luz!<br>
                                  Porque a tens sempre, reconcentrada,<br>
                                  Não adorada, doce Jesus?<br>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div class="row afasta20">
<!--
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" target="_blank" href="midia/gloria-cifra-marcelo.pdf"><i class="fa fa-print" aria-hidden="true"></i> Cifra by Marcelo</a></div>
                          -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>





 

              
              <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> GLÓRIA</h2>
                        <h3 class="text-center imprimir">Gloria a Deus Nas Alturas</h3>
                            <!-- progresso -->
                            <div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $gloria; ?>" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width: <?php echo $gloria; ?>%"><?php echo $gloria; ?>%</div>
                            </div>
                            <!-- progresso -->
                    </div>
                    <div class="col-md-12">
                      <!--
                        <div class="ratio ratio-16x9">
                          <iframe src="https://www.youtube.com/embed/u7LlcbNGnPk?rel=0" title="YouTube video" allowfullscreen></iframe>
                        </div>
                          -->
                    </div>
                    <div class="col-md-12 afasta40">
                            <div class="row">

                              <div class="col-md-12 col-12">
                                <div class="alert alert-dark" role="alert">
                                    <h4>Glória - Contralto</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/gloria-contralto.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-contralto.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                              </div>

                              <div class="col-md-12 col-12">
                                <div class="alert alert-light" role="alert">
                                    <h4>Glória - Soprano</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/gloria-soprano.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                              </div>

                              <div class="col-md-12 col-12">
                                <div class="alert alert-success" role="alert">
                                    <h4>Glória - Tenor</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/gloria-tenor.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-tenor.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                              </div>

                              <div class="col-md-12 col-12">
                                <div class="alert alert-info" role="alert">
                                    <h4>Glória - Baixo</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/gloria-baixo.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-baixo.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-md-12 afasta20">
                        <p class="imprimir">
                          LETRA</p>
                    </div>
                    <div class="col-md-12">
                        <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" target="_blank" href="midia/gloria-cifra-marcelo.pdf"><i class="fa fa-print" aria-hidden="true"></i> Cifra by Marcelo</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              
              <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #ccc;padding:20px">
                  <h2 class="text-center"> SALMO</h2>
                  <h4 class="text-center"> (Aguardando definição)</h4>
                </div>
              </div>



              
              <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #ccc;padding:20px">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="text-center"> ACLAMAÇÃO</h2>
                        <h4 class="text-center"> Aleluia. Eu Sou o Pão Vivo</h4>
 <!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $aleluia; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $aleluia; ?>%"><?php echo $aleluia; ?>%</div>
</div>
<!-- progresso -->
                      </div>
                      <div class="col-md-12">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/lcZGRTE8q30?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                      <div class="col-md-12 afasta20">
                      <div class="alert alert-danger" role="alert">
                                    <h4>Contralto Parte 1</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/aleluia_contralto_parte1.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12">
                      <div class="alert alert-danger" role="alert">
                                    <h4>Contralto Parte 2</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/aleluia_contralto_parte2.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12">
                      <div class="alert alert-info" role="alert">
                                    <h4>Homens - Parte 1</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/aleluia_homens_parte1.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12">
                      <div class="alert alert-info" role="alert">
                                    <h4>Homens - Parte 2</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/aleluia_homens_parte2.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12 afasta40">
                      <div class="alert alert-dark" role="alert">
                                    <h4 style="color:#000">Contraltos - Parte 1 + Parte 2</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/aleluia_contralto_musicainteira.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12">
                      <div class="alert alert-dark" role="alert">
                                    <h4 style="color:#000">Homens - Parte 1 + Parte 2</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/aleluia_homens_musicainteira.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/aleluia_homens_musicainteira.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                            <div class="col-md-6"><a style="width:100%" class="btn btn-dark" href="midia/aclamacao_partitura_unificada.pdf" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                            <div class="col-md-6"></div>
                      </div>
                    </div>
                    </div>
                </div>
              </div>




              
           <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> OFERTAS</h2>
                        <h3 class="text-center">Um Coração Para Amar</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $ofertas; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $ofertas; ?>%"><?php echo $ofertas; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/py74D9V9QxE?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">

                        <p class="imprimir">
                        Um coração para amar<br>
Pra perdoar e sentir<br>
Para chorar e sorrir<br>
Ao me criar tu me deste<br>
<br>
Um coração pra sonhar<br>
Inquieto e sempre a bater<br>
Ansioso por entender<br>
As coisas que tu disseste<br>
<br>
<strong>Eis o que eu venho te dar<br>
Eis o que eu ponho no altar<br>
Toma senhor que ele é teu<br>
Meu coração não é meu (2x)</strong><br>
<br>
Quero que o meu coração<br>
Seja tão cheio de paz<br>
Que não se sinta capaz<br>
De sentir ódio ou rancor<br>
<br>
Quero que a minha oração<br>
Possa me amadurecer<br>
Leve-me a compreender<br>
As consequências do amor<br>
<br> 
<strong>Eis o que eu venho te dar<br>
Eis o que eu ponho no altar<br>
Toma senhor que ele é teu<br>
Meu coração não é meu (2x)</strong>
                        </p>
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"></div>
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" target="_blank" href="https://www.cifraclub.com.br/padre-zezinho/um-coracao-para-amar/"><i class="fa fa-print" aria-hidden="true"></i> Cifra</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>






              
              <div class="row branca afasta40" style="margin-bottom:80px">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> SANTO</h2>
                        <h3 class="text-center imprimir">Santo, Santo, Santo</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $santo; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $santo; ?>%"><?php echo $santo; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12 afasta40">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/pNjBKMJbbkc?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">
                        <p class="imprimir">
                        Santo, Santo, Santo, Senhor, Deus do universo!<br>
                        Santo, Santo, Santo, Senhor, Deus do universo!<br>
                        O céu e a terra proclamam a vossa glória.<br>
                        Hosana, hosana, hosana nas alturas!<br>
                        Hosana, hosana, hosana nas alturas!<br><br>
                        Bendito o que vem em nome do Senhor,<br>
                        em nome do Senhor!<br><br>
                        Hosana, hosana, hosana nas alturas!<br>
                        Hosana, hosana, hosana nas alturas!<br>
                        </p>
                    </div>

                    <div class="col-md-12 afasta20">
                          <div class="row">
                           
                            <div class="col-md-12">
                            		<div class="alert alert-success" role="alert">
                                    <h4>SANTO, SANTO, SANTO - VOZ DE MULHERES (CONTRALTO E SOPRANO JUNTAS). EM DO+</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/santo-santo-mulheres.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-12">
                    <div class="row afasta20">
                           
                            <div class="col-md-12">
                           		<div class="alert alert-warning" role="alert">
                                    <h4>SANTO, SANTO,SANTO - VOZ DE HOMENS ( TENORES E BAIXOS JUNTOS) - DO+</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/santo-santo-homens.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="midia/santo_marco_frisina.pdf" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                        <div class="col-md-6 col-6"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>





               <div class="row branca afasta40" style="margin-bottom:80px">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> CORDEIRO</h2>
                        <h3 class="text-center">Agnus Dei | Cordeiro de Deus</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $cordeiro; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $cordeiro; ?>%"><?php echo $cordeiro; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12 afasta40">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/shTyF0a3uAE?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">
                        <p class="imprimir">
                        Agnus Dei,<br>
                        Qui tollis peccata mundi,<br>
                        Miserere nobis,<br>
                        Miserere nobis.<br>
                        <br>
                        Agnus Dei,<br>
                        Qui tollis peccata mundi,<br>
                        Miserere nobis,<br>
                        Miserere nobis.<br>
                        <br>
                        Agnus Dei,<br>
                        Qui tollis peccata mundi,<br>
                        Dona nobis pacem.<br>
                        Dona nobis pacem.
                        </p>
                    </div>
                    <div class="col-md-12">

<div class="col-md-12 afasta20">
				<div class="alert alert-warning" role="alert">
                                    <h4>Baixo</h4>
                                        <audio controls preload="metadata" class="w-100">
                                          <source src="midia/agnus-baixo.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/agnus-baixo.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>

</div>
<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
        <h4>Tenor</h4>
        <audio controls preload="metadata" class="w-100">
            <source src="midia/agnus-tenor.mp3" type="audio/mpeg">
            <p>Seu navegador não suporta áudio HTML5. <a href="midia/agnus-tenor.mp3">Baixe o MP3</a>.</p>
        </audio>
                                  </div>

</div>
<div class="col-md-12">
				<div class="alert alert-dark" role="alert">
                                    <h4>Contralto</h4>
                                        <audio controls preload="metadata" class="w-100">
                                         <source src="midia/agnus-contralto.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/agnus-contralto.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>

</div>
<div class="col-md-12">
				<div class="alert alert-info" role="alert">
                                    <h4>Soprano</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/agnus-soprano.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/agnus-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>

</div>

                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="https://www.cifraclub.com.br/fraternidade-caminho/agnus-dei-cordeiro-de-deus/" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Cifra</a></div>
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="midia/agnusdei.pdf" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>





              <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> COMUNHÃO</h2>
                        <h3 class="text-center imprimir">Durante a Ceia - Shalom</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $comunhao; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $comunhao; ?>%"><?php echo $comunhao; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12 afasta40">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/sMc81yXwy3I?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">
                  <p class="imprimir">1 - Durante a Ceia, o discípulo do amor recostou sua <br>
                  cabeça sobre o peito do Senhor.<br>
                  E cada impulso do Sagrado Coração era um novo <br>
                  testemunho de acolhida e de perdão.<br>
                  <br>
                  <strong>    
                  E hoje, aqui, nesta Santa Comunhão, novamente pulsa<br>
                  em nós o Sagrado Coração.</strong>  <br>
                  <br>
                  2 - Durante a Ceia, seu apelo nos deixou de amarmos uns<br>
                  aos outros, como Ele nos amou.       <br>
                  Cada palavra do Sagrado Coração era um novo ensinamento<br>
                  de fraterna comunhão.<br>
                          <br>
                  3 - Durante a Ceia, antes de enfrentar a Cruz, quis <br>
                  ficar com seus amigos, para ser a sua luz.<br>
                  Como alimento, o Sagrado Coração entre nós ficou <br>
                  presente neste vinho e neste pão.<br></p>
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6">

                          <a style="width:100%" class="btn btn-dark" href="https://www.cifraclub.com.br/apostolado-da-oracao/durante-a-ceia-comunhao/" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Cifra</a>
                 
                        </div>
                        <div class="col-md-6 col-6"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              
              <div class="row branca afasta40" style="margin-bottom:80px">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> PÓS COMUNHÃO</h2>
                        <h3 class="text-center imprimir">Jesu Salvator Mundi</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $pos; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $pos; ?>%"><?php echo $pos; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12 afasta40">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/34zq1kb9KOk?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">
                        <p class="imprimir">
                          Jesu, Salvator Mundi<br>
                          Tuis famulis subveni<br>
                          Quos pretioso sanguine<br>
                          Quos pretioso sanguine<br>
                          Redemisti<br>
                          <br>
                          Jesu, Salvator Mundi<br>
                          Tuis famulis subveni<br>
                          Quos pretioso sanguine<br>
                          Quos pretioso sanguine<br>
                          Redemisti<br>
                          <p>
                    </div>
                    <div class="col-md-12 col-12">
                      		<div class="alert alert-warning" role="alert">
                                    <h4>JESUS SALVATOR MUNDI - SOPRANO</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/jesus-salvator-mundi-soprano.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12 col-12">
                      		<div class="alert alert-success" role="alert">
                                    <h4>JESUS SALVATOR MUNDI - CONTRALTO</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/jesus-salvator-mundi-contralto.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12 col-12">
                      		<div class="alert alert-info" role="alert">
                                    <h4>JESUS SALVATOR MUNDI - HOMENS</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/jesus-salvator-mundi-homens.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="midia/jesu-salvator-mundi-v-2.pdf" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="https://www.cifraclub.com.br/janalynn-castelino/jesu-salvator-mundi/letra/" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Cifra</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




              <div class="row branca afasta40" style="margin-bottom:80px">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> FINAL</h2>
                        <h3 class="text-center imprimir">Seguir-te-ei</h3>
                              <!-- progresso -->
                              <div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $final; ?>" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: <?php echo $final; ?>%"><?php echo $final; ?>%</div>
                              </div>
                              <!-- progresso -->
                    </div>
                    <div class="col-md-12 afasta40">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/nTdhx9Zz04U?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">
                 <p class="imprimir">
                        <strong>
                        R. Seguir-te-ei, seguir-te-ei, ó Senhor,<br>
                        e na tua estrada caminharei.</strong><br>
                        <br>
                        <strong>Homens:</strong> Seguir-te-ei no caminho do amor<br>
                        e doarei ao mundo a vida.<br>
                        <br>
                        <strong>Mulheres:</strong> Seguir-te-ei no caminho da luz<br>
                        e a tua cruz nos salvará.<br>
                        <br>
                        <strong>Todos:</strong> Seguir-te-ei no caminho da alegria<br>   
                        e a tua luz nos guiará.
                        </p>
                    </div>
                    <div class="col-md-12 afasta20">
				                <div class="alert alert-warning" role="alert">
                                    <h4>Baixo</h4>
                                        <audio controls preload="metadata" class="w-100">
                                          <source src="midia/ste-baixo.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/ste-baixo.mp3">Baixe o MP3</a>.
                                        </audio>
                          </div>
                    </div>
                    <div class="col-md-12">
				          <div class="alert alert-danger" role="alert">
                                    <h4>Tenor</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/ste-tenor.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/ste-tenor.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    
                      </div>
                      <div class="col-md-12">
                        <div class="alert alert-dark" role="alert">
                                      <h4>Contralto</h4>
                                        <audio controls preload="metadata" class="w-100">
                                         <source src="midia/ste-contralto.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/ste-contralto.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>                
                    </div>
                    <div class="col-md-12">
				              <div class="alert alert-info" role="alert">
                                    <h4>Soprano</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/ste-soprano.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/ste-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                    
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="midia/seguir-te-ei.pdf" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                        <div class="col-md-6 col-6"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>





                </div>
            </div>
        </div>
    </div>


    <?php
    include_once("../../../footer.php");
    ?>

    <div class="font-controls" aria-label="Controles de tamanho de fonte">
      <button type="button" id="decrease-font" aria-label="Diminuir fonte">A-</button>
      <button type="button" id="increase-font" aria-label="Aumentar fonte">A+</button>
    </div>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
    <script>
      (function () {
        var paragraphs = document.querySelectorAll('p');
        var printableParagraphs = document.querySelectorAll('p.imprimir');
        var increaseButton = document.getElementById('increase-font');
        var decreaseButton = document.getElementById('decrease-font');
        var scale = 1;
        var step = 0.1;
        var minScale = 0.8;
        var maxScale = 1.6;

        paragraphs.forEach(function (paragraph) {
          var currentSize = window.getComputedStyle(paragraph).fontSize;
          paragraph.dataset.baseFontSize = parseFloat(currentSize);
        });

        function applyFontScale() {
          paragraphs.forEach(function (paragraph) {
            var base = parseFloat(paragraph.dataset.baseFontSize);
            paragraph.style.fontSize = (base * scale) + 'px';
          });
        }

        increaseButton.addEventListener('click', function () {
          scale = Math.min(maxScale, scale + step);
          applyFontScale();
        });

        decreaseButton.addEventListener('click', function () {
          scale = Math.max(minScale, scale - step);
          applyFontScale();
        });

        function applyPrintAutoFont() {
          printableParagraphs.forEach(function (paragraph) {
            var textLength = paragraph.textContent.replace(/\s+/g, ' ').trim().length;

            paragraph.dataset.printFontSize = paragraph.style.fontSize || '';
            paragraph.dataset.printLineHeight = paragraph.style.lineHeight || '';

            if (textLength > 2200) {
              paragraph.style.fontSize = '8.5px';
              paragraph.style.lineHeight = '1.05';
            } else if (textLength > 1500) {
              paragraph.style.fontSize = '9px';
              paragraph.style.lineHeight = '1.08';
            } else if (textLength > 1000) {
              paragraph.style.fontSize = '9.5px';
              paragraph.style.lineHeight = '1.1';
            } else {
              paragraph.style.fontSize = '10px';
              paragraph.style.lineHeight = '1.1';
            }
          });
        }

        function resetPrintAutoFont() {
          printableParagraphs.forEach(function (paragraph) {
            if (paragraph.dataset.printFontSize !== undefined) {
              paragraph.style.fontSize = paragraph.dataset.printFontSize;
            }

            if (paragraph.dataset.printLineHeight !== undefined) {
              paragraph.style.lineHeight = paragraph.dataset.printLineHeight;
            }
          });
        }

        window.addEventListener('beforeprint', applyPrintAutoFont);
        window.addEventListener('afterprint', resetPrintAutoFont);
      })();
    </script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
<script>
  // Inicializa todos os elementos <audio> da página de uma vez
  const players = Plyr.setup('audio', {
    controls: ['play', 'progress', 'current-time', 'mute', 'volume'],
    tooltips: { controls: true, seek: true }
  });
</script>
  </body>
</html>