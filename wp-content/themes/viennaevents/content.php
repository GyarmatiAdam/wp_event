<h2><?php the_title(); ?></h2>
<p><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

<?php the_content(); ?>

<?php comment_form(); ?>
<?php wp_list_comments();?>
<br><hr><br>
