<h1>Edit Episode</h1>

<br>

<form method="post" action="<?=BASEURL;?>/admin/editthisepisode">
	<input type="hidden" name="id" class="inputtext" value="<?=$data['episode']['id'];?>">
	<label for="no_episode">No Episode</label><br>
	<input type="number" name="no_episode" class="inputtext" value="<?=$data['episode']['no_episode'];?>"><br>
	<label for="judul">Judul</label><br>
	<input type="text" name="judul" class="inputtext" value="<?=$data['episode']['judul'];?>"><br>
	<label for="caption">Caption</label><br>
	<textarea name="caption" rows="5" class="inputtext"><?=$data['episode']['caption'];?></textarea><br>
	<label for="note">Note</label><br>
	<textarea name="note" rows="20" class="inputtext"><?=$data['episode']['note'];?></textarea><br>
	<label for="anchor">Link Anchor</label><br>
	<input type="text" name="anchor" class="inputtext" value="<?=$data['episode']['anchor'];?>"><br><br>
	<input type="submit" name="submit" value="Post!" class="tombol">
</form>
