<?php
$anchor = $data['episode']['anchor'];
$caption = $data['episode']['caption'];
$note = $data['episode']['note'];
$slug = $data['episode']['slug'];
$no_episode = $data['episode']['no_episode'];
$judul = $data['episode']['judul'];

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
	<br>
	<b>Episode <a href="<?=$slug;?>"><?=$no_episode;?>.&nbsp;<?=$judul;?></a></b>
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

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "<?=BASEURL;?>/podcast/episode/<?=$slug;?>";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "<?=$slug;?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://anugrahclub.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>