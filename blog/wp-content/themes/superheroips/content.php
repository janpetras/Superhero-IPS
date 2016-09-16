                  <div class="<?php $tags = get_the_tags(); foreach($tags as $tag) {echo "$tag->name";}?> grid-item grid-sizer col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="">
                           <div class="popup-call">
                              <a href="<?php the_post_thumbnail_url('full'); ?>" class="gallery-item"><i class="flaticon-arrows-4"></i></a>
                           </div>
                              <?php if ( has_post_thumbnail() ) {
                                 the_post_thumbnail( 'large', array( 'class' => 'centred img-responsive' ) );
                           } ?>
                           <figcaption>
                              <div class="post-meta"><span>by <a href="#!"><?php the_author(); ?></a>,</span> <span><?php the_date(); ?></span></div>
                              <div class="post-header">
                                 <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                              </div>
                              <div class="post-entry">
                                 <p><?php the_excerpt(); ?></p>
                              </div>
                              <div class="post-tag pull-left">
                                 <span><a href="#<?php $tags = get_the_tags(); foreach($tags as $tag) {echo "$tag->name";}?>" data-filter=".<?php $tags = get_the_tags(); foreach($tags as $tag) {echo "$tag->name";}?>"><?php $tags = get_the_tags(); foreach($tags as $tag) {echo "$tag->name";}?></a></span>
                              </div>
                              <div class="post-more-link pull-right"><a href="<?php the_permalink(); ?>">More<i class="fa fa-long-arrow-right right"></i></a></div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>
