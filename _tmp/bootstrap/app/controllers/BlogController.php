<?php

include_once ROOT . '/app/models/Blog.php';

class BlogController{

    public function actionIndex(){
        
        $blogsList = Blog::getBlogsList();

        require_once(ROOT . '/app/views/blog/blogsListView.php');

        return true;
    }

    public function actionView($id){
        if($id){
            $blogItem = Blog::getBlogItemById($id);

            // require_once(ROOT . '/app/views/blog/blogItemView.php');

            echo "ControllerBlog Index ID";
        }

        return true;
    }


}