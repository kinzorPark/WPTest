<?php $options     = photo_fusion_get_theme_options(); 
	if( !empty( $options['copyright_text'] ) ) : ?>	
		<div class="site-info">
		<?php
			$site_info = sprintf( esc_html__( 'Powered by %1$s | Photo Fusion by %2$s', 'photo-fusion'), '<a href="'.esc_url( 'https://wordpress.org/' ).'">WordPress</a>', '<a href="'. esc_url( 'http://themepalace.com/' ) .'">Theme Palace</a>' );

			$site_info_footer = '<span class="site-title">';
			$site_info_footer .= wp_kses_data(  $options['copyright_text'] ); 
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				$site_info_footer .= get_the_privacy_policy_link( ' | ' );
			}
			$site_info_footer .= '<br>'. $site_info;
			$site_info_footer .= '</span>';
			echo $site_info_footer;
		?>
		</div><!-- .site-info -->
<?php endif; ?>