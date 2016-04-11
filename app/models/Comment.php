<?php

class Comment{

    public static function getCommentListById($id){

        $db = Db::getConnection();

        $commentsList = [];

        $result = $db->query('SELECT id_blog, text_comment FROM comments WHERE id_blog = ' . $id . ' ORDER BY date_create DESC');

        if($result){
            $i = 0;
            while($row = $result->fetch()){
            $commentsList[$i]['id_blog'] = $row['id_blog'];
            $commentsList[$i]['text_comment'] = $row['text_comment'];
            $i++;
            }

            return $commentsList;
        }
        else{
            echo "Вы ещё не добавили комментарий...";

            return false;
        }
    }

    public static function addComment($id_blog, $text_comment){

        $db = Db::getConnection();

        $result = $db->query('INSERT INTO comments'
            . '(text_comment, id_blog) VALUES '
            . '("'.$text_comment.'", '.$id_blog.')');
    }
}