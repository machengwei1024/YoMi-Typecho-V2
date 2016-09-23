<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	</div>
	<div style="clear:both;"></div>
</div>
<footer class="footer">
		<p>Copyright &copy; 2015-2016 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
		Powered by <a href="http://typecho.org" target="_blank">Typecho</a>, Themes <a href="http://weic96.cn/project/typecho-yomi-v2" target="_blank">YoMi-V2</a> & By : <a href="http://weic96.cn" target="_blank">Weic</a>
	</footer>
<?php $this->footer(); ?>
<a id="back-btn" class="animated bounceInDown" href="javascript:;"></a>
	<script src="<?php $this->options->themeUrl('js/main.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>" data-no-instant></script>
	<script data-no-instant>
		InstantClick.on('change', function() {
		otherFunction();
		});
		InstantClick.init();
	</script>
</body>
</html>
