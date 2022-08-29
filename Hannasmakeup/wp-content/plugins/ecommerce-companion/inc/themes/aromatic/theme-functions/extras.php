<?php

/*
 *
 * Social Icon
 */
function aromatic_get_social_icon_default() {
	return apply_filters(
		'aromatic_get_social_icon_default', json_encode(
				 array(
				array(
					'icon_value'	  =>  esc_html__( 'fa-facebook', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-google-plus', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_002',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-twitter', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-linkedin', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_004',
				)
			)
		)
	);
}


/*
 *
 * Slider 2 Default
 */
 function aromatic_get_slider2_default() {
	return apply_filters(
		'aromatic_get_slider2_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/aromatic/assets/images/page-slider/banner-slider2.png',
					'title'           => esc_html__( 'new special', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics Collection!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing  elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider2_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/aromatic/assets/images/page-slider/green-bottles.png',
					'title'           => esc_html__( 'new special', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics Collection!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider2_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/aromatic/assets/images/page-slider/cream-tbes.png',
					'title'           => esc_html__( 'new special', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics Collection!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing  elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro   dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider2_003',
				)
			)
		)
	);
}


/*
 *
 * Info 2 Default
 */
 function aromatic_get_info2_default() {
	return apply_filters(
		'aromatic_get_info2_default', json_encode(
				 array(
				array(
					'icon_value'       => 'ja-delivery',
					'title'           => esc_html__( 'Free Delivery', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_001',
				),
				array(
					'icon_value'       => 'ja-support',
					'title'           => esc_html__( 'Online Support 24/7', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_002',
				),
				array(
					'icon_value'       => 'ja-document',
					'title'           => esc_html__( 'Member Discount', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_003',
				),
				array(
					'icon_value'       => 'ja-secure-payment',
					'title'           => esc_html__( '100% Payment Secure', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_004',
				)
			)
		)
	);
}



/**
 * Aromatic Header Social
 */
if ( ! function_exists( 'aromatic_hdr_social' ) ) {
	function  aromatic_hdr_social() {
		$hs_hdr_social	= get_theme_mod( 'hs_hdr_social','1');
		$hdr_social_ttl	= get_theme_mod( 'hdr_social_ttl','Follow us:');
		$social_icons	= get_theme_mod( 'social_icons',aromatic_get_social_icon_default());
		if($hs_hdr_social=='1' ):
	?>	
			<aside class="widget widget_social_widget">
				<?php if(!empty($hdr_social_ttl)): ?>
					<h6 class="widget-title"><?php echo wp_kses_post($hdr_social_ttl); ?> </h6>
				<?php endif; ?>	
				<ul>
					<?php
						$social_icons = json_decode($social_icons);
						if( $social_icons!='' )
						{
						foreach($social_icons as $social_item){	
						$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'aromatic_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
						$social_link = ! empty( $social_item->link ) ? apply_filters( 'aromatic_translate_single_string', $social_item->link, 'Header section' ) : '';
					?>
						<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
					<?php }} ?>
				</ul>
			</aside>
		<?php 
		endif; 
	}
}
add_action( 'aromatic_hdr_social', 'aromatic_hdr_social' );



/**
 * Aromatic Header My Account
 */
if ( ! function_exists( 'aromatic_hdr_account' ) ) {
	function aromatic_hdr_account() {
		$hs_hdr_acc 		= get_theme_mod( 'hs_hdr_acc','1');
		$hdr_acc_btn_lbl 	= get_theme_mod( 'hdr_acc_btn_lbl','My Account');
		if($hs_hdr_acc=='1'  && class_exists( 'woocommerce' )): ?>
			<div class="my-account bt">
				<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="cta-01"><span><?php echo wp_kses_post($hdr_acc_btn_lbl); ?></span></a>
			</div>
		<?php endif;
	}
}
add_action( 'aromatic_hdr_account', 'aromatic_hdr_account' );

/**
 * 
 * Aromatic Premium Links
 * 
 */
 
 if ( ! function_exists( 'aromatic_premium_links' ) ) :
	function aromatic_premium_links() {
		
		$aromatic_premium_url= 'https://sellerthemes.com/aromatic-premium/';
		
		return $aromatic_premium_url;
	}
endif;