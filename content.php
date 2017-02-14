<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php 
                    $query = new WP_Query( 'pagename=about-us' );

                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                        <?php the_post_thumbnail('post-thumbnails', array( 'class' => 'img-responsive' ) ); ?>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <?php
                        $query = new WP_Query( 'pagename=about-us' );

                        while ( $query->have_posts() ) : $query->the_post();
                    ?>

                        <div class="section-title">
                            <h4><?php the_title(); ?></h4>
                            <h2>Some words <strong>about us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>

                        <p><?php the_content(); ?></p>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Page
==========================================-->
<div id="tf-team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Meet <strong>our team</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">

                <?php
                    $args = array( 'post_type' => 'team', 'posts_per_page');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <div class="item">
                        <div class="thumbnail">
                            <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail', array('class' => 'img-circle team-img' ) ); ?>
                            <div class="caption">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo get_post_meta( get_the_ID(), 'position', true ) ?></p>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                ?>

            </div>
        </div>
    </div>
</div>

<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
        </div>
        <div class="space"></div>
        <div class="row">

            <?php
                $args = array( 'post_type' => 'service');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa <?php echo get_post_meta( get_the_ID(), 'thumbnail', true ) ?>"></i>
                    <h4><strong><?php the_title(); ?></strong></h4>
                    <p><?php the_content(); ?></p>
                </div>

            <?php
                endwhile;
            ?>

        </div>
    </div>
</div>

<!-- Clients Section
==========================================-->
<div id="tf-clients" class="text-center">
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <h2>Some of <strong>our Clients</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">

                <?php
                    $args = array( 'post_type' => 'client');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                     <div class="item">
                        <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
                    </div>

                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Section
==========================================-->
<div id="tf-works">
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
        </div>
        <div class="space"></div>

        <div class="categories">
            
            <ul class="cat">
                <li class="pull-left"><h4>Filter by Type:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">Web Design</a></li>
                        <li><a href="#" data-filter=".photography">Photography</a></li>
                        <li><a href="#" data-filter=".app" >Mobile App</a></li>
                        <li><a href="#" data-filter=".branding" >Branding</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div id="lightbox" class="row">

            <?php
                $args = array( 'post_type' => 'portfolio');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
                <div class="col-sm-6 col-md-3 col-lg-3 <?php echo get_post_meta( get_the_ID(), 'type_1', true ) ?> <?php echo get_post_meta( get_the_ID(), 'type_2', true ) ?>">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4><?php the_title(); ?></h4>
                                    <small><?php echo get_post_meta( get_the_ID(), 'type_1', true ) ?> <?php echo get_post_meta( get_the_ID(), 'type_2', true ) ?></small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <?php echo get_the_post_thumbnail( $page->ID, 'post-thumbnails', array('class' => 'img-responsive' ) ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            ?>

        </div>
    </div>
</div>

<!-- Testimonials Section
==========================================-->
<div id="tf-testimonials" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Our clients’</strong> testimonials</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <?php
                            $args = array( 'post_type' => 'testimoni');
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                        ?>

                            <div class="item">
                                <h5><?php the_content(); ?></h5>
                                <p><strong><?php echo get_post_meta( get_the_ID(), 'author', true ) ?></strong>, <?php echo get_post_meta( get_the_ID(), 'office', true ) ?></p>
                            </div>

                        <?php
                            endwhile;
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section
==========================================-->
<div id="tf-contact" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">
                    <h2>Feel free to <strong>contact us</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            
                </div>

                <?php 

                    $query = new WP_Query( 'pagename=contact' );

                    while ( $query->have_posts() ) : $query->the_post();

                    the_content();
                    
                    endwhile;
                    wp_reset_postdata();
                ?>

            </div>
        </div>

    </div>
</div>