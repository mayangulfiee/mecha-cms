<?php Shield::chunk('header'); ?>
<?php Shield::chunk('sidebar'); ?>
<div class="blog-main">
  <article class="post" id="post-<?php echo $article->id; ?>">
    <?php Shield::chunk('article.header'); ?>
    <?php Shield::chunk('article.body'); ?>
    <?php Shield::chunk('article.footer'); ?>
  </article>
  <?php Shield::chunk('pager'); ?>
  <?php Shield::chunk('comments'); ?>
</div>
<?php Shield::chunk('footer'); ?>