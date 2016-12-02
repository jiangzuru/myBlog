<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>添加新博客</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/base.css">
    <link rel="stylesheet" type="text/css" href="/Public/Css/visitor.css">
    <script type="text/javascript" src="/Public/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div id="header">
        <div id="branding">
            <div id="log">
                <a href="/Index/index"><h2 id="log">江祖如的博客</h2></a>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <div id="main">
            <form role="form" id="blog_article" action="/index.php/Blog/index/addBlog" method="POST">
                <div class="top">
                    <h2>&nbsp添加文章</h2>
                </div>
                <div id="title">
                    <label for="blog_title">标题</label><br>
                    <input type="text" id="blog_title" name="ArticleTitle">
                </div>
                <div id="content">
                    <label for="content">内容</label><br>
                    <textarea id="ArticleContent" name="ArticleContent" class="ckeditor"></textarea>
                    <script type="text/javascript">CKEDITOR.replace("ArticleContent");</script>
                </div>
                <input type="submit" class="button" value="发布" id="sendBtn">
                <button class="button" id="cancelBtn"><a href="/Index/index"></a>取消</button>
            </form>
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
    <script type="text/javascript" src="/Public/ckeditor/ckeditor.js"></script>
</head>
<body>
<form role="form" id="blog_article" action="/index.php/Blog/index/addBlog" method="POST">
<div class="bg">
    <div class="top">
        <h2 class="white">&nbsp江祖如的博客</h2>
        <h2 class="white">&nbsp添加文章</h2>
        <hr>
    </div>
    <div id="title">
        <label for="blog_title" class="white ">标题</label><br>
        <input type="text" id="blog_title" name="ArticleTitle">
    </div>
    <div id="content">
        <label for="content" class="white">内容</label><br>
        <textarea id="ArticleContent" name="ArticleContent" class="ckeditor"></textarea>
        <script type="text/javascript">CKEDITOR.replace("ArticleContent");</script>
    </div>
    <input type="submit" class="button" value="发布" id="sendBtn">
    <button class="button" id="cancelBtn"><a href="/Index/index"></a>取消</button>
</div>
</form>
<script type="text/javascript" src="/Public/Js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/Public/Js/blog.js"></script>
</body>
</html> -->