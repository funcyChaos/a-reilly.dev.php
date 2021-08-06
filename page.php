<?php get_header();

while (have_posts())
{
	the_post()?>

	<main class="main-content-cell column blog">

		<h1>&lt<?php the_title();?>&gt</h1>

		<div class="blog-content" id="content">
			<?php the_content();?>
		</div>
		
	</main>
	<?php }

get_footer();?>