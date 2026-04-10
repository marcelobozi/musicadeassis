<?php
// Exemplo de como você renderizaria isso no seu servidor Linux
$videos = [
    ['capa' => 'c1', 'id' => 'hmBW49XO2iU', 'titulo' => 'Cordeiro de Deus - I','cifra' => '#', 'resumo' => 'Cordeiro de Deus - I · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: Joel Postma. Lyricist: Direitos Reservados. Lyricist: Joel Postma'],
     ['capa' => 'c1', 'id' => 'hkrClWoOvF8', 'titulo' => 'Cordeiro de Deus - IV','cifra' => '#', 'resumo' => 'Cordeiro de Deus - IV · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24 . Composer: Direitos Reservados. Composer: Lucas de Paula. Lyricist: Direitos Reservados. Lyricist: Lucas de Paula.'],
     ['capa' => 'c1', 'id' => 'FtDNNsfvPFA', 'titulo' => 'Cordeiro de Deus - VI','cifra' => '#', 'resumo' => 'Cordeiro de Deus - VI · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: Geraldo Leite. Lyricist: Direitos Reservados. Lyricist: Geraldo Leite'],
     ['capa' => 'c1', 'id' => '7UZJiSnoqN8', 'titulo' => 'Cordeiro de Deus - VII','cifra' => '#', 'resumo' => 'Cordeiro de Deus - VII · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: José Acácio Santana. Composer: Direitos Reservados. Lyricist: José Acácio Santana. Lyricist: Direitos Reservados'],
     ['capa' => '6XCyWxWpPAo', 'id' => '6XCyWxWpPAo', 'titulo' => 'CORDEIRO (Frei Luiz Turra)','cifra' => '#', 'resumo' => 'MATERIAL PRODUZIDO COM A AUTORIZAÇÃO DA CONFERÊNCIA NACIONAL DOS BISPOS DO BRASIL (CNBB). GRAVAÇÃO COM FINALIDADE PASTORAL E DIDÁTICA – SEM FINS LUCRATIVOS. Partitura/Cifras: 46º Curso de Canto Litúrgico. ou solicite: cantoarquidiocesedegoiania2@gmail.com']
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
      <a id="bt-<?php echo $video['id'] ;?>" onClick="javascript:this.style.display='none';window.alert('Obrigado!')" class="btn btn-sm btn-light" href="javascript:void()"><i class="fa fa-star-o" aria-hidden="true"></i> Vote</a>
      </h5>
        <p class="card-text" style="font-size:.8em"><?php echo $video['resumo'] ;?></p>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-md-6">
            <a style="width:100%" title="<?php echo $titulo ;?>" class="btn btn-danger" href="#" data-dtm="<?php echo $video['id'] ;?>"><i class="fa fa-youtube" aria-hidden="true"></i> Vídeo</a>
          </div>
          <div class="col-md-6">
            <?php if (!empty($urlCifra) && $urlCifra !== '#'): ?>
            <a style="width:100%" class="btn btn-warning afastamobile" title="<?php echo $titulo ;?>" href="<?php echo $urlCifra ;?>" target="_blank"><i class="fa fa-book" aria-hidden="true"></i> Cifra</a>
            <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>  