<?php get_header(); ?>
<?php
  $url_encode = urlencode( get_permalink() );
  $title_encode = urlencode( get_the_title() ). '｜'. get_bloginfo( 'name' );
?>
<?php 
  $taxonomy = 'tag_tech';
  $terms = get_the_terms($posts->ID, $taxonomy);
  $term = $terms[0];
?>
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <div class="TechBlogDetail">
      <div class="TechBlogDetail__container"> 
        <div class="TechBlogDetail__contents"> 
          <div class="TechBlogDetail__contentsHeader">
<?php get_template_part( 'part', 'blog-tags', array( 'tag_tech' ) ); ?>                
            <time class="TechBlogDetail__articleDate" datetime="<?php the_time( 'Y-m-d' ); ?>" itemprop="datepublished">
            <?php the_time( 'Y.m.d' ); ?></time>
          </div>
          <h1 class="TechBlogDetail__articleTitle">
             <?php the_title(); ?></h1>
          <div class="TechBlogDetail__articleEyeCatch">
            <?php
              if ( has_post_thumbnail() ) {
                $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0];
              } else {
                $img_url = get_template_directory_uri(). '/img/TechBlog/TechBlog__thumbnail--default.png';
              }
            ?>
            <img src="<?php echo $img_url; ?>">
          </div>
          <div class="Common__article">
            <?php the_content(); ?>
          </div>
              <div class="Common__articleFooter"> 
                <div class="Common__snsContainer"> 
                  <div class="Common__snsTitle">記事をシェアする</div>
                  <div class="Common__snsSplit">|</div>
                  <ul class="Common__snsLists"> 
                    <li class="Common__snsItem"><a href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/Common/icon--twitter.svg"></a></li>
                    <li class="Common__snsItem"><a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Common/icon--facebook.svg"></a></li>
                  </ul>
                </div>
              </div>
<?php endwhile; endif; ?>

              <div class="Common__relatePosts"> 
                <div class="Common__relatePostsTitle">
                   RelatePosts </div>
                    <?php
                      $args = array(
                        'post_type' => 'tech-blog',
                        'posts_per_page' => 3,
                        'order' => 'DESC',
                        'orderby' => 'date',
                      );
                      $tax_query = array(
                        array(
                          'taxonomy' => $term->taxonomy,
                          'field' => 'slug',
                          'terms' => $term->slug,
                        )
                      );
                      $args['tax_query'] = $tax_query;
                      $posts = new WP_Query( $args );
                    ?>  
                    <div class="Common__articleLists">
                      <?php while($posts->have_posts()): $posts->the_post(); ?>
                        <article class="Common__articleItem"> <a class="Common__articleThumbnail" href="<?php the_permalink(); ?>"> 
                          <?php
                            if ( has_post_thumbnail() ) {
                              $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0];
                            } else {
                              $img_url = get_template_directory_uri(). '/img/TechBlog/TechBlog__thumbnail--default.png';
                            }
                          ?>
                          <img src="<?php echo $img_url; ?>"></a>
                          <div class="Common__articleBody"><a class="Common__articleLink" href="<?php the_permalink(); ?>">
                              <time class="Common__articleDate" time-date="<?php the_time( 'Y-m-d' ); ?>">
                              <?php the_time( 'Y.m.d' ); ?></time>
                              <div class="Common__articleTitle">
                                <?php the_title(); ?></div></a>
<?php get_template_part( 'part', 'blog-tags', array( 'tag_tech' ) ); ?>    
                          </div>
                        </article>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                    </div>
              </div>
        </div>
<?php get_template_part( 'part', 'tech-blog-sidebar' ); ?>
      </div>
    </div>
<?php get_footer(); ?>