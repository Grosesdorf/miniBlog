<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="../../../../css/style.css" rel="stylesheet">
</head>
<body>

    <?php foreach($blogsList as $blogItem):?>
	    <div class="message">
            <h2><?php echo $blogItem['title'];?></h2>
    		<p>Дата публикации <?php echo $blogItem['date_create'];?></p>
            <p><?php echo $blogItem['text_blog'];?><a href="blog/<?php echo $blogItem['id'];?>" class="btn">...ReadMore</a></p>
            <div class="button-bottom">
            <a href="#" class="btn">edit</a>
            <a href="#" class="btn">delete</a>
            </div>
		</div>
    <?php endforeach;?>

    <footer>
        <div class="footer-bottom">
            <p>&copy; YourSite 2016. <a href="#">SuperPuperMiniBlog</a> by Grosesdorf</p>
         </div>
    </footer>
</body>
</html>