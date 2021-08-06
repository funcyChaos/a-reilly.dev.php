<?php

	get_header();

	while (have_posts())
	{
		the_post()?>

		<main class="main-content-cell column blog">

			<h1>&lt<?php the_title();?>&gt</h1>

			<div class="blog-content">
				<?php the_content();?>
			</div>

			<div class="flex column">
				<p>author:<?php the_Author_posts_link();?></p>
				<p>published:<?php the_time('d.m.Y');?></p>
				<p>categorized:<?php echo get_the_category_list();?></p>
			</div>

			
		</main>
	
	<?php }
	get_footer();?>