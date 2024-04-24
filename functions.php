<?php 
define('THEME_URL', get_template_directory());
require_once( THEME_URL.'/core/menu-bootstrap.php' );

if ( !function_exists('pdd_theme_setup') ) {
    function pdd_theme_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array(
            // 'image',
            // 'video',
            // 'gallery',
            // 'quote',
            'link'
        ) );
   
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'pdd' ),
        ) );
        register_nav_menus( array(
            'menu-2' => esc_html__( 'Mobile', 'pdd' ),
        ) );
        register_nav_menus( array(
            'menu-3' => esc_html__( 'HomePage', 'pdd' ),
        ) );
        register_nav_menu( 'footer-menu', __('Footer Menu', 'pdd') );

        $footer_top_sidebar = array(
            'name' => __('Footer Top Left Sidebar', 'pdd'),
            'id' => 'footer_top_sidebar',
            'description' => __('Footer Top Left Sidebar'),
            'class' => 'footer_top_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_top_sidebar );

        $footer_top_right_sidebar = array(
            'name' => __('Footer Top Right Sidebar', 'pdd'),
            'id' => 'footer_top_right_sidebar',
            'description' => __('Footer Top Right Sidebar'),
            'class' => 'footer_top_right_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_top_right_sidebar );

        $footer_bottom_col_1_sidebar = array(
            'name' => __('Footer Bottom Column 1 Sidebar', 'pdd'),
            'id' => 'footer_bottom_col_1_sidebar',
            'description' => __('Footer Bottom Column 1 Sidebar'),
            'class' => 'footer_bottom_col_1_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_bottom_col_1_sidebar );

        $footer_bottom_col_2_sidebar = array(
            'name' => __('Footer Bottom Column 2 Sidebar', 'pdd'),
            'id' => 'footer_bottom_col_2_sidebar',
            'description' => __('Footer Bottom Column 2 Sidebar'),
            'class' => 'footer_bottom_col_2_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_bottom_col_2_sidebar );

        $footer_bottom_col_3_sidebar = array(
            'name' => __('Footer Bottom Column 3 Sidebar', 'pdd'),
            'id' => 'footer_bottom_col_3_sidebar',
            'description' => __('Footer Bottom Column 3 Sidebar'),
            'class' => 'footer_bottom_col_3_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_bottom_col_3_sidebar );
    }
    add_action( 'init', 'pdd_theme_setup' );
}

/*=====Nhúng file style.css=====*/
function pdd_style() {

    wp_register_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", 'all' );
    wp_enqueue_style('bootstrap');
    wp_register_style( 'font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", 'all' );
    wp_enqueue_style('font-awesome');
    wp_register_style( 'slick-slider', get_template_directory_uri() . "/assets/css/slick.css", 'all' );
    wp_enqueue_style('slick-slider');
    wp_register_style( 'slick-themes', get_template_directory_uri() . "/assets/css/slick-theme.css", 'all' );
    wp_enqueue_style('slick-themes');
    wp_register_style( 'aos-css', get_template_directory_uri() . "/assets/css/aos.css", 'all' );
    wp_enqueue_style('aos-css');
    wp_register_style( 'datepicker-css', get_template_directory_uri() . "/assets/css/jquery.datetimepicker.css", 'all' );
    wp_enqueue_style('datepicker-css');
    wp_register_style( 'wp-style', get_template_directory_uri() . "/style.css", 'all' );
    wp_enqueue_style('wp-style');
    wp_register_style( 'main', get_template_directory_uri() . "/assets/css/main.css", 'all', '1' );
    wp_enqueue_style('main');

    // Custom script
    wp_enqueue_script('jquery');
    wp_register_script( 'bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", 'all', '', true );
    wp_enqueue_script('bootstrap');
    wp_register_script( 'slick-slider', get_template_directory_uri() . "/assets/js/slick.min.js", 'all', '', true );
    wp_enqueue_script('slick-slider');
    wp_register_script( 'aos-js', get_template_directory_uri() . "/assets/js/aos.js", 'all', '', true );
    wp_enqueue_script('aos-js');
    wp_register_script( 'datepicker-js', get_template_directory_uri() . "/assets/js/jquery.datetimepicker.full.min.js", 'all', '', true );
    wp_enqueue_script('datepicker-js');
    wp_register_script( 'notify', get_template_directory_uri() . "/assets/js/notify.min.js", 'all', '', true );
    wp_enqueue_script('notify');
    wp_register_script( 'main', get_template_directory_uri() . "/assets/js/main.js", 'all', '1.1.9', true );
    wp_enqueue_script('main');
    $hiteko = array( 
                    'site_url' => get_option( 'siteurl'),
                    'template_dir' => get_template_directory_uri()
                );
    wp_localize_script( 'main', 'hiteko', $hiteko );
    if(is_user_logged_in()):
        wp_register_script( 'internal', get_template_directory_uri() . "/assets/js/internal.js", 'all', true );
        wp_enqueue_script('internal');
    endif;

}
add_action('wp_enqueue_scripts', 'pdd_style');

function hiteko_admin_scripts() {
    wp_register_script( 'admin', get_template_directory_uri() . "/assets/js/admin.js", 'all', '1.1.9', true );
    wp_enqueue_script('admin');
}
add_action('admin_enqueue_scripts', 'hiteko_admin_scripts');

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', get_template_directory_uri() . "/assets/js/jquery.min.js", array(), '3.1.1' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', get_template_directory_uri() . "/assets/js/jquery-migrate-3.1.0.min.js", array(), '3.0.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

//Lesson Learn
function create_lesson_learn_post_type() {
    $label = array(
        'name' => 'Lesson Learn', 
        'singular_name' => 'lesson learn' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Lesson Learn', 
        'supports' => array(
            'title',
            'thumbnail',
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-welcome-learn-more', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('lesson learn', $args);
 
}
add_action('init', 'create_lesson_learn_post_type');

//User Comment CPT
function create_usercmt_post_type() {
    $label = array(
        'name' => 'User Comment', 
        'singular_name' => 'user comment' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type User Comment', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-admin-comments', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('usercmt', $args);
 
}
add_action('init', 'create_usercmt_post_type');
//Project Post Type
function create_project_post_type() {
    $label = array(
        'name' => 'Projects', 
        'singular_name' => 'projects' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Products', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-admin-post', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('projects', $args);
 
}
add_action('init', 'create_project_post_type');
//Business Post Type
function create_business_post_type() {
    $label = array(
        'name' => 'Business', 
        'singular_name' => 'business' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Business', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-businesswoman', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('business', $args);
 
}
add_action('init', 'create_business_post_type');
// Realty Post Type
function create_realty_post_type() {
    $label = array(
        'name' => 'Realty', 
        'singular_name' => 'realty' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Realty', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-admin-home', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('realty', $args);
 
}
add_action('init', 'create_realty_post_type');
function create_possision_post_type() {
    $label = array(
        'name' => 'Possision', 
        'singular_name' => 'possision' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Possision', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-groups', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('possision', $args);
 
}

add_action('init', 'create_possision_post_type');

function create_admin_business_post_type() {
    $label = array(
        'name' => 'Admin Business', 
        'singular_name' => 'admin-business' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Admin Business', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-image-filter', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('admin-business', $args);
 
}

add_action('init', 'create_admin_business_post_type');
//Daily To Do List
function create_daily_to_do_list_post_type() {
    $label = array(
        'name' => 'Daily To Do List', 
        'singular_name' => 'daily_to_do_list' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Daily To Do List', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-list-view', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('daily_to_do_list', $args);
 
}
add_action('init', 'create_daily_to_do_list_post_type');
//Categories of realty
function create_realty_taxonomies() {
    $labels = array(
        'name'              => __( 'Realty Catogries' ),
        'singular_name'     => __( 'Categories' ),
        'search_items'      => __( 'Search' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category :' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Realty Catogries' ),
    );   
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'realty-cat' ),
    );
    register_taxonomy( 'realty-cat', array('realty'), $args ); 
    flush_rewrite_rules();
}
add_action( 'init', 'create_realty_taxonomies', 0 );

//Categories of possision
function create_possision_taxonomies() {
    $labels = array(
        'name'              => __( 'Possision Catogries' ),
        'singular_name'     => __( 'Categories Possision' ),
        'search_items'      => __( 'Search' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category :' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Possision Catogries' ),
    );   
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'possision-cat' ),
    );
    register_taxonomy( 'possision-cat', array('possision'), $args ); 
    flush_rewrite_rules();
}
add_action( 'init', 'create_possision_taxonomies', 0 );


//Categories of Admin
function create_admin_business_taxonomies() {
    $labels = array(
        'name'              => __( 'Admin Catogries' ),
        'singular_name'     => __( 'Categories Admin' ),
        'search_items'      => __( 'Search' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category :' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Admin Catogries' ),
    );   
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'admin-cat' ),
    );
    register_taxonomy( 'admin-cat', array('admin-business'), $args ); 
    flush_rewrite_rules();
}
add_action( 'init', 'create_admin_business_taxonomies', 0 );

//Categories of Projects
function create_projects_taxonomies() {
    $labels = array(
        'name'              => __( 'Projects Catogries' ),
        'singular_name'     => __( 'Categories Projects' ),
        'search_items'      => __( 'Search' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category :' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Projects Catogries' ),
    );   
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'projects-cat' ),
    );
    register_taxonomy( 'projects-cat', array('projects'), $args ); 
    flush_rewrite_rules();
}
add_action( 'init', 'create_projects_taxonomies', 0 );

// Ajax Realty
add_action('wp_ajax_get_realty', 'get_realty');
add_action('wp_ajax_nopriv_get_realty', 'get_realty');
function get_realty(){
    $post_id = (int)$_GET['post_id'];
    $post = query_posts(array( 
        'post_type' => 'realty',
        'showposts' => -1,
        'order' => 'ASC',
        'tax_query' => array(
            array (
            'taxonomy' => 'realty-cat',
            'field' => 'term_id',
            'terms' => $post_id
                )       
            )
        )
    ); 
    $arr_post = [];
    while(have_posts()):the_post(); {
        $item = [];
        $item['thumbnail'] = get_the_post_thumbnail_url($post->ID, 'full'  );
        $item['title'] = get_the_title( $post->ID );
        $item['name'] = get_field('project_name',$post->ID);
        $item['description'] = get_field('description',$post->ID);
        $item['link'] = get_the_permalink($post->ID);
        $arr_post[] = $item;
    }
    endwhile;
    wp_reset_query();
    echo json_encode($arr_post);
    exit;
}

add_action('init', function(){

  // not the login request?
  if(!isset($_POST['action']) || $_POST['action'] !== 'my_login_action')
    return;

  // see the codex for wp_signon()
  $result = wp_signon();

  if(is_wp_error($result))
    wp_die('Login failed. Wrong password or user name?<br><a href="'.site_url().'">Quay lại trang chủ.</a>');

  // redirect back to the requested page if login was successful    
  header('Location: ' . site_url().'#section7');
  exit;
});

// Ajax News
add_action('wp_ajax_get_news', 'get_news');
add_action('wp_ajax_nopriv_get_news', 'get_news');
function get_news(){
    $post_id = (int)$_GET['post_id'];
    $post = query_posts(array( 
        'showposts' => -1,
        'order' => 'ASC',
        'cat' => $post_id
        )
    ); 
    $arr_post = [];
    $index=1;
    while(have_posts()):the_post();  ?>
        <?php if($index==1 || ($index - 1)%4==0): echo '<div class="list-news-item">
            <div class="row">';endif; ?>
                <div class="col-md-6 pb-md-5">
                    <div class="img-news">
                        <?php the_post_thumbnail( 'full', ['class'=>'img-fluid'] ) ?>
                    </div>
                    <div class="heading">
                        <div class="date">
                            <?php echo get_the_date( 'F d, Y' ) ?>
                        </div>
                        <div class="title">
                            <?php the_title(); ?>
                        </div>
                    </div>
                    <div class="body">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="see-more">
                        <a href="<?php echo get_the_permalink() ?>" class="utm-b">Xem thêm</a>
                    </div>
                </div>
        <?php if($index %4 ==0): echo'
            </div>
        </div>'; endif; ?>
    <?php $index++;
    endwhile;
    wp_reset_query();
    exit;
}
// Ajax Recruitment
add_action('wp_ajax_get_recruitment', 'get_recruitment');
add_action('wp_ajax_nopriv_get_recruitment', 'get_recruitment');
function get_recruitment(){
    $post_id = (int)$_GET['post_id'];
    $post = query_posts(array( 
        'post_type' => 'possision',
        'showposts' => -1,
        'order' => 'ASC',
        'tax_query' => array(
            array (
            'taxonomy' => 'possision-cat',
            'field' => 'term_id',
            'terms' => $post_id
                )       
            )
        )
    ); 
    $arr_post = [];
    while(have_posts()):the_post(); {
        $item = [];
        $item['thumbnail'] = get_the_post_thumbnail_url($post->ID, 'full'  );
        $item['title'] = get_the_title( $post->ID );
        $item['name'] = get_field('possision',$post->ID);
        $item['description'] = get_field('description',$post->ID);
        $item['link'] = get_the_permalink($post->ID);
        $item['range'] = get_field('range',$post->ID);
        $item['date'] = get_the_date('d/m/Y',$post->ID);
        $arr_post[] = $item;
    }
    endwhile;
    wp_reset_query();
    echo json_encode($arr_post);
    exit;
}

function app_output_buffer() {
    ob_start();
} // soi_output_buffer
add_action('init', 'app_output_buffer');

//Ajax Daily To Do List
add_action('wp_ajax_add_daily', 'add_daily');
function add_daily(){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
    $check = $_POST['check'];
    if(trim($title) != '' && trim($date) != '' && trim($check) != ''){
        $my_post = array(
          'post_title'    => $title,
          'post_status'   => 'publish',
          'post_type'   => 'daily_to_do_list',
          'meta_input' => [
                            'date' => $date,
                            'notes'=> $notes,
                            'check'=> $check,
                            'name' => wp_get_current_user()->ID
                        ]
        );
        wp_insert_post( $my_post );
        echo json_encode( array( 'result' => 1 ));
    } else {
        echo json_encode( array( 'result' => 0 ));
    }
    exit;
}

//Ajax Edit Daily To Do List
add_action('wp_ajax_get_edit_daily', 'get_edit_daily');
function get_edit_daily(){
    $post_id = $_GET['post_id'];
    $current_user = wp_get_current_user();
    if( trim($post_id) != '' ){
        $post = query_posts(array( 
            'post_type' => 'daily_to_do_list',
            'post__in' => [$post_id],
            'showposts' => 1,
            'meta_query' => array(
                array(
                    'key'     => "name",
                    'value'   => $current_user->ID
                ),
            ),
        ));
        if (have_posts()) : 
            while (have_posts() ) {
                the_post();
                echo json_encode( array( 
                                    'result' => 1,
                                    'data' => [ 
                                        'title' => get_the_title(),
                                        'date' => get_field('date'),
                                        'check' => get_field('check'),
                                        'notes' => get_field('notes')
                                    ]
                                ));
            }
        else :
            echo json_encode( array( 'result' => 0 ));
        endif; 
    } else {
        echo json_encode( array( 'result' => 0 ));
    }
    exit;
}

add_action('wp_ajax_save_edit_daily', 'save_edit_daily');
function save_edit_daily(){
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
    $check = $_POST['check'];
    $current_user = wp_get_current_user();
    if( trim($post_id) != '' ){
        $post = query_posts(array( 
            'post_type' => 'daily_to_do_list',
            'post__in' => [$post_id],
            'showposts' => 1,
            'meta_query' => array(
                array(
                    'key'     => "name",
                    'value'   => $current_user->ID
                ),
            ),
        ));
        if (have_posts()) : 
            $update_post = [
                                'ID' => $post_id,
                                'post_title' => $title,
                                'meta_input' => [
                                    'date' => $date,
                                    'notes'=> $notes,
                                    'check'=> $check,
                                    'name' => wp_get_current_user()->ID
                                ]
            ];
            wp_update_post($update_post);
            echo json_encode( array( 'result' => 1 ));
        else :
            echo json_encode( array( 'result' => 0 ));
        endif; 
    } else {
        echo json_encode( array( 'result' => 0 ));
    }
    exit;
}

add_action('wp_ajax_get_daily_list', 'get_daily_list');
function get_daily_list() {
    $page = $_GET['page'];
    $current_user = wp_get_current_user();
    $percent = $_GET['percent'];
    if($percent == 1 ) {
        $percent = '=';
    } else {
        $percent = '!=';
    }
    $post = query_posts(array( 
                'post_type' => 'daily_to_do_list',
                'posts_per_page' => 10,
                'paged' => $page,
                'meta_query' => array(
                    'relation' => 'and',
                    array(
                        'key'     => "name",
                        'value'   => $current_user->ID
                    ),
                    array(
                        'key'     => "check",
                        'value'   => 100,
                        'compare' => $percent
                    ),
                ),
            ));
    $index =  $page * 10  - 10 ; ?>
    <table class="table table-hover text-center daily-to-do-list">
        <thead>
            <tr class="">
                <th class="utm-b">STT<br><span class="utm-i">No.</span></th>
                <th class="utm-b">NỘI DUNG CÔNG VIỆC <br><span class="utm-i">Task</span></th>
                <th class="utm-b">NGƯỜI THỰC HIỆN<br><span class="utm-i">PIC</span></th>
                <th class="utm-b">NGÀY HOÀN THÀNH<br><span class="utm-i">Deadline</span></th>
                <th class="utm-b">GHI CHÚ <br><span class="utm-i">Notes</span></th>
                <th class="utm-b">HOÀN THÀNH <br><span class="utm-i">Check</span></th>
                <th class="utm-b">HÀNH ĐỘNG <br><span class="utm-i">Action</span></th>
            </tr>
        </thead>
        <tbody>
        <?php while ( have_posts() ): the_post(); ?>
            <tr>
                <td><?php echo $index; ?></td>
                <td><?php the_title(); ?></td>
                <td>
                    <?php 
                        $user = get_userdata( get_field('name')); 
                        echo $user->display_name;
                    ?>   
                </td>
                <td><?php the_field('date') ?></td>
                <td><?php the_field('notes') ?></td>
                <td class="d-md-flex flex-md-row justify-content-center  ">
                    <span><a class="quality"><?php the_field('check') ?></a>%</span>
                </td>
                <td>
                    <div class="edit d-inline-block" data-id="<?php echo get_the_ID(); ?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                    <div class="delete d-inline-block" data-delete-id="<?php echo get_the_ID(); ?>">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </td>
            </tr>
            <?php   
            $index++;
            endwhile; ?>
        </tbody>
    </table>
    <div class="page-nav">
        <?php wp_pagenavi(); ?>
    </div>
    <?php wp_reset_query();
    exit;
}

add_action('wp_ajax_delete_daily', 'delete_daily');
function delete_daily() {
    $post_id = $_POST['post_id'];
    wp_delete_post( $post_id, false);
    echo json_encode( array( 'result' => 1 ));
    exit;
}

add_action('wp_ajax_delete_comment', 'delete_comment');
function delete_comment() {
    $post_id = $_POST['post_id'];
    wp_delete_post( $post_id, false);
    echo json_encode( array( 'result' => 1 ));
    exit;
}

//Ajax Edit Daily To Do List Admin
add_action('wp_ajax_get_edit_daily_admin', 'get_edit_daily_admin');
function get_edit_daily_admin(){
    $post_id = $_GET['post_id'];
    $current_user = wp_get_current_user();
    if( trim($post_id) != '' && $current_user->roles[0]=='administrator'){
        $post = query_posts(array( 
            'post_type' => 'daily_to_do_list',
            'post__in' => [$post_id],
            'showposts' => 1,
        ));
        if (have_posts()) : 
            while (have_posts() ) {
                the_post();
                echo json_encode( array( 
                                    'result' => 1,
                                    'data' => [ 
                                        'title' => get_the_title(),
                                        'date' => get_field('date'),
                                        'check' => get_field('check'),
                                        'notes' => get_field('notes')
                                    ]
                                ));
            }
        else :
            echo json_encode( array( 'result' => 0 ));
        endif; 
    } else {
        echo json_encode( array( 'result' => 0 ));
    }
    exit;
}

add_action('wp_ajax_save_edit_daily_admin', 'save_edit_daily_admin');
function save_edit_daily_admin(){
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
    $check = $_POST['check'];
    $current_user = wp_get_current_user();
    if( trim($post_id) != '' && $current_user->roles[0]=='administrator'){
        $post = query_posts(array( 
            'post_type' => 'daily_to_do_list',
            'post__in' => [$post_id],
            'showposts' => 1,
        ));
        if (have_posts()) : 
            $update_post = [
                                'ID' => $post_id,
                                'post_title' => $title,
                                'meta_input' => [
                                    'date' => $date,
                                    'notes'=> $notes,
                                    'check'=> $check,
                                ]
            ];
            wp_update_post($update_post);
            echo json_encode( array( 'result' => 1 ));
        else :
            echo json_encode( array( 'result' => 0 ));
        endif; 
    } else {
        echo json_encode( array( 'result' => 0 ));
    }
    exit;
}

add_action( 'wp_ajax_get_daily_admin','get_daily_admin' );
function get_daily_admin(){
    $page = $_GET['page'];
    $user_id = $_GET['user_id'];
    $percent = $_GET['percent'];
    if($percent == 1 ) {
        $percent = '=';
    } else {
        $percent = '!=';
    }

    if( $user_id !=  0 ){
        $meta_arr = array(
                        'relation' => 'AND',
                        array(
                            'key'     => "check",
                            'value'   => 100,
                            'compare' => $percent
                        ),    
                        array(
                            'key'     => "name",
                            'value'   => $user_id,
                            'compare' => '='
                        ),                            
                    );
    } else {
        $meta_arr = array(
                        array(
                        'key'     => "check",
                        'value'   => 100,
                        'compare' => $percent
                        ),                
                    );
    }
    

    if(wp_get_current_user()->roles[0]=='administrator'){
            $post = query_posts(array( 
                'post_type' => 'daily_to_do_list',
                'posts_per_page' => 10,
                'paged' => $page,
                'meta_query' => $meta_arr
        ));
    }
        $index =  $page * 10  - 10 ; ?>
    <table class="table table-hover text-center daily-to-do-list">
        <thead>
            <tr class="">
                <th class="utm-b">STT<br><span class="utm-i">No.</span></th>
                <th class="utm-b">NỘI DUNG CÔNG VIỆC <br><span class="utm-i">Task</span></th>
                <th class="utm-b">NGƯỜI THỰC HIỆN<br><span class="utm-i">PIC</span></th>
                <th class="utm-b">NGÀY HOÀN THÀNH<br><span class="utm-i">Deadline</span></th>
                <th class="utm-b">GHI CHÚ <br><span class="utm-i">Notes</span></th>
                <th class="utm-b">HOÀN THÀNH <br><span class="utm-i">Check</span></th>
                <th class="utm-b">HÀNH ĐỘNG <br><span class="utm-i">Action</span></th>
            </tr>
        </thead>
        <tbody>
        <?php while ( have_posts() ): the_post(); ?>
            <tr>
                <td><?php echo $index; ?></td>
                <td><?php the_title(); ?></td>
                <td>
                    <?php 
                        $user = get_userdata( get_field('name')); 
                        echo $user->display_name;
                    ?>   
                </td>
                <td><?php the_field('date') ?></td>
                <td><?php the_field('notes') ?></td>
                <td class="d-md-flex flex-md-row justify-content-center  ">
                    <span><a class="quality"><?php the_field('check') ?></a>%</span>
                </td>
                <td>
                    <div class="edit admin d-inline-block" data-id="<?php echo get_the_ID(); ?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                    <div class="delete admin d-inline-block" data-delete-id="<?php echo get_the_ID(); ?>">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </td>
            </tr>
            <?php   
            $index++;
            endwhile; ?>
        </tbody>
    </table>
    <div class="page-nav">
        <?php wp_pagenavi(); ?>
    </div>
    <?php wp_reset_query();
    exit;
}

add_action('wp_ajax_delete_daily_admin', 'delete_daily_admin');
function delete_daily_admin() {
    $post_id = $_POST['post_id'];
    if(wp_get_current_user()->roles[0]=='administrator'){
    wp_delete_post( $post_id, false);
    echo json_encode( array( 'result' => 1 ));
    } else {
    echo json_encode( array( 'result' => 0 ));
    }
    exit;
}


/**
 * Use ACF image field as avatar
 * @author Mike Hemberger
 * @link http://thestizmedia.com/acf-pro-simple-local-avatars/
 * @uses ACF Pro image field (tested return value set as Array )
 */
add_filter('get_avatar', 'tsm_acf_profile_avatar', 10, 5);
function tsm_acf_profile_avatar( $avatar, $id_or_email, $size, $default, $alt ) {
    $user = '';
    
    // Get user by id or email
    if ( is_numeric( $id_or_email ) ) {
        $id   = (int) $id_or_email;
        $user = get_user_by( 'id' , $id );
    } elseif ( is_object( $id_or_email ) ) {
        if ( ! empty( $id_or_email->user_id ) ) {
            $id   = (int) $id_or_email->user_id;
            $user = get_user_by( 'id' , $id );
        }
    } else {
        $user = get_user_by( 'email', $id_or_email );
    }
    if ( ! $user ) {
        return $avatar;
    }
    // Get the user id
    $user_id = $user->ID;
    // Get the file id
    $image_id = get_user_meta($user_id, 'avatar', true); // CHANGE TO YOUR FIELD NAME
    // Bail if we don't have a local avatar
    if ( ! $image_id ) {
        return $avatar;
    }
    // Get the file size
    $image_url  = wp_get_attachment_image_src( $image_id, 'thumbnail' ); // Set image size by name
    // Get the file url
    $avatar_url = $image_url[0];
    // Get the img markup
    $avatar = '<img alt="' . $alt . '" src="' . $avatar_url . '" class="avatar avatar-' . $size . '" height="' . $size . '" width="' . $size . '"/>';
    // Return our new avatar
    return $avatar;
}

//Ajax User Comment
add_action('wp_ajax_send_comment', 'send_comment');
function send_comment(){
    $currentid = $_POST['currentid'];
    $userid = $_POST['userid'];
    $comment = $_POST['comment'];
    if(trim($currentid) != '' && trim($userid) != '' && trim($comment) != ''){
        $my_post = array(
          'post_title'    => 'Commnet for user'.$userid->display_name,
          'post_status'   => 'publish',
          'post_type'   => 'usercmt',
          'meta_input' => [
                            'from' => $currentid,
                            'to'=> $userid,
                            'comment'=> $comment,
                        ]
        );
        wp_insert_post( $my_post );
        echo json_encode( array( 'result' => 1 ));
    } else {
        echo json_encode( array( 'result' => 0 ));
    }
    exit;
}

function pdd_meta_box() {
    add_meta_box( 'thong-tin', 'Thông tin nhân viên', 'pdd_thongtin_output', 'lesson learn' );
}
add_action( 'add_meta_boxes', 'pdd_meta_box' );

function pdd_thongtin_output( $post ) { 
    $user_post = get_post_meta( $post->ID, 'user_post', true );
    wp_nonce_field( 'save_thongtin', 'thongtin_nonce' );
?>
    <label for="user_post">Employee's Name:</label>
    <input type="hidden" id="user_post" name="user_post" value="<?php echo wp_get_current_user()->ID; ?>" style="width:90%;"/>
    <p><?php echo get_userdata( $user_post )->display_name; ?></p>
<?php 
    if(wp_get_current_user()->ID != $user_post && !current_user_can('administrator') && get_current_screen()->action != 'add' ){
        header('Location:' . site_url());
    }
}

function pdd_thongtin_save( $post_id ) {
    if($_POST) {
        $thongtin_nonce = $_POST['thongtin_nonce'];
        // Kiểm tra nếu nonce chưa được gán giá trị
        if( !isset( $thongtin_nonce ) ) {
            return;
        }
        // Kiểm tra nếu giá trị nonce không trùng khớp
        if( !wp_verify_nonce( $thongtin_nonce, 'save_thongtin' ) ) {
            return;
        }
 
    
        $user_post = sanitize_text_field( $_POST['user_post'] );
        update_post_meta( $post_id, 'user_post', $user_post );
    }
}
add_action( 'save_post', 'pdd_thongtin_save' );

//Delete Lesson Learn
add_action('wp_ajax_delete_lesson', 'delete_lesson');
function delete_lesson() {
    $post_id = $_POST['post_id'];
    if(wp_get_current_user()->ID == get_field('user_post',$post_id) || current_user_can( 'administrator' )){
        wp_delete_post( $post_id, false);
        echo json_encode( array( 'result' => 1 ));
    } else {
        echo json_encode( array( 'result' => 0 ));
    }
    exit;
}

