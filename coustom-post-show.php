

/* post show */


<ul class="latest_postnav">
              
    <?php $the_query = new WP_Query( 'posts_per_page=10'); ?>
                            
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                          <li>
                            <div class="media"> <a href="pages/single_page.html" class="media-left"> <?php the_post_thumbnail();?> </a>
                              <div class="media-body"><a href="<?php the_permalink() ?>"  class="catg_title"><?php the_title();
                                
                              ?></a>
                               

                            </div>
                          </li>
                            
                          <?php 
                          endwhile;
                          wp_reset_postdata();
                          ?>
            </ul>

/* Show Custom Post*/

 <ul class="photograph_nav  wow fadeInDown">
              <?php 
                          $slidermy= new WP_Query(array(
                                'post_type'=>array('slider'),
                              ));

                              while($slidermy->have_posts()):$slidermy->the_post();


                             
                              ?>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <?php the_post_thumbnail();?></a> </figure>
                </div>
              </li>
              <?php
               endwhile; 
               ?>
            </ul>