
    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Robert Berki</a> and Coded by <a href="https://dribbble.com/jennpereira">Jenn Pereira</a></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <?php
                        $args = array( 'post_type' => 'media');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>

                        <li><a href="<?php echo get_post_meta( get_the_ID(), 'url', true ); ?>"><i class="<?php echo get_post_meta( get_the_ID(), 'icon', true )  ?>"></i></a></li>

                    <?php
                        endwhile;
                    ?>
                    
                </ul>
            </div>
        </div>
    </nav>
    
    <?php wp_footer(); ?>



  </body>
</html>