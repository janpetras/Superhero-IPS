   <section id="page-title" class="inner-section">
      <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
         <h2 class="font-accident-two-normal uppercase"><?php the_title(); ?></h2>
         <div class="post-meta"><span>by <a href="#!"><?php the_author(); ?></a>,</span> <span><?php the_date(); ?></span></div>
         <div class="post-tag pull-left"><span><?php the_tags(); ?></span></div>
   </div>
</section>
      
   <!-- Blog Block -->
   <section class="inner-section">
      <div class="container-fluid nopadding">
         <div class="img-responsive wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
            <?php if ( has_post_thumbnail() ) {
               the_post_thumbnail( 'full', array( 'class' => 'centred img-responsive wow fadeInDown' ) );
            } ?>
         </div>
         <article class="post wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
            <div class="dividewhite6"></div>
               <!-- Post Content -->
               <p>
                  <?php the_content(); ?>
            </p>
               <!-- /Post Content -->
            <div class="dividewhite4"></div>
               <hr>
      </article>
      