
	<footer role="footer">
		<div class="page">
		
		<div class="row grid4">
			<div class="grid first">
				<h3>Categories</h3>
				<ul>
					<?php wp_list_cats(); ?>
				</ul>
			</div>	
			<div class="grid">
				<h3>Archives</h3>
				<ul>
					<?php wp_get_archives() ?>
				</ul>
			</div>
			<div class="grid">
				<h3>Blogroll</h3>
				<ul>
					<?php wp_list_bookmarks("categorize=&title_li="); ?>
				</ul>
			</div>
			<div class="grid">
				<h3>About <?php bloginfo('name'); ?></h3>
				<?php the_author_description(); ?>
			</div>
		</div>

		<div class="copyright">
			<p>Copyright &copy; <?php the_time('Y') ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
			<p><a href="<?php echo get_option('home'); ?>">Red Letter Theme</a> by <a href="http://www.iamtimothylong.com">Timothy Long</a></p>
		</div>	
		
		</div>
	</footer>
	
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</body>
</html>