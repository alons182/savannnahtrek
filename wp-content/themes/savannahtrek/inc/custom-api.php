<?php



function get_tours($request){

   return $request['lang'];
    
    $args = array(
        'post_type' => 'tour',
        'lang' => $request['lang'],
        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
        'posts_per_page' => -1,
       
        
      );
      $items = new WP_Query( $args );

      return $items->posts;
   
}



add_action('rest_api_init', function () {
  
    register_rest_route('alo/v1', '/tours', array(
        'methods' => 'GET',
        'callback' => 'get_tours',
    ));

   

 
});
