<?php get_header(); ?>

        <section role="archive-header">
			<h2>
				<?php if ( is_day() ) : ?>
					<?php printf( __( 'Archives <span>for %s</span>'), get_the_date() ); ?>
				<?php elseif ( is_month() ) : ?>
					<?php printf( __( 'Archives <span>for %s</span>'), get_the_date('m/Y') ); ?>
				<?php elseif ( is_year() ) : ?>
					<?php printf( __( 'Archives <span>for %s</span>'), get_the_date('Y') ); ?>
				<?php else : ?>
					<?php _e( 'Archives Index' ); ?>
				<?php endif; ?>
			</h2>
		</section>
		
		<section>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<section role="article-body">
					<header>
						<p class="title"><?php the_category(', '); ?></p>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
					</header>
					<?php the_excerpt(); ?>
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