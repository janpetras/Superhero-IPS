<?php if ( post_password_required() ) {
   return;
} ?>
<div id="comments" class="wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
   <?php if ( have_comments() ) : ?>
      <h4 class="font-accident-one-light uppercase">
         <?php printf( _nx( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
               number_format_i18n( get_comments_number() ), get_the_title() );
      ?>         
   </h4>
   <div class="dividewhite4"></div>
      <ul class="media-list">
         <?php 
            wp_list_comments( array(
               'short_ping'  => true,
               'avatar_size' => 50,
            ) );
      ?>
   </ul>
<?php endif; ?>
<hr>
</div>
<div class="wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
   <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
      <p class="no-comments">
         <?php _e( 'Comments are closed.' ); ?>
   </p>
<?php endif; ?>    
</div>
<?php comment_form(); ?>  
</div>
