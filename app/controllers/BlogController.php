<?php

include_once ROOT . '/app/models/Blog.php';
include_once ROOT . '/app/models/Comment.php';

class BlogController{

    public function actionIndex(){

        $blogsList = Blog::getBlogsList();

        require_once(ROOT . '/app/views/blog/blogsListView.php');

        return true;
    }

    public function actionView($id){
        
        $blogItem = Blog::getBlogItemById($id);
        $commentsList = Comment::getCommentListById($id);

        require_once(ROOT . '/app/views/blog/blogViewById.php');
        
        return true;
    }


}