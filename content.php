<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_date(); ?> von <a href="#"><?php the_author(); ?></a></p>

	<!-- only the first 55 signs -->
 	<?php the_excerpt(); ?>

</div><!-- /.blog-post -->