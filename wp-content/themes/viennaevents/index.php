<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-9 text-justify">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
			endwhile; endif;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>