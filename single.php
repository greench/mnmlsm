<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section id="conductor">
	
	<header>
		<?php the_time('M jS, Y') ?> // <?php the_category(', ') ?>
	</header> 


	<ul class="posts">

		<li class="post">
			<figure class="hover_select animate">	
				<a class="kudos" href="#comments">
					<div class="circle">
						<div class="filled">&nbsp;</div>
					</div>
					<p class="kcount"><?php comments_popup_link('0', '1', '%'); ?></p>
					<p cla  ss="identifier">Comment</p>
					<span class="extid hide"></span>
					<span class="permalink hide"><?php the_title(); ?></span>
				</a>
			</figure>
			<article>
				<h2>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><a class="anchor" href="#">&#182;</a>
				</h2>

				<?php the_content(); ?>

			</article>
		</li>
<?php endwhile; else: ?>
<?php endif; ?>
<?php comments_template(); ?>
		<li class="pagination padded">

			<nav class="pagination">
			
				<a class="buttonize square prev" href="<?php echo get_settings('home'); ?>">&#8592; Back to blog</a>
			</nav>

		</li>
	</ul>


	</section>

<?php get_footer(); ?>