<?php

include_once ROOT . '/app/models/Comment.php';

class CommentController{

    public function actionAddComment($id_blog, $text_comment){

        // $id_blog = $_POST["id_blog"];
        // $text_comment = $_POST["comment"];

        // В этом месте используем filter_input
        
        $blogItem = Comment::addComment($id_blog, $text_comment);
        
        return true;
    }


}