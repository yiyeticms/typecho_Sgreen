<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
<div class="main">
	<div class="article">
		<div class="article-title">
		哎哟～您访问的页面弄丢了	</div>
		<div class="article-content">
		<p><?php _e('随便逛逛: '); ?></p>
			<ul>
				<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
			</ul>	
</div>
</div>
<?php $this->need('footer.php'); ?>
