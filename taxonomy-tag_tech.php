<?php get_header(); ?>
<?php
  $term = get_queried_object();
?>
    <div class="TechBlogTags">
      <div class="TechBlogTags__container"> 
        <div class="TechBlogTags__contents">
          <h1 class="TechBlogTags__contentsTitle"><?php echo $term->name; ?>&nbsp;の記事一覧</h1>
          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'post_type' => 'tech-blog',
              'posts_per_page' => 10,
              'paged' => $paged
            );
            if ( is_tax() ) {
              $term = get_queried_object();
              $tax_query = array(
                array(
                  'taxonomy' => $term->taxonomy,
                  'field' => 'slug',
                  'terms' => $term->slug,
                )
              );
              $args['tax_query'] = $tax_query;
            }
            $posts = new WP_Query( $args );
          ?>
          <div class="Common__articleLists">
            <?php while( $posts->have_posts() ): $posts->the_post(); ?>
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
                    <time class="Common__articleDate" datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time('Y.m.d'); ?></time>
                    <div class="Common__articleTitle">
                      <?php the_title(); ?></div></a>
<?php get_template_part( 'part', 'blog-tags', array( 'tag_tech' ) ); ?>
                </div>
              </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
<?php get_template_part( 'part', 'tech-blog-sidebar' ); ?>
      </div>
    </div>
<?php get_footer(); ?>