<?php get_header(); ?>
    <div class="TechBlog">
      <div class="TechBlog__container">
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'post_type' => 'tech-blog',
            'posts_per_page' => 10,
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $posts = new WP_Query( $args );
        ?>
        <div class="TechBlog__contentsList">
          <?php while( $posts->have_posts() ): $posts->the_post(); ?>
            <article class="TechBlog__contentsItem"><a href="<?php the_permalink(); ?>">
                <div class="TechBlog__itemImage">
                  <?php
                    if ( has_post_thumbnail() ) {
                      $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0];
                    } else {
                      $img_url = get_template_directory_uri(). '/img/TechBlog/TechBlog__thumbnail--default.png';
                    }
                  ?>
                  <img src="<?php echo $img_url; ?>">
                </div>
                <time class="TechBlog__itemDate" datetime="<?php the_time( 'Y-m-d' ); ?>">
                <?php echo the_time( 'Y.m.d' ); ?></time>
                <h2 class="TechBlog__itemTitle">
                  <?php the_title(); ?></h2></a>
                  <?php get_template_part( 'part', 'blog-tags', array( 'tag_tech' ) ); ?>
            </article>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
<?php get_template_part( 'part', 'tech-blog-sidebar' ); ?>
      </div>
    </div>
<?php get_footer(); ?>