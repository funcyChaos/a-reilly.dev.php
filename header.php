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
		elseif(is_singular() or is_page() or is_search()) echo 'grid-container-post';
		?>">
			<!-- NAV BAR -->
			<nav class="nav-cell" id="nav-cell-change">

				<?
					$custom_logo_id = get_theme_mod('custom_logo');
					$custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
					echo '<a href="' . site_url() . '" class="nav-brand">' . '<img src="' . esc_url($custom_logo_url) . '" alt=""></a>';
					// theme_prefix_the_custom_logo();
				?>

				<h2><a href="<? site_url();?>" class="nav-brand">a-reilly.dev</a></h2>

				<div class="column nav-items" id="nav-id">

					<? get_search_form();?>

					<ul>
						<li>
							<a href="<? echo site_url();?>" <? if(is_front_page()) echo 'class="current-nav"';?>>&lthome&gt</a>
						</li>
						<li>
							<a href="<? echo site_url('/blog');?>" <?
								$class;
								if(get_post_type() == 'post') $class = 'class="current-nav"';
								if(is_search()) $class = '';
								echo $class;?>
							>&ltblog&gt</a>
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