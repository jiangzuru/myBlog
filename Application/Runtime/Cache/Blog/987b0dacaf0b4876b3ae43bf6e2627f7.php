<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>博客后台管理</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/base.css">
    <link rel="stylesheet" type="text/css" href="/Public/Css/visitor.css">
</head>
<body>
        <div id="header">
            <div id="branding">
                <div id="log">
                    <a href="/Index/index"><h2 id="log">江祖如的博客</h2></a>
                </div>
                <div id="admin">
                    <a href="/Admin/index" ><h4 class="white">管理员入口</h4></a>
                </div>
            </div>
        </div>
        <div id="wrapper">
            <div id="main">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="content">
                        <h3><a href="/Index/detail?id=<?php echo ($vo["ArticleID"]); ?>"><?php echo ($vo["ArticleTitle"]); ?></a></h3>
                        <abbr id="smaller"><?php echo ($vo["PostTime"]); ?>&nbsp|&nbsp浏览次数:<?php echo ($vo["ArticlePv"]); ?></abbr>
                        <?php echo ($vo["ArticleContent"]); ?>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
<script type="text/javascript" src="/Public/Js/jquery-1.8.3.min.js"></script>
</body>
</html>