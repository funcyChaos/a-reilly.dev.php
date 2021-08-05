<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<!-- General Meta Settings -->
		<meta charset="<?php bloginfo('charset');?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<?php wp_head();?>
	</head>
	
	<body>
		<div class="<?php if(is_front_page()) echo 'grid-container-index';
		elseif(is_home()) echo 'grid-container-sidebar';
		elseif(is_singular()) echo 'grid-container-post';
		?>">
			<!-- NAV BAR -->
			<nav class="nav-cell" id="nav-cell-change">
				<!-- <i class="fab fa-github-alt fa-2x"></i> -->
				<img src="<?php echo get_theme_file_uri('/images/main-logo.png');?>" alt="ar.d logo">
				<h2>a-reilly.dev</h2>
				<div class="column nav-items" id="nav-id">
					<form class="flex" action="search">
						<input class="nav-form" type="text">
						<button>&ltsearch&gt</button>
					</form>
					<ul>
						<li>
							<a href="<?php echo site_url();?>" <?php if(is_front_page()) echo 'class="current-nav"';?>>&lthome&gt</a>
						</li>
						<li>
							<a href="<?php echo site_url('/blog');?>" <?php if(get_post_type() == 'post') echo 'class="current-nav"';?>>&ltblog&gt</a>
						</li>
						<li>
							<a href="page.html">&ltabout&gt</a>
						</li>
						<li>
							<a href="#">&ltcontact&gt</a>
						</li>
					</ul>
				</div>
				<script>if (window.innerWidth < 900) document.getElementById('nav-id').classList.add('hide');</script>
				
				<span onclick="navToggle()" class="menu">&ltmenu&gt</span>

			</nav>