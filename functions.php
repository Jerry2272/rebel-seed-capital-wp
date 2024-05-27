<?php
/**
 * rsc functions and definitions.
 */

if ( ! function_exists( 'rsc_setup' ) ) {
    function rsc_setup() {
        load_theme_textdomain( 'rsc', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support(
            'custom-background',
            apply_filters(
                'rsc_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

        register_nav_menus(
            array(
                'primary'        => esc_html__( 'Primary', 'rsc' ),
                'explore'         => esc_html__( 'Explore Menu', 'rsc' ),
                'contact'         => esc_html__( 'Contact Menu', 'rsc' ),
                'socials'         => esc_html__( 'Socials Menu', 'rsc' ),
                'header_action'  => esc_html__( 'Header Action', 'rsc' ),
                'invest'  => esc_html__( 'Invest Industry', 'rsc' ),
            )
        );

        add_filter( 'show_admin_bar', '__return_false' );
    }
}
add_action( 'after_setup_theme', 'rsc_setup' );

function rsc_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'rsc_content_width', 1170 );
}
add_action( 'after_setup_theme', 'rsc_content_width', 0 );

function rsc_sidebar_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'rsc' ),
            'id'            => 'default-sidebar',
            'description'   => esc_html__( 'Add widgets here.', 'rsc' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'rsc_sidebar_widgets_init' );

function rsc_public_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), wp_rand(), 'all' );
    wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/font_6/css/all.min.css', array(), wp_rand(), 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/boots/animate.min.css', array(), wp_rand(), 'all' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), wp_rand(), 'all' );
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', array(), wp_rand(), 'all' );
    wp_enqueue_style( 'owl_default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array('jquery'), wp_rand(), 'all' );

    wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), wp_rand(), 'all' );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array( 'jquery' ), wp_rand(), true );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/javascript/jquery.min.js', array( 'jquery' ), wp_rand(), true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/javascript/owl.carousel.min.js', array( 'jquery' ), wp_rand(), true );
    wp_enqueue_script( 'googleapis','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array( 'jquery' ), wp_rand(), true );
    wp_enqueue_script( 'owl','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), wp_rand(), true );
    wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/javascript/js.js', array( 'jquery' ), wp_rand(), true );
    wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/javascript/index.js', array( 'jquery' ), wp_rand(), true );
}
add_action( 'wp_enqueue_scripts', 'rsc_public_scripts' );

require_once('bootstrap_5_wp_nav_menu_walker.php');

function remove_menu_item_classes($classes, $item, $args) {
    $classes_to_remove = array(
        'menu-item',
        'menu-item-type-custom',
        'menu-item-object-custom',
        'nav-item-8'
    );

    $classes = array_diff($classes, $classes_to_remove);
    return $classes;
}

add_action( 'admin_enqueue_scripts', 'admin_enqueue_scripts_callback' );

function admin_enqueue_scripts_callback() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
    wp_enqueue_script('uploaderjs', get_stylesheet_directory_uri() . '/assets/javascript/uploader.js', array(), "1.0", true);
}

add_filter('nav_menu_css_class', 'remove_menu_item_classes', 10, 3);

add_action( 'category_add_form_fields', 'category_add_form_fields_callback' );
function category_add_form_fields_callback() {
    $image_id = null;
    ?>
    <div id="category_custom_image"></div>
    <input type="hidden" id="category_custom_image_url" name="category_custom_image_url">
    <div style="margin-bottom: 20px;">
        <span>Category Image </span>
        <a href="#" class="button custom-button-upload" id="custom-button-upload">Upload image</a>
        <a href="#" class="button custom-button-remove" id="custom-button-remove" style="display: none">Remove image</a>
    </div>
    <?php 
}

add_action( 'create_term', 'custom_create_term_callback' );
function custom_create_term_callback($term_id) {
    add_term_meta( $term_id, 'term_image', esc_url($_REQUEST['category_custom_image_url']) );
}

add_action ( 'category_edit_form_fields', 'category_edit_form_fields_callback', 10, 2 );
function category_edit_form_fields_callback($ttObj, $taxonomy) {
    $term_id = $ttObj->term_id;
    $image = get_term_meta( $term_id, 'term_image', true );
    ?>
    <tr class="form-field term-image-wrap">
        <th scope="row"><label for="image">Image</label></th>
        <td>
            <?php if ( $image ): ?>
            <span id="category_custom_image">
                <img src="<?php echo esc_url($image); ?>" style="width: 100%"/>
            </span>
            <input type="hidden" id="category_custom_image_url" name="category_custom_image_url">
            <span>
                <a href="#" class="button custom-button-upload" id="custom-button-upload" style="display: none">Upload image</a>
                <a href="#" class="button custom-button-remove">Remove image</a>                    
            </span>
            <?php else: ?>
            <span id="category_custom_image"></span>
            <input type="hidden" id="category_custom_image_url" name="category_custom_image_url">
            <span>
                <a href="#" class="button custom-button-upload" id="custom-button-upload">Upload image</a>
                <a href="#" class="button custom-button-remove" style="display: none">Remove image</a>
            </span>
            <?php endif; ?>
        </td>
    </tr>
    <?php
}

add_action( 'edit_term', 'edit_term_callback' );
function edit_term_callback($term_id) {
    $image = get_term_meta( $term_id, 'term_image' );
    if ( $image )
        update_term_meta( $term_id, 'term_image', esc_url( $_POST['category_custom_image_url']) );
    else
        add_term_meta( $term_id, 'term_image', esc_url( $_POST['category_custom_image_url']) );
}

// Custom Walker Class
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

        $output .= sprintf(
            '<li class="listInfo %s" style="cursor: pointer;">',
            esc_attr($class_names)
        );

        $output .= sprintf(
            '<sup></sup> <span>%s</span>',
            esc_html($item->title),
            esc_html($item->title)
        );

        if (!empty($item->description)) {
            $output .= sprintf(
                '<div class="contentInfoDisplay">
                    <p>%s</p>
                </div>',
                esc_html($item->description)
            );
        }

        $output .= '</li>';
    }
}
