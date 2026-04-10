<!DOCTYPE html>
<html lang="pt-br">
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
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantus Blog | Música e Quaresma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Fauna+One&display=swap" rel="stylesheet">
    <link  rel="stylesheet" type="text/css"  media="all" href="/assets/css/responsive.css" />
    <style>
        #conteudo{
            background-color:#fff;
            padding-top:25px;
            padding-bottom:45px;
            text-align:left;
        }
        #conteudo h3{
            margin-top:50px;
            font-weight:700
        }
         #conteudo h2{
            font-weight:700
        }
        #conteudo p{
            font-size:1.1em;
            color:#000 !important;
            background-color:#fff;
            margin-top:30px
        }
        #conteudo > ul > li{
            font-size:1.1em;
            color:#000 !important;
            background-color:#fff;
            line-height:160%
        }

        :root {
            --gold: #c5a059;
            --dark-void: #0a0a0a;
            --glass: rgba(10, 10, 10, 0.85);
        }

        body {
            background: var(--dark-void) url('/img/vitral-blog2.jpg') fixed;
            color: #d1d1d1;
            font-family: 'Fauna One', serif;
            overflow-x: hidden;
        }

        /* Navbar com transição */
        #mainNav {
            background-color: var(--glass);
            border-bottom: 1px solid rgba(197, 160, 89, 0.3);
            transition: transform 0.5s ease, opacity 0.5s ease;
            z-index: 1050;
        }

        .nav-hidden {
            transform: translateY(-100%);
            opacity: 0;
        }

        .navbar-brand, .nav-link {
            font-family: 'Cinzel', serif;
            color: var(--gold) !important;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Hero Section Impactante */
        .hero {
            height: 100vh;
            background: 
                linear-gradient(to bottom, rgba(10,10,10,0.2), var(--dark-void)),
                url('/img/hero-cathedral.jpg') no-center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-content h1 {
            font-family: 'Cinzel', serif;
            font-size: clamp(3rem, 8vw, 6rem);
            color: var(--gold);
            text-shadow: 0 0 30px rgba(0,0,0,0.8);
            margin-bottom: 0;
        }

        /* Estilo dos Cards (Conteúdo Estático PHP) */
        .card-stone {
            background: rgba(20, 20, 20, 0.6);
            border: 1px solid rgba(197, 160, 89, 0.15);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
        }

        .card-stone:hover {
            border-color: var(--gold);
            box-shadow: 0 0 40px rgba(197, 160, 89, 0.1);
            transform: scale(1.02);
        }

        .ogival-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            margin: 4rem 0;
        }
    </style>
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
<nav id="mainNav" class="navbar navbar-expand-lg fixed-top p-3">
    <div class="container">
        <a class="navbar-brand" href="/cantus/">CANTUS</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="hero-content">
        <div class="row justify-content-center">
            <div class="col-md-11 col-11">
                <img src="/img/2026/fevereiro/cantus-pic.png" alt="Imagem de São Francisco de Assis segurando instrumento de cordas">
                <h1 class="animate-header">Música e Quaresma: O Som do Silêncio e o Convite ao Deserto.</h1>
                 <p class="lead text-white-50"><span style="background-color:#3a1f03;color:#fff">
                    Orientações para a Pastoral da Música - Paróquia São Francisco de Assis</span>
                </p>
            </div>
        </div>

    </div>
</section>

<div class="container-fluid afasta40">
    <div class="row justify-content-center">
        <div class="col-md-11 col-11" id="conteudo" style="color:#472105">
<!-- conteudo -->
<div class="row">
    <div class="col-md-12">
 <p style="font-size:.8em"><span><i class="fa fa-calendar" aria-hidden="true"></i> 08/02/2026 - Por: <a href="mailto:marcelo@musicadeassis.com.br">Marcelo Bozi</a></span></p>
<hr>
<h2 style="margin-top:40px">Olá, queridos irmãos e irmãs das equipes de música da nossa Paróquia!</h2>

<p>Estamos nos aproximando da Quaresma, um tempo de 40 dias de retiro espiritual, penitência e conversão. Se a nossa vida fosse um filme, a Quaresma seria aquele momento de silêncio profundo antes da grande celebração final.
<br><br>
Para que nossa liturgia ajude a comunidade a mergulhar nesse mistério, precisamos "ajustar os nossos instrumentos" — não só as cordas e teclas, mas o nosso modo de servir. Seja você um veterano de décadas na caminhada ou alguém que acaba de entrar no ministério, estas orientações são o nosso mapa para este tempo.</p>
</p>

<h3>1. A Regra de Ouro: Sobriedade</h3>
<p>A Instrução Geral sobre o Missal Romano (IGMR n. 313) é clara: na Quaresma, o som dos instrumentos deve apenas sustentar o canto.</p>

<p>O que muda: Evitemos solos instrumentais, introduções longas ou floreios virtuosos.</p>

<p>Dica prática: Se puder, use menos instrumentos. Um violão dedilhado ou um teclado com timbre de piano/órgão suave ajudam mais a rezar do que uma banda completa com bateria e distorção.</p>

<h3>2. O Jejum das Palavras: O Adeus ao "Aleluia" e ao "Glória"</h3>

<p>A Igreja faz um "jejum labial" de duas expressões de suma alegria:</p>
<p>

<ul>
<li><strong>O Glória</strong>: Fica guardado. Não o cantamos nem o recitamos (exceto em Solenidades, como São José e a Anunciação).</li>
<li><strong>O Aleluia:</strong> É omitido totalmente. No lugar do Salmo Aleluiático, usamos o Versículo de Aclamação (ex: "Louvor e glória a ti, Senhor, Cristo, Palavra de Deus").</li>
</ul>

<h3>3. Letras Teocêntricas e Bíblicas</h3>
<p>A Quaresma pede músicas que falem de: arrependimento, deserto, conversão, misericórdia e a Paixão do Senhor.</p>
<p>Cuidado com o "subjetivismo": Evitem músicas que foquem demais nos nossos sentimentos pessoais e prefiram as que usam textos bíblicos ou o próprio Hinário Litúrgico da CNBB.</p>

<h3>4. O Valor do Silêncio</h3>
<p>Músico católico não é "tapa-buraco" de silêncio. Na Quaresma, o silêncio faz parte da música.</p>

<p>Após as leituras e após a comunhão, permitam que o silêncio ecoe. Não é necessário um fundo musical o tempo todo. Deixem que a Palavra de Deus ressoe no coração da assembleia sem distrações.</p>

<div style="margin-top:45px" class="alert alert-dark" role="alert">
<strong>Um recado para o coração</strong><br><br>
A música na Missa não serve para "dar um show", mas para servir ao rito. Se a assembleia sair da missa dizendo "que banda maravilhosa", talvez tenhamos falhado. Se eles saírem dizendo "como Deus é misericordioso e como preciso mudar de vida", então cumprimos nossa missão.

Que nossos instrumentos se calem um pouco, para que a voz de Deus fale mais alto neste tempo favorável!
</div>
    </div>

    <div class="col-md-12" style="margin-top:50px">
    <h2>🎹 Sugestões de Cantos por Domingo (Ano A)</h2>
    </div>

    <div class="col-md-12">
        <div style="margin-top:25px" class="alert alert-warning" role="alert">
        No Ano A, a Quaresma é uma grande caminhada batismal. Os cantos de comunhão, em especial, devem refletir os Evangelhos joaninos (Água Viva, Luz do Mundo e Ressurreição).
        </div>
    </div>

    <div class="col-md-12">
<!-- cards -->

<div class="accordion accordion-flush" id="accordionFlushExample">

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        1º Domingo: As Tentações no Deserto
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <span style="font-style:italic">O combate espiritual e a vitória sobre o pecado.</span>
        <hr>
        <ul>
            <li><strong>Entrada</strong>: "Senhor, eis aqui o vosso povo" (Pe. José Weber) – Foca no deserto e no perdão. </li>
            <li><strong>Comunhão</strong>: "Não só de pão vive o homem" (Tradicional Litúrgico) – Letra baseada em Mateus 4,4.  </li>
        </ul>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        2º Domingo: A Transfiguração
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <span style="font-style:italic">A luz que antecipa a Páscoa para encorajar os discípulos.</span>
        <hr>
        <ul>
            <li><strong>Entrada</strong>: "O vosso rosto, Senhor, eu procuro" (Sl 26/27)  </li>
            <li><strong>Comunhão</strong>: "Mestre, bom é estarmos aqui" (Pe. José Weber) – Reflete a frase de Pedro no Tabor.  </li>
        </ul>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        3º Domingo: A Samaritana (A Água Viva)
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
     <div class="accordion-body">
        <span style="font-style:italic">Início dos escrutínios batismais. Jesus é a fonte que sacia a sede.</span>
        <hr>
        <ul>
            <li><strong>Entrada</strong>: "Minha alma tem sede de Deus" (Sl 41/42) </li>
            <li><strong>Comunhão</strong>: "Quem beber desta água que eu dou" (Hinário Litúrgico) – Foca no diálogo de Jesus com a Samaritana. </li>
        </ul>
    </div>
    </div>
  </div>

    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        4º Domingo: O Cego de Nascença (A Luz do Mundo)
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <span style="font-style:italic">Domingo Laetare (da Alegria). A cura da cegueira espiritual.</span>
        <hr>
        <ul>
            <li><strong>Entrada</strong>: "Alegra-te, Jerusalém" (Antífona de Entrada própria deste domingo)  </li>
            <li><strong>Comunhão</strong>: "Eu sou a luz do mundo, diz o Senhor" (Canto Bíblico sobre João 9) </li>
        </ul>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        5º Domingo: A Ressurreição de Lázaro (A Vida Eterna)
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <span style="font-style:italic">A esperança na vida plena antes de entrarmos na Semana Santa.</span>
        <hr>
        <ul>
            <li><strong>Entrada</strong>: "Das profundezas clamo a vós, Senhor" (Sl 129/130 - De Profundis)  </li>
            <li><strong>Comunhão</strong>: "Eu sou a Ressurreição e a Vida" (Baseado em João 11) </li>
        </ul>
    </div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
      Domingo de Ramos: A Paixão do Senhor
      </button>
    </h2>
    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <span style="font-style:italic">A entrada messiânica e o Servo Sofredor.</span>
        <hr>
        <ul>
            <li><strong>Procissão</strong>: "Hosana ao Filho de Davi" ou "Os filhos dos hebreus" </li>
            <li><strong>Comunhão</strong>: "Pai, se este cálice não pode passar" (Melodia para o Sl 21/22) </li>
        </ul>
    </div>
    </div>
  </div>

</div>

<!-- cards -->
    </div>
    <div class="col-md-12" style="margin-top:45px;border-top:dotted 1px #000">
        <p><strong>📚 Fontes e Referências Litúrgicas</strong><p>
        <p style="font-size:.8em">Para garantir que nossa música esteja em plena comunhão com a Igreja, baseamos nossas orientações nos seguintes documentos oficiais:<br>
    <br>
    <strong>MISSAL ROMANO</strong>. 3ª Edição Típica para o Brasil. Brasília: Edições CNBB, 2023.<br>
Esta é a fonte primária. Ela contém as antífonas, as orações e as rubricas (instruções em vermelho) que determinam a omissão do Glória e do Aleluia, além de indicar o caráter sóbrio da Quaresma.
<br><br>
<strong>CONGREGAÇÃO PARA O CULTO DIVINO E A DISCIPLINA DOS SACRAMENTOS</strong>. Instrução Geral sobre o Missal Romano (IGMR). Brasília: Edições CNBB.
<br>
Especificamente os números 313 (sobre o uso de instrumentos) e 366 (sobre a escolha dos cantos).
<br><br>
<strong>CONCÍLIO VATICANO II</strong>. Constituição Sacrosanctum Concilium sobre a Sagrada Liturgia. 1963.
<br>
O capítulo VI é inteiramente dedicado à Música Sacra, definindo que ela é parte integrante da liturgia solene.
<br><br>
<strong>CONFERÊNCIA NACIONAL DOS BISPOS DO BRASIL (CNBB)</strong>. Hinos Litúrgicos: Quaresma e Semana Santa (Ano A). Coleção Hinário Litúrgico da CNBB. Brasília: Edições CNBB.
<br>
Esta obra impressa contém as partituras e letras aprovadas para o uso litúrgico no Brasil, garantindo que os cantos tenham fidelidade bíblica.
<br><br>
<strong>CONFERÊNCIA NACIONAL DOS BISPOS DO BRASIL (CNBB)</strong>. Documento 43: Animação Cantada da Liturgia no Brasil. Brasília: Edições CNBB.
<br>
Documento pastoral que orienta sobre a função ministerial da música e a importância de escolher cantos que respeitem o tempo litúrgico.
<br><br>
<strong>CONGREGAÇÃO PARA O CULTO DIVINO</strong>. Carta Circular sobre a Preparação e Celebração das Festas Pascais (Paschalis Sollemnitatis). 1988.
<br>
Documento que detalha como deve ser o clima espiritual e musical desde a Quarta-feira de Cinzas até a Vigília Pascal.
    </p>
    </div>
</div>
<!-- conteudo -->
        </div>
    </div>
</div>

<main class="container py-5" id="artigos">
    <div class="ogival-divider"></div>
    
    <div class="row g-5">
        <?php
        // Array simulando seus arquivos de texto ou posts manuais
        $artigos = [
[
                "titulo" => "O Jubileu Franciscano e a Música",
                "preview" => "Fomos presenteados pelo Papa Leão com um ano Jubilar dedicado ao nosso Padroeiro. Não podemos ficar indiferentes.",
                "data" => "10 Fev, 2026",
                "caminho" => "o-jubileu-franciscano-e-a-musica"
            ]
        ];

        foreach ($artigos as $post): ?>
        <div class="col-lg-4">
            <div class="card card-stone h-100 p-4">
                <small class="text-warning mb-2"><?php echo $post['data']; ?></small>
                <h2 class="h3 fw-bold text-white"><?php echo htmlspecialchars($post['titulo']); ?></h2>
                <p class="text-muted"><span style="background-color:#3a1f03;color:#fff"><?php echo $post['preview']; ?></span></p>
                <a href="/cantus/<?php echo $post['caminho']; ?>/" class="mt-auto text-decoration-none text-warning fw-bold">LEIA →</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>
<?php
include_once("../../footer.php");
?>
<script>
let lastScrollTop = 0;
const navbar = document.getElementById('mainNav');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // Se rolar para baixo, esconde. Se rolar para cima, mostra.
    if (scrollTop > lastScrollTop && scrollTop > 100) {
        navbar.classList.add('nav-hidden');
    } else {
        navbar.classList.remove('nav-hidden');
    }
    
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
}, false);

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>

</body>
</html>