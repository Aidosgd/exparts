<?php
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer contact area',
        'id'   => 'footer_contact',
        'description'   => 'This is a widgetized area.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
}

function format_comment($comment, $args, $depth) {

$GLOBALS['comment'] = $comment; ?>

<div class="media">
    <a class="pull-left" href="#">
        <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
    </a>
    <div class="media-body">
        <h4 class="media-heading"><?php printf(__('%s'), get_comment_author_link()) ?>
            <small><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></small>
        </h4>
        <?php comment_text(); ?>
    </div>
</div>

<?php } ?>
