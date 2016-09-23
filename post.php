<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <article class="post-block animated fadeInDown">
        <header>
            <p><?php $this->title() ?></p>
            <div class="post-block-info">
                <a class="fa fa-user" href="">&nbsp;<?php $this->author(); ?></a> <span>|</span>
                <a class="fa fa-tags" href="">&nbsp;<?php $this->tags(',', true, '没有标签'); ?></a> <span>|</span>
                <a class="fa fa-folder-open" href="">&nbsp;<?php _e(''); ?><?php $this->category(','); ?></a> <span>|</span>
                <time class="fa fa-calendar" datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('Y/m/d'); ?></time>
            </div>
        </header>
        <section>
            <?php $this->content(); ?>
        </section>
        <footer>
            <div class="footer-hr"></div>
            <div class="post-copy">
                本文采用知识共享署名-非商业性使用-相同方式共享 <a href="https://creativecommons.org/licenses/by/4.0/">国际许可协议4.0</a> 进行许可；转载请注明 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> 。
            </div>

            <div class="post-share">
                <span class="post-share-text">分享到 <i class="fa fa-share-alt"></i></span>
                <a href="" class="fa fa-weibo share-weibo"></a>
                <a href="" class="fa fa-tencent-weibo share-txwb"></a>
                <a href="" class="fa fa-facebook share-facebook"></a>
                <a href="" class="fa fa-twitter share-twitter"></a>
                <a href="" class="fa fa-google-plus share-google"></a>
            </div>
            <div class="post-more">
				<ul>
					<li>上一篇: <?php $this->thePrev('&nbsp;%s','<span>&nbsp;木有了！</span>'); ?></li>
					<li>下一篇: <?php $this->theNext('&nbsp;%s','<span>&nbsp;还没造出来呢！</span>'); ?></li>
				</ul>
			</div>
        </footer>
        <div class="comments">
            <?php $this->need('comments.php'); ?>
        </div>
    </article>
<?php $this->need('footer.php'); ?>
