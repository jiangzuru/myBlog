<?php
namespace Blog\Controller;
use Think\Controller;

/**
 *indexController 博客后台控制器类
 *
 *@author 江祖如
 *@since  2016.07.19
 */
class AdminController extends Controller{
    public function index(){
        $article = D('Article');
        $list = $article->getArticle();
        $this->assign('list',$list);
        $this->display('Index/admin');
    }

    public function deleteBlog(){
        $articleID = $_GET['id'];
        $article = D("Article");
        $result = $article->deleteBlog($articleID);
        if($result === false){
            $this->error('删除失败');
        }else{
            $this->success('删除成功', 'Index/index');
        }
    }

}