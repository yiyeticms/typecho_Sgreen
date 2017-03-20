<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<content>
  <div class="main">
    <div class="article">
      <div class="article-title">
        <?php $this->title() ?>
      </div>
      <small class="article-time">
      <?php _e('发表于： '); ?>
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
        <?php $this->date('Y-m-d'); ?>
      </time>
      |
      <?php _e('分类： '); ?>
      <?php $this->category(','); ?>
      | <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
      <?php $this->commentsNum('评论：0 ', '评论：1 ', '评论：%d '); ?>
      </a> | 阅读：
      <?php get_post_view($this) ?>
      </small>
      <div class="article-content">
        <?php $this->content(); ?>
      </div>
      <div class="post-footer">
        <div class=" post-tags">
          <div class="tag">
            <?php _e(''); ?>
            <?php $this->tags('  ', true, 'none'); ?>
          </div>
          <div class="post-nav">
            <li class="prev">
              <?php $this->thePrev('«  %s',''); ?>
            </li>
            <li class="next">
              <?php $this->theNext('%s  »',''); ?>
            </li>
          </div>
        </div>
      </div>
      <?php $this->need('comments.php'); ?>
    </div>
  </div>
</content>
<?php $this->need('footer.php'); ?>