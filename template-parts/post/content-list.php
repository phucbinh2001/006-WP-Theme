<?php

/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Type
 * @since Type 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('list-post b-custom-post'); ?>>


	<div class="content">

		<div class="entry-header">
			<?php if ('post' === get_post_type()) { ?>
				<div class="entry-meta">
					<span class="cat-links"><?php the_category(', '); ?></span>
					<!-- <?php type_time_link(); ?> -->
				</div>
			<?php } ?>
			<h2 class="entry-title two-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div><!-- .entry-header -->

		<div class="entry-summary two-line">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

		<p class="author"><?php the_author_link(); ?></p>
	</div>
	<?php if (has_post_thumbnail()) { ?>
		<figure class="entry-thumbnail" id="hello-tui-ne">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('type-medium'); ?>
			</a>
		</figure>
	<?php } ?>

</article><!-- #post-## -->