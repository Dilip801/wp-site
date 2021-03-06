<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5b810db006.js" crossorigin="anonymous"></script>
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">



    <style>
      .wrapper{
	       width: 100%;
           margin: 0 auto;
           overflow: hidden;
	   }
    </style>
</head>
<body>
    <div class="wrapper">
<?php
/*
 * Template Name: Front Page Template
 */
mesmerize_get_header('homepage');
?>

    <div id='page-content' class="page-content">
        <div class="<?php mesmerize_page_content_wrapper_class(); ?>">
        
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
    

  <div class="photo-gallery">
        
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Portfolio</h2>
                <p class="text-center">Here are some of our featured projects. </p>
            </div>
            <div class="row photos">
                <div class="col-md-12">
                    <div class="controls text-center">
                      <a class="filter active btn btn-common btn-effect" data-filter="all">
                        All 
                      </a>
                      <a class="filter btn btn-common btn-effect" data-filter=".design">
                        Design 
                      </a>
                      <a class="filter btn btn-common btn-effect" data-filter=".mobile">
                        Mobile
                      </a>
                      <a class="filter btn btn-common btn-effect" data-filter=".web">
                        Web
                      </a>
                    </div>
                  </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix design web">                      
                            <img class="img-fluid" src="wp-content/uploads/2020/03/img-1.jpg" alt="7 Shades Business Card">
                            <div class="info">
                                <div class="info-data">
                                    <a href="wp-content/uploads/2020/03/img-1.jpg" data-lightbox="photos">
                                        <i class="lni lni-zoom-in"></i>
                                    </a>
                                     <h5>7 Shades Business Card</h5>
                                </div>
                            </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix design web">                   
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-2.jpg" alt="bSmart 3D Stall Design">
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-2.jpg" data-lightbox="photos">
                                <i class="lni lni-zoom-in"></i>
                            </a>
                             <h5>bSmart 3D Stall Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix mobile">                   
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-3.jpg" alt="RM Mobility App">
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-3.jpg" data-lightbox="photos">
                                <i class="lni lni-zoom-in"></i>
                            </a>
                             <h5>RM Mobility App Development</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix mobile design">                    
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-4.jpg" alt="bSmart Website">
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-4.jpg" data-lightbox="photos">
                                <i class="lni lni-zoom-in"></i>
                            </a>
                             <h5>bSmart Website</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix mobile design">
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-5.jpg" alt="Future Media India">
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-5.jpg" data-lightbox="photos">
                               <i class="lni lni-zoom-in"></i>
                            </a>
                             <h5>Future Media India</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix mobile design">                   
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-6.jpg" alt="CORE IDA">
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-6.jpg" data-lightbox="photos">
                                <i class="lni lni-zoom-in"></i>
                            </a>
                             <h5>CORE IDA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix mobile">
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-7.jpg" alt="DBS Login Page">
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-7.jpg" data-lightbox="photos">
                                <i class="lni lni-zoom-in"></i>
                            </a>
                             <h5>DBS Login Page</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix design mobile">
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-8.jpg" alt="Future Media India">
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-8.jpg" data-lightbox="photos">
                                 <i class="lni lni-zoom-in"></i>
                            </a>
                             <h5>Future Media India</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix design">                    
                        <img class="img-fluid" src="wp-content/uploads/2020/03/img-9.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-9.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix web">
                    <img class="img-fluid" src="wp-content/uploads/2020/03/img-10.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-10.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix mobile">
                    <img class="img-fluid" src="wp-content/uploads/2020/03/img-11.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-11.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix design web">
                    <img class="img-fluid" src="wp-content/uploads/2020/03/img-12.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-12.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix web mobile">
                    <img class="img-fluid" src="wp-content/uploads/2020/03/img-13.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-13.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix mobile">
                    <img class="img-fluid" src="wp-content/uploads/2020/03/img-14.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-14.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix web">
                    <img class="img-fluid" src="wp-content/uploads/2020/03/img-15.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-15.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item mix design mobile web">
                    <img class="img-fluid" src="wp-content/uploads/2020/03/img-16.jpg" alt="bSmart Presentation Background">  
                    <div class="info">
                        <div class="info-data">
                            <a href="wp-content/uploads/2020/03/img-16.jpg" data-lightbox="photos">  
                                    <i class="lni lni-zoom-in"></i>    
                            </a>
                            <h5>bSmart Presentation Background</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    
</body>
</html>


