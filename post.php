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
      <?php _e('分类：'); ?>
      <?php $this->category(','); ?>
      |
      <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
      <?php $this->commentsNum('评论：0 ', '评论：1 ', '评论：%d '); ?>
      </a> | 阅读：
      <?php get_post_view($this) ?>
      </small>
      <div class="article-content">
        <?php $this->content(); ?>
        </div>
      <?php if ($this->options->Reward == 'able'): ?>
      <div style="padding: 10px 0; margin: 20px auto; width: 90%; font-size:16px; text-align: center;">
        <div>
          <?php $this->options->wzdsw(); ?>
        </div>
        <label id="rewardButton" disable="enable" onClick="var qr = document.getElementById('QR'); if (qr.style.display === 'none') {qr.style.display='block';} else {qr.style.display='none'}"> <span class="reward-button"> 赞赏作者</span> </label>
        <div id="QR" style="display: none;">
          <div id="wechat" style="display: inline-block"> <img id="wechat_qr" src="<?php $this->options->wechat(); ?>">
            <p>微信打赏</p>
          </div>
          <div id="alipay" style="display: inline-block"> <img id="alipay_qr" src="<?php $this->options->zhifubao(); ?>">
            <p>支付宝打赏</p>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="post-footer">
        <div class=" post-tags"> <span class="tag">
          <?php _e('标签：'); ?>
          <?php $this->tags('  ', true, '暂无标签'); ?>
          </span>  </div>
        <div class="post-nav">
          <div class="prev post-nav-item">
            <?php $this->thePrev('%s','<a href="javascript:;" title="没有上一篇文章了">没有上一篇了</a>'); ?>
          </div>
          <div class="next post-nav-item">
            <?php $this->theNext('%s','<a href="javascript:;" title="没有下一篇文章了">没有下一篇了</a>'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php $this->need('comments.php'); ?>
  </div>
</content>
<?php $this->need('footer.php'); ?>