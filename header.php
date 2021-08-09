<!DOCTYPE html>
<html <? language_attributes();?>>
	<head>
		<!-- General Meta Settings -->
		<meta charset="<? bloginfo('charset');?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<? wp_head();?>
	</head>
	
	<body>
		<div class="<? if(is_front_page()) echo 'grid-container-index';
		elseif(is_home() or is_archive()) echo 'grid-container-sidebar';
		elseif(is_singular() or is_page()) echo 'grid-container-post';
		?>">
			<!-- NAV BAR -->
			<nav class="nav-cell" id="nav-cell-change">
				<!-- <i class="fab fa-github-alt fa-2x"></i> -->
				
				<?
					$custom_logo_id = get_theme_mod('custom_logo');
					$custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
					echo '<img src="' . esc_url($custom_logo_url) . '" alt="">';
				?>

				<h2>a-reilly.dev</h2>
				<div class="column nav-items" id="nav-id">
					<form class="flex" action="search">
						<input class="nav-form" type="text">
						<button>&ltsearch&gt</button>
					</form>
					<ul>
						<li>
							<a href="<? echo site_url();?>" <? if(is_front_page()) echo 'class="current-nav"';?>>&lthome&gt</a>
						</li>
						<li>
							<a href="<? echo site_url('/blog');?>" <? if(get_post_type() == 'post') echo 'class="current-nav"';?>>&ltblog&gt</a>
						</li>
						<li>
							<a href="<? echo site_url('/about');?>" <? if(is_page('about')) echo 'class="current-nav"';?>>&ltabout&gt</a>
						</li>
						<li>
							<a href="<? echo site_url('/contact');?>" <? if(is_page('contact')) echo 'class="current-nav"';?>>&ltcontact&gt</a>
						</li>
					</ul>
				</div>
				<script>if (window.innerWidth < 900) document.getElementById('nav-id').classList.add('hide');</script>
				
				<span onclick="navToggle()" class="menu">&ltmenu&gt</span>

			</nav>