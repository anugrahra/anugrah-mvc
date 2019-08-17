<h1>Add New Episode</h1>

<br>

<form method="post" action="<?=BASEURL;?>/admin/addpodcastepisode">
	<label for="no_episode">No. Episode</label><br>
	<input type="number" name="no_episode" class="inputtext"><br>
	<label for="judul">Judul</label><br>
	<input type="text" name="judul" class="inputtext"><br>
	<label for="caption">Caption</label><br>
	<textarea name="caption" rows="5" class="inputtext"></textarea><br>
	<label for="note">Note</label><br>
	<textarea name="note" rows="20" class="inputtext"></textarea><br>
	<label for="anchor">Link Anchor</label><br>
	<input type="text" name="anchor" class="inputtext"><br><br>
	<input type="submit" name="submit" value="Post!" class="tombol">
</form>