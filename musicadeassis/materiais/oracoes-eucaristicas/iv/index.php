<?php
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
    <title>Orações Eucarísticas - Portal da Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>


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
                        <li class="breadcrumb-item"><a href="#" style="color:#7e5834">Materiais</a></li>
                        <li class="breadcrumb-item"><a href="/materiais/oracoes-eucaristicas/" style="color:#7e5834">Orações Eucarísticas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Oração Eucarística I</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>
<!-- ULTIMAS -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-11" style="padding-top:40px;padding-bottom:10px">
            <div class="row">
              <div class="col-md-12">
                <h1><i class="fa fa-book" aria-hidden="true"></i> Oração Eucarística I</h1>
                <h5 style="color:#000">Formato 'Linha do Tempo' para facilitar o acompanhamento</h5>
              </div>
              <div class="col-md-12">
                Legenda:
              </div>
              <div class="col-md-12 afasta20">
                  <div class="alert alert-dark" role="alert">
                    <i class="fa fa-user-circle" aria-hidden="true"></i> Celebrante  |  <i class="fa fa-users" aria-hidden="true"></i> Assembleia
                </div>
              </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-11" style="padding-top:40px;padding-bottom:10px">
<!-- TIMELINE -->
<section style="background-color: #F0F2F5;">
  <div class="container py-5">
    <div class="main-timeline">

      <div class="timeline left">
        <div class="card">
          <div class="card-body p-4 celebrante">
            <p class="mb-0"><i class="fa fa-user-circle" aria-hidden="true"></i> O Senhor esteja convosco.</p>
          </div>
        </div>
      </div>

      <div class="timeline right">
        <div class="card">
          <div class="card-body p-4 assembleia">
            <p class="mb-0"><i class="fa fa-users" aria-hidden="true"></i> Ele está no meio de nós.</p>
          </div>
        </div>
      </div>

      <div class="timeline left">
        <div class="card">
          <div class="card-body p-4 celebrante">
            <p class="mb-0"><i class="fa fa-user-circle" aria-hidden="true"></i> Corações ao Alto!</p>
          </div>
        </div>
      </div>

      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> Nosso Coração está em Deus.
            </p>
          </div></div></div>

      <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Demos graças ao Senhor, nosso Deus.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> É nosso dever e nossa salvação.
            </p>
          </div></div></div>


                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <span style="font-size:.8em;font-weight:700">Segue-se, conforme as rubricas, o Prefácio, com a conclusão: Santo, Santo, Santo...</span><br>
              <i class="fa fa-user-circle" aria-hidden="true"></i> Pai de misericórdia, a quem sobem nossos louvores, suplicantes, vos rogamos e pedimos por Jesus Cristo, vosso Filho e Senhor nosso, que aceiteis e abençoeis✝estes dons, estas oferendas, este sacrifício puro e santo, que oferecemos, antes de tudo, pela vossa Igreja santa e católica: concedei-lhe paz e proteção, unindo-a num só corpo e governando-a por toda a terra, em comunhão com vosso servo o Papa N., o nosso Bispo N., e todos os que guardam a fé católica que receberam dos Apóstolos.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> Abençoai nossa oferenda, ó Senhor!
            </p>
          </div></div></div>



                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Lembrai-vos, ó Pai, dos vossos filhos e filhas N. N. e de todos os que circundam este altar, dos quais conheceis a fé e a dedicação ao vosso serviço. Por eles nós vos oferecemos e também eles vos oferecem este sacrifício de louvor por si e por todos os seus, e elevam a vós as suas preces, Deus eterno, vivo e verdadeiro, para alcançar o perdão de suas faltas, a segurança em suas vidas e a salvação que esperam.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> Lembrai-vos, ó Pai, dos vossos filhos!
            </p>
          </div></div></div>




                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Missa com Batismo?
</button>
     <br> <br>
              <i class="fa fa-user-circle" aria-hidden="true"></i> Em comunhão com toda a Igreja, celebramos em primeiro lugar a memória da Mãe de nosso Deus e Senhor Jesus Cristo, a gloriosa sempre Virgem Maria, * a de seu esposo São José, e também a dos Santos Apóstolos e Mártires: Pedro e Paulo, André, Tiago e João, Tomé, Tiago e Filipe, Bartolomeu e Mateus, Simão e Tadeu, Lino, Cleto, Clemente, Sisto, Cornélio e Cipriano, Lourenço e Crisógono, João e Paulo, Cosme e Damião) e a de todos os vossos Santos. Por seus méritos e preces concedei-nos sem cessar a vossa proteção.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> Em comunhão com vossos Santos vos louvamos!
            </p>
          </div></div></div>




                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#comunicanteModal">
  Comunicante próprio
</button>
     <br> <br>
     <i class="fa fa-user-circle" aria-hidden="true"></i> Aceitai, ó Pai, com bondade, a oblação dos vossos servos e de toda a vossa família; dai-nos sempre a vossa paz, livrai-nos da condenação eterna e acolhei-nos entre os vossos eleitos. 
     <br><br>
     <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ouModal">
  Ou...
</button>
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
             <i class="fa fa-users" aria-hidden="true"></i> Enviai o Vosso Espirito Santo!
            </p>
          </div></div></div>




            <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Na véspera de sua paixão, ele tomou o pão em suas santas e veneráveis mãos, elevou os olhos ao céu, a vós, ó Pai todo-poderoso, pronunciou a bênção de ação de graças, partiu o pão e o deu a seus discípulos, dizendo:
              <br><br>
              TOMAI, TODOS, E COMEI:
              ISTO É O MEU CORPO,
              QUE SERÁ ENTREGUE POR VÓS.
              <br><br>
              Do mesmo modo, no fim da Ceia, ele tomou este precioso cálice em suas santas e veneráveis mãos, pronunciou novamente a bênção de ação de graças e o deu a seus discípulos, dizendo:
              <br><br>
              TOMAI, TODOS, E BEBEI:
              ESTE É O CÁLICE DO MEU SANGUE,
              O SANGUE DA NOVA E ETERNA ALIANÇA,
              QUE SERÁ DERRAMADO POR VÓS E POR TODOS
              PARA REMISSÃO DOS PECADOS.
              FAZEI ISTO EM MEMÓRIA DE MIM.
              <br><br>
              Mistério da fé!
            </p>
          </div></div></div>
           <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> Anunciamos, Senhor, a vossa morte e proclamamos a vossa ressurreição. Vinde, Senhor Jesus!
              <br><br>
              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ouPovoModal">
  Ou...
</button>
            </p>
          </div></div></div>




                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Celebrando, pois, a memória da bem-aventurada paixão do vosso Filho, da sua ressurreição dentre os mortos e gloriosa ascensão aos céus, nós, vossos servos, e também vosso povo santo, vos oferecemos, ó Pai, dentre os bens que nos destes, o sacrifício puro, santo e imaculado, Pão santo da vida eterna e Cálice da perpétua salvação. Recebei, ó Pai, com olhar benigno, esta oferta, como recebestes os dons do justo Abel, o sacrifício de nosso patriarca Abraão e a oblação pura e santa do sumo sacerdote Melquisedeque.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> Aceitai, ó Senhor, a nossa oferta!
            </p>
          </div></div></div>





                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Suplicantes, vos pedimos, ó Deus onipotente, que esta nossa oferenda seja levada à vossa presença, no altar do céu, pelas mãos do vosso santo Anjo, para que todos nós, participando deste altar pela comunhão do santíssimo Corpo e Sangue do vosso Filho, sejamos repletos de todas as graças e bênçãos do céu.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> O Espírito nos una num só corpo!
            </p>
          </div></div></div>





                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Lembrai-vos, ó Pai, dos vossos filhos e filhas N. N. que nos precederam com o sinal da fé e dormem o sono da paz. A eles, e a todos os que descansam no Cristo, concedei o repouso, a luz e a paz.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
              <i class="fa fa-users" aria-hidden="true"></i> Concedei-lhes, ó Senhor, a luz eterna!
            </p>
          </div></div></div>




                <div class="timeline left"><div class="card"><div class="card-body p-4 celebrante">
            <p class="mb-0">
              <i class="fa fa-user-circle" aria-hidden="true"></i> E a todos nós pecadores, que esperamos na vossa infinita misericórdia, concedei, não por nossos méritos, mas por vossa bondade, o convívio dos Apóstolos e Mártires: João Batista e Estêvão, Matias e Barnabé, Inácio, Alexandre, Marcelino e Pedro, Felicidade e Perpétua, Águeda e Luzia, Inês, Cecília, Anastácia e de todos os vossos Santos. Por Cristo, nosso Senhor.
Por ele não cessais de criar, santificar, vivificar, abençoar estes bens e distribuí-los entre nós.
Por Cristo, com Cristo, e em Cristo, a vós, Deus Pai todo-poderoso, na unidade do Espírito Santo, toda honra e toda glória, por todos os séculos dos séculos.
            </p>
          </div></div></div>
      <div class="timeline right"><div class="card"><div class="card-body p-4 assembleia">
            <p class="mb-0">
             <i class="fa fa-users" aria-hidden="true"></i>  Amém.
            </p>
          </div></div></div>



    </div>
  </div>
</section>
<!-- TIMELINE -->
        </div>
    </div>
</div>

<!-- ULTIMAS -->

    <?php
    include_once("../../../footer.php");
    ?>


<!-- Modal -->
<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Missa com Batismo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><i class="fa fa-user-circle" aria-hidden="true"></i> Lembrai-vos, ó Pai, dos vossos filhos e filhas N. N. (aqui se mencionam os nomes dos padrinhos e das madrinhas) que conduziram os vossos eleitos à santa graça do Batismo, e de todos que circundam este altar, dos quais conheceis a fé e a dedicação ao vosso serviço.*</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal modal-lg fade" id="comunicanteModal" tabindex="-1" aria-labelledby="comunicanteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="comunicanteModalLabel">Missa com Batismo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5>*Para os Domingos</h5>  
      <p><i class="fa fa-user-circle" aria-hidden="true"></i> Em comunhão com toda a Igreja, celebramos o glorioso dia em que o Senhor Jesus venceu a morte e nos tornou participantes de sua vida imortal. Veneramos em primeiro lugar a memória da Mãe de nosso Deus e Senhor Jesus Cristo, a gloriosa sempre Virgem Maria...</p>
      <hr>
       <h5>*No Natal do Senhor e durante a Oitava</h5>  
      <p><i class="fa fa-user-circle" aria-hidden="true"></i> Em comunhão com toda a Igreja, celebramos (a noite santíssima) o dia santíssimo em que Maria, intacta em sua virgindade, deu à luz o Salvador do mundo. Veneramos em primeiro lugar a memória da mesma Mãe de nosso deus e Senhor Jesus Cristo, a gloriosa sempre Virgem Maria...</p>
      <hr>
       <h5>Na Epifania do Senhor</h5>  
      <p><i class="fa fa-user-circle" aria-hidden="true"></i> Em comunhão com toda a Igreja, celebramos o dia santíssimo em que vosso Filho unigênito, eterno convosco na glória, se manifestou visivelmente em nossa carne. Veneramos em primeiro lugar a memória da Mãe de nosso Deus e Senhor Jesus Cristo, a gloriosa sempre Virgem Maria...</p>
      <hr>
       <h5>Da Vigília Pascal até o 2º Domingo da Páscoa</h5>  
      <p><i class="fa fa-user-circle" aria-hidden="true"></i> Em comunhão com toda a Igreja, celebramos (a noite santíssima) o dia santíssimo da Ressurreição de nosso Senhor Jesus Cristo segundo a carne. Veneramos em primeiro lugar a memória da Mãe de nosso Deus e Senhor Jesus Cristo, a gloriosa sempre Virgem Maria...</p>
      <hr>
       <h5>Na Ascensão do Senhor</h5>  
      <p><i class="fa fa-user-circle" aria-hidden="true"></i> Em comunhão com toda a Igreja, celebramos o dia santíssimo em que nosso Senhor, vosso Filho unigênito, elevou à vossa direita na glória a nossa frágil natureza humana. Veneramos em primeiro lugar a memória da Mãe de nosso Deus e Senhor Jesus Cristo, a gloriosa sempre Virgem Maria...</p>
      <hr>
       <h5>Em Pentecostes</h5>  
      <p><i class="fa fa-user-circle" aria-hidden="true"></i> Em comunhão com toda a Igreja, celebramos o dia santíssimo de Pentecostes em que o Espírito Santa, em línguas de fogo, se manifestou aos Apóstolos. Veneramos em primeiro lugar a memória da Mãe de nosso Deus e Senhor Jesus Cristo, a gloriosa sempre Virgem Maria...</p>
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>





<div class="modal modal-lg fade" id="ouModal" tabindex="-1" aria-labelledby="ouModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ouModalLabel">Ou...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5>Da Vigília Pascal até o 2º Domingo da Páscoa</h5>  
      <p><i class="fa fa-user-circle" aria-hidden="true"></i> Aceitai, ó Pai, com bondade, a oblação dos vossos servos e de toda a vossa família; nós a oferecemos também por aqueles que vos dignastes regenerar pela água e pelo Espírito Santo, concedendo-lhes a remissão de todos os pecados. Dai aos nossos dias a vossa paz, livrai-nos da condenação eterna e acolhei-nos entre os vossos eleitos.</p>
      <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="ouPovoModal" tabindex="-1" aria-labelledby="ouPovoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ouPovoModalLabel">Outras opções:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-light" role="alert">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Mistério da fé e do amor!
          </div>
        </div>
        <div class="col-md-12">
          <div class="alert alert-warning" role="alert">
              <i class="fa fa-users" aria-hidden="true"></i> Todas as vezes que comemos deste pão e bebemos deste cálice, anunciamos, Senhor, a vossa morte, enquanto esperamos a vossa vinda!
          </div>
        </div>
        <div class="col-md-12">
          <h5>OU...</h5>
        </div>
        <div class="col-md-12">
            <div class="alert alert-light" role="alert">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Mistério da fé para a salvação do mundo!
          </div>
        </div>
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
              <i class="fa fa-users" aria-hidden="true"></i> Salvador do mundo, salvai-nos, vós que nos libertastes pela cruz e ressurreição.
            </div>
        </div>
        <div class="col-md-12">

        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>