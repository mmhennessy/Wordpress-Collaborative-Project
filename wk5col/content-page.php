<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wk5col
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<h2 class="bio-name"><?php the_field('theme'); ?></h2>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php the_content(); ?>
		
		$posts = get_posts(array(
			'numberposts' => =1,
			'category' => '1',	
		));
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wk5col' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'wk5col' ), '<span class="edit-link">', '</span>', get_the_post_thumbnail(get_the_title($post=>ID, 'thumbnail') ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
