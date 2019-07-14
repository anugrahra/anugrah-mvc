<div class="homelinkblog">
	<p><a href="<?=BASEURL;?>">&lt; home</a></p>
	<p><a href="<?=BASEURL;?>/blog">&lt; blog</a></p>
</div>

<div class="tagTitle">
	<h1>Posts on Blog&nbsp;&nbsp;</h1>
</div>

<br>

<?php foreach ($data['list'] as $row):

//Estimasi Waktu Baca
$readtime = str_word_count($row['isi'])/200;
if ($readtime >= 1)
{
    $readtime = ceil($readtime) . ' min read';
} else {
    $readtime = ceil($readtime * 60) . ' sec read';
}
?>
<ul>
<li class="list">
    <a href="blog/<?=$row['slug'];?>" style="color: black;"><b><?= $row['judul']; ?></b></a> | <span style="color: grey;"><?= date('d F Y', strtotime($row['waktu'])); ?> • <?=$readtime;?> • </span><a href="post/tag/<?=$row['tag'];?>" style="color: orange;"><b><?= $row['tag']; ?></b></a>
</li>
</ul>
<?php endforeach; ?>

<div class="homelinkblog">
	<p><a href="<?=BASEURL;?>/blog">&lt; blog</a></p>
   	<p><a href="<?=BASEURL;?>">&lt; home</a></p>
</div>