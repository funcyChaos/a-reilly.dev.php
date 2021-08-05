<?php get_header();?>

	<div class="sidebar-cell" id="lcell">
		<a href="">&ltmaking/hacking&gt</a>
		<a href="">&lttrucks/cars&gt</a>
		<a href="">&ltcoding&gt</a>
		<a href="">&ltdrones&gt</a>
	</div>

	<main class="main-content-cell column justify-start p0">

	<?php
		while (have_posts())
		{
			the_post();?>

			<div class="blog-preview">
				<div class="flex">
					<a href="<?php the_permalink();?>">
						<h1>&lt<?php the_title();?>&gt</h1>
					</a>
				</div>
				<div class="flex justify-space-around wrap bp-col">
					<div class="column ex-size justify-space-between">
						<div class="blog-excerpt">
							<?php the_excerpt();?>
							<a href="blog-post.html">Continue reading</a>
						</div>
						<div class="blog-data">
							<p>author:<?php the_Author_posts_link();?></p>
							<p>published:<?php the_time('d.m.Y');?></p>
							<p>categorized:<?php echo get_the_category_list();?></p>
							<!-- <p>Tags:cars,driftcar,motorswap,race car</p> -->
						</div>
					</div>
					<div class="column">
						<?php the_post_thumbnail('medium');?>
					</div>
				</div>
			</div>

			<?php }
		?>
		<div class="flex">
			<?php echo paginate_links();?>
		</div>

	</main>


<?php get_footer();?>