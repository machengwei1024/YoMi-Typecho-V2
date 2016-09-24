#YoMi-Typecho-V2

Yomi-Typecho-V2是Yomi-Typecho-V1的重构版，使其更简洁，体验更好；

[主题专页](http://weic96.cn/project/typecho-yomi-v2/) —— 更完整的配置文档以及反馈主题网站；
[演示](http://blog.weic96.cn)

![](http://dl.weic96.cn/YoMi-Typecho/yomi-typecho-v2-pic1.png)


## 安装

```bash
下载主题后解压缩将里面的文件夹扔到你的Typecho安装目录里的 usr/themes/ 里，然后在网站后台启用；
```

## 配置

比如站点logo和github、微博这些社交图标的配置

##### 站点LOGO和社交图标

```bash
网站后台>控制台>外观>设置外观
```
![](http://dl.weic96.cn/YoMi-Typecho/yomi-typecho-v2-jc1.png)
接下来
![](http://dl.weic96.cn/YoMi-Typecho/yomi-typecho-v2-jc2.png)

##### 多说评论、多说分享、百度统计以及你自己额外的脚本
如果你自己需要加一些JavaScript，那么你需要在footer.php的下面代码区放入回调函数，如下图

![](http://dl.weic96.cn/YoMi-Typecho/yomi-typecho-v2-jc3.png)

如果需要多说的话你需要把footer.php最低部的
```bash
<script data-no-instant>
InstantClick.on('change', function() {
otherFunction();
});
InstantClick.init();
</script>
```
改为下面这样

```bash
<script data-no-instant>
InstantClick.on('change', function() {
otherFunction();
if ($('.ds-thread').length > 0) {
// 多说评论
if (typeof DUOSHUO !== 'undefined') DUOSHUO.EmbedThread('.ds-thread');
else $.getScript("http://dl.weic96.cn/duoshuo_embed.js"); }
// 多说分享
DUOSHUO.initSelector('.ds-share',{type:'ShareWidget'});
// 百度统计
if (typeof _hmt !== 'undefined')
_hmt.push(['_trackPageview', location.pathname + location.search]);
});
InstantClick.init();
</script>
```

## License

[MIT](https://git.oschina.net/weic96/YoMi-Typecho-V2/blob/master/LICENSE?dir=0&filepath=LICENSE&oid=d9854a60936634c9ad8c6b97cd10e3986ef1f511&sha=aeb5a898ff50c028aebf380dcad9dcecfa352e7f)

## 附加
本主题评论样式借用了Lpisme主题的评论；在此感谢；
