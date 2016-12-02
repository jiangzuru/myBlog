<?php
namespace Blog\Model;
use Think\Model;
/**
 *ArticleModel 博客评论模型类
 *
 *@author 江祖如
 *@since  2016.07.19
 */
class CommentModel extends Model{
    public function getComment($id){
        $condition['articleId'] = $id;
        $data = $this->where($condition)->select();
        return $data;
    }
    public function addComment($data){
        if ($data[writer]&&$data[content]) {
            $result = $this->add($data);
            if ($result) {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}