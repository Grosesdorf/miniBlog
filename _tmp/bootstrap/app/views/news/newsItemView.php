<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>respo - Free CSS Template by ZyPOP</title>
    <link rel="stylesheet" href="/app/views/template/styles.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--
    respo, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

    Download: http://zypopwebtemplates.com/

    License: Creative Commons Attribution
    //-->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<div id="container">
    <header>
        <div class="width">
            <h1><a href="/">Company<span>Name</span></a></h1>
        </div>
    </header>
    <nav>
        <div class="width">
            <ul>
                <li class="start selected"><a href="newsListView.php">Home</a></li>
                <li class=""><a href="examples.html">Examples</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Solutions</a></li>
                <li class="end"><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>


    <div id="body" class="width">



        <section id="content">

                <article>

                    <h2><?php echo $newsItem['title'];?></h2>
                    <div class="article-info">Дата публикации <?php echo $newsItem['date'];?> автор <a href="<?php echo $newsItem['author_name'];?>" rel="author"><?php echo $newsItem['author_name'];?></a></div>

                    <p><?php echo $newsItem['long_content'];?></p>

                    <a href="/news" class="button">Назад</a>
                    <!--		<a href="#" class="button">Comments</a>-->

                </article>

        </section>

        <aside class="sidebar">

            <ul>
                <li>
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="newsListView.php">Home Page</a></li>
                        <li><a href="examples.html">Style Examples</a></li>
                        <li><a href="#">Commodo vestibulum sem mattis</a></li>
                        <li><a href="#">Sed aliquam libero ut velit bibendum</a></li>
                        <li><a href="#">Maecenas condimentum velit vitae</a></li>
                    </ul>
                </li>

                <li>
                    <h4>About us</h4>
                    <ul>
                        <li class="text">
                            <p style="margin: 0;">Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus. 					<a href="#" class="readmore">Read More &raquo;</a></p>
                        </li>
                    </ul>
                </li>

                <li>
                    <h4>Search site</h4>
                    <ul>
                        <li class="text">
                            <form method="get" class="searchform" action="#" >
                                <p>
                                    <input type="text" size="32" value="" name="s" class="s" />

                                </p>
                            </form>
                        </li>
                    </ul>
                </li>

                <li>
                    <h4>Helpful Links</h4>
                    <ul>
                        <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates">Premium HTML web templates from $10</a></li>
                        <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting">Cheap web hosting from Dreamhost</a></li>
                        <li><a href="http://tuxthemes.com" title="Tux Themes">Premium WordPress themes</a></li>
                    </ul>
                </li>

            </ul>

        </aside>
        <div class="clear"></div>
    </div>
    <footer>
        <div class="footer-content width">
            <ul>
                <li><h4>Proin accumsan</h4></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Blandit elementum</a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
            </ul>

            <ul>
                <li><h4>Condimentum</h4></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Cras dictum</a></li>
            </ul>

            <ul class="endfooter">
                <li><h4>Suspendisse</h4></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Donec in ligula nisl.</a></li>
            </ul>

            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; YourSite 2014. <a href="http://zypopwebtemplates.com/">Free CSS Website Templates</a> by ZyPOP</p>
        </div>
    </footer>
</div>
</body>
</html>