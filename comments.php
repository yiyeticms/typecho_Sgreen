<div id="comments"> 
<?php if($this->allow('comment')): ?>
这是一个空白页面,如需使用评论框功能，请安装duoshuo插件。
<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 
</div>