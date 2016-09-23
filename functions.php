<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('LOGO地址'), _t('在这里填入一个图片的URL地址, 以在网站显示你的LOGO'));
    $form->addInput($logoUrl);
    $weixinUrl = new Typecho_Widget_Helper_Form_Element_Text('weixinUrl', NULL, NULL, _t('微信图片地址'), _t('在这里填入你微信二维码图片的URL地址, 以在网站右侧悬浮按钮处显示你的微信二维码'));
    $form->addInput($weixinUrl);
    //社交链接
	$socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('微博'), _t('在这里输入微博链接,带http://'));
	$form->addInput($socialweibo);
	$socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('GitHub'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialrss = new Typecho_Widget_Helper_Form_Element_Text('socialrss', NULL, NULL, _t('RSS'), _t('在这里输入RSS链接,带http://'));
	$form->addInput($socialrss);
	$socialemail = new Typecho_Widget_Helper_Form_Element_Text('socialemail', NULL, NULL, _t('电子邮箱'), _t('在这里输入电子邮箱,带mailto:例如 mailto:i@weic96.cn'));
	$form->addInput($socialemail);
    $socialcommenting = new Typecho_Widget_Helper_Form_Element_Text('socialcommenting', NULL, NULL, _t('留言板 (就是页面右侧漂浮的那个按钮)'), _t('在这里输入留言板链接 (你可以新建一个页面使用本主题自带的留言板模板),带http://'));
	$form->addInput($socialcommenting);
}

// 首页调用文章第一张图片；
//function thumbnail($content) {
//    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
//
//    if (preg_match_all($pattern, $content, $thumbUrl)) {
//        $imgSrc = $thumbUrl[1][0];
//        echo $imgSrc;
//    } else {
//        echo 'noimage.jpg';
//    }
//}

