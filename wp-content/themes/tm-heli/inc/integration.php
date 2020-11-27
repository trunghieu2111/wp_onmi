<?php
define( 'TM_HELI_INTEGRATION_PATH', TM_HELI_PATH . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'integration' );

if ( class_exists( 'Projects' ) ) {
	include( TM_HELI_INTEGRATION_PATH . DIRECTORY_SEPARATOR . 'project.php' );
}
