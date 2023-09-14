<?
add_action('wp_enqueue_scripts', 'enqueue_custom_styles', 'my_theme_setup');


function my_theme_setup()
{
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");


}

wp_enqueue_script('jquery');

function enqueue_custom_styles()
{
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/style.css');
}

function enqueue_jquery()
{
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_jquery');


function enqueue_bootstrap()
{
    // Enqueue Bootstrap CSS from a CDN

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), '5.3.1');

    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js', array('jquery'), null, true);

    // Enqueue Bootstrap JavaScript from a CDN
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.1', true);


}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');


function create_custom_post_type()
{
    register_post_type(
        'custom_posts',
        array(
            'labels' => array(
                'name' => __('Custom Posts'),
                'singular_name' => __('Custom Post')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'custom-posts'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        )
    );
}
add_action('init', 'create_custom_post_type');

// Convert line breaks to paragraphs in ACF Text Area field
function custom_format_text_area_content($value, $post_id, $field)
{
    if ($field['type'] === 'textarea') {
        // Convert line breaks to paragraphs
        $value = wpautop($value);
    }
    return $value;
}

add_filter('acf/format_value/type=textarea', 'custom_format_text_area_content', 10, 3);


function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyDAKtEv7-awMlUc7ZWaVdmgjAWKlr615lI');
}
add_action('acf/init', 'my_acf_init');


?>