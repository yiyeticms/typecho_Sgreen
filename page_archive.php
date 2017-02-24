<?php
/**
 * 文章存档
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
		<div class="main">
			<div class="article">
				<div class="article-title">
				<?php $this->title() ?></div>
				<div class="article-content">
            <?php 
                $stat = Typecho_Widget::widget('Widget_Stat');
                Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
                $year=0; $mon=0; $i=0; $j=0;
                $output = '<div class="archives">';
                while($archives->next()){
                    $year_tmp = date('Y',$archives->created);
                    $mon_tmp = date('m',$archives->created);
                    $y=$year; $m=$mon;
                    if ($year > $year_tmp || $mon > $mon_tmp) {
                        $output .= '</ul></div>';
                    }
                    if ($year != $year_tmp || $mon != $mon_tmp) {
                        $year = $year_tmp;
                        $mon = $mon_tmp;
                        $output .= '<div class="archives-item"><blockquote><p><strong>'.date('Y年m月',$archives->created).'</strong></p></blockquote><div class="archives_list">'; //输出年份
                    }
                    $output .= '<p>'.date('d日',$archives->created).' <a href="'.$archives->permalink .'">'. $archives->title .'</a></p>'; //输出文章
                }
                $output .= '</div></div></div>';
                echo $output;
            ?>
        </div>
</div>
<div class="post-nav-comments">
</div>
</content>
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>