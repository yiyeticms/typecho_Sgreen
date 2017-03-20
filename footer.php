<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="QPlayer">
  <div id="pContent">
    <div id="player"> <span class="cover"></span>
      <div class="ctrl">
        <div class="musicTag marquee"> <strong>Title</strong> <span> - </span> <span class="artist">Artist</span> </div>
        <div class="progress">
          <div class="timer left">0:00</div>
          <div class="contr">
            <div class="rewind icon"></div>
            <div class="playback icon"></div>
            <div class="fastforward icon"></div>
          </div>
          <div class="right">
            <div class="liebiao icon"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="ssBtn">
      <div class="adf"></div>
    </div>
  </div>
  <ol id="playlist">
  </ol>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('js/jquery.marquee.min.js'); ?>"></script>
<script>
	var	playlist = [	
<?php $this->options->music() ?>
];
  var isRotate = 1;
  var autoplay = <?php $this->options->zdbf() ?>;  
</script>
<script src="<?php $this->options->themeUrl('js/player.js'); ?>"></script>
<script>
function bgChange(){
	var lis= $('.lib');
	for(var i=0; i<lis.length; i+=2)
	lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
}
window.onload = bgChange;
</script>
<script type="text/javascript">
        var setupContents = function () {
            $(".article-content img").each(function() {
                $(this).attr('data-action', 'zoom');
            });
          
        };
 setupContents();
</script>
<footer>
  <p>
<a href="<?php $this->options->zddt() ?>" target="_blank">站点地图</a> <a href="<?php $this->options->wzdt() ?>" target="_blank">网站地图</a><br>
Copyright &copy; 2015-2017 <a href="<?php $this->options->siteUrl(); ?>">
    <?php $this->options->title() ?>
    </a> <br>
    Powered by <a href="http://typecho.org/">Typecho</a>自豪的采用<a href="http://yiyeti.cc/zheteng/132.html" target="_blank">Sgreen</a>主题</p>
  <?php $this->footer(); ?>
</footer>
<div class="toTop">TOP</div>
<script src="<?php $this->options->themeUrl('js/all.js'); ?>"></script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/zoom.min.js'); ?>"></script>
</body>
</html>