<?php
// Exemplo de como você renderizaria isso no seu servidor Linux
$videos = [
    ['capa' => 'X', 'id' => 'UMAHdxuys3E', 'titulo' => 'Ato Penitencial │ Tempo da Quaresma │ Senhor, que na cruz perdoastes o ladrão arrependido','cifra' => 'https://drive.google.com/file/d/1F0_zRDaAdXHOe9Ld7C3gzMbRfZaYBvzX/view?usp=sharing', 'resumo' => 'Venite Adoremus Música Católica. Canal: @VeniteAdoremusMusicaCatolica'], 
    ['id' => 'CrY7HgFcMwQ', 'titulo' => 'Senhor, que viestes salvar | Marco Frisina','cifra' => '#', 'resumo' => 'Senhor, que viestes salvar. Música.: Marco Frisina. Texto: Missal Romano. Adaptação: Clayton Dias. Canal: @umviolaocatolico'],
    ['id' => 'WperGHnx9U8', 'titulo' => 'Senhor, que viestes salvar (Ato Penitencial - terceira fórmula do Missal Romano)','cifra' => 'https://drive.google.com/drive/folders/1_Teu-f6bcbOL675oioTM_WyqBonuPXZE', 'resumo' => 'Senhor, que vistes salvar. ATO PENITENCIAL. Texto: Missal Romano. Música: Fr. Wanderson Luiz Freitas, O.Carm. Vozes: Alexandre Pimentel e Fr. Wanderson Luiz Freitas, O.Carm. Órgão: Fr. Wanderson Luiz Freitas, O.Carm.'],
    ['id' => 'shE0tQLPKKE', 'titulo' => 'Ato Penitencial - Kyrie Eleison (com invocações)','cifra' => 'https://www.youtube.com/watch?v=shE0tQLPKKE', 'resumo' => 'Letra: Missal Romano. Melodia: Cleberson Ferreira. Órgão e voz: Lucas Siduoski. Canal: @lucas.siduoski'],
    ['id' => 'SgjRCfcWvPQ', 'titulo' => 'Senhor que viestes salvar','cifra' => '#', 'resumo' => 'Canal: Cantos do Hinário Litúrgico da Cnbb - Tema. Composer: Direitos Reservados. Composer: Joel Postma. Lyricist: Direitos Reservados. Lyricist: Joel Postma'],
    ['id' => 'uI04hR4xcnU', 'titulo' => 'Senhor, que sois o Caminho que nos Leva ao Pai - Ato Penitencial','cifra' => '#', 'resumo' => 'Canal: @TocandonaMissa'],
    ['id' => '6VVOAwe2iWA', 'titulo' => 'Renova o Mundo | Banquete Eterno [ Lyric Video ] - Shalom 40 anos','cifra' => 'https://banqueteeterno.comshalom.org/', 'resumo' => 'Canal: @comshalom. Atenção: ao optar por este cântico, altere na 1a estrofe a palavra conduz ao Pai, para LEVA ao Pai.']
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
        <h5 style="margin-top:-20px" class="card-title"><?php echo $titulo ;?><a id="bt-<?php echo $video['id'] ;?>" onClick="javascript:this.style.display='none';window.alert('Obrigado!')" class="btn btn-sm btn-light" href="javascript:void()"><i class="fa fa-star-o" aria-hidden="true"></i> Vote</a></h5>
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