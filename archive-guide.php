<? get_header();?>

<div class="sidebar-cell" id="lcell">
<?
$args = array(
	'post_type'      => 'guide',
	'posts_per_page' => -1,
	'post_status'    => 'publish'
);

$the_query = new WP_Query( $args );
$my_categories = array();
if ( $the_query->have_posts() )
{
while ( $the_query->have_posts() ) {
$the_query->the_post();

$terms = get_the_terms( get_the_ID(), 'category' );
if ( $terms && ! is_wp_error( $terms ) ) : 
foreach ( $terms as $term ) {
if(!in_array($term->term_id, $my_categories))
	$my_categories[] = $term->term_id;
}   
endif;  
}
wp_reset_postdata();
}

if(sizeof($my_categories)) {
foreach ($my_categories as $term_id) {
$category = get_term_by('id', $term_id, 'category');
if($category->slug!="all-articles") {
?>
<a href="<?php echo esc_url(get_category_link($category->term_id));?>"><?php echo $category->name; ?></a>
<?php
}
}
}
?>
</div>

<main class="main-content-cell column justify-content-center">

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