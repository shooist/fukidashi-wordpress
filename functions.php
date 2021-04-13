<?php

/**
 * タイトル区切り文字をカスタマイズ
 */
function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );