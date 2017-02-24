<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
<div class="main">
	<div class="article">
		<div class="article-title">
			<?php $this->title() ?>		</div>
		<div class="article-content">
		<?php $this->content(); ?></div>
<div class="post-nav-comments">
</div>
<content>
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>