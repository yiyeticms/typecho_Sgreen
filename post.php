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
          <?php _e(''); ?>
          <?php $this->tags('  ', true, 'none'); ?>
          </span> <span class="social-share">
          <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
          <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
          </span> </div>
        <div class="post-nav">
          <div class="post-nav-prev post-nav-item">
            <?php $this->thePrev('%s',''); ?>
          </div>
          <div class="post-nav-next post-nav-item">
            <?php $this->theNext('%s',''); ?>
          </div>
        </div>
      </div>
    </div>
    <?php $this->need('comments.php'); ?>
  </div>
  </div>
</content>
<?php $this->need('footer.php'); ?>