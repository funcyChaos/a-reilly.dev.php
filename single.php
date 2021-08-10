<? get_header();?>

	<main class="main-content-cell column blog">

<?
	while (have_posts())
	{
		the_post();?>

		<h1>&lt<? the_title();?>&gt</h1>

		<div class="blog-content">
			<? the_content();?>
		</div>

		<div class="flex column">
			<p>author:<? the_Author_posts_link();?></p>
			<p>published:<? the_time('d.m.Y');?></p>
			<p>categorized:<? echo get_the_category_list();?></p>
		</div>

			
			
<? }

	if (comments_open() || get_comments_number())
	{
		comments_template();
	}
?>
	</main>
<? get_footer();?>