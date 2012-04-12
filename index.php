<?php get_header(); ?>




<section id="conductor">
	<!-- 
	<header>
		<h3 class="quote">"Make everything as simple as possible, but not simpler." Albert Einstein</h3>
	</header> -->


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
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><a class="anchor" href="#">&#182;</a>
				</h2>

				<?php the_content(); ?>

			</article>
		</li>
<?php endwhile; else: ?>
<?php endif; ?>
	</ul>


	</section>

<?php get_footer(); ?>