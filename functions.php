<?php
// max width for oEmbeds
if ( ! isset( $content_width ) )
	$content_width = 604;

function jodiejoemusic_setup() {

	/**
	 * Setup for the theme to display and that is needed to run the theme properly in wordpress
	 */

	// theme styles for the visual editor that resemble the theme styles | font, color, icons, and column width
	add_editor_style(  );

	// Adds RSS feed links to <head> for posts and comments
	add_theme_support( 'automatic_feed_links' );

	// This allows the use of HTML5 markup for the comment forms, search forms, and comment lists
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

	// Adds more custom support for posts see http://codex.wordpress.org/Post_Formats for more info
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ) );

	// This theme uses wp_nav_menu() in three locations
	register_nav_menus( array(
		'main_menu' => 'Top Navigation Menu',
		'utility_menu' => 'Utility Area',
		'footer_menu' => 'Footer Menu Area'
	) );

	// turns on the use of featured images, displayed on "standard" posts and pages
	add_theme_support( 'post-thumbnails' );

}
add_action('after_setup_theme', 'jodiejoemusic_setup');

/**
 * Enqueues scripts and styles for front end.
 * @since Jodie Joe Music 1.0
 * @return void
 */

function jj_scripts_styles(){

	// Adds JavaScript to pages with the comment form to support sites with threaded comments (when in use)
	if( is_singular() && comments_open() && get_option('thread_comments') )
		wp_enqueue_script( 'comment-reply' );

	// Load scripts for HTML5up framework
	wp_enqueue_script( 'html5-dropotron', get_template_directory_uri() . '/js/jquery.dropotron.js', array('jquery'), true );
	wp_enqueue_script( 'html5-config', get_template_directory_uri() . '/js/config.js', array('jquery'), true );  
    wp_enqueue_script( 'html5-min', get_template_directory_uri() . '/js/skel.min.js', array('jquery'), true );
    wp_enqueue_script( 'html5-panels', get_template_directory_uri() . '/js/skel-panels.min.js', array('jquery'), true );

    // Load styles for HTML5up framework
    wp_enqueue_style( 'html5-noscript', get_template_directory_uri() . '/css/skel-noscript.css', array(), 'all' );  
    wp_enqueue_style( 'html5-style', get_template_directory_uri() . '/css/style.css', array(), 'all' );
    wp_enqueue_style( 'html5-desktop', get_template_directory_uri() . '/css/style-desktop.css', array(), 'all' );

    // Load main style.css
    wp_enqueue_style( 'jodiejoemusic-style', get_stylesheet_uri(), array(), 'all' );

    // Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'html5-ie', get_template_directory_uri() . '/css/ie8.css', array( 'html5-style' ), null );
	wp_style_add_data( 'html5-ie', 'conditional', 'lt IE 8' );

}
add_action( 'wp_enqueue_scripts', 'jj_scripts_styles' );

/**
 * Create a nicely formatted and more specific title element text for output
 * @since Jodie Joe Music 1.0
 *
 * @param string $title Default title text for current view
 * @param string $sep Optional separator
 * @return string The filtered title
 */

function jj_wp_title( $title, $sep ){
	global $paged, $page;

	if( is_feed() )
		return $title;

	// Add the site name
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page
	$site_description = get_bloginfo( 'description', 'display' );
	if( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary
	if( $paged >= 2 || $page >= 2 )
		$title = "$title $sep" . sprintf( __( 'Page %s', 'jodiejoemusic' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'jj_wp_title', 10, 2 );

/**
 * Register one widget area
 *
 * @since Jodie Joe Music 1.0
 *
 * @return void
 */
function jj_widgets_init(){
	register_sidebar( array(
		'name'			=>	'Footer Widget Area',
		'description'	=>	'Appears in the footer section of the site.',	
		'before_widget'	=>	'<section id="%1$s" class="widget %2$s">',
		'after_widget'	=>	'</section>',
		'before_title'	=>	'<h3 class="widget-title icon">',
		'after_title'	=>	'</h3>'
	));
}
add_action( 'widgets_init', 'jj_widgets_init' );


function jj_excerpt_length(){
	return 25;
}
add_filter( 'excerpt_length', 'jj_excerpt_length' );

function jj_readmore(){
	return '<a href="' . get_permalink( ) . '" class="readmore">Read More</a>';
}
add_filter( 'excerpt_more', 'jj_readmore' );

/**
 * callback function for comments_template.php
 */
function awesome_comment_callback($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>

		<?php //EDIT BELOW THIS POINT ?>

		<div class="comment-author vcard">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<span class="fn"><?php comment_author_link(); ?></span>
		</div>

<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
<?php endif; ?>

	<?php comment_text() ?>

	<div class="comment-meta commentmetadata">
		<span class="comment-date"><?php comment_date('F j, Y'); ?></span>
		<span class="comment-link"><a href="<?php comment_link(); ?>">Link</a></span>
		<span class="edit-comment"><?php edit_comment_link(); ?></span>
		<div class="comment-reply-button">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	</div><!--comment-meta -->		

	
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
        }