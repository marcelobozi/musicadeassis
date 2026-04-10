<?php
// Exemplo de como você renderizaria isso no seu servidor Linux
$videos = [
    ['id' => 'c4dRN8KOPn4', 'titulo' => 'Tende compaixão de nós, Senhor (Ato Penitencial)','cifra' => '#', 'resumo' => 'Cantos para a Celebração da Eucaristia e da Celebração Dominical da Palavra. Realização: Edições CNBB. Coordenação, editoração eletrônica das partituras, gravação piano e voz: Frei Telles Ramon, O. de M.'],
    ['id' => 'sm47wDpcCt8', 'titulo' => 'Tende compaixão de nós, Senhor (Ato Penitencial - Fórmula 2 | Ordinário da Missa)','cifra' => 'https://www.youtube.com/watch?v=sm47wDpcCt8&t=34s', 'resumo' => 'Texto: Missal Romano. Música: Paulo Kemp e Thayssa Godêncio. Gravação: Marcus Vinícius Lima. Contado CDML: Paulo Kemp; cdml.sjbv@gmail.com; (19) 99323-2825'],
    ['id' => 'MxsjCqulhCM', 'titulo' => 'Tende compaixão de nós, Senhor (n. 676/A)','cifra' => '#', 'resumo' => 'Pastoral da Comunicação - Diocese de Erexim. @pascom.erexim'],
    ['id' => '4CDFi7n-7tM', 'titulo' => 'Tende Compaixão de Nós Senhor...','cifra' => '#', 'resumo' => 'Música: Leandro Evatisto Letra: Missal Romano. Canal: @leandro.ferreira630'],
    ['id' => 'LS5d2nuLfG4', 'titulo' => 'Tende Compaixão | CD Na Santa Eucaristia','cifra' => '#', 'resumo' => 'Canal: @CancaoNovaMusica'],
    ['id' => 'rqRzcIROwKo', 'titulo' => 'Tende Compaixão | Sugestão para o Domingo Tempo Comum','cifra' => 'https://drive.google.com/file/d/1laKsJ4dyIV21VrpwAcrlGvQJS0hwWrZu/view', 'resumo' => 'Canal: Raquel Carpejani. Letra: Missal Romano. Música: Marcelo Oliveira'] 
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
        <p class="card-text" style="font-size:.8em"><?php echo htmlspecialchars($video['resumo'], ENT_QUOTES, 'UTF-8'); ?></p>
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