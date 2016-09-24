<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <article class="archive-block animated fadeInDown">
        <div class="archive-info">
            <?php $this->archiveTitle(array(
				'category'  =>  _t('分类 <span class="archive-page-keyword">%s</span> 下的文章'),
				'search'    =>  _t('包含关键字 <span class="archive-page-keyword">%s</span> 的文章'),
				'tag'       =>  _t('标签 <span class="archive-page-keyword">%s</span> 下的文章'),
				'author'    =>  _t('<span class="archive-page-keyword">%s</span> 发布的文章')
			), '', ''); ?>
        </div>
    </article>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="index-block animated fadeInDown">
				<header class="index-block-header">
					<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</header>
				<section class="index-block-main">
					<?php $this->excerpt(130, ' ...'); ?>
				</section>
				<footer class="index-block-footerView">
					<a class="fa fa-user" href="">&nbsp;Weic</a> <span>|</span>
					<a class="fa fa-tags" href="">&nbsp;<?php $this->tags(',', true, '没有标签'); ?></a> <span>|</span>
					<a class="fa fa-folder-open" href="">&nbsp;<?php _e(''); ?><?php $this->category(','); ?></a> <span>|</span>
					<time class="fa fa-calendar" datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('F j, Y'); ?></time>
				</footer>
				<footer class="index-block-footerHidden">
					<time class="fa fa-calendar" datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('F j, Y'); ?></time>
				</footer>
			</article>
    	<?php endwhile; ?>
        <?php else: ?>
		<article class="archive-block-no animated fadeInDown">
				<section>
					哎呀！没有搜到你要的内容！
				</section>
			</article>
        <?php endif; ?>
    <article class="paging">
		<?php $this->pageNav('上一页', '下一页'); ?>
	</article>
	<?php $this->need('footer.php'); ?>
