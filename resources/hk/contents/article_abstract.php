<?php 
if(!isset($_GET['id'])){
    header("Location: /blog");
    exit(0);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Article - Abstract</title>

    <link rel="stylesheet" href="/contents/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/contents/css/icomoon.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/contents/css/bootstrap.css">

    <link rel="stylesheet" href="/contents/css/flexslider.css">

    <link rel="stylesheet" href="/contents/fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="/contents/css/owl.carousel.min.css">

    <link href="css/blog.styles.css" rel="stylesheet" />
    <link rel="stylesheet"  href="/contents/css/blog.styles.css"  type="text/css" />
</head>
<body>
    <?php include_once("header.topbar.php") ?>
        
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/images/cover-bg-4.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Article Abstract</h1>
                            <span class="subheading">A Blog by lordyhas</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <div class="container">

        <div class="row flex-wrap ">
            <div class="col col-7">
                <div>
                    <h1>Study of the best stochastic gradient descent optimizers for automatic license plate recognition.</h1>
                    <h3 class="section-heading" style="font-size: 32px;">Abstract</h3>
                        <?php include_once("articles/alpr_abstract.html") ?>
                        Posted by
                        <b><a href="http://hassankajila.com/">Hassan Kajila</a></b>
                        &middot; Powered by
                        <a href="#">KDynamic Lab</a>
                    </p>
                </div>
            </div>

            <div class="col col-lg-4">
                <div class="card mt-5">
                    <div class="card-header">
                        <h5 class="card-title">Recommended article</h5>
                      </div>
                    <div class="card-body">
                        <div class="post-preview">
                            <a href="#"><h2 class="post-title" style="font-size: 18px;">Minimization of learning errors for automatic license plate recognition.</h2></a>
                            <p class="post-meta" style="font-size: 13px;">
                                Posted by
                                <a href="#!">Hassan K.</a>
                                on September 18, 2022
                            </p>
                        </div>
                       
                        <hr class="my-4" />

                        <div class="post-preview">
                            <a href="#" >
                                <h2 class="post-title" style="font-size: 18px;">Man must explore, and this is exploration at its greatest</h2>
                                <h3 class="post-subtitle" style="font-size: 16px;">Problems look mighty small from 150 miles up</h3>
                            </a>
                            <p class="post-meta" style="font-size: 13px;">
                                Posted by
                                <a href="#!">Hassan K.</a>
                                on September 24, 2021
                            </p>
                        </div>
                    </div>
                </div>
            
            
                <div class="card mt-3" >
                    <div class="card-body">
                      <h5 class="card-title">Get article</h5>

                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      
                      <div class="row">
                        <div class="col">
                            <div class="mt-1">
                                <a href="javascript:void(0)" class="btn btn-primary">Cite</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mt-1">
                                <a href="javascript:void(0)" class="btn btn-primary">Download</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mt-1">
                                <a href="javascript:void(0)" class="btn btn-danger">PDF</a>
                            </div>

                        </div>
                      </div>
                    </div>
                </div>
            
          </div>
          <!--div class="row">
            <div class="col">
              1 of 3
            </div>
            <div class="col-md-auto">
              Variable width content
            </div>
            <div class="col col-lg-2">
              3 of 3
            </div>
          </div-->
    </div>

    <!-- Footer-->
    <footer class="border-top">
        <?php include_once("footer.blog.php") ?>
    </footer>
    <!-- Bootstrap core JS-->
    <!-- script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script-->
    <!-- Core theme JS-->
    <script src="/contents/js/blog.scripts.js"></script>
    
</body>
</html>