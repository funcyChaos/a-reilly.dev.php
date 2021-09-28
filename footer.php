			<footer class="footer-cell">
				<a href="<? echo get_theme_mod('icon_1_link');?>" target="_blank">
					<!-- https://github.com/tinker-dot-bin -->
					<!-- <i title="tinker-dot-bin" class="fas fa-code-branch fa-5x"></i> -->
					<? echo get_theme_mod('custom_icon_1');?>
				</a>
				<?
				if(get_theme_mod('custom_icon_2') != '')
				{
					?>
					<a href="<? echo get_theme_mod('icon_2_link');?>" target="_blank">
						<!-- https://www.instagram.com/austin_reilly_93/ -->
						<!-- <i title="@austin_reilly_93" class="fas fa-hashtag fa-5x"></i> -->
						<? echo get_theme_mod('custom_icon_2');?>
					</a>
					<?
				} ?>
			</footer>
		</div>
		<? wp_footer();?>
	</body>
</html>