<div class="TechBlog__sidebar">
  <section class="TechBlog__sidebarSection">
    <div class="TechBlog__sidebarTitle">
       New Posts</div>
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'tech-blog',
        'posts_per_page' => 4,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $posts = new WP_Query($args);
    ?>
    <ul class="TechBlog__newPostsLists"> 
      <?php while( $posts->have_posts() ): $posts->the_post(); ?>
        <li class="TechBlog__newPostsItem"><a href="<?php the_permalink(); ?>">
            <time class="TechBlog__newPostsDate" datetime="<?php the_time( 'Y-m-d' ); ?>">
            <?php the_time( 'Y.m.d' ); ?></time>
            <div class="TechBlog__newPostsTitle">
              <?php the_title(); ?></div></a></li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </section>
  <section class="TechBlog__sidebarSection"> 
    <div class="TechBlog__sidebarTitle">
       Tags</div>
    <?php
     $taxonomy = "tag_tech";
     $terms = get_terms( $taxonomy, ['orderby' => 'id'] );
     
     if ( $terms && ! is_wp_error( $terms ) ) {
       echo '<ul class="Common__blogTags">';
       foreach( $terms as $term ) {
         echo '<li class="Common__blogTagsItem"><a href="'. home_url('/'. $term->taxonomy. '/'. $term->slug). '"><span>#</span>'. $term->name. '</a></li>';
       }
       echo '</ul>';
     }
    ?>
  </section>
</div>