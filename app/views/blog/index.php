    <?php foreach ($data['post'] as $post) : ?>
    <a href="<?=BASEURL;?>/blog/post/<?=$post['slug'];?>"><h1><?=$post['judul'];?></h1></a>
    <p><?=$post['isi'];?></p>
<?php endforeach; ?>