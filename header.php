<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="en" xmlns="//www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
<?php $this->options->title(); ?><?php if($this->is('index')): ?> - <?php $this->options->description() ?><?php endif; ?></title>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom='); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/' . $this->options->css . '.css'); ?>">
<?php if ($this->options->Prism== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/prism.css'); ?>">
<?php endif; ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/iconfont.css'); ?>">
<?php if ($this->options->Music== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/player.css'); ?>">
<?php endif; ?>
<?php if ($this->options->Zoom == 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/zoom.css'); ?>">
<?php endif; ?>
<?php if ($this->options->Gress== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/gress.css'); ?>">
<script src="<?php $this->options->themeUrl('js/gress.js'); ?>"></script>
<?php endif; ?>
<link href="<?php $this->options->ico() ?>" rel="shortcut icon">
<?php if ($this->options->Demo== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/sweetalert.css'); ?>">
<script src="<?php $this->options->themeUrl('js/sweetalert.min.js'); ?>"></script>
<?php endif; ?>
</head>
<body>
<header>
  <div class="main">
    <div class="intro">
      <a href="javascript:;" id="demo"><img src="<?php $this->options->logoUrl(); ?>" class="intro-logo"></a><span class="intro-sitename"><a href="<?php $this->options->siteUrl(); ?>">
      <?php $this->options->title() ?>
      </a></span> <span class="intro-siteinfo">
      <?php $this->options->description() ?>
      </span> <span class="social"> <a href="<?php $this->options->qqlink(); ?>" target="_blank"><i class="iconfont icon-qq"></i></a> <a href="<?php $this->options->mlink(); ?>" target="_blank"><i class="iconfont icon-mail"></i></a> <a href="<?php $this->options->wlink(); ?>" target="_blank"><i class="iconfont icon-weibo"></i></a> <a href="<?php $this->options->glink(); ?>" target="_blank"><i class="iconfont icon-github"></i></a> <a href="<?php $this->options->qzlink(); ?>" target="_blank"><i class="iconfont icon-qzone"></i></a> </span> </div>
    <?php if ($this->options->search == 'able'): ?>
    <div class="search">
      <form role="search" method="get" class="search-form is-active" action="/index.php">
        <label> <input type="search" class="search-field" placeholder="在此搜索…" value="" name="s">
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