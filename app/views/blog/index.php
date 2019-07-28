<?php foreach ($data['post'] as $post):

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
		<h1><a href="blog/post/<?=$post['slug'];?>"><?= $post['judul']; ?></a></h1>
	</div>
	<div class="aftertitle"><?= date('d F Y', strtotime($post['waktu'])); ?> • <?=$readtime;?> • <a href="blog/tag/<?=$post['tag'];?>"><?= $post['tag']; ?></a></div>
	<p class="content"><?=$text;?></p>
</div>

<?php endforeach; ?>

<div class="prevnext">
	<a href="blog/page/3/3">Prev ></a>
</div>