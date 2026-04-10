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
    <title>Guia do Novato - Portal da Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>


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
include_once("../../menu.php");

?>

<!-- menu -->
<div class="container-fluid" style="background-color:#2e1e11">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:15px;font-size:.9em;font-family: Exo 2, sans-serif;color:#fff !important">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#fff">Início</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#fff">Materiais</a></li>
                        <li class="breadcrumb-item"  aria-current="page">Guia do Novato</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>




<!-- ULTIMAS -->
<div class="container-fluid" style="background-color:#925f36;padding-top:40px;padding-bottom:45px">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-12">
            <h1 style="color:#fff"><i class="fa fa-map" aria-hidden="true"></i> O Guia do Recém-Chegado</h1>
          </div>
          <div class="col-md-12 afasta40">
            <!-- MODULOS -->
              <div class="row" id="primeiro" style="display:block">
                <div class="row">
                  <div class="col-md-12" style="border-top:solid 4px #c88c5c">
                    &nbsp;
                  </div>
                  <div class="col-md-12" style="padding-top:20px;padding-bottom:30px;">
                    <!-- CONTEUDO -->
                     <div class="row">
                      <div class="col-md-6">
                        <img src="/img/novatos/frei-consultando-mapa.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6" style="color:#fff">
                        <h3 style="color:#fff">1. Conte com a figura da Coordenação</h3>
                        <p class="afasta20" style="font-size:1.2em">O Coordenador da Pastoral da Música foi designado pela Paróquia para que você possa exercer o seu servir da melhor forma possível.</p>
                        <p class="afasta20" style="font-size:1.2em">Membros mais antigos / veteranos podem não ser a melhor fonte de orientação. Conte com seu coordenador tanto para buscar orientações objetivas quanto para relatar possíveis dificuldades.</p>
                        <p class="afasta20" style="font-size:1.2em">Além do mais, a Pastoral pode estar implementando melhorias e atualizações na forma dos membros prestarem seu servir. Quando você busca orientação junto a membros antigos pode estar correndo o risco de receber orientações defasadas.</p>
                        <h3 style="color:#fff" class="afasta20">2. Não deixe de conferir a área de 'Dúvidas mais comuns'!</h3>
                        <p class="afasta20" style="font-size:1.2em">Acredite! Tem muitas orientações fantásticas por lá! Vale super a pena passar por lá e depois retornar aqui. <a href="/#faq" target="_blank" style="color:#fff000;font-weight:900">CLIQUE AQUI</a> para abrir em uma nova aba. Esta tela permanecerá aberta para poder voltar aqui de forma mais fácil.</p>
                        <hr>
                        <div class="alert alert-light" role="alert">
                          <strong>Marcelo Bozi</strong><br>
                          <span style="font-size:.7em">COODENADOR DA PASTORAL DA MÚSICA - MATRIZ</span><br>
                          WhatsApp: (27) 99955-9079
                        </div>
                      </div>
                     </div>
                    <!-- CONTEUDO -->
                  </div>
                  <div class="col-md-12" style="text-align:right;padding-top:20px;border-top:solid 4px #c88c5c">
                    <button onClick="organiza(segundo)" class="btn btn-lg btn-warning">Próximo <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            <!-- MODULOS -->
           <!-- MODULOS -->
              <div class="row" id="segundo" style="display:none">
                <div class="row">
                  <div class="col-md-12" style="border-top:solid 4px #c88c5c">
                    &nbsp;
                  </div>
                  <div class="col-md-12" style="padding-top:20px;padding-bottom:30px;">
                    <!-- CONTEUDO -->
                     <div class="row">
                      <div class="col-md-6 col-12">
                        <img src="/img/novatos/usando-power-point.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6 col-12" style="color:#fff">
                        <h3 style="color:#fff">3. O Power Point será seu amigo!</h3>
                        <p class="afasta20" style="font-size:1.2em">Chamamos de "assembleia" as pessoas que estão presentes na celebração e que não estão trabalhando em algum ministério. <strong>Sabia que, às vezes, são necessários mais de 20 ministros para uma Missa acontecer?</strong> São ministros de Acolhida, Música, Liturgia, Eucaristia (etc).</p>
                        <p class="afasta20" style="font-size:1.2em">Mas vamos focar aqui na assembleia: um dos maiores indicativos de que seu trabalho na música está sendo feito com maestria, é a participação da assembleia. Quando eles cantam juntos!</p>
                        <p class="afasta20" style="font-size:1.2em"><span style="color:#fcff2e">Por isso, faz parte da equipe de música providenciar o acesso da assembleia às letras dos cânticos</span>. Fazemos isso passando os cânticos para slides de Power Point, que são projetados usando um notebook à sua disposição na Igreja, devidamente conectado a 02 projetores para a assembleia.</p>
                        <p class="afasta20" style="font-size:1.2em">Aqui mesmo no site, navegando pelo menu, indo na opção "Materiais" e depois "Modelos de slides" você encontra um modelo completo e atualizado para baixar. Mas se quiser fazer isso agora, <a style="color:#fcff2e" href="/arquivos/slides_basicos.pptx" target="_blank">clique aqui</a>.</p>
                       
                        
                        
                      </div>
                     </div>
                    <!-- CONTEUDO -->
                  </div>
                  <div class="col-md-6 col-6" style="padding-top:20px;border-top:solid 4px #c88c5c">
                    <button  onClick="organiza(primeiro)" class="btn btn-lg btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Anterior</button>
                  </div>
                  <div class="col-md-6 col-6" style="text-align:right;padding-top:20px;border-top:solid 4px #c88c5c">
                    <button  onClick="organiza(terceiro)" class="btn btn-lg btn-warning">Próximo <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            <!-- MODULOS -->
           <!-- MODULOS -->
              <div class="row" id="terceiro" style="display:none">
                <div class="row">
                  <div class="col-md-12" style="border-top:solid 4px #c88c5c">
                    &nbsp;
                  </div>
                  <div class="col-md-12" style="padding-top:20px;padding-bottom:30px;">
                    <!-- CONTEUDO -->
                     <div class="row">
                      <div class="col-md-6 col-12">
                        <img src="/img/novatos/ensaio.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6 col-12" style="color:#fff">
                        <h3 style="color:#fff">4. Ensaio, ensaio e ensaio!</h3>
                        <p class="afasta20" style="font-size:1.2em">Improvisos caem muito bem em shows. Mas não na Santa Missa! Faça uma seleção de cânticos adequada para o tempo litúrgico (tratamos disso nas <a href="/#faq" target="_blank" style="color:#fff000;font-weight:900">perguntas frequentes e respostas</a>) e repasse com sua equipe antes, combinando inclusive a execução de introduções, caso decidam usar.</p>
                        <p class="afasta20" style="font-size:1.2em">Muitas equipes combinam ensaiar na casa de um dos membros. Contudo, caso necessário, poderá ser cedido espaço da Matriz, como o auditório. Importante atentar-se que os funcionários da Matriz precisarão providenciar o fechamento do local às 21h.</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                          <strong>Por que não ensaiar no dia, minutos antes da Missa?</strong><br>
                          - Porque este é um momento importante de silêncio e contemplação para as pessoas que chegam mais cedo, para adoração no Santíssimo, ou reflexão, enquanto estão sentados nos bancos da nave da Igreja. O ensaio tira isso delas, pois acarreta ruído.
                        </div>
                        
                       
                      </div>
                     </div>
                    <!-- CONTEUDO -->
                  </div>
                  <div class="col-md-6 col-6" style="padding-top:20px;border-top:solid 4px #c88c5c">
                    <button onClick="organiza(segundo)" class="btn btn-lg btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Anterior</button>
                  </div>
                  <div class="col-md-6 col-6" style="text-align:right;padding-top:20px;border-top:solid 4px #c88c5c">
                    <button onClick="organiza(quarto)" class="btn btn-lg btn-warning">Próximo <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            <!-- MODULOS -->
             <!-- MODULOS -->
              <div class="row" id="quarto" style="display:none">
                <div class="row">
                  <div class="col-md-12" style="border-top:solid 4px #c88c5c">
                    &nbsp;
                  </div>
                  <div class="col-md-12" style="padding-top:20px;padding-bottom:30px;">
                    <!-- CONTEUDO -->
                     <div class="row">
                      <div class="col-md-6 col-12">
                        <img src="/img/novatos/sonoplasta.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6 col-12" style="color:#fff">
                        <h3 style="color:#fff">5. Chegue cedo para preparo do som.</h3>
                        <p class="afasta20" style="font-size:1.2em">Haverá uma pessoa disponível para lhe auxiliar a plugar e regular os canais de som nos quais instrumentos musicais e microfones funcionarão.</p>
                        <p class="afasta20" style="font-size:1.2em">Mas isso leva algum tempo. Recomendamos chegar pelo menos 1 hora antes do início da Santa Missa.</p>
                        <h3 style="color:#fff" class="afasta20">6. Aproveite e deixe os slides prontos para uso!</h3>
                        <ol style="font-size:1.2em;margin-top:20px">
                          <li><strong>Os slides do roteiro musical</strong>: falamos dele nas etapas anteriores;</li>
                          <li><strong>Arquivo de slides da Oração Eucarística da ocasião</strong>: um dos arquivos salvos na pasta "Orações Eucarísticas", na área de trabalho (desktop) do Computador de uso dos músicos. Falaremos deles a seguir:</li>
                        </ol>            
                      </div>
                     </div>
                    <!-- CONTEUDO -->
                  </div>
                  <div class="col-md-6 col-6" style="padding-top:20px;border-top:solid 4px #c88c5c">
                    <button  onClick="organiza(terceiro)" class="btn btn-lg btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Anterior</button>
                  </div>
                  <div class="col-md-6 col-6" style="text-align:right;padding-top:20px;border-top:solid 4px #c88c5c">
                    <button onClick="organiza(quinto)" class="btn btn-lg btn-warning">Próximo <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            <!-- MODULOS -->                   
            <!-- MODULOS -->
              <div class="row" id="quinto" style="display:none">
                <div class="row">
                  <div class="col-md-12" style="border-top:solid 4px #c88c5c">
                    &nbsp;
                  </div>
                  <div class="col-md-12" style="padding-top:20px;padding-bottom:30px;">
                    <!-- CONTEUDO -->
                     <div class="row">
                      <div class="col-md-6 col-12">
                        <img src="/img/novatos/oracao.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6 col-12" style="color:#fff">
                        <h3 style="color:#fff">7. A Oração Eucarística: também responsabilidade da Música.</h3>
                       
                        <h4 style="color:#fff" class="afasta20">Geralmente, este é o Roteiro de uma Missa em tempo comum que demandam cânticos:</h4>
                        <ol style="font-size:1.2em;margin-top:20px">
                          <li>Entrada;</li>
                          <li>Perdão (Ato Penitencial);</li>
                          <li>Glória;</li>
                          <li>Salmo;</li>
                          <li>Aclamação Ao Evangelho;</li>
                          <li>Ofertório;</li>
                          <li>Santo;</li>
                          <li>Cordeiro;</li>
                          <li>Comunhão;</li>
                          <li>Pós-Comunhão;</li>
                          <li>Final</li>
                        </ol>  
                        <p class="afasta20" style="font-size:1.2em">Entre os momentos 7 e 8 ocorrerá a Consagração do Pão e do Vinho. Este momento obedece a fórmulas rígidas de ritos, onde o celebrante (sacerdote) verbaliza passagens da Oração Eucarística, necessitando que a Assembleia diga a sua parte no momento exato. <strong>Na nossa comunidade nós auxiliamos a Assembleia, projetando - via slides - as suas falas.</strong></p>      
                        <hr>
                            <div class="alert alert-warning" role="alert">
                              Você encontrará uma pasta "Orações Litúrgicas" salva na área de trabalho do computador. Abrindo verá arquivos já prontos para uso, nomeados como "Oração Eucarística I", "Oração Eucarística II", etc. <strong>Chegue cedo, procure o Sacerdote e pergunte-o sobre 'Qual será a Oração Eucarística' da Missa.</strong> Já deixe o arquivo aberto para ser projetado, assim que for cantado o momento "7" do roteiro acima.
                          </div>
                          <p class="afasta20" style="font-size:1.2em">Para auxiliar você a saber qual frase projetar, acesse no seu celular, aqui neste site, as Orações Eucarísticas em formato de 'Linha do tempo', que mostram separadas as falas do celebrante e da assembleia. No menu, vá em "Materiais" e depois em "Orações Eucarísticas". As mais usadas estão no tópico "Orações Eucarísticas (I, II, III, IV, V) na terceira edição".</p>      
                      </div>
                     </div>
                    <!-- CONTEUDO -->
                  </div>
                  <div class="col-md-6 col-6" style="padding-top:20px;border-top:solid 4px #c88c5c">
                    <button onClick="organiza(quarto)" class="btn btn-lg btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Anterior</button>
                  </div>
                  <div class="col-md-6 col-6" style="text-align:right;padding-top:20px;border-top:solid 4px #c88c5c">
                    <button  onClick="organiza(sexto)" class="btn btn-lg btn-warning">Próximo <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            <!-- MODULOS -->                
            <!-- MODULOS -->
              <div class="row" id="sexto" style="display:none">
                <div class="row">
                  <div class="col-md-12" style="border-top:solid 4px #c88c5c">
                    &nbsp;
                  </div>
                  <div class="col-md-12" style="padding-top:20px;padding-bottom:30px;">
                    <!-- CONTEUDO -->
                     <div class="row">
                      <div class="col-md-6 col-12">
                        <img src="/img/novatos/formula.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6 col-12" style="color:#fff">
                        <h3 style="color:#fff">8. Onde os músicos mais erram (e você não irá!).</h3>
                        <p class="afasta20" style="font-size:1.2em">Há cânticos de 04 momentos que, apesar de existirem em diferentes melodias, seguem uma 'fórmula' de palavras que precisam ser absolutamente respeitadas.</p>
                        
                        <ol style="font-size:1.2em;margin-top:20px">
                          <li>Perdão (Ato Penitencial);</li>
                          <li>Glória;</li>
                          <li>Santo;</li>
                          <li>Cordeiro.</li>
                        </ol>            
                        <p class="afasta20" style="font-size:1.2em">Cada palavra exerce uma função, e precisam estar em uma sequência. Tal qual um preparo de medicamento. Por isso, não vale a pena correr riscos e usar a criatividade nesses momentos pois o Sacerdote poderá até mesmo interromper a música, se notar que a 'fórmula' foi descumprida.</p>
                        <div class="alert alert-warning afasta20" role="alert">
                            Aqui neste site você encontrará sugestões de cânticos para Perdão, Glória, Santo e Cordeiro devidamente aprovados, e revisados pela nossa Subcoordenação de Curadoria Litúrgica. Encontre cifras, vídeos para ouvir a melodia.
                            <hr>
                            <strong>Localize em:</strong> no menu, vá para "Hinário" e depois "Partes fixas".
                        </div>
                      </div>
                     </div>
                    <!-- CONTEUDO -->
                  </div>
                
                  <div class="col-md-12 col-12" style="text-align:right;padding-top:20px;border-top:solid 4px #c88c5c">
                    <button onClick="organiza(setimo)" class="btn btn-lg btn-warning">Finalizar</button>
                  </div>
                </div>
              </div>
            <!-- MODULOS -->    
            <!-- MODULOS -->
              <div class="row" id="setimo" style="display:none">
                <div class="row">
                  <div class="col-md-12" style="border-top:solid 4px #c88c5c">
                    &nbsp;
                  </div>
                  <div class="col-md-12" style="padding-top:20px;padding-bottom:30px;">
                    <!-- CONTEUDO -->
                     <div class="row">
                        <div class="col-md-12" style="color:#fff">
                          <h3 style="color:#fff">Obrigado!</h3>
                          <p class="afasta30" style="color:#fff;font-size:1.2em">Estas orientações farão toda a diferença para a qualidade do seu servir na Pastoral da Música. Mas, mesmo assim, não deixe de contar com o apoio, facilitação e orientação da Coordenação da Pastoral. <strong>Somos muito felizes de tê-lo(a) aqui conosco. Cristo abençoe enermemente o seu serviço.</strong></p>
                        </div>
                     </div>
                    <!-- CONTEUDO -->
                  </div>
                
  
                </div>
              </div>
            <!-- MODULOS -->    
          </div>
        </div>
      </div>
    </div>
</div>
<!-- ULTIMAS -->

    <?php
    include_once("../../footer.php");
    ?>
<script>
const primeiro = document.getElementById("primeiro");
const segundo  = document.getElementById("segundo");
const terceiro = document.getElementById("terceiro");
const quarto   = document.getElementById("quarto");
const quinto   = document.getElementById("quinto");
const sexto    = document.getElementById("sexto");
const setimo   = document.getElementById("setimo");

function organiza(qual) {

  // Esconde todos os steps
  primeiro.style.display = "none";
  segundo.style.display  = "none";
  terceiro.style.display = "none";
  quarto.style.display   = "none";
  quinto.style.display   = "none";
  sexto.style.display    = "none";
  setimo.style.display   = "none";

  // Exibe o step selecionado
  qual.style.display = "block";

  // Captura o nome do step de forma confiável
  var stepViewed = qual.id;

  window.dataLayer = window.dataLayer || [];

  // Limpa estado anterior
  dataLayer.push({ tutorial: null });

  // Envia evento correto
  dataLayer.push({
    event: "tutorial_step_view",
    tutorial: {
      name: "O Guia do Recém-Chegado",
      step_viewed: stepViewed
    }
  });
}
</script>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>