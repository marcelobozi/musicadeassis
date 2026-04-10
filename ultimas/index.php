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
    <title>Últimas - Portal da Pastoral da Música - Paróquia São Francisco de Assis - Itapuã</title>
    <meta property="og:title" content="Últimas da Pastoral da Música" />
    <meta property="og:description" content="Fique por dentro das coisas que afetam nosso servir, em um único lugar, sempre atualizado." />
    <meta property="og:image" content="/img/og/ultimas.png" />
    <meta property="og:image:secure_url" content="/img/og/ultimas.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="São Francisco segurando um relógio" />

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
include_once("../menu.php");

?>

<!-- menu -->

<!-- H1 -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-11" style="padding-top:40px;padding-bottom:40px">
              <!-- bloco noticia inicio -->
            <div class="row">
            <div class="col-md-12">
            <h1><i class="fa fa-clock-o" aria-hidden="true"></i> Últimas da Pastoral da Música / Matriz</h1>
    </div>
</div>
<!-- FIM H1-->

<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 14 Mar:</span>   
                            <span style="color:#000">Slides para 4º Domingo da Quaresma</span></h3>
                            <p>03 slides inciais do seu power point a ser usado no sábado (14) e domingo (15). Criação: Iconografia Sacro-Litúrgica</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/materiais/slides-dominicais/14-15-marco-v1.pptx" class="btn btn-lg btn-warning">
                                <i class="fa fa-download" aria-hidden="true"></i> Clique Aqui para baixar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 24 Fev:</span>   
                            <span style="color:#000">Cânticos Cifrados para a Quaresma - Ano A (2026)</span></h3>
                            <p>Um guia de sugestões completo e variado, chancelado pela Arquidiocese de Vitória, para cânticos nas missas da Quaremas. Contém cifras e links para o YouTube.</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/materiais/terceiros/cantos-cifrados-para-quaresma-ano-a.pdf" class="btn btn-lg btn-warning">
                                <i class="fa fa-download" aria-hidden="true"></i> Clique Aqui para baixar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->
<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 23 Fev:</span>   
                            <span style="color:#000">Slides iniciais do Segundo Domingo da Quaresma (28/02 a 01/03)</span></h3>
                            <p>Capa dos slides de Missa do 2º Domingo da Quaresma + orientações + avisos de uso de imagem atualizados.</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/materiais/slides-dominicais/segundo-domingo-quaresma.pptx" class="btn btn-lg btn-warning">
                                <i class="fa fa-download" aria-hidden="true"></i> Clique Aqui para baixar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 14 Fev:</span>   
                            <span style="color:#000">Sugestões de cânticos das partes fixas do Hinário</span></h3>
                            <p><a href="/hinario/partes-fixas/">Clique aqui</a> ou selecione uma das categorias abaixo:</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                <a href="/hinario/partes-fixas/melodias-perdao/">    
                                    <img src="/img/2026/fevereiro/icone-perdao.jpg" class="img-fluid" alt="">
                                </a>
                                </div>
                                <div class="col-md-3 col-6">
                                <a href="/hinario/partes-fixas/melodias-gloria/">    
                                    <img src="/img/2026/fevereiro/icone-gloria.jpg" class="img-fluid" alt="">
                                </a>
                                </div>
                                <div class="col-md-3 col-6 afastamobile">
                                <a href="/hinario/partes-fixas/melodias-santo/">    
                                    <img src="/img/2026/fevereiro/icone-santo.jpg" class="img-fluid" alt="">
                                </a>
                                </div>
                                <div class="col-md-3 col-6 afastamobile">
                                <a href="/hinario/partes-fixas/melodias-cordeiro/">    
                                    <img src="/img/2026/fevereiro/icone-cordeiro.jpg" class="img-fluid" alt="">
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->


<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 10 Fev:</span>   
                            <span style="color:#000">Slides iniciais do fim de semana 14-15 de Fevereiro</span></h3>
                            <p>Capa dos slides de Missa do 6º Domingo do Tempo comum + orientações + avisos de uso de imagem atualizados.</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/materiais/slides-dominicais/14-15-fevereiro-v2.pptx" class="btn btn-lg btn-warning">
                                <i class="fa fa-download" aria-hidden="true"></i> Clique Aqui para baixar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 10 Fev:</span>   
                            <span style="color:#000">Orientações de Ações concretas para os músicos em razão do ANO JUBILAR a São Francisco.</span></h3>
                            <p>O Santo Padre nos deu um presente: um ano dedicado ao nosso Padroeiro - São Francisco de Assis. Vamos ter ações concretas sim!!!</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/cantus/o-jubileu-franciscano-e-a-musica/" class="btn btn-lg btn-warning">
                                <i class="fa fa-check" aria-hidden="true"></i> Clique Aqui para acessar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true">
                            </i> 10 Fev:</span>   
                            <span style="color:#000">O que muda nas músicas quaresmais neste ANO Litúrgico "A"?</span></h3>
                            <p>Veja orientações sobre instrumentos, momentos de silêncio e dicas de escolhas de cânticos para cada domingo.</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/cantus/musica-e-quaresma/" class="btn btn-lg btn-warning">
                                <i class="fa fa-check" aria-hidden="true"></i> Clique Aqui para acessar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12" style="padding:0px">
                            <a href="/cantus/" title="Acesse o CANTUS">
                           <img src="/img/2026/fevereiro/cantus.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
<!-- bloco noticia final -->


<!-- bloco noticia inicio -->
            <div class="row">
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true"></i> 05 Fev:</span>   <span style="color:#000">Devocionais para as 09 Missas do Jubileu de São Francisco de Assis</span></h3>
                            <p>Foram disponibilizados pela Pastoral da Liturgia todos os arquivos Power Point contendo os devocionais para as Missas do Jubileu de São Francisco de Assis. Um arquivo por mês (fevereiro a outubro de 2026).</p>
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/materiais/novena-jubilar-sao-fancisco-de-assis/" class="btn btn-lg btn-warning"><i class="fa fa-check" aria-hidden="true"></i> Clique Aqui para acessar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
<!-- bloco noticia final -->


       <!-- bloco noticia inicio -->
            <div class="row">
          
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true"></i> 05 Fev:</span>   <span style="color:#000">Abertas as Inscrições / Cadastros para novos músicos.</span></h3>
                            <p>Agora, por meio do site, o interessado poderá preencher um formulário de perfil para ser acolhido e melhor direcionado para o serviço na Pastoral da Música.</p>
                            
                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/chamados/" class="btn btn-lg btn-warning"><i class="fa fa-check" aria-hidden="true"></i> Clique Aqui para conhecer</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row">
                
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true"></i> 02 Fev:</span>   <span style="color:#000">Slides com artes para final de semana (7 e 8/fev)</span></h3>
<p>Foram disponibilizados pela Paróquia - por meio da Subcoordenação de Iconografia Litúrgica da Pastoral da Música - a arte dos slides que devem ser incorporados ao arquivo Power Point das Missas.</p>                        </div>
                        <div class="col-md-12 afasta20">
                            <a href="/arquivos/slides_fim_semana_07_08_fev.pptx" class="btn btn-lg btn-warning"><i class="fa fa-download" aria-hidden="true"></i> Clique Aqui para Baixar</a>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
<!-- bloco noticia final -->

<!-- bloco noticia inicio -->
            <div class="row" style="margin-bottom:40px">
           
                <div class="col-md-12 afasta20" style="background-color:#fff; border:solid 2px #ac5a0d;padding-top:20px;padding-bottom:20px;border-left: solid 14px #ac5a0d">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><span style="color:#f00"><i class="fa fa-calendar" aria-hidden="true"></i> 31 Jan:</span>   <span style="color:#000">Missas em razão do Jubileu de S. Francisco de Assis</span></h3>
                            <p>Inicia-se no dia 04 de fevereiro uma sequência de 09 Missas em virtude do Ano Jubilar de São Francisco de Assis, em virtude do 800º aniversário de Seu falecimento. As missas sempre seráo celebradas na Matriz. Contudo, haverá uma escala dividida entre as comunidades que compõem a Paróquia (Matriz; Santa Clara; São Pedro Pescador e Sagrado Coração de Jesus.)</p>
                            <h4>Tome nota da programação e de quais Missas a equipe da Matriz irá assumir:</h4>
                        </div>
                        <div class="col-md-12 afasta20">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Fev</strong>: responsabilidade da São Pedro Pescador</li>
                                <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Mar</strong>: responsabilidade da São Pedro Pescador</li>
                                <li class="list-group-item" style="background-color:#f9f9a4" ><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Abr</strong>: será sábado e, portanto, naturalmente será da Matriz</li>
                                <li class="list-group-item" style="background-color:#f9f9a4" ><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Mai</strong>: responsabilidade da Matriz</li>
                                <li class="list-group-item" style="background-color:#f9f9a4" ><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Jun</strong>: responsabilidade da Matriz</li>
                                <li class="list-group-item" style="background-color:#f9f9a4" ><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Jul</strong>: será sábado e, portanto, naturalmente será da Matriz</li>
                                <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Ago</strong>: responsabilidade da Santa Clara</li>
                                <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Set</strong>: responsabilidade da Sagrado Coração de Jesus</li>
                                <li class="list-group-item" style="background-color:#f9f9a4" ><i class="fa fa-calendar" aria-hidden="true"></i> <strong>04/Out</strong>: será domingo e, portanto, naturalmente será da Matriz</li>
                            </ul>
                        </div>
                        <div class="col-md-12"></div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
<!-- bloco noticia final -->

        </div>
    </div>
</div>

<!-- ULTIMAS -->

    <?php
    include_once("../footer.php");
    ?>

<script src="https://kit.fontawesome.com/c024140093.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>