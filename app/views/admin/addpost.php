<h1>Add New Post</h1>

<br>

<form method="post" action="<?=BASEURL;?>/admin/addblogpost">
	<label for="judul">Judul</label><br>
	<input type="text" name="judul" class="inputtext"><br>
	<label for="isi">Isi</label><br>
	<textarea name="isi" rows="20" class="inputtext"></textarea><br>
	<label for="tag">Tag</label><br>
	<input type="text" name="tag" class="inputtext"><br><br>
	<input type="submit" name="submit" value="Post!" class="tombol">
</form>