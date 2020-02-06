<?php 
    get_header(); 
    if(have_posts()):
        while(have_posts()): the_post();

?>
<section class="section-post">
    <div class="container post-single">
        <div class="post-content">
            <div class="post-header">
                <h4 class="header-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><span class="text_small"><?php the_time('F jS, Y');?></span> <span class="text_small"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a></span></p>
            </div>
            <?php the_content(); ?>
        </div>
        <!-- sideer -->
        <div class="post-sider">
                <div>
                    <h5 class="header-5">Featured in local news</h5>
                    <div class="scripps_iframe_embed " style="position:relative;">
                        <div style="display:block;width:100%;height:auto;padding-bottom:56.25%;">
                    </div>
                        <iframe style="position:absolute;top:0;left:0;width:100%; height:100%;" border="0" height="100%" frameborder="0" webkitallowfullscreen="" allowfullscreen="" mozallowfullscreen="" scrolling="no" scrolling="no" src="https://assets.scrippsdigital.com/cms/videoIframe.html?&vpost=https://x-default-stgec.uplynk.com/ausc/slices/9bd/b2c1c5c2af374f52af57ddcae54c6663/9bd7c2df8d0f45c2996163896da844b1/poster_9664120c3f66423a9bf6b14e399b9557.jpg&host=www.news5cleveland.com&title=A%20local%20refugee%20gives%20back%20to%20others%20in%20need&m3u8=https://content.uplynk.com/9bd7c2df8d0f45c2996163896da844b1.m3u8&purl=/news/e-team/cleveland-state-student-helps-refugees-from-africa-transition-for-life-in-the-states&story=0&ex=1&s=wews">
                        </iframe>
                    </div>
                    <!-- <div class="post-img"></div> -->
                </div>
                <div>
                    <h5 class="header-5">Recent posts</h5>
                    <div class="post-img">
                    <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 15, 
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
                        foreach($recent_posts as $post) :?>
                             <div class="post-img-container">
                                <a style="color: inherit;" href="<?php the_permalink($post['ID']) ?>">
                                <img class="post-img-side" src=\"<?php echo get_the_post_thumbnail($post['ID']); ?>
                                </a>
                            </div>
                        <?php endforeach; wp_reset_query(); ?>
                    <!-- 
                    <div class="post-img-container"><img class="post-img-side" src="https://images.unsplash.com/photo-1558981852-426c6c22a060?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" alt="" srcset=""></div>
                    <div class="post-img-container"></div>
                    <div class="post-img-container"></div>
                    <div class="post-img-container"></div>
                    <div class="post-img-container"></div>
                    <div class="post-img-container"></div> -->
                    </div>
                </div>

            </div>
                
        </div>


    </div>

</section>

<?php endwhile;
    else:
        echo '<p>No content found</p>'; 
    endif;

    get_footer();
?>


