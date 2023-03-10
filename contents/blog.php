<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <meta name="description" content="Blog" />
        <meta name="author" content="lordyhas" />
        <title>Hassan Kajila | Blog</title>

        
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="/contents/css/blog.styles.css" rel="stylesheet" type="text/css" />
        <link href="/css/modal.style.css" rel="stylesheet" type="text/css" />

    </head>
    <body style="background-color: #dadaef;">
        <!-- Navigation-->
        <?php include_once("header.topbar.php") ?>
        <div id="myModal" class="xmodal">
            <!-- Modal content -->
            <div class="xmodal-content">
                
                <span class="close text-danger ml-1">&times; <small class=""></small></span>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title text-info">Bienvenue sur Horizons Online Classroom</h5>
                        <p class="card-text text-info">
                            Pour plus de securité de votre compte nous vous connseillons 
                            de verifer vos informations de profile, si elle sont bien remplies <br/>
                            Vous pouvez toujours verifier en cliquant sur le bouton 
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            <i class="fa fa-gear border rounded-circle p-2"></i> 
                            paramètre
                        </p>
                        
                        <a href="profile.set.php"><div class="btn btn-outline-success">Verifier</div></a>
                        <div class="close c-tooltip"><div class="btn btn-outline-danger">
                            Une autre fois
                            <span class="c-tooltiptext">cliquez sur close</span>
                        </div></div>
                        
                    </div>
                </div> <!-- .card --> 
            </div>

        </div>

        <!--div id="myModal" class="modal" style="z-index: 1500;">
            < !-- Modal content -- > 
            <div class="modal-content">
                
            </div>
        </div-->

        
        
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/images/cover-bg-4.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Blog</h1>  
                            <span class="subheading">A Blog by everyone</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/blog/abstract?id=alpr_abstract">
                            <h2 class="post-title">Study of the best stochastic gradient descent optimizers</h2>
                            <h3 class="post-subtitle">Solution applied in license plate recognition</h3>
                        </a>
                    
                        <p class="post-meta">
                            Posted by
                            <a href="/home">Hassan K.</a>
                            on September 18, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/blog/post">
                            <h2 class="post-title">Top 10 programming language to become a developer</h2>
                            <h3 class="post-subtitle">You should know at least one of these 10 languages</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="/home">Hassan K.</a>
                            on November 24, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Human, an interplanetary race?</h2>
                            <h3 class="post-subtitle">All current and future possibilities to colonize other planets</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="/home">Hassan K</a>
                            on January 24, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Your private life is a fiction</h2>
                            <h3 class="post-subtitle">Why would social networks need my personal information</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="/home">Hassan K.</a>
                            on July 8, 2021
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <?php include_once("footer.blog.php") ?>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/contents/js/blog.scripts.js"></script>

        <script src="/js/modal.js"></script>
    </body>
</html>

