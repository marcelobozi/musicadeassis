<?php
// Exemplo de como você renderizaria isso no seu servidor Linux
$videos = [
    ['id' => 'fjhLceP2-Cg', 'titulo' => 'Santo (Ordinário da Missa - Fr. Wanderson Freitas, O.Carm.)','cifra' => 'https://drive.google.com/file/d/12rhlUuDxTzwCLpT7H6ibxX-KTfxUuGat/view', 'resumo' => 'Santo (Ordinário da Missa - Fr. Wanderson Freitas, O.Carm.)'],
    ['id' => 'EJKRAGJbTsE', 'titulo' => 'Santo | Litúrgico | Missal Romano','cifra' => 'https://encurtador.com.br/zAPj5', 'resumo' => 'Santo. Missal Romano 3ª Ed. Melodia: Vanessa Lourenci Piaz. Canal: @vanessapiaz'],
    ['id' => 'StAvOkX_vmI', 'titulo' => 'Santo: Texto Missal Romano/ Música: Leandro Evaristo','cifra' => '#', 'resumo' => 'Canal: Leandro Música Litúrgica: @leandro.ferreira630. 34 Encontro de Música Litúrgica na PUC Ipiranga SP'],
    ['id' => 'aO9jP_Gl2HI', 'titulo' => 'SANTO, SANTO, SANTO, SENHOR DEUS DO UNIVERSO (Pe. Leomar Nascimento)','cifra' => '#', 'resumo' => 'Canto Arquidiocese de Goiânia. MATERIAL PRODUZIDO COM A AUTORIZAÇÃO DA CONFERÊNCIA NACIONAL DOS BISPOS DO BRASIL (CNBB). GRAVAÇÃO COM FINALIDADE PASTORAL E DIDÁTICA – SEM FINS LUCRATIVOS. Áudio e partitura: 41º Curso de Canto Litúrgico. Contato: cantoarquidiocesedegoiania@gmail.com'],
    ['id' => 'x4r1_VxrhUg', 'titulo' => 'Santo, Santo, Santo! | Pe. Wallison Rodrigues','cifra' => 'https://drive.google.com/file/d/1oUUffdsDQL4iCipSwDSORS18OsPHIXyZ/view', 'resumo' => 'Pe. Wallison Rodrigues. Canal: @PeWallisonRodrigues'],
    ['id' => 'Op5chmCZkuY', 'titulo' => 'Santo - I','cifra' => '#', 'resumo' => 'Canal: Cantos do Hinário Litúrgico da Cnbb - Tema. Santo - I · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: Joaquim Fonseca de Souza. Lyricist: Direitos Reservados. Lyricist: Joaquim Fonseca de Souza'],
    ['id' => 'J_acC2bXTa0', 'titulo' => 'Santo - II','cifra' => '#', 'resumo' => 'Canal: Cantos do Hinário Litúrgico da Cnbb - Tema. Santo - II · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: Joaquim Fonseca de Souza. Lyricist: Direitos Reservados. Lyricist: Joaquim Fonseca de Souza'],
    ['id' => 'M6_YVlxEiD0', 'titulo' => 'Santo - III','cifra' => '#', 'resumo' => 'Canal: Cantos do Hinário Litúrgico da Cnbb - Tema. Santo - III · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: Adolfo Temme. Lyricist: Direitos Reservados. Lyricist: Adolfo Temme'],
    ['id' => 'fTdeOeX9sw0', 'titulo' => 'Santo - IV','cifra' => '#', 'resumo' => 'Canal: Cantos do Hinário Litúrgico da Cnbb - Tema. Santo - IV · Cantos do Hinário Litúrgico da CNBB. Partes fixas do Ordinário da Missa. ℗ Paulus digital. Released on: 2005-06-24. Composer: Direitos Reservados. Composer: Adolfo Temme. Lyricist: Direitos Reservados. Lyricist: Adolfo Temme'],
    ['id' => 'pNjBKMJbbkc', 'titulo' => 'Santo, Santo, Santo','cifra' => '#', 'resumo' => 'Coro da Arquidiocese de Campinas, Schola Cantorum do Pateo do Collegio. Canal: @paulinascomep. L.: Missal Romano. M.: Marco Frisina. Adapt.: Clayton Dias '],
    ['id' => '5H1PyuRNVqs', 'titulo' => 'TEMPO COMUM | Santo I','cifra' => '#', 'resumo' => 'Música: Angelo La Serra. Canal: @angelo.laserra'],
    ['id' => 'f5ROg7e8ylY', 'titulo' => 'Santo (Ordinário da Missa | Liturgia Eucarística)','cifra' => 'https://drive.google.com/file/d/1z0uqcjRro3EVlXkSy1RzD4Dc7DMfKn5F/view', 'resumo' => 'Comissão Diocesana para a Música Litúrgica - SJBV. Texto: Missal Romano. Música: Paulo Kemp e Thayssa Godêncio. Gravação e arranjos: Marcus Vinícius Lima. Vinheta Bachiana: José Renato Barzon'],
    ['id' => 'nvbThlgVQwE', 'titulo' => 'Santo - Samara e Rodrigo (Projeto Sagrado)','cifra' => 'https://drive.google.com/drive/folders/1jEOI86loZz0TZvBTrB39JYEkiP1QEljd', 'resumo' => 'Canal: Samara Marques'],
    ['id' => '4_N83M8Hpqk', 'titulo' => 'SANTO II - Samara e Rodrigo | Música Litúrgica.','cifra' => 'https://drive.google.com/file/d/19YwUT_53mHOJhM8ZsHpO8poggtJ8jEbU/view', 'resumo' => 'Canal: Samara Marques'], 
    ['id' => 'F0btAWcMqN4', 'titulo' => 'Santo, Santo, Senhor (Música: Frei Luiz Turra)','cifra' => '#', 'resumo' => 'Canto Arquidiocese de Goiânia. MATERIAL PRODUZIDO COM A AUTORIZAÇÃO DA CONFERÊNCIA NACIONAL DOS BISPOS DO BRASIL (CNBB). GRAVAÇÃO COM FINALIDADE PASTORAL E DIDÁTICA – SEM FINS LUCRATIVOS. Áudio e partitura: 43º Curso de Canto Litúrgico. Contato: cantoarquidiocesedegoiania@gmail.com'],
    ['id' => 'dCVDclSXUZ4', 'titulo' => 'Santo [F] (Hinário Litúrgico da CNBB 2019, Ano C)','cifra' => 'https://drive.google.com/file/d/1qJntpy6VAdMOkh7VdT8jAkcf8xYiAt_c/view', 'resumo' => 'Santo [F]. L: Missal Romano. M: Fr. Telles Ramon do Nascimento, O. de M.'],
    ['id' => 'UD0aRtx5uCg', 'titulo' => 'SANTO III','cifra' => '#', 'resumo' => 'X'],
    ['id' => 'a61MQPloaZ0', 'titulo' => 'Santo, Santo, Santo | Em Mim','cifra' => 'https://www.youtube.com/watch?v=a61MQPloaZ0', 'resumo' => 'Comissão de Liturgia | Música Litúrgica | ArquiPoa. @musicaliturgicaarquipoa'],
    ['id' => 'F17srVQX7DM', 'titulo' => 'Santo Nº 2 - Com Letra do Missal Romano','cifra' => 'https://www.youtube.com/watch?v=F17srVQX7DM', 'resumo' => 'Santo Nº 2 - Com Letra do Missal Romano. Autor: Luiz Eduardo Silva. @musicaeservico'],
    ['id' => 'dsCbncnQfNs', 'titulo' => 'SANTO Nº 3 - Com Letra do Missal Romano','cifra' => 'https://www.youtube.com/watch?v=dsCbncnQfNs', 'resumo' => 'SANTO Nº 3. Com Letra do Missal Romano. Ordinário da Missa - Liturgia Eucarística. Música: Paulo Kemp e Thayssa Godêncio. Gravação: Paula Pigolli e Marcus Vinícius Lima. Fonte: @cdmlsjbv . @musicaeservico . ']
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