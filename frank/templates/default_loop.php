<?php
/*
	Template Name: Default Loop
*/
?>
<div class='span-12 last clear content default'>
	<div class='contents span-12 last'>
<?php while ( have_posts() ) : the_post(); ?>
<article itemscope itemtype="http://schema.org/BlogPosting" class='clear'>
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	<section>
		<?php if (!empty($post->post_excerpt)) : ?>
		<p><?php echo get_the_excerpt(); ?> <span class='more-link'><a href="<?php the_permalink(); ?>">Read On&hellip;</a></span></p>
		<?php else : ?>
		<?php the_content('Read On&hellip;'); ?>
		<?php endif; ?>
	</section>
	<footer>
		<ul class='metadata clear'>
			<li class='time'><time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished"><?php the_time('F j, Y'); ?></time></li>
			<li class='author'>By <?php the_author_link(); ?></li>	
			<li>Filed Under <?php the_category(', '); ?></li>											
			<li class='comments'><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></li>
		</ul>
	</footer>
</article>	

<?php endwhile; ?>
	</div>
</div>