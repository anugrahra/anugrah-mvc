<?php
$judul = $data['post']['judul'];
$isi = $data['post']['isi'];
$slug = $data['post']['slug'];
$waktu = $data['post']['waktu'];
$tag = $data['post']['tag'];

// Spasi Paragraf
$pecah = explode("\r\n\r\n", $isi);
$text = "";
for($i=0; $i<=count($pecah)-1; $i++)
{
    $part = str_replace($pecah[$i], "<p class='content'>".$pecah[$i]."</p><br>", $pecah[$i]);
    $text .= $part;
}
//Estimasi Waktu Baca
$readtime = str_word_count($isi)/225;
if ($readtime >= 1)
{
	$readtime = ceil($readtime) . ' min read';
} else {
	$readtime = ceil($readtime * 60) . ' sec read';
}
?>

<div class="homelink">
	<p><a href="<?=BASEURL;?>">&lt; home</a></p>
	<p><a href="<?=BASEURL;?>/blog">&lt; blog</a> | <a href="../list">list of posts</a></p>
</div>

<div class="artikel">
	<div class="title">
		<h1><a href="<?=$slug;?>"><?=$judul;?></a></h1>
	</div>
	<div class="aftertitle"><?= date('d F Y', strtotime($waktu)); ?> • <?=$readtime;?> • <a href="../post/tag/<?=$tag;?>"><?= $tag; ?></a></div>
	<p class="content"><?=$text;?></p>
</div>

<hr>

<div class="homelink">
    <p><a href="<?=BASEURL;?>/blog">&lt; blog</a> | <a href="../list">list of posts</a></p>
	<p><a href="<?=BASEURL;?>">&lt; home</a></p>
</div>