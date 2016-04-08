<?php

class Blog{

    public static function getBlogItemById($id){

        $db = Db::getConnection();

        $result = $db->query('SELECT * '
            . 'FROM blogs '
            . 'WHERE id = ' . $id);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $newsItem = $result->fetch();

        return $blogItem;

    }

    public static function getBlogsList(){

        $db = Db::getConnection();

        $blogsList = [];

        $result = $db->query('SELECT id, title, text_blog, date_create FROM blogs ORDER BY date_create DESC');

        if($result){
            $i = 0;
            while($row = $result->fetch()){
            $blogsList[$i]['id'] = $row['id'];
            $blogsList[$i]['title'] = $row['title'];
            $blogsList[$i]['text_blog'] = $row['text_blog'];
            $blogsList[$i]['date_create'] = $row['date_create'];
            $i++;
            }

            return $blogsList;
        }
        else{
            echo "Вы ещё не добавили сообщение...";

            return false;
        }

        

    }
}