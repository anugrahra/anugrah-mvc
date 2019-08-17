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

<div class="artikel">
	<div class="title">
		<h1><a href="<?=BASEURL;?>/blog/post/<?=$slug;?>"><?=$judul;?></a></h1>
	</div>
	<div class="aftertitle"><?= date('d F Y', strtotime($waktu)); ?> • <?=$readtime;?> • <a href="<?=BASEURL;?>/blog/tag/<?=$tag;?>"><?= $tag; ?></a></div>
	<p class="content"><?=$text;?></p>
</div>

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "<?=BASEURL;?>/blog/post/<?=$slug;?>";  // Replace PAGE_URL with your page's canonical URL variable
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