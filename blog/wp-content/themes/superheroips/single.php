<?php get_header(); ?>
<!-- Container -->
<div class="content-wrap">
   <div id="blogpost" class="inner-content">
               <?php 
                  if ( have_posts() ) : while ( have_posts() ) : the_post();
                     get_template_part( 'content-single', get_post_format() );
                  if ( comments_open() || get_comments_number() ) :
                     comments_template();
               endif;
               endwhile; endif; 
            ?>
      </section>
      <!-- /Blog Block -->

   </div>

</div>
<?php get_footer(); ?>