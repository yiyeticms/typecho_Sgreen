<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
<div class="main">
<div class="col-mb-12 col-8" id="main" role="main">
<h3 class="archive-title">
  <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章：'),
            'search'    =>  _t('包含关键字 %s 的文章：'),
            'tag'       =>  _t('标签 %s 下的文章：'),
            'author'    =>  _t('%s 发布的文章：')
        ), '', ''); ?>
</h3>
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
<div class="article">
  <div class="article-title"> <a href="<?php $this->permalink() ?>">
    <?php $this->title() ?>
    </a> </div>
  <small class="article-time">
  <?php _e('发表于：'); ?>
  <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
    <?php $this->date('Y-m-d'); ?>
  </time>
  |
  <?php _e('分类：'); ?>
  <?php $this->category(','); ?>
  | <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
  <?php $this->commentsNum('评论：0 ', '评论：1 ', '评论：%d '); ?>
  </a> | 阅读：
  <?php get_post_view($this) ?>
  </small>
  <div class="article-content">
    <?php $this->excerpt(135, '...'); ?>
    <p class="readmore"><a href="<?php $this->permalink() ?>">阅读全文&gt;&gt;</a></p>
  </div>
</div>
<?php endwhile; ?>
<?php else: ?>
<article class="post">
  <h2 class="post-title">
    <?php _e('没有找到内容'); ?>
  </h2>
</article>
<?php endif; ?>
<div class="page-url"> </div>
<div class="pagination">
  <?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
</div>
</div>
</div>
</content>
<?php $this->need('footer.php'); ?>