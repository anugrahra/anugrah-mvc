<?php
$anchor = $data['episode']['anchor'];
$caption = $data['episode']['caption'];
$note = $data['episode']['note'];

// Spasi Paragraf
$pecah = explode("\r\n\r\n", $note);
$text = "";
for($i=0; $i<=count($pecah)-1; $i++)
{
    $part = str_replace($pecah[$i], "<p class='content'>".$pecah[$i]."</p><br>", $pecah[$i]);
    $text .= $part;
}
?>

<header class="headerpodcast">
	<h1>Podcast <i>dekadensiotak</i></h1>
</header>
<div class="tagline">
	<p>My Code Learning Journal ☕ // New episode every weekend</p>
</div>

<div class="framePodcast">
	<iframe src="<?=$anchor;?>" height="100%" width="100%" frameborder="0" scrolling="no"></iframe>
	<p class="tengahPodcast"><?=$caption;?></p>
	<br>
</div>

<br>

<div class="mainpodcast">
	<p>Listen on:&nbsp;&nbsp;<a href="https://open.spotify.com/show/7CXYFUB7c8vx1OqYCSihaC" style="text-decoration: underline;"><img src="<?=BASEURL;?>/public/img/spotify.png" height="25px"></a>&nbsp;<a href="https://itunes.apple.com/us/podcast/dekadensiotak/id1438352066?mt=2&uo=4" style="text-decoration: underline;"><img src="<?=BASEURL;?>/public/img/apple_podcast.png" height="25px"></a></p>
</div>
<br>
<hr>

<br>

<div class="artikel">
	<div class="title">
		<h1>Note:</h1>
	</div>
	<br>
	<p class="content"><?=$text;?></p>
</div>