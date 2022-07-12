<div id="content" class="main">
    <div class="content-wrapper" id="container">
		<?php
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$args  = [
			'post_type'      => 'product',
			'posts_per_page' => PRODUCTS_PER_PAGE,
			'paged'          => $paged,
		];
		$query = new WP_Query( $args );
		?>
		<?php
		if ( ! is_paged() ) {
			// first page of pagination
			$from = 1;
			$to   = PRODUCTS_PER_PAGE;
		} elseif ( is_paged() && ( $paged === (int) $query->max_num_pages ) ) {
			$to   = $query->found_posts;
			$from = $query->found_posts - $query->post_count + 1;
		} else {
			$to   = $paged * PRODUCTS_PER_PAGE;
			$from = $to - ( PRODUCTS_PER_PAGE - 1 );
		}
		?>
        <div class="view-header"><?php echo $from . ' - ' . $to; ?>
            из <?php echo $query->found_posts; ?> запчастей
        </div>
        <div class="view-content product-list">
            <div class="products">
				<?php
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) :
						$query->the_post();
						wc_get_template_part( 'content', 'product' );
					endwhile;
					?>
					<?php the_posts_pagination( [
						'mid_size'  => 1,
						'prev_text' => esc_html( '< Предыдущая' ),
						'next_text' => esc_html( 'Следующая >' ),
					] ); ?>
					<?php
				} else {
					echo esc_html_e( 'No products found' );
				}
				?>
				<?php wp_reset_postdata(); ?>
            </div><!-- .products -->
        </div>
    </div>
</div>
