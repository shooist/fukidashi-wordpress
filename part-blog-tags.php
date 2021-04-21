<?php 
  /**
   * $args: taxonomy name
   */

  $terms = get_the_terms( $posts->ID, $args[0] );

  if ( $terms && ! is_wp_error( $terms ) ) {
    echo '<ul class="Common__blogTags">';
    foreach ( $terms as $term ) {
      echo '<li class="Common__blogTagsItem"><a href="'. home_url('/'. $term->taxonomy. '/'. $term->slug). '"><span>#</span>'. $term->name. '</a></li>';
    }
    echo '</ul>';
  }
?>