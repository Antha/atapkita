<!-- start of hero -->   
        <section class="hero hero-style-1 hero-slider-wrapper">
            <div class="hero-slider">
                <div class="slide">
                    <img src="<?php echo base_url()?>assets/images/action-adult.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-8 col-sm-9 slide-caption">
                                <h2>AtapKita.Com</h2>
                                <p>Kini berbagi menjadi lebih mudah karena sudah bisa secara online</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn">About us</a>
                                    <a href="#" class="theme-btn-s2">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <img src="<?php echo base_url()?>assets/images/action-adult.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-8 col-sm-9 slide-caption">
                                <h2>We are your financial solution</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn">About us</a>
                                    <a href="#" class="theme-btn-s2">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <img src="<?php echo base_url()?>assets/images/action-adult.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-8 col-sm-9 slide-caption">
                                <h2>We are your financial solution</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn">About us</a>
                                    <a href="#" class="theme-btn-s2">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start services-section -->
        <section class="services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2>Bantu Crud</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="service-grids">
                            <?php 

                              $DATA[] = array("TITLE"=>"Bantu Korban Gempa Di Sumenep",
                                              "PERCENT"=>78
                                             ); 

                              $DATA[] = array("TITLE"=>"Bantu Lumpur Lapindo",
                                              "PERCENT"=>58
                                             ); 

                              $DATA[] = array("TITLE"=>"Bantu Korban Gempa Di Palu",
                                              "PERCENT"=>38
                                             ); 

                              $DATA[] = array("TITLE"=>"Bantu Fahri Melawan Tumor",
                                              "PERCENT"=>90
                                             ); 

                              $DATA[] = array("TITLE"=>"Bantu Dian Melawan Kelumpuhan",
                                              "PERCENT"=>100
                                             ); 

                              $DATA[] = array("TITLE"=>"Bantu Korban Tsunami Di Lombok",
                                              "PERCENT"=>80
                                             ); 


                              foreach ($DATA as $key => $value) {
                                  
                            ?>
                            <div class="grid">
                                <div class="ctnt">
                                    <div class="img-details-link">
                                        <div class="details-link">
                                            <a href="#"><i class="fa fa-arrow-right"></i></a>
                                        </div>
                                        <img src="assets/images/grid-pic.jpg" alt>
                                    </div>
                                    <div class="service-details">
                                        <div class="ttl">
                                          <h3><?php echo $value["TITLE"] ?></h3>
                                        </div>

                                        <div class="content">
                                            <h4>Selasa, 16 Oktober 2018</h4>
                                            <h5>Denpasar, Bali</h5>
                                            <p>Class sed non neque nunc etiam pharetra erat odio site amet nibh vulputate amet.</p>
                                            
                                            <h5>Sudah Tercapai</h5>
                                            <div class="progress">
                                                <div class="progress-bar" data-percent="<?php echo $value["PERCENT"]?>"></div>
                                            </div>

                                            <p>Sudah Terdata <strong> 10 </strong> Donatur</p>

                                            <div class="donate">
                                                <a href="#" class="theme-btn-s2">Donasi</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php # code...
                              }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end services-section -->


        <!-- start cta -->
        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Find out more about <span>what we do</span></h2>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta -->


        <!-- start services-section-s2 -->
        <section class="services-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3">
                        <div class="services-phone">
                            <div class="phone-bg"></div>
                            <img src="assets/images/phone.png" alt>
                            <div class="phone-inner">
                                <h3>Still have <span>confusion?</span></h3>
                                <p>Don’t worry. We don’t do rocket science</p>
                                <a href="#" class="theme-btn-s2">Request a call Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-8 col-md-offset-1">
                        <div class="services-s2-grids">
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-balance"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="#">Finance Planning</a></h3>
                                        <p>Pteur sint occaecat cupidatat non proi dent, sunt in culpa qu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-wallet"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="#">Wealth Management</a></h3>
                                        <p>Pteur sint occaecat cupidatat non proi dent, sunt in culpa qu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-calculator"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="#">Risk Analysis</a></h3>
                                        <p>Pteur sint occaecat cupidatat non proi dent, sunt in culpa qu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-credit-card"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="#">Venture Capitals</a></h3>
                                        <p>Pteur sint occaecat cupidatat non proi dent, sunt in culpa qu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-computer"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="#">Stock Market</a></h3>
                                        <p>Pteur sint occaecat cupidatat non proi dent, sunt in culpa qu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fi flaticon-diamond"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="#">Business Campaign</a></h3>
                                        <p>Pteur sint occaecat cupidatat non proi dent, sunt in culpa qu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end services-section-s2 -->


        <!-- start about-section -->
        <section class="section-padding about-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-md-10">
                        <div class="section-title-s2">
                            <h2>We deliver high performance with the clients’ projected satisfaction</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-7">
                        <div class="about-details">
                            <p>Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                            <div class="skill-progress-bar">
                                <div class="skills">
                                    <div class="skill">
                                        <h6>Finance</h6>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="85"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <h6>Business</h6>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="98"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <h6>Investment</h6>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="92"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-5">
                        <div class="about-chart">
                            <img src="assets/images/about-chart.jpg" alt>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->


        <!-- start projects-section -->
        <section class="projects-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2>Our Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters projects-list">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <li><a data-filter=".business" href="#">Business</a></li>
                                <li><a data-filter=".finance" href="#">Finance</a></li>
                                <li><a data-filter=".consulting" href="#">Consulting</a></li>
                                <li><a data-filter=".events" href="#">Events</a></li>
                            </ul>
                        </div>

                        <div class="gallery-container projects-grid">
                            <div class="grid business consulting">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-1.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid business finance">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-2.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid events">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-3.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid event finance consulting">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-4.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-4.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid finance events business">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-5.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-5.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid consulting finance business">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-6.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-6.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid events consulting">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-7.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-7.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid business finance">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-8.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <ul>
                                                <li><a href="assets/images/projects/img-8.jpg" class="fancybox"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                            <h3>Pied Piper</h3>
                                            <p class="cat">startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end projects-section -->


        <!-- start partners-section -->
        <section class="partners-section">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partners-slider">
                            <div class="grid">
                                <img src="assets/images/partners/img-1.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-2.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-3.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-4.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-5.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-3.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->


        <!-- start testimonials-section -->
        <section class="testimonials-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="testimonials-slider testimonials-grids">
                            <div class="grid">
                                <div class="client-pic">
                                    <img src="assets/images/testimonials/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4>Monica Hall</h4>
                                    <span class="client-post">CEO, Bream-Hall Partners</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="client-pic">
                                    <img src="assets/images/testimonials/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4>Jared Dunn</h4>
                                    <span class="client-post">CEO, Bream-Hall Partners</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="client-pic">
                                    <img src="assets/images/testimonials/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4>Monica Hall</h4>
                                    <span class="client-post">CEO, Bream-Hall Partners</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end testimonials-section -->


        <!-- start newsletter-section -->
        <section class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-md-7">
                        <h2><span>Subscribe your email</span> for our Newsletter</h2>
                        <form>
                            <div>
                                <input type="text" class="form-control">
                                <button>Subscrib</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="newsletter-man">
                    <img src="assets/images/newsletter-man.png" alt>
                </div>
            </div> <!-- end contianer -->
        </section>
        <!-- end newsletter-section -->


        <!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="section-title-s3">
                            <h2>Recent News</h2>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row news-grids">
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="assets/images/blog/img-1.jpg" alt>
                            </div>
                            <div class="entry-body">
                                <div class="entry-header">
                                    <span class="date">16 Hours ago</span>
                                    <h3><a href="#">Cut corporate taxes to boost growth</a></h3>
                                </div>
                                <div class="entry-details">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="entry-meta">
                                    <a href="#" class="read-more">Read More</a>
                                    <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="assets/images/blog/img-2.jpg" alt>
                            </div>
                            <div class="entry-body">
                                <div class="entry-header">
                                    <span class="date">16 Hours ago</span>
                                    <h3><a href="#">European firms look to Canada to grow assets</a></h3>
                                </div>
                                <div class="entry-details">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="entry-meta">
                                    <a href="#" class="read-more">Read More</a>
                                    <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="assets/images/blog/img-3.jpg" alt>
                            </div>
                            <div class="entry-body">
                                <div class="entry-header">
                                    <span class="date">16 Hours ago</span>
                                    <h3><a href="#">British drinkers leave Molson Coors thirsty</a></h3>
                                </div>
                                <div class="entry-details">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="entry-meta">
                                    <a href="#" class="read-more">Read More</a>
                                    <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->

        
        <!-- start contact-section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="contact-location-map" id="map"></div>
                    </div>
                    <div class="col col-md-6">
                        <div class="section-title-s4">
                            <h2>Request a call back</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="contact-form">
                            <form method="post" id="contact-form" class="form row contact-validation-active">
                                <div class="col col-sm-6">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone">Phone No</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="business">Business Type</label>
                                    <select name="business" id="business" class="form-control">
                                        <option selected disabled>Select one</option>
                                        <option>Select number 1</option>
                                        <option>Select number 2</option>
                                        <option>Select number 3</option>
                                    </select>
                                </div>
                                <div class="col col-xs-12 submit-btn">
                                    <button type="submit">Submit</button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->