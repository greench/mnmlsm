<?php get_header(); ?>




<section id="conductor">
	<header>
	<h3><?php echo date('F j, Y') ?></h3>
	</header>


	<ul class="posts">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li class="post">
			<figure class="hover_select animate">	
				<a class="kudos" href="#comments">
					<div class="circle">
						<div class="filled">&nbsp;</div>
					</div>
					<p class="kcount"><?php comments_popup_link('0', '1', '%'); ?></p>
					<p class="identifier">Comment</p>
					<span class="extid hide"></span>
					<span class="permalink hide"><?php the_title(); ?></span>
				</a>
			</figure>
			<article>
				<h2>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><a class="anchor" href="<?php the_permalink() ?>">&#9875;</a>
				</h2>

				<?php the_content(); ?>

			</article>
		</li>
<?php endwhile; else: ?>
<?php endif; ?>
		<li class="pagination padded">

			<nav class="pagination">
				<div class="buttonize square next">
					<?php next_posts_link('Next &rarr;') ?>
				</div>
				<?php if (is_front_page()) {?>
					<div class="buttonize square prev">
						<?php previous_posts_link('&larr; Prev') ?>
					</div>
				<?php } ?>
			</nav>

		</li>
	</ul>


	</section>

<?php get_footer(); ?>