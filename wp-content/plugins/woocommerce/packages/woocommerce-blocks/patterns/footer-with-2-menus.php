<?php
/**
 * Title: Footer with 2 Menus
 * Slug: woocommerce-blocks/footer-with-2-menus
 * Categories: WooCommerce
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"32px","right":"4%","bottom":"32px","left":"4%"},"blockGap":"40px"}}} -->
<div class="wp-block-group alignfull" style="padding-top:32px;padding-right:4%;padding-bottom:32px;padding-left:4%">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"shouldSyncIcon":false} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:navigation /-->
					<!-- wp:navigation /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"16px"}}} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><strong>Join our community</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
				<p style="font-size:14px">Learn about new products and discounts!</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links is-style-logos-only">
				<!-- wp:social-link {"service":"facebook"} /-->
				<!-- wp:social-link {"service":"instagram"} /-->
				<!-- wp:social-link {"service":"twitter"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"}}} -->
			<p style="font-size:12px">@ 2022</p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"12px"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
		<p style="font-size:14px"><em>Built with <a href="https://woocommerce.com/">WooCommerce</a> </em></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
