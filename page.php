<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
	<article class="page-block animated fadeInDown">
		<header>
			<p><?php $this->title() ?></p>
		</header>
		<section class="page-text-main">
            <div class="page-downhr"></div>
            <?php $this->content(); ?>
            <div class="page-uphr"></div>
        </section>
	</article>
<?php $this->need('footer.php'); ?>
