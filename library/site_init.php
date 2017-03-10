<?php

/* 

Add pages on theme activation
 - will NOT overwrite existing pages of the same name
 - Will re-add pages if deleted 

*/
function add_pages($pages){
  if (isset($_GET['activated']) && is_admin()){
    foreach ($pages as $page) {
      add_page($page['page_title']);
    }
  }
}


function add_page($new_page_title, $new_page_content = 'Coming Soon', $new_page_template = '', $post_author_id = 1){

  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
    'post_type' => 'page',
    'post_title' => $new_page_title,
    'post_content' => $new_page_content,
    'post_status' => 'publish',
    'post_author' => $post_author_id,
  );
  if(!isset($page_check->ID)){
    $new_page_id = wp_insert_post($new_page);
    if(!empty($new_page_template)){
      update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
    }
  }

}