<?php

	get_header();

	while (have_posts())
	{
		the_post()?>

		<main class="main-content-cell column blog">
			<h1>&lt<?php the_title();?>&gt</h1>

			<?php the_content();?>

			<div class="flex justify-space-between">
				<p>author:<?php the_Author_posts_link();?></p>
				<p>published:<?php the_time('d.m.Y');?></p>
				<p>categorized:<?php echo get_the_category_list();?></p>
			</div>

			<h1 class="mt-5">comments:</h1>

			<div class="flex column align-items-center">
				<div class="flex justify-space-between wrap comment border">
					<div class="column">
						<i class="far fa-user fa-3x"></i>
					</div>
					<div class="column">
						<h3>mr_user_gravatar_something</h3>
						<p>27.7.2021</p>
					</div>
					<div class="column">
						<p>This is a comment eehh</p>
						<a href="#">reply:</a>
					</div>
				</div>
				<form class="flex column" action="text">
					<label for="input">comment:</label>
					<textarea name="comment" id="comment" cols="30" rows="10">
					</textarea>
					<button>&ltpost&gt</button>
				</form>
			</div>

		</main>
	
	<?php }
	get_footer();?>