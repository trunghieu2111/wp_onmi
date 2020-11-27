<?php
if ( ! function_exists( 'tm_heli_register_theme_plugins' ) ):
	function tm_heli_register_theme_plugins() {
		$plugins = [
			[
				'name'     => 'ThemeMove Core',
				'slug'     => 'thememove-core',
				'source'   => 'https://www.dropbox.com/s/iqo66yahux1dvll/thememove-core-1.3.8.zip?dl=1',
				'version'  => '1.3.8',
				'required' => true,
			],
			[
				'name'     => 'CMB2',
				'slug'     => 'cmb2',
				'required' => true,
			],
			[
				'name'     => 'WP Bakery Page Builder',
				'slug'     => 'js_composer',
				'source'   => 'https://www.dropbox.com/s/j3754q73te76vs2/js_composer-6.1.zip?dl=1',
				'version'  => '6.1',
				'required' => false,
			],
			[
				'name'     => 'Essential Grid',
				'slug'     => 'essential-grid',
				'source'   => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/391ae6366311f6f0580ce29a29b00fa13016c44c/essential-grid-2.3.6.zip',
				'version'  => '2.3.6',
				'required' => false,
			],
			[
				'name'     => 'Revolution Slider',
				'slug'     => 'revslider',
				'source'   => 'https://www.dropbox.com/s/lw5c6lvf6zekitl/revslider-6.1.5.zip?dl=1',
				'version'  => '6.1.5',
				'required' => false,
			],
			[
				'name'     => 'WooCommerce',
				'slug'     => 'woocommerce',
				'required' => false,
			],
			[
				'name'     => 'Testimonials by WooThemes',
				'slug'     => 'testimonials-by-woothemes',
				'source'   => 'https://www.dropbox.com/s/7w3ua8f7y0okidt/testimonials-by-woothemes.zip?dl=1',
				'required' => false,
			],
			[
				'name'     => 'Projects by WooThemes',
				'slug'     => 'projects-by-woothemes',
				'source'   => 'https://www.dropbox.com/s/702vo29lmyrv6j7/projects-by-woothemes.zip?dl=1',
				'required' => true,
			],
			[
				'name'     => 'MailChimp for WordPress',
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			],
			[
				'name'     => 'Contact Form 7',
				'slug'     => 'contact-form-7',
				'required' => false,
			],
		];

		$config = [
			'id'           => 'tgmpa',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => true,
			'message'      => '',
		];

		tgmpa( $plugins, $config );
	}

	add_action( 'tgmpa_register', 'tm_heli_register_theme_plugins' );
endif;
