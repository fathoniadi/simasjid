<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog | Schematics 2016</title>
    <?php include "parts/header.php"; ?>
</head>
    
<body>
    <?php include "parts/navbar-index.php"; ?>
    
    
    
    <!-- HEADLINE -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div id="headline">
                    <div class="row" style="padding-top: 100px">
                        <div class="container">
                            <div class="col-sm-12">
                                <center style="margin-top:20vh">
                                    <div style="font-size:3.3em; letter-spacing:-2px"><b>schematics</b> <span style="font-size:0.8em; font-weight:300">2016</span></div>
                                    <div style="font-size:2.65em; line-height:0.9; font-weight:300; letter-spacing:5px">NEWS CENTER</div>
                                    <div style="margin-top:2em; font-size:1.2em;">Semua informasi terkini dari <b>Schematics 2016</b> ada disini </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">                                <!-- echo gambar blogpost -->
                <div style="height:100vh; background-image:url(assets/img/blog-post/1.JPG); background-attachment: fixed; background-size:cover; color:white">
                    <div style="height:100vh; width:100%; position:absolute; background-color:#000; opacity:0.5"></div>
                    <div class="row" style="padding-top: 100px">
                        <div class="container">
                            <div class="col-sm-12">
                                <center style="margin-top:20vh">
                                        <!-- echo judul blogpost -->
                                    <h1><b>Lorem Ipsum Dolor Sit Amet</b></h1>
                                    <br>
                                    <p>
                                        <!-- echo penggalan blogpost -->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id viverra dolor, a cursus metus. Suspendisse non nibh eu dolor rutrum rutrum. Morbi quis consectetur sem. Nulla sed nunc at ante imperdiet dignissim. Quisque viverra imperdiet consequat. Curabitur et dolor cursus diam elementum fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam luctus luctus luctus. Vestibulum sed ante orci. Praesent iaculis vitae arcu at rhoncus...
                                    </p>
                                    <!-- echo link-->
                                    <a href="post.php" class="btn btn-sch-white-inv anim" style="margin-top:2em">READ MORE</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">                                 <!-- echo gambar blogpost -->
                <div style="height:100vh; background-image:url(assets/img/blog-post/2.JPG); background-attachment: fixed; background-size:cover; color:white">
                    <div style="height:100vh; width:100%; position:absolute; background-color:#000; opacity:0.5"></div>
                    <div class="row" style="padding-top: 100px">
                        <div class="container">
                            <div class="col-sm-12">
                                <center style="margin-top:20vh">
                                        <!-- echo judul blogpost -->
                                    <h1><b>Lorem Ipsum Dolor Sit Amet</b></h1>
                                    <br>
                                    <p>
                                        <!-- echo penggalan blogpost -->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id viverra dolor, a cursus metus. Suspendisse non nibh eu dolor rutrum rutrum. Morbi quis consectetur sem. Nulla sed nunc at ante imperdiet dignissim. Quisque viverra imperdiet consequat. Curabitur et dolor cursus diam elementum fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam luctus luctus luctus. Vestibulum sed ante orci. Praesent iaculis vitae arcu at rhoncus...
                                    </p>
                                    <!-- echo link-->
                                    <a href="post.php" class="btn btn-sch-white-inv anim" style="margin-top:2em">READ MORE</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span style="box-shadow:none" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span style="box-shadow:none" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <section style="margin-top: 4em">
        
        <!-- RECENT POSTS -->
        <center><h3 style="letter-spacing: 5px">RECENT POSTS</h3></center>
        <div id="posts-carousel" class="carousel slide" data-ride="carousel">
            <div class="container">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <?php for($i=0;$i<4;$i++) {?>
                        <div class="col-sm-3" style="text-align:center">
                            <img src="assets/img/blog-post/1.JPG" style="width:100%; margin:1em 0">
                            <p><b>Judul Post Disini Ajah</b></p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id viverra dolor, a cursus metus.
                            </p>
                            <a href="post.php" class="btn btn-sch-color anim" style="width:100%; margin-top:0.5em">READ MORE</a>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="item">
                        <?php for($i=0;$i<3;$i++) {?>
                        <div class="col-sm-3" style="text-align:center">
                            <img src="assets/img/blog-post/1.JPG" style="width:100%; margin:1em 0">
                            <p><b>Judul Post Disini Ajah</b></p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id viverra dolor, a cursus metus.
                            </p>
                            <a href="post.php" class="btn btn-sch-color anim" style="width:100%; margin-top:0.5em">READ MORE</a>
                        </div>
                        <?php } ?>
                        <div class="col-sm-3">
                            <center><h3 style="margin-top:5em">See All<br>Posts</h3></center>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#posts-carousel" role="button" data-slide="prev">
                <span style="color:black; text-shadow:none" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#posts-carousel" role="button" data-slide="next">
                <span style="color:black; text-shadow:none" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
          
        
        <!-- BLOG POSTS -->
        <div style="background-color:rgba(0,0,0,0.1); margin-top:5em; padding-top:4em; padding-bottom: 4em">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <?php for($i=0;$i<5;$i++) {?>
                        <div class="col-sm-12" style="background-color:white; padding: 1.5em; margin-bottom:1em">
                            <a style="color:rgba(0,0,0,0.8)" href="post.php"><h3><b>Judul Postnya Dimari Bos Uhuy Uhuy Crot</b></h3></a>
                            <p>by Joko Susilo | 3 Januari 2016 | Category: Teknologi | 0 Comments</p>
                            <br>
                            <div class="col-sm-3">
                                <img src="assets/img/blog-post/1.JPG" style="width:100%">
                            </div>
                            <div class="col-sm-9">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id viverra dolor, a cursus metus. Suspendisse non nibh eu dolor rutrum rutrum. Morbi quis consectetur sem. Nulla sed nunc at ante imperdiet dignissim. Quisque viverra imperdiet consequat. Curabitur et dolor cursus diam elementum fringilla. Vestibulum ante... <a href="post.php"><b>Read more</b></a>
                                </p>
                                <p><b>Tags:</b> <span class="badge">Tagnya</span> <span class="badge">Disini</span> <span class="badge">Mas</span></p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="col-sm-3" style="background-color:white; padding: 1.5em; margin-bottom:1em">
                        <h3 style="letter-spacing:5px">CATEGORIES</h3>
                        <hr>
                        <b>
                            <p><a href="list.php">Lorem Ipsum</a></p>
                            <p><a href="list.php">Dolor Sit</a></p>
                            <p><a href="list.php">Amet Consectetur</a></p>
                            <p><a href="list.php">Adipiscing</a></p>
                            <p><a href="list.php">Elit Ut</a></p>
                            <p><a href="list.php">Id Viverra</a></p>
                            <p><a href="list.php">Dolor A</a></p>
                        </b>
                    </div>
                    <div class="col-sm-3" style="background-color:white; padding: 1.5em; margin-bottom:1em">
                        <h3 style="letter-spacing:5px">ARCHIVES</h3>
                        <hr>
                        <b>
                            <p><a href="list.php">Januari 2016</a></p>
                            <p><a href="list.php">Februari 2016</a></p>
                            <p><a href="list.php">Maret 2016</a></p>
                            <p><a href="list.php">April 2016</a></p>
                            <p><a href="list.php">Mei 2016</a></p>
                            <p><a href="list.php">Juni 2016</a></p>
                        </b>
                    </div>
                    
                </div>
            </div>
        </div>
                    
              
    </section>
    
    <?php include "parts/footer.php"; ?>
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        if($(document).width()<=768)
        {
          $('.dropdown-li').css('color','white'); 
        }
        else 
        {
          $('.dropdown-li').css('color','');
        }
        $("#navi").css('background-color','transparent');
        $("#navi").css('border','none');
        $(".dropdown-toggle").css('color','white');
        $(".nav-menu").css('color','white');
        $(".dropdown-toggle").css('background-color','transparent');
        $(".nav-logo").attr('src','assets/img/logo-white.png');
        $(window).scroll(function() {
            var x = $(window).scrollTop();
            if (x == 0) {
              $("#navi").css('background-color','transparent');
              $("#navi").css('border','none');
              $(".dropdown-toggle").css('color','white');
              $(".nav-menu").css('color','white');
              $(".dropdown-toggle").css('background-color','transparent');
              $(".nav-logo").attr('src','assets/img/logo-white.png');
              if($(document).width()<768)
              {
                $('.dropdown-li').css('color','white');
                
              }
              else 
              {
                $('.dropdown-li').css('color','');
              }
            } else {
              $("#navi").css('background-color','white');
              $("#navi").css('border','');
              $(".dropdown-toggle").css('color','');
              $(".nav-menu").css('color','');
              $(".dropdown-toggle").css('background-color','');
              $(".nav-logo").attr('src','assets/img/logo.png');
              $('.dropdown-li').css('color','');
            }
        });
    </script>
    <style>
        .carousel-control {
            width:9%;
        }
    </style>
</body>
    
</html>