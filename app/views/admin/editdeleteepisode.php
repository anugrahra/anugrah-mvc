<div class="tagTitle">
	<h1>Edit / Delete Episodes</h1>
</div>

<br>

<?php foreach ($data['list'] as $row): ?>

<ul>
<li class="list">
    <a href="<?=BASEURL;?>/podcast/<?=$row['slug'];?>" style="color: black;"><span style="color: grey;"><b>Episode <?= $row['no_episode']; ?>.</span> <?= $row['judul']; ?></b></a> | <a href="<?=BASEURL;?>/admin/editepisode/<?=$row['id'];?>" style="color: blue;">EDIT</a> | <a href="<?=BASEURL;?>/admin/deleteepisode/<?=$row['id'];?>" style="color: red;" onclick="return confirm('Delete [ <?= $row['judul']; ?> ] ?');">DELETE</a>
</li>
</ul>

<?php endforeach; ?>