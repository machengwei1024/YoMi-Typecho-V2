<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
    <?php $this->header(); ?>
</head>
<body id="container">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="mask"></div>
<a id="weixin" class=" animated6s bounceInRight fa fa-weixin" href="javascript:;"></a>
<div id="weixin-img">
    <?php if ($this->options->weixinUrl): ?>
		<img src="<?php $this->options->weixinUrl() ?>">
    <?php endif; ?>
</div>
<?php if ($this->options->socialcommenting): ?>
<a id="commenting" class=" animated6s bounceInRight fa fa-commenting" href="<?php $this->options->socialcommenting(); ?>"></a>
<?php endif; ?>
<a id="top" class=" animated6s bounceInRight fa fa-chevron-up" href="javascript:;"></a>
    <header id="header">
		<div class="header-cross animated flipInX">
			<!-- 头部导航栏标题 -->
			<div class="cross-title">
				<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
			</div>
			<!-- 头部导航栏按钮 -->
			<div class="cross-bar">
				<a class="header-icon fa fa-search" id="search-btn" href="javascript:;"></a>
				<a class="header-icon fa fa-navicon" id="navbar-btn" href="javascript:;"></a>
			</div>
			<!-- <div style="clear:both;"></div> -->
		</div>
	</header>
    <div id="header-vertical">
		<div class="vertical-header">
			<a id="vertical-close" class="fa fa-close" href="javascript:;"></a>
			<div style="clear:both;"></div>
			<div class="vertical-header-logo">
                <?php if ($this->options->logoUrl): ?>
				<img src="<?php $this->options->logoUrl() ?>">
                <?php endif; ?>
			</div>
			<div class="vertical-icon">
                <?php if ($this->options->socialweibo): ?>
                    <a class="header-weibo fa fa-weibo" href="<?php $this->options->socialweibo(); ?>" target="_blank"></a>
                <?php endif; ?>
                <?php if ($this->options->socialgithub): ?>   
                    <a class="header-icon fa fa-github" href="<?php $this->options->socialgithub(); ?>" target="_blank"></a>
                <?php endif; ?>
                <?php if ($this->options->socialrss): ?>    
                    <a class="header-icon fa fa-rss" href="<?php $this->options->socialrss(); ?>" target="_blank"></a>
                <?php endif; ?>
                <?php if ($this->options->socialemail): ?>
                    <a class="header-icon fa fa-envelope" href="<?php $this->options->socialemail(); ?>" target="_blank"></a>
                <?php endif; ?>
			</div>
		</div>
		<div class="vertical-bar">
			<ul>
				<li>
                    <a<?php if($this->is('index')): ?><?php endif; ?> class="fa fa-home" href="<?php $this->options->siteUrl(); ?>">&nbsp;&nbsp;<?php _e('首页'); ?></a>
                </li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
				<li>                    
                    <a<?php if($this->is('page', $pages->slug)): ?><?php endif; ?> class="fa fa-rocket" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">&nbsp;&nbsp;<?php $pages->title(); ?></a>
                </li>
                <?php endwhile; ?>
			</ul>
		</div>
	</div>
	<form id="header-search" method="post" action="./" role="search">
        <input id="search-input" type="text" name="s" placeholder="<?php _e('输入关键字后请用洪荒之力猛敲回车键！'); ?>">
	</form>
<div class="container">
		<div class="index-main">
    
    
