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
    <title>Cantus Blog | O Jubileu Franciscano e a Música</title>
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
                <h1 class="animate-header">O Jubileu Franciscano e a Música</h1>
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
 <p style="font-size:.8em"><span><i class="fa fa-calendar" aria-hidden="true"></i> 10/02/2026 - Por: <a href="mailto:marcelo@musicadeassis.com.br">Marcelo Bozi</a></span></p>
<hr>
<h2 style="margin-top:40px">Ano Jubilar de São Francisco de Assis: quando a música se torna gesto, testemunho e missão</h2>
<p>Somos uma <strong>paróquia franciscana</strong>. Isso não é apenas um dado histórico ou um detalhe no nome da igreja — é uma <strong>vocação</strong>, um modo concreto de viver, celebrar e anunciar o Evangelho.  
E, neste <strong>Ano Jubilar de São Francisco de Assis</strong>, essa identidade nos é devolvida com força, como graça <strong>e responsabilidade</strong>.</p>
<p>
Falo aqui como coordenador de música, mas sobretudo como irmão que caminha com vocês no mesmo serviço: <strong>a música não pode passar ilesa por este tempo jubilar</strong>. Ela precisa <strong>respirar Francisco</strong>, ecoar seus valores e conduzir a assembleia a atitudes concretas.
</p>
<hr>

<h2 style="margin-top:30px">🎶 Música litúrgica não é trilha sonora. É pedagogia espiritual.</h2>
<div class="alert alert-warning"style="margin-top:30px" role="alert">
O Ano Jubilar não pede apenas <strong>novas músicas</strong>, mas <strong>nova consciência</strong>.</div>

<p>São Francisco não foi um poeta distante da realidade. Ele cantou:</p>
<ul>
    <li>a <strong>paz</strong>, em meio a conflitos;</li>
    <li>a <strong>pobreza evangélica</strong>, em uma sociedade marcada pelo acúmulo;</li>
    <li>o <strong>cuidado com a criação</strong>, muito antes disso virar discurso.</li>
</ul>

<div class="alert alert-warning"style="margin-top:30px" role="alert">
👉 Se nossas músicas não provocam conversão, algo está faltando.</div>



<h2 style="margin-top:30px">✨ A honra (e o desafio) de sermos franciscanos</h2>

<p>Ser paróquia dedicada a São Francisco, neste Ano Jubilar, é um privilégio que muitas comunidades não terão. Isso nos coloca numa posição clara: <strong>a assembleia espera de nós um testemunho coerente</strong>.</p>

<p>A música tem um poder que nenhum aviso no mural tem:</p>

<ul>
    <li>ela <strong>forma mentalidade</strong>,</li>
    <li>cria memória afetiva,</li>
    <li>e ensina o povo a rezar.</li>
</ul>

<hr>

<h2> 🎼 Como a música pode marcar o Ano Jubilar na prática</h2>

<h3 style="margin-top:30px"> 1️⃣ Escolhas musicais intencionais</h3>
<p>Não é sobre “encher o repertório de músicas franciscanas”, mas <strong>escolher com critério</strong>.</p>

<p>Priorize cânticos que expressem:</p>
<ul>
    <li>fraternidade e comunhão;</li>
    <li>simplicidade e confiança em Deus;</li>
    <li>paz, reconciliação e misericórdia;</li>
    <li>louvor pela criação.</li>
</ul>
<div class="alert alert-warning"style="margin-top:30px" role="alert">
💡 Sempre se pergunte: <strong>“Essa música ajuda a assembleia a viver o que São Francisco viveu?”</strong>
</div>

<h3 style="margin-top:30px"> 2️⃣ Repertório repetido cria identidade</h3>
<p>Não tenha medo de <strong>repetir bons cânticos ao longo do Ano Jubilar</strong>.</p>

<p>A repetição:</p>

<ul>
    <li>fixa o tema no coração da comunidade;</li>
    <li>cria unidade entre celebrações;</li>
    <li>ajuda até quem não canta “bem” a participar.</li>
</ul>

<div class="alert alert-warning"style="margin-top:30px" role="alert">
    👉 O Ano Jubilar precisa ser <strong>reconhecido pelo ouvido</strong> do povo.</div>



<h3 style="margin-top:30px"> 3️⃣ Menos performance, mais espiritualidade</h3>
<p>Francisco nos ensina isso sem palavras.</p>

<p>Neste Ano Jubilar:</p>
<ul>
    <li>menos preocupação com “efeito musical”;</li>
    <li>mais cuidado com o <strong>sentido litúrgico</strong>;</li>
    <li>mais silêncio respeitado;</li>
    <li>mais espaço para a assembleia cantar.</li>
</ul>

<p>A música franciscana <strong>não grita</strong>, ela <strong>convida</strong>.</p>


<h2 style="margin-top:45px">🙏 Um chamado aos músicos da pastoral</h2>
<p>Este Ano Jubilar não é “mais um tema litúrgico”. </p> 
<p>É um <strong>kairós</strong> — um tempo favorável.</p>

<p>Que cada ensaio, cada escolha de tom, cada canto ensinado ao povo seja feito com a consciência de que:</p>


<div class="alert alert-warning"style="margin-top:30px" role="alert">
<strong>estamos ajudando nossa comunidade a viver São Francisco hoje.</strong>
</div>

<p>Se formos fiéis nisso, a música não apenas acompanhará o Ano Jubilar —  ela <strong>o tornará inesquecível</strong>.</p>

<p>Paz e bem. ✝️🐦</p>

<hr>

<h3 style="margin-top:30px">⚠️ Nota de responsabilidade</h3>
Algumas orientações específicas sobre o Ano Jubilar (datas, indulgências, sinais litúrgicos) podem variar conforme diretrizes da Diocese ou documentos oficiais ainda em publicação.  
Recomenda-se sempre alinhar repertório e iniciativas pastorais com o pároco e com as orientações diocesanas vigentes.

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
                "titulo" => "Música e Quaresma",
                "preview" => "O Som do Silêncio e o Convite ao Deserto. Obtenha orientações sobre a tônica cerimonial e dicas de cânticos para cada domingo.",
                "data" => "08 Fev, 2026",
                "caminho" => "musica-e-quaresma"
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