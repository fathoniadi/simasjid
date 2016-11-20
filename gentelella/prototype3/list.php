<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog | Schematics 2016</title>
    <?php include "parts/header.php"; ?>
</head>
    
<body>
    <?php include "parts/navbar-index.php"; ?>
    
        <section>
        
        <!-- BLOG POSTS -->
        <div style="background-color:rgba(0,0,0,0.1); padding-top:80px; padding-bottom: 4em">
            <div class="container">
                <div class="row">
                    <center style="margin-bottom:2em"><h2>Category: Lorem Ipsum</h2></center>
                    <?php for($i=0;$i<5;$i++) {?>
                    <div class="col-sm-12" style="background-color:white; padding: 1.5em; margin-bottom:1em">
                        <a style="color:rgba(0,0,0,0.8)" href="post.php"><h3>Judul Blognya Dimari Bos Uhuy Uhuy Crot</h3></a>
                        <p>by Joko Susilo | 3 Januari 2016 | 0 Comments</p>
                        <hr>
                        <div class="col-sm-3">
                            <img src="assets/img/blog-post/1.JPG" style="width:100%">
                        </div>
                        <div class="col-sm-9">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id viverra dolor, a cursus metus. Suspendisse non nibh eu dolor rutrum rutrum. Morbi quis consectetur sem. Nulla sed nunc at ante imperdiet dignissim. Quisque viverra imperdiet consequat. Curabitur et dolor cursus diam elementum fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam luctus luctus luctus. Vestibulum sed ante orci... <a href="post.php"><b>Read more</b></a>
                            </p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
                    
              
    </section>
    
    <?php include "parts/footer.php"; ?>
    
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
    
</html>