<?php
namespace Blog\Controller;
use Think\Controller;
/**
 *indexController 博客默认控制器类
 *
 *@author 江祖如
 *@since  2016.07.17
 */
class IndexController extends Controller
{
    //进入博客列表页,返回博文标题以及博文开头
    public function index()
    {
        $article = D('Article');
        $list = $article->getArticle();
        foreach ($list as $key => $value) {
            $list[$key]['ArticleContent'] = msubstr($value['ArticleContent'], 0, 201);
        }
        $this->assign('list', $list);
        $this->display('blogpage');
    }
    //进入写博客页面
    public function writeBlog()
    {
        $this->display('addBlog');
    }
    //添加新博客
    public function addBlog()
    {
        $data[ArticleTitle] = trim() . $_POST[ArticleTitle];
        $data[ArticleContent] = $_POST[ArticleContent];
        $article = D('Article');
        $result = $article->addBlog($data);
        if($result === false){
            $this->error('发布失败');
        }else{
            $this->success('发布成功', 'Index/index');
        }
    }
    //博客详细页
    public function detail()
    {
        //取文章数据传给前端
        $articleID = $_GET['id'];
        $article = D("Article");
        $blog = $article->getArticle($articleID);
        $article->addPv($articleID);
        $this->assign("blog", $blog);

         //取评论传给前端展示页
         $comment = D('Comment');
         $data = $comment->getComment($articleID);
         $this->assign("comment", $data);
         $this->display('detail');
    }
    public function getComment(){
        $id = $_POST['id'];
        $Comment = D("Comment");
        $data = $Comment->getComment($id);
        $this->ajaxReturn($data);
    }
}