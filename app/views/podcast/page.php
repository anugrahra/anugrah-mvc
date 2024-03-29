<header class="headerpodcast">
	<h1>Podcast <i>dekadensiotak</i></h1>
</header>
<div class="tagline">
	<p>My Code Learning Journal ☕ // New episode every weekend</p>
</div>

<?php
//paginasi
$pecahkan = rtrim($_SERVER['REQUEST_URI'], '/');
$pecahkan = explode('/', $pecahkan);

$start = $pecahkan[4];
$perPage = $pecahkan[5];

$startprev = $start + 10;
$startnext = $start - 10;

if($startnext < 0){
    $startnext = 0;
}

foreach ($data['recent'] as $recent) : ?>
	<p><b>Episode <a href="<?=$recent['slug'];?>"><?=$recent['no_episode'];?>.&nbsp;<?=$recent['judul'];?></a></b></p>
	<div class="framePodcast">
		<iframe src="<?=$recent['anchor'];?>" height="100%" width="100%" frameborder="0" scrolling="no"></iframe>
		<p class="tengahPodcast"><?=$recent['caption'];?></p>
		<br>
	</div>
<?php endforeach; ?>

<br>

<div class="mainpodcast">
	<p>Listen on:&nbsp;&nbsp;<a href="https://open.spotify.com/show/7CXYFUB7c8vx1OqYCSihaC" style="text-decoration: underline;"><img src="<?=BASEURL;?>/public/img/spotify.png" height="25px"></a>&nbsp;<a href="https://itunes.apple.com/us/podcast/dekadensiotak/id1438352066?mt=2&uo=4" style="text-decoration: underline;"><img src="<?=BASEURL;?>/public/img/apple_podcast.png" height="25px"></a></p>
</div>
<br>
<hr>
<br>
<h1 class="tengah">List of Episodes</h1>

<br>

<?php foreach ($data['episodes'] as $episodes) : ?>
	<div class="listepisodes">
		<h1 class="titlepodcast"><a href="<?=BASEURL;?>/podcast/<?=$episodes['slug'];?>"><?=$episodes['no_episode'];?>.&nbsp;<?=$episodes['judul'];?></a></h1>
		<p class="captionpodcast"><?=$episodes['caption'];?></p>
	</div>
<?php endforeach; ?>

<br>

<div class="prevnext">
	<a href="<?=BASEURL;?>/podcast/page/<?=$startnext;?>/10">< Next</a> <a href="<?=BASEURL;?>/podcast/page/<?=$startprev;?>/10">Prev ></a>
</div>