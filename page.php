<?php get_header(); ?>

        <section role="page">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<section>
					<header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
					</header>
					<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				</section>
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