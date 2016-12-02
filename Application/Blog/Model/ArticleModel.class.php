<?php
namespace Blog\Model;
use Think\Model;
/**
 *ArticleModel 博客文章模型类
 *
 *@author 江祖如
 *@since  2016.07.17
 */
class ArticleModel extends Model{
	//取出一条博客数据
    public function getArticle($id){
    	if ($id) {
    		$blog = $this->find($id);
        	return $blog;
    	}
    	else{
	    	$blog = $this->select();
    		return $blog;
    	}      
    }
    //写入新博客
    public function addBlog($data){
    	if ($data[ArticleTitle] != null) {
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
    //删除博客
    public function deleteBlog($id){
		$result = $this->delete($id);
		return $result;
    }
    //阅读量增加
    public function addPv($id){
    	$condition[ArticleID] = $id;
    	$result = $this->where($condition)->setInc('ArticlePv');
    }
}     
		