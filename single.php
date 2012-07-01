<?php get_header(); ?>

        <section>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<section role="article-body">
					<header>
						<p class="title"><?php the_category(', '); ?></p>
						<h2><?php the_title(); ?></h2>    
					</header>
					<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				</section>
				<footer role="article-footer">
					<span class="right"><?php the_date() ?></span>
				</footer>
			</article>
			
			<?php endwhile; ?>
			<?php else : ?>

			<h2>No matching results.</h2>
			<?php endif; ?>

        </section>
		
		<section class="clearfix" role="pagination">
			<ul>
				<li><?php previous_posts_link('Previous Entries') ?></li>
				<li><?php next_posts_link('Next Entries') ?></li>
			</ul>
		</section>

    </div>
	
<?php get_footer(); ?>