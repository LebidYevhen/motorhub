<div class="product">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
       class="product-body">
        <div class="product-pic"
             style="width: 115px; background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
        <div class="product-descr">
            <div class="product-head">
                <h3 class="product-title"><?php echo the_title(); ?></h3>
                <div class="product-param">
                    <span class="vendor-code"><b>Артикул <?php the_field( 'mh_vendor_code' ); ?></b></span>
                    <span class="brand-model"><?php echo get_field( 'mh_brand' ) . ' ' . get_field( 'mh_model' ); ?></span>
                </div>
            </div>
            <div class="product-text">
				<?php
				$product_text_fields = [
					'mh_year_of_issue' => get_field( 'mh_year_of_issue' ),
					'mh_engine'        => get_field( 'mh_engine' ),
					'mh_transmission'  => get_field( 'mh_transmission' ),
					'mh_body'          => get_field( 'mh_body' ),
				];

				echo implode( ', ', $product_text_fields );
				?>
            </div>
        </div>
    </a>
    <div class="product-aside">
        <div class="product-cost">
			<?php $product       = wc_get_product( get_the_ID() );
			$product_cost_fields = [
				'product_price' => $product->get_price(),
				'currency'      => get_woocommerce_currency(),
			];

			echo implode( ' ', $product_cost_fields );
			?>
        </div>
        <div class="product-aside-item">
            <a href="tel:+375296250475">+375 29 625-04-75</a>
            <a href="tel:+375336250475">+375 33 625-04-75</a>
        </div>
    </div>
</div>
