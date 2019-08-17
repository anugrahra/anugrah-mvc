<?php
//paginasi
$pecahkan = rtrim($_SERVER['REQUEST_URI'], '/');
$pecahkan = explode('/', $pecahkan);

$start = $pecahkan[4];
$perPage = $pecahkan[5];

$startprev = $start + 3;
$startnext = $start - 3;

if($startnext < 0){
    $startnext = 0;
}

foreach ($data['post'] as $post):

//spasi paragraf
$pecah = explode("\r\n\r\n", $post['isi']);
$text = "";

for($i=0; $i<=count($pecah)-1; $i++)
{
    $part = str_replace($pecah[$i], "<p class='content'>".$pecah[$i]."</p><br>", $pecah[$i]);
    $text .= $part;
}

//estimasi waktu baca
$readtime = str_word_count($post['isi'])/200;
if ($readtime >= 1)
{
	$readtime = ceil($readtime) . ' min read';
} else {
	$readtime = ceil($readtime * 60) . ' sec read';
}

?>

<div class="artikel">
	<div class="title">
		<h1><a href="<?=BASEURL;?>/blog/post/<?=$post['slug'];?>"><?= $post['judul']; ?></a></h1>
	</div>
	<div class="aftertitle"><?= date('d F Y', strtotime($post['waktu'])); ?> • <?=$readtime;?> • <a href="<?=BASEURL;?>/blog/tag/<?=$post['tag'];?>"><?= $post['tag']; ?></a></div>
	<p class="content"><?=$text;?></p>
</div>

<?php endforeach; ?>

<div class="prevnext">
	<a href="<?=BASEURL;?>/blog/page/<?=$startnext;?>/3">< Next</a> <a href="<?=BASEURL;?>/blog/page/<?=$startprev;?>/3">Prev ></a>
</div>