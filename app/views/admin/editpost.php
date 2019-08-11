<h1>Edit Post - "<?=$data['post']['judul'];?>"</h1>

<br>

<form method="post" action="<?=BASEURL;?>/admin/editthispost">
	<input type="hidden" name="id" class="inputtext" value="<?=$data['post']['id'];?>">
	<label for="judul">Judul</label><br>
	<input type="text" name="judul" class="inputtext" value="<?=$data['post']['judul'];?>"><br>
	<label for="isi">Isi</label><br>
	<textarea name="isi" rows="20" class="inputtext"><?=$data['post']['isi'];?></textarea><br>
	<label for="tag">Tag</label><br>
	<input type="text" name="tag" class="inputtext" value="<?=$data['post']['tag'];?>"><br><br>
	<input type="submit" name="submit" value="Edit!">
</form>
