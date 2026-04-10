<?php
$raiz = "http://localhost/";
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary exo-2-four" style="background-color:#f5f5dc !important">
  <div class="container-fluid" style="padding-top:20px;padding-bottom:20px">
    <a class="navbar-brand" href="/">INÍCIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a id="ultimas" class="nav-link active" aria-current="page" href="/chamados/">Faça Parte</a>
        </li>
    
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Formações
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/formacoes/">Todas as Formações</a></li>
            <li><a class="dropdown-item" href="#">Formações obrigatórias <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>
           
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/#faq">Dúvidas Frequentes</a></li>
            <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="/materiais/guia-do-recem-chegado/">Guia do Recém-chegado</a></li>
            <!--
            <li><a class="dropdown-item" href="/formacoes/nivelamento-basico-instrumentistas/">Avaliação Para Músicos</a></li>
            -->

          </ul>
        </li>

   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hinário
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Para o tempo comum <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>
            <li><a class="dropdown-item" href="/hinario/partes-fixas/">Partes fixas <span class="badge bg-warning text-muted border ms-1">NOVO!</span></a></li>
            <li><a class="dropdown-item" href="#">Ciclo de Natal <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>
            <li><a class="dropdown-item" href="#">Ciclo de Páscoa <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/hinario/originais/"><i class="fa fa-diamond" aria-hidden="true"></i> Originais (nossos talentos)</a></li>
          </ul>
        </li>


<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quem somos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/quem-somos/subcoordenacoes/">Sub-coordenações</a></li>
            <li><a class="dropdown-item" href="/quem-somos/coral-sao-francisco/">Coral São Francisco</a></li>
            <li><a class="dropdown-item" href="#">Nossos valores <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>
            <li><a class="dropdown-item" href="/chamados/">Faça parte! <span class="badge bg-warning text-muted border ms-1">NOVO!</span></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" onClick="zap()" href="https://wa.me/5511921344593"><i class="fa fa-whatsapp" aria-hidden="true"></i> Contato</a></li>
          </ul>
        </li>

   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Programe-se!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/escala-do-mes/">Escala do mês</a></li>
            <li><a class="dropdown-item" href="#">Eventos da Paróquia <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>
            <li><hr class="dropdown-divider"></li>
           <li><a class="dropdown-item" href="#">Agenda Reuniões de Coord. Equipes <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>


          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Materiais
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/materiais/oracoes-eucaristicas/">Orações Eucarísticas</a></li>
            <li><a class="dropdown-item" href="/materiais/modelos-de-slides/">Modelos de Slides</a></li>
            <li><a class="dropdown-item" href="#">Conteúdos para Missas Específicas <span class="badge bg-light text-muted border ms-1">Em breve</span></a></li>
            <li><a class="dropdown-item" href="/materiais/novena-jubilar-sao-fancisco-de-assis/">Devocionais do Jubileu S.F.A.<span class="badge bg-warning text-muted border ms-1">NOVO!</span></a></li>
            <!--
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/formacoes/nivelamento-basico-instrumentistas/">Avaliação Para Músicos</a></li>
-->
          </ul>
        </li>

             
        <li class="nav-item">
          <a class="nav-link" onClick="zap()" href="/cantus/">CANTUS Blog</a>
        </li>

        <li class="nav-item">
          <a id="ultimas" class="nav-link active" aria-current="page" href="/ultimas/" style="background-color:#f00; color:#fff;border-radius:15px"><i class="fa fa-clock-o" aria-hidden="true"></i> Últimas</a>
        </li>

      </ul>
      <form class="d-flex" role="search" method="get" action="/busca/">
        <input class="form-control me-2" name="busca" id="busca" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-search" aria-hidden="true"></i></button>
      </form>
    </div>
  </div>
</nav>