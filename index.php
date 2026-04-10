<?php
include_once("config.php");
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
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal da Pastoral da Música - Comunidade São Francisco de Assis - Itapuã</title>

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
        <script>
window.dataLayer = window.dataLayer || [];
    dataLayer.push({
    event: "tutorial_step_view",
    tutorial: {
      name: "O Guia do Recém-Chegado",
      step_viewed: "primeiro"
    }
  });
    </script>
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
include_once("menu.php");

?>

<!-- menu -->

</header>

<div class="container-fluid" style="background-color:#996e10;padding-top:8px;padding-bottom:8px; color:#fff;font-weight:500">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
        <div class="row">
          <div class="col-md-8 col-8">Venha ser um Ministro da Música! Estamos com inscrições abertas! </div>
          <div class="col-md-4 col-4 afastamobile" style="text-align:right"><a class="btn btn-sm btn-light" href="/chamados/">Cadastre-se!</a></div>
        </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-center" style="background-color:#000;padding-top:25px;padding-bottom:25px">
    <div class="col-md-6 col-12">
      <div class="ratio ratio-16x9">
        <iframe 
          src="https://www.youtube.com/embed/E065yVtjjFc?rel=0"
          title="YouTube video"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</div>


<!--
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:80px">
            <div class="col-md-10 col-12">
                <div class="row">
                  <div class="col-md-6 col-12" id="welcome">
                    <h1 class="exo-2-four light-marrom sfcenter">Alegremo-nos no Senhor</h1>
                <p style="font-size:1.3em">Bem-vindo ao Portal da Pastoral da Música, da Paróquia São Francisco de Assis, Itapuã - Vila Velha! Aqui você encontrará vários insumos e orientações para exercer o seu servir.</p>
                <span class="light-marrom" style="font-size:4em"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span>
                  </div>
                  <div class="col-md-6 col-12">
                    <img src="img/home2.jpg" alt="" class="img-fluid rounded">
                  </div>
                </div>
            </div>
        </div>
    </div>
-->

<!-- utilidades via atalhos -->

<div class="container-fluid" style="background-color:#cfcfcf; padding-top:50px;padding-bottom:50px;min-height:450px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12" style="text-align:center">
          <h2 class="exo-2-four" style="color:#000"><i class="fa fa-bolt" aria-hidden="true"></i> Acesso rápido</h2>
        </div>
      </div>
      <div class="row" style="margin-top:40px">
        <div class="col-md-12">
<!-- cards -->
          <div class="row justify-content-center">
            <div class="col-md-6 col-11">
              <div class="row">

                <div class="col-md-3 col-3">
                  <a href="/escala-do-mes/" title="Escala do mês">
                  <img src="/img/2026/fevereiro/ico-agenda.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/ultimas/" title="Últimas atualizações">
                  <img src="/img/2026/fevereiro/ico-ultimas.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/materiais/oracoes-eucaristicas/" title="Orações Eucarísticas">
                  <img src="/img/2026/fevereiro/ico-oracoes.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/materiais/modelos-de-slides/" title="Modelos de slides">
                  <img src="/img/2026/fevereiro/ico-slides.png" class="img-fluid" alt=""></a>
                </div>

              </div>


                <div class="row afasta30">

                <div class="col-md-3 col-3">
                  <a href="/hinario/partes-fixas/melodias-perdao/" title="Hinos de Perdão">
                  <img src="/img/2026/fevereiro/ico-perdao.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/hinario/partes-fixas/melodias-gloria/" title="Hinos de Glória">
                  <img src="/img/2026/fevereiro/ico-gloria.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/hinario/partes-fixas/melodias-santo/" title="Santo">
                  <img src="/img/2026/fevereiro/ico-santo.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/hinario/partes-fixas/melodias-cordeiro/">
                  <img src="/img/2026/fevereiro/ico-cordeiro.png" class="img-fluid" alt=""></a>
                </div>
                
              </div>


                <div class="row afasta30">

                <div class="col-md-3 col-3">
                  <a href="/quem-somos/coral-sao-francisco/" title="Coral São Francisco">
                  <img src="/img/2026/fevereiro/ico-coral.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/#faq" title="Perguntas Frequentes e Respostas">
                  <img src="/img/2026/fevereiro/ico-duvidas.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/chamados/" title="Faça parte - cadastre-se">
                  <img src="/img/2026/fevereiro/ico-cadastro.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-md-3 col-3">
                  <a href="/cantus/" title="Cantus Blog">
                  <img src="/img/2026/fevereiro/ico-cantus.png" class="img-fluid" alt=""></a>
                </div>
                
              </div>


            </div>
          </div>
<!-- cards -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- 

<div class="container-fluid" style="background-color:#cfcfcf;padding-top:50px;padding-bottom:50px" id="escala">
 <div class="row justify-content-center">
  <div class="col-md-10 col-12">

  <div class="row">
    <div class="col-md-12" style="padding-top:25px;padding-bottom:55px;text-align:center">
      <h2 class="subts"><i class="fa-solid fa-calendar" aria-hidden="true"></i> ESPAÇOS AINDA ABERTOS</h2>
    </div>
  </div>

 <div class="row">
    <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-1 col-1 semana">SEG</div>
          <div class="col-md-1 col-1 semana">TER</div>
          <div class="col-md-1 col-1 semana">QUA</div>
          <div class="col-md-1 col-1 semana">QUI</div>
          <div class="col-md-1 col-1 semana">SEX</div>
          <div class="col-md-1 col-1 semana" style="color:#b30000 !important">S</div>
          <div class="col-md-1 col-1 semana" style="color:#b30000 !important">D</div>
        </div>
    </div>
  </div>

 <div class="row">
    <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-1 col-1 util opaco"></div>
          <div class="col-md-1 col-1 util opaco"></div>
          <div class="col-md-1 col-1 util opaco"></div>
          <div class="col-md-1 col-1 util opaco"></div>
          <div class="col-md-1 col-1 util opaco"></div>
          <div class="col-md-1 col-1 fds opaco"></div>
          <div class="col-md-1 col-1 fds">1</div>
        </div>
    </div>
  </div>


   <div class="row" style="margin-top:4px">
    <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-1 col-1 util">2</div>
          <div class="col-md-1 col-1 util">3</div>
          <div class="col-md-1 col-1 util">4</div>
          <div class="col-md-1 col-1 util">5</div>
          <div class="col-md-1 col-1 util">6</div>
          <div class="col-md-1 col-1 fds">7</div>
          <div class="col-md-1 col-1 fds">8</div>
        </div>
    </div>
  </div>



  <div class="row" style="margin-top:4px">
    <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-1 col-1 util">9</div>
          <div class="col-md-1 col-1 util">10</div>
          <div class="col-md-1 col-1 util">11</div>
          <div class="col-md-1 col-1 util">12</div>
          <div class="col-md-1 col-1 util">13</div>
          <div class="col-md-1 col-1 fds">14</div>
          <div class="col-md-1 col-1 domingo">15</div>
        </div>
    </div>
  </div>



  <div class="row" style="margin-top:4px">
    <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-1 col-1 util">16</div>
          <div class="col-md-1 col-1 util">17</div>
          <div class="col-md-1 col-1 util">18</div>
          <div class="col-md-1 col-1 util">19</div>
          <div class="col-md-1 col-1 util">20</div>
          <div class="col-md-1 col-1 fds">21</div>
          <div class="col-md-1 col-1 fds">22</div>
        </div>
    </div>
  </div>


    <div class="row" style="margin-top:4px">
    <div class="col-md-12">
        <div class="row justify-content-center">
          <div class="col-md-1 col-1 util">23</div>
          <div class="col-md-1 col-1 util">24</div>
          <div class="col-md-1 col-1 util util">25</div>
          <div class="col-md-1 col-1 util util">26</div>
          <div class="col-md-1 col-1 util util">27</div>
          <div class="col-md-1 col-1 fds fds">28</div>
          <div class="col-md-1 col-1 fds opaco"></div>
        </div>
    </div>
  </div>


  </div>
 </div>

</div>

 solucao calendario -->


<!-- ano jubilar -->

<div class="container-fluid" style="background-color:#000; padding-top:20px; padding-bottom:20px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <a href="/cantus/o-jubileu-franciscano-e-a-musica/">
      <img src="/img/2026/fevereiro/home-ano-jubilar.jpg" class="img-fluid" alt="Orientações Ano Jubilar"></a>
    </div>
  </div>
</div>

<!-- ano jubilar -->

<div class="container-fluid" id="faq" style="padding-top:45px;padding-bottom:45px">
  <div class="row justify-content-center">
    <div class="col-md-10">

      <div class="row">
        <div class="col-md-12">
              <h2><i class="fa fa-question-circle" aria-hidden="true"></i> Perguntas Frequentes e Respostas <?php echo "DANDAN";?></h2>
        </div>
      </div>

            <div class="row">
              <div class="col-md-12 afasta20">
<!--accordeon  -->
                  
<div class="accordion accordion-flush" id="accordionFlushExample">


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       Quem pode participar?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Cantores(as) e instrumentistas com experiência. Pessoas com vontade de aprender e colocar seus dons a serviço da Igreja.</div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Como participar?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Se deseja fazer parte dessa missão e contribuir com seus talentos, entre em contato conosco! Clique no menu, na opção "Contato".</div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseJhon" aria-expanded="false" aria-controls="flush-collapseJhon">
        Como participar do Coral?
      </button>
    </h2>
    <div id="flush-collapseJhon" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        
        Em 2025 a Paróquia / Comunidade S. Francisco de Assis - retomou as atividades do Coral. De lá para cá foram pelo menos 04 apresentações em Missas solenes. Sob a regência do Maestro Luciano Miziara, o grupo se reúne para ensaio comumente às quartas e quintas-feiras, no auditório da Matriz, ou na nave da Igreja Sagrado Coração de Jesus, em Itapuã. <strong>O Coral São Francisco</strong> ainda está aberto para receber novos membros. Caso tenha interesse, entre em contato conosco pelo menu "Contato".
    </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Vou precisar comparecer todo domingo?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">De forma alguma! Iremos planejar uma escala de trabalho de forma que você possa compatibilizar sua vida e sua rotina no servir da Pastoral.</div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseQuatro" aria-expanded="false" aria-controls="flush-collapseQuatro">
        Eu viajo muito. Posso participar ainda assim?
      </button>
    </h2>
    <div id="flush-collapseQuatro" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Se você precisar faltar e nos avisar antes, não há problema. Você terá também acesso aos demais membros da Pastoral, de forma que possa acionar outra equipe que possa substituí-lo no dia, ou mesmo, revezar.</div>
    </div>
  </div>



    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCinco" aria-expanded="false" aria-controls="flush-collapseCinco">
        Não sei ler partitura. Isso atrapalha?
      </button>
    </h2>
    <div id="flush-collapseCinco" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">A maioria dos instrumentistas usa cifras. E os cantores raramente usam partitura. Para perfeita execução das músicas o importante mesmo é ensaio prévio.</div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeis" aria-expanded="false" aria-controls="flush-collapseSeis">
        Tenho interesse no Coral. Mas não sei cantar. Mesmo assim posso participar?
      </button>
    </h2>
    <div id="flush-collapseSeis" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Sim! Aqui ninguém nasce pronto. O coral é justamente um espaço de aprendizado. Durante os ensaios, trabalhamos noções básicas de canto e técnica vocal. Várias pessoas no grupo nunca tiveram experiência musical antes — o que todos têm em comum é o desejo sincero de servir e amar mais a Deus por meio do canto.</div>
    </div>
  </div>



    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSete" aria-expanded="false" aria-controls="flush-collapseSete">
        Sou instrumentista. Preciso levar meu próprio instrumento?
      </button>
    </h2>
    <div id="flush-collapseSete" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Depende. Nossa Pastoral já conta com alguns instrumentos próprios, e você poderá usá-los. Mas a maioria leva seus próprios instrumentos pois estão habituados com ele e estão afinados ou ajustados de acordo com o perfil pessoal do utilizador. <strong>Mas é necessário que seja plugável na rede de som</strong> (não pode ser acústico).
      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOito" aria-expanded="false" aria-controls="flush-collapseOito">
        Preciso eu mesmo conectar e ajustar os instrumentos?
      </button>
    </h2>
    <div id="flush-collapseOito" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Não! Nós dispomos de equipe de sonoplastas para te assistir antes, durante e após o seu serviço.</div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNove" aria-expanded="false" aria-controls="flush-collapseNove">
        Sempre toquei em banda. Nunca em Missas. Posso tocar mesmo assim?
      </button>
    </h2>
    <div id="flush-collapseNove" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Não se preocupe! Nós iremos te dar as orientações essenciais para que possa servir na Missa. <strong>Faça nossas capacitações "expressas" </strong>aqui mesmo no site da Pastoral.
        <hr>
        <a href="/formacoes/" class="btn btn-success">Acesse agora mesmo</a>
    </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDez" aria-expanded="false" aria-controls="flush-collapseDez">
        Quais cânticos podem ser cantados na Santa Missa?
      </button>
    </h2>
    <div id="flush-collapseDez" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <h5>❓ Quais cânticos podem ser cantados na Santa Missa?</h5>

<p>
Na <strong>Santa Missa</strong>, nem todo canto religioso é automaticamente apropriado.
A música na liturgia <strong>não é um momento de apresentação</strong>, mas parte integrante
da própria oração da Igreja. Por isso, os cânticos devem servir ao
<strong>rito</strong>, ao <strong>tempo litúrgico</strong> e ao <strong>texto celebrado</strong>,
conforme orienta o <strong>Missal Romano (edição vigente)</strong>.
</p>

<p>
A seguir, explicamos de forma simples quais cânticos podem (e devem) ser cantados,
especialmente para quem nunca atuou como músico em missas.
</p>

<hr>

<h5>🎶 Principais momentos da Missa e seus cânticos</h5>

<h6>1. Canto de Entrada</h6>
<ul>
    <li>Acompanha a procissão inicial.</li>
    <li>Introduz a assembleia no mistério celebrado.</li>
    <li>Deve estar ligado ao <strong>tempo litúrgico</strong> ou à <strong>festa do dia</strong>.</li>
    <li>Evite músicas genéricas sem relação com a celebração.</li>
</ul>

<h6>2. Ato Penitencial (quando cantado)</h6>
<ul>
    <li>Possui 3 fórmulas. Aquele que for utilizado deve estar em comum acordo entre o celebrante e a equipe de canto.</li>

<p>Não deixe de conhecer as opções que já foram revisadas pela nossa Curadoria Litúrgica. No menu, vá em 'Hinário' e depois em 'Partes fixas'.</p>
<h6>3. Hino de Louvor (Glória)</h6>
<ul>
    <li>Cantado em domingos (exceto Advento e Quaresma) e solenidades.</li>
    <li>O texto do Glória <strong>não pode ser alterado</strong>.</li>
    <li>Não pode ser substituído por outro canto de louvor.</li>
</ul>

<h6>4. Salmo Responsorial</h6>
<ul>
    <li>Parte essencial da <strong>Liturgia da Palavra</strong>.</li>
    <li>Deve ser o <strong>salmo do dia</strong>, conforme o Lecionário.</li>
    <li>Não pode ser substituído por outro canto.</li>
</ul>

<h6>5. Aclamação ao Evangelho</h6>
<ul>
    <li>Normalmente o <strong>Aleluia</strong> (exceto na Quaresma).</li>
    <li>Prepara a assembleia para a escuta do Evangelho.</li>
</ul>

<h6>6. Canto de Ofertório</h6>
<ul>
    <li>Acompanha a apresentação das oferendas.</li>
    <li>Favorece o clima de entrega e oração.</li>
    <li>Não é obrigatório, mas deve ser sóbrio quando cantado.</li>
</ul>

<h6>7. Santo</h6>
<ul>
    <li>Parte da <strong>Oração Eucarística</strong>.</li>
    <li>Texto fixo conforme o Missal Romano.</li>
    <li><strong>Nunca pode ser substituído</strong>.</li>
</ul>

<h6>8. Cordeiro de Deus</h6>
<ul>
    <li>Acompanha a fração do pão.</li>
    <li>Texto litúrgico obrigatório, podendo ser repetido conforme o rito.</li>
</ul>

<h6>9. Canto de Comunhão</h6>
<ul>
    <li>Expressa a união com Cristo e com a Igreja.</li>
    <li>Deve estar ligado à Eucaristia e ao mistério celebrado.</li>
    <li>Evite músicas excessivamente individualistas.</li>
</ul>

<h6>10. Canto Final (ou de envio)</h6>
<ul>
    <li>Não faz parte estrita do rito.</li>
    <li>Ajuda a concluir a celebração e enviar a assembleia à missão.</li>
</ul>

<hr>

<h5>⚠️ O que <em>não</em> deve ser cantado na Missa</h5>
<ul>
    <li>Músicas de show, encontros ou retiros sem caráter litúrgico.</li>
    <li>Canções com teologia imprecisa.</li>
    <li>Músicas que substituem textos fixos da Missa.</li>
    <li>Cânticos centrados apenas no “eu”.</li>
</ul>

<hr>

<p>
<strong>Em resumo:</strong> na Missa, não escolhemos músicas apenas porque são bonitas ou emocionantes,
mas porque <strong>servem à liturgia</strong>.
</p>

<p>
<em>O canto deve estar a serviço do rito — e não o rito a serviço do canto.</em>
</p>

<p class="mt-3">
<strong>Nota de precisão:</strong> este conteúdo está alinhado ao
<strong>Missal Romano (edição vigente em português)</strong> e às orientações litúrgicas
comumente adotadas no Brasil. Para exceções ou celebrações específicas,
consulte sempre a coordenação da Pastoral da Música ou o pároco.
</p>

    </div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnze" aria-expanded="false" aria-controls="flush-collapseOnze">
        Existe uma programação ou calendário para orientar quanto ao tema da Missa?
      </button>
    </h2>
    <div id="flush-collapseOnze" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Sim! As equipes se valem de calendários litúrgicos que orientam sobre o tema de cada Missa no Ano Litúrgico. Vale a pena ter um para consulta. Mas, na falta de um, há versões online <a href="https://gcatholic.org/calendar/2026/BR-pt" target="_blank">como esta aqui</a>. Se ainda assim estiver inseguro, envie o seu roteiro para a Coordenação da Pastoral via WhatsApp que a Coordenação irá apreciar e dar um retorno.
        <strong>Lembre-se: você não está sozinho(a) nesta missão! Você faz parte de um grupo.</strong>
       
    </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDoze" aria-expanded="false" aria-controls="flush-collapseDoze">
        Como devo me vestir durante o serviço?
      </button>
    </h2>
    <div id="flush-collapseDoze" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Um membro da Pastoral da Música é um <strong>MINISTRO DA MÚSICA</strong>. Ele fortalece e conduz a conexão da Assembleia com a liturgia e com o Santo Mistério. Portanto, apesar de não haver uma regra, você deverá se apresentar de forma compatível. Use roupas sóbrias, neutras (branco; preto; cinza) e discretas.
        
    </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed faq" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTreze" aria-expanded="false" aria-controls="flush-collapseTreze">
        Existem cânticos sugeridos, que minimizem possibilidades de escolhas erradas?
      </button>
    </h2>
    <div id="flush-collapseTreze" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Sim. Estamos construindo esta seção do site (este site é muito recente, de fevereiro de 2026). Quando disponível iremos divulgar no Grupo de WhatsApp dos músicos.
    </div>
    </div>
  </div>  


</div>



<!--accordeon  -->
              </div>
          </div>

    </div>
  </div>
</div>

<div class="container-fluid" style="background-color:#000;padding-top:40px;padding-bottom:45px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-11">
        <div class="row">
          <div class="col-md-4 col-12" style="text-align:center">
            <img src="/img/2026/fevereiro/cantus-pic.png" alt="">
          </div>
          <div class="col-md-8 col-12" style="text-align:center">
            <h2 class="afasta20">Acesse o CANTUS</h2>
            <p class="afasta20" style="font-size:1.2em;color:#fff">
              O SER que inspira nosso FAZER. Nossa central de orientações práticas para o exercício da Música nos contextos franciscano e ministerial.
            </p>
            <hr>
            <a href="/cantus/" class="btn btn-lg btn-light">Clique e Acesse <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
    </div>
  </div>
</div>


<div class="container-fluid" style="background-color:#fff;padding-top:40px;padding-bottom:45px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-11">
        <div class="row">
          <div class="col-md-12 col-12">
            <img src="/img/2026/fevereiro/coral-sao-francisco-de-assis.jpg" class="img-fluid" alt="Coral São Francisco">
          </div>
          <div class="col-md-12 col-12" style="text-align:center">
            <h2 class="afasta20">Nova Formação: Coral São Francisco</h2>
            <p class="afasta20" style="font-size:1.2em;color:#000">
              Iniciamos em 2025 com "gás total". Conheça e faça parte.
            </p>
            <hr>
            <a href="/quem-somos/coral-sao-francisco/" class="btn btn-lg btn-dark">Saiba mais <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
    </div>
  </div>
</div>

    <?php
    include_once("footer.php");
    ?>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>