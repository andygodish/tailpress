<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()):?>
	  <img src="<?php the_post_thumbnail_url('blog-large');?>"/>
	<?php endif;?>

	<header class="entry-header mb-8">
		<?php the_title( sprintf( '<h1 class="mb-1 entry-title text-2xl lg:text-5xl font-extrabold leading-tight"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

	<div>
	  <?php
	    $tags = get_the_tags();
	    foreach($tags as $tag):?>
		 <a href="<?php echo get_tag_link($tag->term_id);?>" class="bg-primary text-white rounded px-4 py-1 mr-2">
	       <?php echo $tag->name;?>
	     </a>
	  <?php endforeach;?>
	</div>

</article>
