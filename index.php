<?php
/**
 * 一款简约时尚吊炸天风格的主题 (YoMi-Typecho-V1的重构版；如需体验V1请到作者网站或Github下载,放心不收钱的！)
 * 
 * @package Yomi-Typecho-V2 
 * @author Weic (YoMi Studio)
 * @version 2.0
 * @link http://weic96.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
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
    <article class="paging">
		<?php $this->pageNav('上一页', '下一页'); ?>
	</article>

<?php $this->need('footer.php'); ?>
