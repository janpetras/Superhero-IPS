<?php get_header(); ?>

<!-- Container -->
<div class="content-wrap">
   <div id="blog" class="inner-content">
      <section id="page-title" class="inner-section">
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
            <h2 class="font-accident-two-normal uppercase">Blog</h2>
            <h5 class="font-accident-one-bold hovercolor uppercase">Because you never know when you need something to read...</h5>
            <p class="small fontcolor-medium">
               The media wants overnight successes (so they have someone to tear down). Ignore them. Ignore the early adopter critics who never have enough to play with. Ignore your investors who want proven tactics and predictable instant results. Listen instead to your real customers, to your vision, and make something for the long haul. Because that's how long it's going to take. - Seth Godin.
            </p>
         </div>
      </section>
      
      <!-- Blog Block -->
      <section class="inner-section">
         <div id="isotope-filters" class="port-filter port-filter-light text-center wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
            <ul>
               <li><a href="#all" data-filter="*">All Categories</a></li>
               <li><a href="#marketing" data-filter=".marketing">marketing</a></li>
               <li><a href="#misc" data-filter=".misc">misc</a></li>
            </ul>
         </div>
         <div class="dividewhite3"></div>
         <div class="grid container-fluid text-center wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
            <div id="posts" class="row popup-container">
               <?php 
                  if ( have_posts() ) : while ( have_posts() ) : the_post();
                     get_template_part( 'content', get_post_format() );
               endwhile; endif; 
            ?>
         </div>
      </div>
   </section>
      <!-- /Blog Block -->
</div>
</div>

<?php get_footer(); ?>