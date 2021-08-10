<? get_header();?>

<main class="main-content-cell column blog">

<?
while (have_posts())
{
	the_post() ?>


	<h1>&lt<? the_title();?>&gt</h1>

	<div class="blog-content" id="content">
		<? the_content();?>
	</div>
		
<? } ?>
		
</main>

<script>
if(document.getElementById('content').firstElementChild.classList == 'wp-block-image size-large')
{
	document.getElementById('content').firstElementChild.firstElementChild.style.height = 'calc(100vh - 200px)';
	document.getElementById('content').firstElementChild.firstElementChild.style.width = 'auto';
	document.getElementById('content').firstElementChild.style.textAlign = 'center'
}
</script>

<? get_footer();?>