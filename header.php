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
			elseif(is_singular() or is_page() or is_search() or is_404()) echo 'grid-container-post';
			?>">
			<!-- NAV BAR -->
			<nav class="nav-cell" id="nav-cell-change">

				<?
				echo '<a href="' . site_url() . '" class="nav-brand">' . '<img src="' . esc_url(wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full')) . '" alt=""></a>';
				?>

				<h2><a href="<? echo site_url();?>" class="nav-brand"><?
					if(is_404()) echo 'who-am-i';
					else echo get_bloginfo('name');
				?></a></h2>

				<div class="column nav-items" id="nav-id">

					<? get_search_form();?>

					<? wp_nav_menu(array('theme_location'=>'headerMenu',
					'container'=>'',
					'menu_class'=>''
					));?>
				</div>
				
				<!-- Add <> to each menu item :D -->
				<script>
					if(window.innerWidth < 900) document.getElementById('nav-id').classList.add('hide');
					const menuItems = document.getElementById('menu-main-menu').getElementsByTagName('li');
				</script>

				<!-- Highlight Nothing if 404 -->
				<?
				if(is_404())
				{ ?>
					<script>
						for(let i = 0; i < menuItems.length; i++)
						{
							menuItems[i].classList.remove('current_page_parent');
						}
					</script> <?
				} ?>

				<script>
					for(let i = 0; i < menuItems.length; i++)
					{
						let htmlContent = menuItems[i].firstChild.innerHTML;
						htmlContent = '&lt' + htmlContent + '&gt';
						menuItems[i].firstChild.innerHTML = htmlContent;
					}
				</script>
				
				<span onclick="navToggle()" class="dropdown_">&ltmenu&gt</span>

			</nav>