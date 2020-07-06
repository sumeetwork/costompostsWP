<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1><?php the_title(); ?></h1>
			<?php if( get_field('subtitle') ): ?>
				<h2><?php the_field('subtitle'); ?></h2>
			<?php endif; ?>

			<div class="hero">
				<?php $image = get_field('preview_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>

			<?php if( get_field('cycle_text') ): ?>
				<p><?php the_field('cycle_text'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>



<?php
get_footer();
