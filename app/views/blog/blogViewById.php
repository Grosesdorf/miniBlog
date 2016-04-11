<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="../../../../css/style.css" rel="stylesheet">
</head>
<body>
        <div class="message">
            <h2><?php echo $blogItem['title'];?></h2>
            <p><?php echo $blogItem['text_blog'];?></p>
            <hr>
            <div class="add-comment">
                <form action="#" method="POST">
                    <fieldset>
                        <legend>Add comment</legend>
                        <ul>
                            <li>
                                <p>Fields marked as <span class="required">*</span> is requared</p>
                            </li>
                            <li>
                                <label for="name">Name<span class="required">*</span></label>
                                <input name="name" id="name" type="text" placeholder="John Deer" required />
                            </li>
                            <li>
                                <label for="password">Email<span class="required">*</span></label>
                                <input name="email" id="email" type="text" placeholder="deer@domen.com" required />
                            </li>
                            <li>
                                <label for="text">Comment<span class="required">*</span></label><br />
                            </li>
                            <li>
                                <textarea name="text" id="comment" placeholder="Your comment" required></textarea>
                            </li>
                            <li>
                                <button class="btn" type="submit" id="send">Send comment</button>
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div>
            <div class="list-comment">
                <fieldset>
                    <legend>Comments</legend>
                        <ul>
                            <?php foreach($commentsList as $comment):?>
                            <li>Id Blog: <span id="id_blog"><?php echo $comment['id_blog'];?></span></li>
                            <li><img src="../../../img/smile.png"><?php echo $comment['text_comment'];?></li>
                            <hr />
                            <?php endforeach;?>
                        </ul>
                </fieldset>
            </div>
    	</div>

    <footer>
        <div class="footer-bottom">
            <p>&copy; YourSite 2016. <a href="#">SuperPuperMiniBlog</a> by Grosesdorf</p>
         </div>
    </footer>

    <script src="../../../js/jquery-1.12.2.min.js"></script>
    <script src="../../../js/comment.js"></script>
</body>
</html>