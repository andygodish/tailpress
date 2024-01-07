<article id="post-<?php the_ID(); ?>" class="mx-auto max-w-screen-md">

	  <div class="border-b py-6 px-6 flex items-center justify-center">
		<div class="mr-2">
		<header class="entry-header mb-4">
			<?php the_title( sprintf( '<h2 class="entry-title text-xl font-bold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
		</header>
		
		<?php if ( is_search() || is_archive() || is_home() ) : ?>
			
			<div class="entry-summary text-sm">
				<?php the_excerpt(); ?>
			</div>
			
			<?php else : ?>
				
				<div class="entry-content">
					<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'tailpress' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
					)
				);
				
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
		
		<?php endif; ?>
		</div>

		<?php if(has_post_thumbnail()):?>
	      <img src="<?php the_post_thumbnail_url('blog-small');?>" class="rounded"/>
	    <?php endif;?>
		
	  </div>
	</article>
	