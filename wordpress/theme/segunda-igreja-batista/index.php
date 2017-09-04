<?php get_header(); ?>
	<?php get_navbar(1); ?>
    <!-- Slider 2 -->
    <div class="slider-2-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 slider-2-text wow fadeInUp">
                    <h1><?php bloginfo('name'); ?></h1>
            		<p>
            			<?php bloginfo('description'); ?></b>
            		</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="services-container">
        <div class="container">
        	<div class="row">
	            <div class="col-sm-12 services-title wow fadeIn">
	                <h2>Pastorais</h2>
	            </div>
            </div>
            <div class="row">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		        	<div class="col-md-3 col-sm-6">
		                <div class="service wow fadeInUp">

                            <?php
                                if ( has_post_thumbnail() ) {
                            ?>
                                    <?php the_post_thumbnail(array('class' => 'img-responsive')) ?>
                            <?php   
                                }
                                else
                                {
                            ?>
                               		<div class="service-icon"><i class="fa fa-book"></i></div>
                            <?php    	
                                }
                            ?>
		                    
		                    <h3><?php the_title(); ?></h3>
		                    <?php the_excerpt() ?>
		                    <a class="big-link-1" href="<?php the_permalink() ?>">Leia Mais</a>
		                </div>
					</div>
				<?php endwhile; endif; ?>
            </div>
        </div>
    </div>

    <!-- Latest work -->
    <div class="work-container">
        <div class="container">
        	<div class="row">
	            <div class="col-sm-12 work-title wow fadeIn">
	                <h2>Atividades</h2>
	            </div>
            </div>
            <div class="row">
            	<div class="col-md-3 col-sm-6">
	                <div class="work wow fadeInUp">
	                    <img src="assets/img/portfolio/work1.jpg" alt="Lorem Website" data-at2x="assets/img/portfolio/work1.jpg">
	                    <h3>Lorem Ipsum</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
	                    <div class="work-bottom">
		                    <a class="big-link-1" href="services.html">Leia Mais</a>
	                        <!--a class="big-link-2 view-work" href="assets/img/portfolio/work1.jpg"><i class="fa fa-search"></i></a>
	                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a-->
	                    </div>
	                </div>
                </div>
            	<div class="col-md-3 col-sm-6">
	                <div class="work wow fadeInDown">
	                    <img src="assets/img/portfolio/work2.jpg" alt="Ipsum Logo" data-at2x="assets/img/portfolio/work2.jpg">
	                    <h3>Lorem Ipsum</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
	                    <div class="work-bottom">
		                    <a class="big-link-1" href="services.html">Leia Mais</a>
	                    </div>
	                </div>
	            </div>
            	<div class="col-md-3 col-sm-6">
	                <div class="work wow fadeInUp">
	                    <img src="assets/img/portfolio/work3.jpg" alt="Dolor Prints" data-at2x="assets/img/portfolio/work3.jpg">
	                    <h3>Lorem Ipsum</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
	                    <div class="work-bottom">
		                    <a class="big-link-1" href="services.html">Leia Mais</a>
	                    </div>
	                </div>
	            </div>
            	<div class="col-md-3 col-sm-6">
	                <div class="work wow fadeInDown">
	                    <img src="assets/img/portfolio/work4.jpg" alt="Sit Amet Website" data-at2x="assets/img/portfolio/work4.jpg">
	                    <h3>Lorem Ipsum</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
	                    <div class="work-bottom">
		                    <a class="big-link-1" href="services.html">Leia Mais</a>
	                    </div>
	                </div>
	            </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>