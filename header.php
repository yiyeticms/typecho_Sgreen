<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<title>
<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
<?php $this->options->title(); ?>
</title>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom=&rss1=&rss2='); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
<?php if ($this->options->Prism== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/prism.css'); ?>" data-no-instant>
<?php endif; ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/iconfont.css'); ?>">
<?php if ($this->options->Music== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/player.css'); ?>" data-no-instant>
<?php endif; ?>
<?php if ($this->options->Zoom == 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/zoom.css'); ?>" data-no-instant>
<?php endif; ?>
<link href="<?php $this->options->ico() ?>" rel="shortcut icon">
<?php $this->options->zdtj() ?>
</head>
<body>
<header>
  <div class="main">
    <div class="intro"> <img src="<?php $this->options->logoUrl(); ?>" class="intro-logo"/> <span class="intro-sitename"><a href="<?php $this->options->siteUrl(); ?>">
      <?php $this->options->title() ?>
      </a></span> <span class="intro-siteinfo">
      <?php $this->options->description() ?>
      </span> <span class="social"> <a href="<?php $this->options->qqlink(); ?>" target="_blank"><i class="iconfont icon-qq"></i></a> <a href="<?php $this->options->mlink(); ?>" target="_blank"><i class="iconfont icon-mail"></i></a> <a href="<?php $this->options->wlink(); ?>" target="_blank"><i class="iconfont icon-weibo"></i></a> <a href="<?php $this->options->glink(); ?>" target="_blank"><i class="iconfont icon-github"></i></a> <a href="<?php $this->options->qzlink(); ?>" target="_blank"><i class="iconfont icon-qzone"></i></a> </span> </div>
<?php if ($this->options->search == 'able'): ?>
    <div class="search">
      <form role="search" method="get" class="search-form is-active" action="/index.php">
        <label> <span class="screen-reader-text">搜索：</span>
        <input type="search" class="search-field" placeholder="在此搜索…" value="" name="s">
        </label>
      </form>
    </div>
<?php endif; ?>
    <nav>
      <div class="collapse"> <i class="iconfont icon-menu"></i></div>
      <ul class="bar">
        <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <li><a<?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>">
          <?php $pages->title(); ?>
          </a></li>
        <?php endwhile; ?>
      </ul>
    </nav>
  </div>
</header>