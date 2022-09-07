$designer_cat = wp_get_post_terms(get_the_ID(), 'progetti_cat');
$get_term_id = $designer_cat[0]->term_id;
$single_page_design_title = get_term_meta($get_term_id, 'single_page_design_title');
