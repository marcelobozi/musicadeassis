<?php
include_once("../config.php");
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
    <title>Acolhimento Vocacional - Pastoral da Música - Comunidade São Francisco de Assis - Itapuã</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>

#floating-cta {
    position: fixed;
    bottom: 24px;
    right: 24px;
    z-index: 1050;

    width: 64px;
    height: 64px;
    border-radius: 50%;

    background-color: #6c4b1e; /* tom pastoral elegante */
    color: #fff;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;

    font-size: 20px;
    font-weight: 600;
    text-decoration: none;

    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    transition: opacity 0.4s ease, transform 0.3s ease;
}

/* Texto escondido no mobile (opcional e elegante) */
#floating-cta span {
    display: none;
}

/* Ícone */
#floating-cta i {
    font-size: 22px;
}

/* Hover */
#floating-cta:hover {
    transform: scale(1.05);
    background-color: #5a3e18;
}

/* Estado invisível */
#floating-cta.is-hidden {
    opacity: 0;
    pointer-events: none;
}

/* Em telas maiores, mostra texto ao lado */
@media (min-width: 768px) {
    #floating-cta {
        width: auto;
        height: 56px;
        padding: 0 20px;
        border-radius: 999px;
    }

    #floating-cta span {
        display: inline;
        font-size: 15px;
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
include_once("../menu.php");

?>

<!-- menu -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12" style="padding-top:10px;font-size:.9em;font-family: Exo 2, sans-serif">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color:#7e5834">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Acolhimento Vocacional</li>
                    </ol>
                    </nav>

        </div>
    </div>
</div>



<div class="container-fluid" style="padding-left:0px;background-color:#3d2515">

    <div class="row justify-content-center">
        <div class="col-md-12 col-12">
            <img src="/img/acolhimento-pastoral.jpg" style="width:100%" alt="">
        </div>
    </div>
</div>

  </header>

    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:40px">
            <div class="col-md-10 col-12">
                <div class="row">
                  <div class="col-md-12 col-12" id="welcome">
                    <h1 class="exo-2-four light-marrom sfcenter" style="color:#3d2515">🎶 Você não chegou aqui por acaso!</h1>
                              </div>
                  
                </div>
            </div>
        </div>
    </div>

<!-- utilidades via atalhos -->
<div class="container-fluid" style="background-color:#7e5834; padding-top:40px;padding-bottom:40px;margin-top:60px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
            <h2 style="color:#fff">Se você está lendo esta página, é porque algo dentro de você se moveu quando ouviu o convite.</h2>
          <p class="afasta40" style="color:#fff;font-size:1.2em">
            
            <strong>
            Talvez tenha sido um desejo antigo.<br>
            Talvez uma inquietação.<br>
            Talvez uma simples curiosidade que não foi embora.</strong>
<br><br>
            Na vida de fé, Deus costuma chamar assim: de forma simples, mas profunda.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- utilidades via atalhos -->

<!-- utilidades via atalhos -->
<div class="container-fluid" style="background-color:#fff; padding-top:60px;padding-bottom:60px;margin-top:20px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four sfcenter" style="color:#48301e">🙏 Música, na Igreja, não é palco. É altar.</h2>
          <p style="color:#48301e;font-size:1.2em">
            Na Pastoral da Música, ninguém é espectador. <br><br><strong>
                Cada voz, cada instrumento, cada silêncio bem colocado
                se transforma em oração viva.</strong>
<br><br>
                Aqui, a música não serve para “embelezar a missa”. Ela serve ao Mistério, sustenta a liturgia
                e ajuda toda a assembleia a rezar com o coração inteiro.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- utilidades via atalhos -->


<!-- utilidades via atalhos -->
<div class="container-fluid" style="background-color:#f5f5dc; padding-top:60px;padding-bottom:60px;border-top: dotted 2px #925f36;border-bottom: dotted 2px #925f36">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four sfcenter afasta20" style="color:#000">💛 Não importa sua idade. Nem seu nível musical.</h2>

            <h4 class="afasta60">Talvez você esteja pensando:</h4>

            <ul style="font-size:1.2em" class="afasta20">
                <li>“Eu não sei cantar tão bem…”</li>
                <li>“Já faz tempo que não toco…”</li>
                <li>“Sou muito novo(a) / muito velho(a) para isso…”</li>  
            </ul>
            <h4 class="afasta20">A boa notícia é simples e verdadeira:</h4>
            

            <p style="font-size:1.2em">Vocação não exige perfeição. Exige disponibilidade.</p>

            <ul style="font-size:1.2em" class="afasta20">
                <li>A técnica se aprende.</li>
                <li>A afinação se trabalha.</li>
                <li>A segurança vem com o tempo.</li>  
            </ul>
            
            <p style="font-size:1.2em">O que não se ensina é o que você já tem: <strong>o desejo de servir a Deus com o que é e com o que tem.</strong></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- utilidades via atalhos -->


<!-- utilidades via atalhos -->
<div class="container-fluid" style="background-color:#442b1a; padding-top:60px;padding-bottom:60px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four sfcenter afasta20">🤝 Aqui, você não caminha sozinho(a)</h2>
            <p style="color:#fff;font-size:1.2em" class="afasta30">
            A Pastoral da Música é <strong>corpo</strong>, não performance. <br>
            É <strong>comunidade</strong>, não competição.<br>
            É <strong>caminhada</strong>, não cobrança.<br>
<br>
            Você encontrará pessoas em diferentes fases:</p>
            <ul style="font-size: 1.2em;color:#fff">
                <li>quem está começando agora</li>
                <li>quem já serve há muitos anos</li>
                <li>quem está retomando depois de um tempo afastado</li>
                <li>Todos aprendendo, todos servindo, todos crescendo.</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- utilidades via atalhos -->

<!-- utilidades via atalhos -->
<div class="container-fluid" style="background-color:#fff; padding-top:60px;padding-bottom:60px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four sfcenter afasta20">✨ Talvez este seja o seu tempo</h2>
            <p style="color:#000;font-size:1.2em" class="afasta30">
                Deus continua chamando.<br>
                E, muitas vezes, Ele chama <strong>através da Igreja</strong>,<br>
                de um convite simples, feito em público…<br>
                como aquele que trouxe você até aqui.
<br><br>
                Se o seu coração sentiu algo diferente,<br>
                <strong>não ignore.</strong>
<br><br>
                Dê um passo.<br>
                O resto, Deus constrói no caminho.
            </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- utilidades via atalhos -->


<!-- utilidades via atalhos -->
<div id="cta" class="container-fluid" style="background-color:#000; padding-top:60px;padding-bottom:120px">
  <div class="row justify-content-center">
    <div class="col-md-10 col-12">
      <div class="row">
        <div class="col-md-12">
          <h2 class="exo-2-four sfcenter afasta20">👉 Pronto(a) para dar esse passo?</h2>
            <p style="color:#e3ccbc;font-size:1.2em" class="afasta30">
                Clique no botão abaixo e faça seu cadastro. É simples, rápido e sem compromisso imediato.
            </p>
            <h5 class="afasta30" style="margin-left:20px">
               Cadastrar-se não é assumir tudo agora.<br>
                É apenas dizer: “Eis-me aqui. Quero conhecer.”
            </h5>
            <hr>
            <a id="cadastro" class="btn btn-success btn-lg afasta30" href="https://forms.gle/8pewANdxEUjzwrQAA">🎼 QUERO ME CADASTRAR</a>
        </div>
      </div>
    </div>
  </div>
</div>


<a href="#cta" id="floating-cta" aria-label="Cadastre-se">
    <i class="fa-solid fa-clipboard-list"></i>
    <span>Cadastre-se!</span>
</a>



<!-- utilidades via atalhos -->
    <?php
    include_once("../footer.php");
    ?>
<script>
(function () {
    const cta = document.getElementById('floating-cta');

    function handleScroll() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;

        if (scrollPercent > 70) {
            cta.classList.add('is-hidden');
        } else {
            cta.classList.remove('is-hidden');
        }
    }

    window.addEventListener('scroll', handleScroll);
})();
</script>
<script>
(function () {
    const cta = document.getElementById('floating-cta');

    if (!cta) return;

    /* ==========================
       CONTROLE DE SCROLL (70%)
    ========================== */
    function handleScroll() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;

        if (scrollPercent > 70) {
            cta.classList.add('is-hidden');
        } else {
            cta.classList.remove('is-hidden');
        }
    }

    window.addEventListener('scroll', handleScroll);

    /* ==========================
       TRACKING DE CLIQUE
    ========================== */
    cta.addEventListener('click', function () {

        /* ---- GA4 via gtag ---- */
        if (typeof gtag === 'function') {
            gtag('event', 'cta_click', {
                event_category: 'engagement',
                event_label: 'floating_cta_cadastre_se',
                cta_position: 'floating_button',
                cta_destination: '#cta'
            });
        }

        /* ---- GA4 via dataLayer (GTM) ---- */
        if (window.dataLayer && Array.isArray(window.dataLayer)) {
            window.dataLayer.push({
                event: 'cta_click',
                cta_name: 'cadastre_se',
                cta_position: 'floating_button',
                cta_destination: '#cta'
            });
        }

        /* ---- Adobe Analytics via Launch ---- */
        if (window._satellite && typeof _satellite.track === 'function') {
            _satellite.track('cta_click', {
                ctaName: 'cadastre_se',
                ctaPosition: 'floating_button',
                ctaDestination: '#cta'
            });
        }

    });

})();
</script>


<script>
(function () {
    const cadastroBtn = document.getElementById('cadastro');

    if (!cadastroBtn) return;

    cadastroBtn.addEventListener('click', function () {

        if (window.dataLayer && Array.isArray(window.dataLayer)) {
            window.dataLayer.push({
                event: 'clique_cta_cadastro',
                cta_name: 'cadastro',
                cta_type: 'primary_button',
                cta_location: 'landing_page',
                cta_destination: '#cta'
            });
        }

    });
})();
</script>
<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>