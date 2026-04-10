<?php
// Exemplo de como você renderizaria isso no seu servidor Linux
$videos = [
    ['capa' => 'X', 'id' => '8kgm2xMv2ks', 'titulo' => 'Glória Simples II - Delphim Rezende Porto','cifra' => '#', 'resumo' => 'Coral da Paróquia Nossa Senhora da Saúde. Lambari, Minas Gerais. Diocese da Campanha. Canal: @CoralNossaSenhoradaSa%C3%BAde'],
    ['capa' => 'X', 'id' => 'a1bW5_wnRBk', 'titulo' => 'Glória a Deus nas alturas','cifra' => '#', 'resumo' => 'Glória a Deus nas alturas · José Luiz Prim. Cantar a Liturgia (Ordinário da Santa Missa). ℗ Paulus digital. Released on: 2009-06-21. Composer: José Luiz Prim. Lyricist: Tradicional. Canal: José Luiz Prim - Tema'],
    ['capa' => 'X', 'id' => '6X3wYP4bsYY', 'titulo' => 'Hino de Louvor - I','cifra' => '#', 'resumo' => 'Hino de Louvor - I · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: Wendel da Silva Oliveira.Lyricist: Direitos Reservados. Lyricist: Wendel da Silva Oliveira. Canal: Cantos do Hinário Litúrgico da Cnbb - Tema'],
    ['capa' => 'X', 'id' => '64FLM6W7mkE', 'titulo' => 'Hino de Louvor - IV','cifra' => 'Hino de Louvor - IV', 'resumo' => 'Hino de Louvor - IV · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: José Luiz Prim. Lyricist: Direitos Reservados. Lyricist: José Luiz Prim Canal: Cantos do Hinário Litúrgico da Cnbb - Tema'],
    ['capa' => 'X', 'id' => 'rmE94Rb8DqQ', 'titulo' => 'Glória - D. Henrique Soares','cifra' => 'https://hinariocatolico.com.br/', 'resumo' => 'Canal: @delphimporto'],
    ['capa' => 'X', 'id' => 'rQTb6se-ne0', 'titulo' => 'Glória a Deus nas alturas (Padre Ney Brasil)','cifra' => 'https://escolamediatrix.activehosted.com/f/11', 'resumo' => 'Canal: @lucas.siduoski'],
    ['capa' => 'X', 'id' => 'ijMnxCjkczw', 'titulo' => 'Glória a Deus nas alturas - melodia Siro Pontes','cifra' => 'https://www.youtube.com/watch?v=ijMnxCjkczw', 'resumo' => 'Arquidiocese de Goiânia. Canal: @ArquidiocesedeGoiânia-y9e'],
    ['capa' => 'X', 'id' => '_6ETrsZG8yg', 'titulo' => 'HINO DE LOUVOR I - GLÓRIA A DEUS NAS ALTURAS','cifra' => 'https://www.youtube.com/watch?v=_6ETrsZG8yg', 'resumo' => 'Canal: Canto Arquidiocese de Goiânia. MATERIAL PRODUZIDO COM A AUTORIZAÇÃO DA CONFERÊNCIA NACIONAL DOS BISPOS DO BRASIL (CNBB). GRAVAÇÃO COM FINALIDADE PASTORAL E DIDÁTICA – SEM FINS LUCRATIVOS. Letra: Missal Romano . Música: Maria da Conceição e Wendel da Silva Oliveira'],
    ['capa' => 'X', 'id' => 'PuxYzdksJzI', 'titulo' => '31. Glória, glória a Deus nas alturas (Mons. Marco Frisina)','cifra' => 'https://escolamediatrix.activehosted.com/f/9', 'resumo' => 'Canal: @lucas.siduoski. Glória, glória a Deus nas alturas (Mons. Marco Frisina). L.: Missal Romano. M.: Mons Marco Frisina. Adaptação: Clayton Dias']
];

foreach ($videos as $video) {
  $urlCifra = htmlspecialchars($video['cifra'], ENT_QUOTES, 'UTF-8');
  $titulo   = htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8');
    $mensagem = "Olá! Estive no site da Pastoral da Música, e acredito que se interessará no vídeo https://www.youtube.com/watch?v=".$video['id'];
  $url_encoded = urlencode($mensagem);
  $href = "https://wa.me/?text=" . $url_encoded;
?>
  <div class="col">
    <div class="card h-100">
      <img src="https://img.youtube.com/vi/<?php echo $video['id'] ;?>/hqdefault.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <a style="position: relative; margin-left:0px;margin-top:-135px" class="btn btn-success" target="_blank" href="<?php echo $href;?>"><i class="fa fa-whatsapp" aria-hidden="true"></i> Enviar para alguém</a>
        
        <h5 style="margin-top:-20px" class="card-title"><?php echo $titulo ;?>
        <a id="bt-<?php echo $video['id'] ;?>" onClick="javascript:this.style.display='none';window.alert('Obrigado!')" class="btn btn-sm btn-light" href="javascript:void()"><i class="fa fa-star-o" aria-hidden="true"></i> Vote</a></h5>
        <p class="card-text" style="font-size:.8em"><?php echo $video['resumo'] ;?></p>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-md-6">
            <a style="width:100%" title="<?php echo $titulo ;?>" class="btn btn-danger" href="#" data-dtm="<?php echo $video['id'] ;?>"><i class="fa fa-youtube" aria-hidden="true"></i> Vídeo</a>
          </div>
          <div class="col-md-6">
            <?php if (!empty($urlCifra) && $urlCifra !== '#'): ?>
            <a style="width:100%" title="<?php echo $titulo ;?>" class="btn btn-warning afastamobile" href="<?php echo $urlCifra ;?>" target="_blank"><i class="fa fa-book" aria-hidden="true"></i> Cifra</a>
            <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>  