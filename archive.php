<? get_header();?>

	<div class="sidebar-cell" id="lcell">
		<a href="<? echo site_url('/blog');?>">&ltall&gt</a>
		<? 
		$currentCategory = get_queried_object();
		foreach(get_categories() as $category) : ?>
			<a
				<? if($currentCategory->term_id == $category->term_id)echo 'class="current-category"';?>
				href="<? echo esc_url(get_category_link($category->term_id));?>">
					&lt<? echo $category->name;?>&gt
			</a><?
 		endforeach;?>
	</div>

	<main class="main-content-cell column justify-start p0">

		<?
		while (have_posts())
		{
			the_post();?>

			<div class="blog-preview">
				<div class="flex">
					<a href="<? the_permalink();?>">
						<h1>&lt<? the_title();?>&gt</h1>
					</a>
				</div>
				<div class="flex justify-space-around wrap bp-col">
					<div class="flex column justify-space-between ex-size">
						<div class="blog-excerpt">
							<? the_excerpt();?>
							<a href="<? the_permalink();?>">Continue reading</a>
						</div>
						<div class="blog-data">
							<p>author:<? the_Author_posts_link();?></p>
							<p>published:<? the_time('d.m.Y');?></p>
							<p>categorized:<? echo get_the_category_list();?></p>
						</div>
					</div>
					<div class="column">
						<? the_post_thumbnail('full'); ?>
					</div>
				</div>
			</div>

		<? } ?>

		<div class="flex justify-center">
			<? echo paginate_links();?>
		</div>

	</main>


<? get_footer();?>