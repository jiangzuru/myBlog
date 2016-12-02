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
                    <a href="/Index/writeBlog" ><h4 class="white">添加新博客</h4></a>
                </div>
            </div>
        </div>
        <div id="wrapper">
            <div id="main">
            <table>
                <tr>
                    <th class="">博客名</th>
                    <th class="">发布时间</th>
                </tr>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td class="blogtd"><a href="/Blog/index/detail?id=<?php echo ($vo["ArticleID"]); ?>"><?php echo ($vo["ArticleTitle"]); ?></a></td>
                        <td><?php echo ($vo["PostTime"]); ?></td>
                        <td><a href="/admin/deleteBlog?id=<?php echo ($vo["ArticleID"]); ?>">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            </div>
        </div>
<script type="text/javascript" src="/Public/Js/jquery-1.8.3.min.js"></script>
</body>
</html>






<!-- <!DOCTYPE html>
<html>
<head>
    <title>博客后台管理</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/blog.css">
</head>
<body>
    <div class="bg">
        <div class="navbar">

        </div>
        <div class="top">
            <h2 class="white">&nbsp江祖如的博客</h2>
            </hr>
            <h2 class="white">&nbsp博客后台</h2>
            <hr>
        </div>
        <div>
            <table>
                <tr>
                    <th class="white">博客名</th>
                    <th class="white">发布时间</th>
                </tr>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td class="blogtd"><a class="white" href="/Blog/index/showBlog?id=<?php echo ($vo["ArticleID"]); ?>"><?php echo ($vo["ArticleTitle"]); ?></a></td>
                        <td class="blogtd white"><?php echo ($vo["PostTime"]); ?></td>
                        <td class="blogtd white"><a class="white" href="#">编辑</a></td>
                        <td class="blogtd white"><a class="white" href="#">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </div>
<script type="text/javascript" src="/Public/Js/jquery-1.8.3.min.js"></script>
</body>
</html> -->