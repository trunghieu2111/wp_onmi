<?php
add_filter( 'thememove_import_demos', 'tm_heli_import_demos' );

function tm_heli_import_demos() {
	return array(
		'thememove01' => array(
			'screenshot' => TM_HELI_THEME_ROOT . '/screenshot.png',
			'name'       => TM_HELI_PARENT_THEME_NAME
		),
	);
}

add_filter( 'thememove_import_style', 'tm_heli_import_style' );

function tm_heli_import_style() {
	return array(
		'title_color'  => '#222',
		'link_color'   => '#222',
		'notice_color' => '#222',
		'logo'         => TM_HELI_THEME_ROOT . '/assets/images/logo.svg',
	);
}

add_filter( 'thememove_import_package_url', 'tm_heli_import_package_url' );

function tm_heli_import_package_url() {
	return 'https://www.dropbox.com/s/4ghmkfi1131u4ph/tm-heli-thememove01.zip?dl=1';
}
