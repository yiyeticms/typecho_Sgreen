<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if ($this->options->Music== 'able'): ?>
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
<?php if ($this->options->baiduJavaScript == 'disable'): ?>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<?php endif; ?>
<?php if ($this->options->baiduJavaScript == 'able'): ?>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<?php endif; ?>
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
<?php endif; ?>
<?php if ($this->options->Zoom == 'able'): ?>
<script type="text/javascript">
        var setupContents = function () {
            $(".article img").each(function() {
                $(this).attr('data-action', 'zoom');
            });
          
        };
 setupContents();
</script>
<?php endif; ?>
<?php if ($this->options->Copyright == 'able'): ?>
<script>
document.body.addEventListener('copy', function (e) {
    if (window.getSelection().toString() && window.getSelection().toString().length > 42) {
        setClipboardText(e);
        alert('商业转载请联系作者获得授权，非商业转载请注明出处，谢谢合作。');
    }
}); 
function setClipboardText(event) {
    var clipboardData = event.clipboardData || window.clipboardData;
    if (clipboardData) {
        event.preventDefault();
        var htmlData = ''
            + '著作权归作者所有。<br>'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。<br>'
            + '作者：<?php $this->author() ?><br>'
            + '链接：' + window.location.href + '<br>'
            + '来源：<?php $this->options->siteUrl(); ?><br><br>'
            + window.getSelection().toString();
        var textData = ''
            + '著作权归作者所有。\n'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。\n'
            + '作者：<?php $this->author() ?>\n'
            + '链接：' + window.location.href + '\n'
            + '来源：<?php $this->options->siteUrl(); ?>\n\n'
            + window.getSelection().toString();
 
        clipboardData.setData('text/html', htmlData);
        clipboardData.setData('text/plain',textData);
    }
}
</script>
<?php endif; ?>
<?php if ($this->options->Title== 'able'): ?>
<script type="text/javascript"> 
function scroll() { 
var titleInfo = document.title;  
var firstInfo = titleInfo.charAt(0); 
var lastInfo = titleInfo.substring(1, titleInfo.length); 
document.title = lastInfo + firstInfo; 
} 
setInterval("scroll()", 500); 
</script>
<?php endif; ?>
<?php if ($this->options->Lazyload== 'able'): ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/lazyload.js'); ?>"></script>
<script type="text/javascript">
jQuery(document).ready(
function($){
$("img").lazyload({
     placeholder : "<?php $this->options->themeUrl('img/loading.gif'); ?>",
     effect      : "fadeIn"
});
});
</script>
<?php endif; ?>
<?php if ($this->options->Gress== 'able'): ?>
<script>
    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);

    $("#b-0").click(function() { NProgress.start(); });
    $("#b-40").click(function() { NProgress.set(0.4); });
    $("#b-inc").click(function() { NProgress.inc(); });
    $("#b-100").click(function() { NProgress.done(); });
</script>
<?php endif; ?>
<footer>
<p>
    <?php if ($this->options->Webdt== 'able'): ?>
    <a href="<?php $this->options->zddt() ?>" target="_blank">站点地图</a> <a href="<?php $this->options->wzdt() ?>" target="_blank">网站地图</a>
    <?php endif; ?>
    <?php if ($this->options->Idc== 'able'): ?>
    <a href="http://www.miitbeian.gov.cn" target="_blank">
    <?php $this->options->idc() ?>
    </a><br>
    <?php endif; ?>
    Copyright &copy; 2015-2017 <a href="<?php $this->options->siteUrl(); ?>">
    <?php $this->options->title() ?>
    </a> <br>
    Powered by <a href="http://typecho.org/">Typecho</a> 自豪的采用<a href="http://yiyeti.cc/zheteng/132.html" target="_blank">Sgreen</a>主题
</p>
  <?php $this->footer(); ?>
</footer>
<div class="toTop">TOP</div>
<?php if ($this->options->baiduJavaScript == 'disable'): ?>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<?php endif; ?>
<?php if ($this->options->baiduJavaScript == 'able'): ?>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<?php endif; ?>
<script src="<?php $this->options->themeUrl('js/all.js'); ?>"></script>
<?php if ($this->options->Prism== 'able'): ?>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>
<?php endif; ?>
<?php if ($this->options->Zoom == 'able'): ?>
<script src="<?php $this->options->themeUrl('js/zoom.min.js'); ?>"></script>
<?php endif; ?>
</body>
</html>