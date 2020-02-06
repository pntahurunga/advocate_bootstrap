

<?php get_header('index'); ?> 
<!-- services -->
<section class="section-service">
        <div class="container section-header">
            <h4 class="header-4">What we do</h4>
        </div>
        <div class="container services">
            <div class="card mb-3 card-service" style="max-width: 540px;">
                <div class="row no-gutters servics-img">
                  <div class="col-md-4 hide hide">
                    <i class="icofont-law-alt-2 icon"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Advocacy</h5>
                        <ul>
                          <li>Ligal right</li>
                          <li>Youth engagement</li>
                          <li>Refugee resetlement guidance</li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 card-service" style="max-width: 540px;">
                <div class="row no-gutters servics-img">
                  <div class="col-md-4 hide">
                    <i class="icofont-graduate-alt icon"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Education</h5>
                      <ul>
                        <li>College planning</li>
                        <li>School Supplies</li>
                        <li>Financial Aid sessions</li>
                        <li>Mentoring</li>
                        <li>English tutoring</li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 card-service" style="max-width: 540px;">
                <div class="row no-gutters servics-img">
                  <div class="col-md-4 hide">
                    <i class="icofont-people icon"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Outreach</h5>
                      <ul>
                        <li>Clothing & food aid</li>
                        <li>Job search assistance</li>
                        <li>Affordable housing</li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

    <!-- partners -->
    <section class="partner">
        <div class="container section-header">
          <h4 class="header-4">Our Supporters</h4>
        </div>
        <div class="container">
          <blockquote class="blockquote text-center">
            <p class="mb-0">Creating a better world requires teamwork, partnerships, and collaboration, as we need an entire army of companies to work together to build a better world within the next few decades. This means corporations must embrace the benefits of cooperating with one another.</p>
            <footer class="blockquote-footer">Simon Mainwaring<cite title="Source Title"></cite></footer>
          </blockquote>
        </div>
        <div class="patener-wrapper container">
          <div class="partner-1"><img src="<?php echo get_template_directory_uri();?>/image/apc.png" alt="" srcset=""></div>
          <div class="partner-1"><img src="<?php echo get_template_directory_uri();?>/image/MHCUCClogo.png" alt="" srcset=""></div>
          <div class="partner-1"><img src="<?php echo get_template_directory_uri();?>/image/ECPL_rgb.png" alt="" srcset=""></div>
        </div>
    </section>

    <!-- blog posts -->
    <section class="section-post">
        <div class="container section-header">
            <h4 class="header-4">Recent posts</h4>
        </div>
        <div class="container posts">
        <!-- card -->            
          <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 6, 
                'post_status' => 'publish',
                'meta_value' => '', 
                'order'=> 'DESC',
                'include' => '',
                'exclude' => '',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'post_status' => 'draft, publish, future, pending, private',
                'suppress_filters' => true,
            ));
            foreach($recent_posts as $post) : ?>
                <div class="card" style="width: 18rem;">
                    <?php echo get_the_post_thumbnail($post['ID'], 'small-thumbnail'); ?>
                    <div class="card-body">
                        <h5 class="card-title"><a style="color: inherit;" href="<?php the_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a></h5>
                        <p class="text_small"><span><i class="icofont-ui-user"></i><?php the_author_meta( 'display_name', $post['post_author'] ); ?></span> 	&nbsp;
                        <span><i class="icofont-calendar"></i><?php the_time('F jS, Y'); ?></span> </p>
                        <a href="<?php the_permalink($post['ID']) ?>" class="btn btn-primary">read more</a>
                    </div>
                </div>
            <?php endforeach; wp_reset_query(); ?>
          <!-- end card -->
        </div>
    </section>

<?php

    get_footer();
?>


