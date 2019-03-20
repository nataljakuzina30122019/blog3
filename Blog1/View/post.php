<?php require 'inc/header.php' ?>
<?php if (empty($this->oPost)) : ?>
<p class="error" The post can't be be found!</p>
<?php else: ?>
<article>
    <time datetime="<?=$this->oPost->createdDate ?>"pubdate="pubdate"></time>
    <h1><?= htmlspecialchars($this->oPost->title) ?></h1>
    <p><?=n12br(htmlspecialchars($this->oPost->body)) ?></p>
    <p class="left small italic">Posted on <?=$this->oPost->createdDate?></p>
  <?php
$oPost = $this->oPost;
require 'inc/control_buton.php';
?>
</article>
<?php endif ?>
<?phprequire 'inc/footer.php' ?>


