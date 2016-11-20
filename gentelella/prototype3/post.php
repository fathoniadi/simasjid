<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog | Schematics 2016</title>
    <?php include "parts/header.php"; ?>
</head>
    
<body>
    <?php include "parts/navbar-index.php"; ?>
    
    <section>
        
        <!-- TITLE -->
        <div style="height: 27em; color:white; background-image:url(assets/img/blog-post/1.JPG); background-position:center; background-size:cover; background-attachment:fixed; position:relative">
            <div style="position:absolute; height:27em; width:100%; background-color:black; opacity:0.5"></div>
            <div class="container">
                <div style="position:absolute; bottom:3em">
                    <h1>Ini Ceritanya Judulnya Dimari Tong</h1>
                    <p>by Joko Susilo | 3 Januari 2016 | Category: Teknologi | 0 Comments</p>
                    <p><b>Tags:</b> <span class="badge">Tagnya</span> <span class="badge">Disini</span> <span class="badge">Mas</span></p>
                    <div style="margin-top:2em">
                        <a href="#!" target="_blank"><img class="socmeds" src="assets/img/socmeds/fb.png"></a>
                        <a href="#!" target="_blank"><img class="socmeds" src="assets/img/socmeds/ig.png"></a>
                        <a href="#!" target="_blank"><img class="socmeds" src="assets/img/socmeds/twitter.png"></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CONTENT -->
        <div class="container" style="padding-top:3em; padding-bottom:3em;">
            <div style="font-size:1.2em; line-height:1.7">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id viverra dolor, a cursus metus. Suspendisse non nibh eu dolor rutrum rutrum. Morbi quis consectetur sem. Nulla sed nunc at ante imperdiet dignissim. Quisque viverra imperdiet consequat. Curabitur et dolor cursus diam elementum fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam luctus luctus luctus. Vestibulum sed ante orci. Praesent iaculis vitae arcu at rhoncus. Nullam eu velit congue justo bibendum dapibus. Pellentesque mattis sapien at ornare cursus. Curabitur sit amet vulputate lorem.
                </p>
                <p>
    Donec quam sapien, ultrices sit amet diam sit amet, hendrerit venenatis orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur gravida magna feugiat rhoncus pulvinar. Nam dui odio, porta id odio et, semper imperdiet nibh. Donec gravida quam dapibus sapien suscipit, eu malesuada dui dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras laoreet quis arcu sed condimentum. Vivamus sagittis consequat nisl eu cursus. Phasellus interdum feugiat tellus, at varius mauris blandit quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                </p>
                <p>
    Integer pulvinar urna sagittis suscipit tempor. Mauris tempus finibus arcu, quis elementum mauris lobortis at. Maecenas a erat lacus. Fusce lobortis tortor nunc. Sed in porta dolor. Duis sit amet augue in enim eleifend laoreet interdum non nibh. Sed sollicitudin magna tortor, a fermentum mi consequat sit amet. Proin ut gravida massa. Nullam nulla tortor, malesuada et convallis vel, pharetra eu libero.
                </p>
            </div>
            <div class="row" style="margin-top:4em">
                <div class="col-sm-8">
                    <h4 style="letter-spacing:3px">COMMENTS</h4>
                    <hr>
                    <?php for($i=0;$i<3;$i++){; ?>
                    <div class="row" style="margin:1em 0">
                        <div class="col-xs-1">
                            <img src="assets/img/blog-comment/1.png" style="width:100%">
                        </div>
                        <div class="col-xs-11">
                            <b>Nama yang komen</b>
                            <p>Komennya ini consectetur adipiscing elit. Ut id viverra dolor, a cursus metus. Suspendisse non nibh eu dolor rutrum rutrum. Morbi quis consectetur</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-sm-4">
                    <h4 style="letter-spacing:3px">RELATED POST</h4>
                    <hr>
                    <p><a href="list.php">Lorem Ipsum</a></p>
                    <p><a href="list.php">Dolor Sit</a></p>
                    <p><a href="list.php">Amet Consectetur</a></p>
                    <p><a href="list.php">Adipiscing</a></p>
                    <p><a href="list.php">Elit Ut</a></p>
                    <p><a href="list.php">Id Viverra</a></p>
                    <p><a href="list.php">Dolor A</a></p>
                </div>
            </div>
            
        </div>
        
        <!-- COMMENT -->
        <div style="background-color:rgba(0,0,0,0.1); padding:3em 0">
            <div class="container">
                <h3>Leave a Comment</h3>
                
                <div class="row" style="margin-top:2em">
                    <div class="form-group col-sm-4">
                        <label for="usr">Name</label>
                        <input type="text" class="form-control" id="usr">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="mai">Email</label>
                        <input type="email" class="form-control" id="mai">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="web">Website</label>
                        <input type="text" class="form-control" id="web">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-sch-grey anim">SUBMIT COMMENT</button>
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
</body>
    
</html>