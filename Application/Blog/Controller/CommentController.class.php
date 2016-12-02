<?php
namespace Blog\Controller;
use Think\Controller;

/**
 *indexController 博客评论控制器类
 *
 *@author 江祖如
 *@since  2016.07.19
 */

class CommentController extends Controller{
    public function addComment(){
        $data = $_POST;
        $comment = D('Comment');
        $result = $comment->addComment($data);
        if($result === false){
            $this->error('发布失败');
        }else{
            $this->success('发布成功', 'Index/index');
        }
    }


}