<?php get_header(); ?>

<section id="conductor">
		<header>
			<h3>404</h3>
		</header>

	<ul class="posts">
		<li class="post">
			<article>
				<h2>
				Page Not Found	
				</h2>

				<p>The content you looking for is removed or never existed. Sorry.</p>

			</article>
		</li>

		<li class="pagination padded">
			<nav class="pagination">
				<div class="buttonize square prev">
					<a href="<?php echo get_settings('home'); ?>">&#8592; Back to blog</a>
				</div>
			</nav>
		</li>
	</ul>
	</section>

<?php get_footer(); ?>