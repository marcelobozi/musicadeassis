<?php
include_once("../../../config.php");
$aleluia = 100;
$exulte = 100;
$aspersao = 100;
$ladainha = 100;
$gloria = 100;
$ofertas =  100;
$santo =  100;
$cordeiro =  100;
$comunhao =  100;
$pos =  100;
$final = 100;
$total = ($aleluia  + $exulte + $aspersao + $ladainha + $gloria + $ofertas + $santo + $cordeiro + $comunhao + $pos + $final) / 11;
$ultimo = "04/04/2026 10h";
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
    <title>Missa Vigília Pascal - Coral São Francisco - Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>

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
  background:#e5e5e5
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
                        <li class="breadcrumb-item"  aria-current="page">Missa Vigília Pascal</li>
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
                <span style="font-size:.8em"><i class="fa fa-clock" aria-hidden="true"></i> Última atualização: 
                <?php echo $ultimo;?></span>
                <h1 class="afasta30">Missa da Vigília Pascal - 04/04/2026</h1>
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
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> EXULTE</h2>

                     <h3 class="text-center imprimir">Exultem Os Coros Dos Anjos</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $exulte; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $exulte; ?>%"><?php echo $exulte; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/7dhlu6t72rI?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">

                      <p class="imprimir">
Exultem os coros dos anjos<br>
Exulte a assembleia celestial<br>
E um hino de glória aclame o triunfo<br>
Do senhor ressuscitado<br>
Alegre-se a terra inundada da nova luz<br>
<br>
<span style="font-weight:700;background-color:#d8ff00">O esplendor do Rei<br>
Destruiu as trevas<br>
Destruiu as trevas<br>
As trevas do mundo</span><br>
<br>
Que se alegre nossa mãe a igreja<br>
Resplandecente da glória do<br>
Seu senhor<br>
E que neste lugar ressoe unânime<br>
A aclamação de um povo em festa<br>
<br>
O senhor esteja convosco<br>
<span style="font-weight:700;background-color:#d8ff00">Ele esta no meio de nós</span><br>
Corações ao alto<br>
<span style="font-weight:700;background-color:#d8ff00">O nosso coração está em Deus</span><br>
Demos graças ao senhor nosso Deus<br>
<span style="font-weight:700;background-color:#d8ff00">É o nosso dever e salvação</span><br>
<br>
Realmente é justo e necessário<br>
Exaltar com o canto a alegria do Espírito<br>
E elevar um hino ao Pai todo-poderoso<br>
E a seu único filho Jesus Cristo<br>
<br>
<br>
Ele pagou por todos, ao eterno Pai<br>
A dívida de adão, e com seu sangue<br>
Derramado,derramado por amor<br>
Cancelou a condenação do pecado<br>
<br>
Esta é a Páscoa<br>
Em que é imolado o Cordeiro<br>
Esta é a noite em que foram libertados<br>
Nossos pais do Egito<br>
Esta é a noite<br>
Que nos salva da escuridão do mal<br>
<br>
<span style="font-weight:700;background-color:#d8ff00">Esta é a noite<br>
Em que Cristo venceu a morte<br>
E dos infernos<br>
Retorna vitorioso</span><br>
<br>
Ó admirável condescendência<br>
Do teu amor<br>
Ó incomparável ternura e caridade<br>
Que para resgatar o escravo<br>
Sacrificaste o filho<br>
<br>
Sem o pecado de Adão<br>
Cristo não nos teria resgatado<br>
<br>
<span style="font-weight:700;background-color:#d8ff00">Ó feliz culpa, que mereceu<br>
Tão grande redentor!<br>
Ó feliz culpa</span><br>
<br>
Ó noite maravilhosa<br>
Que despojaste o faraó<br>
E enriqueceste Israel<br>
Ó noite maravilhosa<br>
<br>
Só Tu conheceste a hora<br>
Em que Cristo ressuscitou!<br>
Ó noite que destróis o pecado<br>
E lavas as nossas culpas!<br>
Ó noite realmente gloriosa<br>
Que reconcilia o homem com Deus<br>
<br>
<span style="font-weight:700;background-color:#d8ff00">Esta é a noite<br>
Em que cristo venceu a morte<br>
E dos infernos<br>
Retorna vitorioso</span><br>
<br>
Nesta noite, aceita Pai Santo<br>
Este sacrifício de louvor<br>
Que a Igreja te oferece por meio<br>
Dos seus ministros<br>
Na liturgia solene deste círio<br>
Que é sinal da nova luz<br>
<br>
Nós Te rogamos, Senhor!<br>
Que este Círio<br>
Oferecido em honra do Teu Nome<br>
Brilhe radiante<br>
Chegue a Ti, como perfume suave<br>
E se confunda com as estrelas do céu<br>
O encontre aceso a estrela da manhã<br>
Esta estrela que não conhece ocaso<br>
<br>
<span style="font-weight:700;background-color:#d8ff00">Que é Cristo teu Filho<br>
Ressuscitado<br>
Ressuscitado<br>
Da morte<br>
<br>
Amém, amém, amém!</span>

                      </p>
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" target="_blank" href="midia/cifra_exulte.pdf"><i class="fa fa-print" aria-hidden="true"></i> Cifra</a></div>
                        <div class="col-md-6 col-6"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>





           <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> ASPERSÃO</h2>

                     <h3 class="text-center imprimir">Vi Sair Água</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $aspersao; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $aspersao; ?>%"><?php echo $aspersao; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/o974oVU9bkk?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">

                        <p class="imprimir">
                          Vi sair agua do lado direito do templo, aleluia<br>
                          E vi que todos aqueles à quem essa agua chegou<br>
                          Se salvaram e diziam,        Aleluia<br>
                          <br>
                          Aleluiiiiia<br>
                          Louvai o senhor, por que ele é bom<br>
                          E eterna é sua misericórdia<br>
                          <br>
                          Aleluia<br>               
                          Aleluiiiiia<br>
                          Louvai o senhor, por que ele é bom<br>
                          E eterna é sua misericórdia<br>
                          <br>
                          Gloria ao Pai ao Filho e ao Espirito Santo<br>
                          Assim como era o princípio<br>
                          Seja    agora  e   sempre<br>
                          E por todos os séculos dos séculos, A  - a - a -mém<br>
                          </p>
                    </div>

                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="midia/visairagua.pdf" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" target="_blank" href="https://www.cifraclub.com.br/coral-cancao-nova/vi-sair-gua/#tabs=false&instrument=keyboard"><i class="fa fa-print" aria-hidden="true"></i> Cifra</a></div>
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
                        <h3 class="text-center imprimir">Gloria a Deus Nas Alturas - Irmã Míria T. Kolling</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $gloria; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $gloria; ?>%"><?php echo $gloria; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12">
                        <div class="ratio ratio-16x9">
                          <iframe src="https://www.youtube.com/embed/u7LlcbNGnPk?rel=0" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-12 afasta40">
                            <div class="row">
                                  <div class="alert alert-warning" role="alert">
                                    <h4>Contralto</h4>
                                        <audio controls preload="metadata" class="w-100">
                                          <source src="midia/gloria-contralto.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-contralto.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                              <div class="col-md-12 col-12">
                                  <div class="alert alert-danger" role="alert">
                                    <h4>Soprano</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/gloria-soprano.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria-soprano.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                              </div>
                              <div class="col-md-12 col-12">
                                  <div class="alert alert-dark" role="alert">
                                    <h4>Homens</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/gloria_novo.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria_novo.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>
                              </div>
                              <div class="col-md-12 col-12">



                                <div class="alert alert-info" role="alert">
                                    <h4>Amém - Homens</h4>
                                        <audio preload="metadata" controls class="w-100">
                                          <source src="midia/gloria_amem_homens.mp3" type="audio/mpeg">
                                              Seu navegador não suporta áudio HTML5. <a href="midia/gloria_amem_homens.mp3">Baixe o MP3</a>.
                                        </audio>
                                  </div>


                              </div>
                            </div>
                    </div>
                    <div class="col-md-12 afasta20">
                  
                        <p class="imprimir"><strong>Glória a Deus nas al - tu - u - ras,      E paz na terra aos homens por Ele ama - a - dos. (2x)</strong><br>
                          <br>
                          1 - Senhor Deus Rei dos céus Deus Pai todo podero - so <br>
                          Nós vos louvamos, nós vos bendizemos, nós vos adoramos,<br>
                          Nós vos glorificamos, nós vos damos graças por vossa <br>
                          imensa gló - ó - ria<br>
                          <br>
                          2 - Senhor Jesus cristo, filho u -Unigê - ni - to,<br>
                          Senhor Deus, cordeiro de Deus, Fi- i- i- i- lho de Deus Pai.<br>
                          Vós que tirais o pecado do mundo, tende piedade de nós!<br>
                          Vós que tirais o pecado do mundo, acolhei a nossa súplica.<br>
                          Vós que estais a direita do Pai, tende piedade de nós!<br>
                          <br>
                          3 - Só vós sois o Santo, só vós o Senhor, só vós o Altíssimo,<br>
                          Jesus Cristo, com o Espírito Santo,<br>
                          Na gloria de Deus Pai, A - mém<br>
                          A   -  mém, A     - mém, Amém, Amém, Amém</p>
                    
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="midia/gloria-imprimir.jpeg" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" target="_blank" href="https://www.cifraclub.com.br/irma-miria-t-kolling/gloria-a-deus-nas-alturas/"><i class="fa fa-print" aria-hidden="true"></i> Cifra</a></div>
                      </div>
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
                        <h3 class="text-center">Ao Celebrar Nossa Páscoa</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $ofertas; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $ofertas; ?>%"><?php echo $ofertas; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/1RyzPWO8NPs?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">

                        <p class="imprimir">
                        Em procissão vão o pão e o vinho<br>
                        Acompanhados de nossa devoção<br>
                        Pois simbolizam aquilo que ofertamos<br>
                        Nossa vida e o nosso coração<br>
                        <br>
                        <strong>
                        Ao celebrar nossa páscoa<br>
                        E ao vos trazer nossa oferta<br>
                        Fazei de nós,  ó Deus de amor<br>
                        Imitadores do Redentor</strong><br>
                        <br>
                        A nossa Igreja que é mãe deseja<br>
                        Que a consciência do gesto de ofertar<br>
                        Se atualize durante toda a vida<br>
                        Como o Cristo se imola sobre o altar<br>
                        <br>
                        Eucaristia é sacrifício<br>
                        Aquele mesmo que Cristo ofereceu<br>
                        O mundo e homem serão reconduzidos<br>
                        Para a nova aliança com seu Deus<br>
                        <br>
                        O pão e o vinho serão em breve<br>
                        O corpo e o sangue do Cristo Salvador<br>
                        Tal alimento nos une num só corpo<br>
                        Para a glória de Deus em seu louvor<br>
                        </p>
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" href="midia/aocelebrarnossapascoa.pdf" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Partitura</a></div>
                        <div class="col-md-6 col-6"><a style="width:100%" class="btn btn-dark" target="_blank" href="https://www.cifraclub.com.br/catolicas/em-procissao/"><i class="fa fa-print" aria-hidden="true"></i> Cifra</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




              
              
           <div class="row branca afasta40">
                <div class="col-md-12" style="border:solid 1px #000;padding:20px">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="text-center imprimir"><i class="fa fa-music" aria-hidden="true"></i> LADAINHA</h2>
                        <h3 class="text-center">Ladainha de Todos os Santos</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $ladainha; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $ladainha; ?>%"><?php echo $ladainha; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/sSjHJoN37Ww?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">

                        <p class="imprimir">
                        Senhor, tende piedade de nós!	<strong>Senhor, tende piedade de nós</strong><br>
                          Cristo, tende piedade de nós!	<strong>Cristo, tende piedade de nós</strong><br>
                          Senhor, tende piedade de nós!	<strong>Senhor, tende piedade de nós</strong><br>
                          <br>
                          Santa Maria, Mãe de Deus, <strong>Rogai por nós. </strong> <br>
                          São Miguel, <strong>Rogai por nós. </strong> <br>
                          Santos Anjos de Deus, <strong>Rogai por nós. </strong> <br>
                          João Batista,  <strong>Rogai por nós. </strong> <br>
                          São José, <strong>Rogai por nós. </strong> <br> 
                          São Pedro e São Paulo, <strong>Rogai por nós. </strong>  <br> 
                          Santa Maria Madalena, <strong>Rogai por nós. </strong>   <br> 
                          São João Maria Vianney, <strong>Rogai por nós. </strong>  <br>
                          São Francisco de Assis, <strong>Rogai por nós. </strong>  <br>
                          Santa Clara, <strong>Rogai por nós. </strong>  <br>
                          Todos os Santos e Santas de Deus,  <strong>Rogai por nós.</strong>  <br>
                          <br>
                          Sede-nos propício, <strong>livrai-nos, Senhor</strong>;  <br>
                          de todo o mal, <strong>livrai-nos, Senhor</strong>;  <br>
                          de todo o pecado, <strong>livrai-nos, Senhor</strong>;  <br>
                          da morte eterna, <strong>livrai-nos, Senhor</strong>;  <br>
                          Pela vossa encarnação, <strong>livrai-nos, Senhor</strong>; <br>
                          Pela vossa morte e ressurreição, <strong>livrai-nos, Senhor</strong>; <br>
                          Pela efusão do Espírito Santo, 	<strong>livrai-nos, Senhor</strong> ; <br>
                          Apesar de nossos pecados, <strong>ouvi-nos, Senhor.</strong>; <br>
                          <br>
                          (se houver batismo) <br>
                          Para que que vos digneis dar a nova vida aos que chamastes ao batismo, <strong>ouvi-nos, Senhor.</strong>; <br>
                          Jesus, Filho do Deus vivo, <strong>ouvi-nos, Senhor.</strong>; <br>
                          <br>
                          Cristo, ouvi-nos. <strong>Cristo, ouvi-nos.</strong> <br>
                          Cristo, atendei-nos. <strong>Cristo, atendei-nos.</strong>
                        </p>
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
                        <h3 class="text-center imprimir">Celebremos Nossa Páscoa</h3>
<!-- progresso -->
<div style="margin-bottom:20px" class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $comunhao; ?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: <?php echo $comunhao; ?>%"><?php echo $comunhao; ?>%</div>
</div>
<!-- progresso -->
                    </div>
                    <div class="col-md-12 afasta40">
                      <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/MqWuRl3G3oc?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-12 afasta40">
                  <p class="imprimir"><strong>Celebremos nossa Páscoa! Na pureza, na verdade: Aleluia, aleluia!</strong><br>
                          <br>
                          1- Dai graças ao Senhor, pois ele é bom, eterna é sua misericórdia.<br><br>
                          2 - Repita o seu povo eleito: "Eterna é a sua  misericórdia"<br>
                          <br>
                          3 - O poder do Senhor fez maravilha, o poder do Senhor me exaltou<br><br>
                          4 - Não morrerei mas ao contrário viverei, e cantarei as maravilhas do Senhor!<br>
                            <br>
                          5 - A pedra que os construtores rejeitaram tornou-se a pedra angular.<br><br>
                          6 - Foi o Senhor que operou estes prodígios, é maravilhoso para quem o contempla!<br></p>
                    </div>
                    <div class="col-md-12">
                      <div class="row afasta20">
                        <div class="col-md-6 col-6">

                          <a style="width:100%" class="btn btn-dark" href="https://www.cifraclub.com.br/catolicas/celebremos-nossa-pascoa/" target="_blank"><i class="fa fa-hashtag" aria-hidden="true"></i> Cifra</a>
                 
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