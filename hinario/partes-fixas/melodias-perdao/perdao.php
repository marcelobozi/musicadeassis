<?php
// Exemplo de como você renderizaria isso no seu servidor Linux
$videos = [
    ['id' => 'ayH-TsGjgo8', 'titulo' => 'CONFESSO A DEUS (NOVO MISSAL) - Luiz Henrique Mayer','cifra' => 'https://www.dropbox.com/scl/fi/wtqhpu97vtddhwzzqfmm4/Partituras-Encontro-MT.pdf.jpeg?rlkey=36dzotrrixmked93cd6po34bd&e=1&st=d71dcdn7&dl=0', 'resumo' => 'Canal: @cantandoaliturgiaoficial. Importante lembrar que as súplicas: Senhor piedade, Cristo piedade e Senhor piedade são cantadas (ou rezadas) após a absolvição, conforme está sinalizado na partitura.'],
    ['id' => '7B66ZwbYO4g', 'titulo' => 'Confesso a Deus','cifra' => '#', 'resumo' => 'Confesso a Deus · Edições CNBB · Frei Telles Ramon, O. de M. · Maria Diniz · Nete Ferreira · José Sérgio. A misericórdia no caminho da Páscoa - Cantos para o Tempo da Quaresma - Ano C. ℗ Edições CNBB. Released on: 2025-01-06. Canal Edições CNBB'],
    ['id' => '8K0ZTTh1hxA', 'titulo' => 'Confesso a Deus todo-poderoso (n. 675/C) [atualizado com a nova tradução do Missal Romano]','cifra' => '#', 'resumo' => 'Pastoral da Comunicação - Diocese de Erexim. @pascom.erexim'],
    ['id' => 'c2YdHhmQMWk', 'titulo' => 'CONFESSO A DEUS','cifra' => 'https://drive.google.com/file/d/1R9yKTfftBAdHdKOvJ02fj97xCU5K2a0V/view', 'resumo' => 'Letra: Missal Romano. Música: Adenor Leonardo Terra. Canal: @adenorleonardoterra6525'],     
    ['id' => 'KqIjkP_A_7Y', 'titulo' => 'CONFESSO A DEUS (Novo Missal)','cifra' => '#', 'resumo' => 'Fonte: @umcarismaticonamissa. Letra: Missal Romano. Música: Marcelo Oliveira. Participação especial: Marina Tavares (@marinactav - Soprano / Contralto).'],
    ['id' => 'd_P1OccmVSI', 'titulo' => 'Confesso a Deus | Novo Missal Romano (Ato Penitencial) ','cifra' => 'https://www.youtube.com/watch?v=d_P1OccmVSI', 'resumo' => 'Canal Capella Oficial - @bandacapella. ATENÇÃO: possui uma parte que é cantada / citada pelo celebrante. O vídeo é recomendado para quem já tem alguma experiência com o canto litúrgico, pois a parte cantada pelo celebrante pode ser um pouco difícil de acompanhar para iniciantes.'],
    ['id' => 'WZzaao5oPEA', 'titulo' => 'Confesso a Deus | Ato Penitencial (3° Edição do Missal Romano)','cifra' => 'https://drive.google.com/file/d/1PObaDhP-tz3NfA19wDzEKYBOJfFIoUgN/view', 'resumo' => 'Canal: Raquel Carpejani. Teclado: André Zamur. Voz: Raquel Carpejani. Captação e edição de áudio: Marcos Roberto. Edição de Vídeo: Mariana Llobet']
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
            <a style="width:100%" title="<?php echo $titulo;?>" class="btn btn-warning afastamobile" href="<?php echo $urlCifra ;?>" target="_blank"><i class="fa fa-book" aria-hidden="true"></i> Cifra</a>
            <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>  