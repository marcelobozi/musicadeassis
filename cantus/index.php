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
    <title>CANTUS | Blog da Pastoral da Música</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Fauna+One&display=swap" rel="stylesheet">
    <link  rel="stylesheet" type="text/css"  media="all" href="/assets/css/responsive.css" />
    <style>
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
        <img src="/img/2026/fevereiro/cantus-pic.png" alt="Imagem de São Francisco de Assis segurando instrumento de cordas">
        <h1 class="animate-header">Cantus</h1>
        <p class="lead text-white-50"><span style="background-color:#3a1f03;color:#fff">Orientações para a Pastoral da Música - Comunidade São Francisco de Assis - Itapuã - Vila Velha (ES)</span></p>
    </div>
</section>

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
            ],
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
include_once("../footer.php");
?>
<script src="controles.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>

</body>
</html>